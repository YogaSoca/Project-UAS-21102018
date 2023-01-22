@extends('layouts.default')

@section('content')
         <section>
            <div class="container mt-5">
            <h3>Tambah Project</h3>
            <div class ="row">
                <div class ="col-lg-9">
                <form action="{{url('/store')}}" method="POST" enctype="multypart/form-data">
                    @csrf()
                
                     <div class="form-floating mb-3">Nama Komponen<div>
                 <input type="text" name="komponens" class="form-control" id="floatingInput" >
                <label for="floatingInput"></label>

                    <div class="form-floating mb-3">Fungsi<div>
                 <input type="text" name="fungsi" class="form-control" id="floatingInput" >
                <label for="floatingInput"></label>
                    </div>

                    <div class="form-floating mb-3">Jenis<div>
                 <input type="text" name="jenis" class="form-control" id="floatingInput" >
                <label for="floatingInput"></label>
                    </div>
                <div class="form-label">File Gambar</div>
                <input type="file" name="fGAMBAR" class="form-control">
            </div>
                    </div>
                    <div class="form-label mt-2">
                       <button type="submit" class="btn btn-info">Tambah Komponen</button>
                    </div>
                    <div class="form-label mt-5">
                       <a href="{{ url('/home')}}">
                       <button type="button" class="btn btn-warning">Kembali ke halaman Sebelumnya</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
