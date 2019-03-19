@extends('layouts.master')
@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
               tag ID : {{ $tag->tag_id }}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    Tag name  :
                </div>
                <div class="col-md-8">
                    {{ $tag->tag_name }}
                </div>
            </div>
            
         </div>
    </div>
</div>
@endSection