<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <main class="flex items-center justify-center w-full min-h-screen">
        <button x-data x-on:click="$store.modal.testing = true" type="button" id="button-testing-open"
            class="px-4 py-2 text-sm font-medium text-white transition-all duration-300 ease-in-out bg-gray-900 border border-transparent rounded-md hover:bg-gray-950 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-950">Show
            Modal</button>
    </main>

    <section>
        <x-modal modal="$store.modal.testing" dialog="modal-testing-dialog">
            <div class="px-5 bg-white sm:p-7 sm:pb-0">
                <div>
                    <div class="mt-5 sm:mt-0">
                        <x-modal-title :label="__('Modal Title')" />

                        <div class="my-2">
                            <p class="text-sm text-slate-700">{{ __('Lorem ipsum dolor sit amet.') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 py-4 sm:flex sm:flex-row-reverse">
                <x-modal-button x-on:click="$store.modal.testing = false" type="button" id="button-testing-close"
                    class="px-4 py-2 text-sm text-white transition-all duration-200 ease-in-out bg-gray-400 rounded-lg hover:bg-gray-500"
                    :label="__('Batal')">{{ __('Batal') }}</x-modal-button>
            </div>
        </x-modal>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        $(function() {
            modalAction("#button-testing-open", "#button-testing-close", "#modal-testing-dialog");
        });
    </script>
</body>

</html>
