@extends('layouts.app')

@section ('content')

<section id="comics">
    <div class="container">
      <h3>Current Series</h3>
      <div class="row">

        @foreach($comics as $comic)
          <div class="col-2">
          
              <a href="{{route('action')}}" class="card">
                  <div class="thumb">
                      <img src="{{ $comic['thumb'] }}" alt="" />
                  </div>
                  <div class="series">{{$comic['series']}}</div>
              </a>

          </div>
        @endforeach
      </div>
  
      <div class="loadmore">
        <button>Load More</button>
      </div>
    </div>
  </section>

  @include('partials/main-bottom')

@endsection