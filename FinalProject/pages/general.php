<!DOCTYPE html>
<html>
   <html lang="en">

      <head>
         <title> Cougar-Lifestyle </title>
         <meta charset="utf-8" />
         <!-- Link to CSS file -->
         <link rel="stylesheet" href="/team_e/css/nav.css" type="text/css">
         <link rel="stylesheet" href="/team_e/css/contact.css" type="text/css">
         <script src="generalComment.js"></script>
         <?php include dirname(__DIR__)."/nav.php"; ?>
      </head>

      <body>

         <div class="restOfPage">
         </br>
         <h2 id="head">
            General Posts
         </h2>
         </br>
         <center><img src="/team_e/assets/cougarbanner.jpg" alt="CSUSM Cougars"></center>
         <div class="form">
            <fieldset>
               <legend> GET COMMENTS </legend>
               <form name="post-comments">
                  <input name="category" minlength="3" maxlength="20" type="text" value="test" size="1" style="display: none" required><br>
                  <input name="submit" type="submit" value="Display Comments" onclick="return getComments(category.value);">
               </form>
               <div id="user-comment-table">
                  <table style="width:100%">
                     <tr>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Date Posted</th>
                     </tr>
                  </table>
               </div>
            </fieldset>
         </div>
         <div class="form">
            <fieldset>
               <legend> COMMENT HERE </legend>
               <form name="register" action="genComment.php" method="post">
                  <input name="userComment" minlength="1" maxlength="140" size="75" type="text" placeholder="enter some text" required><br>      
                  <input name="submit" type="submit">
               </form>
            </fieldset>
            </form>
         </div>
		 </div>
      </body>
   </html>