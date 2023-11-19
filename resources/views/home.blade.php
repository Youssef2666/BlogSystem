<x-app-layout>
    @section('title','الرئيسية')
    @section('herosection')
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                اهلا بكم في <span class="text-yellow-500">&lt;منشوراتي&gt;</span> <span class="text-gray-900"> للأخبار</span>
            </h1>
            <p class="text-gray-500 text-lg mt-3">أفضل موقع لنقل اخر الأخبار</p>
            <a class="px-3 py-2 text-lg text-white bg-gray-800 rounded mt-5 inline-block hover:text-gray-200"
                href="{{ route('posts.index') }}">Start
                Reading</a>
        </div>
    @endsection
    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">المشاركات المميزة</h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    @foreach ($featuredPosts as $post)
                        <div class="md:col-span-1 col-span-3">
                            <x-posts.post-card :post="$post" />
                        </div>
                    @endforeach
                </div>
            </div>

            <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                href="http://127.0.0.1:8000/blog">المزيد من المنشورات</a>
        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">آخر المشاركات</h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                @foreach ($latestPosts as $post)
                    <div class="md:col-span-1 col-span-3">
                        <x-posts.post-card :post="$post" />
                    </div>
                @endforeach
            </div>
        </div>
        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
            href="http://127.0.0.1:8000/blog">المزيد من المنشورات</a>
    </div>
</x-app-layout>
