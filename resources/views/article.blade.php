@extends('layouts.main')

@section('container')
        
   @foreach ($articles as $article_)
   <article class="mb-5">
    <h2> 
        <a href="/article/">{{  $article_["title"]  }}</a>
    </h2>
    <h6>By: {{  $article_["author"]  }}</h6>
    <p>{{  $article_["body"]  }}</p>
   </article>
   @endforeach

@endsection

