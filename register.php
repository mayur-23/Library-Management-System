
<?php
$servername="localhost";
$username="root";
$password="";
$db="lms";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}
/*else {
  echo "done";
}
echo $_POST[name];
$query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile],'$_POST[address]')";
$query_run = mysqli_query($conn,$query);
if($query_run){
  echo "done";
}*/


if(isset($_POST['button'])){
  echo "done";

  $t1=$_POST['name'];
  $t2=$_POST['email'];
  $t3=$_POST['password'];
  $t4=$_POST['mobile'];
  $t5=$_POST['address'];

  echo$t1;

//  $query =mysqli_query($conn,"INSERT INTO 'users'('name', 'email', 'password', 'mobile', 'address') VALUES ('$t1','$t2','$t3','$t4','$t5')");
  $query = "insert into users values(null,'$t1','$t2','$t3',$t4,'$t5')";
  $query_run = mysqli_query($conn,$query);
//  if($query_run){
  //  echo "done";
//  }

}


?>
<script type="text/javascript">
	alert("Registered successfully...");
	window.location.href = "index.php";
</script>
