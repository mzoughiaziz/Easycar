@extends('layouts.app')

@section('content')


<section class="ud-blog-grids">
  <div class="container">
    <div class="row" >
      <form  method="GET">
        <div class="input-group">
        <input name="search" type="text" value="{{$search}}" class="form-control rounded" placeholder="Search" aria-label="Search"
          aria-describedby="search-addon" />
          <button type="submit" class="btn btn-outline-primary">search</button>
        </div>
      </form>
    </div>
  <div class="row">
    @forelse ($tips as $tip)
      <div class="col-lg-4 col-md-6 mt-5 mb-2">
        <div class="ud-single-blog">
          <div class="ud-blog-content">
            <span class="ud-blog-date">{{$tip->type}}</span>
            <span class="ud-blog-date">{{$tip->model}}</span>
            <span class="ud-blog-date">{{$tip->brand}}</span>
            @if($tip->version)
            <span class="ud-blog-date">{{$tip->version}}</span>
            @endif
            <h3 class="ud-blog-title">
              <a href="blog-details.html">
              {{$tip->creator_name}}
              </a>
            </h3>
            <span class="ud-blog-creationdate">{{$tip->created_at}}</span>
            <p class="ud-blog-desc">
            {{$tip->content}}
            </p>
          </div>
        </div>
      </div>
      @empty
        <span> you don't have any tips yet </span>
        @endforelse
    </div>
  </div>
</section>


@endsection