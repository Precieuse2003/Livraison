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

                <div class="cat"><h3> {{$produits->categorie->nom}}</h3>

                    <div class="showcase">

                        @forelse($produits as $produit)
                            <div class="showcase-banner">
                                <img src="{{ asset('storage/'.$produit->image) }}" alt="{{ $produit->nom }}" width="300">
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
                             <a href="#" class="showcase-category">{{$produit->nom}}</a>

                             <h3>
                                <a href="#" class="showcase-title">{{$produit->nom}}</a>
                             </h3>


                             <div class="price-box">
                                <p class="price">{{$produit->nom}} Fcfa</p>
                             </div>

                            </div>
                            @empty
                            <h1 style="color: rgb(21, 22, 22);">Aucun produit n'est actuellement disponible dans cette catégorie.</h1>
                        @endforelse
                    </div>

                </div>

                <div class="cat"><h3> Laitier</h3>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/laitier/yaourt.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/laitier/yaourt.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Yaourt</a>

                      <h3>
                        <a href="#" class="showcase-title">Yaourt nature</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">1000 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/laitier/vache.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/laitier/vache.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Vâche qui rit</a>

                      <h3>
                        <a href="#" class="showcase-title">Frommage à base de lait de vâche</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">1500 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/laitier/peak.png" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/laitier/peak.png" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Lait</a>

                      <h3>
                        <a href="#" class="showcase-title">Lait peak</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">500 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/laitier/sucre.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/laitier/sucre.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Lait</a>

                      <h3>
                        <a href="#" class="showcase-title">Jago, lait concentré sucré</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">2500 Fcfa</p>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="cat"><h3> Soins Personnel</h3>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/soins/parfum.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/soins/parfum.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Parfum</a>

                      <h3>
                        <a href="#" class="showcase-title">Parfum pour homme</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">2500 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/soins/savon.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/soins/savon.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Savon</a>

                      <h3>
                        <a href="#" class="showcase-title">Savon Flow</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">500 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/soins/masque.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/soins/masque.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Mask</a>

                      <h3>
                        <a href="#" class="showcase-title">Peel of mask</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">2000 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/soins/sivoderm.png" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/soins/sivoderm.png" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Pommade</a>

                      <h3>
                        <a href="#" class="showcase-title">sivoderm pommade, lait hydratant</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">1275 Fcfa</p>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="cat"><h3> Surgelé</h3>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/surgele/poulet.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/surgele/poulet.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Viande</a>

                      <h3>
                        <a href="#" class="showcase-title">Viande de poule</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">2000 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/surgele/boulettes.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/surgele/boulettes.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Boulette</a>

                      <h3>
                        <a href="#" class="showcase-title">Boulette de viande de Boeuf</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">3000 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/surgele/gesier.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/surgele/gesier.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Gésier</a>

                      <h3>
                        <a href="#" class="showcase-title">Gésier de poule</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">1500 Fcfa</p>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <div class="showcase-banner">
                      <img src="./assets/images/produits/surgele/saucisse.jpg" alt="" class="product-img default"
                        width="300">
                      <img src="./assets/images/produits/surgele/saucisse.jpg" alt="" class="product-img hover"
                        width="300">

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
                      <a href="#" class="showcase-category">Saucisse</a>

                      <h3>
                        <a href="#" class="showcase-title">Paque de saucisse</a>
                      </h3>


                      <div class="price-box">
                        <p class="price">1000 Fcfa</p>
                      </div>

                    </div>

                  </div>

                </div>

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
