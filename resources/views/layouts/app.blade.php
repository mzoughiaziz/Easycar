

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EasyCar</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.ico"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/ud-styles.css" />
  </head>
  <body>
    <!-- ====== Header Start ====== -->
    @guest()
    @include('layouts.guest')
    @endguest


    @auth()
    @include('layouts.auth')
    @endauth
    <!-- ====== Header End ====== -->

    <!-- ====== Banner Start ====== -->
  
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
