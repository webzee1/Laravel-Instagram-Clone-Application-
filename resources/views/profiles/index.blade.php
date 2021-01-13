@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://fiverr-res.cloudinary.com/t_profile_original,q_auto,f_auto/attachments/profile/photo/a69c9876e5ddc48f528468e3607e56de-1577121862700/2208804d-03b9-4931-bc40-bc16727326a4.jpg" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
               
                    <div class="h4">{{ $user->username }}</div>
                    

             @can('update' , $user->profile)
            <a href="/p/create">Add New Post</a>
           @endcan
            </div>
            
            @can('update' , $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
           @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>481</strong> followers</div>
                <div class="pr-5"><strong>120</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"> {{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach($user->posts as $post)
       
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>

           @endforeach
       
    </div>
</div>



@endsection
