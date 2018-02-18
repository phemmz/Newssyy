@extends('layouts.app')

@section('title', 'Home')

@section('container')
    <div class="news">
        @foreach ($news_sources as $news_source)
            <div class="sources-container">
                <h4 class="source-title">{{$news_source['name']}}</h4>
                <h6 class="source-category">#{{$news_source['category']}}</h6>
                <span class="source-description">{{$news_source['description']}}</span>
                <a href="/news/{{$news_source['id']}}" type="button" title="Article Button" class="article-btn">Get Articles</a>
            </div>
        @endforeach
    </div>
@endsection
