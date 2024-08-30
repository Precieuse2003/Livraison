@extends('partials.navbar')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h1>{{ $produit->nom }}</h1>
			<h3 class="text-success" >{{ $produit->prix }} Fcfa</h3>
			<div class="mb-3" >{!! nl2br($produit->description) !!}</div>
			<div class="bg-white mt-3 p-3 border text-center" >
				<p>Commander <strong>{{ $produit->nom }}</strong></p>
				<form method="POST" action="" class="form-inline d-inline-block" >
					{{ csrf_field() }}
                    <input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2" value="{{ isset(session('basket')[$product->id]) ? session('basket')[$product->id]['quantity'] : null }}" >
					<button type="submit" class="btn btn-warning" >+ Ajouter au panier</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
