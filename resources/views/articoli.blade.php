<x-layout.layout title="Articoli">


  @if (!$articles)
    <h1>Non ci sono Articoli Disponibili</h1>    
  @else  
    @foreach($articles as $articolo)
        @if($articolo["visible"])
        <x-card :titolo="$articolo['title']" :route="route('articolo', $articolo['id'])" :category="$articolo['category']"/>
        @endif
    @endforeach
  @endif



</x-layout.layout>