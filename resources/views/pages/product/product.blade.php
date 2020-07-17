


@extends('master')
@section('title','product')
@section('content')


<h1 align="center"padding="20">Featured Products from database </h1>











			<div class="col-md-12">



				<div class="widget">
						<h3 align="center">MOBILE</h3>
					<div class="row">

	@foreach($products as $product)

					<div class="col-md-3">
						<div class="card">
							
		@foreach($product->images as $image)
	<img class="card-img-top feacher-img" src="{{ asset('public/images/products/'. $image->image)  }}" alt="samsung galaxy">
	@endforeach
							<div class="card-body">
										<h4 class="card-title">
									{{$product->title}}

										</h4>
									    <p class="card-text">TK-{{$product->price}}</p>
									    <a href="#" class="btn btn-outline-success">See Profile</a>
							</div>
						</div>
					</div>

	@endforeach




					</div>
				</div>


















{{--Sidebar+content end--}}




		</div>


@endsection
