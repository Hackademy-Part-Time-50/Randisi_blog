# Blocco 1 (4 errori)

<div>
    <h1>Prodotti</h1>

    @foreach($products as $product)
        <x-card :name="$product->name" :price="$product->price" />
    @endforach
</div>



# Blocco 2 (2 errori)
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <button type="submit">Crea</button>
    </div>
</form>

Blocchi di Codice corretti