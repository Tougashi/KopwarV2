@extends('Admin.layouts.main')
@section('container')
    

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">User List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="pinjaman"><i class="bx bx-group    "></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Kopwar Intens</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col" style="display: flex; justify-content:space-between">	
            <h6 class="mb-0 text-uppercase">Data User</h6>
                <a href="/tambah-user" class="btn btn-primary radius-2 mb-0"><i class="bx bxs-plus-square"></i>Tambah User</a>
            </div>
            <hr/>
        {{-- end breadcump --}}

				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-1">
					<div class="col">
						<div class="card radius-10 overflow-hidden">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total User</p>
										<h5 class="mb-0">{{ $user->count() }}</h5>		
									</div>
									<div class="ms-auto">	<i class='bx bx-group font-30'></i>
									</div>
								</div>
								<div class="progress radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 10%"></div>
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
                                        <th>Username</th>
                                        <th>Role</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Tanggal Join</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->role }}</td>
                                        {{-- <td class="text-success">Aktif</td> --}}
                                        <td>{{ $item->created_at }}</td>
                                        <td>
											<div class="d-flex order-actions">
												<a href="" class="me-1"><i class='bx bxs-edit text-secondary'></i></a>
												<a href="" class="me-1"><i class='bx bxs-trash text-danger'></i></a>
											</div>
										</td>
                                    </tr>
                                      @endforeach
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