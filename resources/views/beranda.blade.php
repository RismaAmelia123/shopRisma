@extends('navbar')
@section('navbar')
<style>
  body {
    /* background-color:steelblue; */
  }
</style>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
</svg>
<section id="home" class="bg-transparent" style="margin-top: 35px;">
  <div class="container">
    {{-- <img src="img/3D Illustration Collection.jpg" width="100%" height="500px"> --}}
    {{-- <h3 class="fw-bold pt-5">Welcome Back!</h3> --}}
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner pt-3">
        @foreach ($slider as $item)
          <div class="carousel-item active">
              <img src="/storage/{{ $item->foto }}" class="d-block w-100" width="80%" height="500px"></p>
          </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    {{-- </div> --}}
  </div>
</section>
{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
</svg> --}}
<section>
  <div class="container pt-3">
    <h3 class="fw-bold">Featured Product</h3>
    <div class="row justify-content-center">
      @foreach ($product as $item)
        <div class="col col-md-4 mb-5 text-center">
          <div class="card mt-5 ms-4" style="width: 18rem;">
            <img src="/storage/{{ $item->foto }}" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $item->nama_product }}</h5>
              <p class="card-text">Rp. {{ number_format($item->harga) }}</p>
              <a href="product/detail/{{ $item->id_product }}" class="btn mt-auto text-white" style="background-color:#47597E;">Lihat Detail</a>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#47597E" fill-opacity="1" d="M0,192L26.7,181.3C53.3,171,107,149,160,138.7C213.3,128,267,128,320,160C373.3,192,427,256,480,272C533.3,288,587,256,640,229.3C693.3,203,747,181,800,144C853.3,107,907,53,960,42.7C1013.3,32,1067,64,1120,106.7C1173.3,149,1227,203,1280,213.3C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
</svg>
<footer class="py-3 my-3 border-top">
  <p class="text-center">&copy; 2023 <a href="" target="_blank" class="fw-bold text-decoration-none">MarketPlace</a></p>
</footer>
@endsection