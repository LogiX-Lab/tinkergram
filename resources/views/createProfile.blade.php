@extends('layouts.app')

@section('top_content')
    <div class="tv-banner-image" style="background: rgba(0, 0, 0, 0) url('/images/Image1.png') no-repeat scroll center top / cover;">
        <div class="tv-opacity-medium tv-bg-black"></div>
        <div class="tv-banner-title">
            <div class="tv-login-form">

                <form action="{{ route('profile.postCreate') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="description">Description</label>
                        <input class="form-control" type="text" name="description" id="description">
                    </div>

                    <div class="form-group row">
                        <label for="profilepic">Profile picture</label>
                        <input type="file" name="profilepic" id="profilepic">
                    </div>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Create profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
