<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Book.Ku</title>
</head>

<body>

    <div class="bg">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img width="70%" src="/images/logo.png" alt="Book.Ku">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="ml-5 nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" href="/#footer">Contact</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" href="/#about">About Us</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="nav-link" href="/booklist">Book List</a>
                        </li>
                        <li class="nav-item text-white">
                            <a class="btn btn-primary" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container containerLogin">
            <div class="row">
                <div class="col">
                    <img src="/images/login.png" alt="">
                </div>
                <div class="col colLogin">
                    <div class="container loginCard p-4">
                        <h2 class="mb-5 mt-5 text-white text-center">LOGIN</h2>

                        <form class="justify-content-center p-4">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-white">Username</label>
                                <input type="email" class="form-control inputLogin" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                                <input type="password" class="form-control inputLogin" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary buttonLogin">Login</button>
                        </form>
                        <div class="container loginGmail">
                            <p class="text-white text-center">or Login With</p>
                            <button type="submit" class="btn btn-primary buttonGmail">
                                <img width="15%" src="/images/gmail.png" alt="">
                                Gmail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>

</body>

</html>