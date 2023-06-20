@extends('dashboard')
@section('dashboard')

<style>
     body{
          /* background-color: #47597E ; */
     }
</style>
<div class="vh-100 row justify-content-center align-items-center">
     <div class="card col-lg-7 shadow mb-5 mt-5 align-center">     
          <div class="card-body">
               <div class="" style="color: #47597E">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container py-3">
                             <h2 class="fw-bold">Form Input Slider</h2>
                           <div class="">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" placeholder="Masukan Foto" value="{{ $slider->foto }}">
                           </div>
                           <div class="mt-3">
                            <input type="submit" value="{{ $tombol }}" class="form-control btn text-white" style="background-color:#47597E">
                           </div> 
                        </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection