@extends('layouts.master')
@section('content')
<div class="form-group">

   <form action="/articles/{{$article->id}}" method="POST" enctype="multipart/form-data"> <!--  -->
    @csrf
    <input type="hidden" name="_method" value="put">
    <div class="container">
            <div class="row mt-3">

                    <div class="col-md-4">
                            <img src="{{Storage::url($article->pictures[0]->path)}}" class="img-fluid" alt="">
                    </div>
             </div>
        <div class="row mt-3">
            <div class="col-md-4">
                    <label for=""> Name Article :</label>
            </div>
            <div class="col-md-4">
            <input type="text" name="name_article" id="name_article" value="{{$article->name}}">
            </div>
        </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="">  Designation Article :</label>
                </div>
                    <div class="col-md-4">
                            <input type="text" name="description_article" id="description_article" value="{{$article->description}}">
                    </div>
                
            </div>
          <div class="row mt-3">
                <div class="col-md-4">
                        <label for="">  Price Article :</label>
                </div>

                <div class="col-md-4">
                <input type="text" name="price_article" id="price_article" value="{{$article->price}}">
                </div>
         </div>

          
        <div class="row mt-3">
            <div class="col-md-4">
                    <label for=""> Choose the picture of the product</label>
            </div>
            
            <div class="col-md-4">
                    <input type="file" name="img" id="img" required >
            </div>
        </div>
        <div class="row mt-4">
                <input type="submit"  class="btn btn-primary" name="" id=" " value="Edit article ">

        </div>
       
    </div>
             
    </form>
        
</div>
@endsection