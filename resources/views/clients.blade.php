<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Clients
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Here are a list of your clients:
                </div>

                @foreach ($clients as $client)
                    <div class="py-3 px-6 text-gray-900">
                        <h3 class="text-lg text-gray-500">{{ $client->name }}</h3>
                        <p class="text-gray-900 dark:text-gray-100">{{ $client->id }}</p>
                        <p class="text-gray-900 dark:text-gray-100">{{ $client->redirect }}</p>
                        <p class="text-gray-900 dark:text-gray-100">{{ $client->secret }}</p>
                    </div>
                @endforeach

                <form action="/oauth/clients" method="POST" class="px-6 flex flex-col gap-4">
                    <x-input-label>
                        <h3 class="text-lg text-gray-500">Name</h3>
                        <x-text-input name="name" />
                    </x-input-label>
                    <x-input-label>
                        <h3 class="text-lg text-gray-500">Redirect</h3>
                        <x-text-input name="redirect" />
                    </x-input-label>
                    <x-input-label class="pb-6">
                        @csrf
                        <x-primary-button>
                            Create Client
                        </x-primary-button>
                    </x-input-label>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
