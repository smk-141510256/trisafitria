@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Kategori Lembur</div>
        <div class="panel-body">
        <a class="btn btn-success" href="{{url('kategori/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>Id</th>
                        <th>Kode Lembur</th>
                        <th>Id Jabatan</th>
                        <th>Id Golongan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($kategori as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_lembur}} </td>
                        <td> {{$data->jabatan->nama_jabatan}}</td>
                        <td> {{$data->golongan->nama_golongan}}</td>
                        <td> Rp.{{$data->besaran_uang}}</td>
                        <td><a href="{{route('kategori.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                                   
                    
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection