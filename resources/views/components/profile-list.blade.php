
@foreach($profiles as $profiles)
<div class="container-fluid profile" style="height: 300px;">
<div class="row mt-5">
<div class="col-4">
    <h2 class="text-start fw-bold pt-5 pb-0 mb-0">PHOTOS</h2>
        
        <h5 class="text-start "><i>Upload photos in the order you like them to appear</i></h5>
    </div>
  <div class="col">
    
    <div class ="row p-1">
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profiles->img1)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
                
            </div>
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profiles->img2)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
                
            </div>
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profiles->img3)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
                
            </div>
            </div>
  </div>
    
</div>
</div>

            
            @endforeach
