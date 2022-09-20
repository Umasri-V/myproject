<?php
class database
{
    public $con;
// database conection
    public function __construct()
    {
        $this->con = mysqli_connect("localhost", "root", "Umasri@123", 'student');
        if (!$this->con) {
            echo "not connected";
        }
    }


    // function insert records
    public function insert($post)
    {
        $username = $post['username'];
        $email = $post['email'];
        $password = $post['password'];
        $confirmpassword = $post['confirmpassword'];

        $sql = "insert into details(username,email,password,confirmpassword) values('$username','$email','$password','$confirmpassword')";
        //execute query
        $res = $this->con->query($sql);
        if ($res) {
            //echo "data inserted";
            header('location:admin.php?msg=Inserted Successfully');
        } else {
            echo "error" . $sql . "<br>" . $this->con->error;
            //die(mysqli_error($conn));
        }
    }

    //display record

    public function display()
    {
        $sql = "SELECT * FROM  details";
        $res = $this->con->query($sql);
        while ($row = $res->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    //edit

    public function displayid($editid)
    {
        $sql = "select * from details where id='$editid'";
        $res = $this->con->query($sql);
        if ($res->num_rows == 1) {
            $row = $res->fetch_assoc();
            return $row;
        }

    }

    //update record

    public function update($post)
    {
        $username = $post['username'];
        $email = $post['email'];
        $password = $post['password'];
        $confirmpassword = $post['confirmpassword'];
        $editid = $post['hid'];

        $sql = "update details set username='$username',email='$email',password='$password',confirmpassword='$confirmpassword' where id='$editid'";
        //execute query
        $res = $this->con->query($sql);
        if ($res) {
            //echo "data inserted";
            header('location:admin.php?msg=updated Successfully');
        } else {
            echo "error" . $sql . "<br>" . $this->con->error;
            //die(mysqli_error($conn));
        }
    }

    //delete

    public function deleterecord($delid){
        $sql="delete from details where id='$delid'";
        $res=$this->con->query($sql);
        if($res){
            header('location:admin.php?msg=deleted successfully');
        }
        else{
            echo "error" . $sql . "<br>" . $this->con->error;
        }
    }

}
