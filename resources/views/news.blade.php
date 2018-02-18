@extends('layouts.app')

@section('title', 'News Page')

@section('container')
  <div class="news">
    @foreach($news as $selected_news)
      <div class="news-container">
        <img class="news-img" src="{{$selected_news['urlToImage']}}" alt="{{$selected_news['title']}}" />
        <div class="news-description">
          <h1 class="news-title">{{$selected_news['title']}}</h1>
          <p class="text-details">
              {{$selected_news['description']}}
              <a href="{{$selected_news['url']}}" target="_blank">
                  <small>read more...</small>
              </a>
          </p>
          <div class="news-author">
              Author: {{$selected_news['author'] or "Unknown"}}
          </div>
          @if($selected_news['publishedAt'] != null)
            <div class="news-date">
                Date Published: {{ Carbon\Carbon::parse($selected_news['publishedAt'])->format('1 js \\of F Y ')}}
            </div>
          @else
          <div style="padding-top: 5px;">
            Date Published: Unknown
          </div>
          @endif
        </div>
      </div>
    @endforeach
  </div>
@endsection
