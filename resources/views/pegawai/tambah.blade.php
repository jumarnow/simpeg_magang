@section('title')
Tambah Pegawai
@endsection
@section('pegawai')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Pegawai</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="#">Tambah Pegawai</a></li>
        </ul>
      </div>
      
      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->            
            <div class="tile-body">
              <!-- <form class="form-horizontal" action="{{route('pegawai.store')}}" method="post"> -->
              <form class="form-horizontal" action="{{url('/pegawai')}}" method="post">
                {{ csrf_field()}} 
                <div class="form-group row">
                  <label class="control-label col-md-3">NIP</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="nip">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Tempat Lahir</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="tmpt_lahir">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Tanggal Lahir</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="date" name="tgl_lahir" >
                    </div>
                </div>                   
                <div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Jenis Kelamin</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="L" name="jenis_kelamin">Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="P" name="jenis_kelamin">Perempuan
                      </label>
                    </div>
                  </div>
                </div>               
                <div class="form-group row">
                  <label class="control-label col-md-3">Agama</label>
                    <div class="col-md-8">
                        <select class="form-control" name="agama_id" id="exampleSelect1">
                            @foreach($agama as $tampil)
                            <option value="{{$tampil->id_agm}}">{{$tampil->nmagama}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                
                <div class="form-group row">
                  <label class="control-label col-md-3">Kewarganegaraan</label>
                    <div class="col-md-8">
                        <select class="form-control" name="negara_id" id="exampleSelect1">
                            @foreach($negara as $tampil)
                            <option value="{{$tampil->id_ngr}}">{{$tampil->nm_negara}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                
                <div class="form-group row">
                  <label class="control-label col-md-3">Golongan Darah</label>
                    <div class="col-md-8">
                        <select class="form-control" name="gol_darah_id" id="exampleSelect1">
                            @foreach($darah as $tampil)
                            <option value="{{$tampil->id_darah}}">{{$tampil->nama_gol_darah}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                <div class="form-group row">
                  <label class="control-label col-md-3">Status</label>
                    <div class="col-md-8">
                        <select class="form-control" name="skeluarga_id" id="exampleSelect1">
                            @foreach($keluarga as $tampil)
                            <option value="{{$tampil->kdstatusk}}">{{$tampil->nmstatusk}}</option> 
                            @endforeach                           
                        </select>
                    </div>                    
                </div>  
                
                <div class="form-group row">
                  <label class="control-label col-md-3">Foto</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="file" name="foto">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nomor HP</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nohp">
                  </div>           
                </div>

            <div class="tile-footer">
              <div class="row">              
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="http://127.0.0.1:8000/pegawai"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>        
                
              </div>
              </form>
            </div>

          </div>
        </div>               
      </div>
    </main>

@endsection