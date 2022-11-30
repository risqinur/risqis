@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <h4>Data Kategori</h4>
        <div class="col-md-8">
            <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm mb-2" style="float: right">Tambah Data Kategori </a>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
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
                         <td>{{ $row->nama }}</td>
                         <td>
                             <a href="{{ route('kategori.edit', $row->id) }}"class="btn btn-primary btn-sm">Edit</a>
                             <a href="{{ url('delkat/'.$row->id) }}"class="btn btn-danger btn-sm">Hapus</a>
                         </td>
                     </tr>
                 @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
