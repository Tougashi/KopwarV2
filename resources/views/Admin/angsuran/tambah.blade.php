@extends('Admin.layouts.main')

@section('container')
<div class="page-wrapper">
    <div class="page-content">
      
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Tambah Data Angsuran</div>
            <div class="ps-3"> 
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="   "><i class="bx bx-wallet-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Kopwar Intens</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col" style="display: flex; justify-content:space-between">	
            <h6 class="mb-0 text-uppercase">Isi dengan lengkap</h6>
                <a href="/pinjaman" class="btn btn-primary radius-2 mb-0"><i class="bx bx-reply"></i>Kembali</a>
            </div>
            <hr/>

        <div class="card">
            <div class="card-body">
                <div class="p-4 border rounded">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-15">
                            <label for="validationCustom02" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="validationCustom02"  required>
                            <div class="valid-feedback">Valid</div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="text" class="form-control datepicker" value="Pilih...  " required />
                            </div>
                            {{-- <div class="invalid-feedback">Valid</div> --}}
                            <label for="validationCustom02" class="form-label">Jumlah Angsuran</label>
                            <input type="Number" class="form-control" id="validationCustom02" value="Otto" required>
                            {{-- <div class="valid-feedback">Valid</div> --}}
                            <br>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">Setuju menambahkan data yang valid</label>
                                <div class="invalid-feedback">Isi data dengan valid</div>
                            </div>
                        </div>
                        <br>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
     </div>


@endsection

