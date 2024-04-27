@extends('layouts.app')

@section ('content')

{{-- <h1>Home Page</h1>
<img src="{{$comics[0]['thumb']}}" alt=""> --}}

{{-- <img src="{{ $product['src'] }}" alt="">
                    {{$product['titolo']}} --}}

<section class="comics">
    <div class="container">
      <h3>Current Series</h3>
      <div class="row">

        @foreach($comics as $comic)
        <div class="col-2">
         
            <div class="card">
                <div class="thumb">
                    <img src="{{ $comic['thumb'] }}" alt="" />
                </div>
                <div class="series">{{$comic['series']}}</div>
            </div>

        </div>
        @endforeach

      </div>
     

      <div class="loadmore">
        <button>Load More</button>
      </div>
    </div>


  </section>

@endsection