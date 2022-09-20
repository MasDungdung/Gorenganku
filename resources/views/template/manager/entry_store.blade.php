@extends('template.main')

@section('konten')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>Entry Data Store GorenganKu</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group has-icon-right">
                                              <label for="first-name-icon">Nama Pegawai</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Nama Pegawai"
                                                        id="first-name-icon" />
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-right">
                                                <label for="email-id-icon">Lokasi Store</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Alamat Store"
                                                        id="password-id-icon" />
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-date"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-right">
                                                <label for="password-id-icon">Keterangan</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Keterangan"
                                                        id="password-id-icon" />
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-date"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-right">
                                                <label for="password-id-icon">Foto Store</label>
                                                <div class="position-relative">
                                                    <input type="file" class="form-control" placeholder="Password"
                                                        id="password-id-icon" />
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-file-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                                Simpan
                                            </button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('template.partial.footer')
@endsection
