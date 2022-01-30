@extends('layouts.app')

@section('content')
<style>
    .editProject{
        border:2px solid red;
    }
    .details{
        border:2px solid green;
        width:100%;
    }
    .field{
        margin-top: 2vh;
    }
    .fields{
        width:50%;
    }
    .updateButton button{
        width:40%;
    }
</style>
<div class="editProject container">
    <div class="title text-center">
        <h1>Project name</h1>
    </div>

    <div class="details d-flex justify-content-center">
        <div class="fields">
            <form action="" method="post">
                <div class="field">
                    <label for="validationCustom01">Name</label>
                    <input type="text" value="value here" class="form-control" id="validationCustom01" name="projectName" required>
                </div>
                <div class="field">
                    <label for="validationCustom02">Name</label>
                    <textarea class="form-control" id="validationCustom02">desc value here</textarea>                
                </div>
                <div class="field">
                    {{
                      $selected1="",
                      $selected2="",
                      $selected3="",
                    }}
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option {{$selected1}}>Todo</option>
                        <option {{$selected2}}>Ongoing</option>
                        <option {{$selected3}}>Completed</option>
                        </select>
                    </div>
                </div>
                <div class="updateButton text-center mt-4 d-grid gap-2">
                    <a href="">
                        <button type="button" class="ml-2 btn btn-primary">Update</button>
                    </a>
                </div>
            </form>
        </div>
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