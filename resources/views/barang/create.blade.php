@extends('layouts/master',['title'=>'Tambah Barang'])

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-4">
            <form class="row g-3" method="POST" action="{{ route('barang.store') }}">
              @csrf
                <div class="col-md-6">
                  <label for="nama" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="col-md-6">
                  <label for="sku" class="form-label">SKU</label>
                  <input type="text" class="form-control" name="sku" id="sku">
                </div>
                <div class="col-12">
                  <select class="form-select" aria-label="Pilih Status" name="status_id">
                    @foreach($daftarStatus as $status)
                    <option value="{{ $status->id }}">{{ $status->tipe_status }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-12">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Input Foto</label>
                  <input class="form-control" type="file" id="formFile" name="foto">
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection