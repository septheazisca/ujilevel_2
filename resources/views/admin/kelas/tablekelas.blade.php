@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.tablepelanggaran')
@endsection

@section('main')
<div class="pagetitle">
            <h1>Table Pelanggaran</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Tables</li>
                  <li class="breadcrumb-item active">Pelanggaran</li>
               </ol>
            </nav>
         </div>
         <section class="section">
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Data Kelas</h5>
                        <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                        <a href="/formkelas" class="btn btn-success">Tambah Data</a>
                        <table class="table datatable">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Nama Wali Kelas</th>
                                 <th scope="col">Kelas Walian</th>
                                 <!-- <th scope="col">Pelanggaran</th>
                                 <th scope="col">Tindak Lanjut</th>
                                 <th scope="col">Jumlah Poin</th> -->
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @php
                                 $no = 1;
                              @endphp
                              @foreach($datakelas as $dtkelas)
                              <tr>
                                 <th scope="row">{{ $no++ }}</th>
                                 <td>{{ $dtkelas->nama_wali_kelas}}</td>
                                 <td>{{ $dtkelas->kelas_walian}}</td>
                                 <td>
                                    <a href="/editformkelas/{{ $dtkelas->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="/deleteformkelas/{{ $dtkelas->id }}" style="margin-left: 5px;"><i class="fa-solid fa-trash" style="color: red;"></i></a>
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
