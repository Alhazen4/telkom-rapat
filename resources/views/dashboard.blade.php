{{-- @dd($rooms); --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>

    .div-gap {
        display: flex;
        flex-direction: column;
        gap: 5rem;
    }

    .navbar-container,
    .div-tabs,
    .div-card {
        margin: 0 200px;
    }

    .nav-link {
        cursor: pointer;
    }

    .div-card {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .row-card {
        display: flex;
        flex-direction: row;
        gap: 2rem;
    }

    .card {
        width: 25rem;
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
    <nav class="navbar bg-body-tertiary sticky-top">
        <div class="navbar-container container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="https://img.icons8.com/color/48/null/internet--v1.png" alt="Logo" width="24" height="24" class="d-inline-block align-text-top">
                Room Reservation App
            </a>
            <div>
                <a href="#div-card" class="btn btn-outline-success" type="submit">Pesan Ruangan</a>
                <a href="#div-card" class="btn btn-outline-danger" type="submit">Batalkan Pesanan</a>
            </div>
        </div>
    </nav>

    <div class="div-gap">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-img" src="https://source.unsplash.com/C6oPXOatFD8"  alt="...">
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="https://source.unsplash.com/VOv4uaMf9E4"  alt="...">
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="https://source.unsplash.com/5sv3BFa4Cco"  alt="...">
                </div>
            </div>
        </div>

        <div class="div-tabs">
            <label for="form-select">Pilih Bulan</label>
            <select name="form-select" class="form-select" aria-label="Default select example">
                <option selected>Januari</option>
                <option value="1">Februari</option>
                <option value="2">Maret</option>
                <option value="3">April</option>
            </select>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-target="#1" data-bs-toggle="tab">1</a>
                </li>
                <li class="nav-item">
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
                </li>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Ruangan 1</td>
                                <td>Agus</td>
                                <td>021</td>
                                <td>07.00-10.00</td>
                            </tr>
                            <tr>
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
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="2">Data tanggal 2</div>
                <div role="tabpanel" class="tab-pane fade" id="3">Data tanggal 3</div>
                <div role="tabpanel" class="tab-pane fade" id="4">Data tanggal 4</div>
                <div role="tabpanel" class="tab-pane fade" id="5">Data tanggal 5</div>
            </div>
        </div>

        <div id="div-card" class="div-card">

            <div class="row-card">
                @foreach ($rooms as $room)
                    <div class="card">
                        <img class="card-img" src={{ asset("/image/" . $room["photo"])}} alt="...">
                        <div class="card-body">
                                <p>{{ $room["photo"]}}</p>
                                <h5 class="card-title">{{ $room["name"] }}</h5>
                                <p class="card-text">Kapasitas: {{ $room["capacity"] }}</p>
                                <p class="card-text">Lokasi: {{ $room["location"] }}</p>
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roomModal">Detail Ruangan</a>
                        </div>
                    </div>
                    @include('./dialog', [
                        "photo" => $room["photo"],
                        "name" => $room["name"],
                        "capacity" => $room["capacity"],
                        "location" => $room["location"],
                        "detail" => $room["detail"]
                    ])
                @endforeach
            </div>

            <div class="row-card">
                <div class="card">
                    <img class="card-img" src="https://source.unsplash.com/VOv4uaMf9E4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img" src="https://source.unsplash.com/C6oPXOatFD8" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img" src="https://source.unsplash.com/VOv4uaMf9E4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="row-card">
                <div class="card">
                    <img class="card-img" src="https://source.unsplash.com/VOv4uaMf9E4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img" src="https://source.unsplash.com/C6oPXOatFD8" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img" src="https://source.unsplash.com/VOv4uaMf9E4" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- @foreach ($selectedRoom as $rs)
        <div class="modal fade" id="roomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="card-img" src={{ asset("/image/" . $rs["photo"])}} alt="...">
                        <div class="card-body">
                            <p>{{ $rs["photo"]}}</p>
                            <h5 class="card-title">{{ $rs["name"] }}</h5>
                            <p class="card-text">Kapasitas: {{ $rs["detail"] }}</p>
                            <p class="card-text">Kapasitas: {{ $rs["capacity"] }}</p>
                            <p class="card-text">Lokasi: {{ $rs["location"] }}</p>
                            <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roomModal">Detail Ruangan</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}

    <footer>
        App Beta Test
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

<script>

</script>

</html>
