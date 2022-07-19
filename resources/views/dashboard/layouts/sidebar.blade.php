 <!-- Main Sidebar Container -->
 <aside id="panellogout" class="  main-sidebar  sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
      {{-- <img src="{{ asset('img/mais2.png') }}" alt="BEMP STATISTIKA Logo" class="brand-image img-circle elevation-6"> --}}
      <span class="brand-text font-weight-light font-weight-bold">Maisyah Corporation</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-1  d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        
        <div class="info">
          <a href="#" class=" d-block">{{ auth()->user()->name }}</a>
          <p class="text-gray">Administrator</p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Halaman Admin
              </p>
            </a>

          </li>
          <li class="nav-item ">
            <a href="/dashboard/anggota" class="nav-link {{ Request::is('dashboard/anggota*') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-book "></i>
              <p>
                Daftar Anggota
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="/" class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt "></i>
              <p>
                Kelola Posts
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/products" class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Kelola Toko
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/categories" class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/flashsale" class="nav-link {{ Request::is('dashboard/flashsale*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Flash Sale
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
               Kembali ke Website
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>