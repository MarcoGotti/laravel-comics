@extends('layouts.app')

@section ('content')

<div id="action_page">
    <div class="top-line"></div>
    <img class="action_banner" src="{{$comic_0['thumb']}}" alt="">
    <section class="infos">
        <div class="container_action">
            <div class="row">
                <div class="col-8">
                    <h4>{{$comic_0['title']}} </h4>
                    <div class="stripe">US Price&nbsp;<strong>{{$comic_0['price']}}</strong>  </div>
                    <div class="description">{{$comic_0['description']}}</div>
                     
                                    
                </div>
                
                <div class="col-4">
                    <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
        
    </section>
</div>

  

@endsection