<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="asset/css/stylehd.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="asset/css/stylehd.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style-update.css">
    <link rel="stylesheet" href="asset/css/style1.css">
    <link rel="stylesheet" type="text/css" href="asset/css/choose-wallet.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="asset/css/slick.css">

    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
    </script>
</head>
<body>


    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer')
    @yield('script')



    <script src="asset/js/jquery.min.js" defer></script>
    <script src="asset/bootstrap/js/bootstrap.min.js" defer></script>
    <script src="asset/js/slick.min.js" defer></script>
    <script src="asset/js/script.js" defer></script>
    <script type="text/javascript">
        function openNav() {
            document.getElementById("mySidepanel").style.width = "220px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

        // menu2
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    </body>
</html>
