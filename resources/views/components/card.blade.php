<body>
    <div class="card w-100">
        <img class="card-img" src={{ "https://source.unsplash.com/" . $room["image"] }} alt="...">

        {{-- Use below code if we want to access the images inside public/images --}}
        {{-- <img class="card-img" src={{ asset("/images/" . $room["photo"])}} alt="..."> --}}

        <div class="card-body">
                <h5 class="card-title">{{ $room["name"] }}</h5>
                <p class="card-text">Kapasitas: {{ $room["capacity"] }}</p>
                <p class="card-text">Lokasi: {{ $room["location"] }}</p>
                {{-- <p class="card-text">id_room: {{ $room["id_rooms"] }}</p> --}}
                <a data-id="{{ $room["id_rooms"] }}" onclick="showRoomCard(event.target)" class="btn btn-primary">Detail Ruangan</a>
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
                            <p id="roomDetail" class="card-text">Detail: </p>
                            <p id="roomCapacity" class="card-text">Kapasitas: </p>
                            <p id="roomLocation" class="card-text">Lokasi: </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#roomReserv" class="btn btn-primary" id="addButton">Pesan Ruangan Ini</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="roomReserv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Ruangan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formid" method="post" action="{{ url('/request') }}">
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
                                <button data-bs-toggle="modal" data-bs-target="#roomModal" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                <button type="submit" class="btn btn-primary">Pesan Ruangan Ini</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    function showRoomCard(e) {
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
                $('#roomReserv').attr('data-id', `${result.data[0].id_rooms}`);
            }
        });
        $('#roomModal').modal('show');

    }

    $( "#roomReserv" ).on('shown.bs.modal', function(){
        let roomReservId = $('#roomReserv').attr("data-id");
        $("#inputIdRoom").attr("value", roomReservId);
    });
    </script>
