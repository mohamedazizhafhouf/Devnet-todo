@extends('layouts.app')
@section('content')

<style>

.main-cont{
    border: 2px solid green;
}

.add-project{
    width:100%;
}
.butt .btn{
    width:100%;
}
.addButton{
    width:50%;
}
.display-projects{
    border:2px solid red;
}
.todo{
    border: 2px solid black;
}
.project-list{
    border: 2px solid black;
}
.proj{
    border:2px solid red;
}
.proj h5{
    margin-right: 4vh;
    padding-top: 0.9vh;

}
</style>

<div class="main-cont container ">
    <h1 class="title text-center">Projects</h1>
    <div class="add-project mt-4 d-flex justify-content-center">
                <div class="addButton ">
                    <div class="butt">
                        <a href="/projects/new">
                        <button class="btn btn-success btn-lg btn-block">Add New Project</button>
                        </a>
                    </div>
                </div>
    </div>
    <div class="display-projects mt-4">
        <div class="todo">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    On going
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="project-list">
                                        <div class="proj d-flex justify-content-center">
                                            <h5 class="">Project Name</h5>
                                            <button type="button" class="btn btn-outline-primary">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    To do
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="project-list">
                                        <div class="proj d-flex justify-content-center">
                                            <h5 class="">Project Name</h5>
                                            <button type="button" class="btn btn-outline-primary">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Completed
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="project-list">
                                        <div class="proj d-flex justify-content-center">
                                            <h5 class="">Project Name</h5>
                                            <button type="button" class="btn btn-outline-primary">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>

@endsection