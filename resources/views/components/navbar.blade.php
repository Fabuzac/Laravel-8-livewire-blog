<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor03">
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
					<a class="nav-link active" href="/articles">Articles
						<span class="visually-hidden">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>          
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('shop.index') }}">Shop</a>
				</li> 
			</ul>        
		</div>

		<ul class="navbar-nav me-auto">
			@if (Auth::user())    

				@if (Auth::user()->role === 'ADMIN')
					<li class="nav-item">
					<a class="nav-link" href="{{ route('articles.index') }}">Dashboard Admin</a>
					</li> 
				@endif
				<li class="nav-item">            
					<a class="nav-link"
						href="{{ route('logout') }}"
						onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
					>
						{{ __('Logout') }}
					</a>
					<form id="logout-form" method="POST" action="{{ route('logout') }}">
						@csrf            
					</form>
				</li>						
			@else        
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">Login</a>
				</li> 

				<li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">Create Account</a>
				</li>            
			@endif
		</ul>
	</div>
</nav>
  
  