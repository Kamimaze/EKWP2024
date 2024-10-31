<?php  require_once(".\layout\header.php") ?>
    <div class="signup-section" id="signup">
         <h1 class="container px-4 px-lg-5">Login</h1>
         <br>
         <form>
             <div class="container px-4 px-lg-5">
                 <label for="username">Benutzername:</label>
                 <input type="text" class="form-control" id="username" placeholder="Enter username">
             </div>
             <br>
             <div class="container px-4 px-lg-5">
                 <label for="password">Passwort:</label>
                 <input type="password" class="form-control" id="password" placeholder="Enter password">
                 <br>
                 <button class="btn btn-primary" id="submitButton " type="submit">Einloggen</button>
             </div>
             
      </form>
    </div>
    <?php  require_once(".\layout\\footer.php") ?>