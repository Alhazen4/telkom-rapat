<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Verification</title>
</head>

<style>
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .warp-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .detail {
        margin: 10px 0;
        background-color: rgb(240, 240, 240);
        padding: 10px;
        border-radius: 5px;
    }

    .div-button {
        display: flex;
        gap: 50px;
    }
</style>

<body>
    <div class="card" style="width: 30rem; height: auto;">
        <div class="card-body">
            <div class="warp-center">
                <h3 class="card-title">Verifikasi Pesanan Ruangan</h3>
                <p class="card-text">Pesanan {ID PESANAN} menunggu verifikasi Anda</p>
            </div>
            <div class="detail" name="detail">
                <label for="inputNama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="inputNama" name="name" readonly>
                <label for="inputNama" class="form-label">Ruangan yang dipesan</label>
                <input type="text" class="form-control" id="inputNama" name="name" readonly>
                <label for="inputUnit" class="form-label">Unit / Witel</label>
                <input type="text" class="form-control" id="inputUnit" name="unit" readonly>
                <label for="inputNoTelp" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control" id="inputNoTelp" name="telephone" readonly>
                <label for="inputJmlPeserta" class="form-label">Estimasi Jumlah Peserta</label>
                <input type="number" class="form-control" id="inputJmlPeserta" name="participant" readonly>
                <label for="inputTglPesan" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="inputTglPesan" name="date" readonly>
                <label for="inputWktPesan" class="form-label">Waktu Pesan</label>
                <input type="time-local" class="form-control" id="inputWktPesan" name="time" readonly>
            </div>
            <div class="warp-center">
                <p class="card-text">Apakah Anda akan memverifikasi pesanan ini?</p>
                <div class="div-button">
                    <a href="#" class="btn btn-danger">Tolak</a>
                    <a href="#" class="btn btn-success">Terima</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
