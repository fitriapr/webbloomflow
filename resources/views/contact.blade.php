@extends('layouts.main')

@section('container')
    <h1> Contact </h1>
    <h3>{{ $name }}</h3>
    <h3>TIF RM 18 B</h3>
    <h3>{{ $NPM }}</h3>
    <h3>PEMROGRAMAN WEB II</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" >

@endsection
