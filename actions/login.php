    <!DOCTYPE html>
    <html>
    <head>
    	<title>Music Player Login Page</title>
    	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    </head>
    <body>
      <form method="post" action="login_action.php">
         <div class="container px-4 py-5 mx-auto">
            <div class="card card0">
                <div class="d-flex flex-lg-row flex-column-reverse">
                    <div class="card card1">
                        <div class="row justify-content-center my-auto">
                            <div class="col-md-8 col-10 my-5">
                                <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="../assets/images/cover1.2.jfif"> </div>
                                <h3 class="mb-5 text-center heading">Enjoy With No.1 Music Player</h3>
                                <h6 class="msg-info">Please login to your account</h6>
                                <div class="form-group"> <label class="form-control-label text-muted"><h2>Username</h2></label> <input type="text" id="username" name="username" required="required" placeholder="Phone no or email id" class="form-control"> </div>
                                <div class="form-group"> <label class="form-control-label text-muted"><h2>Password</h2></label> <input type="password" id="password" name="password" required="required" placeholder="Password" class="form-control"> </div>
                                <div class="row justify-content-center my-3 px-3"> 
                                   <!-- <button >Login</button> -->
                                   <input type="submit" value="Login" class="btn-block btn-color" id="btn">
                               </div>
                               <div class="row justify-content-center my-2"> <a href="forgot_password.php"><small class="text-muted"><u>Forgot Password?</u></small></a> </div>
                           </div>
                       </div>
                       <div class="bottom text-center mb-5">
                        Don't have an account?
                        <a href="register.php" class="sm-text mx-auto mb-3">Sign Up</a>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">Enjoy With No.1 Music Player</h3> <small class="text-white">This is Music Player where we can listen top class music feel free. Just Login the credentials freely!!</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>