<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Halaman Admin</h1>
        <div class="row">
            <div class="col-12">
                @component('layout.alert',['class' => 'warning','judul' => 'Peringatan'])
                    @slot('class')
                        warning
                    @endslot
                    @slot('judul')
                        Peringatan
                    @endslot
                    100 data mahasiswa perlu diperbaiki
                @endcomponent
            </div>

            @component('layout.alert',['class' => 'danger','judul' => 'Awas'])
                @slot('class')
                    danger
                @endslot
                @slot('judul')
                    Awas
                @endslot
                Hari ini deadline laporan perjalanan dinas!
            @endcomponent

            @component('layout.alert',['class' => 'success','judul' => 'Kabar baik'])
                @slot('class')
                    success
                @endslot
                Bulan depan cuti panjang...
            @endcomponent
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

</body>

</html>
