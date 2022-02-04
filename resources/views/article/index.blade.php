@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center m-2 display-5">Articles</h1>
        <div class="d-flex justify-content-center">
            <a class="btn btn-info m-4" href="{{ route('articles.create') }}"><i class="mx-1 fas fa-plus"></i> Add new article</a>
        </div>
        <table class="table table-hover">
            <thead>
                <tr class="table-active">
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>               
                @foreach ($articles as $article)
                          
                    <tr class="table-active">                        
                        <td> {{ $article->id}} </td>
                        <td> {{ $article->title}} </td>
                        <td> {{ $article->dateFormatted() }} </td>
                        {{-- <td> {{ date('d-M-Y', strtotime($article->created_at)) }} </td> --}}
                        <td class="d-flex"> 
                            <div>                            
                                <a href="{{ route('article', $article->slug) }}" 
                                   type="link" 
                                   class="btn btn-light">Check Article
                                </a>
                            </div> 
                            <a href="#" class="btn btn-info mx-3">Edit</a> 
                            <form action="{{ route('articles.delete', $article->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>                   
                        </td>
                    </tr>   

                @endforeach
            </tbody>
        </table>
        <div class="text-center" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="First group">
                {{ $articles->links('override.pagination') }}
            </div>
        </div>
    </div>    
@endsection