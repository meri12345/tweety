

<div>
    <div class="flex p-4 border-b border-b-gray-400">
        <div class="mr-2 flex-shrink-0">
            <a href="{{route('profile', $tweet->user->username)}}">
                <img src="{{$tweet->user->avatar}}"
                     alt=""
                     class="rounded-full mr-2"
                     width="50"
                     height="50">
            </a>
        </div>
        <div>
            <h5 class="font-bold mb-4">
                <a href="{{route('profile', $tweet->user->username)}}">
                    {{$tweet->user->name}}
                </a></h5>
            <p class="text-sm">{{$tweet->body}}</p>
        </div>

    </div>


    <div class="flex justify-content-around">
        <form action="/tweets/{{$tweet->id}}/like" method="POST">
            @csrf
            <button type="submit"><i class="fa fa-thumbs-o-up" style="font-size:24px">{{$tweet->likes ?: 0}}</i></button>
        </form>
        <form action="/tweets/{{$tweet->id}}/like" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit"><i class="fa fa-thumbs-o-down" style="font-size:24px">{{$tweet->dislikes ?: 0}}</i></button>
        </form>
    </div>
</div>
