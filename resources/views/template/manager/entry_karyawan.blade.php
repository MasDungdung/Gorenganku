@extends('template.main')

@section('konten')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <h3>Entry Data Karyawan GorenganKu</h3>
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
                                                <label for="mobile-id-icon">Nama</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Nama Karyawan"
                                                        id="mobile-id-icon" />
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-right">
                                                <label for="mobile-id-icon">Status</label>
                                                <div class="position-relative">
                                                    <input type="number" class="form-control" placeholder="ex:30"
                                                        id="mobile-id-icon" />
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-cash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-right">
                                                <label for="mobile-id-icon">Keterangan</label>
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Keterangan"
                                                        id="mobile-id-icon" />
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-cash"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group has-icon-right">
                                                <label for="password-id-icon">Upload Foto Karyawan</label>
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
