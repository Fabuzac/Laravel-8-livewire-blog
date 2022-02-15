@extends('layouts.app')

@section('content')
    <div class="m-2 text-center">
        <div class="alert alert-dismissible alert-warning">
                <h1 class="display-4">Livewire Blog</h1>
                <p class="text-primary">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
                <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur</a>.</p>
            <div>         
                <img class="m-1 img-fluid rounded" src="https://laravelarticle.com/filemanager/uploads/laravel-livewire.png" alt="" style="width:30%">
                <h5 class="card-title">Litlle TITLE of the card</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/articles" type="link" class="btn btn-warning">Learn more <i class="fas fa-arrow-right"></i></a>
                {{-- @livewire('counter') --}}
            </div> 
        </div>  
    </div>
@endsection