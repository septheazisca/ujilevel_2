@extends('admin.layouts.main')


@section('sidebar')
  @include('admin.layouts.sidebar.formguru')
@endsection

@section('main')
         <div class="pagetitle">
            <h1>Form Guru</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">Forms</li>
                  <li class="breadcrumb-item active">Guru</li>
               </ol>
            </nav>
         </div>
         <section class="section">
            <div class="row">
               <div class="col-lg-6">
                  <div class="card" style="width: 76vw;">
                     <div class="card-body">
                        <div class="title-first" style="display: flex;">
                           <a href="/tableguru"><i class="fa-solid fa-backward" style="margin: 2.5vh 2vh 0 0; font-size:22px; color: #4154f1;"></i></a>
                           <h5 class="card-title">Form Data Siswa</h5>
                        </div>
                        <form class="row g-3" action="/updateformguru/{{ $editguru->id }}">
                           {{  csrf_field() }}
                           <div class="col-md-12"> 
                              <label for="inputName5" class="form-label">Nama Guru</label> 
                              <input disabled type="text" value="{{ $editguru->nama }}" class="form-control" id="inputName5" name="nama">
                           </div>
                           <div class="col-md-6">
                              <label for="inputState" class="form-label">Jenis Kelamain</label> 
                              <select id="inputState" disabled class="form-select" name="jenis_kelamin">
                                 <option selected >{{ $editguru->jenis_kelamin }}</option>
                                 <option value="Laki - Laki">Laki - Laki</option>
                                 <option value="Perempuan">Perempuan</option>
                              </select>
                           </div>
                           <div class="col-md-6"> <label for="inputZip" class="form-label">nip</label> <input disabled type="number" value="{{ $editguru->nip }}" name="nip" class="form-control" id="inputZip"></div>
                           <div class="col-12"> <label for="inputAddress5" class="form-label">Alamat</label> <input disabled type="text" value="{{ $editguru->alamat }}" name="alamat" class="form-control" id="inputAddres5s" placeholder="1234 Main St"></div>
                           <div class="col-md-6"> <label for="inputZip" class="form-label">No. Telpon</label> <input disabled type="number" value="{{ $editguru->notelepon }}" name="notelepon" class="form-control" id="inputZip"></div>
                           <div class="col-md-6"> <label for="inputZip" class="form-label">Email</label> <input disabled type="email" value="{{ $editguru->email }}" name="email" class="form-control" id="inputZip"></div>
                           <div class="col-md-12"> 
                              <label for="inputName5" class="form-label">Wali Kelas</label> 
                              <input disabled type="text" value="{{ $editguru->wali_kelas }}" name="wali_kelas" class="form-control" id="inputName5">
                           </div>
                           <div class="text-center"> 
                              <!-- <button type="submit" class="btn btn-primary">Submit</button>  -->
                           </div>
                           <!-- <a href="/backtablesiswa"><button class="btn btn-secondary">Reset</button></a> -->
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@endsection

