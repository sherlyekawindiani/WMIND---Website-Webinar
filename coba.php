.COM - DOWNLOAD RAW - SEE ORIGINAL
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Show/Hide Password</title>
      	<!-- fontawesome -->
	    <link rel="stylesheet" href="assets/css/all.min.css">   
      <!-- Load bootstrap.css -->
      <link rel="stylesheet" href="./assets/css/bootstrap.css">
      <!-- Custom Css -->
      <style type="text/css">
         body {
            color: #5c5c5c;
         }
         #mybutton {
            position: relative;
            z-index: 1;
            left: 90%;
            top: -25px;
            cursor: pointer;
         }
         .myform {
            margin-top: 15%;
            background: #fafafa;
            padding: 20px;
            border: 1px solid #f4f4f4;
         }
         .myinput {
            width: 100%;
            padding: 5px;
         }
      </style>
 
   </head>
   <body class="container">
 
      <div class="row">
         <form class="col-md-4 col-md-offset-4 myform" action="" method="post">
            <h4>Show / Hide Password</h4>
            <input class="myinput" type="password" name="" value="" id="pass">
            <span id="mybutton" onclick="change()"><i class="fas fa-eye"></i></span>
         </form>
      </div>
      <br />
      <center>Copyright © 2018 kangjaz. All Rights Reserved.</center>
 
      <script type="text/javascript">
         function change()
         {
            var x = document.getElementById('pass').type;
 
            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye-slash"></i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="fas fa-eye"></i>';
            }
         }
      </script>
   </body>
</html>