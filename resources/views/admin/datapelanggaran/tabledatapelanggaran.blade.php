@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.tabledatapelanggaran')
@endsection

@section('main')
<div class="pagetitle">
   <h1>Table Data Pelanggaran</h1>
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
            <a href="/formdatapelanggaran" class="btn btn-success">Tambah Data</a>
            <table class="table datatable">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Pelanggaran</th>
                     <th scope="col">Poin</th>
                     <th scope="col">Tindak Lanjut</th>
                     <th scope="col">Keterangan</th>
                     <th scope="col">Action</th>

                  </tr>
               </thead>
               <tbody>
                  @php
                     $no = 1;
                  @endphp
                @foreach($datapelanggaran2 as $dtpelanggaran2)
                  <tr>
                     <th scope="row">{{ $no++ }}</th>
                     <td>{{ $dtpelanggaran2->pelanggaran }}</td>
                     <td>{{ $dtpelanggaran2->poin }}</td>
                     <td>{{ $dtpelanggaran2->tindak_lanjut }}</td>
                     <td>{{ $dtpelanggaran2->keterangan }}</td>
                     <td style="width: 19vh;">
                        <a href="/editformdatapelanggaran/{{ $dtpelanggaran2->id }}"><i class="fa-solid fa-pen-to-square" style="font-size: 23px; margin-right: .5vh;"></i></a>
                        <a href="/deletedatapelanggaran/{{ $dtpelanggaran2->id }}" style="margin-left: 5px;"><i class="fa-solid fa-trash" style="color: red; font-size: 23px; margin-right: .5vh;"></i></a>
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
