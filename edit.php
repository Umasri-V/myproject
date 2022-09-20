<?php
include 'con.php';

$obj=new database();

if (isset($_POST['update'])){
$obj->update($_POST);
}
//edit
if(isset($_GET['editid'])) {
    $editid = $_GET['editid'];
    $myrecord = $obj->displayid($editid);
}

?>

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
        <div>

            <input type="hidden" name="id" value=<?php echo $myrecord['id'];?> >

        </div>
        <div class="mb-3 mt-3">
            <label >User Name:</label>
            <input type="text" name="username" value=<?php echo $myrecord['username'];?> >
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" value=<?php echo $myrecord['email'];?> >
        </div>
        <div class="mb-3">
            <label>Password:</label>
            <input type="password" name="password" value=<?php echo $myrecord['password'];?> >
        </div>
        <div class="mb-3">
            <label>Confirm Password:</label>
            <input type="password" name="confirmpassword" value=<?php echo $myrecord['confirmpassword'];?> >
        </div>

        <input type="hidden" name="hid" value="<?php echo$myrecord['id'];?> ">

        <button type="submit"  name="update" class="btn btn-primary"> Update</button>
    </form>
</div>
</body>
</html>


