@extends('layouts.app')

@section('content')
<!-- ====== Banner End ====== -->

<!-- ====== Blog Start ====== -->
<section class="ud-blog-grids">


  <div class="container">
    <div class="row">
      <div class="col">
         <h3 class="ud-blog-title ">
           My tips
         </h3> 
         <div class="btn-new">
          <a  href="{{ route('tip.add') }}"><button type="button" class="btn btn-primary btn-sm">Add tip </button></a> 
         </div>
     </div>
      @if (session('status'))
      <span class="success-card"> {{ session('status') }}</span>
      @endif
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
                {{auth()->user()->name}}
              </a>
            </h3>
            <span class="ud-blog-creationdate">{{$tip->created_at}}</span>
            <p class="ud-blog-desc">
            {{$tip->content}}
            </p>
          </div>
        </div>
        <div class="col-lg-4">
        <a href="">
            <button type="button" class="btn btn-default" >
              <img src="https://img.icons8.com/fluency/48/000000/delete-forever.png" height="25" width="25" /> 
            </button>
        </a>
        <a href="">
          <button type="button" class="btn btn-default">
            <img src="https://img.icons8.com/pastel-glyph/64/000000/edit--v2.png" height="25" width="25" />
          </button> 
        </a> 
      </div>
      </div>
      @empty
        <span> you don't have any tips yet </span>
        @endforelse
    </div>
  </div>
</section>

@endsection