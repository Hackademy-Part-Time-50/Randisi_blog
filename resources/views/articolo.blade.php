<x-layout.layout :title="$article->title">
    
        <div class="mb-2">
            <a href="{{ route('articoli') }}" class="btn btn-sm btn-light">indietro</a>
        </div>

        <span>{{ $article->category }}</span>
        <h1>{{ $article->title }}</h1>

        @if($article->image)
        <div class="mt-5">
            <img src="{{ Storage::url($articolo->image) }}" alt="" class="img-fluid">
        </div>
        @endif

        <div class="mt-5">
            {{ $article->body}}
        </div>
</x-layout.layout>