<div class="modal fade" id="roomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="card-img" src={{ asset("/image/" . $photo)}} alt="...">
                <div class="card-body">
                    <p>{{ $photo }}</p>
                    <h5 class="card-title">{{ $name }}</h5>
                    <p class="card-text">Detail: {{ $detail }}</p>
                    <p class="card-text">Kapasitas: {{ $capacity }}</p>
                    <p class="card-text">Lokasi: {{ $location }}</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#roomReserv" class="btn btn-primary">Pesan Ruangan Ini</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="roomReserv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="inputNama" class="form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="inputNama">
                    <label for="inputUnit" class="form-label">Unit / Witel</label>
                    <input type="text" class="form-control" id="inputUnit">
                    <label for="inputNoTelp" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id="inputNoTelp">
                </form>
            </div>
            <div class="modal-footer">
                <button data-bs-toggle="modal" data-bs-target="#roomModal" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary">Pesan Ruangan Ini</button>
            </div>
        </div>
    </div>
</div>
