@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.index')
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
                  <a href="/tablesiswa"><i class="fa-solid fa-backward" style="margin: 2.5vh 2vh 0 0; font-size:22px; color: #4154f1;"></i></a>
                  <h5 class="card-title">Form Data Siswa</h5>
               </div>
               <form class="row g-3" action="/simpanformpelanggaransiswa" method="POST">
                {{  csrf_field() }}
                  <div class="col-md-12"> 
                     <label for="inputName5" class="form-label">Nama Siswa</label> 
                     <select id="inputState" class="form-select" name="siswa_id" id="siswa_id">
                        <option disabled value>Pilih Siswa</option>
                        @foreach ($inidatasiswa as $s )
                        <option value="{{ $s->id }}">{{ $s-> nama }}</option>
                        @endforeach
                     </select>
                  </div>
                  
                  <div class="col-md-12"> 
                     <label for="inputName5" class="form-label">Kelas Siswa</label> 
                     <select id="inputState" class="form-select" name="siswa_id" id="siswa_id">
                        <option disabled value>Pilih Kelas Siswa</option>
                        @foreach ($inidatasiswa as $s )
                        <option value="{{ $s->id }}">{{ $s-> kelas }}</option>
                        @endforeach
                     </select>
                  </div>
                  
                  <div class="col-md-12"> 
                     <label for="inputName5" class="form-label">Nama Pelanggaran</label> 
                     <select id="inputState" class="form-select" name="datapelanggaran_id" id="datapelanggaran_id">
                        <option disabled value>Pilih Pelanggaran</option>
                        @foreach ($inidatapelanggaran as $p )
                        <option value="{{ $p->id }}">{{ $p-> pelanggaran }}</option>
                        @endforeach
                     </select>
                  </div>
                  
                  
                  <div class="text-center"> 
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


