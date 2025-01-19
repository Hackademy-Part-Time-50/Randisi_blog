<x-layout.layout title="Articolo">
    
        <div class="mb-2">
            <a href="{{ route('articoli') }}" class="btn btn-sm btn-light">indietro</a>
        </div>

        <span>{{ $category }}</span>
        <h1>{{ $title }}</h1>
</x-layout.layout>