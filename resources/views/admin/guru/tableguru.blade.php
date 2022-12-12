@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.tableguru')
@endsection

@section('main')
<div class="pagetitle">
            <h1>General Tables</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Tables</li>
                  <li class="breadcrumb-item active">General</li>
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
               <a href="/formguru" class="btn btn-success">Tambah Data</a>
               <table class="table datatable">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <!-- <th scope="col">Jurusan</th> -->
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
                  @foreach($dataguru as $dtguru)
                     <tr>
                     <th scope="row">{{ $no++ }}</th>
                        <td>{{ $dtguru->nip }}</td>
                        <td>{{ $dtguru->nama }}</td>
                        <td>{{ $dtguru->jenis_kelamin }}</td>
                        <!-- <td>{{ $dtguru->alamat }}</td>
                        <td>{{ $dtguru->email }}</td>
                        <td>{{ $dtguru->notelepon }}</td> -->
                        <td>{{ $dtguru->wali_kelas }}</td>
                        <td style="width: 19vh;">
                           <a href="/detailguru/{{ $dtguru->id }}"><i class="fa-solid fa-circle-info" style="color: green; font-size: 23px; margin-right: .5vh;"></i></a>
                           <a href="/editformguru/{{ $dtguru->id }}"><i class="fa-solid fa-pen-to-square" style="font-size: 23px; margin-right: .5vh;"></i></a>
                           <a href="/deleteguru/{{ $dtguru->id }}" style="margin-left: 5px;"><i class="fa-solid fa-trash" style="color: red; font-size: 23px; margin-right: .5vh;"></i></a>
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


