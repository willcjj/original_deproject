<?php include('server.php') ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href= "{{ url_for('static',filename='styles/style.css') }}" />

    <title>Drug Education Project</title>

  </head>
  <body>

    <div class="container-fluid">
      <div class="row home">
        <div class="unc-background">
          <img src="/static/images/ramses.jpg" alt="UNC mascot Ramses" />
        </div>
        <div class="description">
          <h1>Drug Education Program</h1>
          <br />
          <p>
          This short program will ask you questions about how much alcohol you drink and which drugs you use (illegal, prescription, and over-the-counter). When you are finished, you’ll instantly get a response with information specific to what you answered. Your information can help you increase your health and improve your athletic performance.
          </p>
          <br />
          <div class="home-button">
            <div>
              <form method="POST" action="idinfo.php">
                <p>Enter your Unique ID Number</p>
                <input type="text" name="id" />
                <br/>
                <br/>
                  <p>Please choose which team you play for:</p>
                  <p>Athletic Team: <select name="Team">
                    <option value="basketball">Basketball</option>
                    <option value="baseball">Baseball</option>
                    <option value="football">Football</option>
                    <option value="volleyball">Volleyball</option>
                    <option value="soccer">Soccer</option>
                  </select>
                  </p>
              </form>
            </div>
            <a href="hello.html"><button>Next</button></a>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>







<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
      <div class="input-group">
  	  <label>Firstname</label>
  	  <input type="text" name="first" value="<?php echo $first; ?>">
  	</div>

      <div class="input-group">
  	  <label>Lastname</label>
  	  <input type="text" name="last" value="<?php echo $last; ?>">
  	</div>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already have an account? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
