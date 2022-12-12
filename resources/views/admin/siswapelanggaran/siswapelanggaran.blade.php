
      

@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.index')
@endsection

@section('main')
<div class="pagetitle">
   <h1>Dashboard</h1>
   <nav>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item active">Dashboard</li>
      </ol>
   </nav>
</div>
<section class="section dashboard">
   <div class="row">
      <div class="col-lg-8">
         <div class="row">
            <div class="col-12">
               <div class="card recent-sales overflow-auto" style="width: 77vw;">
                  <div class="filter">
                     <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                           <h6>Filter</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                     </ul>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Recent Sales <span>| Today</span></h5>
                     <a href="/formpelanggaransiswa" class="btn btn-success">Tambah Data</a>
                     <hr>
                     <table class="table table-borderless datatable">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Siswa</th>
                              <th scope="col">Kelas</th>
                              <th scope="col">wali_kelas</th>
                              <th scope="col">Pelanggaran</th>
                              <th scope="col">Poin</th>
                              <th scope="col">Action</th>
                           </tr>
                        </thead>
                        @php
                           $no = 1;
                        @endphp
                        <tbody>
                          @foreach ($datakasus as $dk)
                         @foreach ($dk->relasitosiswa as $s)
                         @foreach ($dk->relasitopelanggaran as $p)
                            <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $s->nama}}</td>
                              <td>{{ $s->kelas}}</td>
                              <td>{{ $s->guru->nama}}</td>
                              <td>{{$p->pelanggaran}}</td>
                              <td>{{$p->poin}}</td>
                              
                              <td>
                              <a href="/detailpelanggaransiswa/{{ $dk->id }}"><i class="fa-solid fa-circle-info" style="color: green; font-size: 23px; margin-right: .5vh;"></i></a>
                                 
                                 <a href="/deleteformpelanggaransiswa/{{ $dk->id }}" style="margin-left: 5px;"><i class="fa-solid fa-trash" style="color: red; font-size: 23px; margin-right: .5vh;"></i></a>
                              </td>
                            </tr>
                            @endforeach
                            @endforeach
                          @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
@endsection
