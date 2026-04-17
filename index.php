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
    /* 1. Aturan Dasar untuk SEMUA teks Arab */
body[style*="direction: rtl"] .lang-txt {
    font-family: 'Amiri', serif !important;
    line-height: 1 !important;
}

/* 2. Khusus untuk Judul (H1) - Tetap Besar */
body[style*="direction: rtl"] h1.lang-txt {
    font-size: 3rem !important; /* Ukuran judul raksasa */
    margin-bottom: 20px;
}

/* 3. Khusus untuk Slogan (H2) - Sedang */
body[style*="direction: rtl"] h2.lang-txt {
    font-size: 1.8rem !important;
}

/* 4. Khusus untuk Paragraf Narasi (P) - Kecilkan di sini */
body[style*="direction: rtl"] p.lang-txt {
    font-size: 1.2rem !important; /* Ukuran narasi yang nyaman dibaca */
    text-align: justify;         /* Agar rapi rata kanan-kiri */
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
    <script>
function gantiBahasa(pilihan) {
    // --- BAGIAN 1: GANTI TEKS (Sama seperti sebelumnya) ---
    const elemenTeks = document.querySelectorAll('.lang-txt');
    elemenTeks.forEach(el => {
        const kunci = el.getAttribute('data-key');
        if (kamus[pilihan][kunci]) {
            el.innerText = kamus[pilihan][kunci];
        }
    });
    // 2. Trik Khusus Arab: Ubah Arah Teks (RTL)--------------------------------------
if (pilihan === 'ar') {
        document.body.style.direction = 'rtl';
        document.body.style.textAlign = 'right';
    } else {
        document.body.style.direction = 'ltr';
        document.body.style.textAlign = 'left';
    }
    // 3. Update Warna Tombol (Biar "Nyala" di tombol yang benar)
    const btnID = document.getElementById('btn-id');
    const btnEN = document.getElementById('btn-en');
    const btnAR = document.getElementById('btn-ar');

    [btnID, btnEN, btnAR].forEach(btn => {
    btn.classList.remove('btn-success');
    btn.classList.add('btn-outline-dark');
});

// 2. Nyalakan HANYA tombol yang dipilih (Success/Hijau)
const btnAktif = document.getElementById('btn-' + pilihan);
if (btnAktif) {
    btnAktif.classList.replace('btn-outline-dark', 'btn-success');
}
}
window.onload = function() {
    const bahasaTerakhir = localStorage.getItem('bahasaDipilih');
    
    if (bahasaTerakhir) {
        gantiBahasa(bahasaTerakhir);
    } else {
        gantiBahasa('id');
    }
};
</script>
</body>
</html>