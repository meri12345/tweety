<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form action="/tweets" method="POST">
        @csrf
                    <textarea
                        name="body"
                        class="w-full"
                        placeholder="What's up?"></textarea>

    <hr class="my-4">
    <footer class="flex justify-between">
        <img src="{{auth()->user()->avatar}}"
             alt=""
             class="rounded-full mr-2">

        <button class="bg-blue-500 shadow rounded-lg py-2 px-2 text-white" type="submit">Tweet</button>
    </footer>
    </form>
@error('body')
    <p class="text-red-500 text-sm mt-2">{{$message}}</p>
@enderror

</div>
