@extends('layouts.app')
@section('content')
<div>
    <div class="container-fluid ">
        <div class="">
        <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                @csrf
                
               
                <!-- /.row-->
                <div class="form-group">
                    <label for="img">Upload Product Image</label>
                    <div class="row">




                        <div class="col-sm-6 ">
                            <img id="preview-image-before-upload" src="{{asset('/img/add.png')}}
" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class=" mb-2">
                            <input class=" form-control @error('img') is-invalid @enderror " type="file" name="img1" value="{{ old('img') }}" id="img">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                    </div>
                </div>
                <div class=" mt-5">
                    <button class="btn-dark-green ">Add Product</button>
                </div>

                



<div class="container-fluid profile" style="height: 300px;">
<div class="row mt-5">
<div class="col-4">
    <h2 class="text-start fw-bold pt-5 pb-0 mb-0">Photos</h2>
        
        <h3 class="text-start ">Upload photos in the order you like them to appear</h3>
    </div>
  <div class="col">
    
    <div class ="row p-1">

    </div>
  <div class ="d-flex row">
    
    <a role="button" class="btn btn-danger btn-lg" href="/profile/add">EDIT</a>
    </div>
  </div>
    
</div>
</div>




@endsection
@section('javascript')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#img').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });


    });
</script>
@endsection
