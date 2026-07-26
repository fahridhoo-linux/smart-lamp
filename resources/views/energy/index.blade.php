@extends('layouts.app')

@section('content')

<h3>Data Penggunaan Listrik</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Penggunaan Listrik</th>
        </tr>
    </thead>

    <tbody>
        @foreach($energy as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->jumlah_kwh }} kWh</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection