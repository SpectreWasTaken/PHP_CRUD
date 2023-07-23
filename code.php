<?php
//Needed for database connectivity
require 'connection.php';

//Checking for the Delete button on index.php
if(isset($_POST['delete'])){

    $student_id = mysqli_real_escape_string($conn, $_POST['delete']);
    $query = "DELETE FROM result WHERE id =$student_id";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("Location: index.php");
        exit(0); 
    } else{
        header("Location: index.php");
        exit(0);
    }
}


//checking on the update button in the student-edit.php
if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $course = mysqli_real_escape_string($conn, $_POST['class']);
    $mark = mysqli_real_escape_string($conn, $_POST['mark']);

    $query = "UPDATE result SET name='$name', class = '$course', marks='$mark' WHERE id=$id";
    $query_run =mysqli_query($conn, $query);

    if($query_run){
        header("Location: index.php");
        exit(0);
    } else{
        header("Location: index.php");
        exit(0);
    }
}

//Checking on the save button on student-create.php
if(isset($_POST['save'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $course = mysqli_real_escape_string($conn, $_POST['class']);
    $mark = mysqli_real_escape_string($conn, $_POST['mark']);

    $query = "INSERT INTO result (name, class, marks) VALUES (' $name ',' $course ',' $mark ')";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        header("Location: index.php");
        exit(0);
    }
    else{
        header("Location: index.php");
        exit(0);

    }
}
?>