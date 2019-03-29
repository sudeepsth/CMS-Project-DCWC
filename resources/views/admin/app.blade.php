<!DOCTYPE html>
<html>
  <head>
    @include('admin/layout/meta')
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <!-- the fixed layout is not compatible with sidebar-mini -->
  <body class="hold-transition skin-purple fixed sidebar-mini" >
    <!-- Site wrapper -->
    <div class="wrapper" id="app">
        @include('admin/layout/header')
        <!-- Left side column. contains the sidebar -->
        @include('admin/layout/menu')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>@yield('content-header')</h1>
          </section>

          <!-- Main content -->
          <section class="content">
            @section('content')
              @show
          </section>
          <!-- /.content -->
        </div>
      <!-- /.content-wrapper -->

      @include('admin/layout/footer')
    </div>
    <!-- ./wrapper -->
    @include('admin/layout/script')
  </body>
</html>