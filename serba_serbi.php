<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serba-Serbi PKA 100 Gontor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* CSS Header & Background */
        .masthead {
            min-height: 60vh; /* Tinggi header disesuaikan */
            background: url("assets/img/BANNER WEB.png") !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-attachment: scroll !important;
            background-size: cover !important;
        }

        /* Styling Galeri */
        .item-serba {
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        
        .item-serba:hover {
            transform: translateY(-5px);
        }

        .img-serba {
            width: 100%;
            height: 250px; /* Samakan tinggi semua kotak */
            object-fit: cover; /* Biar gambar tidak gepeng */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .caption-serba {
            font-family: 'Times New Roman', serif;
            font-weight: bold;
            margin-top: 10px;
            color: #70391D;
        }

        /* Pengaman agar tidak bisa digeser ke kanan */
        html, body {
            overflow-x: hidden;
            width: 100%;
        }
    </style>
</head>
<body>

<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        </div>
</header>

<section class="Menu-section text-center pt-5" id="Menu"> 
    <div class="text-center">
    <img id="layarUtama" class="img-fluid mb-4" src="assets/img/lightning.png" 
         style="max-width: 600px; width: 100%; height: auto; border-radius: 15px; transition: 0.4s; cursor: pointer;" alt="..." />
</div>

<p class="text-black-50 pt-3 mb-5" style="font-style: italic; font-size: 1.2rem;">
    Bagian ini berisi serba-serbi PKA 100 Gontor... (dst)
</p>

<div class="row mt-5">
    <div class="col-lg-4 col-md-6 item-serba">
        <img src="assets/img/DESIGN DALAM QOAH.jpeg" class="img-serba"
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Desain Dalam Auditorium</p>
    </div>

    <div class="col-lg-4 col-md-6 item-serba">
        <img src="assets/img/CATALYST.jpg" class="img-serba"
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Formasi Bendera</p>
    </div>

    <div class="col-lg-4 col-md-6 item-serba">
        <img src="assets/img/maket.jpeg" class="img-serba"
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Maket</p>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-4 col-md-6 item-serba"> 
        <img src="assets/img/DESIGN DALAM QOAH.jpeg" class="img-serba"
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Desain Dekorasi</p>
    </div>

    <div class="col-lg-4 col-md-6 item-serba">
        <img src="assets/img/IMG_8014.jpg" class="img-serba"
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Shape Kaos & Atribut</p>
    </div>

    <div class="col-lg-4 col-md-6 item-serba">
        <img src="assets/img/IMG_9487.jpg" class="img-serba" 
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Map Kampus</p>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-4 col-md-6 item-serba">
        <img src="assets/img/DESIGN DALAM QOAH.jpeg" class="img-serba"
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Desain Dalam Auditorium</p>
    </div>

    <div class="col-lg-4 col-md-6 item-serba">
        <img src="assets/img/CATALYST.jpg" class="img-serba"
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Formasi Bendera</p>
    </div>

    <div class="col-lg-4 col-md-6 item-serba">
        <img src="assets/img/maket.jpeg" class="img-serba"
             style="cursor: pointer;" onclick="tampilkanGambar(this.src)">
        <p class="caption-serba">Maket</p>
    </div>
</div>
<script>
function tampilkanGambar(linkBaru) {
    const layar = document.getElementById('layarUtama');
    
    // Efek memudar saat ganti
    layar.style.opacity = '0';
    
    setTimeout(() => {
        layar.src = linkBaru;
        layar.style.opacity = '1';
    }, 300);

    // Scroll otomatis ke atas layar utama supaya user langsung lihat gambarnya
    window.scrollTo({
        top: document.getElementById('Menu').offsetTop,
        behavior: 'smooth'
    });
}
</script>
<!-- Credit-->
      <footer class="footer py-5 text-white" style="background-color: #70391D; font-family: 'Times New Roman', serif;">
    <div class="container-fluid px-lg-5"> <div class="row">
            <div class="col-lg-8 text-start mb-4 mb-lg-0">
                <h5 class="text-uppercase mb-3" style="letter-spacing: 2px; border-bottom: 1px solid rgba(255,255,255,0.2); display: inline-block; padding-bottom: 5px;">Tim Redaksi</h5>
                
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-1"><strong>Penasihat:</strong> Al-Ustadz Dr.Nurul Salis Alamin, M.Pd.I.</p>
                        <p class="mb-1"><strong>Pembimbing:</strong> Al-Ustadz Farouq Muhammad Syarif, S.Fill.I.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1"><strong>Tim Penulis:</strong> Al-Ustadzah Maghfiro Ihzani Maulania, Al-Ustadzah A'izzaty Alfatul Urfi, Al-Ustadzah Sri Wahyuni </p>
                        <p class="mb-1"><strong>Tim Layout:</strong> Al-Ustadzah Siti Avila Amadea, Al-Ustadzah Dea El Syifana Qurratu'ain, Al-Ustadzah Erina Aristawidya Karsono</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-lg-end text-start">
                <div class="mb-2">
                    <h5 class="text-uppercase mb-0">Panitia PKA 100 Gontor</h5>
                    <p class="text-white-50">Pondok Modern Darussalam Gontor</p>
                </div>
                <div class="small text-white-50 mt-4">
                    Copyright &copy; PKA 100 Gontor 2026
                </div>
            </div>
        </div>
    </div>
</footer>