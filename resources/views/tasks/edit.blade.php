<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('tasks.update', $task) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-4">
                        <label class="block text-gray-700">Task Title</label>
                        <input type="text" name="title" class="w-full border-gray-300 rounded mt-1" value="{{ $task->title }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Description</label>
                        <textarea name="description" class="w-full border-gray-300 rounded mt-1">{{ $task->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Priority</label>
                        <select name="priority" class="w-full border-gray-300 rounded mt-1">
                            <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
                            <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Due Date</label>
                        <input type="date" name="due_date" class="w-full border-gray-300 rounded mt-1" value="{{ $task->due_date }}">
                    </div>
                    
                    <!-- INLINE STYLE KE SATH BUTTON -->
                    <button type="submit" style="background-color: #3b82f6; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold; border: none; cursor: pointer;">
                        Update Task
                    </button>
                    <a href="{{ route('tasks.index') }}" style="color: #6b7280; margin-left: 15px; text-decoration: none;">
                        Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>