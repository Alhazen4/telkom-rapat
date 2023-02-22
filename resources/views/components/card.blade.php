<meta name="csrf-token" content="{{ csrf_token() }}">
<body>
    <div class="card w-100">
        <img class="card-img" src={{ "https://source.unsplash.com/" . $room["image"] }} alt="...">

        {{-- Use below code if we want to access the images inside public/images --}}
        {{-- <img class="card-img" src={{ asset("/images/" . $room["photo"])}} alt="..."> --}}

        <div class="card-body">
                <h5 class="card-title">{{ $room["name"] }}</h5>
                <p class="card-text">Kapasitas: {{ $room["capacity"] }}</p>
                <p class="card-text">Lokasi: {{ $room["location"] }}</p>
                <p class="card-text">Kontak PJ Ruangan: {{ $room["contact"] }}</p>
                {{-- <p class="card-text">id_room: {{ $room["id"] }}</p> --}}
                <div style="display: flex; justify-content:space-between;">
                    <a data-id="{{ $room["id"] }}" onclick="detailRoom(event.target)" class="btn btn-primary">Detail Ruangan</a>
                    <a data-id="{{ $room["id"] }}" onclick="reserveRoom(event.target)" class="btn btn-success">Pesan Ruangan</a>
                </div>
            </div>

        </div>

        <div class="modal fade" id="roomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Ruangan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="card-img" id="roomPhoto" alt="...">
                        <div class="card-body">
                            <h5 id="roomName" class="card-title"></h5>
                            <p id="roomDetail" class="card-text"></p>
                            <p id="roomCapacity" class="card-text"></p>
                            <p id="roomLocation" class="card-text"></p>
                            <p id="roomContact" class="card-text"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#roomReserve" class="btn btn-primary" id="addButton">Pesan Ruangan Ini</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="roomReserve" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Ruangan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formId" method="post" action="{{ url('/request') }}">
                            @csrf
                            <label for="inputIdroom" class="form-label">ID Room</label>
                            <input type="text" class="form-control" id="inputIdRoom" name="inputIdRoom" readonly>
                            <label for="inputNama" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" id="inputNama" name="inputNama">
                            <label for="inputUnit" class="form-label">Unit / Witel</label>
                            <input type="text" class="form-control" id="inputUnit" name="inputUnit">
                            <label for="inputNoTelp" class="form-label">Nomor Telepon</label>
                            <input type="number" class="form-control" id="inputNoTelp" name="inputNoTelp">
                            <label for="inputJmlPeserta" class="form-label">Estimasi Jumlah Peserta</label>
                            <input type="number" class="form-control" id="inputJmlPeserta" name="inputJmlPeserta">
                            <label for="inputTglPesan" class="form-label">Tanggal Pesan</label>
                            <input type="date" class="form-control" id="inputTglPesan" name="inputTglPesan">
                            <label for="inputWktMulai" class="form-label">Waktu Mulai</label>
                            <input type="time" class="form-control" id="inputWktMulai" name="inputWktMulai">
                            <label for="inputWktAkhir" class="form-label">Waktu Akhir</label>
                            <input type="time" class="form-control" id="inputWktAkhir" name="inputWktAkhir">

                            <div class="modal-footer">
                                <button onclick="backReserve()" type="button" class="btn btn-secondary">Kembali</button>
                                <button type="submit" class="btn btn-primary">Pesan Ruangan Ini</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="reserveSuccess" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pemesanan Berhasil!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p>Booking Code Anda:</p>
                    <h2 id="bookingCode"></h2>
                    <h5>Harap simpan kode pemesanan ini untuk verifikasi atau melakukan pembatalan.</h5>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button onclick="backSuccess()" type="button" class="btn btn-success">Saya Mengerti</button>
                    </div>
                </div>
            </div>
        </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    let global_adminPhone;
    function detailRoom(e) {
        let id  = $(e).data("id");
        console.log(id);
        $.ajax({
            url: "{{ route('room.getRoom') }}",
            type: 'GET',
            data: {"id_rooms": id},
            success: function(result){
                console.log(result.data[0])
                // Use below code if we want to access the images inside public/images
                // document.getElementById('roomPhoto').src = `{{ asset("images/` + result.data.photo + `")}}`;

                // Use below code if we want to get the images from API url
                document.getElementById('roomPhoto').src = `https://source.unsplash.com/${result.data[0].image}`;

                document.getElementById('roomName').innerHTML = result.data[0].name;
                document.getElementById('roomDetail').innerHTML = "Detail:<br>" + result.data[0].facility;
                document.getElementById('roomCapacity').innerHTML = "Kapasitas:\n" + result.data[0].capacity;
                document.getElementById('roomLocation').innerHTML = "Lokasi:\n" + result.data[0].location;
                document.getElementById('roomContact').innerHTML = "Kontak:\n" + result.data[0].contact;
                $('#roomReserve').attr('data-id', `${result.data[0].id_rooms}`);
            }
        });
        $('#roomModal').modal('show');

    }

    function reserveRoom(e) {
        let id  = $(e).data("id");
        $.ajax({
            url: "{{ route('room.getRoom') }}",
            type: 'GET',
            data: {"id_rooms": id},
            success: function(result){
                global_adminPhone = result.data[0].contact;
            }
        });
        $("#inputIdRoom").attr("value", id);
        $('#roomReserve').modal('show');
    }

    // this is the id of the form
    $("#formId").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    let form = $(this);

    let inputNoTelp = $("#inputNoTelp").val();
    // let noTelpAdmin = QueryResult
    if (inputNoTelp[0] === "0") {
        inputNoTelp = "62" + inputNoTelp.slice(1);
    }

    let actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                let booking_code = data.data.order_number;
                // Send WA and the booking_code to requestor.
                $.ajax({
                    type: "POST",
                    url: 'http://localhost:1221/sendWa',
                    contentType: "application/json; charset=utf-8",
                    data: JSON.stringify({
                        noTelp: inputNoTelp,
                        message: `Pesanan Anda dengan kode *${booking_code}* sudah terkirim ke admin untuk verifikasi.\n\nHarap menunggu sampai admin memverifikasi pesanan Anda!\n\nTerima kasih!\n\n_(Pesan ini berasal dari bot server, harap tidak membalasnya.)_`
                    }),
                    success: function(data) {
                        console.log('Message sent successfully!');
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })

                // Send WA and the booking_code to room admin.
                // let urlVerif = `https://localhost:8000/${booking_code}`;
                let urlVerif = `https://youtube.com/`;
                $.ajax({
                    type: "POST",
                    url: 'http://localhost:1221/sendWaVerif',
                    contentType: "application/json; charset=utf-8",
                    data: JSON.stringify({
                        // noTelp: global_adminPhone,
                        noTelp: '6281291572472',
                        // noTelp: '6287870539398',
                        message: `Pesanan dengan kode *${booking_code}* menunggu verifikasi Anda.\n\nKlik link dibawah ini untuk memverifikasi pesanan tersebut\n\n ${urlVerif} \n\nTerima kasih!\n\n_(Jika link tidak aktif (tidak bisa ditekan), balas chat ini dengan kata !aktifkan)_`
                    }),
                    success: function(data) {
                        console.log('Message sent successfully!');
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })

                $("#bookingCode").html(booking_code);
                $('#roomReserve').modal('toggle');
                $('#reserveSuccess').modal('show');
            }
        });
    });

    function backReserve() {
        $('#roomReserve').modal('toggle');
    }

    function backSuccess() {
        $('#reserveSuccess').modal('toggle');
        location.reload();
    }
    </script>
