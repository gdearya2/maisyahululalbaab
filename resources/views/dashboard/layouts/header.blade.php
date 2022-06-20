
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav top_nav ml-auto pr-4">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item" id="darkmode">
        <a class="nav-link" style="cursor: pointer">
          <i class="fas fa-moon"></i>
        </a>
      </li>
      <li class="nav-item dropdown open" style="padding-left: 15px;">
        <a href="" class="nav-link user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" class=" elevation-1" alt=""> {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-user dropdown-menu-right">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">
              <i class="fas fa-sign-out-alt mr-2"></i>
              Logout
            </button>
          
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->