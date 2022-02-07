@extends('layouts.app')

@section('content')    
    <div>  
        <a class="m-1 btn btn-warning" href="{{ route('articles') }}"><i class="fas fa-arrow-left"></i> Return</a>    
        <div>
            <div class="m-1">
                <div class="alert card alert-dismissible alert-warning text-center">
                    <h1 class="display-6">{{ $article->title }}</h1>     
                    <hr/>
                    <img src="/favicon/livewire.png" alt="" class="m-auto" width="100">               
                    <p class="mb-1 text-danger">{{ $article->subtitle }}</p>   
                    <div class="container">
                        <p class="mb-1">{{ $article->content }}</p>
                    </div>          
                </div>  
            </div>            
        </div>       
    </div>
@endsection