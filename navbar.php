<?php
$currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>


<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid px-lg-5">

    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <img src="assest/logo.png" alt="Enactus" style="width: 100px; height: 50px;">
    </a>

    <!-- Mobile Toggle -->
    <button class="btn border-0 mobile-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Desktop Nav -->
    <div class="collapse navbar-collapse desktop-nav" style="margin-left: 36%;">
      <ul class="navbar-nav align-items-center">

        <!-- Home -->
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">
            Home
          </a>
        </li>

        <!-- About Us Dropdown -->
        <?php
          $aboutPages = ['who-we-are.php', 'project.php', 'Team.php'];
          $aboutActive = in_array($currentPage, $aboutPages);
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= $aboutActive ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">
            About Us
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item <?= ($currentPage == 'who-we-are.php') ? 'active' : '' ?>" href="who-we-are.php">- Who We Are</a></li>
            <li><a class="dropdown-item <?= ($currentPage == 'project.php') ? 'active' : '' ?>" href="project.php">- Our Projects</a></li>
            <li><a class="dropdown-item <?= ($currentPage == 'Team.php') ? 'active' : '' ?>" href="Team.php">- Our Teams</a></li>
            <li><a class="dropdown-item disabled" href="#">- Our Alumni</a></li>
          </ul>
        </li>

        <!-- National Competition -->
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'national.php') ? 'active' : '' ?>" href="national.php">
            National Competition
          </a>
        </li>

        <!-- News & More Dropdown -->
        <?php
          $newsPages = ['event&program.php', 'blog.php', 'gallery.php'];
          $newsActive = in_array($currentPage, $newsPages);
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= $newsActive ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">
            News & More
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item <?= ($currentPage == 'event&program.php') ? 'active' : '' ?>" href="event&program.php">- Events & Programs</a></li>
            <li><a class="dropdown-item <?= ($currentPage == 'blog.php') ? 'active' : '' ?>" href="blog.php">- Blog</a></li>
            <li><a class="dropdown-item <?= ($currentPage == 'gallery.php') ? 'active' : '' ?>" href="gallery.php">- Gallery</a></li>
            <!-- <li><a class="dropdown-item" href="#">- Login</a></li> -->
          </ul>
        </li>

      </ul>
    </div>

    <!-- Contact Button -->
    <div class="desktop-nav">
      <a class="btn btn-enactus ms-auto" href="https://wa.me/2349023032547">Contact Us</a>
    </div>

  </div>
</nav>

<!-- Offcanvas Sidebar (Mobile Only) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">
    <ul class="navbar-nav">

      <!-- Home -->
      <li class="nav-item">
        <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">
          Home
        </a>
      </li>

      <!-- About Us -->
      <li class="nav-item">
        <a class="nav-link dropdown-toggle <?= in_array($currentPage, $aboutPages) ? 'active' : '' ?>"
           data-bs-toggle="collapse"
           href="#aboutDropdown">
          About Us
        </a>

        <ul class="collapse list-unstyled ps-3 <?= in_array($currentPage, $aboutPages) ? 'show' : '' ?>"
            id="aboutDropdown">

          <li><a class="nav-link <?= ($currentPage == 'who-we-are.php') ? 'active' : '' ?>" href="who-we-are.php">- Who We Are</a></li>
          <li><a class="nav-link <?= ($currentPage == 'project.php') ? 'active' : '' ?>" href="project.php">- Our Project</a></li>
          <li><a class="nav-link <?= ($currentPage == 'team.php') ? 'active' : '' ?>" href="team.php">- Our Teams</a></li>
          <li><a class="nav-link disabled" href="#">- Our Alumni</a></li>

        </ul>
      </li>

      <!-- National Competition -->
      <li class="nav-item">
        <a class="nav-link <?= ($currentPage == 'national.php') ? 'active' : '' ?>" href="national.php">
          National Competition
        </a>
      </li>

      <!-- News & More -->
      <li class="nav-item">
        <a class="nav-link dropdown-toggle <?= in_array($currentPage, $newsPages) ? 'active' : '' ?>"
           data-bs-toggle="collapse"
           href="#newsDropdown">
          News & More
        </a>

        <ul class="collapse list-unstyled ps-3 <?= in_array($currentPage, $newsPages) ? 'show' : '' ?>"
            id="newsDropdown">

          <li><a class="nav-link <?= ($currentPage == 'event&program.php') ? 'active' : '' ?>" href="event&program.php">- Events & Programs</a></li>
          <li><a class="nav-link <?= ($currentPage == 'blog.php') ? 'active' : '' ?>" href="blog.php">- Blog</a></li>
          <li><a class="nav-link <?= ($currentPage == 'gallery.php') ? 'active' : '' ?>" href="gallery.php">- Gallery</a></li>
          <!-- <li><a class="nav-link" href="#">- Login</a></li> -->

        </ul>
      </li>

      <!-- Contact -->
      <li class="nav-item mt-3">
        <a class="btn btn-enactus w-100" href="https://wa.me/2349023032547">
          Contact Us
        </a>
      </li>

    </ul>
  </div>
</div>
