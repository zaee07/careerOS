<div class="space-y-6">

    {{-- Company --}}
    <div>
        <label
<<<<<<< HEAD
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
=======
            for="instution_name"
            class="block text-sm font-medium text-gray-700">
            Institution name        </label>

        <input
            id="instution_name"
            name="instution_name"
            type="text"
            value="{{ old('instution_name', $education->instution_name ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('instution_name')
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Position --}}
    <div>
        <label
<<<<<<< HEAD
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
=======
            for="degree"
            class="block text-sm font-medium text-gray-700">
            Jurusan / Program Studi
        </label>

        <input
            id="degree"
            name="degree"
            type="text"
            value="{{ old('degree', $education->degree ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('degree')
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Location --}}
<<<<<<< HEAD
    <div>
=======
    <div>   
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
        <label
            for="location"
            class="block text-sm font-medium text-gray-700">
            Location
        </label>

        <input
            id="location"
            name="location"
            type="text"
<<<<<<< HEAD
            value="{{ old('location', $experience->location ?? '') }}"
=======
            value="{{ old('location', $education->location ?? '') }}"
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
            placeholder="Jakarta, Indonesia"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
    </div>

    {{-- Employment Type --}}
    <div>
        <label
<<<<<<< HEAD
            for="employment_type"
            class="block text-sm font-medium text-gray-700">
            Employment Type
        </label>

        <select
            id="employment_type"
            name="employment_type"
=======
            for="field_of_study "
            class="block text-sm font-medium text-gray-700">
            Jenjang Pendidikan
        </label>

        <select
            id="field_of_study"
            name="field_of_study"
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <option value="">Select type</option>

            @foreach ([
<<<<<<< HEAD
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

=======
            'sd sederajat',
            'sltp sederajat ',
            'slta sederajat ',
            'diploma',
            's1',
            's2'
            ] as $type)

           <option 
                value="{{ $type }}"
                @selected(trim(strtolower(old("field_of_study", $education->field_of_study ?? ''))) === trim(strtolower($type)))
            >
                {{ $type }}
            </option>


>>>>>>> 0150c17 (feat: education, piks profile, update controller)
            @endforeach

        </select>
    </div>

    {{-- Start Date --}}
    <div>
        <label
<<<<<<< HEAD
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
=======
            for="start_year"
            class="block text-sm font-medium text-gray-700">
            Start Year
        </label>

        <input
            id="start_year"
            name="start_year"
            type="year"
            value="{{ old('start_year', isset($education) && $education->start_year ? $education->start_year : '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('start_year')
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
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
<<<<<<< HEAD
            value="1"
            @checked(old('is_current', $experience->is_current ?? false))
=======
            value="0"
            @checked(old('is_current', $education->is_current ?? false))
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
        class="rounded border-gray-300"
        >

        <label
            for="is_current"
            class="text-sm text-gray-700">
<<<<<<< HEAD
            I currently work here
=======
            I currently study here
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
        </label>

    </div>

    {{-- End Date --}}
    <div>
        <label
<<<<<<< HEAD
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
=======
            for="end_year"
            class="block text-sm font-medium text-gray-700">
            End Year
        </label>

        <input
            id="end_year"
            name="end_year"
            type="year"
            value="{{ old('end_year', isset($education) && $education->end_year ? $education->end_year : '') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('end_year')
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
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
<<<<<<< HEAD
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('description', $experience->description ?? '') }}</textarea>
=======
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('description', $education->description ?? '') }}</textarea>
>>>>>>> 0150c17 (feat: education, piks profile, update controller)

        @error('description')
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Actions --}}
    <div class="flex items-center justify-end gap-3">

        <a
<<<<<<< HEAD
            href="{{ route('experiences.index') }}"
=======
            href="{{ route('educations.index') }}"
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
            class="rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
            Cancel
        </a>

        <button
            type="submit"
            class="rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700">
<<<<<<< HEAD
            {{ isset($experience) ? 'Update Experience' : 'Save Experience' }}
=======
            {{ isset($educations) ? "Update educations" : "Save educations" }}
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
        </button>

    </div>

</div>