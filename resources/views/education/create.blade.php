<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Experience
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('experiences.store') }}">
                    @csrf

                    @include('experiences.form')

                    <div class="mt-6 flex items-center gap-3">
                        <x-primary-button>
                            Save Experience
                        </x-primary-button>

                        <a
                            href="{{ route('experiences.index') }}"
                            class="rounded-md border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
                            Cancel
                        </a>
                    </div>
                </form>

            </div>

        </div>
    </div>

</x-app-layout>