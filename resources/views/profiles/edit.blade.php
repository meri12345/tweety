@extends('layouts.app')

@section('content')
    <form action="/profiles/{{$user->username}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input name="name" id="name" type="text" class="border border-gray-400 p-2 w-full" value="{{$user->name}}">
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>
            <input name="username" id="username" type="text" class="border border-gray-400 p-2 w-full" value="{{$user->username}}">
            @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Avatar
            </label>
            <input name="avatar" id="avatar" type="file" class="border border-gray-400 p-2 w-full">
            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input name="email" id="email" type="email" class="border border-gray-400 p-2 w-full" value="{{$user->email}}">
            @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input name="password" id="password" type="password" class="border border-gray-400 p-2 w-full" required>
            @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password Confirmation
            </label>
            <input name="password_confirmation" required id="password_confirmation" type="password" class="border border-gray-400 p-2 w-full">
            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>
        <button type="submit">Confirm</button>
    </form>
@endsection
