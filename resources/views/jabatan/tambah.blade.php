@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Data Jabatan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Riwayat Kepegawaian</li>
          <li class="breadcrumb-item"><a href="#">Jabatan</a></li>
        </ul>
      </div>
      
      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->            
            <div class="tile-body">
              <form class="form-horizontal" action="{{route('pegawai.store')}}" method="post">
                <div class="form-group row">
                  <label class="control-label col-md-3">Pegawai</label>
                    <div class="col-md-8">
                        <select class="form-control" id="exampleSelect1">
                            <option>Pilih Pegawai</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    
                </div>                               
                <div class="form-group row">
                  <label class="control-label col-md-3">Gaji Pokok</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="number" name"gapok" >
                    </div>
                </div>                
                <div class="form-group row">
                  <label class="control-label col-md-3">Tunjangan Jabatan</label>
                  <div class="col-md-8 ">
                    <input class="form-control col-md-8" type="number" name"tunj_jab">
                  </div>
                </div>

              </div>

            <div class="tile-footer">
              <div class="row">              
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>        
                
              </div>
              </form>
            </div>

          </div>
        </div>               
      </div>
    </main>

@endsection