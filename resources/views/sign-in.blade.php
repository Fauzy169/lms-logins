<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Edmate Learning Dashboard HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo/bosowa.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- file upload -->
    <link rel="stylesheet" href="../assets/css/file-upload.css">
    <!-- file upload -->
    <link rel="stylesheet" href="../assets/css/plyr.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="../assets/css/full-calendar.css">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="../assets/css/jquery-ui.css">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="../assets/css/editor-quill.css">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="../assets/css/apexcharts.css">
    <!-- calendar Css -->
    <link rel="stylesheet" href="../assets/css/calendar.css">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="../assets/css/jquery-jvectormap-2.0.5.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <style>




    </style>
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <div class="loader"></div>
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

    <section class="auth d-flex bg-white">
        <div class="auth-signin w-100 rounded-16 bg-main-50 flex-center mx-24 my-24 position-relative  ">
            <div class="logo position-absolute start-0 bottom-0 z-2 ">
                <img src="assets/images/logo/bosowalogo.png" alt="">
            </div>
            <div class="auth-left bg-transparent flex-center p-24 z-2">
                <div class="textdisplay">
                    <div class="d-flex align-items-center mb-16">
                        <div class="flex-grow-2 border-top border-2 w-72 mx-20 " ></div>
                        <p class="text-24 fw-medium me-3 mb-0">Welcome to BOSOWA</p>
                    </div>
                    <h1 class="text-white display-3 fw-bolder text-114">
                        Learning Management System
                    </h1>
                </div>
                
            
            </div>
            <div class="auth-right bg-transparent flex-center p-24 z-2">
                <div class="card auth-card mx-auto w-75 px-50 py-68 rounded-16 shadow-lg ">
                    <div class="text-center">
                        <a href="index.html" class="auth-card__logo w-75 mb-24 text-center">
                            <img src="assets/images/logo/asdaa-25.png" alt="Logo">
                        </a>
                    </div>
                    
                    <p class="text-gray-600 text-15 text-center mb-32">
                        Please sign in to your account and start the adventure.
                    </p>
                
                    <form id="loginForm" action="#">
                        <input type="hidden" name="_token" value="89hPlR6BCBtC2nJ8CO89mQYxTunEL2xNmXrkIzvf" autocomplete="off">                    
                        <input type="hidden" value="89hPlR6BCBtC2nJ8CO89mQYxTunEL2xNmXrkIzvf" id="token">
                        <div class="mb-10">
                            <label for="fname" class="form-label mb-8 h6">NIK</label>
                            <div class="position-relative">
                                <input type="text" id="username" name="username" class="form-control py-11 ps-40" placeholder="Masukkan NIK" required="">
                                <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-user"></i></span>
        
                            </div>
                            <span class="error text-danger mt-5" id="username-error"></span>
        
                        </div>
                        <div class="mb-10">
                            <label for="password" class="form-label mb-8 h6">Current Password</label>
                            <div class="position-relative">
                                <input type="password" id="password" name="password" class="form-control py-11 ps-40" placeholder="Masukkan Password" required="">
                                <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#password"></span>
                                <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                            </div>
        
                            <span class="error text-danger mt-5" id="password-error"></span>
                        </div>
                        <div class="mb-32 flex-between flex-wrap gap-8">
                            <div class="form-check mb-0 flex-shrink-0">
                                <input class="form-check-input flex-shrink-0 rounded-4" type="checkbox" value="" id="remember">
                                <label class="form-check-label text-15 flex-grow-1" for="remember" type="checkbox" name="remember" id="remember">Remember Me
                                </label>
                            </div>
                            <a href="" class="text-main-600 hover-text-decoration-underline text-15 fw-medium">Forgot Password?</a>
                        </div>
                        <button type="button" id="btnLogin" class="btn btn-main rounded-pill w-100">
                            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                            Sign In</button>
                    </form>
                </div>
            </div>
            <img src="assets/images/bg/asets.png" class="img-bg position-absolute w-110 object-fit-cover z-1 top-0 end-0" alt="">
            <img src="assets/images/bg/transparent-v.png" class="img-bg position-absolute w-100 h-100 object-fit-cover z-1" alt="">
            
        </div>

    </section>

        <!-- Jquery js -->
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="../assets/js/boostrap.bundle.min.js"></script>
    <!-- Phosphor Js -->
    <script src="../assets/js/phosphor-icon.js"></script>
    <!-- file upload -->
    <script src="../assets/js/file-upload.js"></script>
    <!-- file upload -->
    <script src="../assets/js/plyr.js"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="../assets/js/full-calendar.js"></script>
    <!-- jQuery UI -->
    <script src="../assets/js/jquery-ui.js"></script>
    <!-- jQuery UI -->
    <script src="../assets/js/editor-quill.js"></script>
    <!-- apex charts -->
    <script src="../assets/js/apexcharts.min.js"></script>
    <!-- Calendar Js -->
    <script src="../assets/js/calendar.js"></script>
    <!-- jvectormap Js -->
    <script src="../assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <!-- jvectormap world Js -->
    <script src="../assets/js/jquery-jvectormap-world-mill-en.js"></script>
    
    <!-- main js -->
    <script src="../assets/js/main.js"></script>



    </body>
</html>