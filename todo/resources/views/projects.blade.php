@extends('layouts.app')
@section('content')

<style>

.projects{
    border: 2px solid green;
}
.title{
    color:#C0392B;
}

.add-project{
    width:100%;
}
.butt .btn{
    width:60%;
}
</style>

<div class="projects container ">
    <h1 class="title text-center">Projects</h1>
    <div class="add-project mt-4">
                <div class="butt d-flex justify-content-center">
                    <button class="btn btn-success btn-lg btn-block">Add New Project</button>
                </div>
    </div>
</div>

@endsection