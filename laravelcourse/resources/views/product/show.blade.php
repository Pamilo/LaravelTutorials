@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        @if ($viewData["product"]->getPrice() <= 100)
          <h5 class="card-title">
            {{ $viewData["product"]->getName() }}
          </h5>
        @else
          <h5 class="card-title" style="color:#ff0000">
            {{ $viewData["product"]->getName() }}
          </h5>
        @endif
        <p class="card-text">
          {{ $viewData["product"]->getPrice() }} USD
        </p>
        <a href="{{ route('review.delete', $viewData['id'])}}" class="btn bg-primary text-white">DELETE</a>
        @foreach($viewData["product"]->comments as $comment)
          - {{ $comment->getDescription() }}<br />
        @endforeach

        <!--<p class="card-text">{{ $viewData["product"]["description"] }}</p>-->
      </div>
    </div>
  </div>
</div>
@endsection
