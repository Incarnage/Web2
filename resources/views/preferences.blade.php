@extends('layouts.app')
@section('title','Preferences')
@section('content')
<div class="container-fluid hero-section profile">
    <div class="row">
        <h2 class="text-center fw-bold  p-2  m-3">Ideal Match</h2>
        <h3 class="text-center">Make your own perfect match</h3>
    </div>
</div>
<hr style="height:5px; border-width:0; color:black; background-color:black;">

<div class="container-fluid profile">
<div class="row">
<div class="col p-3 ">

<div class="form-check form-check-inline">
  <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input fs-5 " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input fs-5" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
  <label class="form-check-label fs-5 fw-bold" for="inlineRadio3">Binary</label>
</div>

<div class="pt-2 pb-0 mb-0 pt-2 mt-2">
  <p class="fw-bold fs-5">School</p>
</div>

<div class="input-group mb-3">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select your school</option>
    <option value="1">Ateneo de Naga University</option>
    <option value="2">University of Nueva Caceres</option>
    <option value="3">STI College - Naga</option>
    <option value="4">Naga View Adventist College</option>
    <option value="5">Naga College Foundation</option>
    <option value="6">Universidad de Sta. Isabel</option>
    <option value="7">Bicol State College of Applied Sciences and Technology</option>
    <option value="8">Mariners' Polytechnic Colleges Foundation</option>
    <option value="9">Brentwood College of Asia International School</option>
    <option value="10">Philippine Computer Foundation College</option>
    <option value="11">Our Lady of the Most Holy Trinity College Seminary</option>
    <option value="12">AMA Computer University - Naga Campus</option>
    <option value="13">Don Bosco TVET Center - Carolina</option>
  </select>
</div>
<div class="row pt-5 mt-4">
  <div class="col text-center">
    <div class="d-grid gap-2">
    <a role="button" class="btn btn-danger btn-lg" href="/home">SAVE</a>
    </div>
  </div>

  <div class="col text-center">
    <div class="d-grid gap-2">
    <a role="button" class="btn btn-danger btn-lg" href="/home">CANCEL</a>
    </div>
  </div>
</div>
</div>
<div class="col">

<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Age Range</p>
</div>
<div class="row">
  <div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select range</option>
    <option value="1">18</option>
    <option value="2">19</option>
    <option value="3">20</option>
    <option value="4">21</option>
    <option value="5">22</option>
    <option value="6">23</option>
    <option value="7">24</option>
    <option value="8">25</option>
    <option value="9">26</option>
    <option value="10">27</option>
    <option value="11">28</option>
    <option value="12">29</option>
    <option value="13">30+</option>
  </select>
</div>
</div>

<div class="col-1 text-center fw-bold">-</div>

<div class="col">
<div class="input-group mb-2">
  
  <select class="form-select" id="inputGroupSelect01">
    <option selected>Select range</option>
    <option value="1">18</option>
    <option value="2">19</option>
    <option value="3">20</option>
    <option value="4">21</option>
    <option value="5">22</option>
    <option value="6">23</option>
    <option value="7">24</option>
    <option value="8">25</option>
    <option value="9">26</option>
    <option value="10">27</option>
    <option value="11">28</option>
    <option value="12">29</option>
    <option value="13">30+</option>
  </select>
</div>
</div>
</div>

<div class="col">

<div class="pb-0 mb-0">
  <p class="fw-bold fs-5">Height Range</p>
</div>
<div class="row">
  <div class="col">
<div class="input-group mb-2">
  
<select class="form-select" id="inputGroupSelect01">
    <option selected>Select your height</option>
    <option value="1">4ft below</option>
    <option value="2">5ft</option>
    <option value="3">5'1</option>
    <option value="4">5'2</option>
    <option value="5">5'3</option>
    <option value="6">5'4</option>
    <option value="7">5'5</option>
    <option value="8">5'6</option>
    <option value="9">5'7</option>
    <option value="10">5'8</option>
    <option value="11">5'9</option>
    <option value="12">5'10</option>
    <option value="13">5'11</option>
    <option value="14">6ft</option>
    <option value="15">6'1</option>
    <option value="16">6'2</option>
    <option value="17">6'3</option>
    <option value="18">6'4 above</option>
  </select>
</div>
</div>

<div class="col-1 text-center fw-bold">-</div>

<div class="col">
<div class="input-group mb-2">
  
<select class="form-select" id="inputGroupSelect01">
    <option selected>Select your height</option>
    <option value="1">4ft below</option>
    <option value="2">5ft</option>
    <option value="3">5'1</option>
    <option value="4">5'2</option>
    <option value="5">5'3</option>
    <option value="6">5'4</option>
    <option value="7">5'5</option>
    <option value="8">5'6</option>
    <option value="9">5'7</option>
    <option value="10">5'8</option>
    <option value="11">5'9</option>
    <option value="12">5'10</option>
    <option value="13">5'11</option>
    <option value="14">6ft</option>
    <option value="15">6'1</option>
    <option value="16">6'2</option>
    <option value="17">6'3</option>
    <option value="18">6'4 above</option>
  </select>
</div>
</div>
</div>



</div>
@endsection