<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #455A64;
            color: #ffffff;
            padding: 20px; /* Add space between page edge and containers */
        }

        .rounded-corners {
            border-radius: 15px; /* Add rounded corners to containers */
        }

        .bg-white {
            background-color: #607D8B !important;
            padding: 20px; /* Add space inside containers */
        }

        .custom-block {
            border: 1px solid #333;
        }

        .custom-block h5 {
            color: #ffffff;
        }

        .form-group label {
            color: #ffffff;
        }

        .form-control {
            background-color: #B0BEC5;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="row">
            <!-- First Container -->
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-7">
                <div class="custom-block bg-white shadow-lg rounded-corners">
                    <h5 class="mb-4">ENTER INFORMATION</h5>
                    <form action="<?=site_url('/add_account');?>" method="post">
                            
                            <input type="hidden" name="id" value="<?php if (isset($pro['id'])) {echo $pro['id'];}?>">
                                                                
                            <label for="username">Username :</label><br>
                            <input type="text" class="form-control" name="username"  placeholder="Enter username..." required><br>
                        
                            <label for="password">Password :</label><br>
                            <input type="text" class="form-control" name="password"  placeholder="Enter password..." required><br>
                        
                            <label for="email">Email :</label><br>
                            <input type="text" class="form-control" name="email"  placeholder="Enter email..." required><br>
                       
                            <label for="email">Usertype :</label><br> 
                            <select name="usertype" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select> <br> 

                        <button type="submit" value="add_account" class="btn btn-primary">Save</button><br>
                    </form>
                </div>
            </div>

            <!-- Second Container -->
            <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-7">
                <div class="custom-block bg-white shadow-lg rounded-corners">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>USERNAME</th>
                                <th>PASSWORD</th>
                                <th>EMAIL</th>
                                <th>USER TYPE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['password']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['usertype']; ?></td>
                                    <td><a href="<?site_url('/delete_data'.$user['id'].'' ); ?>" class="btn btn-primary">Delete</a> || <a href="/edit/<?= $user['id'] ?>" class="btn btn-success">Edit</a></td>
                                    </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
