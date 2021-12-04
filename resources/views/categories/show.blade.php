@extends("layouts.default")

@section("main")
    <div class="bg-white p-2 space-y-4">
        <h4 class="text-xl">
            <a href="{{ route("categories.show", ['category' => $category->id]) }}">
                {{ $category->title }}
            </a>
        </h4>
        <article class="prose lg:prose-xl">
            {!!  Str::markdown($category->content) !!}
        </article>
    </div>
@endsection
