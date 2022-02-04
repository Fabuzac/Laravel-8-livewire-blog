@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-5 text-center">New article</h1>
        <form class="alert alert-dismissible alert-warning" method="POST" action="{{ route('articles.store') }}">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <fieldset>
                        <label class="form-label text-left display-6" for="title">Title</label>
                        <input class="form-control" 
                               type="text" 
                               name="title" 
                               id="form-control" 
                               placeholder="Title of the article"
                               maxlength="150"                                
                               autofocus
                               @error('title') is-invalid  @enderror
                        >
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </fieldset>
                </div>
            </div>   

            <div class="col-12 my-2">
                <div class="form-group">
                    <fieldset>
                        <label class="form-label text-left display-6" for="subtitle">Subtitle</label>
                        <input class="form-control" 
                               type="text" 
                               name="subtitle" 
                               id="form-control" 
                               placeholder="Subtitle of the article"
                               maxlength="200"                                  
                               @error('subtitle') is-invalid  @enderror
                        >
                        <small class="form-text text-muted">Describe your article in few words</small>                        
                    </fieldset>
                    @error('subtitle')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> 

            <div class="col-12 my-2">
                <div class="form-group">
                    <fieldset>
                        <label class="form-label text-left display-6" for="content">Content</label>
                        <textarea class="form-control w-100" 
                                  placeholder="Write your article"
                                  name="content" 
                                  id="tinycme-editor" 
                                  cols="30" 
                                  rows="7"
                                  maxlength="500"                                  
                                  @error('content') is-invalid  @enderror
                        ></textarea>

                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <script>
                            tinymce.init({
                              selector: '#tinycme-editor'
                            });
                        </script>

                    </fieldset>
                </div>
            </div> 
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
        </form>
    </div>
@endsection
