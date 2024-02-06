<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN KANAGARA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Main
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('authors.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Author</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('genres.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Genre</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('Seris.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Series</p>
                    </a>
                </li>
                  <li class="nav-item">
                    <a href="{{ route('books.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Book</p>
                    </a>
            </li>
        </ul>
    </nav>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="{{ route('transactions.index') }}" class="nav-link">
            <p>
                Transaction
            </p>
        </a>
        </li>
    </ul>
</nav>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="#" class="nav-link">
            {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>
