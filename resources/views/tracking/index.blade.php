@extends('layouts/master',['title'=>'Tracking'])

@section('content')
<div class="container mt-3">
    <div class="section">
        <form action="{{ url()->current() }}" method="GET">
            <div class="input-group mb-3">
                <input type="search" class="form-control" name="track" id="track" placeholder="Input SKU atau Nama Barang" aria-label="Input SKU atau Nama Barang" value="{{ request('track') }}" aria-describedby="tracking">
                <button class="btn btn-outline-secondary" type="submit" name="tracking" id="tracking">Track</button>
            </div>
        </form>
    </div>
    <div class="card hide" id="track-card">
        <div class="card-body">
            <div class="card task-card m-l-15 col-md-6">
                <div class="card-body ">
                    <p></p>
                    <div class="row md-12">
                        <div class="col-md-4">
                            <h4 class="text-muted"></h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-muted m-l-50">|</h4>
                        </div>
                        <div class="col-md-5">
                            <h4 class="text-muted "></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <ul class="list-unstyled task-list">
                            <li>
                                <i class="task-icon bg-c-red"></i>
                                <h6 class="text-muted"></h6>
                                <p class="m-b-5"></p>
                            </li>
                            <li>
                                <i class="task-icon bg-c-blue"></i>
                                <h6 class="text-muted"></h6>
                                <p class="m-b-5"></p>
                                <p class="m-b-5"></p>
                            </li>
                            <li>
                                <i class="task-icon bg-c-green"></i>
                                <h6 class="text-muted"></h6>
                                <p class="m-b-5"></p>
                                <p class="m-b-5"></p>
                                <p class="m-b-5"></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection