<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h3>
                    <p class="mb-4">You are logged in successfully.</p>
                    
                    <!-- Task Manager ka Button (Inline Style ke sath) -->
                    <a href="{{ route('tasks.index') }}" style="display: inline-block; background-color: #3b82f6; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold; text-decoration: none;">
                        Go to My Tasks
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>