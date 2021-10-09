<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            TODOS
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @foreach($todos as $todo )
                            <li class="mt-3 flex items-center">
                                @if($todo->is_completed)
                                    <span class="text-xl font-bold">{{ $todo->body }}</span>
                                    <span class="ml-3 text-sm bg-green-200 rounded-xl px-3 py-1 text-green-900">Completed</span>
                                @else
                                    {{ $todo->body }}
                                    <span class="ml-3 text-sm bg-red-200 rounded-xl px-3 py-1 text-red-900">Not Completed</span>
                                @endif

                                @if(auth()->user() && auth()->user()->is($todo->owner))
                                    <form
                                            class="ml-3"
                                            action="{{ route('todos.toggleStatus', $todo) }}"
                                            method="POST"
                                    >
                                        @csrf
                                        @method('PUT')
                                        <x-button>
                                            {{ $todo->is_completed ? 'MARK INCOMPLETE' : 'MARK COMPLETE' }}
                                        </x-button>
                                    </form>
                                    <form
                                            class="ml-3"
                                            method="POST"
                                            action="{{ route('todos.destroy', $todo) }}"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <x-button>DELETE</x-button>
                                    </form>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
