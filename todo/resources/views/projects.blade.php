@extends('layouts.app')
@section('content')

<style>

.main-cont{
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
}
.todo{
}
.project-list{
}
.proj{
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
                                    To do
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="project-list mt-2">

                                                @foreach($projects as $project)
                                                    @if($project->status == 'todo')
                                                        <form action="projects/edit/{{$project->idProject}}" method="">
                                                        @csrf 
                                                        <div class="proj">
                                                            <div class="pro d-flex justify-content-center mb-4">
                                                                <h5 class="">{{$project->name}}</h5>
                                                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                                                            </div> 
                                                        </div>   
                                                    </form>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    On going
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                <div class="project-list">
                                                @foreach($projects as $project)
                                                    @if($project->status == 'ongoing')
                                                    <form action="projects/edit/{{$project->idProject}}" method="">
                                                        @csrf 
                                                        <div class="proj">
                                                            <div class="pro d-flex justify-content-center mb-4">
                                                                <h5 class="">{{$project->name}}</h5>
                                                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                                                            </div>  
                                                        </div>
                                                    </form>
                                                    @endif
                                                @endforeach
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
                                                @foreach($projects as $project)
                                                    @if($project->status == 'completed')
                                                    <form action="projects/edit/{{$project->idProject}}" method="">
                                                        @csrf 
                                                        <div class="proj">
                                                            <div class="pro d-flex justify-content-center mb-4">
                                                                <h5 class="">{{$project->name}}</h5>
                                                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                                                            </div>  
                                                        </div>
                                                    </form>
                                                    @endif
                                                @endforeach
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</div>

@endsection