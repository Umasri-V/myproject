<?php
include 'con.php';

$obj=new database();

//insert record
if (isset($_POST['submit'])){
    echo $obj->insert($_POST);
}

//update record

if (isset($_POST['update'])){
    echo $obj->update($_POST);
}

//delete record

if(isset($_GET['deleteid'])){
    $delid=$_GET['deleteid'];
    echo $mydel=$obj->deleterecord($delid);
}


if (isset($_POST['delete'])){
    echo $obj->deleterecord($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<a href="register.php" class="btn btn-success" style="margin: 40px 40px">add</a>
<div class="container">
    <h2 style="color: red">Display Records</h2><br>
    <?php
    //insert
    if(isset($_GET['msg'])) {
        $msg = $_GET['msg'];
        echo '<div class="alert alert-danger">' . $msg . '  </div>';
    }
    ?>
    <table class="table">
        <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Confirm password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $data=$obj->display();
        foreach ($data as $value){
            ?>

            <tr>
                <td><?php  echo $value['username']; ?></td>
                <td><?php  echo $value['email']; ?></td>
                <td><?php  echo $value['password']; ?></td>
                <td><?php  echo $value['confirmpassword']; ?></td>
                <td>
                    <a href="edit.php?editid=<?php echo $value['id'];?>" class="btn btn-info"> edit</a>
                    <a href="admin.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger"> delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</div>
</body>
</html>
