@extends("layouts.default")

@section("main")
    <div class="grid grid-cols-12 gap-4">
        @foreach($posts as $post)
            <div class="col-span-4 bg-white p-2 rounded-xl transform hover:-translate-y-1 transition-all">
                <h4 class="text-xl">
                    <a href="{{ route("posts.show", ['post' => $post->id]) }}">
                        {{ $post->title }}
                    </a>
                </h4>
                <p>
                    <strong class="bg-gray-400 px-3 rounded-xl">
                        {{ $post->category_id }}
                    </strong>
                </p>
                <p class="text-sm">
                    {{ $post->summary}}
                </p>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $posts->links() }}
    </div>
@endsection
