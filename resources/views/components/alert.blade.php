@if (session('error'))
    <dialog id="error_modal" class="modal">
        <div class="modal-box">
            <div class="text-center mb-4">
                <span class="fa-stack fa-4x text-red-600">
                    <i class="fas fa-circle fa-stack-2x text-danger"></i>
                    <i class="fas fa-exclamation fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <h3 class="font-bold text-3xl text-center">Something went wrong</h3>
            <p class="py-4 text-xl text-center">{!! session('error') !!}</p>
            <p class="py-4 text-sm text-center">Press ESC key or click outside to close</p>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <script defer>
        document.querySelector('#error_modal').showModal();
    </script>
@endif

@if (session('success'))
    <!-- Open the modal using ID.showModal() method -->
    <dialog id="success_modal" class="modal">
        <div class="modal-box">
            <div class="text-center mb-4">
                <span class="fa-stack fa-4x text-green-600">
                    <i class="fas fa-circle fa-stack-2x text-danger"></i>
                    <i class="fas fa-check fa-stack-1x fa-inverse"></i>
                </span>
            </div>
            <h3 class="font-bold text-3xl text-center">Success</h3>
            <p class="py-4 text-xl text-center">{!! session('success') !!}</p>
            <p class="py-4 text-sm text-center">Press ESC key or click outside to close</p>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
    <script defer>
        document.querySelector('#success_modal').showModal();
    </script>
@endif