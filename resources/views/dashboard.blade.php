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
                    Workshop Laravel IA
                </div>
                <form class="p-6 text-gray-900 dark:text-gray-900" method="POST">
                    @csrf
                    <textarea
                        id="msg"
                        name="msg" 
                        class="w-full h-32 p-2 border border-gray-300 dark:border-gray-700 rounded-lg"
                        placeholder="Digite sua mensagem para a IA">{{ $msg }}</textarea>
                    <button type="submit" class="w-full p-2 mt-2 bg-blue-500 hover">Enviar</button>
                </form>

                @if ($response)
                    <div class="p-6 text-white">
                        {!! nl2br($response) !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
