<!DOCTYPE html>
<html>
   <head>
      <title>Hello Javascript</title>
      <script type = "text/javascript">
         function validateForm()  {
             var u = document.getElementById("username").value;
             var p = document.getElementById("password").value;
 
             if(u <= 0) {
                 alert("Vui lòng nhập số lớn hơn 0");
                 return false;
             }
             if(p == "") {
                 alert("Please enter you Password");
                 return false;
             }
 
             alert("Nhập đúng")
 
             return true;
         }
      </script>
   </head>
   <body>
 
      <h2>Enter your Username and Password</h2>
 
      <div style="border:1px solid #ddd; padding: 5px;">
         <form method="GET" action="process-action.html" onsubmit = "return validateForm()">
            Username: <input type="text" name="username" id="username"/>
            <br><br>
            Password: <input type="password" name = "password" id="password"/>
            <br><br>
            <button type="submit">Submit</button>
         </form>
      </div>
 
   </body>
</html>