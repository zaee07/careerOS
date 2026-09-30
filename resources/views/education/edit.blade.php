<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Experience
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form
                    method="POST"
<<<<<<< HEAD
                    action="{{ route('experiences.update', $experience) }}">
                    @csrf
                    @method('PUT')

                    @include('experiences.form')
=======
                    action="{{ route('educations.update', $education) }}">
                    @csrf
                    @method('PUT')

                    @include('education.form')
>>>>>>> 0150c17 (feat: education, piks profile, update controller)

                </form>

            </div>

        </div>
    </div>

</x-app-layout>