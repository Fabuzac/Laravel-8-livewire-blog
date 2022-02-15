@extends('layouts.app')
@section('content')   
    <div class="row">        
        <div class="col-10">
            <h1 class="text-center display-6">Articles</h1>
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
        </div>  
        {{-- CATEGORIES --}}
        <div class="col-2 mt-5">
            @foreach ($categories as $category)
                <div class="form-group">
                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" name="checkbox" id="{{ $category->id }}">
                        <label for="{{ $category->id}}" class="badge bg-light">
                            {{ $category->label }}
                            <i class="fas fa-{{ $category->icon }}"></i>
                        </label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- PAGINATION --}}
    <div class="text-center" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-2" role="group" aria-label="First group">
            {{ $articles->links('override.pagination') }}
        </div>
    </div>
@endsection