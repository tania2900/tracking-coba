@extends('layouts/master',['title'=>'Daftar Status'])

@section('content')
<div class="container mt-3">
    <div class="row align-items-center m-l-0">
        <div class="col-sm-3">
            <h5>Daftar Status</h5>
        </div>
        <div class="col-sm-9 text-right">
            <a href="{{ route('status.create') }}"><button class="btn btn-primary btn-round has-ripple"><i class="bi bi-plus"></i> Tambah Status</button></a>
        </div>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th class="col-3">Status</th>
                    <th class="col-3">Tipe Status</th>
                    <th class="col-4">Keterangan</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($status as $status)
              <tr>
                  <td>{{ $status->nama }}</td>
                  <td>
                      @if($status->tipe_status == 'New')
                      <span class="badge rounded-pill bg-primary">{{ $status->tipe_status }}</span>
                      @elseif($status->tipe_status == "Return")
                      <span class="badge rounded-pill bg-warning text-dark">{{ $status->tipe_status }}</span>
                      @elseif($status->tipe_status == "Replace")
                      <span class="badge rounded-pill bg-info text-dark">{{ $status->tipe_status }}</span>
                      @elseif($status->tipe_status == "On Site")
                      <span class="badge rounded-pill bg-success">{{ $status->tipe_status }}</span>
                      @elseif($status->tipe_status == "On Service")
                      <span class="badge rounded-pill bg-warning text-dark">{{ $status->tipe_status }}</span>
                      @elseif($status->tipe_status == "Sold")
                      <span class="badge rounded-pill bg-danger">{{ $status->tipe_status }}</span>
                      @elseif($status->tipe_status == "Missing")
                      <span class="badge rounded-pill bg-danger">{{ $status->tipe_status }}</span>
                      @endif
                  </td>
                  <td>{{ $status->keterangan }}</td>
              </tr>
              @endforeach
          </tbody>
          </table>
    </div>
</div>
@endsection