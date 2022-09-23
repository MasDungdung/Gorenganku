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
            <div class="row">
                <div class="card">
                    <div class="card-content divider">
                        <h3 class="divider-text">Detail Karyawan</h3>
                        <div class="card-body">
                            <h3>Nama : {{ $detail_karyawan['nama_karyawan'] }}</h3>
                            <h3>Status : {{ $detail_karyawan['status'] }}</h3>
                            <h3>foto : {{ $detail_karyawan['foto_karyawan'] }}</h3>
                        </div>
                        <a href="/master_data_entry_karyawan" class="btn btn-sm btn-primary"> kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('template.partial.footer')
@endsection
