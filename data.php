<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
        /* CSS Header & Background */
        .masthead {
            min-height: 60vh; /* Tinggi header disesuaikan */
            background: url("assets/img/BANNER WEB dlm.png") !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-attachment: scroll !important;
            background-size: cover !important;
        }
        .zoom-peta {
    transition: transform 0.3s ease;
    cursor: zoom-in;
}

.zoom-peta:hover {
    transform: scale(1.02); /* Sedikit membesar saat hover */
}
</style>
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        </div>

<div class="container-fluid px-5 mt-5">

<div class="row mb-4">
        <div class="col-12">
            <div class="accordion" id="accordionPeta">
                <div class="accordion-item shadow border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePeta" aria-expanded="false" aria-controls="collapsePeta" style="background-color: #70391D;">
                            <i class="fas fa-map-marked-alt me-2"></i> LIHAT PETA KAMPUS & DESKRIPSI
                        </button>
                    </h2>
                    <div id="collapsePeta" class="accordion-collapse collapse" data-bs-parent="#accordionPeta">
                        <div class="accordion-body bg-white">
                            <div class="row align-items-start">
                                <div class="col-lg-7 mb-3 text-center">
                                    <img src="assets/img/denahkampus.jpg" class="img-fluid rounded shadow-sm" alt="Peta Kampus">
                                </div>
                                <div class="col-lg-5" style="max-height: 500px; overflow-y: auto; font-family: 'Times New Roman', serif; font-size: 0.95rem;">
                                    <h5 class="border-bottom pb-2 mb-3">Keterangan Denah:</h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li>1. Rumah Baru</li>
                                                <li>2. Perkantoran</li>
                                                <li>3. Dapur La Tansa</li>
                                                <li>4. Bapenta</li>
                                                <li>5. Wisma</li>
                                                <li>...</li> <li>22. Laundry</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-unstyled">
                                                <li>23. Gedung Baghdad</li>
                                                <li>24. MARIKORI</li>
                                                <li>25. Tempat Wudhu</li>
                                                <li>...</li> <li>44. Kantor Panitia 100 Thn</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- first row button -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-3">
            <div onclick="muatData('guru')" class="card text-white shadow h-100 py-2 btn-card-custom" style="cursor: pointer; background-color: #008080;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Guru</div>
                            <div class="h5 mb-0 font-weight-bold">Berdasarkan Bagian</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-users fa-2x text-white-50"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3">
            <div onclick="muatData('kelas')" class="card text-white shadow h-100 py-2 btn-card-custom" style="cursor: pointer; background-color: #2eebeb;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Santriwati</div>
                            <div class="h5 mb-0 font-weight-bold">Data kelas Santriwati</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-calendar-check fa-2x text-white-50"></i></div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-xl-3 col-md-6 mb-3">
            <div onclick="muatData('konsulat')" class="card text-white shadow h-100 py-2 btn-card-custom" style="cursor: pointer; background-color: #281aa7;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Konsulat Santriwati</div>
                            <div class="h5 mb-0 font-weight-bold">30 Konsulat</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-users fa-2x text-white-50"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3">
            <div onclick="muatData('panitiaguru')" class="card text-white shadow h-100 py-2 btn-card-custom" style="cursor: pointer; background-color: #519999;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Panitia</div>
                            <div class="h5 mb-0 font-weight-bold">panitia guru</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-calendar-check fa-2x text-white-50"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- second row button -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-3">
            <div onclick="muatData('ngabdi')" class="card text-white shadow h-100 py-2 btn-card-custom" style="cursor: pointer; background-color: #008080;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Guru</div>
                            <div class="h5 mb-0 font-weight-bold">Berdasarkan Pengabdian</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-users fa-2x text-white-50"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3">
            <div onclick="muatData('walikelas')" class="card text-white shadow h-100 py-2 btn-card-custom" style="cursor: pointer; background-color: #2eebeb;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Guru</div>
                            <div class="h5 mb-0 font-weight-bold">Data Wali Kelas</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-calendar-check fa-2x text-white-50"></i></div>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-xl-3 col-md-6 mb-3">
            <div onclick="muatData('jumlahpeserta')" class="card text-white shadow h-100 py-2 btn-card-custom" style="cursor: pointer; background-color: #281aa7;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Peserta Acara</div>
                            <div class="h5 mb-0 font-weight-bold">6 Kriteria</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-users fa-2x text-white-50"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-3">
            <div onclick="muatData('panitiaenam')" class="card text-white shadow h-100 py-2 btn-card-custom" style="cursor: pointer; background-color: #519999;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Data Panitia</div>
                            <div class="h5 mb-0 font-weight-bold">panitia kelas 6</div>
                        </div>
                        <div class="col-auto"><i class="fas fa-calendar-check fa-2x text-white-50"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" id="judul-chart">Memuat data...</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area position-relative" id="wadah-chart" style="min-height: 320px; height: auto;">
                    <div id="loading-spinner" class="d-none position-absolute w-100 h-100 bg-white d-flex justify-content-center align-items-center" style="z-index: 10; top: 0; left: 0;">
                            <div class="spinner-border text-primary" role="status"></div>
                            <span class="ms-3 font-weight-bold text-primary">Mengambil Data...</span>
                        </div>
                        <div id="myAreaChart"></div>
                       </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #myAreaChart {
    padding: 10px;
    width: 100%;
}

.table {
    margin-bottom: 0; /* Biar nggak ada jarak berlebih di bawah tabel */
}
    .btn-card-custom { transition: all 0.2s ease-in-out; border: none; }
    .btn-card-custom:hover { transform: translateY(-5px); filter: brightness(1.1); }
    .btn-card-custom:active { transform: scale(0.95); }

    .footer {
        background:url("assets/img/FOOTER WEB.png") !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-attachment: scroll !important;
        background-size: cover !important;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
let myChart; 

function muatData(jenis) {
    const wadah = document.getElementById('myAreaChart'); 
    const judul = document.getElementById('judul-chart');
    const spinner = document.getElementById('loading-spinner');

    spinner.classList.remove('d-none'); 
    wadah.style.opacity = '0'; 

    fetch(`ambil_csv.php?jenis=${jenis}`)
        .then(response => response.json())
        .then(data => {
            if (data.length === 0) {
                wadah.innerHTML = "<div class='alert alert-warning'>File tidak ditemukan.</div>";
            } else {
                let html = `<div class="table-responsive">
                    <table class="table table-bordered align-middle text-center" style="font-size: 14px; border: 1px solid #dee2e6;">`;
                
                // --- LOGIKA ROWSPAN OTOMATIS ---
                let rowSpanMap = []; // Untuk mencatat baris mana yang harus di-merge

                data.forEach((row, rowIndex) => {
                    if (rowIndex === 0) {
                        html += `<thead class="table-dark"><tr>`;
                        row.forEach(cell => { html += `<th class="text-center">${cell}</th>`; });
                        html += `</tr></thead><tbody>`;
                    } else {
                        const isTotalRow = row[0] && row[0].toString().toUpperCase().includes("TOTAL");

                        if (isTotalRow) {
                            let jmlCol = row.length;
                            const totalValue = row[jmlCol - 2] || row[jmlCol - 1]; // Mengambil angka total
                            html += `<tr class="table-secondary fw-bold">
                                        <td colspan="${jmlCol - 1}" class="text-center">TOTAL</td>
                                        <td>${totalValue}</td>
                                     </tr>`;
                        } else {
                            html += `<tr>`;
                            row.forEach((cell, colIndex) => {
                                let content = cell ? cell.trim() : "";

                                // Hanya lakukan auto-merge untuk 2 kolom pertama (No dan Room/Nama)
                                if (colIndex < 2 && (content === "" || content === "-")) {
                                    return; // Lewati karena akan dihandle oleh rowspan sel di atasnya
                                }

                                // Hitung berapa baris ke bawah yang kosong untuk kolom ini
                                let rowspan = 1;
                                if (colIndex < 2 && content !== "") {
                                    for (let i = rowIndex + 1; i < data.length; i++) {
                                        let nextCell = data[i][colIndex] ? data[i][colIndex].trim() : "";
                                        if (nextCell === "" || nextCell === "-") {
                                            rowspan++;
                                        } else {
                                            break;
                                        }
                                    }
                                }

                                if (rowspan > 1) {
                                    html += `<td rowspan="${rowspan}" class="fw-bold bg-light">${content}</td>`;
                                } else {
                                    html += `<td>${content}</td>`;
                                }
                            });
                            html += `</tr>`;
                        }
                    }
                });

                html += `</tbody></table></div>`;
                wadah.innerHTML = html;
            }

            const namaMenu = { 'guru': 'Data Guru Per-Bagian', 'santriwati': 'Rekapitulasi Santriwati', 'konsulat': 'Data Konsulat' };
            judul.innerText = namaMenu[jenis] || "Data Tabel";
            spinner.classList.add('d-none');
            wadah.style.opacity = '1';
        });
}
</script>
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