@push('link')
{{-- Sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
    .toast-container {
    z-index: 99999;
    }

    .notification-list {
        max-height: 550px;
        overflow-y: auto;
    }
</style>
@endpush
@extends('layouts.page')

@section('title','Dashboard')

@section('content')
@if ($message = Session::get('success_message'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Add data Success!',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@elseif ($message = Session::get('edit_message'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Update data Success!',
        showConfirmButton: false,
        timer: 1500
    })
</script>

@elseif($message = Session::get('delete_message'))
<script>
    Swal.fire({
        icon: 'warning',
        title: 'Delete data Success!',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@elseif($message = Session::get('error_message'))
<script>
    Swal.fire({
        icon: 'danger',
        title: 'Changed Password Failed',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@elseif($message = Session::get('Success'))
<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
        toast.style.zIndex = '99999 !important';
    }
    })

    Toast.fire({
    icon: 'success',
    title: 'Signed in successfully'
    })
</script>
@endif
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-sm-8">
                    <div class="card-body">
                    <h5 class="card-title text-primary">Hello CMS! 🎉</h5>
                    <p class="mb-4">
                        This application is still in the undergoing <span class="fw-bold"> continuous improvements and updates.</span>

                        Our team of developers is working tirelessly to ensure that the application meets the highest standards of quality and functionality. We are constantly making necessary adjustments to enhance user experience and ensure that the application is as user-friendly as possible. We remain committed to delivering a top-notch product that will exceed the expectations of our users. We appreciate your patience and understanding as we continue to work towards releasing the final version of this application.
                    </p>

                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">Thank You!</a>
                    </div>
                </div>
                <div class="col-sm-4 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                    <img
                        src="{{ asset('assets/sneat/') }}/assets/img/illustrations/hijab_cms.png"
                        height="140"
                        alt="View Badge User"
                        data-app-dark-img="illustrations/hijab_cms.png"
                        data-app-light-img="illustrations/hijab_cms.png"
                    />
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

