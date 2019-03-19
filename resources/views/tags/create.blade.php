@extends('layouts.master')
@section('content')
<div class="form-group">

    <form action="/tags" method="POST" enctype="multipart/form-data">
        
        @csrf
        <div class="container">
           <!-- <div class="row mt-3">
                  <div class="col-md-4">
                    <label for=""> Tag id:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="tag_id" id="tag_id">
                </div>
            </div>-->
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for=""> Tag name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="tag_name" id="tag_name">
                </div>

            </div>
            <div class="row mt-4">
                <input type="submit" class="btn btn-primary" name="" id=" " value="Create a tage">

            </div>

        </div>

    </form>

</div>
@endsection