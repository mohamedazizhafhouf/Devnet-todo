<style>
    .list button{
        margin-top:0.3%;
    }
    .add{
        width:50%;
    }
.todo{
    border: 2px solid blue;
}
.task {
    border: 2px solid red;
    width:50%;
}
.task h4{
    margin-top:1.2vh;
    color:white;
}

.t{
    border: 2px solid green;
    width:100%;
}

.input-group-text{
    height:100%;
}
.container{
}
</style>
<div class="mt-4 container">
    <h1 style="color:#0092ff" class="text-center">Todo List</h1>
        <div class="add-task d-flex justify-content-center">
            <div class="add">
                <div class="input">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Add new task" aria-label="addTask" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button">Add</button>
                </div>
        </div>
  </div>

    </div>
        </div>
    <div class="todo">
        <div class="list d-flex justify-content-center">
                <div class="task d-flex justify-content-center">
                            <div class="input-group">
                                    <input type="text" value="desc" class="form-control" aria-label="Text input with checkbox">
                                    <div class="input-group-prepend">
                                        <div  class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary"><i class="fas fa-plus-square"></i></button>
                            <button style="width10%;" type="button" class="btn btn-outline-danger"><i class="fas fa-minus-square"></i></button>

        </div>
    </div>
    

    
</div>