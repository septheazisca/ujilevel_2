<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Dashboard - Admin Bootstrap Template</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
      <link href="{{asset ('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="{{asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{asset ('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{asset ('assets/css/boxicons.min.css') }}" rel="stylesheet">
      <link href="{{asset ('assets/css/quill.snow.css') }}" rel="stylesheet">
      <link href="{{asset ('assets/css/quill.bubble.css') }}" rel="stylesheet">
      <link href="{{asset ('assets/css/remixicon.css') }}" rel="stylesheet">
      <link href="{{asset ('assets/css/simple-datatables.css') }}" rel="stylesheet">
      <link href="{{asset ('assets/css/style.css') }}" rel="stylesheet">
   </head>
   <body>
      <header id="header" class="header fixed-top d-flex align-items-center">
         <div class="d-flex align-items-center justify-content-between"> <a href="index.html" class="logo d-flex align-items-center"> <img src="assets/img/logo.png" alt=""> <span class="d-none d-lg-block">Admin</span> </a> <i class="bi bi-list toggle-sidebar-btn"></i></div>
         <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query" placeholder="Search" title="Enter search keyword"> <button type="submit" title="Search"><i class="bi bi-search"></i></button></form>
         </div>
         <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
               <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i class="bi bi-search"></i> </a></li>
               <li class="nav-item dropdown pe-3">
               </li>
            </ul>
         </nav>
      </header>
      <aside id="sidebar" class="sidebar">
         @yield('sidebar')
      </aside>
      <main id="main" class="main">
         @yield('main')
      </main>
      <footer id="footer" class="footer">
         <div class="copyright"> &copy; Copyright <strong><span>Compnay Name</span></strong>. All Rights Reserved</div>
         <div class="credits"> with love <a href="https://freeetemplates.com/">FreeeTemplates</a></div>
      </footer>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
        <script src="{{asset ('assets/js/apexcharts.min.js') }}"></script>
        <script src="{{asset ('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset ('assets/js/chart.min.js') }}"></script>
        <script src="{{asset ('assets/js/echarts.min.js') }}"></script>
        <script src="{{asset ('assets/js/quill.min.js') }}"></script>
        <script src="{{asset ('assets/js/simple-datatables.js') }}"></script>
        <script src="{{asset ('assets/js/tinymce.min.js') }}"></script>
        <script src="{{asset ('assets/js/validate.js') }}"></script>
        <script src="{{asset ('assets/js/main.js') }}"></script> 
             
   </body>
</html>