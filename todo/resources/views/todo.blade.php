<style>
   
.container{
}

.addField{
    width:50%;
}
.formbox{
}

.task{
    width:100%;
    
}
.task .form-group{
    width:70%;
}
}
.taskgroup{
}

.list{
    width:60%;
}
.check{
    height:100%;
}
</style>
<div class="mt-4 container">

    <h1 style="color:#0092ff" class="text-center">Todo List</h1>
    <div class="formbox">

        <form class="needs-validation" action="add" method="post" novalidate>

            @csrf 
                    <div class="f d-flex justify-content-center">
                        <div class="addField form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" id="validationCustom01" name="task" placeholder="Add new task" required>
                            <div class="invalid-feedback">
                                Task is required!
                             </div>
                        </div>
                        <div class="butt">
                        <button type="submit" class="btn btn-success mb-2">Add</button>
                        </div>
                    </div>
                
        </form>
       
    </div>

    <div class="taskgroup d-flex justify-content-center">
        <div class="list">
        @foreach($tasks as $task)
        <form class="needs-validation" action="update/{{$task->idTask}}" method="post" novalidate>
            @csrf 

            <div class="task mt-4 d-flex justify-content-center">
                <div class="form-group">
                        <input type="text" name="gtask" value="{{$task->desc}}" class="form-control" id="validationCustom01" aria-label="Text input with checkbox" required>
                                 
                </div>
                        <div class="butt">
                        <button type="submit" class="ml-2 btn btn-outline-primary">Save</button>

                        </div>

                        <a href="delete/{{$task->idTask}}">
                        <button type="button" class="ml-2 btn btn-outline-danger"><i class="fas fa-minus-square"></i></button>
                        </a>
        </form>                 
        </div>
        @endforeach
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