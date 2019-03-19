@extends('layouts.master')
@section('content')
<div class="form-group">

   <form action="/articles" method="POST" enctype="multipart/form-data"> <!--  -->
    @csrf
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                    <label for=""> Name Article :</label>
            </div>
            <div class="col-md-4">
                <input type="text" name="name_article" id="name_article">
            </div>
        </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="">  Designation Article :</label>
                </div>
                    <div class="col-md-4">
                            <input type="text" name="description_article" id="description_article">
                    </div>
                
            </div>
          <div class="row mt-3">
                <div class="col-md-4">
                        <label for="">  Price Article :</label>
                </div>

                <div class="col-md-4">
                        <input type="text" name="price_article" id="price_article">
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
        @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
        <div class="row mt-4">
                <input type="submit"  class="btn btn-primary" name="" id=" " value="Upload the article picture">

        </div>
       
    </div>
             
    </form>
        
</div>
@endsection