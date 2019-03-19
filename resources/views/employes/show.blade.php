@extends('layouts.master')
@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Employee ID : {{ $employe->id }}
            </div>
            <div>
                @foreach ($employe->employes as $picture)    
                <img src="{{Storage::url($picture->path) }}" alt="" >
            @endforeach
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    First name :
                </div>
                <div class="col-md-8">
                    {{ $employe->first_name }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Last name :
                </div>
                <div class="col-md-8">
                    {{ $employe->last_name }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                        Created at :
                </div>
                <div class="col-md-8">
                    {{ $employe->created_at }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Updated at :
                </div>
                <div class="col-md-8">
                    {{ $employe->updated_at }}
                </div>
            </div>
        </div>
    </div>
</div>
@endSection