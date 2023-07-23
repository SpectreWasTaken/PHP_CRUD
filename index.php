<?php
require 'connection.php'

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Student Details
                            <a href="student-create.php" class='btn btn-danger float-end'>Add Students</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Marks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT * FROM student.result';
                                $query_run = mysqli_query($conn, $query);

                                if(mysqli_num_rows($query_run) > 0){
                                    //Looping through all the students in the database to write their information
                                    foreach($query_run as $student){
                                ?>
                                <tr>
                                    <td><?=$student['id'];?></td>
                                    <td><?=$student['name'];?></td>
                                    <td><?=$student['class'];?></td>
                                    <td><?=$student['marks'];?></td>
                                    
                                    <td>
                                        <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="student-edit.php?id=<?= $student['id']?>" class="btn btn-success btn-sm">Edit</a>
                                        <form action="code.php" method="POST">
                                            <button type="submit" name="delete" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                                    }
                                     } else{
                                        echo "<h5> No Record Found</h5>";
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>