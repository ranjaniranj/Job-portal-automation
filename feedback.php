<?php include ("header.html")?>
<style>
  <?php include 'style.css'; ?>
  </style>
<!DOCTYPE html>
<html>
  <head>
    <title>FEEDBACK
    </title>
    <link rel="stylesheet" type="text/css" href="2_css.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <div id="log">
      <div class="l1">
        <div class="l2">
          <img src="login.webp" height="600px" width="550px" />
        </div>
        <div class="l3">
          <h3>Register to Join!</h3>
          <form action="Reg_connect.php" method="post">
            <i
              class="fa fa-envelope"
              style="font-size: 25px; color: #34345f"
            ></i>
            <input
              type="text"
              size="40"
              placeholder="   Email"
              name="e"
              style="
                height: 50px;
                border-radius: 15px;
                border: none;
                background-color: #cbcbe3;
                position: relative;
                left: 10px;
              "
            />
            <br /><br /><br />
            <i
              class="fa fa-solid fa-lock"
              style="font-size: 35px; color: #34345f"
            ></i>
            <input
              type="password"
              size="40"
              placeholder="   Password"
              name="pwd"
              style="
                height: 50px;
                border-radius: 15px;
                border: none;
                background-color: #cbcbe3;
                position: relative;
                left: 10px;
              "
            />
            <br /><br /><br />
            <input
              type="submit"
              value="REGISTER"
              style="
                height: 40px;
                width: 300px;
                background-color: #44447b;
                border: none;
                border-radius: 20px;
                color: white;
                position: relative;
                left: 40px;
              "
            />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>