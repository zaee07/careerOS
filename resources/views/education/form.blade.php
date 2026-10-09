<div class="space-y-6">

    {{-- Company --}}
    <div>
        <label
            for="instution_name"
            class="block text-sm font-medium text-gray-700">
            Institution name </label>

        <input
            id="instution_name"
            name="instution_name"
            type="text"
            value="{{ old('instution_name', $education->instution_name ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

        @error('instution_name')
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Position --}}
    <div>
        <label
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
            value="{{ old('location', $education->location ?? '') }}"
            placeholder="Jakarta, Indonesia"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
    </div>

    {{-- Employment Type --}}
    <div>
        <label
            for="field_of_study "
            class="block text-sm font-medium text-gray-700">
            Jenjang Pendidikan
        </label>

        <select
            id="field_of_study"
            name="field_of_study"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
            <option value="">Select type</option>

            @foreach ([
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


            @endforeach

        </select>
    </div>

    {{-- Start Date --}}
    <div>
        <label
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
            value="0"
            @checked(old('is_current', $education->is_current ?? false))
        class="rounded border-gray-300"
        >

        <label
            for="is_current"
            class="text-sm text-gray-700">
            I currently study here
        </label>

    </div>

    {{-- End Date --}}
    <div>
        <label
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
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ old('description', $education->description ?? '') }}</textarea>

        @error('description')
        <p class="mt-1 text-sm text-red-600">
            {{ $message }}
        </p>
        @enderror
    </div>

    {{-- Actions --}}
    <div class="flex items-center justify-end gap-3">

        <a
            href="{{ route('educations.index') }}"
            class="rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
            Cancel
        </a>

        <button
            type="submit"
            class="rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700">
            {{ isset($educations) ? "Update educations" : "Save educations" }}
        </button>

    </div>

</div>