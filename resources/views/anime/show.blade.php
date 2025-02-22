<x-layout.layout title="{{$anime['title']}}">
    
    <div class="m-4">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{$anime['images']['jpg']['large_image_url']}}" alt="Imagine di Locandina" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1>{{ $anime['title'] }}</h1>
                <h2 class="text-muted">{{$anime["title_japanese"]}}</h2>

                <div class="mt-5">
                        <div>Punteggio: {{$anime['score']}}/10 <br>
                        Durata Singolo Episodio: {{$anime['duration']}}
                        </div>
                        <div class="mt-5">
                            {!! nl2br(e($anime['synopsis'])) !!}
                            <!-- Otteniamo la formattazione del testo -->
                        </div>
                </div>
            </div>
        
    </div>
    </div>
</x-layout.layout>