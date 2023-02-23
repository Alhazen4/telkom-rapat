<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        height: 470px;
        overflow-y: scroll;
        border: 1px solid lightgrey;
        border-radius: 5px;
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
                <div class="wrapper" style="display: flex; flex-direction:row; gap: 10px;">
                    <div class="row-wrapper" style="display: flex; flex-direction:column;">
                        <label for="form-select">Pilih Tahun</label>
                        <select name="form-select" class="form-select" id="selectYear" aria-label="Default select example">
                        </select>
                    </div>
                    <div class="row-wrapper" style="display: flex; flex-direction:column;">
                        <label for="form-select">Pilih Bulan</label>
                        <select name="form-select" class="form-select" id="selectMonth" aria-label="Default select example">
                        </select>
                    </div>
                    <div class="row-wrapper" style="display: flex; flex-direction:column;">
                        <label for="form-select">Pilih Tanggal</label>
                        <select name="form-select" class="form-select" id="selectDate" aria-label="Default select example">
                        </select>
                    </div>
                </div>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="1">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Ruangan</th>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Nomor Telepon</th>
                                    <th scope="col">Waktu Mulai</th>
                                    <th scope="col">Waktu Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($requests); $i++)
                                    <tr>
                                        <th scope="row">{{ $i + 1 }}</th>
                                        <td>{{ $requests[$i]->name }}</td>
                                        <td>{{ $requests[$i]->name_requestor }}</td>
                                        <td>{{ $requests[$i]->telephone }}</td>
                                        <td>{{ $requests[$i]->time_start }}</td>
                                        <td>{{ $requests[$i]->time_end }}</td>
                                    </tr>
                                @endfor
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

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    let date = new Date();
    let yearRange = [];
    let startYear = 2023;
    let currentYear = date.getFullYear();
    // let currentYear = 2024;

    while (startYear <= currentYear) {
        yearRange.push(startYear++);
    }

    $.each(yearRange, function (i, item) {
        if(currentYear === item) {
            $('#selectYear').append($('<option>', {
                value: item,
                text : item
            }).prop("selected", true));
        } else {
            $('#selectYear').append($('<option>', {
                value: item,
                text : item
            }));
        }
    });

    const arrayMonth = [
        {value: 1, text: 'Januari'},
        {value: 2, text: 'Februari'},
        {value: 3, text: 'Maret'},
        {value: 4, text: 'April'},
        {value: 5, text: 'Mei'},
        {value: 6, text: 'Juni'},
        {value: 7, text: 'Juli'},
        {value: 8, text: 'Agustus'},
        {value: 9, text: 'September'},
        {value: 10, text: 'Oktober'},
        {value: 11, text: 'November'},
        {value: 12, text: 'Desember'}
    ];

    let currentMonth = arrayMonth[date.getMonth()];
    // let currentMonth = 'Mei';

    $.each(arrayMonth, function (i, item) {
        if(currentMonth === item) {
            $('#selectMonth').append($('<option>', {
                value: item.value,
                text : item.text
            }).prop("selected", true));
        } else {
            $('#selectMonth').append($('<option>', {
                value: item.value,
                text : item.text
            }));
        }
    });

    let arrayDate = [];
    function getDaysInMonth(month, year) {
        let date = new Date(year, month);
        while (date.getMonth() === month) {
            // days.push(new Date(date));
            arrayDate.push(date.getDate());
            date.setDate(date.getDate() + 1);
        }
    }

    let currentDate = date.getDate();
    getDaysInMonth(date.getMonth(), date.getFullYear());

    $.each(arrayDate, function (i, item) {
        if(currentDate === item) {
            $('#selectDate').append($('<option>', {
                value: item,
                text : item
            }).prop("selected", true));
        } else {
            $('#selectDate').append($('<option>', {
                value: item,
                text : item
            }));
        }
    });

    let selectedYear;
    let selectedMonth;
    let selectedDate;

    if (selectedYear === undefined) {
        selectedYear =$('#selectYear').find(":selected").val();
    }

    if (selectedMonth === undefined) {
        selectedMonth =$('#selectMonth').find(":selected").val();
    }

    if (selectedDate === undefined) {
        selectedDate =$('#selectDate').find(":selected").val();
    }

    $('#selectYear').on('change', function() {
        let optionSelected = $("option:selected", this);
        selectedYear = this.value;
        console.log(`${selectedYear}-${selectedMonth}-${selectedDate}`);
    })

    $('#selectMonth').on('change', function() {
        let optionSelected = $("option:selected", this);
        selectedMonth = this.value;
        console.log(`${selectedYear}-${selectedMonth}-${selectedDate}`);
    })

    $('#selectDate').on('change', function() {
        let optionSelected = $("option:selected", this);
        selectedDate = this.value;
        console.log(`${selectedYear}-${selectedMonth}-${selectedDate}`);
    })

</script>
</html>
