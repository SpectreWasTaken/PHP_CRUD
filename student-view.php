<?php
require 'connection.php'
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Editing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            View Details for a Student
                            <a href="index.php" class='btn btn-danger float-end'> BACK </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        //Getting the information to view on the page
                            if(isset($_GET['id'])){
                              $student_id = $_GET['id'];
                              $query ="SELECT * FROM result WHERE id='$student_id'";
                              $query_run = mysqli_query($conn, $query);

                              if(mysqli_num_rows($query_run) > 0){
                                $student = mysqli_fetch_array($query_run);
                                ?>
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                            <label> Student ID</label>
                            <input type="text" name="id" value="<?=$student['id'];?>" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                            <label> Student Name</label>
                            <input type="text" name="name" value="<?=$student['name'];?>" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                            <label> Student Class</label>
                            <input type="text" name="class" value="<?=$student['class'];?>" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                            <label> Student Marks</label>
                            <input type="text" name="mark"value="<?=$student['marks'];?>" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update" class="btn btn-primary" hidden>UPDATE</button>
                            </div>


                        </form>
                        <?php
                    } else{
                        echo "<h4> No Such Data Found! </h4>";
                      }
                    }
                ?>
                </div>
                </div>
            </div>
        </div>
    </div>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>