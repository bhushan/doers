<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Todos
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form
                            action="{{ route('todos.store') }}"
                            method="POST"
                    >
                        @csrf
                        <div>
                            <x-label
                                    for="body"
                                    value="TODO"
                            />
                            <x-input
                                    id="body"
                                    class="mt-3 w-full"
                                    type="text"
                                    name="body"
                                    :value="old('body')"
                                    required
                                    autofocus
                            />
                        </div>
                        <x-button class="mt-3">
                            CREATE TODO
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
