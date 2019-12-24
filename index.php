<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Todo App</title>
    </head>
    <body>
        <div class="container" style="margin-top:50px;">
            <h1 class="text-center">Todo List</h1><br>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <button type="button" name="Add" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
                    <button type="button" name="print" class="btn btn-warning float-right">Print</button>
                    <br><br>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="" action="index.html" method="post">
                                <div class="form-group">
                                    <label>Task Name</label>
                                    <input type="text" name="task" required class="form-control">
                                </div>
                                <input type="submit" name="send" value="send" class="btn btn-success">
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Task</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td class="col-md-10">Mark</td>
                          <td><a href="" class="btn btn-success">Edit</a></td>
                          <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>

        </div>


    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" charset="utf-8"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>
