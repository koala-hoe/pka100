
<style>
    .masthead {
        background:url("assets/img/BANNER WEB.png") !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-attachment: scroll !important;
        background-size: cover !important;
    }
    .footer {
        background:url("assets/img/FOOTER WEB.png") !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-attachment: scroll !important;
        background-size: cover !important;
    }
    @media (max-width: 768px) {
        .masthead h1 {
            font-size: 1.8rem !important; /* Biar teks gak nabrak dinding HP */
        }
        .masthead h2 {
            font-size: 1rem !important;
        }
    }
    
    /* Pengaman agar tidak bisa digeser ke kanan */
    html, body {
        overflow-x: hidden;
        width: 100%;
    }
    footer.footer {
    font-family: 'Times New Roman', serif !important;
    letter-spacing: 1px; /* Memberi jarak antar huruf agar elegan */
    }

footer.footer strong {
    font-size: 18px;
    letter-spacing: 2px;
    
}
.footer .container-fluid {
    padding-left: 5% !important;
    padding-right: 5% !important;
}
/* Mengatur Font Judul di Main Stuff */
#main_stuff .featured-text h4 {
    font-family: 'Times New Roman', serif !important;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #000; /* Warna hitam tegas */
}

/* Mengatur Font Paragraf di Main Stuff */
#main_stuff .featured-text p {
    font-family: 'Times New Roman', serif !important;
    font-size: 16px;
    line-height: 1.6;
}
</style>

<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            </div> 
        </div>
</header>
<!-- Menu-->
        <section class="Menu-section text-center pt-5" id="Menu"> 
    <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-Black mb-4 lang-txt" data-key="slogan"></h2>
                    </div>
                </div>
                <img class="img-fluid " src="assets/img/lightning.png"style="width: 500px; height: auto;" alt="..." />
                 <p class= "text-Black\-50 pt-3 mb-4 lang-txt" data-key="narasi_pembuka" >
                </p>
         </div>
        </section>
        <!--Main Stuff-->
        <section class="main stuff" id="main_stuff" style="background: transparent;">
            <div class="container px-4 px-lg-5">
                <!--1 Rentetan Kegiatan PKA Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/Live Music.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4 class= "lang-txt" data-key="menu_rentetan"></h4>
                            <p class="text-black-50 mb-3 lang-txt" data-key="narasiup_rentetan"></p>
                    <!-- ini buat tombol -->
                       <a href="index.php?halaman=rentetan"class="tombol-gerak">
                        <i class="fa-solid fa-circle-chevron-right fa-2x"></i>
                      </a>
                        </div>
                    </div>
                </div>
                 <!--Data Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/IMG_7897.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4 class= "lang-txt" data-key="menu_data"></h4>
                            <p class="text-black-50 mb-3 lang-txt" data-key="narasiup_data"></p>
                    <!-- ini buat tombol -->
                        <a href="index.php?halaman=data"class="tombol-gerak">
                        <i class="fa-solid fa-circle-chevron-right fa-2x"></i>
                      </a>
                        </div>
                    </div>
                </div>
                 <!-- Acara Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/IMG_7187.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4 class="lang-txt" data-key="menu_acara"></h4>
                            <p class="text-black-50 mb-3 lang-txt" data-key="narasiup_acara"></p>
                    <!-- ini buat tombol -->
                        <a href="index.php?halaman=acara" class="tombol-gerak">
                        <i class="fa-solid fa-circle-chevron-right fa-2x"></i>
                      </a>
                        </div>
                    </div>
                </div>
                <!-- Serba Serbi Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/IMG_8293.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4 class="lang-txt" data-key="menu_serba"></h4>
                            <p class="text-black-50 mb-3 lang-txt" data-key="narasiup_serba"></p>
                    <!-- ini buat tombol -->
                      <a href="index.php?halaman=serba_serbi" class="tombol-gerak">
                         <i class="fa-solid fa-circle-chevron-right fa-2x"></i>
                      </a>
                        </div>
                    </div>
                </div>
        </section>
        <style>
        
/* Efek Gerak Otomatis (Melayang Naik Turun) */
@keyframes melayang {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-15px); }
    100% { transform: translateY(0px); }
}

.tombol-gerak {
    display: inline-block;
    text-decoration: none;
    transition: all 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Efek pegas */
    animation: melayang 2s ease-in-out infinite; /* Biar gerak terus */
    cursor: pointer;
}

/* Efek saat Kursor Menyentuh Tombol (Hover) */
.tombol-gerak:hover {
    scale: 1.2;
    filter: drop-shadow(0px 5px 15px rgba(255, 255, 255, 0.4));
    animation-play-state: paused; /* Berhenti melayang pas mau diklik */
}

/* Efek Membal Pas Diklik (Active) */
.tombol-gerak:active {
    transform: scale(0.8); /* Mengecil mendadak seperti ditekan */
    transition: 0.1s;
}
</style>
        <!-- Credit-->
      <footer class="footer py-5 text-black;">
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
                    <p class="text-black-50">Pondok Modern Darussalam Gontor</p>
                </div>
                <div class="small text-black-50 mt-4">
                    Copyright &copy; PKA 100 Gontor 2026
                </div>
            </div>
        </div>
    </div>
</footer>
        </section>
    </body>
</html>
