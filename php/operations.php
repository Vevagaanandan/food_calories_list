<?php 

    session_start();

    include('php/db.php');

    $foodName = '';
    $foodBrand = '';
    $foodCalories = '';

    // Create button
    if(isset($_POST['create']))
    {
        $foodName = mysqli_real_escape_string($conn, $_POST['food_name']);
        $foodBrand = mysqli_real_escape_string($conn, $_POST['food_brand']);
        $foodCalories = mysqli_real_escape_string($conn, $_POST['food_caloriesPer']);

        if($foodName && $foodBrand && $foodCalories)
        {
            $sql = "INSERT INTO foods_list SET
            Food_name = '$foodName',
            Food_brand = '$foodBrand',
            Calories = '$foodCalories'
            ";

            // Execute the Query
            $res = mysqli_query($conn, $sql);

            if($res == true)
            {
                $_SESSION['message'] = "<h1 class='msg success'>Created successfully...!</h1>";
                header('location: ../../');
                exit();
                
            }
            else
            {
                $_SESSION['message'] = "<h1 class='msg error'>Create error.</h1>";
                header('location: ../../');
                exit();
            }
        }
    }


    // Delete Button
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];

        $sql = "DELETE FROM foods_list WHERE ID = $id";

        // Execute the SQL Query
        $res3 = mysqli_query($conn, $sql);

        // Check whether the query is executed or not
        if($res3 == true)
        {
            $_SESSION['message'] = "<h1 class='msg success'>Delete Success...!</h1>";
            header('location: ../../');
            exit();         
        }
        else
        {
            $_SESSION['message'] = "<h1 class='msg error'>Delete Failed.</h1>";
            header('location: ../../');
            exit();
        }
    }

    // Update button
    if(isset($_POST['update']))
    {

        $id2 = mysqli_real_escape_string($conn, $_POST['food_id']);
        $foodName2 = mysqli_real_escape_string($conn, $_POST['food_name']);
        $foodBrand2 = mysqli_real_escape_string($conn, $_POST['food_brand']);
        $foodCalories2 = mysqli_real_escape_string($conn, $_POST['food_caloriesPer']);

        if($foodName2 && $foodBrand2 && $foodCalories2)
        {
            $sql2 = "UPDATE foods_list SET 
                Food_name='$foodName2', 
                Food_brand='$foodBrand2', 
                Calories='$foodCalories2'
                WHERE ID = $id2 
                ";

            // Execute the SQL Query
            $res2 = mysqli_query($conn, $sql2);

            // Check whether the query is executed or not
            if($res2 == true)
            {
                $_SESSION['message'] = "<h1 class='msg success'>Updated successfully...!</h1>";
                header('location: ../../');
                exit();
            }
            else
            {
                $_SESSION['message'] = "<h1 class='msg error'>Update failed.</h1>";
                header('location: ../../');
                exit();
            }
        }
    }

    // Edit button
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $sql = "SELECT * FROM foods_list WHERE id=$id";

        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($res);

        $foodName = $row['Food_name'];
        $foodBrand = $row['Food_brand'];
        $foodCalories = $row['Calories'];
    }
?>