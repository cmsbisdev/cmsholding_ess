@push('link')
{{-- Sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@extends('layouts.page')

@section('title', 'Roles Management')

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
@endif

<div class="row">
    <div class="col-xl-8">
        <div class="card mb-4">
            <div class="container">
                <h5 class="card-header d-flex justify-content-between">
                    Role List
                </h5>
                <div class="card-body">
                    <div class="container">
                        <div class="table-responsive">
                            <div class="panel-body">
                                <table id="table-role" class="table">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Role Name</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @php
                                            $i = 1;
                                        @endphp
                                        {{-- @foreach ($role as $rl) --}}
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center"> <strong></strong></td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                    {{-- <a class="dropdown-item" href="{{ route('role.edit', $rl->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    @csrf
                                                    <a class="dropdown-item delete" href="#" data-id="{{ $rl->id }}" data-name={{ $rl->name }}><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                                    <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    @csrf
                                                    <a class="dropdown-item delete" href="#" data-id="" data-name=""><i class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        {{-- <form action="{{ route('role.store') }}" method="POST" enctype="multipart/form-data"> --}}
           {{-- @csrf --}}
            <div class="card">
                <div class="card-header">
                    <h5>Add New Role</h5>
                </div>
                <div class="card-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Role Name" aria-describedby="floatingInputHelp"/>
                        <label for="floatingInput">Role Name</label>
                        @error('name')
                                <span class="alert text-danger text-sm">*{{ $message }}</span>
                        @enderror
                    </div>
                    <hr>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        {{-- </form> --}}
    </div>
</div>


@endsection


@push('script')
<script>
    $('.delete').click(function(){
        var id = $(this).attr('data-id');
        var name = $(this).attr('data-name');
        Swal.fire({
        title: 'Are You Sure?',
        text: "You will delete data with name [ "+name+" ]!",
        // text: "You will delete data with role",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location ="/role/destroy/"+id+""
            // window.location =url
            Swal.fire(
            'Deleted!',
            'Your data has been deleted.',
            'success'
            )
        }
        })
    });
</script>

<script>
    $(document).ready(function() {
        $('#table-role').DataTable({
            dom: 'Bfrtip',
            ordering: false,
            responsive: true,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    } );
</script>

@endpush
