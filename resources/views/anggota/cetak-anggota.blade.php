<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PERPUSTAKAAN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

</head>

<body class="bg-white">
    <div class="bg-white">
        <h1 class="text-center">Data Anggota Perpustakaan Umum</h1>
        <table class="table text-center ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($anggota as $a)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $a->idanggota }}</td>
                        <td>{{ $a->nama }}</td>
                        <td><img src="{{ asset('assets/img/default.jpg') }}" class="rounded-3"
                                style="width:70px; height:70px" alt=""></td>
                        <td>{{ $a->jeniskelamin }}</td>
                        <td>{{ $a->alamat }}</td>
                        <td>{{ $a->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row">Data Kosong</th>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
