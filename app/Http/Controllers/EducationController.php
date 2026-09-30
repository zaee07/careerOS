<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationRequest;
use App\Models\Education;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = auth()->user()
            ->education()
            ->latest('start_year')
            ->get();

        return view('education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request): RedirectResponse
    {
        auth()->user()->education()->create(
            $request->validated()
        );

        return redirect()
            ->route('educations.index')
            ->with('success', 'education berhasil ditambahkan.');
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
    public function edit(Education $education): View
    {
        abort_unless(
            $education->user_id === auth()->id(),
            403
        );

        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    public function update(
        EducationRequest $request,
        Education $education
    ): RedirectResponse {
        abort_unless(
            $education->user_id === auth()->id(),
            403
        );

        $education->update(
            $request->validated()
        );

        return redirect()
            ->route('educations.index')
            ->with('success', 'education berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    public function destroy(Education $education): RedirectResponse
    {
        abort_unless(
            $education->user_id === auth()->id(),
            403
        );

        $education->delete();

        return redirect()
            ->route('educations.index')
            ->with('success', 'Education berhasil dihapus.');
    }
}
