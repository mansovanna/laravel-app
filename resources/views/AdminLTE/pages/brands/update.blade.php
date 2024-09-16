@extends('AdminLTE.layouts.master')

@section('content')

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('AdminLTE.layouts.nav')
            @include('AdminLTE.layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <section class="content" style="padding: 8px 0px">
                    <!-- Main content -->
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-2" role="alert" style="margin: 0px 10px">
                            <strong class="font-bold">Oops!</strong>
                            <span class="block sm:inline">There were some problems with your input.</span>
                            <ul class="list-disc pl-5 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li class="mt-1">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Brand</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- Form Start -->
                                        <form method="POST" action="{{ route('brand.update', $brand->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="name">Brand Name</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    value="{{ old('name', $brand->name) }}" required>
                                            </div>

                                            <div class="form-group mt-3 d-flex justify-content-between">
                                                <a href="{{ route('brand.index') }}" class="btn btn-danger">Cancel</a>
                                                <button type="submit" class="btn btn-primary">Update Brand</button>
                                            </div>
                                        </form>
                                        <!-- Form End -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            @include('AdminLTE.layouts.footer')
        </div>
        <!-- ./wrapper -->
    </body>
@endsection
