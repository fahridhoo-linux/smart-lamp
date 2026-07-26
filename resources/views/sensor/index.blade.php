@extends('layouts.app')

@section('content')

<h3>Data Sensor</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Intensitas Cahaya</th>
            <th>Gerakan</th>
        </tr>
    </thead>

    <tbody>
        @foreach($sensor as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->intensitas_cahaya }}</td>
            <td>{{ $item->status_gerakan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection