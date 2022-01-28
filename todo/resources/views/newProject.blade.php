@extends('layouts.app')

@section('content')
<style>
    .main-cont{
        border:2px solid green;
    }
    .inputForm{
        border: 2px solid black;
    }
    .addField{
    width:50%;
    }
    form .btn{
        width:50%;
    }
</style>

<div class="main-cont container">
    <div class="title">
        <div class="h1 text-center">Add new Project</div>
    </div>
    <div class="inputForm">
            <form class="needs-validation" action="add" method="post" novalidate>
                @csrf 
                <div class="f d-flex justify-content-center">
                    <div class="addField form-group mx-sm-3 mb-2">
                        <label for="validationCustom01">Project name</label>
                        <input type="text" class="form-control" id="validationCustom01" name="projectName" placeholder="Project name" required>
                    </div> 
                </div>
                <div class="f d-flex justify-content-center">
                    <div class="addField form-group mx-sm-3 mb-2">
                        <label for="validationCustom02">Description</label>
                        <textarea class="form-control" id="validationCustom02" name="description" placeholder="Write your description here" required></textarea>
                    </div> 
                </div>
                <div class="f d-flex justify-content-center">
                    <div class="addField form-group mx-sm-3 mb-2">
        
                    </div> 
                </div>
                <div class="butt text-center">
                    <button type="submit" class="btn btn-success mb-2">Add</button>
                </div>
            
        </form>
    </div>
    <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
        </script>
</div>
@endsection