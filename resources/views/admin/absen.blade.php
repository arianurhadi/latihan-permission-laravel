@extends('layouts.admin')
@section('content')
    <div class="d-flex align-items-center mb-3">
        <h3 class="fw-bold me-auto">Absensi Karyawan</h3>
        @can('print attendence')
        <button class="btn btn-warning align-self-">Cetak</button>
        @endcan
    </div>
    <table class="table">
        <thead>
            <th>#</th>
            <th>NIP</th>
            <th>Nama Karyawan</th>
            <th>Tanggal Absen</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1001</td>
                <td>Aria Nurhadi Zain</td>
                <td>14/03/2022</td>
                <td>08.00</td>
                <td>15.00</td>
            </tr>
        </tbody>
    </table>
@endsection