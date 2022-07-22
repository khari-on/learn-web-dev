<?php
    $name=$gender=$email=$comment=$website="";
    $nameErr=$emailErr=$genderErr='';
    if($_SERVER['REQUEST_METHOD']==="POST"){
//name
        if(empty($_POST['userName'])){
              $nameErr='Name is required';
        }else{

            if(!preg_match("/^[a-zA-Z-']*$/",$name)){
             $nameErr="UserName Contain only letters";
            }else{
                $name=$_POST['userName'];
            }
        }
//email
        if(empty($_POST['email'])){
            $emailErr='Email is required';
      }else{
            $email=$_POST['email'];
      } 
      //gender
      if(empty($_POST['gender'])){
        $genderErr='Gender is required';
  }else{
        $gender=$_POST['gender'];
  }

$comment=$_POST['comment'];
$website=$_POST['website'];

    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>FORMS</title>
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <form action = "<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"

    method="POST" autocomplete="off">
        <fieldset>
            <legend>Contact Us:</legend>
        <label for="userName">Name:</label>
        <input type="text" id="userName" name="userName" >
        <span>* <?php echo $nameErr ;?></span>
        <br>
        <br>
         <label for="email">Email:</label>
         <input type="text" id="email" name="email">
        <span>* <?php echo $emailErr ;?></span>

         <br>
         <br>
         <label for="website">Website:</label>
         <input type="website" id="website" name="website" >
         
         <br>
         <br>
         Comment:
         <br>
         <textarea name="comment" id="comment" cols="30" rows="10">
            
         </textarea>
         <br>
         Gender:
         <input type="radio" name='gender' value="Male">Male
         <input type="radio" name='gender' value="Female">Female
         <input type="radio" name='gender' value="Other">Other
        <span>* <?php echo $genderErr ;?></span>

         <br>
         <br>
        <button>CLICK</button>
        </fieldset>
    </form>
<hr style='height:10px;background:black;'>
<div>
   <?php

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>


</div>


</body>
</html>