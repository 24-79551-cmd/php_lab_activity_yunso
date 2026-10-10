<?php include 'dbcon.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">User Management System</h1>

        <div class="row">
            <div class="col-md-4">
                <h5> Add New User</h5>
                <form method="POST" action="add.php">
                    <div class="mb-3">
                        <label style="font-family: sans-serif;">Full Name</label><br>
                         <input type="text" name="name" placeholder="Enter Your Name" required>
                    </div>
                    <div>
                        <label style="font-family: sans-serif;">Email Address</label><br>
                        <input type="text" name="email" placeholder="Enter Your Email Address" required><br>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            <div class="col-md-8">
                <h5>Registered Users</h5>
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>