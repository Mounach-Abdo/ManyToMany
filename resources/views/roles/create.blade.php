@extends('layouts.master')
@section('content')
<div class="form-group">

    <form action="/roles" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for=""> Role type :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="role_type" id="role_type">
                </div>
            </div>
            <div class="row mt-4">
                <input type="submit" class="btn btn-primary" name="" id=" " value="Create roles ">
            </div>
        </div>
    </form>
</div>
@endsection