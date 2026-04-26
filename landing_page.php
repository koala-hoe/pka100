<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page P3KA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Pengaman agar tidak bisa digeser ke kanan */
        html, body {
            overflow-x: hidden;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif !important;
        }

    /* Versi Desktop (Default) */
    .masthead {
        min-height: 100vh;
        background: url("assets/img/BANNER WEB.png") no-repeat center center !important;
        background-size: cover !important;
    }

        /* Pembungkus Tombol agar selalu di bawah */
        .wrap-tombol {
            position: absolute;
            bottom: 10%; /* Jarak 10% dari bawah layar */
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            text-align: center;
            z-index: 100;
        }

        /* Desain Tombol */
        .tombol-gerak {
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
            letter-spacing: 2px;
        }

        /* Efek saat Kursor Menyentuh Tombol (Hover) */
        .tombol-gerak:hover {
            transform: scale(1.1);
            filter: drop-shadow(0px 5px 15px rgba(255, 255, 255, 0.4));
        }

        /* Efek Membal Pas Diklik (Active) */
        .tombol-gerak:active {
            transform: scale(0.9);
            transition: 0.1s;
        }

        /* Responsif untuk layar HP */
        @media (max-width: 768px) {
        .masthead {
            /* Ganti filenya ke gambar yang sudah kamu desain khusus versi berdiri */
            background: url("assets/img/BANNER MOBILE.png") no-repeat center center !important;
            background-size: cover !important; 
            /* Pakai 'cover' lagi karena gambarnya sudah tinggi, jadi gak bakal kepotong aneh */}
            
            .wrap-tombol {
                bottom: 8%; /* Sedikit lebih turun di HP */
            }

            .tombol-gerak {
                width: 80%; /* Tombol melebar di HP agar mudah ditekan */
                padding: 15px 0 !important;
            }
        }
    </style>
</head>
<body id="page-top">

    <header class="masthead">
        <div class="wrap-tombol">
            <a class="btn btn-primary px-5 py-3 tombol-gerak" href="index.php?akses=masuk">
                BERANDA
            </a>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>