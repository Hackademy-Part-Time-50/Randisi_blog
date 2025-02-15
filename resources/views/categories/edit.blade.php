<x-layout.layout title="Modifica Categoria">


    <div class="row">
        
    <div class="col-lg-6 mx-auto">
        <a href="{{route('categories.index')}}" class="btn btn-danger mx-auto my-5">Torna Indietro</a>

        <h1>Modifica Categoria</h1>
            <x-success />
            <div class="mt-5">
                <form action=" {{ route ('categories.update', $category)}} " method="POST">
                    @csrf
                    @method('PUT')
                <div class="row g-3">
                    <div class="col-12">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}">
                    @error('name') <span class="small text-danger"> {{ $message }}</span>@enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </div>
                </div>
                </form>            
            </div>


            </div>
    </div>
</x-layout.layout>