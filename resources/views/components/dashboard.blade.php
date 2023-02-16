<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<style>

    .div-gap {
        display: flex;
        flex-direction: column;
        gap: 4rem;
    }

    .navbar-container,
    .div-tabs,
    .div-card {
        margin: 0 200px;
    }

    .card {
        transition: all 0.3s;
    }

    .card:hover {
        cursor: pointer;
        transform: scale(1.03);
        animation: 0.5s;
    }

    .section-title {
        margin: 10px 200px;
    }

    .nav-link {
        cursor: pointer;
    }

    .card-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .carousel-img {
        width: 100%;
        height: 703px;
        object-fit: cover;
    }

    .tab-content {
        padding: 20px;
        width: 100%;
        height: auto;
        border: 1px solid lightgrey;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .form-select {
        margin-bottom: 20px;
        width: 200px;
    }

    footer {
        background-color: rgb(248, 249, 250);
        height: 20px;
        font-size: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: sticky;
        bottom: 0;
    }
</style>

<body>
    {{-- navbar --}}
    <nav class="navbar bg-body-tertiary sticky-top">
        <div class="navbar-container container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="https://img.icons8.com/color/48/null/internet--v1.png" alt="Logo" width="24" height="24" class="d-inline-block align-text-top">
                Room Reservation App
            </a>
            <div>
                <a href="#div-card" class="btn btn-success" type="submit">Pesan Ruangan</a>
                <a href="#div-card" class="btn btn-danger" type="submit" data-bs-toggle="modal" data-bs-target="#roomCancel">Batalkan Pesanan</a>
            </div>
        </div>
    </nav>

    <div class="div-gap">

        <div class="modal fade" id="roomCancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pembatalan Pesanan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <label for="inputKode" class="form-label">Masukkan kode pesanan Anda!</label>
                            <input type="text" class="form-control" id="inputKode">
                            <label for="inputKode" class="form-label">Aksi pembatalan pesanan tidak dapat dijeda!</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="" class="btn btn-danger">Batalkan Pesanan</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-img" src="https://source.unsplash.com/-UdYbiywGeg"  alt="...">
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="https://source.unsplash.com/Uz8THWPXwhI"  alt="...">
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="https://source.unsplash.com/bzqU01v-G54"  alt="...">
                </div>
            </div>
        </div>

        {{-- table history --}}
        <div id="tabs">
            <h3 class="section-title">Data Pemesanan</h3>
            <div class="div-tabs">
                <label for="form-select">Pilih Bulan</label>
                <select name="form-select" class="form-select" aria-label="Default select example">
                    <option selected>Januari</option>
                    <option value="1">Februari</option>
                    <option value="2">Maret</option>
                    <option value="3">April</option>
                </select>
                <label for="form-select">Pilih Tanggal</label>
                <ul class="nav nav-tabs">
                    @for ($i = 1; $i <= 30; $i++)
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-target="#1" data-bs-toggle="tab" href="http://127.0.0.1:8000/test#div-card/1">{{$i}}</a>
                        </li>
                    @endfor

                    {{-- <li class="nav-item">
                        <a class="nav-link" data-bs-target="#2" data-bs-toggle="tab">2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-target="#3" data-bs-toggle="tab">3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-target="#4" data-bs-toggle="tab">4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-target="#5" data-bs-toggle="tab">5</a>
                    </li> --}}
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="1">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Ruangan</th>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Waktu Pemakaian</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($requests as $request) --}}
                                @for ($i = 0; $i < count($requests); $i++)
                                    <tr>
                                        <th scope="row">{{ $i + 1 }}</th>
                                        <td>{{ $requests[$i]->room_id }}</td>
                                        <td>{{ $requests[$i]->name_requestor }}</td>
                                        <td>{{ $requests[$i]->telephone }}</td>
                                        <td>{{ $requests[$i]->time }}</td>
                                    </tr>
                                @endfor
                                {{-- @for ($i = 1; $i <= 10; $i++)
                                    <tr>
                                        <th scope="row">{{$i}}</th>
                                        <td>{{$requests['8']}}</td>
                                        <td>{{$requests['8']}}</td>
                                        <td>{{$requests['8']}}</td>
                                        <td>{{$requests['8']}}</td>
                                    </tr>
                                @endfor --}}
                                {{-- @endforeach --}}

                                {{-- <tr>
                                    <th scope="row">2</th>
                                    <td>Ruangan 2</td>
                                    <td>Salim</td>
                                    <td>021</td>
                                    <td>07.00-10.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ruangan 3</td>
                                    <td>Hajar</td>
                                    <td>021</td>
                                    <td>07.00-10.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Ruangan 4</td>
                                    <td>Dewantara</td>
                                    <td>021</td>
                                    <td>07.00-10.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Ruangan 5</td>
                                    <td>John</td>
                                    <td>021</td>
                                    <td>07.00-10.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ruangan 1</td>
                                    <td>Agus</td>
                                    <td>021</td>
                                    <td>07.00-10.00</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="2">Data tanggal 2</div>
                    <div role="tabpanel" class="tab-pane fade" id="3">Data tanggal 3</div>
                    <div role="tabpanel" class="tab-pane fade" id="4">Data tanggal 4</div>
                    <div role="tabpanel" class="tab-pane fade" id="5">Data tanggal 5</div>
                </div>
            </div>
        </div>

        <div id="div-card">
            <h3 class="section-title">Daftar Ruangan</h3>
            <div class="div-card">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach ($rooms as $room)
                        {{-- The x-card component's controller is at App/View/Components/Card.php --}}
                        <div class="col mb-4">
                            <x-card :room=$room />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <footer>
        App Beta Test
    </footer>

</body>
</html>
