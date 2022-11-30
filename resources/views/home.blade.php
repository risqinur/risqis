@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h4>Biodata Diri</h4>
            <form action="" method="POST">
           @csrf
           <div class="mb-3">
            <label class="form-label">Nama</label>
             <input type="text" class="form-control" name="nama" required>
           </div>
           <div class="mb-3">
            <label class="form-label">Tinggi Badan</label>
             <input type="text" class="form-control" name="tinggi_badan" required>
           </div>
           <div class="mb-3">
            <label class="form-label">Berat Badan</label>
             <input type="text" class="form-control" name="berat_badan" required>
           </div>
           <div class="mb-3">
            <label class="form-label">Bmi</label>
             <input type="text" class="form-control" name="bmi" required>
           </div>
           <div class="mb-3">
            <label class="form-label">Hobi</label>
             <input type="text" class="form-control" name="hobi" required>
           </div>
        
       
           <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection
