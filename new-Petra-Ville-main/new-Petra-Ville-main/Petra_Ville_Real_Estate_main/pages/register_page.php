<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="../css/register.css" />
  </head>
  <body>
    <div class="log-in-page">
      <div class="overlap-wrapper">
        <div class="overlap">
          <header class="header">
            
              <a id="logo" href="../index.php">Petra Ville Real Estate</a>
          
            <div class="navbar">
              <div class="text-wrapper">Home</div>
              <div class="div">Properties</div>
              <div class="text-wrapper-2">About</div>
              <div class="text-wrapper-3">Contact</div>
              <div class="text-wrapper-4">Log In</div>
            </div>
          </header>
          <div class="body">
            <div class="overlap-group">
              <div class="text-wrapper-5">
                <a href="login_page.php" id="signIn">Sign In</a>
              </div>
              <div class="text-wrapper-6">Sign Up</div>
              <div class="text-wrapper-7">or</div>
              <p class="slogan">Unlock Your <br />Dream Home <br />with Us!</p>
              
              <div class="login-container">
                <form action="register_page.php" method="post">
                <div class="email-address">
                  <input type="email" placeholder="Email Address" name="email" id="email" required>
                </div>
                <div class="password">
                  <input type="password" placeholder="Password" name="password" id="password" required>
                </div>
                <div class="confirmPassword">
                  <input type="password" placeholder="Password" name="confirmPassword" id="confirmPassword" required>
                </div>

                <div class="sign-up-button">
                  <button type="submit">Sign Up</button>
                </div>
                </form>
                <div id="error-message">
                <!--PHP registratioN-->
                <?php include '../functions/register.php';?>
                
                </div>
              
              </div>

              <div class="sign-in-google">
                <div class="overlap-3">
                  <div class="text-wrapper-11">Sign In with Google</div>
                  <div class="log-in-button"></div>
                  <img class="icon-google" src="img/icon-google.png" />
                </div>
              </div>
              <div class="sign-in-apple">
                <div class="overlap-3">
                  <div class="text-wrapper-12">Sign In with Apple</div>
                  <div class="log-in-button"></div>
                  <img class="icon-apple" src="img/icon-apple.png" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
