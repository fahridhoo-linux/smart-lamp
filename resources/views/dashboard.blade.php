@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-3 mb-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h6>Total Lampu</h6>
                <h2>{{ $totalLamp }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h6>Lampu Menyala</h6>
                <h2>{{ $lampNyala }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-danger text-white">
            <div class="card-body">
                <h6>Lampu Mati</h6>
                <h2>{{ $lampMati }}</h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card bg-warning text-dark">
            <div class="card-body">
                <h6>Total Data Energi</h6>
                <h2>{{ $energy->count() }}</h2>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-lg-8">

        <div class="card">

            <div class="card-header fw-bold">
                Grafik Penggunaan Listrik
            </div>

            <div class="card-body">

                <canvas id="energyChart" height="100"></canvas>

            </div>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="card">

            <div class="card-header fw-bold">
                Informasi Sistem
            </div>

            <div class="card-body">

                <p>💡 Total Lampu : <b>{{ $totalLamp }}</b></p>

                <p>🟢 Lampu Menyala : <b>{{ $lampNyala }}</b></p>

                <p>🔴 Lampu Mati : <b>{{ $lampMati }}</b></p>

                <hr>

                <p class="text-success">
                    Sistem Monitoring Aktif
                </p>

            </div>

        </div>

    </div>

</div>

<div class="card mt-4">

    <div class="card-header fw-bold">

        Riwayat Penggunaan Listrik

    </div>

    <div class="card-body">

        <table class="table table-striped table-hover">

            <thead class="table-primary">

            <tr>

                <th>No</th>

                <th>Tanggal</th>

                <th>Penggunaan</th>

            </tr>

            </thead>

            <tbody>

            @forelse($energy as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->tanggal }}</td>

                <td>{{ $item->penggunaan_listrik }}</td>

            </tr>

            @empty

            <tr>

                <td colspan="3" class="text-center">

                    Tidak ada data

                </td>

            </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx=document.getElementById('energyChart');

new Chart(ctx,{

type:'line',

data:{

labels:[

@foreach($energy as $item)

'{{ $item->tanggal }}',

@endforeach

],

datasets:[{

label:'Penggunaan Listrik',

data:[

@foreach($energy as $item)

{{ $item->penggunaan_listrik }},

@endforeach

],

borderWidth:3,

tension:0.4,

fill:false

}]

}

});

</script>

@endsection