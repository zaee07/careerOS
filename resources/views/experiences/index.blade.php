<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Experience
            </h2>

            <a
                href="{{ route('experiences.create') }}"
                class="rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-700">
                + Add Experience
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

            @if ($experiences->isEmpty())

            <div class="bg-white shadow-sm sm:rounded-lg p-8 text-center">
                <h3 class="text-lg font-semibold text-gray-900">
                    Belum ada experience
                </h3>

                <p class="mt-2 text-sm text-gray-600">
                    Tambahkan pengalaman kerja, internship,
                    freelance, atau pengalaman profesional lainnya.
                </p>

                <a
                    href="{{ route('experiences.create') }}"
                    class="inline-block mt-6 rounded-md bg-gray-800 px-4 py-2 text-sm font-semibold text-white">
                    Add Your First Experience
                </a>
            </div>

            @else

            <div class="space-y-4">

                @foreach ($experiences as $experience)

                <div class="bg-white shadow-sm sm:rounded-lg p-6">

                    <div class="flex items-start justify-between">

                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                {{ $experience->position }}
                            </h3>

                            <p class="text-gray-700">
                                {{ $experience->company_name }}
                            </p>

                            @if ($experience->location)
                            <p class="mt-1 text-sm text-gray-500">
                                {{ $experience->location }}
                            </p>
                            @endif
                        </div>

                        <div class="flex gap-2">

                            <a
                                href="{{ route('experiences.edit', $experience) }}"
                                class="text-sm text-indigo-600 hover:text-indigo-800">
                                Edit
                            </a>

                            <form
                                method="POST"
                                action="{{ route('experiences.destroy', $experience) }}">
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="text-sm text-red-600 hover:text-red-800"
                                    onclick="return confirm('Hapus experience ini?')">
                                    Delete
                                </button>
                            </form>

                        </div>

                    </div>

                    <div class="mt-4 text-sm text-gray-600">

                        <span>
                            {{ $experience->start_date->format('M Y') }}
                        </span>

                        <span> — </span>

                        @if ($experience->is_current)
                        <span class="font-medium text-green-600">
                            Present
                        </span>
                        @elseif ($experience->end_date)
                        <span>
                            {{ $experience->end_date->format('M Y') }}
                        </span>
                        @endif

                        @if ($experience->employment_type)
                        <span class="ml-4">
                            {{ $experience->employment_type }}
                        </span>
                        @endif

                    </div>

                    @if ($experience->description)
                    <div class="mt-4 text-sm text-gray-700 whitespace-pre-line">
                        {{ $experience->description }}
                    </div>
                    @endif

                </div>

                @endforeach

            </div>

            @endif

        </div>
    </div>

</x-app-layout>