@extends('layouts.app')

@section('content')

<style>
.home{
}
.but{
    width:100%;
    margin-top: 3vh;
}
.bt{
    width:100%;
    background-color: #C0392B;
}
.bt:hover, .bt:focus{
    background-color: #145369;
}
.buttons{
    width:65%;
}
</style>

<div class="home container d-flex justify-content-center">
    <div class="buttons">
        <div class="but">
            <a href="projects">
            <button type="button" class="bt btn btn-primary btn-lg btn-block">Projects</button>
            </a>
        </div>
        <div class="but">
        <a href="">
            <button href="/test" type="button" class="bt btn btn-primary btn-lg btn-block">Users</button>
            </a>
        </div>
    </div>
</div>
@endsection;