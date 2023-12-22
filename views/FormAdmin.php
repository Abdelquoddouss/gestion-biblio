<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Contact us Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../public/FormAD.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
      <div class="text">
          Form  BOOK      
        </div>
      <form action="../app/controllers/BookControllers.php" method="post">
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="title" required>
               <div class="underline"></div>
               <label for="">title</label>
            </div>
            <div class="input-data">
               <input type="text" name="author" required>
               <div class="underline"></div>
               <label for="">author</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="genre"  required>
               <div class="underline"></div>
               <label for="">genre</label>
            </div>
            <div class="input-data">
               <input type="date" name="publicatin_year" required>
               <div class="underline"></div>
               <br>
               <label for="">publication_year</label>
               
            </div>
            <div class="input-data">
               <input type="text" name="total_copies" required>
               <div class="underline"></div>
               <label for="">total_copies</label>
            </div>
            <div class="input-data">
               <input type="number" name="available_copies" required>
               <div class="underline"></div>
               <label for="">available_copies</label>
            </div>
         </div>
         <div class="form-row">
         <div class="input-data textarea">
            <textarea  name="description" rows="8" cols="80" required></textarea>
            <br />
            <div  class="underline"></div>
            <label for="">description</label>
            <br />
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input name="book_submit" type="submit" value="submit">
               </div>
            </div>
      </form>
      </div>
<!-- partial -->
  
</body>
</html>
