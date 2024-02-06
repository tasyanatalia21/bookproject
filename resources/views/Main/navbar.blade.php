<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!--link balik ke home-->
        <a href="/admin/main/home.blade.php" class="nav-link">Home</a>
      </li>

    </ul>

</nav>

<div class="content-wrapper">

    <!-- Main content -->
    @yield('content')

    <!-- /.content -->

<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">Kanagara</a>.</strong> All rights reserved.
  </footer>
