@extends('Admin.layouts.main')
@section('container')
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                <div class="card radius-10">
					<div class="card-content">
						<div class="row row-group row-cols-1 row-cols-xl-4">
							<div class="col">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0">Total Simpanan</p>
											<h4 class="mb-0 text-primary"></h4>
										</div>
										<div class="ms-auto"><i class="bx bx-wallet font-35 text-primary"></i>
										</div>
									</div>
									<div class="progress radius-10 my-2" style="height:4px;">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
									</div>
								
								</div>
							</div>
							<div class="col">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0">Total Pinjaman</p>
											<h4 class="mb-0 text-danger"></h4>
										</div>
										<div class="ms-auto"><i class="bx bx-credit-card font-35 text-danger"></i>
										</div>
									</div>
									<div class="progress radius-10 my-2" style="height:4px;">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
									</div>
								
								</div>
							</div>
							<div class="col">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0">Total Angsuran</p>
											<h4 class="mb-0 text-success"></h4>
										</div>
										<div class="ms-auto"><i class="bx bx-transfer-alt font-35 text-success"></i>
										</div>
									</div>
									<div class="progress radius-10 my-2" style="height:4px;">
										<div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
									</div>
								
								</div>
							</div>
							<div class="col">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0">Total Pengguna</p>
											<h4 class="mb-0 text-warning"></h4>
										</div>
										<div class="ms-auto"><i class="bx bx-group font-35 text-warning"></i>
										</div>
									</div>
									<div class="progress radius-10 my-2" style="height:4px;">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
									</div>
							
								</div>
							</div>
						</div>
					</div>
				</div>

				 <div class="card radius-10">
                         <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Log Activity</h6>
								</div>
							</div>
					
								
						 <div class="table-responsive">
						   <table class="table align-middle mb-0">
							<thead class="table-light">
							 <tr>
							   <th>ID</th>
							   <th>Nama</th>
							   <th>Role</th>
							   <th>Username</th>
							   <th>Aktivitas</th>
							   <th>Waktu</th>
							 </tr>
							 </thead>
					
							 {{-- <tbody>@foreach ($logs as $log )<tr> --}}
								
							  {{-- <td>{{ $loop->iteration}}</td>
							  <td>{{ $user->nama_user }}</td>
							  <td>{{ $user->tipe_user }}</td>
							  <td>{{ $user->username }}</td>
							  <td><span class="badge bg-success text-white shadow-sm w-70">{{ $log->aktifitas }}</span></td>
							  <td>{{ $log->waktu }}</td>
							 
							 </tr>
							 
						    </tbody> --}}
			
						  </table>
						  </div>
						
						 </div>
			
					</div>

				
			</div>
		</div>
		<!--end page wrapper -->
        @endsection