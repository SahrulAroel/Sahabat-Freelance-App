<?php
// Mulai sesi untuk autentikasi jika diperlukan
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sahabat Freelance</title>
    <!-- Bootstrap CSS (Versi 5.3.3) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts: DM Sans & Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'DM Sans', sans-serif;">
    <section class="overflow-hidden bg-white">
        <div class="container-fluid">
            <div class="row vh-100 g-0">
                <!-- Bagian Registrasi (Kiri) -->
                <div class="col-md-6 d-flex flex-column justify-content-between p-4">
                    <div class="w-100 text-center">
                        <img src="assets/image/logo.jpg" alt="Company Logo" class="mb-4" style="width: 170px;">
                        <h1 class="text-primary fw-bold mb-2">Sign Up</h1>
                        <p class="text-muted">Enter your personal data to sign up!</p>

                        <!-- Tombol Google Sign Up -->
                        <button class="btn btn-light text-primary fw-medium w-100 py-3 mt-3 d-flex align-items-center justify-content-center">
                            <i class="bi bi-google me-2"></i>
                            Sign Up with Google
                        </button>

                        <!-- Garis atau -->
                        <div class="d-flex align-items-center mt-4">
                            <hr class="flex-grow-1">
                            <span class="mx-2 text-muted">or</span>
                            <hr class="flex-grow-1">
                        </div>

                        <!-- Form Registrasi -->
                        <form class="row login_form" action="{{ route('post.register') }}" method="POST" id="contactForm" novalidate="novalidate"> 
                            @csrf 
                            <div class="mb-3">
                                <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="username" class="form-control rounded-pill" placeholder="Min. 8 characters" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" class="form-control rounded-pill" placeholder="mail@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password <span class="text-danger">*</span></label>
                                <input type="password" id="password" name="password" class="form-control rounded-pill" placeholder="Min. 8 characters" required>
                            </div>
                            <div class="mb-3">
                                <label for="repassword" class="form-label">Re-enter Password <span class="text-danger">*</span></label>
                                <input type="password" id="password" name="repassword" class="form-control rounded-pill" placeholder="Min. 8 characters" required>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    Agree to all terms and conditions
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 rounded-pill py-2">Sign Up</button>
                        </form>

                        <p class="text-center mt-3">
                            Already have an account? <a href="login.php" class="text-decoration-none text-primary">Login an Account</a>
                        </p>
                    </div>

                    <!-- Footer Kiri -->
                    <footer class="text-muted small text-center py-3">
                        <p class="mb-0">&copy; 2022 Sahabat App All Rights Reserved. Made with love by <strong>Sahabat Company!</strong></p>
                    </footer>
                </div>

                <!-- Bagian Informasi (Kanan) -->
                <div class="col-md-6 d-none d-md-flex flex-column justify-content-center align-items-center bg-primary text-white"
                    style="background-image: url('assets/image/background.jpg'); background-size: cover; background-position: center;">
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1 text-center">
                        <img src="assets/image/logo.jpg" alt="Featured Image" class="rounded-circle bg-white p-3 mb-4" style="width: 200px; height: 200px;">
                        <h2 class="display-5 fw-bold">SAHABAT <span class="fw-bold">FREELANCE</span></h2>
                        <div class="border border-white border-opacity-50 rounded-4 py-4 px-4 mt-4 text-center" style="display: inline-block; font-size: 1.1rem; font-weight: 600;">
                            <span class="d-block fw-normal text-white">Learn more about Sahabat Company on</span>
                            <span class="d-block fw-bold text-white">SahabatApp.com</span>
                        </div>
                    </div>
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
</body>

</html>
