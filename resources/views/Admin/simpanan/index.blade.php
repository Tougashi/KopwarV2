@extends('Admin.layouts.main')
@section('container')
    

<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
        
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Simpanan</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="   "><i class="bx bx-wallet"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Kopwar Intens</li>
                    </ol>
                </nav>
            </div>
        </div>

		<div class="col" style="display: flex; justify-content:space-between">	
        <h6 class="mb-0 text-uppercase">Data Simpanan</h6>
			<a href="/tambah-simpanan" class="btn btn-primary radius-2 mb-0"><i class="bx bxs-plus-square"></i>Tambah Data</a>
		</div>
        <hr/>
		
        {{-- end breadcump --}}

				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-5">
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Pokok</p>
										<h6 class="mb-0">Rp 0</h6>		
									</div>
									<div class="ms-auto">	<i class='bx bx-cart font-30'></i>
									</div>
								</div>
								<div class="progress radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 46%"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Wajib</p>
										<h6 class="mb-0">Rp 52.945</h6>
									</div>
									<div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
									</div>
								</div>
								<div class="progress radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 72%"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Hari Raya</p>
										<h6 class="mb-0">Rp 2.400.000</h6>
									</div>
									<div class="ms-auto">	<i class='bx bx-calendar font-30'></i>
									</div>
								</div>
								<div class="progress radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-success" role="progressbar" style="width: 68%"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Umroh</p>
										<h6 class="mb-0">Rp 700.000</h6>
									</div>
									<div class="ms-auto">	<i class='bx bx-paper-plane font-30'></i>
									</div>
								</div>
								<div class="progress radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-info" role="progressbar" style="width: 66%"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Wisata</p>
										<h6 class="mb-0">Rp 20.000</h6>
									</div>
									<div class="ms-auto">	<i class='bx bx-car font-30'></i>
									</div>
								</div>
								<div class="progress radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 66%"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis Simpanan</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Adryan Suryaman</td>
                                        <td>Pokok</td>
                                        <td>2023/06/14</td>
                                        <td>Rp 2.000.000</td>
                                    </tr>
                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                        </div>
                    </div>
                </div>

{{-- end page wrapper --}}
    </div>
</div>
<!--end page wrapper -->


@endsection