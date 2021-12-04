@extends("layouts.default")

@section("main")
    <div class="bg-white p-2 space-y-4">
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

        <article class="prose lg:prose-xl">
            {!!  Str::markdown($post->content) !!}
        </article>
    </div>
@endsection
