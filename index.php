<?php 
    include 'header.php'; 
    include 'bahasa.php';
?>
<style>
    html, body {
    margin: 0;
    padding: 0;
    min-height: 100%; /* Memastikan background sampai ke paling bawah */
}

body {
    /* Menggunakan path yang sudah benar dari gambar terakhirmu */
    background-image: url('assets/img/Background Marmer.png'); 
    background-attachment: fixed; /* Menjaga background tetap saat di-scroll */
    background-size: 100% auto;   /* Menutup lebar layar secara penuh */
    background-position: top center;
    background-repeat: repeat-y;  /* Mengulang tekstur ke bawah jika konten sangat panjang */
    background-color: #f8f9fa;    /* Warna cadangan jika gambar gagal load */
}
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
    /* Selector ini mendeteksi elemen yang isinya bahasa Arab */
.lang-txt:lang(ar), 
[data-key*="ar"] .lang-txt {
    font-family: 'Amiri', serif !important;
    font-size: 1.25rem !important;
    line-height: 1.8 !important;
}

/* Khusus untuk judul agar tetap proporsional */
h1.lang-txt:lang(ar) {
    font-size: 2.5rem !important;
}
/* Mengunci Footer agar selalu LTR dan rata kiri */
footer, .footer-section, #main-footer {
    direction: ltr !important;
    text-align: left !important;
}

/* Jika di dalam footer ada teks yang harus tetap bisa ganti bahasa (seperti Nama Tim) */
footer .lang-txt {
    text-align: inherit !important; /* Mengikuti pengaturan footer, bukan body */
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
function gantiBahasa(pilihan) {
    // ... kode lainnya ...

    const footer = document.querySelector('footer');
    if (footer) {
        // Footer selalu dipaksa ke kiri (LTR)
        footer.style.direction = 'ltr';
        footer.style.textAlign = 'left';
    }
    
    localStorage.setItem('bahasaDipilih', pilihan);
}
}
window.onload = function() {
    const bahasaTerakhir = localStorage.getItem('bahasaDipilih');
    
    if (bahasaTerakhir) {
        gantiBahasa(bahasaTerakhir);
    } else {
        gantiBahasa('id');
    }
    window.scrollTo(0, 0); 
    localStorage.setItem('bahasaDipilih', pilihan);
};
</script>
</body>
</html>