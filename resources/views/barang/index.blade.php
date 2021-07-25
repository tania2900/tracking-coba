@extends('layouts/master',['title'=>'Daftar Barang'])

@section('content')
<div class="container mt-3">
    <div class="row align-items-center m-l-0">
        <div class="col-sm-3">
            <h5>Daftar Barang</h5>
        </div>
        <div class="col-sm-9 text-right">
            <a href="{{ route('barang.create') }}"><button class="btn btn-primary btn-round has-ripple"><i class="bi bi-plus"></i> Tambah Barang</button></a>
        </div>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">SKU</th>
                <th scope="col">Status</th>
                <th scope="col">Deskripsi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($barang as $number => $barang) 
              <tr>
                <th>{{ ++$number }}</th>
                <td>
                  <div class="" style="width: 200px; height: auto;">
                    <a href="{{ asset('/fotobarang/'.$barang->foto) }}" data-lightbox="1">
                        <img src="{{ asset('/fotobarang/'.$barang->foto) }}" alt="" class="img-fluid img-thumbnail">
                    </a>
                  </div>
                </td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->sku }}</td>
                <td>{{ $barang->status->tipe_status }}</td>
                <td>{{ $barang->deskripsi }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection