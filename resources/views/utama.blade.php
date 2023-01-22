<!DOCTYPE html>
<html lang="en">
<head>

<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <a class="nav-link" href="{{url('/')}}">Home Page</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

        
        <a class="nav-link active" aria-current="page" href="{{url('home')}}">Tabel</a>
        </li>
        <a class="nav-link" aria-current="page" href="{{url('code')}}">Code</a>
    
        <li class="nav-item">

        
          
          </li>
      
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="text-bg-dark p-3">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
  
</head>
  
<body>
                <mb-9><center><h>Project UAS WEB Programming</h></center></mb-9>
                <center><h2>Lampu Otomatis Menggunakan Remote Control</h2><center>
    <div class="container text-center"></div>
    <tr>
            <img src="img/Gambar1.jpg" width="290px" >
            <img src="img/Gambar2.jpg" width="290px" >
            </tr>
            <center><h4>Lampu otomatis menggunakan remote control merupakan salah satu 
              cara yang praktis dalam menghidupkan dan mematikan lampu, 
              fungsinya dapat membantu manusia dalam aktivitas sehari-hari 
              dengan adanya alat ini akan bekerja secara otomatis dan sederhana
              dengan menekan tombol yang ada pada remote maka alat ini dapat bekerja dengan 
              otomatis yaitu menghidupkan atau mematikan lampu dan tanpa harus mendekati saklar 
              pada tempat tertentu.</h4><center>
    <div class ="row">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/88y8ggw1yrpr2u8d18th02iceyad2cc267qn0cyqunvmiu5w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</body>
</div>
</html>