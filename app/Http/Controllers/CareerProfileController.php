<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCareerProfileRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class CareerProfileController extends Controller
{
    public function edit(): View
    {
        $profile = auth()->user()->profile;

        return view('career-profile.edit', compact('profile'));
    }

    public function update(UpdateCareerProfileRequest $request): RedirectResponse
    {
        $profile = auth()->user()->profile;

        $profile->update($request->validated());

        return redirect()
            ->route('career-profile.edit')
            ->with('success', 'Career profile berhasil diperbarui.');
    }
}
