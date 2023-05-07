
@foreach($profiles as $profile)

<div class="col-4 m-auto ">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/img/'.$profile->img1)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 450px;">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/'.$profile->img2)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 450px;">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/'.$profile->img3)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 450px;">
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="row bg-secondary col-10 mx-auto rounded">
  <div class="col-3">
    <div class="container-fluid hero-section d-flex align-items-center">
    <div class="text-center m-auto p-5 ">
        <h1 class="mb-4 fw-bold">Interests:</h1>
        <ul class="ilist">
          <li>{{$profile->interest1}}</li>
          <li>{{$profile->interest2}}</li>
          <li>{{$profile->interest3}}</li>
        </ul>
    </div>
    </div>
  </div>
  <div class="col-1 m-auto">
        <a href="#" class="btn btn-danger btn-lg rounded-circle"><i class="fa fa-heart"></i></a>
  </div>
  <div class="col-3">
    <div class="d-flex align-items-center">
    <div class="text-center m-auto p-5 ">
        <h1 class="mb-4 fw-bold text-uppercase ">{{$profile->nickname}}, 19</h1>
        <p class="mb-4 fs-4">{{$profile->bio}}</p>
        <p class="mb-4 fs-4">{{$profile->course}} </p>
        <p class="mb-1 fs-4">{{$profile->school}} </p>
    </div>
    </div>
  </div>
  <div class="col-1 m-auto">
  <a href="#" class="btn btn-danger btn-lg rounded-circle"><i class="fa fa-close"></i></a>
  </div>
  <div class="col-3">
    <div class="container-fluid hero-section d-flex align-items-center">
    <div class="text-center m-auto p-5 ">
    <h1 class="mb-4 fw-bold">Hobbies:</h1>
        <ul class="ilist">
          <li>{{$profile->hobbies1}}</li>
          <li>{{$profile->hobbies2}}</li>
          <li>{{$profile->hobbies3}}</li>
        </ul>
    </div>
    </div>
  </div>
</div>

@endforeach
