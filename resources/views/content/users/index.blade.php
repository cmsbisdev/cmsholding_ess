@push('link')
{{-- Sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush


@extends('layouts.page')

@section('title', 'List Users')

@section('content')
    @if ($message = Session::get('success_message'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Add Data Success!',
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
                icon: 'danger',
                title: 'Delete data Success!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        @endif


    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                    <h5 class="card-header d-flex justify-content-between">
                        Users List
                    </h5>
                    <div class="card-body">
                        <div class="container">
                            <div class="table-responsive">
                                <div class="panel-body">
                                    <table id="table-users" class="datatables-basic table border-top" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Username</th>
                                                <th class="text-center">Office</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @php
                                                $i = 1;
                                            @endphp

                                            {{-- @foreach ($incomingmail as $inc) --}}
                                            <tr>
                                                <td class="text-center">{{ $i++ }}</td>
                                                <td class="text-center">000000000</td>
                                                <td class="text-center">Developer</td>
                                                <td class="text-center">developer</td>
                                                <td class="text-center">Pusat</td>
                                                <td class="text-center">
                                                    {{-- @if ( $us->is_active == true) --}}
                                                    <span class="badge rounded pill bg-success">Active</span>
                                                    {{-- @elseif ($us->is_active == false) --}}
                                                    {{-- <span class="badge rounded pill bg-secondary">Non-Active</span> --}}
                                                    {{-- @endif --}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            {{-- <a class="dropdown-item" href="{{ route('users.edit', $us->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item delete" data-name="{{ $us->email }}" data-id="{{ $us->id }}" href="#"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                                            <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item delete" data-name="" data-id="" href="#"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ $i++ }}</td>
                                                <td class="text-center">000000000</td>
                                                <td class="text-center">Developer</td>
                                                <td class="text-center">developer</td>
                                                <td class="text-center">Pusat</td>
                                                <td class="text-center">
                                                    {{-- @if ( $us->is_active == true) --}}
                                                    <span class="badge rounded pill bg-success">Active</span>
                                                    {{-- @elseif ($us->is_active == false) --}}
                                                    {{-- <span class="badge rounded pill bg-secondary">Non-Active</span> --}}
                                                    {{-- @endif --}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            {{-- <a class="dropdown-item" href="{{ route('users.edit', $us->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item delete" data-name="{{ $us->email }}" data-id="{{ $us->id }}" href="#"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                                            <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item delete" data-name="" data-id="" href="#"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ $i++ }}</td>
                                                <td class="text-center">000000000</td>
                                                <td class="text-center">Developer</td>
                                                <td class="text-center">developer</td>
                                                <td class="text-center">Pusat</td>
                                                <td class="text-center">
                                                    {{-- @if ( $us->is_active == true) --}}
                                                    <span class="badge rounded pill bg-success">Active</span>
                                                    {{-- @elseif ($us->is_active == false) --}}
                                                    {{-- <span class="badge rounded pill bg-secondary">Non-Active</span> --}}
                                                    {{-- @endif --}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            {{-- <a class="dropdown-item" href="{{ route('users.edit', $us->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item delete" data-name="{{ $us->email }}" data-id="{{ $us->id }}" href="#"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                                            <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item delete" data-name="" data-id="" href="#"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">{{ $i++ }}</td>
                                                <td class="text-center">000000000</td>
                                                <td class="text-center">Developer</td>
                                                <td class="text-center">developer</td>
                                                <td class="text-center">Pusat</td>
                                                <td class="text-center">
                                                    {{-- @if ( $us->is_active == true) --}}
                                                    <span class="badge rounded pill bg-success">Active</span>
                                                    {{-- @elseif ($us->is_active == false) --}}
                                                    {{-- <span class="badge rounded pill bg-secondary">Non-Active</span> --}}
                                                    {{-- @endif --}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            {{-- <a class="dropdown-item" href="{{ route('users.edit', $us->id) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item delete" data-name="{{ $us->email }}" data-id="{{ $us->id }}" href="#"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                                                            <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item delete" data-name="" data-id="" href="#"><i class="bx bx-trash me-1"></i> Delete</a>
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



@endsection

@push('script')
    <script>
        $('.delete').click(function(){
            var id = $(this).attr('data-id');
            var email = $(this).attr('data-name');
            Swal.fire({
            title: 'Are You Sure?',
            text: "You will delete user with email [ "+email+" ]!",
            // text: "You will delete data with role",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location ="/users/destroy/"+id+""
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
            $('#table-users').DataTable({
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
