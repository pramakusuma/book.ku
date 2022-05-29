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
                        @if(isset(Auth::user()->username))
                        <li class="nav-item text-white">
                            <a class="nav-link active text-white" aria-current="page"
                                href="/logout">{{ Auth::user()->username }}</a>
                        </li>
                        @else
                        <li class="nav-item text-white">
                            <a class="btn btn-primary" href="/login">Login</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @if($layout == 'index')
        <img id="header" class="header" width="80%" src="/images/header.png" alt="header">
        <h3 class="judul">Mencari Buku dengan Mudah</h3>
        <div class="container col-md-12">
            <div class="row rowMenu">
                <div class="col colMenu col-md-2">
                    <h5 class="text-white text-center mt-5">Survei Kepuasan Pengguna</h5>
                    <img class="imageMenu" src="/images/menu1.png" alt="survei">
                    <button class="btn btn-primary buttonMenu">Klik Disini</button>
                </div>
                <div class="col colMenu col-md-2">
                    <h5 class="text-white text-center mt-5">Video Tutorial Penggunaan</h5>
                    <img class="imageMenu" src="/images/menu2.png" alt="survei">
                    <button class="btn btn-primary buttonMenu">Klik Disini</button>
                </div>
                <div class="col colMenu col-md-2">
                    <h5 class="text-white text-center mt-5">Daftar Buku</h5>
                    <img class="imageMenu" src="/images/menu3.png" alt="survei">
                    <button class="btn btn-primary buttonMenu">Klik Disini</button>
                </div>
            </div>
        </div>

        <div class="container containerAbout col-md-8" id="about">
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

        @elseif($layout == 'showAll')
        <div class="mb-5 container containerList">
            <h2 class="mb-5 text-white">Add Book</h2>
            <div class="container border containerTable">
                <div class="row">
                    <div class="col">
                        <img class="ml-3" width="70%" src="/images/login.png" alt="">
                    </div>
                    <div class="mt-5 col colAdd justify-content-center">
                        <form action="{{ url('/store') }}" method="post" class="justify-content-center p-4">
                            @csrf
                            <div class="mb-3">
                                <input placeholder="Judul" type="text" class="form-control inputAdd text-center"
                                    id="judul" name="judul" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input placeholder="Penulis" type="text" class="form-control inputAdd text-center"
                                    id="penulis" name="penulis">
                            </div>
                            <div class="mb-3">
                                <input placeholder="Tahun Terbit" type="text" class="form-control inputAdd text-center"
                                    id="tahunterbit" name="tahunterbit">
                            </div>
                            <div class="mb-3">
                                <label class="text-white text-center" for="sinopsis">Sinopsis</label>
                                <textarea height="200px" type="text" class="form-control inputAdd text-center"
                                    id="sinopsis" name="sinopsis"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary buttonAdd">Add Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container containerList" id="booklist">
            <img class="m-2" src="/images/logo.png" alt="logo">

            <div class="container containerSearch">
                <div class="input-group mb-3 p-3 ">
                    <input type="text" class="form-control searchBar" placeholder="Search"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn buttonSearch" type="button" id="button-addon2">
                        <img width="60%" src="/images/search.png" alt="">
                    </button>
                </div>
            </div>

            <div class="container border containerTable">

                <table class="table border text-white">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Sinopsis</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->judul}}</td>
                            <td>{{$book->penulis}}</td>
                            <td>{{$book->tahunterbit}}</td>
                            <td>{{$book->sinopsis}}</td>
                            <td>
                                <div class="actionButton">
                                    <a href="{{ url('/edit/'.$book->id) }}" class="btn buttonEdit">
                                        <img src="/images/edit.png" alt="edit">
                                    </a>
                                    <form action="{{ url('/delete/'.$book->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger buttonDelete">
                                            <img src="/images/delete.png" alt="delete">
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        @elseif($layout == 'edit')
        <div class="mb-5 container containerList">
            <h2 class="mb-5 text-white">Edit Book</h2>
            <div class="container border containerTable">
                <div class="row">
                    <div class="col">
                        <img class="ml-3" width="70%" src="/images/login.png" alt="">
                    </div>
                    <div class="mt-5 col colAdd justify-content-center">
                        <form action="{{ url('/update/'.$book->id) }}" method="post" class="justify-content-center p-4">
                            @csrf
                            <div class="mb-3">
                                <input value="{{ $book->judul }}" placeholder="Judul" type="text"
                                    class="form-control inputAdd text-center" id="judul" name="judul"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <input value="{{ $book->penulis }}" placeholder="Penulis" type="text"
                                    class="form-control inputAdd text-center" id="penulis" name="penulis">
                            </div>
                            <div class="mb-3">
                                <input value="{{ $book->tahunterbit }}" placeholder="Tahun Terbit" type="text"
                                    class="form-control inputAdd text-center" id="tahunterbit" name="tahunterbit">
                            </div>
                            <div class="mb-3">
                                <label class="text-white text-center" for="sinopsis">Sinopsis</label>
                                <textarea height="200px" type="text" class="form-control inputAdd text-center"
                                    id="sinopsis" name="sinopsis">{{ $book->sinopsis }}
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary buttonAdd">Edit Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @elseif($layout == 'create')
        @elseif($layout == 'show')
        @endif

    </div>
    <div class="footer" id="footer">
        <div class="container containerFooter">
            <div class="row rowFooter">
                <div class="col colFooter">
                    <img src="/images/logo.png" alt="">
                </div>
                <div class="col colFooter2">
                    <div class="row">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img width="10%" src="/images/mail.png" alt="">
                        </div>
                        <div class="col">
                            <p>book.ku@gmail.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img width="10%" src="/images/wa.png" alt="">
                        </div>
                        <div class="col">
                            <p>+62 8473 13456</p>
                        </div>
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