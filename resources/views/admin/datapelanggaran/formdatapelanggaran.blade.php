@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.formsiswa')
@endsection

@section('main')
<div class="pagetitle">
   <h1>Form Siswa</h1>
   <nav>
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item">Forms</li>
         <li class="breadcrumb-item active">Siswa</li>
      </ol>
   </nav>
</div>
<section class="section">
   <div class="row">
      <div class="col-lg-6">
         <div class="card" style="width: 76vw;">
            <div class="card-body">
               <div class="title-first" style="display: flex;">
                  <a href="/tabledatapelanggaran"><i class="fa-solid fa-backward" style="margin: 2.5vh 2vh 0 0; font-size:22px; color: #4154f1;"></i></a>
                  <h5 class="card-title">Form Data Siswa</h5>
               </div>
               <form class="row g-12" action="/simpanformdatapelanggaran" method="POST">
                {{  csrf_field() }}
                  <div class="col-md-12"> 
                     <label for="inputName5" class="form-label">Pelanggaran</label> 
                     <input type="text" class="form-control" id="inputName5" name="pelanggaran">
                  </div>
                  <div class="col-md-12" style="margin-top: 2vh;"> <label for="inputCity" class="form-label">Poin</label> <input type="number"name="poin" class="form-control" id="inputCity"></div>
                  <div class="col-12" style="margin-top: 2vh;"> <label for="inputAddress5" class="form-label">Tindak Lanjut</label> <input type="text" name="tindak_lanjut" class="form-control" id="inputAddres5s" placeholder="1234 Main St"></div>
                  <div class="col-md-12" style="margin-top: 2vh;"> <label for="inputZip" class="form-label">Keterangan</label> <input type="text" name="keterangan" class="form-control" id="inputZip"></div>
                  <div class="text-center" style="margin-top: 3vh;"> 
                     <button type="submit" class="btn btn-primary">Submit</button> 
                  </div>
                  <!-- <a href="/backtablesiswa"><button class="btn btn-secondary">Reset</button></a> -->
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection


