@extends('layouts.app')

@section('content')
<style>
    .editProject{
    }
    .details{
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
    .info-message{
        width:70%;
    }
</style>
<div class="editProject container">
    <div class="title text-center">
        <h1>Project name</h1>
    </div>

    <div class="details d-flex justify-content-center">
        <div class="fields">
            <form class="needs-validation" action="edit/update" method="post" novalidate>
                @csrf 
                <div class="field">
                    <label for="validationCustom01">Name</label>
                    <input type="text" value="{{$details->name}}" class="form-control" id="validationCustom01" name="projectName" required>
                </div>
                <div class="field">
                    <label for="validationCustom02">Name</label>
                    <textarea class="form-control" id="validationCustom02" name="description" required>{{$details->description}}</textarea>                
                </div>
                <div class="field">
                    @php
                        $selected=$details->status;
                        $selected1="";
                        $selected2="";
                        $selected3="";
                        if ($selected=="todo"){
                            $selected1="selected";
                        }
                        else if ($selected=="ongoing"){
                            $selected2="selected";
                        }
                        else{
                            $selected3="selected";
                        }
                    
                    @endphp
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option {{$selected1}} value="todo">Todo</option>
                        <option {{$selected2}} value="ongoing">Ongoing</option>
                        <option {{$selected3}} value="completed">Completed</option>
                        </select>
                    </div>
                </div>
                <div class="updateButton mt-4 d-grid gap-2 d-flex justify-content-center">
                        <button type="submit" class="ml-2 btn btn-primary">Update</button>
                </div>
            </form>
        </div>
                
    </div>

    <div class="info d-flex justify-content-center mt-4">
       <div class="info-message">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible alert-block fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
            
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
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