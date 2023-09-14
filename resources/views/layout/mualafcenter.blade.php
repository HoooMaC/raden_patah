@extends('index')

@section('konten')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Mualaf Center</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li> --}}
                        {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                        {{-- <li class="breadcrumb-item text-white active" aria-current="page">Mualaf Center</li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<style>
    .form-container {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 10px;
      margin: 0 auto; /* Menengahkan kotak form */
      max-width: 800px; /* Lebar maksimum kotak form */
      box-sizing: border-box; /* Menghitung padding dan border dalam perhitungan lebar */
    }
  
    .form-container label {
      font-weight: bold;
    }
  
    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
  
    .form-container button[type="submit"] {
      background-color: hsl(187, 56%, 48%);
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      display: block;
      margin: 0 auto;
    }
  
    .form-container button[type="submit"]:hover {
      background-color: #347b88;
    }
  </style>



  <div class="form-container">

    @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

    <form action="/mualafcenter" method="POST">
      @csrf
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="nama">Alamat:</label>
      <input type="text" id="alamat" name="alamat" required>

      <label for="nama">No.HP:</label>
      <input type="text" id="telpon" name="telpon" required>
  
      <label for="nama">Email:</label>
      <input type="text" id="email" name="email" required>

      <p class="fst-italic">
        Jika sudah mendaftar, tunggu pihak Takmir MRP menghubungi anda!
       </p>
        
      <button type="submit">Kirim</button>
    </form>
  </div>

<!-- Header End -->
@endsection