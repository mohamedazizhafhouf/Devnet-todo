<style>
   
.container{
    border:2px solid black;
}

.addField{
    width:50%;
}
.formbox{
    border:2px solid red;
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

    <div class="fdata">
        <div class="showTask">

        </div>
    </div>
    
</div>