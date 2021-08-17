<?php
spl_autoload_register(function ($class_name) {

    include "classes/" . $class_name . ".php";
});

?>

<?php $user = new Student(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud App With PHP OOP PDO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1>CRUD App With PHP OOP & PDO</h1>
                </div>
                <div class="col-lg-2">
                    <a class="btn btn-primary" href="index.php">Create Data</a>
                </div>
            </div>
        </div>
    </header>



    <section class="main-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">


                    <?php

                    if (isset($_POST['create'])) {

                        $name = $_POST['name'];
                        $dept = $_POST['dept'];
                        $age = $_POST['age'];

                        $user->setName($name);
                        $user->setDept($dept);
                        $user->setAge($age);

                        if ($user->insertData()) {

                            echo "<span class='text-success fw-bold'>Data inserted successfully...</span>";
                        }
                    }


                    ?>

                    <?php

                    if (isset($_POST['update'])) {
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $dept = $_POST['dept'];
                        $age = $_POST['age'];


                        $user->setName($name);
                        $user->setDept($dept);
                        $user->setAge($age);

                        if ($user->updateData($id)) {
                            echo "<span class='text-success fw-bold'>Data updated successfully...</span>";
                        }
                    }


                    ?>

                    <?php

                    if (isset($_GET['action']) && $_GET['action'] == 'delete') {

                        $id = (int)$_GET['id'];

                        if ($user->delete($id)) {
                            echo "<span class='text-danger fw-bold'>Data Deleted successfully...</span>";
                        }
                    }

                    ?>

                        <?php

                        if (isset($_GET['action']) && $_GET['action'] == 'edit') {

                            $id = (int)$_GET['id'];

                            $result = $user->readById($id);
                        

                        ?>




                        <form action="" method="POST">
                            <div class="mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="hidden" name="id" value="<?php echo $result['id']; ?>" required>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $result['name']; ?>" required>
                            </div>
                            <div class="mb-2">
                                <label for="dept" class="form-label">Department</label>
                                <input type="text" class="form-control" id="dept" name="dept" value="<?php echo $result['dep']; ?>" required>
                            </div>
                            <div class="mb-2">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="age" name="age" value="<?php echo $result['age']; ?>" required>
                            </div>
                            <div>
                                <input class="btn btn-primary" type="submit" name="update" value="Update">
                            </div>
                        </form>

                    <?php } else {

                    ?>
                        <form action="" method="POST">
                            <div class="mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="mb-2">
                                <label for="dept" class="form-label">Department</label>
                                <input type="text" class="form-control" id="dept" name="dept" placeholder="Your Department" required>
                            </div>
                            <div class="mb-2">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="Your Age" required>
                            </div>
                            <div>
                                <input class="btn btn-primary" type="submit" name="create" value="Submit">
                            </div>
                        </form>

                    <?php
                    }

                    ?>





                </div>
                <div class="col-lg-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Age</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 0;
                            foreach ($user->readAll() as $key => $value) {

                                $i++;

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $value['name']; ?></td>
                                    <td><?php echo $value['dep']; ?></td>
                                    <td><?php echo $value['age']; ?></td>
                                    <td><a href="index.php?action=edit&id=<?php echo $value['id']; ?>" class="me-2 btn btn-warning">Edit</a><a href="index.php?action=delete&id=<?php echo $value['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete ?')">Delete</a></td>

                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>