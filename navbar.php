<?php 
    // 1. Definisikan semua halaman yang BOLEH diakses
    $rentetan = ['acara', 'data', 'serba_serbi', 'rentetan', 'kritik']; 
    
    // 2. Ambil nilai dari URL (biar nulisnya lebih pendek nanti)
    $halaman_aktif = isset($_GET['halaman']) ? $_GET['halaman'] : null;
    $akses_masuk = (isset($_GET['akses']) && $_GET['akses'] == 'masuk');

    // Tampilkan Sidebar HANYA jika halaman ada di daftar valid
    if(in_array($halaman_aktif, $rentetan)): 
?>
    <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebarPKA" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header border-bottom border-secondary">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">MENU NAVIGASI</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?akses=masuk"><i class="fas fa-home me-2"></i> Beranda</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=rentetan"><i class="fas fa-book-open me-2"></i> Rentetan Kegiatan PKA</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=data"><i class="fas fa-book-open me-2"></i> Data</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=acara"><i class="fas fa-book-open me-2"></i>Acara</a>
          </li>
           <li class="nav-item mb-2">
            <a class="nav-link text-white hover-link" href="index.php?halaman=serba_serbi"><i class="fas fa-book-open me-2"></i> Serba-Serbi</a>
          </li>
          <hr>
          <li class="nav-item mb-2">
            <a class="nav-link text-danger" href="index.php"><i class="fas fa-sign-out-alt me-2"></i> Keluar</a>
          </li>
        </ul>
      </div>
    </div>
<?php endif; ?>



 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container-fluid px-4 px-lg-5 d-flex align-items-center">
         <?php if(isset($_GET['halaman']) && in_array($_GET['halaman'], $rentetan)): ?>
            <button class="btn btn-dark me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarPKA">
                <i class="fa-solid fa-bars"></i>
            </button>
        <?php endif; ?>

        <a class="navbar-brand fw-bold">GUIDEBOOK PKA</a>
        
    </div>
</nav>