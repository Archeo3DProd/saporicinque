<div class="produit m-3">
    <img src="{{ $produit->image }}" alt="{{ $produit->nom }}">
    <h2>{{ $produit->nom }}</h2>
    <p>{{ $produit->prix }} CHF</p>
    <div class="form-button-container">
        <form action="/produit/edit/{{ $produit->id }}" method="GET">
            @csrf
            <button class="form-button button-edit mb-2">Modifier</button>
            <input type="hidden" id="{{ $produit->id }}" name="produit_id" value="{{ $produit->id }}">
        </form>
        <form action="/produit_delete/{{ $produit->id }}" method="GET">
            @csrf
            <button class="form-button button-delete mb-2">Supprimer</button>
            <input type="hidden" id="{{ $produit->id }}" name="{{ $produit->id }}" value="{{ $produit->id }}">
        </form>
    </div>
</div>