@extends('layouts/master',['title'=>'Tambah Status'])

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-4">
            <form method="POST" action="{{ route('status.store') }}">
                @csrf
                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tipe-status">Tipe Status</label>
                        <select class="form-control" name="tipe_status">
                            <option>New</option>
                            <option>Return</option>
                            <option>Replace</option>
                            <option>On Site</option>
                            <option>On Service</option>
                            <option>Sold</option>
                            <option>Missing</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mb-4">
                    <div class="form-group col-md-12">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" required>
                    </div>
                </div>

                <div class="text-right">
                    <a href="{{ route('status.index') }}"><button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button></a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection