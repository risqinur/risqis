@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <h4>Data Artikel</h4>
        <div class="col">
            <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-sm mb-2" style="float: right">Tambah Data Artikel </a>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">TanggalArtikel</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                    @php
                    $n =1; 
                 @endphp
                     
                 
                 @foreach ($data as $row)
                     <tr>
                         <td>{{ $n++ }}</td>
                         <td>{{ $row->judul }}</td>
                         <td>
                            <img src="{{ asset('storage/'. $row->foto) }}" alt="eror" width="120px">
                         </td>
                         <td>{{ $row->isi }}</td>
                         <td>{{ $row->Kategori->nama}}</td>
                         <td>{{ $row->created_at->format('d/m/y') }}</td>
                         <td>
                             <a href="{{ route('artikel.edit', $row->id) }}"class="btn btn-primary btn-sm">Edit</a>
                             <a href="{{ url('delakel/'.$row->id) }}"class="btn btn-danger btn-sm">Hapus</a>
                         </td>
                     </tr>
                 @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
