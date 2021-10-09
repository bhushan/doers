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
                            <li class="m-3">
                                {{ $todo->body }}

                                @if(auth()->user()->is($todo->owner))
                                    <form
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
