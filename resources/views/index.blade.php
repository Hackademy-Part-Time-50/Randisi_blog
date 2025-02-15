<x-layout.layout title="Indice Degli Articoli">
<div class="row">
    <div class="col-lg-6">
        <h1>Elenco Articoli</h1>
    </div>
    <div class="col-lg-5 text-end">
        <a href="{{route('articleform')}}" class="btn btn-primary">Crea un tuo Articolo</a>
    </div>
</div>
    
    
    <x-success />
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
               <th>#</th>
               <th>Titolo</th>
               <th>Categoria</th> 
            </tr>
        </thead>
        <tbody>
             @foreach($articles as $article)
             <tr>
               
             <td>{{ $article->id }}</td>
                
             <td>{{ $article->title }}</td>
                
                <td>{{ $article->category}}</td>
                
                <td class="text-end">
                    
                    <a href= " {{ route ('articles.edit', $article) }} " class="btn btn-sm btn-secondary">Modifica</a>

                    <form action="{{ route ('articles.destroy', $article )}}" method="POST" class="inline ms-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                    </form>
                </td> 
            </tr>
             @endforeach
        </tbody>
    </table>

</x-layout.layout>