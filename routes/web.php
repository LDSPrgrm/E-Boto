<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\CandidateController;
use App\Http\Middleware\AdminMiddleware;

require __DIR__ . '/auth.php';

Route::get('/about', function () {
    return view('about/about');
})->name('about');

Route::get('/about-us', function () {
    return view('index/about');
})->name('about-us');

Route::get('/how-to-vote', function () {
    return view('index/how_to_vote');
})->name('how-to-vote');

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('index/index');
    })->name('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/vote', function () {
        return view('vote/vote');
    })->name('vote');

    Route::get('/vote/already_voted', function () {
        return view('vote/already_voted');
    })->name('vote/already_voted');

    Route::post('/vote/{province}/{municipality}/{baranggay}', [VoteController::class, 'showBaranggay'])->name('vote/baranggay');
    Route::post('/vote/{province}/{municipality}', [VoteController::class, 'showMunicipal'])->name('vote/municipal');
    Route::post('/vote/{province}', [VoteController::class, 'showProvincial'])->name('vote/provincial');
    Route::get('/vote/presidential', [VoteController::class, 'showPresidential'])->name('vote/presidential');

    Route::post('/submit-votes-baranggay', [VoteController::class, 'submitVotesBaranggay'])->name('submit_votes_baranggay');
    Route::post('/submit-votes-municipal', [VoteController::class, 'submitVotesMunicipal'])->name('submit_votes_municipal');
    Route::post('/submit-votes-provincial', [VoteController::class, 'submitVotesProvincial'])->name('submit_votes_provincial');
    Route::post('/submit-votes-presidential', [VoteController::class, 'submitVotesPresidential'])->name('submit_votes_presidential');

    Route::get('/results', [VoteController::class, 'electionResults'])->name('results');
});

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin/dashboard');
    })->name('admin/dashboard');

    Route::get('admin/assign', [CandidateController::class, 'showVoters'])->name('admin/assign');
    Route::post('add-new-voter', [CandidateController::class, 'addNewVoter'])->name('add_new_voter');
    Route::post('save-candidate-status', [CandidateController::class, 'updateCandidacy'])->name('save_candidate_status');
});