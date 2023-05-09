@extends('layouts.app')
@section('title','Liked You')
@section('content')
<x-liked-you-profile :profiles="$profiles"></x-liked-you-profile>
@endsection
