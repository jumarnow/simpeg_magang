@extends('app')
@section('title')
Data Pegawai
@endsection
@section('pegawai')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data Pegawai</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="#">Data Pegawai</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Foto</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>JK</th>
                      <th>No. Telp</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pegawai as $tampil)
                    <tr>                      
                      <td><img src="{{asset('imgpegawai/'.$tampil->foto)}}" alt="" width="50px" height="50px"></td>
                      <td>{{$tampil->nip}}</td>
                      <td><a href="{{route('pegawai.show', $tampil->id)}}">{{$tampil->nama}}</a></td>
                      <td>{{$tampil->tmpt_lahir}}, {{$tampil->tgl_lahir}}</td>
                      <td>{{$tampil->jenis_kelamin}}</td>
                      <td>{{$tampil->nohp}}</td>
                      <td>
                        <a href="{{url('/pegawai/'.$tampil->id.'/edit')}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>

                      </td>
                      <td>
                        <form action="{{route('pegawai.destroy', $tampil->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"></span></button>
                        </form>
                      </td>
                      
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>           
          

            </div>            
          </div>
        </div>
        <div class="row">      
          
        </div>
      </div>
    </main>
@endsection