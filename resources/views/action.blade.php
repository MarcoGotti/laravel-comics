@extends('layouts.app')

@section ('content')

<div id="action_page">
    <div class="top-line"></div>
    <img class="action_banner" width="150px" src="{{$action_comic[0]['thumb']}}" alt="">
    <section class="infos">
        <div class="container_action">
            <div class="row">
                <div class="col-8">
                    {{$action_comic[0]['title']}}                   
                </div>
                <div class="col-8">US Price&nbsp;
                    <strong>{{$action_comic[0]['price']}}</strong>                   
                </div>
                <div class="col-4">
                    <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
        
    </section>
</div>

  

@endsection