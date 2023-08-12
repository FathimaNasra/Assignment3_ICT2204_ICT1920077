<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <title>rateman</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../images/download.jfif" type="image/icon">
    <link rel="stylesheet" href="../css/rateman.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
<script src="gallery.js"></script>
<style>
	*{

padding:0;
margin:0;
box-sizing:border-box;
}

body{
user-select: none;
box-sizing: border-box;
font-family: sans-serif;

}
/*menu bar*/
.list{
background:rgb(0,100,0);
width:100%;

position:fixed;

}
.list .hd{
font-size:4em;
margin-left:150px;
}
.list ul{
list-style: none;
display:inline-flex;
color: #fff;
}
.list ul li a{
color: #fff;
text-decoration:none;   
}
.list ul li{
/* width:120px; */
margin:15px;
padding:10px;

}

.list ul li:hover{
background:rgba(218,165,32,0.7);
/* #2bab0d; */
border-radius: 3px;
}
.list .fas{
margin-right: 8px;
}

/* The sidebar menu */
.sidenav {
height: 100%; /* Full-height: remove this if you want "auto" height */
width: 350px; /* Set the width of the sidebar */
position: fixed; /* Fixed Sidebar (stay in place on scroll) */
z-index: 1; /* Stay on top */
top: 73px; /* Stay at the top */
left: 0;
background-color: #111; /* Black */
overflow-x: hidden; /* Disable horizontal scroll */
padding-top: 120px;

}

/* The navigation menu links */
.sidenav a {
padding: 6px 8px 6px 16px;
text-decoration: none;
font-size: 25px;
color: #818181;
display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
color: #f1f1f1;
}

/* Style page content */
.main {
margin-left: 160px; /* Same as the width of the sidebar */
padding: 0px;

}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
.sidenav {padding-top: 15px;}
.sidenav a {font-size: 18px;}
}

.hellv{
width:84%;
height:1500px;
text-align:justify;
padding:0px;

margin-left:190px;
}
.hellv h1{


}
.styled-table {

margin: 25px 0 0 25px;
font-size: 0.9em;
font-family: sans-serif;
min-width: 400px;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table  tr th{
background-color: #009879;
color: #ffffff;
text-align: left;
}
.styled-table th,
.styled-table td {
padding: 12px 15px;
}
.styled-table td {
border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
border-bottom: 2px solid #009879;
}
.styled-table tr:hover{
font-weight: bold;
color: #009879;
}

input{
width:40%;
height:15%;
border:1px;
border-radius:5px;
padding 8px 10px 8px 10px;
margin: 10px 0px 15px 0px;
box-shadow:1px 1px 2px 1px grey;}
input[type=text] {
  border: 2px solid #4E9CAF;
  border-radius: 4px;
}
.containerform {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
margin-left:180px;
margin-right:180px;
height:200px;
}
.updatebutton1,.deletebutton1.insertbutton1{
    display: block;
    width: 185px;
    height: 35px;
text-decoration:none;
   
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
}
.updatebutton1,.deletebutton1,.insertbutton1{
 background: #4E9CAF;
}
.hellv{
padding-top:100px;
}

</style>




</head>
<body>  
<div class="list">

        <ul>
            
		<li><a href="logouta.php"><i class="fas fa-sign-out-alt"></i>Sign Out</a></li>
<center class="hd">Project Operations</center>
        </ul>
    </div>

<div class="s">
<!-- Side navigation -->
		<div class="sidenav">
  <a href="#">Admin Page</a>
  
		</div>
<!-- Update Project data -->
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'portfolio');
if(isset($_POST['update'] , $_POST['id'],$_POST['category'],$_POST['price'] ,$_POST['per'],$_POST['imageurl'],$_POST['feature1'],$_POST['feature2'],$_POST['feature3'], $_POST['feature4'] ))
{
	$id=$_POST['id'];
	$category=$_POST['category'];
	$price=$_POST['price'];
	$per=$_POST['per'];
	$imageurl=$_POST['imageurl'];
	$feature1=$_POST['feature1'];
	$feature2=$_POST['feature2'];
	$feature3=$_POST['feature3'];
	$feature4=$_POST['feature4'];

	$query="UPDATE project2 SET Category='$category', Price='$price', Per='$per', Imageurl='$imageurl', Feature1='$feature1', Feature2='$feature2', Feature3='$feature3', Feature4='$feature4' WHERE Id='$id'";
$query_run=mysqli_query($connection,$query);

if($query_run)
{
echo '<script type="text/javascript">{alert("Data is updated");}</script>' ;
 
}
else
{echo '<script type="text/javascript"> alert("Data is not updated")</script>' ;}

}
?>
<!-- delete Project data -->
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'portfolio');
if(isset($_POST['delete'] , $_POST['id'] ))
{
	$id=$_POST['id'];
	

	$query="DELETE FROM project2 WHERE Id='$id'";
$query_run=mysqli_query($connection,$query);

if($query_run)
{
echo '<script type="text/javascript">{alert("Data is deleted");}</script>' ;
 
}
else
{echo '<script type="text/javascript"> alert("Data is not deleted")</script>' ;}

}
?>

<!-- Insert Project data -->
<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'portfolio');
if(isset($_POST['insert'] ,$_POST['id'],$_POST['category'],$_POST['price'] ,$_POST['per'],$_POST['imageurl'],$_POST['feature1'],$_POST['feature2'],$_POST['feature3'], $_POST['feature4'] ))
{
	$id=$_POST['id'];
	$category=$_POST['category'];
	$price=$_POST['price'];
	$per=$_POST['per'];
	$imageurl=$_POST['imageurl'];
	$feature1=$_POST['feature1'];
	$feature2=$_POST['feature2'];
	$feature3=$_POST['feature3'];
	$feature4=$_POST['feature4'];

	$query="INSERT INTO project2 ( Category, Price, Per, Imageurl, Feature1, Feature2, Feature3, Feature4) VALUES ('$category','$price', '$per', '$imageurl', '$feature1', '$feature2', '$feature3', '$feature4')";
$query_run=mysqli_query($connection,$query);

if($query_run)
{
echo '<script type="text/javascript">{alert("Data is iNSERTED");}</script>' ;
 
}
else
{echo '<script type="text/javascript"> alert("Data is not INSERTED")</script>' ;}

}
?>

<!-- Page content -->
		<div class="main">

			<div class="hellv">

			<table class="styled-table" style="width:700px; margin-left:200px;">
			<tr>
			<th>ID</th>
			<th>Category</th>
			<th>Price</th>
			<th>Rate Per</th>
			<th>Image URL</th>
			<th>Feature 1</th>
			<th>Feature 2</th>
			<th>Feature 3</th>
			<th>Feature 4</th>
			
			</tr>
<div class="containerform">
<form  action="" method="post" id="f1">
<b><label style="margin-left:100px;" for="id" >ID   :</label></b><input style="margin-left:120px;" type="text" name="id" placeholder=" Enter Id" required><br>
<b><label style="margin-left:100px;" for="id" >Category : </label></b><input type="text" value="category" style="margin-left:100px;" name="category" placeholder=" Enter Category" ><br>
<b><label style="margin-left:100px;" for="id" >Price   :</label></b><input style="margin-left:120px;" type="text" name="price" placeholder=" Enter Price" ><br>
<b><label style="margin-left:100px;" for="id" >Rate Per: </label></b><input type="text" style="margin-left:100px;" name="per" placeholder=" Enter Rate Per" ><br>
<b><label style="margin-left:100px;" for="id" >Image URL  :</label></b><input style="margin-left:120px;" type="text" name="imageurl" placeholder=" Enter Image URL"><br>
<b><label style="margin-left:100px;" for="id" >Feature 1 : </label></b><input type="text" style="margin-left:100px;" name="feature1" placeholder=" Enter Feature 1" ><br>
<b><label style="margin-left:100px;" for="id" >Feature 2  :</label></b><input style="margin-left:120px;" type="text" name="feature2" placeholder=" Enter Feature 2" ><br>
<b><label style="margin-left:100px;" for="id" >Feature 3 : </label></b><input type="text" style="margin-left:100px;" name="feature3" placeholder=" Enter Feature 3" ><br>
<b><label style="margin-left:100px;" for="id" >Feature 4   :</label></b><input style="margin-left:120px;" type="text" name="feature4" placeholder=" Enter Feature 4" ><br>

<input type="submit" style="margin-left:240px;" class="updatebutton1" name="update" value="Update Data">
<input type="submit" style="margin-left:240px;" class="deletebutton1" name="delete" value="Delete Data">
<input type="submit" style="margin-left:240px;" class="insertbutton1" name="insert" value="Insert Data">
</form></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
	$user='root';
	$pass='';
	$db='portfolio';

	$db= new mysqli('localhost',$user,$pass,$db) or die ("unable to connect");
	
	$sql = "SELECT Id, Category, Price, Per, Imageurl, Feature1, Feature2, Feature3, Feature4 from project2";
	$result = $db->query($sql);
	
				if($result-> num_rows > 0){
			 while($row = $result->fetch_assoc()){
?>
				<tr>
<td><?php echo $row["Id"];$_SESSION['rid2']=$row["Id"];?></td>
<td><?php echo $row["Category"];?></td>
<td><?php echo $row["Price"];?></td>
<td><?php echo $row["Per"];?></td>
<td><?php echo $row["Imageurl"];?></td>
<td><?php echo $row["Feature1"];?></td>
<td><?php echo $row["Feature2"];?></td>
<td><?php echo $row["Feature3"];?></td>
<td><?php echo $row["Feature4"];?></td>

</tr>
<?php
				}
				echo "</table>";
			   }
			else{
				echo "0 result";
			    }
			
			$db-> close();
				
?>

			</div>
		</div>


</body>
</html>
