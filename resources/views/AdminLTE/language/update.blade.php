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
            <section class="content" style="padding: 10px 0px;">


                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Update New language</h3>
                                </div>
                                <div class="card-body">
                                    <!-- Create Currency Form -->
                                    <form action="{{ route('language.update', $language->id) }}" method="POST">
                                        @csrf
                                        
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="language_name">language Name</label>
                                            <input type="text" name="name" class="form-control" id="language_name" value="{{$language->name}}"
                                                placeholder="Enter language name">
                                        </div>
                                        <!-- Buttons with space between -->
                                        <div class="d-flex justify-content-between">

                                            <!-- Cancel Button (Redirects to currency index page) -->
                                            <a href="{{ route('language.index') }}" class="btn btn-secondary">Cancel</a>

                                            <button type="submit" class="btn btn-success">Save</button>

                                            <!-- Add More Button (Submits and stays on the same page) -->



                                        </div>
                                    </form>
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
    @endsection