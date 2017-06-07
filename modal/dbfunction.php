<?php
function validate_data($data,$c)
{

  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($c,$data);
  return $data;    

}
function admindelete()
{
    $con=getConnection();

     $sql3="DELETE FROM newad WHERE id=".$_REQUEST['delete_id'].";";
            $result3=$con->query($sql3);
            
     $sql4="DELETE FROM verified WHERE id=".$_REQUEST['delete_id'].";";
            $result4=$con->query($sql4);
            echo '<script> location.replace("index.php?p=adminview"); </script>';
}
  
function insertfeed()
{
      $con=  getConnection();
    $query="insert into feedback(name, email, contact, reviews) values(?,?,?,?)";
    $stmt=$con->prepare($query);
   
    $stmt->bind_param("ssss",$name,$email,$contact,$reviews);
    $name= $_REQUEST['n1'];
    $email=$_REQUEST['n2'];
    $contact=$_REQUEST['n3'];
    $reviews=$_REQUEST['n4'];
     $stmt->execute() or die(mysqli_error($con));
 
}
function insertVerify()
{
   



    $con=  getConnection();
    $q="insert into verified select * from newad WHERE id=".$_REQUEST['user_id'].";";
     $result3=$con->query($q);
            echo '<script> location.replace("index.php?p=adminview"); </script>';
     
}
function insertValues()
{
   



    $con=  getConnection();
    $query="insert into newad(book,category,amount,name,number,email,password,feedback,image) values(?,?,?,?,?,?,?,?,?)";
    $stmt=$con->prepare($query);   
    $stmt->bind_param("ssissssss",$book,$category,$amount,$name,$number,$email,$pass,$feedback,$img);
    $book= $_REQUEST['book_name'];
    $category=$_REQUEST['category'];
   // $addetails=$_REQUEST['description'];
    $amount=$_REQUEST['amount'];
    $name= $_REQUEST['name'];
    $number=$_REQUEST['number'];
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['password'];
    $feedback=$_REQUEST['feedback'];
     $image = $_FILES['image']['tmp_name'];
     $img = file_get_contents($image);
     $stmt->execute() or die(mysqli_error($con));
     
}
function displayVerified()
{
  $con=  getConnection();
    $q="select * from verified";
    $stmt=$con->prepare($q);
    $stmt->bind_result($id,$book,$category,$amount,$name,$number,$email,$password,$feedback,$image);
    $stmt->execute() or die(mysqli_error($con));
    
 
 $c=0;
 $a="";
 while($stmt->fetch())
{
     $a[$c]['id']=$id;
        $a[$c]['book']=$book;
        $a[$c]['category']=$category;
      //  $arr[$c]['addetails']=$addetails;
        $a[$c]['amount']=$amount;
        $a[$c]['name']=$name;
        $a[$c]['number']=$number;
        $a[$c]['email']=$email;
        $a[$c]['password']=$password;
        $a[$c]['feedback']=$feedback;
        $a[$c]['image']=$image;
        
        
        ++$c;
}
 

     
     
    return $a;
}
function UserSpecific()
{
    $con=  getConnection();
    $q="SELECT * FROM verified WHERE email = '" . $_SESSION['email'] . "'";
    $stmt=$con->prepare($q);
    $stmt->bind_result($id,$book,$category,$amount,$name,$number,$email,$password,$feedback,$image);
    $stmt->execute() or die(mysqli_error($con));
    
 
 $c=0;
 $arr="";
 while($stmt->fetch())
{
     $arr[$c]['id']=$id;
        $arr[$c]['book']=$book;
        $arr[$c]['category']=$category;
      //  $arr[$c]['addetails']=$addetails;
        $arr[$c]['amount']=$amount;
        $arr[$c]['name']=$name;
        $arr[$c]['number']=$number;
        $arr[$c]['email']=$email;
        $arr[$c]['password']=$password;
        $arr[$c]['feedback']=$feedback;
        $arr[$c]['image']=$image;
        
        
        ++$c;
}
 

     
     
    return $arr; 
}
function display()
{
  $con=  getConnection();
    $q="select * from newad";
    $stmt=$con->prepare($q);
    $stmt->bind_result($id,$book,$category,$amount,$name,$number,$email,$password,$feedback,$image);
    $stmt->execute() or die(mysqli_error($con));
    
 
 $c=0;
 while($stmt->fetch())
{
     $arr[$c]['id']=$id;
        $arr[$c]['book']=$book;
        $arr[$c]['category']=$category;
      //  $arr[$c]['addetails']=$addetails;
        $arr[$c]['amount']=$amount;
        $arr[$c]['name']=$name;
        $arr[$c]['number']=$number;
        $arr[$c]['email']=$email;
        $arr[$c]['password']=$password;
        $arr[$c]['feedback']=$feedback;
        $arr[$c]['image']=$image;
        
        
        ++$c;
}
 

     
     
    return $arr;
}
?>