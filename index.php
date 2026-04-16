<?php 
    include 'header.php'; 
    include 'bahasa.php';
?>
<style>
    /* Global Font Fix */
    body, h1, h2, h3, h4, h5, h6, p, a, button {
        font-family: 'Times New Roman', Times, serif !important;
    }

    /* Navigation Bar Styling */
    #mainNav .nav-link {
        font-weight: 700 !important;
        font-size: 16px !important;
        text-transform: uppercase !important;
        letter-spacing: 0.1rem !important;
    }

    #mainNav .navbar-brand {
        font-weight: 800 !important;
        letter-spacing: 2px !important;
    }

    /* Masthead / Judul Utama */
    .masthead h1 {
        font-size: 3.5rem !important;
        line-height: 1.2; 
    }

    .masthead h2 {
        font-size: 1.2rem !important;
        max-width: 100% !important;
        margin: 0 auto !important;
    }

    /* Perbaikan Tombol Sidebar agar tetap di pojok kiri */
    .btn-sidebar-nav {
        background: #212529 !important;
        color: white !important;
        border: none !important;
        padding: 8px 15px !important;
        position: absolute;
        left: 10px;
        top: 10px;
        z-index: 9999;
    }
</style>

<body id="page-top">

<?php if(isset($_GET['akses']) || isset($_GET['halaman'])): ?>
    <?php include 'navbar.php'; ?>
<?php endif; ?>

    <div id="content-display">
        <?php 
            if(isset($_GET['akses']) && $_GET['akses'] == 'masuk'){
                include "beranda.php";
            } 
            elseif(isset($_GET['halaman'])){
                $hal = $_GET['halaman'];
                if(file_exists($hal . ".php")){
                    include $hal . ".php";
                } else {
                    echo "<h2 class='text-white text-center mt-5'>Halaman Tidak Ditemukan!</h2>";
                }
            }
            else {
                include "landing_page.php";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>