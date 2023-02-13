<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in as ") }}

                    @if (Auth::user()->role == 0)
                    Admin <h2>List of users:</h2>
                    @foreach ($users as $user)
                    <p>This is user {{ $user->id }} with name {{ $user->name }} -- <button class="border-2 border-stone-500">Make Admin?</button></p>
                    @endforeach

                    @else
                    User
                    <h2>What do you wanto to do today?</h2>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>