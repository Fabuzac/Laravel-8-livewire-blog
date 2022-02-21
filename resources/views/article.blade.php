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
                    <div class="container row justify-content-center">
                        <img src="{{ $article->image }}" class="w-25 my-25" alt="default picture">
                        <p class="mb-1">{{ Markdown::parse($article->content) }}</p>
                    </div>
                </div>  
                <span class="badge bg-primary">{{ $article->category->label }}</span>   
            </div>            
        </div>       
    </div>
@endsection