<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chat Application(Register)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container-fluid">

        <div class="card mt-2 mb-2">
            <div class="card-header text-center">
                <h4>Chat Application in PHP & MYSQL using websocket -Register</h4>
                <form action="process.php" method="post">
                    <button type="submit" name="submit" class="btn btn-primary float-right">Export Database</button>
                </form>
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>