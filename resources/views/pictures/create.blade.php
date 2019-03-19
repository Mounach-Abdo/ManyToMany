@extends('layouts.master')
@section('content')
<div class="form-group">

    <form action="/pictures" method="POST" enctype="multipart/form-data">
        <!--  -->
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for=""> Select your image :</label>
                </div>
                <div class="col-md-4">
                    <input type="file" name="img" id="img">
                </div>
                <div class="col-md-4">
                    <input type="submit" name="" id="" value="upload">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    @foreach ($picture as $item)
                    <img src="{{Storage::url($item->directory)}}" alt="erreur 404">
                    @endforeach
                </div>
            </div>
        </div>
    </form>
</div>
@endsection