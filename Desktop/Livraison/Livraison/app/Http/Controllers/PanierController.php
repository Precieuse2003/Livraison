<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Models\Produit;
use App\Repositories\PanierInterfaceRepository;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    protected $panierRepository;

    public function __construct(PanierInterfaceRepository $panierRepository) {
        $this->panierRepository = $panierRepository;
    }

    // Affichage du panier
    public function show() {
    // Récupération du contenu du panier
    $panier = Cart::getContent();

    // Passage du contenu du panier à la vue
    return view('panier.show', compact('panier'));
}

    // Ajout d'un produit au panier
    public function add(Request $request, $id) {
        // Validation de la requête
        $request->validate([
            'quantite_produit' => 'numeric|min:1'
        ]);

        // Récupération du produit
        $produit = Produit::findOrFail($id);

        // Ajout/Mise à jour du produit au panier avec sa quantité
        Cart::add([
            'id' => $produit->id,
            'name' => $produit->nom,
            'price' => $produit->prix,
            'quantity' => $request->quantite_produit,
            'attributes' => [],
        ]);

        // Redirection vers le panier avec un message
        return redirect()->route("panier.show")->with('message', 'Produit ajouté au panier');
    }

    // Suppression d'un produit du panier
    public function remove($id) {
        // Suppression du produit du panier par son identifiant
        Cart::remove($id);

        // Redirection vers le panier
        return back()->with('message', 'Produit retiré du panier');
    }
    // Vider le panier
    public function empty() {
        // Suppression des informations du panier en session
        Cart::clear();

        // Redirection vers le panier
        return back()->with('message', 'Panier vidé');
    }
}
