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
             <h5 class="card-title">Form Detail Data Siswa</h5>
           </div>
               
           
             <form class="row g-3" action="/detailsiswa">

              {{  csrf_field() }}
              
                <div class="col-md-12"> 
                   <label for="inputName5" class="form-label">Nama Siswa</label>
                  
                   <input type="text" class="form-control" id="inputName5" name="nama" disabled value="">
                   
                </div>
             
                <div class="col-md-6"> 
                   <label for="inputEmail5" class="form-label">Kelas</label> 
                   <select id="inputState" disabled class="form-select" name="kelas">
                      <option selected></option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                   </select>
                </div>
                <div class="col-md-6"> 
                   <label for="inputPassword5" class="form-label">Jurisan</label> 
                   <select id="inputState" disabled class="form-select" name="jurusan">
                      <option selected></option>
                      <option value="PPLG">PPLG</option>
                      <option value="TJKT">TJKT</option>
                      <option value="BRF">BRF</option>
                      <option value="ANIMASI">ANIMASI</option>
                      <option value="TE">TE</option>
                   </select>
                </div>
          
                <div class="col-md-6"> <label for="inputCity" class="form-label">NIS</label> <input type="number" disabled name="nis" class="form-control" id="inputCity" value=""></div>
                <div class="col-md-6"> <label for="inputCity" class="form-label">Wali Kelas</label> <input type="number" disabled name="nis" class="form-control" id="inputCity" value=""></div>
                <div class="col-md-6"> <label for="inputCity" class="form-label">Pelanggaran</label> <input type="number" disabled name="nis" class="form-control" id="inputCity" value=""></div>
                <div class="col-md-6"> <label for="inputCity" class="form-label">Point</label> <input type="number" disabled name="nis" class="form-control" id="inputCity" value=""></div>
                <div class="col-md-12"> 
                  <label for="inputName5" class="form-label">Keterangan</label> 
                  <input type="text" class="form-control" id="inputName5" name="nama" disabled value="">
               </div>
              
                
                
               
                <div class="text-center"> 
                   <!-- <button type="submit" class="btn btn-primary">Ubah Data</button>  -->
                   <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                 </div>
             </form>
          
          </div>
       </div>
    </div>
 </div>
</section>
@endsection






