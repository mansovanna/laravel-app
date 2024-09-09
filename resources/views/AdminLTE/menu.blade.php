@extends('AdminLTE.layouts.master')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('AdminLTE.layouts.nav')
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div>
        @include('AdminLTE.layouts.sidebar')
        <div class="content-wrapper">
            <section class="content">
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
                                    <h3 class="card-title">DataTable with minimal features & hover style</h3>
                                    <a href="/admins/addmenu" class="btn btn-info float-right ms-5" type="button">Add Menu</a>
                                </div>
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Menu Name</th>
                                                <th>Parent ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($menus as $menu)
                                                <tr>
                                                    <td>{{ $menu->id }}</td>
                                                    <td>{{ $menu->name }}</td>
                                                    <td>{{ $menu->parent_id }}</td>
                                                    <td class="text-center">
                                                        <!-- Edit Button -->
                                                        <a href="#" class="btn btn-primary edit-button" data-id="{{ $menu->id }}" data-name="{{ $menu->name }}" data-parent-id="{{ $menu->parent_id }}" data-toggle="modal" data-target="#editMenuModal">
                                                            Edit
                                                        </a>
                                                        <!-- Delete Button -->
                                                        <form action="/admins/{{ $menu->id }}/menu" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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

    <!-- Edit Menu Modal -->
    <div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="editMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMenuModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editMenuForm" method="POST" action="">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="menuName">Menu Name</label>
                            <input type="text" class="form-control" id="menuName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="parentId">Parent ID</label>
                            <input type="text" class="form-control" id="parentId" name="parent_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Handle click on edit button
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            const parentId = this.getAttribute('data-parent-id');

            // Set form action URL
            const form = document.getElementById('editMenuForm');
            form.action = `/admins/${id}/menu`;

            // Populate form fields
            document.getElementById('menuName').value = name;
            document.getElementById('parentId').value = parentId;
        });
    });
});
</script>
