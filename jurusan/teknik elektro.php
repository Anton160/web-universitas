<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar war navbar-expand-sm navbar-dark fixed-top">
        <div class="container">

            <a class="navbar-brand" href="../index.php">
                <img src="../img/logo3.png" alt="Bootstrap" width="280px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#id" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas-sm offcanvas-end" tabindex="-1" id="iff" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tentang kami</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../penerimaan.php">Penerimaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../mahasiswa_login.php">Mahasiswa</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Unit kerja
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../sarana.php">Sarana & Prasarana</a></li>
                                <li><a class="dropdown-item" href="../kurikulum.php">Kurikulum</a></li>
                                <li><a class="dropdown-item" href="../uks.php">Unit Kegiatan Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="../kerjasama.php">Kerjasama</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jurusan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="teknik informatika.php">Teknik Informatika</a></li>
                                <li><a class="dropdown-item" href="teknik elektro.php">Teknik Elektro</a></li>
                                <li><a class="dropdown-item" href="teknik mesin.php">Teknik Mesin</a></li>
                                <li><a class="dropdown-item" href="manajement.php">Management</a></li>
                                <li><a class="dropdown-item" href="akuntansi.php">Akuntansi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kontak.php">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="id" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tentang Kami</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../penerimaan.php">Penerimaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mahasiswa_login.php">Mahasiswa</a>
                </li>
                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Unit kerja
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../sarana.php">Sarana & Prasarana</a></li>
                                <li><a class="dropdown-item" href="../kurikulum.php">Kurikulum</a></li>
                                <li><a class="dropdown-item" href="../uks.php">Unit Kegiatan Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="../kerjasama.php">Kerjasama</a></li>
                            </ul>
                        </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Jurusan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="teknik informatika.php">Teknik Informatika</a></li>
                        <li><a class="dropdown-item" href="teknik elektro.php">Teknik Elektro</a></li>
                        <li><a class="dropdown-item" href="teknik mesin.php">Teknik Mesin</a></li>
                        <li><a class="dropdown-item" href="manajement.php">Management</a></li>
                        <li><a class="dropdown-item" href="akuntansi.php">Akuntansi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../kontak.php">Contact</a>
                </li>
            </ul>
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="container atas">
        <p class="fs-1 fw-light pt-5">Sarjana Teknik Elektro</p>
        <img src="../img/teknik elekro.jpeg" alt="" width="1200px" class="img-fluid pt-4">

        <p class="fs-3 fw-normal text-primary pt-5">Deskripsi kurikulum</p>
        <hr>
        <hr>
        <p class="fst-normal text-muted">Barang elekronik adalah salah satu bidang teknik paling signifikan yang mendorong evolusi kehidupan manusia dalam beberapa abad terakhir. Hal ini diperkirakan akan terus berjalan hingga masa depan. Teknik elektro memungkinkan teknologi yang membuka lembaran baru dalam kehidupan manusia.</p>
        <p class="fst-normal text-muted">Insinyur teknik elektro tidak diragukan lagi adalah agen transformasi yang diperlukan. Dengan memberikan praktek rekayasa terbaik di setiap aspek, seperti dalam perawatan dan operasi; menciptakan produk baru dan inovasi; melakukan riset tertinggi dalam bidang sains, dan sebagainya. Permintaan insinyur teknik elektro adalah salah satu yang tertinggi di bidang teknik.</p>
        <p class="fst-normal text-muted">Program studi teknik elektro di STEI ITB didukung oleh 53 anggota civitas akademika yang dihormati dalam bidang riset dan pendidikan. Mereka terlibat dalam berbagai aktivitas penelitian yang mencakup bidang seperti kontrol dan sistem, teknik biomedis, komunikasi, desain komputer, proses grafis dan gambar, sistem komputer dan jaringan, proses sinyal digital, elektronik, tenaga listrik, jaringan informasi, sistem pintar, proses distribusi paralel, material elektroteknik, rekayasa gelombang mikro, dan desain sirkuit terpadu VLSI.</p>
        <p class="fs-3 fw-normal text-primary">Tujuan pendidikan </p>
        <hr>
        <hr>
        <ol>
            <li>Lulusan akan memiliki karir yang sukses dalam profesinya di bidang rekayasa teknik elektro atau bidang yang terkait.</li>
            <li>Lulusan akan berhasil menempuh studi pascasarjana atau terlibat dalam pengembangan profesional.</li>
            <li>Lulusan akan menunjukkan kepemimpinan dan berperan aktif dalam memajukan komunitasnya, khususnya dalam sektor industri, pemerintah, maupun pendidikan.</li>
        </ol>
        <br><br>
        <p class="fs-3 fw-normal text-primary">Target pembelajaran</p>
        <hr>
        <hr>
        <ul>
            <li>Kemampuan untuk mengenali, memformulasikan, dan memecahkan masalah engineering kompleks dengan menerapkan prinsip engineering, ilmu pengetahuan, dan matematika</li>
            <li>Kemampuan untuk menerapkan engineering design untuk menghasilkan solusi yang memenuhi kebutuhan dengan memperhatikan masalah kesehatan, keselamatan, dan kesejahteraan umum dan juga sis budaya, sosial pendidikan dan ekonomis</li>
            <li>Kemampuan untuk berkomunikasi secara efektif dengan berbagai pihak</li>
            <li>Kemampuan mengenali tanggung jawab dan etika profesional dan membuat penilaian yang berbasiskan data/informasi yang mempertimbangkan dampak dari solusi engineering dalam kerangka global, ekonomi, lingkungan, dan sosial</li>
            <li>Kemampuan berfungsi secara efektif dalam tim dan dapat memimpin, menciptakan lingkungan yang inklusif, menentukan tujuan, rencana, dan mencapai sasaran</li>
            <li>Kemampuan merancang dan melakukan percobaan yang baik, menganalisa dan mengartikan data dan menggunakan penilaian enginerung untuk membuat kesimpulan</li>
            <li>Kemampuan mendapatkan dan mengaplikasikan kemampuan baru sesuai kebutuhan dengan cara/strategi belajar yang tepat</li>
            <li>Kemampuan mempelajari pengetahuan lanjut dalam bidang engineering/rekayasa</li>
        </ul>
        <br><br>
        <p class="fs-3 fw-normal text-primary">Prospek karir</p>
        <hr>
        <hr>
        <p>Gelar dalam bidang teknik elektro dapat memberikan anda kualifikasi dalam bidang karir di hampir segala lini industri. Hampir semua orang menggunakan listrik dan sistem peralatan elektronik, sehingga industri memerlukan ahli profesional untuk membangun, memperbaiki, dan meningkatkan kinerja alat-alat tersebut. Ahli teknik elektro bekerja di berbagai sektor industri penting, seperti: Telekomunikasi, Energi dan Tenaga Listrik, Komputer, Semikonduktor, Aerospace (ruang angkasa), Bio Engineering, Manufaktur, Pelayanan, Pendidikan dan Riset, Transportasi, dan Otomotif.</p>
        <p>Beberapa pekerjaan di bawah hanyalah mewakili sebagian kecil dari posisi yang tersedia:</p>
        <ol>
            <li>Ahli Riset yang bekerja di laboratorium, melakukan tes dan penemuan. Pekerjaan ini memerlukan kreativitas tingkat tinggi, juga kesabaran. Baik menemukan alat opto-elektronik atau sesederhana mendesain pembuka botol elektrik, ahli riset bertanggung jawab dalam tahap penemuan teknologi di balik setiap produk elektronik baru.</li>
            <li>Ketika teknologi baru ditemukan, teknologi tersebut harus diaplikasikan. Desainer teknik menggunakan simulasi komputer dan model untuk mengubah inovasi seperti tekonologi nirkabel ke dalam bagian-bagian kecil yang membentuk telepon seluler. Desainer teknik harus memvisualisasikan bagaimana bentuk bagian dalam dari produk masa depan, sembari menemukan beberapa skenario yang memungkinkan untuk pengaplikasian tekonologi baru tersebut.</li>
            <li>Insinyur proyek mengawasi banyak teknisi spesialisasi di dalam konstruksi dari prorotip produk berteknologi baru. Insinyur proyek haruslah memiliki kemampuan alami untuk memimpin, juga kemampuan tinggi dalam berbagai disiplin ilmu teknik elektro.</li>
            <li>Insinyur uji merancang program untuk mengecek fungsi dari perangkat elektronik dan untuk memecahkan masalah perangkat tersebut saat terjadi kesalahan. Mereka menjaga teknologi tetap bekerja dengan baik, dan memahami elemen mana yang harus diuji dan sesuai urutannya. Insinyur uji yang sukses tetap memiliki intuisi yang tajam meskipun bekerja dalam waktu lama.</li>
        </ol>

    </div>
    <br><br><br>

    <footer class="text-white text-center text-lg-start bg-dark">
        <div class="container p-4">
            <div class="row mt-4">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Tentang kami</h5>

                    <p>
                        Kami memeiliki beberapa kampus yang tersebar diantaranya kampus Ganesha,Kampus Cirebon,Kampus Jatinangor
                    </p>

                    <p>
                        Jika anda berminat berkunjung silahkan datangilah salah satu kampus kami kami akan menerima anda dengan baik
                    </p>

                    <div class="mt-4">
                        <nav class="nav">
                            <a class="nav-link text-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg></a>
                            <a class="nav-link text-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a>
                            <a class="nav-link text-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></a>
                            <a class="nav-link text-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg></a>
                            <a class="nav-link text-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg></a>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 pb-1">Search something</h5>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Search something">
                    </div>

                    <ul class="fa-ul text-start" style="margin-left: 1.65em;">

                        <li class="mb-3">
                            <span class="ms-2">Jl. Ganesa No.10 Kota Bandung</span>
                        </li>
                        <li class="mb-3">
                            <span class="ms-2">humas@itb.ac.id</span>
                        </li>
                        <li class="mb-3">
                            <span class="ms-2">+62-811-2101-920</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Jam Kunjungan</h5>

                    <table class="table text-center text-white">
                        <tbody class="fw-normal">
                            <tr>
                                <td>Senin - Kamis</td>
                                <td>08.00 - 17.00</td>
                            </tr>
                            <tr>
                                <td>Jumat - Sabtu</td>
                                <td>08.00 - 15.00:</td>
                            </tr>
                            <tr>
                                <td>Minggu:</td>
                                <td>Close</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="#">antoni_wahib</a>
        </div>
    </footer>
</body>

</html>