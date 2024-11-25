<?php
    // Mulai sesi untuk autentikasi jika diperlukan
    session_start();
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Sahabat Freelance</title>
        <!-- Bootstrap CSS (Versi 5.3.3) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Google Fonts: DM Sans & Poppins -->
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
            rel="stylesheet">
    </head>

    <body style="font-family: 'DM Sans', sans-serif;">
        <section class="overflow-hidden bg-white">
            <div class="container-fluid">
                <div class="row vh-100 g-0">
                    <!-- Bagian Login (Kiri) -->
                    <div class="col-md-6 d-flex flex-column justify-content-between p-4">
                        <section class="login_box_area section_gap">

                            <div class="w-100 text-center">
                                <img src="assets/image/logo.jpg" alt="Company Logo" class="mb-4" style="width: 170px;">
                                <h1 class="text-primary fw-bold mb-2">Sign In</h1>
                                <p class="text-muted">Enter your email and password to sign in!</p>

                                <!-- Tombol Google Login -->
                                <button
                                    class="btn btn-light text-primary fw-medium w-100 py-3 mt-3 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-google"></i> <!-- Ikon Bootstrap untuk Google -->
                                    Sign in with Google
                                </button>

                                <!-- Garis atau -->
                                <div class="d-flex align-items-center mt-4">
                                    <hr class="flex-grow-1">
                                    <span class="mx-2 text-muted">or</span>
                                    <hr class="flex-grow-1">
                                </div>

                                <!-- Form Login -->
                                <form class="row login_form" action="/post-login" method="POST" 
id="contactForm" novalidate="novalidate"> 
                            @csrf 
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control rounded-pill"
                                            placeholder="mail@example.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="password" id="password" name="password"
                                                class="form-control rounded-start-pill" placeholder="Min. 8 characters"
                                                required>
                                            <button type="button" class="btn btn-outline-secondary rounded-end-pill"
                                                onclick="togglePasswordVisibility()" id="togglePassword">
                                                <i class="bi bi-eye-slash" id="eyeIcon"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Keep me logged in</label>
                                        </div>
                                        <a href="#" class="text-decoration-none text-primary">Forgot password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-2">Sign In</button>
                                </form>

                                <p class="text-center mt-3">
                                    Not registered yet? <a href="/register" class="text-decoration-none text-primary">Create an
                                        Account</a>
                                </p>
                            </div>
                        </section>

                        <!-- Footer Kiri -->
                        <footer class="text-muted small text-center py-3">
                            <p class="mb-0">&copy; 2022 Sahabat App All Rights Reserved. Made with love by
                                <strong>Sahabat
                                    Company!</strong>
                            </p>
                        </footer>
                    </div>

                    <!-- Bagian Informasi (Kanan) -->
                    <div class="col-md-6 d-none d-md-flex flex-column justify-content-center align-items-center bg-primary text-white"
                        style="background-image: url('assets/image/background.jpg'); background-size: cover; background-position: center;border-bottom-left-radius: 90px;">

                        <!-- Bungkus seluruh konten dengan flex-grow -->
                        <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1 text-center">
                            <!-- Logo -->
                            <img src="assets/image/logo.jpg" alt="Featured Image" class="rounded-circle bg-white p-3 mb-4"
                                style="width: 200px; height: 200px;">

                            <!-- Judul -->
                            <h2 class="display-5 fw-bold">
                                SAHABAT <span class="fw-bold">FREELANCE</span>
                            </h2>

                            <!-- Deskripsi dengan Teks & Outline -->
                            <div class="border border-white border-opacity-50 rounded-4 py-4 px-4 mt-4 text-center"
                                style="display: inline-block; font-size: 1.1rem; font-weight: 600; background-color: transparent;">
                                <span class="d-block fw-normal text-white">Learn more about Sahabat Company on</span>
                                <span class="d-block fw-bold text-white">SahabatApp.com</span>
                            </div>

                        </div>

                        <!-- Footer Kanan -->
                        <footer class="py-3">
                            <nav class="text-center">
                                <a href="#" class="text-decoration-none text-white mx-2">Marketplace</a>
                                <a href="#" class="text-decoration-none text-white mx-2">License</a>
                                <a href="#" class="text-decoration-none text-white mx-2">Terms of Use</a>
                                <a href="#" class="text-decoration-none text-white mx-2">Blog</a>
                            </nav>
                        </footer>
                    </div>



                </div>
            </div>
        </section>

        <!-- Bootstrap JS Bundle with Popper (Versi 5.3.3) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function togglePasswordVisibility() {
                const passwordInput = document.getElementById('password');
                const eyeIcon = document.getElementById('eyeIcon');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.classList.remove('bi-eye-slash');
                    eyeIcon.classList.add('bi-eye');
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.classList.remove('bi-eye');
                    eyeIcon.classList.add('bi-eye-slash');
                }
            }
        </script>
    </body>

    </html>