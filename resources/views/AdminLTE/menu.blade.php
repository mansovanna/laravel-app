@extends('AdminLTE.layouts.master')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include('AdminLTE.layouts.nav')
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
        width="60">
    </div>

    @include('AdminLTE.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
       <br>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                  <a href="/admins/addmenu" class="btn btn-info float-right ms-5" type="button">Add Menu</a>
                </div>
                <!-- /.card-header -->
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
                      @foreach($menus as $menu)
                        
                     
                      <tr>
                        <td>{{$menu->id}}</td>
                        <td>{{$menu->name}}
                        </td>
                        <td>{{$menu->parent_id}}</td>
                        <td> 4</td>
                      </tr>
                      @endforeach
                    </tbody>
                    
                  </table>
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