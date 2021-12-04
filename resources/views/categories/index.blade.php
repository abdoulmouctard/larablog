@extends("layouts.default")

@section("main")
    <div class="grid grid-cols-12 gap-4">
        @foreach($categories as $category)
            <div class="col-span-4 bg-white p-2 rounded-xl transform hover:-translate-y-1 transition-all">
                <h4 class="text-xl">
                    <a href="{{ route("categories.show", ['category' => $category->id]) }}">
                        {{ $category->title }}
                    </a>
                </h4>
                <p class="text-sm">
                    {{ $category->summary}}
                </p>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $categories->links() }}
    </div>
@endsection
