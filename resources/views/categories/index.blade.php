<x-layout.layout title="Gestione Categorie">

    <div class="row mx-5 my-5">
        <div class="col-lg-6">
        <h1>Gestione Categorie</h1>
        </div>
        <div class="col-lg-6 text-end">
            <a href=" {{ route('categories.create') }} " class="btn btn-primary">Crea Categoria</a>
        </div>
    </div>
    
    <x-success />
    <table class="table table-bordered mt-5 mx-5 my-5">
        
        <thead>
            
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th></th>
            </tr>

        </thead>

        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td class="text-ed">
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-secondary">Modifica</a>
                    <form action=" {{ route ('categories.destroy', $category) }}" method="POST" class="d-inline">
                    
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