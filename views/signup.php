  

<!-- partial:index.partial.html -->
<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <link rel="stylesheet" href="../public/style.css"> 

 </head> 

 <style>
                  .error{
                    width: 100%;
                    font-size: 15px;
                    color:red ;
                    font-family: Arial, Helvetica, sans-serif;
                    display: none;
                  }
            </style>
        
 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

     <h2>Sign UP</h2> 
     <form action="../app//controllers/AuthController.php" method="post">
     <div class="form"> 

      <div class="inputBox"> 

       <input type="text"  name="fullname" required> <i>fullname</i> 

      </div> 
      <div class="inputBox"> 

       <input type="text" name="lastname" required> <i>lastname</i> 

      </div> 
      <div class="inputBox"> 

       <input type="email"  name="email" required> <i>email</i> 
       <span class="error">Vous n'avez pas saisi de données dans ce champ</span>
      </div> 
      <div class="inputBox"> 

       <input type="password" name="password" required> <i>Password</i> 
       <span class="error">Vous n'avez pas saisi de données dans ce champ</span>
      </div> 
      <div class="inputBox"> 

       <input type="number" name="phone" required> <i>phone</i> 
       <span class="error">Vous n'avez pas saisi de données dans ce champ</span>    
      </div> 

      <div class="links"> <a href="#">Forgot Password</a> <a href="./login.php">login</a> 

      </div> 

      <div class="inputBox"> 

       <input type="submit" name="signup_submit"  value="Login"> 

      </div> 

     </div>
     </form> 

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>
                <script src="../public/validationform.js"></script>
</html>
