@extends('layouts.app')


@section('content')
<div>
    <div class="container-fluid p-5">
        <div class="col-4 mx-auto p-4  border border-success border-2">
            <h4 class="text-uppercase text-center">Edit Profile</h4>
            <form method="POST" action="/profile/update/{{$profile->id}}" enctype="multipart/form-data">
            @csrf
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="product_name">Nickname</label>
                            <input class="form-control @error('nickname') is-invalid @enderror" required id="nickname" name="nickname" type="text" placeholder="Enter your nickname" value="{{ $profile->nickname }}">
                            @error('nickname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" checked>
                                <label class="form-check-label" for="gender">
                                    Male
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                                <label class="form-check-label" for="gender">
                                   Female
                                </label>
                                </div>
                                <div class="form-check ">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Prefer Not to Say" >
                                <label class="form-check-label" for="gender">
                                    Prefer Not to Say
                                </label>
                                </div>
                        </div>
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="col-sm-12">
                       
                            <label for="bio">Bio</label>
                                     <textarea class="form-control" id="bio" name="bio" rows="1" >{{$profile->bio}}</textarea>
                        
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="school">School</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="school" name="school" >
                                <option selected>{{$profile->school}}</option>
                                <option value="Ateneo de Naga University">Ateneo de Naga University</option>
                                <option value="University of Nueva Caceres">University of Nueva Caceres</option>
                                <option value="STI College - Naga">STI College - Naga</option>
                                <option value="Naga View Adventist College">Naga View Adventist College</option>
                                <option value="Naga College Foundation">Naga College Foundation</option>
                                <option value="Universidad de Sta. Isabel">Universidad de Sta. Isabel</option>
                                <option value="Bicol State College of Applied Sciences and Technology">Bicol State College of Applied Sciences and Technology</option>
                                <option value="Mariners' Polytechnic Colleges Foundation">Mariners' Polytechnic Colleges Foundation</option>
                                <option value=">Brentwood College of Asia International School">Brentwood College of Asia International School</option>
                                <option value="Philippine Computer Foundation College">Philippine Computer Foundation College</option>
                                <option value="Our Lady of the Most Holy Trinity College Seminary">Our Lady of the Most Holy Trinity College Seminary</option>
                                <option value="AMA Computer University - Naga Campus">AMA Computer University - Naga Campus</option>
                                <option value="Don Bosco TVET Center - Carolina">Don Bosco TVET Center - Carolina</option>
                            </select>
                            </div>
                        
                    </div>
                </div>
                </div>

                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="course">Course</label>
                            <input class="form-control @error('course') is-invalid @enderror" required id="course" name="course" type="text" placeholder="Enter your course" value="{{ $profile->course }}">
                            @error('course')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="age">Age</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="age" name="age">
                                <option selected>{{$profile->age}}</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30+">30+</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row mb-2">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="height">Height</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="height" name="height">
                                <option selected>{{$profile->height}}</option>
                                <option value="4ft below">4ft below</option>
                                <option value="5ft">5ft</option>
                                <option value="5'1">5'1</option>
                                <option value="5'2">5'2</option>
                                <option value="5'3">5'3</option>
                                <option value="5'4">5'4</option>
                                <option value="5'5">5'5</option>
                                <option value="5'6">5'6</option>
                                <option value="5'7">5'7</option>
                                <option value="5'8">5'8</option>
                                <option value="5'9">5'9</option>
                                <option value="5'10">5'10</option>
                                <option value="5'11">5'11</option>
                                <option value="6ft">6ft</option>
                                <option value="6'1">6'1</option>
                                <option value="6'2">6'2</option>
                                <option value="6'3">6'3</option>
                                <option value="6'4 above">6'4 above</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row mb-2">
                    <div class="col">
                    <div class="form-group">
                            <label for="hobbies1">Hobbies</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="hobbies1" name="hobbies1">
                                <option selected>{{$profile->hobbies1}}</option>
                                <option value="Writing">Writing</option>
                                <option value="Blogging">Blogging</option>
                                <option value="Photography">Photography</option>
                                <option value="Travel">Travel</option>
                                <option value="Sports">Sports</option>
                                <option value="Art">Art</option>
                                <option value="Dance">Dance</option>
                                <option value="Making Music">Making Music</option>
                                <option value="Cooking">Cooking</option>
                                <option value="Cycling">Cycling</option>
                                <option value="Reading">Reading</option>
                                <option value="Martial Arts">Martial Arts</option>
                                <option value="Gaming">Gaming</option>
                                <option value="Star Gazing">Star Gazing</option>
                                <option value="Foreign Language">Foreign Language</option>
                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                    <div class="form-group">
                            <label for="hobbies2">Hobbies</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="hobbies2" name="hobbies2">
                                <option selected>{{$profile->hobbies2}}</option>
                                <option value="Writing">Writing</option>
                                <option value="Blogging">Blogging</option>
                                <option value="Photography">Photography</option>
                                <option value="Travel">Travel</option>
                                <option value="Sports">Sports</option>
                                <option value="Art">Art</option>
                                <option value="Dance">Dance</option>
                                <option value="Making Music">Making Music</option>
                                <option value="Cooking">Cooking</option>
                                <option value="Cycling">Cycling</option>
                                <option value="Reading">Reading</option>
                                <option value="Martial Arts">Martial Arts</option>
                                <option value="Gaming">Gaming</option>
                                <option value="Star Gazing">Star Gazing</option>
                                <option value="Foreign Language">Foreign Language</option>
                            </select>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                    <div class="form-group">
                            <label for="hobbies3">Hobbies</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="hobbies3" name="hobbies3">
                                <option selected>{{$profile->hobbies3}}</option>
                                <option value="Writing">Writing</option>
                                <option value="Blogging">Blogging</option>
                                <option value="Photography">Photography</option>
                                <option value="Travel">Travel</option>
                                <option value="Sports">Sports</option>
                                <option value="Art">Art</option>
                                <option value="Dance">Dance</option>
                                <option value="Making Music">Making Music</option>
                                <option value="Cooking">Cooking</option>
                                <option value="Cycling">Cycling</option>
                                <option value="Reading">Reading</option>
                                <option value="Martial Arts">Martial Arts</option>
                                <option value="Gaming">Gaming</option>
                                <option value="Star Gazing">Star Gazing</option>
                                <option value="Foreign Language">Foreign Language</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                


                <div class="row mb-2">
                    <div class="col">
                    <div class="form-group">
                            <label for="interest1">Interest</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="interest1" name="interest1">
                                <option selected>{{$profile->interest1}}</option>
                                <option value="Animals">Animals</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Botany">Botany</option>
                                <option value="Baking">Baking</option>
                                <option value="Cosplay">Cosplay</option>
                                <option value="Documentaries">Documentaries</option>
                                <option value="History">History</option>
                                <option value="Investing">Investing</option>
                                <option value="Origami">Origami</option>
                                <option value="Pool">Pool</option>
                                <option value="Robotics">Robotics</option>
                                <option value="Science">Science</option>
                                <option value="Swimming">Swimming</option>
                                <option value="Theatre">Theatre</option>
                                <option value="Wrestling">Wrestling</option>
                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                    <div class="form-group">
                            <label for="interest2">Interest</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="interest2" name="interest2">
                                <option selected>{{$profile->interest1}}</option>
                                <option value="Animals">Animals</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Botany">Botany</option>
                                <option value="Baking">Baking</option>
                                <option value="Cosplay">Cosplay</option>
                                <option value="Documentaries">Documentaries</option>
                                <option value="History">History</option>
                                <option value="Investing">Investing</option>
                                <option value="Origami">Origami</option>
                                <option value="Pool">Pool</option>
                                <option value="Robotics">Robotics</option>
                                <option value="Science">Science</option>
                                <option value="Swimming">Swimming</option>
                                <option value="Theatre">Theatre</option>
                                <option value="Wrestling">Wrestling</option>
                            </select>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                    <div class="form-group">
                            <label for="interest3">Interest</label>
                                <div class="input-group">
                            
                                <select class="form-select" id="interest3" name="interest3">
                                <option selected>{{$profile->interest1}}</option>
                                <option value="Animals">Animals</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Botany">Botany</option>
                                <option value="Baking">Baking</option>
                                <option value="Cosplay">Cosplay</option>
                                <option value="Documentaries">Documentaries</option>
                                <option value="History">History</option>
                                <option value="Investing">Investing</option>
                                <option value="Origami">Origami</option>
                                <option value="Pool">Pool</option>
                                <option value="Robotics">Robotics</option>
                                <option value="Science">Science</option>
                                <option value="Swimming">Swimming</option>
                                <option value="Theatre">Theatre</option>
                                <option value="Wrestling">Wrestling</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- /.row-->
                <div class="form-group">
                    <label for="img">Upload Profile Image</label>
                    <div class="row">




                        <div class="col-sm-6 ">
                            <img id="preview-image-before-upload" src="{{asset('/img/'.$profile->img1)}}
" alt="preview image" style="height: 200px; width: 200px; object-fit: cover;" class=" mb-2">
                            <input class=" form-control @error('img') is-invalid @enderror " type="file" name="img1" value=""  id="img" accept="image/*">
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" mt-5">
                    <button class="btn-dark-green ">Edit Information</button>
                </div>
            </form>
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

