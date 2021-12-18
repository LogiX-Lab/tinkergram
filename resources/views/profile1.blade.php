@extends('layouts.app')
@section('top_content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-3">
           <img class="rounded-circle" width="150" src="/storage/{{ $profile->image }}">
       </div>
       <div class="col-md-9">
           <h3>{{ $user->name }}</h3>
           <span><strong>{{$numPosts}}</strong> posts</span>
           <div class="pt-3">{{$profile->description}}</div>
           <div class="pt-3"><a href="/profile/edit">Edit profile</a></div>
       </div>
   </div>

<!--
    <div class="row pt-5">
        @foreach($posts as $post)
            <div class="col-4 mb-5">
                <a href="/post/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-50">
                </a>
            </div>
        @endforeach
    </div>
-->
    <div class="row pt-5">
        @foreach($posts as $post)
            <div class="animate__animated animate__tada animate-duration-2s animate__infinite col-md-4 col-sm-6 content-card ">
                <div class="card-big-shadow">
                    <div class="card card-just-text" data-background="color" data-color="{{$loop->iteration % 3 == 0?'green':($loop->iteration % 3 == 1?'blue':'yellow')}}" data-radius="none">
                        <div class="content">
                            <h4 class="title rounded"><a class="text-decoration-none" href="/post/{{$post->id}}">{{str_pad(substr($post->caption,0,55), 60, '.')}}</a></h4>
                        </div>
                        <div class="content">
                            <img src ="/storage/{{$post->image}}"></img>
                        </div>
                    </div> <!-- end card -->
                </div>
            </div>

        @endforeach
    </div>


</div>
@endsection
