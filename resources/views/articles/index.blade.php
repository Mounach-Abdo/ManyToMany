@extends('layouts.master')
@section('content')
<div class="container">
    @foreach ($articles as $article)
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Article Number : {{$article->id}}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    Name article :
                </div>
                <div class="col-md-3">
                    {{ $article->name }}
                </div>
                   <a href="{{'articles/'.$article->id}}" class="btn btn-primary">Show Information</a>
                     <form action="{{'articles/'.$article->id}}" method='post'>
                         @csrf
                         <input type="hidden" name="_method" value="delete">
                         <input type="submit" name="" id="" value="Delete" class="btn btn-danger">
                    </form>
                <a href="{{'articles/' .$article->id. '/edit'}}" class="btn btn-success">Edit Information</a>
            </div>
            <div class="row">
                <div class="col-md-3">
                    Description article :
                </div>
                <div class="col-md-3">
                    {{ $article->description }}
                 </div>
             </div>

            <div class="row">
                <div class="col-md-3">
                    Price article :
                </div>
                <div class="col-md-3">
                    {{ $article->price }}
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    @foreach ($article->pictures as $picture)
                    <img src="{{Storage::url($picture->path) }}" class='img-fluid' alt="Erreur ">
                    @endforeach
                </div>
            </div>


        </div>
    </div>
    @endforeach
</div>
@endsection