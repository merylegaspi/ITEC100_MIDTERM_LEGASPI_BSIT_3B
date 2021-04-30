            <button style="opacity: 0;" id="successful" onclick="customAlert(' LOGIN SUCCESSFUL!',function(){
            location.href='homepage.php';
            })"></button>

            <button style="opacity: 0;" id="failed" onclick="customAlert('INVALID CODE!',function(){
              location.href='signn.php';
            })"></button>

            <button style="opacity: 0;" id="expired" onclick="customAlert('CODE EXPIRED!',function(){
              location.href='signn.php';
            })"></button>




             <button style="opacity: 0;" id="popup1" onclick="customAlert('ACCOUNT CREATED!',function(){
                 location.href='CreateAccount.php';
               })"></button>

            <button style="opacity: 0;" id="popup3" onclick="customAlert('PASSWORD DOES NOT MATCH!',function(){
                 location.href='CreateAccount.php';
               })"></button>

            <button style="opacity: 0;" id="popup4" onclick="customAlert('Password must be 8 characters.',function(){
                 location.href='CreateAccount.php';
               })"></button>

            




            <button style="opacity: 0;" id="accountverify" onclick="customAlert(' PLEASE VERIFY YOUR ACCOUNT!',function(){
                 location.href='authenticationcode.php';
            })"></button>

            <button style="opacity: 0;" id="wrongpassword" onclick="customAlert('INVALID PASSWORD!',function(){
                 location.href='signn.php';
            })"></button>


            <button style="opacity: 0;" id="wrongusername" onclick="customAlert('INVALID USERNAME!',function(){
                 location.href='signn.php';
            })"></button>


            <button style="opacity: 0;" id="usernotexist" onclick="customAlert('USER DOES NOT EXIST!',function(){
                 location.href='signn.php';
            })"></button>



            <button style="opacity: 0;" id="noupper" onclick="customAlert('Password must have an Uppercase Letter.',function(){
               })"></button>

            <button style="opacity: 0;" id="nolower" onclick="customAlert('Password must have a Lowercase Letter.',function(){
               })"></button>
               
            <button style="opacity: 0;" id="nonumber" onclick="customAlert('Password must have a Number.',function(){
               })"></button>

            <button style="opacity: 0;" id="nospecial" onclick="customAlert('Password must have a Special Character.',function(){
               })"></button>

            <button style="opacity: 0;" id="passwordchanged" onclick="customAlert('Password Changed.',function(){
               location.href='signn.php';
               })"></button>

            <button style="opacity: 0;" id="passwordnotmatched" onclick="customAlert('Password does not matched.',function(){
               })"></button>
               
            <button style="opacity: 0;" id="minimum" onclick="customAlert('Password must be 8 characters.',function(){
               })"></button>










<script>
  function myFunction() {
      var x = document.getElementById("showpassword");
      if (x.type === "password") {
      x.type = "text";
      }
      else {
      x.type = "password";
    }
  }
</script>



<script type="text/javascript">


function customAlert(m,func){
  var d=document, 
      c=d.createElement('div'),
      e=d.createElement('div'), 
      f=d.createElement('div'),
      a=d.createElement('button');
      c.style.cssText = 'background: rgba(41,42,45);color:#9aa0a6;width:400px;height:120px;position:absolute;z-index:999;top:0%;left:35%;font:13px Malgun Gothic;';
      e.style.cssText = 'background:rgba(41,42,45);padding-top:20px;padding-left:20px;color:white;font:14px Malgun Gothic;';
      f.style.cssText = 'text-align:left;padding-left:20px;padding-top:10px;';
      a.style.cssText = 'color:black;background:#799dd7;display:block;margin:0 auto;position:absolute; right:5%;top:60%;height:30px;width:60px;border: 1px;border-radius:5px;';
      a.innerText = 'OKAY';
      a.onclick = function(){
        d.body.removeChild(c);
        func();
      }
      e.innerHTML = '<b><center> HELLO! </center></b>';
      f.innerHTML = m;
      c.appendChild(e);
      c.appendChild(f);
      c.appendChild(a);
      d.body.appendChild(c);
      return false;
}


</script>



<?php

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "loginform";

        $errors = array(); 
        $date1 = "";
        $date2 = "";
        $_SESSION['success'] = "";



        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("failed to connect!");

        $db = mysqli_connect('localhost', 'root', '', 'loginform');



//LOGIN START
  if(isset($_POST['confirm'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $select = "select * from accounts where username = '$username' ";
        $select1 = "select * from accounts  where password = '$password'";
        
        $result = mysqli_query($con, $select);
        $result1 = mysqli_query($con, $select1);

        $num = mysqli_num_rows($result);
        $num1 = mysqli_num_rows($result1);


        $code = rand(100000,999999);
        $_SESSION['code'] =$code;
        $date = date("Y-m-d H:i:s");
        $cenvertedTime = date('Y-m-d H:i:s',strtotime('+6 hour +5 minutes',strtotime($date)));


        date_default_timezone_set('Asia/Taipei');
        $time = date("h:i:s");     
        $currentDate = strtotime($time);
        $expireDate = date('Y-m-d H:i:s', strtotime("+1 day"));
        $futureDate = $currentDate+(10);                
        $formatDate = date("Y-m-d", $futureDate);
        $user_id = $_POST['username'];



        
          if($num == 1){

              if($num1 == 1){
                echo "<script type='text/javascript'>document.getElementById('accountverify').click(); </script>";


                        $password = md5($password);
                        $query = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
                        $results = mysqli_query($db, $query);

                        $query = "INSERT INTO code_table (user_id, code, created, expiration) VALUES('$username', '$code', now(),'$cenvertedTime')";
                          mysqli_query($db, $query);   
                          
                        $message = "LOGIN";
                        $query = "INSERT INTO activity_log (Username, Activity, Time, Date) VALUES ('$user_id','$message','$time','$formatDate')";
                        mysqli_query($db, $query);

            }

              elseif($num1 != 1){
                echo "<script type='text/javascript'>document.getElementById('wrongpassword').click(); </script>";
              }
           }


           elseif($num1 == 1){

              if($num != 1){
                echo "<script type='text/javascript'>document.getElementById('wrongusername').click(); </script>";
                }
           }


          else{
              echo "<script type='text/javascript'>document.getElementById('usernotexist').click(); </script>";
          }

  }
  // LOGIN END








// CREATE ACCOUNT START 
if (isset($_POST['create'])) {

  $name = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $cpass = $_POST['confirmpword'];
  $uppercase = preg_match('@[A-Z]@',$cpass);
  $lowercase = preg_match('@[a-z]@', $cpass);
  $number    = preg_match('@[0-9]@', $cpass);
  $specialChars = preg_match('@[^\w]@', $cpass);




  if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirmpword"])) {
    if (strlen($_POST["password"]) <= '8') {
      echo "<script type='text/javascript'>document.getElementById('popup4').click(); </script>";
    }
    elseif(!preg_match("#[0-9]+#",$pass)) {
      echo "<script type='text/javascript'>document.getElementById('nonumber').click(); </script>";
    }
    elseif(!preg_match("#[A-Z]+#",$pass)) {
      echo "<script type='text/javascript'>document.getElementById('noupper').click(); </script>";
    }
    elseif(!preg_match("#[a-z]+#",$pass)) {
      echo "<script type='text/javascript'>document.getElementById('nolower').click(); </script>";
    } 
    elseif(!preg_match("#[^\w]+#",$pass)) {
      echo "<script type='text/javascript'>document.getElementById('nospecial').click(); </script>";
    }
    else{
      $query = "INSERT INTO `accounts`(`username`, `email`, `password`, `confirmpassword`) VALUES ('$name', '$email', '$pass', '$cpass')";
      $query_run = mysqli_query($con, $query);

      echo "<script type='text/javascript'>document.getElementById('popup1').click(); </script>";
    }
}  
    
else{
  echo "<script type='text/javascript'>document.getElementById('passwordnotmatched').click(); </script>";
}

}

// CREATE ACCOUNT END







// SUBMIT CODE
if (isset($_POST['verify'])) {
    
    $code = mysqli_real_escape_string($db, $_POST['codes']);
       
    if (empty($code)) {
      
    }
    if (count($errors) == 0) {
      
      $query = "SELECT created, expiration FROM code_table WHERE Code='$code'";
        $results = mysqli_query($db, $query);

      if (mysqli_num_rows($results) == 1) {

        if ($results->num_rows > 0) {
            
            while($row = $results->fetch_assoc()) {

              $created = $row['created'];
              $expiration = $row['expiration'];

              $date = date("Y-m-d H:i:s");
                $cenvertedTime = date('Y-m-d H:i:s',strtotime('+6 hour',strtotime($date)));


              if($cenvertedTime < $expiration){
                echo "<script type='text/javascript'>document.getElementById('successful').click(); </script>";
  
              }else{
                echo "<script type='text/javascript'>document.getElementById('expired').click(); </script>";
              }     
            
            }
        } else {
          echo "0 results";
        }
        $db->close();
        
        
      }else {
        echo "<script type='text/javascript'>document.getElementById('failed').click(); </script>";
      }
    }
    
  }
// END SUBMIT CODE


//LOGOUT
if (isset($_POST['logout'])) {
   
  date_default_timezone_set('Asia/Taipei');
  $time = date("h:i:s");    
  $currentDate = strtotime($time);
  $futureDate = $currentDate+(10);                
  $formatDate = date("Y-m-d", $futureDate);
  $user_id = $_POST['username']??"midterm";
  $message2 = "LOGOUT";

     $query = "INSERT INTO activity_log (Username,`Activity`,`Time`,`Date`) VALUES ('$user_id','$message2','$time','$formatDate')";
     $result = mysqli_query($con,$query);


     echo "<script>
     window.location.href='signn.php';
     </script>";


}
//LOGOUT


//RESET PASSWORD
if (isset($_POST['resetpassw'])) {

  date_default_timezone_set('Asia/Taipei');
  $time = date("h:i:s");    
  $currentDate = strtotime($time);
  $futureDate = $currentDate+(10);                
  $formatDate = date("Y-m-d", $futureDate);
  $user_id = $_POST['username'];

  $newpass = $_POST['newpassword'];
  $confirmpass = $_POST['confirmpassword'];

  $uppercase = preg_match('@[A-Z]@',$confirmpass);
  $lowercase = preg_match('@[a-z]@', $confirmpass);
  $number    = preg_match('@[0-9]@', $confirmpass);
  $specialChars = preg_match('@[^\w]@', $confirmpass);



if(!empty($_POST["newpassword"]) && ($_POST["newpassword"] == $_POST["confirmpassword"])) {
        if (strlen($_POST["newpassword"]) <= '8') {
          echo "<script type='text/javascript'>document.getElementById('minimum').click(); </script>";
        }
        elseif(!preg_match("#[0-9]+#",$newpass)) {
          echo "<script type='text/javascript'>document.getElementById('nonumber').click(); </script>";
        }
        elseif(!preg_match("#[A-Z]+#",$newpass)) {
          echo "<script type='text/javascript'>document.getElementById('noupper').click(); </script>";
        }
        elseif(!preg_match("#[a-z]+#",$newpass)) {
          echo "<script type='text/javascript'>document.getElementById('nolower').click(); </script>";
        } 
        elseif(!preg_match("#[^\w]+#",$newpass)) {
          echo "<script type='text/javascript'>document.getElementById('nospecial').click(); </script>";
        }
        else{
            $message = "PASSWORD CHANGED";
              $query = "INSERT INTO activity_log (Username,`Activity`,`Time`,`Date`) VALUES ('$user_id','$message','$time','$formatDate')";
              $result = mysqli_query($con,$query);


              $updatesql = "UPDATE accounts set password ='" . $_POST["newpassword"] . "', confirmpassword ='" . $_POST["confirmpassword"] . "' WHERE username='" . $user_id . "'";
              $result2 = mysqli_query($con,$updatesql);

              echo "<script type='text/javascript'>document.getElementById('passwordchanged').click(); </script>";
        }
 }  
        
else{
      echo "<script type='text/javascript'>document.getElementById('passwordnotmatched').click(); </script>";
    }

}
//RESET PASSWORD


//SETTINGS BUTTON
if (isset($_POST['settings'])) {
   
  echo "<script>
  window.location.href='ResetPassword.php';
  </script>";
}
//SETTINGS BUTTON
?>

