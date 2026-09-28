<div class="space-y-6">

    {{-- Company --}}
    <div>
        <label
            for="company_name"
            class="block text-sm font-medium text-gray-700">
            Company
        </label>

        <input
            id="company_name"
            name="company_name"
            type="text"
            value="{{ old('company_name', $experience->company_name ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('company_name')
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Position --}}
    <div>
        <label
            for="position"
            class="block text-sm font-medium text-gray-700">
            Position
        </label>

        <input
            id="position"
            name="position"
            type="text"
            value="{{ old('position', $experience->position ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('position')
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
            value="{{ old('location', $experience->location ?? '') }}"
            placeholder="Jakarta, Indonesia"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
    </div>

    {{-- Employment Type --}}
    <div>
        <label
            for="employment_type"
            class="block text-sm font-medium text-gray-700">
            Employment Type
        </label>

        <select
            id="employment_type"
            name="employment_type"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <option value="">Select type</option>

            @foreach ([
            'Full Time',
            'Part Time',
            'Contract',
            'Internship',
            'Freelance',
            'Temporary'
            ] as $type)

            <option
                value="{{ $type }}"
                @selected(old('employment_type', $experience->employment_type ?? '') === $type)
                >
                {{ $type }}
            </option>

            @endforeach

        </select>
    </div>

    {{-- Start Date --}}
    <div>
        <label
            for="start_date"
            class="block text-sm font-medium text-gray-700">
            Start Date
        </label>

        <input
            id="start_date"
            name="start_date"
            type="date"
            value="{{ old('start_date', isset($experience) && $experience->start_date ? $experience->start_date->format('Y-m-d') : '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('start_date')
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Current --}}
    <div class="flex items-center gap-2">

        <input
            id="is_current"
            name="is_current"
            type="checkbox"
            value="1"
            @checked(old('is_current', $experience->is_current ?? false))
        class="rounded border-gray-300"
        >

        <label
            for="is_current"
            class="text-sm text-gray-700">
            I currently work here
        </label>

    </div>

    {{-- End Date --}}
    <div>
        <label
            for="end_date"
            class="block text-sm font-medium text-gray-700">
            End Date
        </label>

        <input
            id="end_date"
            name="end_date"
            type="date"
            value="{{ old('end_date', isset($experience) && $experience->end_date ? $experience->end_date->format('Y-m-d') : '') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('end_date')
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Description --}}
    <div>
        <label
            for="description"
            class="block text-sm font-medium text-gray-700">
            Description
        </label>

        <textarea
            id="description"
            name="description"
            rows="7"
            placeholder="Describe your responsibilities, achievements, technologies, etc."
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('description', $experience->description ?? '') }}</textarea>

        @error('description')
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Actions --}}
    <div class="flex items-center justify-end gap-3">

        <a
            href="{{ route('experiences.index') }}"
            class="rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
            Cancel
        </a>

        <button
            type="submit"
            class="rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700">
            {{ isset($experience) ? 'Update Experience' : 'Save Experience' }}
        </button>

    </div>

</div>