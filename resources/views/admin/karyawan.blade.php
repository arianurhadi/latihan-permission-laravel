@extends('layouts.admin')
@section('content')

<div class="d-flex align-items-center mb-3">
    <h3 class="fw-bold me-auto">Karyawan</h3>
    @can('create employee')
    <button class="btn btn-primary">Tambah Karyawan</button>
    @endcan
</div>

<table class="table">
    <thead>
        <th>#</th>
        <th>NIP</th>
        <th>Nama Karyawan</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No HP</th>
        @can('delete employee|update employee')
        <th>Aksi</th>
        @endcan
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1001</td>
            <td>Aria Nurhadi Zain</td>
            <td>Web Developer</td>
            <td>Yogyakarta</td>
            <td>aria@gmail.com</td>
            <td>0892384824</td>
            <td> 
                @can('delete employee')
                <button class="btn btn-danger">Hapus</button>
                @endcan
                @can('update employee')
                <button class="btn btn-success">Edit</button>
                @endcan
            </td>
        </tr>
    </tbody>
</table>
@endsection