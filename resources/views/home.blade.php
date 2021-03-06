@extends('layouts.app')

@section('content')
    <div class="lg:flex justify-between">
        <div class="lg:w-32">
            @include ("_sidebar-links")
        </div>

        <div class="lg:flex-1 lg:mx-10">
           @include("_publish_tweet_pannel")

            <div class="border border-gray-300 rounded-lg" style="max-width: 700px">
                @foreach($tweets as $tweet)
                @include ("_tweet")
                @endforeach
            </div>
        </div>

        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include ("_friends-links")
        </div>
    </div>
@endsection
