 <!-- HEADER -----------------------------------------  -->
 <?php
   require_once('templates/header.php');
   ?>
 <!-- MAIN -----------------------------------------  -->
 <form action="get.php" method="get">
    <label>Your name</label>
    <input type="text" name="name"></input>
    <label>Your hobbies</label>
    <textarea type="text" name="hobbies"></textarea>

    <label>Your gender</label>
    <div>
       <label>
          <input type="radio" value="female" name="gender" checked />Female
       </label>

       <label>
          <input type="radio" value="male" name="gender"/>Male
       </label>
    </div>

    <button type="submit">SEND</button>
 </form>
 <!-- FOOTER -----------------------------------------  -->
 <?php
   require_once('templates/footer.php');
   ?>