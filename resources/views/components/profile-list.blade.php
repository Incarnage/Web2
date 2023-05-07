
@foreach($profiles as $profiles)
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profiles->img1)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
                
            </div>
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profiles->img2)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
                
            </div>
            <div class=" col p-0">
                <img src="{{ asset('/img/'.$profiles->img3)}}" class="rounded m-auto p-auto d-block" alt="..." style="height: 250px;">
                
            </div>
            @endforeach
