@extends('layouts.app')

@section('content')
<header class="mb-6 relative">
    <img class="rounded-lg" src="/images/banner.jpg" alt="">


<div class="flex justify-between items-center mb-8">
    <div>
        <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
        <p class="text-sm">Joined: {{$user->created_at->diffForHumans()}}</p>
    </div>

    <div>
        @if(auth()->user()->is($user))
        <a class="shadow rounded-full py-2 px-2 text-xs"  href="/profiles/{{$user->username}}/edit">Edit Profile</a>
        @else
        <form action="/profiles/{{$user->username}}/follow" method="POST">
            @csrf
            <button class="bg-blue-500 shadow rounded-lg py-2 px-2 text-white text-xs"  type="submit">
            {{auth()->user()->isFollowing($user) ? 'Unfollow' : 'Follow me'}}
            </button>
        </form>
        @endif
    </div>
</div>
    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu risus a leo tempus elementum eget interdum quam.
        Nulla nec tempor leo. Curabitur orci sapien, interdum sed pharetra vel, tincidunt id dolor.
        Nullam volutpat feugiat ex quis aliquam.
        Nam id elementum ante. In hac habitasse platea dictumst. In hac habitasse platea dictumst.</p>

    <img src="{{$user->avatar}}"
         alt=""
         class="rounded-full mr-2 absolute"
    style="width:150px;  left:calc(50% - 75px); top:60%;">



</header>
@include('_timeline',[
    'tweets'=>$user->tweets])
@endsection

