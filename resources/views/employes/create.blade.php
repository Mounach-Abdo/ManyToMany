@extends('layouts.master')
@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Create new employee 
            </div>
        </div>
        <div class="card-body">
            <form action="/employes" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Ex: Abdsslam">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Ex: Mounach">
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Choose your role </label>
                                <select name="role" id="">
                                    <option value="">............</option>
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->type}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Upload your image</label>
                                <input type="file" name="img" id="img" required>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-outline-primary" type="submit">
                            Save
                        </button>
                        <button class="btn btn-danger">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endSection