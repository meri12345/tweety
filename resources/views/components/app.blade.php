<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex justify-between">

                <div class="lg:w-32">
                    @include ("_sidebar-links")
                </div>


                <div class="lg:flex-1 lg:mx-10">
                    {{$slot}}
                </div>

                <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                    @include ("_friends-links")
                </div>

            </div>
        </main>
    </section>
</x-master>
