@dd('$articles');
@extends('layouts.main')

@section('container')
<article>
    <h2>{{  $article_["title"]  }}</h2>
    <h6>{{  $article_["author"]  }}</h6>
    <p>{{  $article_["body"]  }}</p>
</article>
<a href="/article">Back To Article</a>
@endsection