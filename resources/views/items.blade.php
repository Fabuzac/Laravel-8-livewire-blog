@extends('layouts.app')

@section('content')    
<!--====== Product Style 11 Part Start ======-->
<section class="product-wrapper pb-70">
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="content-card-title text-center pb-30">
					<h2 class="main-title">Products Items</h2>
				</div>
			</div>
		</div>

		<div class="row flex">
			@foreach ($items as $item)			
				<div class="col-lg-4 grid-transformation text-center ">
					<div class="card border-info p-1 product-style-11 mb-2 mt-2">
						
						<div class="product-content row ">
							<h4 class="title text-decoration-none">
								<a class="text-decoration-none" href="{{ route('item', $item->slug) }}">{{ $item->title }}</a>
							</h4>

							<div class="product-image text-center">
								<div class="product-item">
									<a href="{{ route('item', $item->slug) }}">
										<img
											src="images\default-image.jpg"
											alt="product"
											class="w-75"
										/>
									</a>
								</div>							
							</div>

							<p>
								<a class="text-decoration-none" href="{{ route('item', $item->slug) }}">
									{{ $item->description }}
								</a>
							</p>

							<span class="price display-6">$ {{ $item->price}}</span>
							<a href="#" class="btn btn-warning main-btn primary-btn">
								<i class="fas fa-shopping-cart"></i> Add to Cart
							</a>
						</div>
					</div>
				</div>			
			@endforeach
		</div>
	</div>
</section>

<div class="text-center" role="toolbar" aria-label="Toolbar with button groups">
	<div class="btn-group me-2" role="group" aria-label="First group">
		{{ $items->links('override.pagination') }}
	</div>
</div>
<!--====== Product Style 11 Part Ends ======-->
@endsection