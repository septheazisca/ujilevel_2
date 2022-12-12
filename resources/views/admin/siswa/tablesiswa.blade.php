@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.tablesiswa')
@endsection

@section('main')
<div class="pagetitle">
   <h1>Table Data Siswa</h1>
   <nav>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item">Tables</li>
         <li class="breadcrumb-item active">Data</li>
      </ol>
   </nav>
</div>
<section class="section">
<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Datatables</h5>
            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
            <a href="/formsiswa" class="btn btn-success">Tambah Data</a>
            <table class="table datatable">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">NIS</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Kelas</th>
                     <th scope="col">Jurusan</th>
                     <!-- <th scope="col">Jenis Kelamin</th> -->
                     <!-- <th scope="col">Alamat</th> -->
                     <!-- <th scope="col">No. Telepon</th> -->
                     <!-- <th scope="col">Email</th> -->
                     <!-- <th scope="col">Password</th> -->
                     <th scope="col">Wali Kelas</th>
                     <th scope="col">Action</th>

                  </tr>
               </thead>
               <tbody>
                  @php
                     $no = 1;
                  @endphp
                  @foreach($datasiswa as $dtsiswa)
                  <tr>
                     <th scope="row">{{ $no++ }}</th>
                     <td>{{ $dtsiswa->nis}}</td>
                     <td>{{ $dtsiswa->nama}}</td>
                     <td>{{ $dtsiswa->kelas}}</td>
                     <td>{{ $dtsiswa->jurusan}}</td>
                     <!-- <td>{{ $dtsiswa->jenis_kelamin}}</td> -->
                     <!-- <td>{{ $dtsiswa->alamat}}</td> -->
                     <!-- <td>{{ $dtsiswa->notelepon}}</td> -->
                     <!-- <td>{{ $dtsiswa->email}}</td> -->
                     <!-- <td>{{ $dtsiswa->password}}</td> -->
                     <td>{{ $dtsiswa->guru->nama }}</td>
                     <!-- <td>{{ $dtsiswa->guru->kelas }}</td> -->
                     <td style="width: 19vh;">
                        <a href="/detailsiswa/{{ $dtsiswa->id }}"><i class="fa-solid fa-circle-info" style="color: green; font-size: 23px; margin-right: .5vh;"></i></a>
                        <a href="/editformsiswa/{{ $dtsiswa->id }}"><i class="fa-solid fa-pen-to-square" style="font-size: 23px; margin-right: .5vh;"></i></a>
                        <a href="/deletedatapelanggaran/{{ $dtsiswa->id }}" style="margin-left: 5px;"><i class="fa-solid fa-trash" style="color: red; font-size: 23px; margin-right: .5vh;"></i></a>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
</section>
@endsection
