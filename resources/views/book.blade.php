<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Book.Ku</title>
</head>

<body>


    <div class="bg">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img width="70%" src="/images/logo.png" alt="Book.Ku">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="ml-5 nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" href="#">Book List</a>
                        </li>
                        <li class="nav-item text-white">
                            <button class="btn btn-primary">Login</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if($layout == 'index')
        <img class="header" width="80%" src="/images/header.png" alt="header">
        <h3 class="judul">Mencari Buku dengan Mudah</h3>
        <div class="container">
            <div class="row rowMenu">
                <div class="col colMenu col-lg-2">tes</div>
                <div class="col colMenu col-lg-2"></div>
                <div class="col colMenu col-lg-2"></div>
            </div>
        </div>

        <div class="container about">
            <div class="row rowAbout">
                <div class="col colAbout">
                    <h3>About Us</h3>
                </div>
            </div>
            <div class="row rowAbout">
                <div class="col colAbout">
                    <p>A digital library that provides online book services, which can be read online and free for
                        students.
                        Such as school textbooks, novels, short stories, folk tales, and reference books.</p>
                </div>
                <div class="col colAbout">
                    <img width="80%" src="/images/aboutus.png" alt="">
                </div>
            </div>
        </div>

        @elseif($layout == 'create')
        @elseif($layout == 'show')
        @elseif($layout == 'edit')
        @endif

    </div>
    <div class="footer">
        <div class="container containerFooter">
            <div class="row rowFooter">
                <div class="col colFooter">
                    <img src="/images/logo.png" alt="">
                </div>
                <div class="col colFooter2">
                    <h3>Contact Me</h3>
                    <div class="col">
                        <img src="/images/mail.png" alt="">

                    </div>
                    <div class="col">
                        <p>book.ku@gmail.com</p>
                        <p>+62 8473 13456</p>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col colFooter3">
                    <p class="text-center">©2022 Book.Ku . All Rights Reserved | Designed by Kelompok Pale</p>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>