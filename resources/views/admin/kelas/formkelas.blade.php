@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.formpelanggaran')
@endsection

@section('main')
<div class="pagetitle">
            <h1>Form Pelanggaran</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Forms</li>
                  <li class="breadcrumb-item active">Pelanggaran</li>
               </ol>
            </nav>
         </div>
         <section class="section">
            <div class="row">
               <div class="col-lg-6">
                  <div class="card" style="width: 77vw;">
                     <div class="card-body">
                     <div class="title-first" style="display: flex;">
                        <a href="/tablekelas"><i class="fa-solid fa-backward" style="margin: 2.5vh 2vh 0 0; font-size:22px; color: #4154f1;"></i></a>
                        <h5 class="card-title">Form Data Pelanggaran</h5>
                     </div>
                        <h5 class="card-title">Form Data Pelanggaran</h5>
                        <form class="row g-3" action="/simpanformkelas" method="POST">
                        {{  csrf_field() }}
                           <div class="col-12"> <label for="inputNanme4" class="form-label">Nama Wali Kelas</label> <input type="text" name="nama_wali_kelas" class="form-control" id="inputNanme4"></div>
                           <div class="col-12"> <label for="inputEmail4" class="form-label">Kelas Walian</label> <input type="text" name="kelas_walian" class="form-control" id="inputEmail4"></div>
                           <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-secondary">Reset</button></div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@endsection


