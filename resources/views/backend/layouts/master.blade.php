<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cài đặt</title>
    <!-- css -->
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="asset/css/stylehd.css">
    <link rel="stylesheet" type="text/css" href="asset/css/style-menu.css">

    <!-- <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="asset/css/style-update.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/choose-wallet.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>
    <link rel="stylesheet" href="Awesome/css/all.css">

</head>

<body>
    <!-- header -->
   @include('backend.layouts.header')
    <!-- header -->

    <!-- menu mobile -->


    <!-- sidebar left-->
    @include('backend.layouts.sidebar')
    <!--/. end sidebar left-->

    @yield('content')

    @include('backend.layouts.footer')

    @yield('script')
    <!-- javascript -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script> -->

    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "220px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }

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

