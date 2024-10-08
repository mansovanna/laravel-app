@extends('AdminLTE.layouts.master')
@section('content')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('AdminLTE.layouts.nav')
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
                width="60">
        </div>
        @include('AdminLTE.layouts.sidebar')
        <div class="content-wrapper">
            <section class="content" style="padding: 10px 0px">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Language Table</h3>
                                    <a href="{{ route('language.show') }}" class="btn btn-info float-right ms-5"
                                        type="button">Add
                                        Menu</a>
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Language Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @if (!empty($language->count()))
                                                @foreach ($language as $language)
                                                    <tr>
                                                        <td>{{$language->id}}</td>
                                                        <td>{{$language->name}}</td>

                                                        <td class="text-center flex flex-row justify-center items-center">
                                                            <!-- Edit Button -->
                                                            <a href="{{ route('language.edit', $language->id) }}"
                                                                class="btn btn-primary edit-button">
                                                                <svg class="w-5 h-5 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                    fill="none">
                                                                    <path
                                                                        d="M16.2141 4.98239L17.6158 3.58063C18.39 2.80646 19.6452 2.80646 20.4194 3.58063C21.1935 4.3548 21.1935 5.60998 20.4194 6.38415L19.0176 7.78591M16.2141 4.98239L10.9802 10.2163C9.93493 11.2616 9.41226 11.7842 9.05637 12.4211C8.70047 13.058 8.3424 14.5619 8 16C9.43809 15.6576 10.942 15.2995 11.5789 14.9436C12.2158 14.5877 12.7384 14.0651 13.7837 13.0198L19.0176 7.78591M16.2141 4.98239L19.0176 7.78591"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path
                                                                        d="M21 12C21 16.2426 21 18.364 19.682 19.682C18.364 21 16.2426 21 12 21C7.75736 21 5.63604 21 4.31802 19.682C3 18.364 3 16.2426 3 12C3 7.75736 3 5.63604 4.31802 4.31802C5.63604 3 7.75736 3 12 3"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                </svg>
                                                            </a>
                                                            <!-- Delete Button -->
                                                            <form action="{{route('language.destroy', $language->id)}}" method="POST">
                                                                @csrf

                                                                @method('DELETE')
                                                                <!-- @method('delete') -->
                                                                <button class="btn btn-danger">
                                                                    <svg class="w-5 h-5 text-white"
                                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                        fill="none">
                                                                        <path
                                                                            d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round" />
                                                                        <path
                                                                            d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5"
                                                                            stroke="currentColor" stroke-width="1.5"
                                                                            stroke-linecap="round" />
                                                                    </svg>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            @else
                                                <tr>
                                                    <td colspan="3" class="text-center">No languages found.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this currency?
                    </div>
                    <div class="modal-footer">
                        <form id="deleteForm" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <script>
        function confirmDelete(id) {
            let form = document.getElementById('deleteForm');
            form.action = '{{ route("language.destroy", ":id") }}'.replace(':id', id);
            $('#deleteModal').modal('show');
        }
    </script>

    @endsection
