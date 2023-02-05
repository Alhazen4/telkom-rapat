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
                Bootstrap
            </a>
            <a href="#div-card" class="btn btn-outline-success" type="submit">Pesan Ruangan</a>
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
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-target="#1" data-bs-toggle="tab">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-target="#2" data-bs-toggle="tab">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-target="#3" data-bs-toggle="tab">Link</a>
                </li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="1">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="2">2</div>
                <div role="tabpanel" class="tab-pane fade" id="3">3</div>
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
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roomModal">Detail Ruangan</button>
                        </div>
                    </div>
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

    <div class="modal fade" id="roomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="card-img" src={{ asset("/image/" . $room["photo"])}} alt="...">
                    <div class="card-body">
                        <p>{{ $room["photo"]}}</p>
                        <h5 class="card-title">{{ $room["name"] }}</h5>
                        <p class="card-text">Kapasitas: {{ $room["detail"] }}</p>
                        <p class="card-text">Kapasitas: {{ $room["capacity"] }}</p>
                        <p class="card-text">Lokasi: {{ $room["location"] }}</p>
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

    <footer>
        App Beta Test
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>
