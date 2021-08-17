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
                <div class="col">
                    <h1>CRUD App With PHP OOP & PDO</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="main-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <form action="">
                        <div class="mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-2">
                            <label for="dept" class="form-label">Department</label>
                            <input type="text" class="form-control" id="dept" placeholder="Your Department">
                        </div>
                        <div class="mb-2">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control" id="age" placeholder="Your Age">
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>Rayhan</td>
                                <td>CSE</td>
                                <td>24</td>
                                <td><button class="me-2 btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>EEE</td>
                                <td>25</td>
                                <td><button class="me-2 btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Shimanto</td>
                                <td>ETE</td>
                                <td>24</td>
                                <td><button class="me-2 btn btn-warning">Edit</button><button class="btn btn-danger">Delete</button></td>
                            </tr>
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