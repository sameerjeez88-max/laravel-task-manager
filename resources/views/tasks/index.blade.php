<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-bold">Task List</h3>
                    <!-- Inline Style wala Add Button -->
                    <a href="{{ route('tasks.create') }}" style="background-color: #22c55e; color: white; padding: 10px 20px; border-radius: 5px; font-weight: bold; text-decoration: none;">
                        + Add New Task
                    </a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-4 rounded mb-4">{{ session('success') }}</div>
                @endif

                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-3 border">Title</th>
                            <th class="p-3 border">Priority</th>
                            <th class="p-3 border">Due Date</th>
                            <th class="p-3 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tasks as $task)
                        <tr>
                            <td class="p-3 border">{{ $task->title }}</td>
                            <td class="p-3 border">
                                <span class="px-2 py-1 rounded text-white text-sm {{ $task->priority == 'High' ? 'bg-red-500' : ($task->priority == 'Medium' ? 'bg-yellow-500' : 'bg-blue-500') }}">
                                    {{ $task->priority }}
                                </span>
                            </td>
                            <td class="p-3 border">{{ $task->due_date ?? 'N/A' }}</td>
                            <td class="p-3 border">
                                <!-- Inline Style wale Edit/Delete Buttons -->
                                <a href="{{ route('tasks.edit', $task) }}" style="color: #3b82f6; margin-right: 10px; text-decoration: none;">Edit</a>
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" style="color: #ef4444; background: none; border: none; cursor: pointer; text-decoration: none;" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="p-3 border text-center">No tasks found. Add a new task!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>