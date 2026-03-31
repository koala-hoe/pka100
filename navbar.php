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