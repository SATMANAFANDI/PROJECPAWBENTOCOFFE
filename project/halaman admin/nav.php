<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img src="img/logo_bento.png" alt="" width="200" height="60" class="me-3" style="margin-top:-20px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Bento Coffee</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftarmenu.php">Daftar Menu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="tambah_menu.php">Add Coffee</a></li>
              <li><a class="dropdown-item" href="#">Add Non-Coffee</a></li>
              <li><a class="dropdown-item" href="#">Add Food</a></li>
              <li><a class="dropdown-item" href="#">Add Dessert</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="pesanan.php">Pesanan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
          </li>      
        </ul>
      </div>
    </div>
  </div>
</nav>