<!-- /*
|--------------------------------------------------------------------------
|  SUCCESS MESSAGE
   Shows when an action is completed successfully
|--------------------------------------------------------------------------
*/ -->

@if(session('success'))
    <div class="alert alert-primary alert-dismissible fade show border-0 shadow-sm p-3 mb-4 rounded-3 d-flex align-items-center" role="alert">
        <i class="fa-solid fa-circle-check text-primary me-2.5 fs-5"></i>

        <div class="fw-medium text-primary-emphasis flex-grow-1">
            {{ session('success') }}
        </div>

        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- 
/* =========================
   VALIDATION ERRORS
   Shows errors when form validation fails
   ========================= */ -->

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm p-3 mb-4 rounded-3" role="alert">

        <div class="d-flex align-items-center mb-2">
            <i class="fa-solid fa-circle-xmark text-danger me-2.5 fs-5"></i>

        </div>

        <ul class="mb-0 text-danger ps-4 small">
            @foreach($errors->all() as $error)
                <li class="fw-medium">{{ $error }}</li>
            @endforeach
        </ul>

        <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif