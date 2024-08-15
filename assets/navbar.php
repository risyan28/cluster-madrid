<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <!-- <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1> -->
                    <img src="img/madrid-NoBackground.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Beranda</a>
                        <a href="about.php" class="nav-item nav-link">Tentang</a>
                        <a href="service.php" class="nav-item nav-link">Pelayanan</a>
                        <a href="blog.php" class="nav-item nav-link">Berita Publik</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Iuran Pengelolaan Lingkungan</a>
                            <div class="dropdown-menu m-0">
                                <a href="ipl.php" class="dropdown-item">IPL</a>
                                <a href="donasi.php" class="dropdown-item">Donasi</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program</a>
                            <div class="dropdown-menu m-0">
                                <a href="umkm.php" class="dropdown-item">UMKM</a>
                                <a href="olahraga.php" class="dropdown-item">Olahraga</a>
                                <a href="keagamaan.php" class="dropdown-item">Keagamaan</a>
                                <a href="sosial.php" class="dropdown-item">Sosial</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil Pengurus</a>
                            <div class="dropdown-menu m-0">
                                <a href="rw16.php" class="dropdown-item">RW 016</a>
                                <a href="rt01.php" class="dropdown-item">RT 001</a>
                                <a href="rt02.php" class="dropdown-item">RT 002</a>
                                <a href="rt03.php" class="dropdown-item">RT 003</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>



<script>
  function addActiveClass() {
    // Get the current URL path and remove any trailing slash
    const path = window.location.pathname.split('/').pop() || 'index.php';

    // Get all navigation links within the navbar
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Loop through each navigation link
    navLinks.forEach(link => {
      // Get the href attribute of the navigation link
      const href = link.getAttribute('href');

      // Check if the href attribute matches the current URL path
      if (path === href) {
        // Add the "active" class to the link
        link.classList.add('active');
      }
    });
  }

  document.addEventListener('DOMContentLoaded', addActiveClass);
</script>
