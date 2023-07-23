<?php
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Creation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add a Student
                            <a href="index.php" class='btn btn-danger float-end'> BACK </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                            <label> Student ID</label>
                            <input type="text" name="id" class="form-control" value="Auto-Generated" readonly>
                            </div>
                            <div class="mb-3">
                            <label> Student Name</label>
                            <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                            <label> Student Class</label>
                            <input type="text" name="class" class="form-control">
                            </div>
                            <div class="mb-3">
                            <label> Student Marks</label>
                            <input type="text" name="mark" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save" class="btn btn-primary">INSERT</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>