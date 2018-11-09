@extends('layout')

@section('hero')
    <div class="hero">
        <div class="profile-headline">
            <div class="cover-photo" style="background-image: url(<?php echo $user->profile->coverPic ?>)">
                <div class="button-group">
                    <button class="add-friend"><i class="fas fa-user-plus fa-sm mr-1"></i></i>Add Friend</button>

                    <button class="message"><i class="fab fa-facebook-messenger mr-1"></i>Message</button>

                    <button class="timeline-settings"><i class="fas fa-ellipsis-h"></i></button>
                </div>

                <div class="profile-user d-flex">
                    <img class="profile-pic" src=<?php echo $user->profile->pic ?>>
                    <div class="profile-name"><?php echo $user->name ?></div>
                </div>
            </div>

            <div class="profile-menu">
                <div class="menu-item">Timeline<i class="fas fa-caret-down ml-2"></i></div>
                <div class="menu-item">About</div>
                <div class="menu-item">Friends</div>
                <div class="menu-item">Photos</div>
                <div class="menu-item"><i class="fas fa-lock fa-sm mr-2"></i>Archive</div>
                <div class="menu-item">More<i class="fas fa-caret-down ml-2"></i></div>
            </div>
        </div>
    </div>
@endsection

@section('left-sidebar')
    @include('user_info')
@endsection

@section('main-content')
    @include('timeline_posts')
@endsection
