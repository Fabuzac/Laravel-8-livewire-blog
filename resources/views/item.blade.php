@extends('layouts.app')

@section('content')    
<!--====== Product Style 11 Part Start ======-->
<section class="product-wrapper pb-70">
	<div class="container">        
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="content-card-title text-center pb-30">
					<h2 class="main-title">Products Items</h2>
				</div>
			</div>
		</div>
        {{-- ROW LEFT --}}
		<div class="row">		
            <div class="col-9 text-center">
                <div class="card border-info p-1 product-style-11 mb-2 mt-2">                    
                    <div class="product-content">
                        <h4 class="title">
                           {{ $item->title }}
                        </h4>
                        <div class="product-image text-center">
                            <div class="product-item">
                                <img
                                    src="{{ asset('images/default-image.jpg') }}"
                                    alt="product"
                                    class="w-75"
                                />
                            </div>							
                        </div>
                        <p class="text-decoration-none">{{ $item->description }}</p>
                        <span class="align-middle price display-6 m-4">$ {{ $item->price}}</span>
                        <a href="#" class="btn btn-warning main-btn primary-btn">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>	
            {{-- ROW RIGHT --}}
            <div class="col-3 card border-info p-1 product-style-11 mb-2 mt-2">
                <h3>Your cart <i class="fas fa-shopping-cart"></i></h3>
                <div class="form-group">
                    <label class="form-label mt-4">Input addons</label>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                            <div class="input-group mb-3">
                            <input type="text"
                                    class="form-control" 
                                    placeholder="Recipient's username" 
                                    aria-label="Recipient's username" 
                                    aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                        </div>
                    </div>
                </div>
            </div>		
		</div>
	</div>
    <a class="m-1 btn btn-warning" href="{{ route('items') }}"><i class="fas fa-arrow-left"></i> Return</a>
</section>
@endsection