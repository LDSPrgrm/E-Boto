<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function showVoters()
    {
        $voters = User::whereNotNull('id_issuance_date')
            ->orWhereNotNull('id_valid_until')
            ->get();

        return view('admin/assign', compact('voters'));
    }

    public function addNewVoter(Request $request)
    {
        // Assuming you have 'name', 'email', and 'password' fields in your request
        $userData = $request->only([
            'first_name',
            'middle_name',
            'last_name',
            'suffix',
            'sex',
            'civil_status',
            'birthdate',
            'province',
            'municipality',
            'baranggay',
            'house_no_street_subdivision',
            'id_issuance_date',
            'id_valid_until',
            'email',
            'password'
        ]);

        $user = User::create($userData);

        if ($user) {
            return redirect()->route('admin/assign')->with('success', 'Voter added successfully!');
        }

        return redirect()->back()->with('error', 'Failed to add voter. Please try again.');
    }

    public function updateCandidacy(Request $request)
    {
        $voterId = $request->input('_id');
        $selectedPositionType = $request->input('position_type');
        $selectedPosition = $request->input('position');

        $candidate = User::where('_id', $voterId)->first();
        $previousPositionType = null;
        $previousPosition = null;
        if ($candidate) {
            $previousPositionType = $candidate->position_type;
            $previousPosition = $candidate->position;
            $candidate->position_type = $selectedPositionType;
            $candidate->position = $selectedPosition;
            $candidate->isCandidate = !empty($selectedPositionType);
            $candidate->save();
        } else {
            return response()->json(['message' => 'Candidate status update failed.']);
        }

        $this->updateBallotNumber($candidate, $previousPositionType, $previousPosition);

        return redirect()->route('admin/assign')->with('success', 'Candidate status updated successfully!');
    }

    public function updateBallotNumber($candidate, $previousPositionType, $previousPosition)
    {
        $positionType = $candidate['position_type'];
        $position = $candidate['position'];
        $province = $candidate['province'];
        $municipality = $candidate['municipality'];
        $baranggay = $candidate['baranggay'];

        $candidates = null;
        $previousCandidates = null;

        $query = User::where('position_type', $positionType)
            ->where('position', $position)
            ->orderBy('name.last_name', 'asc');

        switch ($positionType) {
            case 'Provincial':
                $query->where('province', $province);
                break;
            case 'Municipal':
                $query->where('province', $province)
                    ->where('municipality', $municipality);
                break;
            case 'Baranggay':
                $query->where('province', $province)
                    ->where('municipality', $municipality)
                    ->where('baranggay', $baranggay);
                break;
            default:
                // For Presidential position, no additional conditions needed
                break;
        }

        $candidates = $query->get();

        if ($previousPositionType) {
            $previousQuery = User::where('position_type', $previousPositionType)
                ->where('position', $previousPosition)
                ->orderBy('name.last_name', 'asc');

            switch ($previousPositionType) {
                case 'Provincial':
                    $previousQuery->where('province', $province);
                    break;
                case 'Municipal':
                    $previousQuery->where('province', $province)
                        ->where('municipality', $municipality);
                    break;
                case 'Baranggay':
                    $previousQuery->where('province', $province)
                        ->where('municipality', $municipality)
                        ->where('baranggay', $baranggay);
                    break;
                default:
                    // For Presidential position, no additional conditions needed
                    break;
            }

            $previousCandidates = $previousQuery->get();
        }

        $ballotNumber = 1;
        foreach ($candidates as $candidate) {
            $candidate->ballot_number = $ballotNumber;
            $candidate->votes = 0;
            $candidate->save();
            $ballotNumber++;
        }

        if ($previousCandidates) {
            $ballotNumber = 1;
            foreach ($previousCandidates as $previousCandidate) {
                $previousCandidate->ballot_number = $ballotNumber;
                $previousCandidate->votes = 0;
                $previousCandidate->save();
                $ballotNumber++;
            }
        }
    }
}
