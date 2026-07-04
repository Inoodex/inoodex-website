<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->paginate(10);
        return view('admin.teams.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'bio' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->bio = $request->bio;
        $team->status = $request->status ?? 'active';

        if ($request->hasFile('image')) {
            $team->image = $request->file('image')->store('teams', 'public');
        }

        $team->save();

        return redirect()->route('admin.teams.index')->with('success', 'Team member added successfully!');
    }


    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'bio' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $team->name = $request->name;
        $team->position = $request->position;
        $team->bio = $request->bio;
        $team->status = $request->status;

        if ($request->hasFile('image')) {
            $team->image = $request->file('image')->store('teams', 'public');
        }

        $team->save();

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully!');
    }


    public function destroy(Team $team)
    {
        if ($team->photo) {
            Storage::disk('public')->delete($team->photo);
        }

        $team->delete();
        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully!');
    }
}
