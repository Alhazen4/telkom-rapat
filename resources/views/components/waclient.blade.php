<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <title>WA Client Setting</title>
</head>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .warp-center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    input {
        margin-top: 10px;
    }

</style>

<body>
    {{-- @dd($res); --}}
    <div class="card" style="width: auto; height: auto;">
        <div class="card-body">
            <div class="warp-center">
                {{-- @if ($res["code"] !== '')
                @else
                @endif --}}

                <label for="waClientStat" class="form-label">Status WA Klien</label>
                @if ($res["status"])
                    {!! QrCode::size(350)->errorCorrection('H')->generate($res["status"])!!}
                    <input class="form-control" id="waClientStat" placeholder="Connected" disabled>
                @else
                    {!! QrCode::size(350)->errorCorrection('H')->generate($res["code"])!!}
                    <input class="form-control" id="waClientStat" placeholder="Disconnected" disabled>
                @endif
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</html>
