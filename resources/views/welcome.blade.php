<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ร้านซาลาเปา</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="store/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="store/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="store/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="store/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="store/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="store/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="store/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="store/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="store/css/style.css" type="text/css">

</head>

<body style="font-family: 'Kanit', sans-serif;">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div id="app">
        <index></index>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Js Plugins -->
    <script src="store/js/jquery-3.3.1.min.js"></script>
    <script src="store/js/bootstrap.min.js"></script>
    <script src="store/js/jquery-ui.min.js"></script>
    <script src="store/js/jquery.countdown.min.js"></script>
    <script src="store/js/jquery.nice-select.min.js"></script>
    <script src="store/js/jquery.zoom.min.js"></script>
    <script src="store/js/jquery.dd.min.js"></script>
    <script src="store/js/jquery.slicknav.js"></script>
    <script src="store/js/owl.carousel.min.js"></script>
    <script src="store/js/main.js"></script>
</body>

</html>
