<!DOCTYPE html>
<html lang="en">
<head>
    <title>oop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Register form</h2>
    <form action="admin.php" method="post">
        <div class="mb-3 mt-3">
            <label >User Name:</label>
            <input type="text" class="form-control" placeholder="Enter username" name="username">
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" class="form-control"  placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label>Password:</label>
            <input type="password" class="form-control"  placeholder="Enter password" name="password">
        </div>
        <div class="mb-3">
            <label>Confirm Password:</label>
            <input type="password" class="form-control"  placeholder="Enter confirm password" name="confirmpassword">
        </div>
        <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
    </form>
</div>

</body>
</html>

