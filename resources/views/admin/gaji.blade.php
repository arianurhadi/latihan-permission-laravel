@extends('layouts.admin')
@section('content')
    <div class="d-flex align-items-center mb-3">
        <h3 class="fw-bold me-auto">Gaji Karyawan</h3>
        @can('print salary')
        <button class="btn btn-warning align-self-">Cetak</button>
        @endcan
    </div>
    <table class="table">
        <thead>
            <th>#</th>
            <th>NIP</th>
            <th>Nama Karyawan</th>
            <th>Gaji Pokok</th>
            <th>Tunjangan</th>
            <th>Total Gaji</th>
            @can('update salary')
            <th>Aksi</th>
            @endcan
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1001</td>
                <td>Aria Nurhadi Zain</td>
                <td>Rp. 1.000.000</td>
                <td>Rp. 200.000</td>
                <td>Rp. 1.200.000</td>
                <td> 
                    @can('update salary')
                    <button class="btn btn-success">Edit</button>
                    @endcan
                </td>
            </tr>
        </tbody>
    </table>
@endsection