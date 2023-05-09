@extends('layouts.app')
@section('title','Home Page')
@section('content')
<x-home-profile-list :profiles="$profiles"></x-home-profile-list>
@endsection
