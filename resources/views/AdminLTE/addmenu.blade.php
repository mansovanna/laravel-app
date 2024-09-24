@extends('AdminLTE.layouts.master')

@section('content')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('AdminLTE.layouts.nav')
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}"alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('AdminLTE.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-4" style="min-height: 100vh;">
            <!-- Main content -->
            <div class="container-fluid">
                <!-- Display Success Message -->

                <!-- Display Error Message -->
                @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>

                @enderror

                <section class="d-flex justify-content-center align-items-center">
                    <div class="card card-info w-100" style="max-width: 800px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title">Add Menu</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal px-4 py-4" method="POST" action="/admins/addmenu" style="background-color: #f8f9fa;">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="id" class="col-sm-3 col-form-label text-left">Parent ID</label>
                                <div class="col-sm-9">
                                    <select name="parent_id" class="form-control">
                                        <option value="">Please select parent ID</option>
                                        @foreach ($parents as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="name" class="col-sm-3 col-form-label">Menu Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Menu Name">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="herf" class="col-sm-3 col-form-label">Menu Herf</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="herf" id="herf" placeholder="Menu Herf">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">Save</button>
                                <a href="/admins/menu" class="btn btn-default">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </section>
            </div>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>
@endsection
