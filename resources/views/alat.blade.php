@extends('layouts.default')

@section('content')
    <section>
    <div class="conttainer mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Project UAS</h1>
                <a href="{{url('create')}}" class="btn btn-outline-success">Tambah</a>
            </div>
          <div class ="col-lg-55">
          <table class="table table-bordered border-primary">
            <tr>
                    <th>komponen</th>
                    <th>Gambar</th>
                   

                    <th>Action</th>
            </tr>
            @foreach ($data as $tblkomponent)
            <tr>
                    <td>{{$tblkomponent->komponens}}</td>
                
                    <td><img src="img/{{$tblkomponent->fGAMBAR}}" alt="" width="85px" ></td>
                   
                    <td>
                        <a href="{{url('/show/'.$tblkomponent->id)}}" class="btn btn-success">Ubah</a>
                        <a href="{{url('/destroy/'.$tblkomponent->id)}}" class="btn btn-danger">Hapus</a>
                        
                    </td>
                  
            </tr>

            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection