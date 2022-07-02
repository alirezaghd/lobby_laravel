<!DOCTYPE html>
<html lang= lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/bootstrap.rtl.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/all.css">

        <title>lobby</title>

    </head>
    <body >
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">

                    <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                لابی
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>


                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="row mt-3">
            <div class="col-12">
                <ul class="list-group ">
                    @foreach($messages as $message)

                    <li class="list-group-item d-flex justify-content-between align-items-start" id="msg">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <img src='img/acc.png ' class='rounded-circle me-2' width='35' height='35'>

                                {{ $message->name }}


                            </div >
                            <p style ="text-indent: 45px; font-size :18px; height:15px;" >

                                {{ $message->text }}
                            </p>
                        </div>
                        <span class="badge bg-primary rounded-pill">{{ $message->created_at }}</span>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" id="btn_new_msg" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-comment-plus fa-xl"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">پیام جدید</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/send-message">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">نام</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">متن پیام</label>
                                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>



    </body>
</html>
