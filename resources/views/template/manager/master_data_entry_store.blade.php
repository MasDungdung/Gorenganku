{{-- @dd($master_data) --}}

@extends('template.main')

@section('konten')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>GorenganKu</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <section class="section">
                            <div class="card">
                                <div class="card-header text-center">
                                    <h3>Master Data Entry Store GorenganKu</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nama Store</th>
                                                <th>lokasi Store</th>
                                                <th>Foto Store</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($master_data as $data)
                                            <tr>
                                                <td>{{ $data["nomor"] }}</td>
                                                <td>{{ $data["nama_store"] }}</td>
                                                <td>{{ $data["alamat"] }}</td>
                                                <td>
                                                    <img class="w-50" src="{{ $data["foto_store"] }}"
                                                        data-bs-toggle="modal" data-bs-target="#show" />
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge bg-{{ $data["status"] === "active" ? "success" : "danger" }}">{{ $data["status"] }}</span>
                                                </td>
                                            </tr>
                                            <div class="modal fade text-center" id="show" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <p>{{ $data["foto_store"] }}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn" data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('template.partial.footer')
@endsection
