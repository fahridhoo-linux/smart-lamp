<!DOCTYPE html>
<html>
<head>
    <title>Data Lampu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Data Lampu</h2>

    <a href="/lamps/create" class="btn btn-primary mb-3">
        Tambah Lampu
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lampu</th>
                <th>Lokasi</th>
                <th>Daya</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($lamps as $lamp)
            <tr>
                <td>{{ $lamp->id}}</td>
                <td>{{ $lamp->nama_lampu}}</td>
                <td>{{ $lamp->lokasi}}</td>
                <td>{{ $lamp->daya}}</td>
                <td>{{ $lamp->status_lampu}}</td>
                <td>Nyala</td>
                <td>
                    <button class="btn btn-warning btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>