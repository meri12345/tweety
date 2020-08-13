<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @forelse(auth()->user()->follows as $user)
   <a href="{{route('profile', $user->username)}}">
    <li class="mb-4">
        <div class="flex text-sm">
            <img src="{{$user->avatar}}"
                 alt=""
                class="rounded-full mr-2"
            width="40"
            height="40">
            {{$user->name}}
        </div>
    </li>

   </a>
    @empty
        <li>No friends yet.</li>
    @endforelse
</ul>
