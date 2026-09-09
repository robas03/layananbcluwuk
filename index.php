<?php
// index.php - Portal Layanan Digital Bea Cukai Luwuk
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal Layanan Digital Bea Cukai Luwuk untuk Pegawai dan Pengguna Jasa">
    <meta name="theme-color" content="#0077ff">
    <title>Portal Bea Cukai Luwuk</title>
    
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- Bootstrap Icons via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --primary: #1a237e;
            --secondary: #283593;
            --accent: #ffc107;
            --gradient-start: #0077ff;
            --gradient-end: #1c74f7;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }
        
        /* Hero Section */
        .hero {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 24px;
            padding: 2.5rem 2rem;
            margin: 2rem auto;
            max-width: 1200px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
            border: 1px solid rgba(255,255,255,0.25);
            flex: 1;
        }
        
        /* Logo & Header */
        .logo-wrapper {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .logo-img {
            max-height: 100px;
            width: auto;
            filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));
            margin-bottom: 1rem;
        }

        h1 {
            color: white;
            font-weight: 700;
            font-size: clamp(1.75rem, 5vw, 2.5rem);
            text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
            margin-bottom: 0.5rem;
        }

        .subtitle {
            color: rgba(255,255,255,0.95);
            font-size: clamp(0.95rem, 2.5vw, 1.15rem);
            text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
        }
        
        /* Service Cards */
        .service-card {
            border-radius: 18px;
            padding: 2rem 1.5rem;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .service-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--accent);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.25);
        }

        .service-card:hover::before {
            transform: scaleX(1);
        }
        
        .card-employee {
            background: linear-gradient(135deg, #00509d 0%, #0066cc 100%);
            color: white;
        }

        .card-user {
            background: linear-gradient(135deg, #c7772b 0%, #d9903f 100%);
            color: white;
        }

        .service-icon {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            display: block;
            transition: transform 0.4s ease;
        }

        .card-employee .service-icon { color: var(--accent); }
        .card-user .service-icon { color: white; }

        .service-card:hover .service-icon {
            transform: scale(1.15) rotate(5deg);
        }

        .service-title {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .service-desc {
            font-size: 0.95rem;
            opacity: 0.95;
            margin-bottom: 1.25rem;
        }
        
        .btn-access {
            background: white;
            color: var(--primary);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            border: none;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-access:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        .card-employee .btn-access { color: #00509d; }
        .card-user .btn-access { color: #c7772b; }
        
        /* Features */
        .features {
            margin-top: 3rem;
        }

        .feature-item {
            color: white;
            padding: 1rem;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: scale(1.05);
        }

        .feature-item i {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }

        .feature-item h5 {
            font-weight: 600;
            margin: 0.75rem 0 0.5rem;
            font-size: 1.1rem;
        }

        .feature-item p {
            font-size: 0.9rem;
            opacity: 0.85;
            margin: 0;
        }
        
        /* Footer */
        footer {
            background: rgba(0,0,0,0.25);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        footer a {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: white;
        }

        footer .social-link {
            display: inline-block;
            margin: 0 0.5rem;
            transition: transform 0.3s ease;
        }

        footer .social-link:hover {
            transform: translateY(-3px);
        }
        
        /* Animated Background */
        .bg-shapes {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: -1;
            pointer-events: none;
        }
        
        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.08;
            animation: float 22s linear infinite;
        }

        .shape:nth-child(1) { 
            left: 10%; width: 80px; height: 80px; 
            background: var(--accent); animation-delay: 0s; 
        }
        .shape:nth-child(2) { 
            left: 20%; width: 60px; height: 60px; 
            background: white; animation-delay: 2s; 
        }
        .shape:nth-child(3) { 
            left: 70%; width: 100px; height: 100px; 
            background: var(--accent); animation-delay: 4s; 
        }
        .shape:nth-child(4) { 
            left: 80%; width: 70px; height: 70px; 
            background: white; animation-delay: 6s; 
        }

        @keyframes float {
            0%, 100% { transform: translateY(100vh) rotate(0deg); }
            50% { transform: translateY(-100px) rotate(180deg); }
        }
        
        /* Modal Enhancements */
        .swal2-popup {
            border-radius: 20px !important;
        }

        .list-group-item {
            border: none;
            border-bottom: 1px solid #f0f0f0;
            padding: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .list-group-item:hover {
            background: #f8f9fa;
            transform: translateX(5px);
        }

        .list-group-item:last-child {
            border-bottom: none;
        }

        .list-group-item h6 {
            margin: 0;
            color: var(--primary);
            font-weight: 600;
        }

        .list-group-item small {
            color: #666;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                padding: 2rem 1rem;
                margin: 1rem;
            }

            .service-card {
                margin-bottom: 1.5rem;
            }

            .features {
                margin-top: 2rem;
            }

            footer .text-md-end {
                text-align: center !important;
                margin-top: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            h1 { font-size: 1.5rem; }
            .subtitle { font-size: 0.95rem; }
            .service-icon { font-size: 3rem; }
            .service-title { font-size: 1.4rem; }
            .logo-img { max-height: 70px; }
        }

        /* Performance Optimization */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="bg-shapes" aria-hidden="true">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="hero">
            <!-- Logo & Header -->
            <div class="logo-wrapper">
                <img src="images/logo.png" alt="Logo Bea Cukai Luwuk" class="logo-img">
                <h1>BEA CUKAI LUWUK</h1>
                <p class="subtitle">Portal Layanan Digital Terpadu</p>
            </div>

            <!-- Service Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="service-card card-employee" onclick="showEmployeeServices()">
                        <i class="bi bi-person-badge service-icon" aria-hidden="true"></i>
                        <h3 class="service-title">Layanan Pegawai</h3>
                        <p class="service-desc">Akses layanan internal untuk pegawai Bea Cukai Luwuk</p>
                        <button class="btn-access">
                            <i class="bi bi-arrow-right-circle"></i>
                            <span>Masuk</span>
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-card card-user" onclick="showUserServices()">
                        <i class="bi bi-people service-icon" aria-hidden="true"></i>
                        <h3 class="service-title">Layanan Pengguna Jasa</h3>
                        <p class="service-desc">Akses layanan untuk masyarakat dan pengguna jasa</p>
                        <button class="btn-access">
                            <i class="bi bi-arrow-right-circle"></i>
                            <span>Masuk</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Features -->
            <div class="row features">
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-clock-history" aria-hidden="true"></i>
                        <h5>Layanan 24/7 *</h5>
                        <p>Akses layanan kapan saja</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-shield-check" aria-hidden="true"></i>
                        <h5>Aman & Terpercaya</h5>
                        <p>Sistem terenkripsi</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <i class="bi bi-headset" aria-hidden="true"></i>
                        <h5>Dukungan Penuh</h5>
                        <p>Tim siap membantu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h5 class="fw-bold">Bea Cukai Luwuk</h5>
                    <p class="mb-1">Jl. Ahmad Yani No. 140, Luwuk, Banggai, Sulawesi Tengah</p>
                    <p class="mb-0">Telp: (0461) 23615 | Email: bcluwuk@kemenkeu.go.id</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-2">Ikuti kami:</p>
                    <a href="https://facebook.com/bcluwuk" target="_blank" class="social-link" aria-label="Facebook">
                        <i class="bi bi-facebook fs-4"></i>
                    </a>
                    <a href="https://twitter.com/bcluwuk" target="_blank" class="social-link" aria-label="Twitter">
                        <i class="bi bi-twitter fs-4"></i>
                    </a>
                    <a href="https://instagram.com/bcluwuk" target="_blank" class="social-link" aria-label="Instagram">
                        <i class="bi bi-instagram fs-4"></i>
                    </a>
                    <a href="https://youtube.com/@bcluwuk" target="_blank" class="social-link" aria-label="YouTube">
                        <i class="bi bi-youtube fs-4"></i>
                    </a>
                </div>
            </div>
            <hr class="my-3 border-secondary opacity-50">
            <div class="text-center">
                <p class="mb-0 small">&copy; <?php echo date('Y'); ?> Bea Cukai Luwuk. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <!-- SweetAlert2 via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        // Service URLs - FIXED: Added missing comma
        const serviceUrls = {
            'SALODIK': 'https://salodik.layananbcluwuk.my.id',
            'BCLJagain': 'https://bcljagain.layananbcluwuk.my.id',
            'MaLu': 'https://malu.layananbcluwuk.my.id',
            'Laporan Kegiatan': 'https://layananbcluwuk.my.id/laporan',
            'Konsultasi': 'https://malu.layananbcluwuk.my.id/publik.php',
            'Aduan': 'https://malu.layananbcluwuk.my.id/publik_aduan.php',
            'Layanan': 'https://linktr.ee/bcluwuk',
            'SKM': 'https://forms.cloud.microsoft/Pages/ResponsePage.aspx?id=ZrNv7SKD80aRXsTQN6RUqUHW-Z1OdaZHlGb3jAd0e1VUOVo1S1E3R0VVSTZJU0ZYSEk5TUdJMUJHMSQlQCNjPTEkJUAjdD1n',
            'Upload Media': 'https://malu.layananbcluwuk.my.id/login_upload.php'
        };

        // Employee Services Modal
        function showEmployeeServices() {
            Swal.fire({
                title: 'Layanan Pegawai',
                html: `
                    <div class="text-start">
                        <div class="list-group list-group-flush">
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('SALODIK')">
                                <i class="bi bi-file-earmark-pdf me-3 text-danger fs-4"></i>
                                <div>
                                    <h6>SALODIK</h6>
                                    <small class="text-muted">Sistem Aplikasi Layanan Dokumen Kepabeanan</small>
                                </div>
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('BCLJagain')">
                                <i class="bi bi-box-arrow-in-right me-3 text-primary fs-4"></i>
                                <div>
                                    <h6>BCL Jagain</h6>
                                    <small class="text-muted">Sistem Internal BCL Jagain</small>
                                </div>
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('MaLu')">
                                <i class="bi bi-calendar-check me-3 text-success fs-4"></i>
                                <div>
                                    <h6>MaLu</h6>
                                    <small class="text-muted">Manajemen Layanan</small>
                                </div>
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('Laporan Kegiatan')">
                                <i class="bi bi-file-earmark-text me-3 text-info fs-4"></i>
                                <div>
                                    <h6>Laporan Kegiatan</h6>
                                    <small class="text-muted">Pembuatan dan monitoring laporan</small>
                                </div>
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('Upload Media')">
                                <i class="bi bi-cloud-upload me-3 text-warning fs-4"></i>
                                <div>
                                    <h6>Upload Media</h6>
                                    <small class="text-muted">Upload Foto/Video Kegiatan di Lapangan</small>
                                </div>
                            </button>
                        </div>
                    </div>
                `,
                width: '550px',
                showCloseButton: true,
                showConfirmButton: false,
                customClass: { popup: 'rounded-4' }
            });
        }

        // User Services Modal
        function showUserServices() {
            Swal.fire({
                title: 'Layanan Pengguna Jasa',
                html: `
                    <div class="text-start">
                        <div class="list-group list-group-flush">
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('SALODIK')">
                                <i class="bi bi-file-earmark-pdf me-3 text-danger fs-4"></i>
                                <div>
                                    <h6>SALODIK</h6>
                                    <small class="text-muted">Sistem Aplikasi Layanan Dokumen Kepabeanan</small>
                                </div>
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('BCLJagain')">
                                <i class="bi bi-box-arrow-in-right me-3 text-primary fs-4"></i>
                                <div>
                                    <h6>BCL Jagain</h6>
                                    <small class="text-muted">Akses layanan BCL Jagain</small>
                                </div>
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('Konsultasi')">
                                <i class="bi bi-chat-dots me-3 text-info fs-4"></i>
                                <div>
                                    <h6>Konsultasi</h6>
                                    <small class="text-muted">Konsultasi langsung dengan petugas</small>
                                </div>
                            </button>
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('Aduan')">
                                <i class="bi bi-exclamation-triangle me-3 text-warning fs-4"></i>
                                <div>
                                    <h6>Aduan</h6>
                                    <small class="text-muted">Layanan pengaduan/Saran masyarakat</small>
                                </div>
                            </button>

                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('SKM')">
                                <i class="bi bi-clipboard-data me-3 text-primary fs-4"></i>
                                <div>
                                    <h6>Survei Kepuasan Masyarakat</h6>
                                    <small class="text-muted">Survei Kepuasan Masyarakat</small>
                                </div>
                            </button>
                            
                            <button class="list-group-item list-group-item-action d-flex align-items-center" onclick="accessService('Layanan')">
                                <i class="bi bi-gear me-3 text-secondary fs-4"></i>
                                <div>
                                    <h6>Layanan Lainnya</h6>
                                    <small class="text-muted">Layanan umum Bea Cukai</small>
                                </div>
                            </button>
                        </div>
                    </div>
                `,
                width: '550px',
                showCloseButton: true,
                showConfirmButton: false,
                customClass: { popup: 'rounded-4' }
            });
        }

        // Access Service
        function accessService(serviceName) {
            const targetUrl = serviceUrls[serviceName];

            if (!targetUrl || targetUrl === '#') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Layanan Belum Tersedia',
                    text: `Layanan ${serviceName} belum memiliki alamat URL yang dikonfigurasi.`,
                    confirmButtonText: 'Tutup',
                    confirmButtonColor: '#1a237e'
                });
                return;
            }

            Swal.fire({
                title: `Akses ${serviceName}`,
                text: `Anda akan diarahkan ke portal ${serviceName}.`,
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Ya, Lanjutkan',
                cancelButtonText: 'Batal',
                confirmButtonColor: '#1a237e',
                cancelButtonColor: '#6c757d',
                customClass: { popup: 'rounded-4' }
            }).then((result) => {
                if (result.isConfirmed) {
                    window.open(targetUrl, '_blank', 'noopener,noreferrer');
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: `Portal ${serviceName} telah dibuka di tab baru`,
                        timer: 2000,
                        showConfirmButton: false,
                        position: 'top-end',
                        toast: true
                    });
                }
            });
        }

        // Fade-in animation on load
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.service-card');
            
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100 * (index + 1));
            });
        });

        // Handle keyboard navigation
        document.querySelectorAll('.service-card').forEach(card => {
            card.setAttribute('tabindex', '0');
            card.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    this.click();
                }
            });
        });
    </script>
</body>
</html>