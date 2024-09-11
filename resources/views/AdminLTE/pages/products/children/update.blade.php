@extends('AdminLTE.layouts.master')

@section('content')

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('AdminLTE.layouts.nav')

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
            </div>

            @include('AdminLTE.layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content pt-3">
                    <div class="container-fluid">
                        <!-- Success and error messages -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Update Child Image</h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- Form to update a child image -->
                                        @if ($products->isNotEmpty())
                                            <form action="{{ route('child.product.update', $childImage->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <!-- Product Selection -->
                                                <div class="form-group">
                                                    <label for="product_id">Select Product</label>
                                                    <select class="form-control" id="product_id" name="product_id" required>
                                                        <option value="">Select Product</option>
                                                        @foreach ($products as $product)
                                                            <option value="{{ $product->id }}" {{ $childImage->product_id == $product->id ? 'selected' : '' }}>
                                                                {{ $product->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('product_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Image Upload Field -->
                                                <div class="form-group">
                                                    <label for="image" class="form-label">Upload New Image (Optional)</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!-- Current Image Display -->
                                                <div class="form-group">
                                                    <label for="current_image">Current Image</label>
                                                    <div>
                                                        <img src="{{ $childImage->image_url }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                                    </div>
                                                </div>

                                                <!-- Submit and Cancel Buttons -->
                                                <div class="form-group d-flex justify-content-between">
                                                    <a href="{{ route('child.product.index') }}" class="btn btn-secondary">Cancel</a>
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                </div>
                                            </form>
                                        @else
                                            <!-- Message when no products are available -->
                                            <div class="alert alert-warning">
                                                <strong>No products available.</strong> Please create a product before
                                                updating child images.
                                            </div>
                                            <a href="{{ route('product.create') }}" class="btn btn-primary">Create
                                                Product</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
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
    @endsection
