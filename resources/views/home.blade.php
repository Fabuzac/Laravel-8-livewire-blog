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

    <section class="container row m-auto">
        <div class="alert alert-dismissible alert-info m-1 col-9">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p>
                <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quo esse amet consequuntur dicta. Dolorem, sapiente assumenda corrupti explicabo id iusto nulla qui eum dolores nostrum minima.
                Ratione accusantium corrupti culpa!
            </p>            
            <br>           
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Aliquam tempore saepe perferendis veritatis nobis asperiores adipisci ad odio necessitatibus quasi,
                suscipit ea beatae et eaque rem libero ipsum dolore at?
            </p>
            
        </div>

        <div class="alert alert-dismissible alert-light m-1 col-2">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

        <div class="alert alert-dismissible alert-success m-1 col-5">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

        <div class="alert alert-dismissible alert-danger m-1 col-6">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

        <div class="alert alert-dismissible alert-info m-1 col-11">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p>
                <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius eaque magni totam molestiae amet ex officia 
                odit pariatur suscipit quibusdam consectetur distinctio consequuntur.
            </p>           
        </div>

        <div class="alert alert-dismissible alert-success m-1 col-2">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

        <div class="alert alert-dismissible alert-danger m-1 col-2">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

        <div class="alert alert-dismissible alert-light m-1 col-2">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

        <div class="alert alert-dismissible alert-success m-1 col-2">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

        <div class="alert alert-dismissible alert-info m-1 col-2">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
        </div>

    </section>
@endsection