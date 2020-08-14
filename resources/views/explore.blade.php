@extends('layouts.app')

@section('content')
   @foreach($users as $user)
       <a href="/profiles/{{$user->username}}" class="flex items-center mb-5 mr-2">
           <img
               src="{{$user->avatar}}"
               alt="{{$user->name}}'s avatar"
               width="60px">

           <div>
               <h4 class="font-bold"> {{'@'.$user->username}}</h4>
           </div>
       </a>

   @endforeach
@endsection
