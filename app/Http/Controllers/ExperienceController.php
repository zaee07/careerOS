<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = auth()->user()
            ->experiences()
            ->latest('start_date')
            ->get();

        return view('experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $request): RedirectResponse
    {
        auth()->user()->experiences()->create(
            $request->validated()
        );

        return redirect()
            ->route('experiences.index')
            ->with('success', 'Experience berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience): View
    {
        abort_unless(
            $experience->user_id === auth()->id(),
            403
        );

        return view('experiences.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        ExperienceRequest $request,
        Experience $experience
    ): RedirectResponse {
        abort_unless(
            $experience->user_id === auth()->id(),
            403
        );

        $experience->update(
            $request->validated()
        );

        return redirect()
            ->route('experiences.index')
            ->with('success', 'Experience berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience): RedirectResponse
    {
        abort_unless(
            $experience->user_id === auth()->id(),
            403
        );

        $experience->delete();

        return redirect()
            ->route('experiences.index')
            ->with('success', 'Experience berhasil dihapus.');
    }
}
