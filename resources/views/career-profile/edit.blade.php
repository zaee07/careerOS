<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Career Profile
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
            <div class="mb-6 rounded-lg bg-green-100 p-4 text-green-800">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="mb-6 rounded-lg bg-red-100 p-4 text-red-800">
                <p class="font-medium mb-2">
                    Please fix the following errors:
                </p>

                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">
                            Professional Information
                        </h3>

                        <p class="mt-1 text-sm text-gray-600">
                            Informasi ini akan digunakan untuk CV,
                            cover letter, dan career profile kamu.
                        </p>
                    </div>

                    <form
                        method="POST"
                        action="{{ route('career-profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <div class="space-y-6">

                            {{-- Full Name --}}
                            <div>
                                <label
                                    for="full_name"
                                    class="block text-sm font-medium text-gray-700">
                                    Full Name
                                </label>

                                <input
                                    id="full_name"
                                    name="full_name"
                                    type="text"
                                    value="{{ old('full_name', $profile->full_name) }}"
                                    required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                                @error('full_name')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Headline --}}
                            <div>
                                <label
                                    for="headline"
                                    class="block text-sm font-medium text-gray-700">
                                    Professional Headline
                                </label>

                                <input
                                    id="headline"
                                    name="headline"
                                    type="text"
                                    value="{{ old('headline', $profile->headline) }}"
                                    placeholder="Backend Developer | Laravel | PHP"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                                @error('headline')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Phone --}}
                            <div>
                                <label
                                    for="phone"
                                    class="block text-sm font-medium text-gray-700">
                                    Phone
                                </label>

                                <input
                                    id="phone"
                                    name="phone"
                                    type="text"
                                    value="{{ old('phone', $profile->phone) }}"
                                    placeholder="+62..."
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                                @error('phone')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Location --}}
                            <div>
                                <label
                                    for="location"
                                    class="block text-sm font-medium text-gray-700">
                                    Location
                                </label>

                                <input
                                    id="location"
                                    name="location"
                                    type="text"
                                    value="{{ old('location', $profile->location) }}"
                                    placeholder="Serang, Banten"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                                @error('location')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Website --}}
                            <div>
                                <label
                                    for="website"
                                    class="block text-sm font-medium text-gray-700">
                                    Website
                                </label>

                                <input
                                    id="website"
                                    name="website"
                                    type="url"
                                    value="{{ old('website', $profile->website) }}"
                                    placeholder="https://example.com"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                                @error('website')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- LinkedIn --}}
                            <div>
                                <label
                                    for="linkedin_url"
                                    class="block text-sm font-medium text-gray-700">
                                    LinkedIn
                                </label>

                                <input
                                    id="linkedin_url"
                                    name="linkedin_url"
                                    type="url"
                                    value="{{ old('linkedin_url', $profile->linkedin_url) }}"
                                    placeholder="https://linkedin.com/in/username"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                                @error('linkedin_url')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- GitHub --}}
                            <div>
                                <label
                                    for="github_url"
                                    class="block text-sm font-medium text-gray-700">
                                    GitHub
                                </label>

                                <input
                                    id="github_url"
                                    name="github_url"
                                    type="url"
                                    value="{{ old('github_url', $profile->github_url) }}"
                                    placeholder="https://github.com/username"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">

                                @error('github_url')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Summary --}}
                            <div>
                                <label
                                    for="summary"
                                    class="block text-sm font-medium text-gray-700">
                                    Professional Summary
                                </label>

                                <textarea
                                    id="summary"
                                    name="summary"
                                    rows="6"
                                    placeholder="Write a short professional summary..."
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('summary', $profile->summary) }}</textarea>

                                @error('summary')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            {{-- Submit --}}
                            <div class="flex items-center justify-end">
                                <button
                                    type="submit"
                                    class="rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700">
                                    Save Career Profile
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>