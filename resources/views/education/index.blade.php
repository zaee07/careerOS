<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Education
            </h2>

            <a
                href="{{ route('educations.create') }}"
                class="rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700">
<<<<<<< HEAD
                + Add Education
=======
                + Add Educations
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
            <div class="mb-6 rounded-lg bg-green-100 p-4 text-green-800">
                {{ session('success') }}
            </div>
            @endif

            @if ($educations->isEmpty())

            <div class="bg-white shadow-sm sm:rounded-lg p-8 text-center">
                <h3 class="text-lg font-semibold text-gray-900">
                    Belum ada education
                </h3>

                <p class="mt-2 text-sm text-gray-600">
                    Tambahkan pengalaman kerja, internship,
                    freelance, atau pengalaman profesional lainnya.
                </p>

                <a
                    href="{{ route('educations.create') }}"
                    class="inline-block mt-6 rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white">
                    Add Your First Education
                </a>
            </div>

            @else

            <div class="space-y-4">

                @foreach ($educations as $education)

                <div class="bg-white shadow-sm sm:rounded-lg p-6">

                    <div class="flex items-start justify-between">

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                {{ $education->degree }}
                            </h3>

                            <p class="text-gray-700">
                                {{ $education->instution_name }}
                            </p>

                            @if ($education->location)
                            <p class="mt-1 text-sm text-gray-500">
                                {{ $education->location }}
                            </p>
                            @endif
                        </div>

                        <div class="flex gap-2">

                            <a
<<<<<<< HEAD
                                href="{{ route('education.edit', $education) }}"
=======
                                href="{{ route('educations.edit', $education) }}"
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
                                class="text-sm text-indigo-600 hover:text-indigo-800">
                                Edit
                            </a>

                            <form
                                method="POST"
<<<<<<< HEAD
                                action="{{ route('education.destroy', $education) }}">
=======
                                action="{{ route('educations.destroy', $education) }}">
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="text-sm text-red-600 hover:text-red-800"
                                    onclick="return confirm('Hapus education ini?')">
                                    Delete
                                </button>
                            </form>

                        </div>

                    </div>

                    <div class="mt-4 text-sm text-gray-600">

                        <span>
<<<<<<< HEAD
                            {{ $education->start_year->format('M Y') }}
=======
                            {{ $education->start_year }}
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
                        </span>

                        <span> — </span>

                        @if ($education->is_current)
                        <span class="font-medium text-green-600">
                            Present
                        </span>
                        @elseif ($education->end_year)
                        <span>
<<<<<<< HEAD
                            {{ $education->end_year->format('M Y') }}
=======
                            {{ $education->end_year }}
>>>>>>> 0150c17 (feat: education, piks profile, update controller)
                        </span>
                        @endif

                        @if ($education->field_of_study)
                        <span class="ml-4">
                            {{ $education->field_of_study }}
                        </span>
                        @endif

                    </div>

                    @if ($education->description)
                    <div class="mt-4 text-sm text-gray-700 whitespace-pre-line">
                        {{ $education->description }}
                    </div>
                    @endif

                </div>

                @endforeach

            </div>

            @endif

        </div>
    </div>

</x-app-layout>