<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function showPresidential()
    {
        $year = 2024;
        $type = 'presidential';
        if (Auth::user()->votedPresidential2024) {
            return view('vote/already_voted', compact('year', 'type'));
        }

        $presidents = User::where('position', 'President')
            ->where('position_type', 'Presidential')
            ->get();

        $vice_presidents = User::where('position', 'Vice President')
            ->where('position_type', 'Presidential')
            ->get();

        $senators = User::where('position', 'Senator')
            ->where('position_type', 'Presidential')
            ->get();

        return view('vote/presidential', compact('presidents', 'vice_presidents', 'senators'));
    }

    public function showProvincial(Request $request, $province)
    {
        $year = 2024;
        $type = 'provincial';
        if ($request->user()->votedProvincial2024) {
            return view('vote/already_voted', compact('year', 'type'));
        }

        $governors = User::where('province', $province)
            ->where('position', 'Governor')
            ->where('position_type', 'Provincial')
            ->get();

        $vice_governors = User::where('province', $province)
            ->where('position', 'Vice Governor')
            ->where('position_type', 'Provincial')
            ->get();

        $sangguniang_panglalawigans = User::where('province', $province)
            ->where('position', 'Sangguniang Panglalawigan')
            ->where('position_type', 'Provincial')
            ->get();

        return view('vote/provincial', compact('province', 'governors', 'vice_governors', 'sangguniang_panglalawigans'));
    }

    public function showMunicipal(Request $request, $province, $municipality)
    {
        $year = 2024;
        $type = 'municipal';
        if ($request->user()->votedMunicipal2024) {
            return view('vote/already_voted', compact('year', 'type'));
        }

        $mayors = User::where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Mayor')
            ->where('position_type', 'Municipal')
            ->get();

        $vice_mayors = User::where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Vice Mayor')
            ->where('position_type', 'Municipal')
            ->get();

        $sangguniang_bayans = User::where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Sangguniang Bayan')
            ->where('position_type', 'Municipal')
            ->get();

        return view('vote/municipal', compact('municipality', 'province', 'mayors', 'vice_mayors', 'sangguniang_bayans'));
    }

    public function showBaranggay(Request $request, $province, $municipality, $baranggay)
    {
        $year = 2024;
        $type = 'baranggay';
        if ($request->user()->votedBaranggay2024) {
            return view('vote/already_voted', compact('year', 'type'));
        }

        $captains = User::where('baranggay', $baranggay)
            ->where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Captain')
            ->where('position_type', 'Baranggay')
            ->get();

        $sangguniang_baranggays = User::where('baranggay', $baranggay)
            ->where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Sangguniang Baranggay')
            ->where('position_type', 'Baranggay')
            ->get();

        return view('vote/baranggay', compact('baranggay', 'municipality', 'province', 'captains', 'sangguniang_baranggays'));
    }

    public function electionResults(Request $request)
    {
        $baranggay = $request->input('baranggay');
        $municipality = $request->input('municipality');
        $province = $request->input('province');

        // Presidential
        $presidents = User::where('position', 'President')
            ->where('position_type', 'Presidential')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        $vice_presidents = User::where('position', 'Vice President')
            ->where('position_type', 'Presidential')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        $senators = User::where('position', 'Senator')
            ->where('position_type', 'Presidential')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        // Provincial
        $governors = User::where('province', $province)
            ->where('position', 'Governor')
            ->where('position_type', 'Provincial')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        $vice_governors = User::where('province', $province)
            ->where('position', 'Vice Governor')
            ->where('position_type', 'Provincial')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        $sangguniang_panglalawigans = User::where('province', $province)
            ->where('position', 'Sangguniang Panglalawigan')
            ->where('position_type', 'Provincial')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        // Municipal
        $mayors = User::where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Mayor')
            ->where('position_type', 'Municipal')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        $vice_mayors = User::where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Vice Mayor')
            ->where('position_type', 'Municipal')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        $sangguniang_bayans = User::where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Sangguniang Bayan')
            ->where('position_type', 'Municipal')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        // Baranggay
        $captains = User::where('baranggay', $baranggay)
            ->where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Captain')
            ->where('position_type', 'Baranggay')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        $sangguniang_baranggays = User::where('baranggay', $baranggay)
            ->where('municipality', $municipality)
            ->where('province', $province)
            ->where('position', 'Sangguniang Baranggay')
            ->where('position_type', 'Baranggay')
            ->whereNotNull('votes')
            ->orderByDesc('votes')
            ->get();

        return view('results.results', compact('baranggay', 'municipality', 'province', 'presidents', 'vice_presidents', 'senators', 'governors', 'vice_governors', 'sangguniang_panglalawigans', 'mayors', 'vice_mayors', 'sangguniang_bayans', 'captains', 'sangguniang_baranggays'));
    }

    public function submitVotesPresidential(Request $request)
    {
        if ($request->input('president_id')) {
            $presidentId = $request->input('president_id');
            User::where('_id', $presidentId)->increment('votes');
        }

        if ($request->input('vice_president_id')) {
            $vicePresidentId = $request->input('vice_president_id');
            User::where('_id', $vicePresidentId)->increment('votes');
        }

        if ($request->input('senators')) {
            $selectedSenators = $request->input('senators');
            foreach ($selectedSenators as $selectedSenator) {
                User::where('_id', $selectedSenator)->increment('votes');
            }
        }

        User::where('_id', Auth::id())->update(['votedPresidential2024' => true]);

        return redirect()->route('dashboard')->with('success', 'Votes submitted successfully!');
    }

    public function submitVotesProvincial(Request $request)
    {
        if ($request->input('governor_id')) {
            $governorId = $request->input('governor_id');
            User::where('_id', $governorId)->increment('votes');
        }

        if ($request->input('vice_governor_id')) {
            $viceGovernorId = $request->input('vice_governor_id');
            User::where('_id', $viceGovernorId)->increment('votes');
        }

        if ($request->input('sangguniang_panglalawigans')) {
            $selectedLalawigans = $request->input('sangguniang_panglalawigans');
            foreach ($selectedLalawigans as $selectedLalawigan) {
                User::where('_id', $selectedLalawigan)->increment('votes');
            }
        }

        User::where('_id', Auth::id())->update(['votedProvincial2024' => true]);

        return redirect()->route('dashboard')->with('success', 'Votes submitted successfully!');
    }

    public function submitVotesMunicipal(Request $request)
    {
        if ($request->input('mayor_id')) {
            $mayorId = $request->input('mayor_id');
            User::where('_id', $mayorId)->increment('votes');
        }

        if ($request->input('vice_mayor_id')) {
            $viceMayorId = $request->input('vice_mayor_id');
            User::where('_id', $viceMayorId)->increment('votes');
        }

        if ($request->input('sangguniang_bayans')) {
            $selectedBayans = $request->input('sangguniang_bayans');
            foreach ($selectedBayans as $selectedBayan) {
                User::where('_id', $selectedBayan)->increment('votes');
            }
        }

        User::where('_id', Auth::id())->update(['votedMunicipal2024' => true]);

        return redirect()->route('dashboard')->with('success', 'Votes submitted successfully!');
    }

    public function submitVotesBaranggay(Request $request)
    {
        if ($request->input('captain_id')) {
            $captainId = $request->input('captain_id');
            User::where('_id', $captainId)->increment('votes');
        }

        if ($request->input('sangguniang_baranggays')) {
            $selectedBaranggays = $request->input('sangguniang_baranggays');
            foreach ($selectedBaranggays as $selectedBaranggay) {
                User::where('_id', $selectedBaranggay)->increment('votes');
            }
        }

        User::where('_id', Auth::id())->update(['votedBaranggay2024' => true]);

        return redirect()->route('dashboard')->with('success', 'Votes submitted successfully!');
    }
}
