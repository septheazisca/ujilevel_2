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
             <a href="/tablesiswa"><i class="fa-solid fa-backward" style="margin: 2.5vh 2vh 0 0; font-size:22px; color: #4154f1;"></i></a>
             <h5 class="card-title">Form Edit Data Siswa</h5>
           </div>
               <form class="row g-3" action="/updateformsiswa/{{ $editsiswa->id }}">
               {{  csrf_field() }}
                  <div class="col-md-12"> 
                     <label for="inputName5" class="form-label">Nama Siswa</label> 
                     <input type="text" class="form-control" id="inputName5" name="nama" value="{{ $editsiswa->nama }}">
                  </div>
                  <div class="col-md-6"> 
                     <label for="inputEmail5" class="form-label">Kelas</label> 
                     <select id="inputState" class="form-select" name="kelas">
                        <option selected>{{ $editsiswa->kelas }}</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                     </select>
                  </div>
                  <div class="col-md-6"> 
                     <label for="inputPassword5" class="form-label">Jurisan</label> 
                     <select id="inputState" class="form-select" name="jurusan">
                        <option selected>{{ $editsiswa->jurusan }}</option>
                        <option value="PPLG">PPLG</option>
                        <option value="TJKT">TJKT</option>
                        <option value="BRF">BRF</option>
                        <option value="ANIMASI">ANIMASI</option>
                        <option value="TE">TE</option>
                     </select>
                  </div>
                  <div class="col-md-6"> <label for="inputCity" class="form-label">NIS</label> <input type="number"name="nis" class="form-control" id="inputCity" value="{{ $editsiswa->nis }}"></div>
                  <div class="col-md-6">
                     <label for="inputState" class="form-label">Jenis Kelamain</label> 
                     <select id="inputState" class="form-select" name="jenis_kelamin">
                        <option selected>{{ $editsiswa->jenis_kelamin }}</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                     </select>
                  </div>
                  <div class="col-12"> <label for="inputAddress5" class="form-label">Alamat</label> <input type="text" name="alamat" class="form-control" id="inputAddres5s" placeholder="1234 Main St" value="{{ $editsiswa->alamat }}"></div>
                  <div class="col-md-4"> <label for="inputZip" class="form-label">No. Telpon</label> <input type="number" name="notelepon" class="form-control" id="inputZip" value="{{ $editsiswa->notelepon }}"></div>
                  <div class="col-md-4"> <label for="inputZip" class="form-label">Email</label> <input type="email" name="email" class="form-control" id="inputZip" value="{{ $editsiswa->email }}"></div>
                  <div class="col-md-4"> <label for="inputZip" class="form-label">Password</label> <input type="password" name="password" class="form-control" id="inputZip" value="{{ $editsiswa->password }}"></div>
                  <div class="col-md-12"> 
                     <label for="inputName5" class="form-label">Wali Kelas</label> 
                     <select id="inputState" class="form-select" name="guru_id" id="guru_id">
                        <option disabled>{{ $editsiswa->guru->nama }}</option>
                        @foreach ($guru_walas as $walas )
                        <option value="{{ $walas->id }}">{{ $walas-> nama }}</option>
                        @endforeach
                     </select>
                  </div>
                  <div class="text-center"> 
                     <button type="submit" class="btn btn-primary">Ubah Data</button> 
                     <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                   </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection






