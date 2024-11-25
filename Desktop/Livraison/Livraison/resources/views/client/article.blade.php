@extends('partials.nav_client')
@section('content')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&callback=initMap"></script>
        <main>

            <div class="product-container">

                <div class="container">

                    <div class="product-box">

                        <!--
                        - PRODUCT GRID
                        -->

                        <div class="product-main">
                            <div class="product-grid">
                                @foreach ($categories as $categorie)
                                    <div class="cat">
                                        <h3>{{ $categorie->nom }}</h3>
                                        <div class="showcase">
                                            @if(isset($productsByCategory[$categorie->id]) && count($productsByCategory[$categorie->id]) > 0)
                                                @foreach($productsByCategory[$categorie->id] as $produit)
                                                    <div class="showcase-banner">
                                                        <img src="{{ asset('storage/'.$produit->image) }}" alt="{{ $produit->nom }}" width="300">

                                                        <div class="showcase-actions">
                                                            <button class="btn-action btn-heart">
                                                                <ion-icon name="heart-outline"></ion-icon>
                                                            </button>

                                                            <button class="btn-action btn-view">
                                                                <ion-icon name="eye-outline"></ion-icon>
                                                            </button>

                                                            <button class="btn-action btn-repeat">
                                                                <ion-icon name="repeat-outline"></ion-icon>
                                                            </button>

                                                            <button class="btn-action btn-add">
                                                                <ion-icon name="bag-add-outline"></ion-icon>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="showcase-content">
                                                        <a href="#" class="showcase-category">{{ $produit->nom }}</a>

                                                        <h3>
                                                            <a href="#" class="showcase-title">{{ $produit->nom }}</a>
                                                        </h3>

                                                        <div class="price-box">
                                                            <p class="price">{{ $produit->prix }} Fcfa</p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>Aucun produit disponible dans cette catégorie.</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ajoute les gestionnaires d'événements aux boutons
            document.querySelectorAll('.btn-heart').forEach(button => {
                button.addEventListener('click', function() {
                    // Code pour ajouter le produit aux favoris
                    alert('Produit ajouté aux favoris!');
                });
            });

            document.querySelectorAll('.btn-view').forEach(button => {
                button.addEventListener('click', function() {
                    // Code pour voir les détails du produit
                    alert('Voir les détails du produit!');
                });
            });

            document.querySelectorAll('.btn-repeat').forEach(button => {
                button.addEventListener('click', function() {
                    // Code pour répéter la commande
                    alert('Commande répétée!');
                });
            });

            document.querySelectorAll('.btn-add').forEach(button => {
                button.addEventListener('click', function() {
                    // Code pour ajouter le produit au panier
                    alert('Produit ajouté au panier!');
                });
            });
        });
    </script>

@endsection
