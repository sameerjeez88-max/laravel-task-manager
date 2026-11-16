<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Task Title</label>
                        <input type="text" name="title" class="w-full border-gray-300 rounded mt-1" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Description (Optional)</label>
                        <textarea name="description" class="w-full border-gray-300 rounded mt-1"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Priority</label>
                        <select name="priority" class="w-full border-gray-300 rounded mt-1">
                            <option value="Low">Low</option>
                            <option value="Medium" selected>Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Due Date (Optional)</label>
                        <input type="date" name="due_date" class="w-full border-gray-300 rounded mt-1">
                    </div>
                    <!-- YEH BUTTON HAI -->
                    <button type="submit" style="background-color: #22c55e; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold; border: none; cursor: pointer;">Save Task</button>
                    <a href="{{ route('tasks.index') }}" class="text-gray-500 ml-4">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>