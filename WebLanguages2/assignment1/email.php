
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<link rel="stylesheet" href="styles.css" type="text/css">
  <title>Send an Email</title>
</head>
  <body class="body">

<?php include './header.php';?>

    <?php
    echo '
    <form name="sign-up" method="post" action="submit.php">
    <h2>Sign me up!</h2>
      <div>
        <label>Username/Email: (Text Input) </label>
        <input id="email" type="text" name="email"/>
      </div>

      <div>
        <label>Password: (Password Input) </label>
        <input id="password" type="password" name="password"/>
      </div>

      <div>
        <label>Subscribe to email list: (Radio Button) </label>
        <span>Yes</span>
        <input id="subscribe" type="radio" name="subscribe"/>        
        <span>No</span>
        <input id="subscribe" type="radio" name="subscribe"/>
      </div>

      <div>
        <label>Gender: (Drop Down List (DDL)) </label>
        <select id="gender" name="gender">
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>

      <div class="textarea-div">
        <label>About you: (Text Area) </label>
        <textarea id="about-you" name="about-you"></textarea>
      </div>
      <button class="btn" type="submit">Submit</button>
    </form>
    ';?>

  </body>
</html>
