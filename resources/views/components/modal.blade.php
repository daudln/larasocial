<div class="relative z-10 hidden" id="modal" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 transition-opacity bg-opacity-75 bg-background"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex items-center justify-center min-h-full p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative items-center overflow-hidden text-left transition-all transform rounded-lg shadow-xl ring-offset-4 sm:my-8 sm:w-full sm:max-w-lg modal bg-background">
                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="w-full mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h3 class="mb-4 text-3xl font-semibold leading-6 text-primary" id="modal-title">
                                {{ $title }}</h3>
                            <div class="w-full">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="gap-2 px-4 py-3 text-sm bg-background sm:flex sm:justify-end sm:px-6">
                    <x-button type="submit" label="create" class="bg-green-500 border-none" />
                    <x-button type="button" label="close"
                        class="border-none bg-primary hover:bg-red-600 hover:text-white" />

                </div> --}}
            </div>
        </div>
    </div>
</div>

<script>
    function closeModal() {
        $('#modal').removeClass('fade-in');
        $('#modal').addClass('fade-out');
        setTimeout(function() {
            $('#modal').addClass('hidden');
            $('#modal').removeClass('fade-out');
        }, 300);
    }
    $('#modal').on('click', '#close', closeModal);
</script>
