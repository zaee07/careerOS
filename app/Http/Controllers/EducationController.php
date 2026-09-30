<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
=======
use App\Http\Requests\EducationRequest;
use App\Models\Education;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
>>>>>>> 0150c17 (feat: education, piks profile, update controller)

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
<<<<<<< HEAD
=======
        return view('education.create');
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(Request $request)
    {
        //
=======
    public function store(EducationRequest $request): RedirectResponse
    {
        auth()->user()->education()->create(
            $request->validated()
        );

        return redirect()
            ->route('educations.index')
            ->with('success', 'education berhasil ditambahkan.');
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
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
<<<<<<< HEAD
    public function edit(string $id)
    {
        //
=======
    public function edit(Education $education): View
    {
        abort_unless(
            $education->user_id === auth()->id(),
            403
        );

        return view('education.edit', compact('education'));
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, string $id)
    {
        //
=======
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
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(string $id)
    {
        //
=======
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
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
    }
}
