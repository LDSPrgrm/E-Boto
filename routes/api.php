<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/users', function () {
        return User::all();
    });

    Route::get('/candidates', function () {
        return User::whereNotNull('election')->whereNotNull('position')->get();
    });

    Route::get('/candidates/baranggay/{baranggay}', function ($baranggay) {
        return User::where('address.baranggay', $baranggay)
            ->whereNotNull('election')
            ->whereNotNull('position')
            ->get();
    });

    Route::get('/candidates/municipality/{municipality', function ($municipality) {
        return User::where('address.municipality', $municipality)
            ->whereNotNull('election')
            ->whereNotNull('position')
            ->get();
    });

    Route::get('/candidates/province/{province}', function ($province) {
        return User::where('address.province', $province)
            ->whereNotNull('election')
            ->whereNotNull('position')
            ->get();
    });

    Route::get('/users/{locationType}/{location}', function ($locationType, $location) {
        $allowedFields = ['baranggay', 'municipality', 'province'];

        if (!in_array($locationType, $allowedFields)) {
            return response()->json(['error' => 'Invalid location type.'], 400);
        }

        return User::where("address.$locationType", $location)->get();
    });
});