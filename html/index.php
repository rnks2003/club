<html>
  <head>
    <meta author="rnks" />
    <meta name="loginPage" />
    <script src="../script/login.js"></script>
    <link
      rel="styleSheet" 
      href="../style/login.css"
    />
  </head>
    <body>
    <div id="form">
      <form method="post" action="../php/login.php">
      <br />
      <label for="usr">Username : </label>
      <input class="read" type="text" id="usr" onclick="clearErr()"  name="username"/><br /><br />
      <label for="pass">Password : </label>
      <input class="read" type="password" id="pass" name="password" /><br /><button
        id="forgot"
        type="button"
        onclick="alert('Contact Developers')"
      >
        Forgot Password ?</button
        ><br />
        <span id="errMsg">
        <?php
        echo isset($login_err)?$login_err:'';
        ?>
        </span>
        <br />
      <input id="reset" type="reset" value="Reset" onclick="reset()" />
      <input
        id="submit"
        type="submit"
        value="Submit"
        onclick="isValid()"
      /><br /><br />
</form>
    </div>
  </body>
</html>
