<?php
    // include('php/db.php');
    require_once "php/operations.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Calories List</title>

    <!-- CSS File Link -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="title">
        <h1>Food Calories List</h1>
    </div>

    <?php 
        if (isset($_SESSION['message']))
        {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }     
    ?>

    <section class="formDisplay">
        <form method="post" action="index.php/php/operations.php">
            <table class="tableDisplayOne">
                <tr>
                    <td class="foodDisplay-text">Food</td>
                    <td>
                        <input class="foodDisplay-input" value="<?php echo $foodName; ?>" type="text" name="food_name" placeholder="Enter food name" >
                    </td>
                </tr>
                <tr>
                    <td class="foodDisplay-text">Food Brand</td>
                    <td>
                        <input class="foodDisplay-input" value="<?php echo $foodBrand; ?>" type="text" name="food_brand" placeholder="Enter brand name" >
                    </td>
                </tr>
                <tr>
                    <td class="foodDisplay-text">Calories per 100gm</td>
                    <td>
                        <input class="foodDisplay-input" value="<?php echo $foodCalories; ?>" type="text" name="food_caloriesPer" placeholder=" Enter calories per 100gm" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="food_id" value="<?php echo $id; ?>">
                    </td>
                </tr>
            </table>
            <div class="btn-row">
                    <button name="create" >Create</button>
                    <button name="update" >Update</button>
                </div>
        </form>

        <?php
            
        ?>
    </section>

    <section class="tableDisplay">
        <table id="tableTwo">
            
        <?php
        // SQL query to get all data from Database
                    $sql = "SELECT * FROM foods_list";

                    // Execute the Query
                    $res = mysqli_query($conn, $sql);

                    // Rows
                    $count = mysqli_num_rows($res);

                    if($count > 0)
                    {
                        ?>
                            <tr>
                                <th class="tblHeaderClass">ID</th>
                                <th class="tblHeaderClass">Food</th>
                                <th class="tblHeaderClass">Food Brand</th>
                                <th class="tblHeaderClass">Calories per 100gm</th>
                                <th class="tblHeaderClass">Edit</th>
                            </tr>

                        <?php

                        // If got data in table
                        while($row = mysqli_fetch_assoc($res))
                        {
                            $id = $row['ID'];
                            $foodName = $row['Food_name'];
                            $foodBrand = $row['Food_brand'];
                            $foodCalorie = $row['Calories'];
                        ?>

                            <tr class="theRow">
                                <td data-id="<?php echo $id; ?>"><?php echo $id; ?></td>
                                <td data-id="<?php echo $id; ?>"><?php echo $foodName; ?></td>
                                <td data-id="<?php echo $id; ?>"><?php echo $foodBrand; ?></td>
                                <td data-id="<?php echo $id; ?>"><?php echo $foodCalorie; ?></td>
                                <td>
                                    

                                    <a href="index.php?edit=<?php echo $id; ?>" class="edit-btn cursorPointer editDelete-btn" data-id="<?php echo $id; ?>">Edit</a>
                                    <a data-id="<?php echo $id; ?>" class="editDelete-btn" href="index.php/php/operations.php?delete=<?php echo $id; ?>">Delete</a>
                                </td>
                            </tr>

                        <?php
                        }
                    }
                    else
                    {
                        ?>
                            
                            <h1 class="noDataEntered">No data entered.</h1>
                            
                        <?php
                    }

                    ?>
        </table>
    </section>

    <!-- jQuery Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>