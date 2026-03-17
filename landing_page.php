
<style>
    .masthead {
        
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(12, 126, 9, 0.7) 75%, #0bd372 100%), 
                    url("assets/img/test-bg.jpg") !important;
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
</style>

<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase" style="font-size: 3rem;">PEKAN PERKENALAN</h1>
                <h1 class="mx-auto my-0 text-uppercase" style="font-size: 2.5rem;">KHUTBATU-L-'ARSY</h1> 
                <h2 class="text-white-50 mx-auto mt-2 mb-5">"Gontor Berkomitmen Menanamkan Nilai-Nilai Islam"</h2>
                
                <a class="btn btn-primary px-4 py-3 mt-5" href="index.php?akses=masuk" >
                    BERANDA
                </a>
            </div> 
        </div>
    </div>
</header>

<style>
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