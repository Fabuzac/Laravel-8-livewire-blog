@extends('layouts.app')

@section('content')    
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-6">
                <div class="m-1">
                    <div class="alert card alert-dismissible alert-warning">
                            <h1 class="display-6">{{ $article->title }}</h1>                    
                            <p class="mb-1">{{ $article->subtitle }}</p>
                        <div>                            
                            <a href="{{ route('article', $article->slug) }}" type="link" class="btn btn-warning">Learn more <i class="fas fa-arrow-right"></i></a>
                        </div>  
                        <span class="badge bg-primary w-15 mt-2">{{ $article->category->label }}</span>
                    </div>  
                    
                </div>            
            </div>    
        @endforeach
    </div>
    <div class="text-center" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
            {{ $articles->links('override.pagination') }}
        </div>
    </div>
@endsection