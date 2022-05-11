<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <?php 
    include "menu.php"; 
    include "category_actions.php";

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        if($action == 'add') {
            addCategory($_POST['name'], $_POST['description']);
        } elseif($action == 'update') {
            updateCategory($_POST['id'], $_POST['name'], $_POST['description']);
        } elseif($action == 'delete') {
            deleteCategory($_POST['id']);
        }
    } else {
        $action = "";
    }

    ?>

    <div class="d-flex justify-content-center mt-5">
        <!-- List -->
        <div class="card" style="width: 50%;">
            <div class="card-header">
                <h5 class="card-title">Categories List</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $categories = getCategories();
                    foreach ($categories as $category) {
                        echo "<tr>";
                        echo "<td>" . $category['id'] . "</td>";
                        echo "<td>" . $category['name'] . "</td>";
                        echo "<td>" . $category['description'] . "</td>";
                        echo "<td>";
                        echo "<a href='categories.php?action=edit&id=" . $category['id'] . "' class='btn btn-primary'>Edit</a>";
                        echo "<a href='categories.php?action=delete&id=" . $category['id'] . "' class='btn btn-danger'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }   
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>