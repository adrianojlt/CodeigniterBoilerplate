<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <title>Login</title>
    
    <meta name="description" content="">
    <meta name="author" content="">
 
    <!-- styles -->
    
    <?php 
    	$this->carabiner->display('jquery');
    	$this->carabiner->display('bootstrap');
    ?>
    	
    <style type="text/css">
    
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px;
      }
      .container {
        width: 300px;
      }
 
      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px;
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }
 
      .login-form {
        margin-left: 65px;
      }
 
      legend {
        margin-right: -50px;
        font-weight: bold;
        color: #404040;
      }
 
    </style>
 
</head>




<body>
    <?php //echo validation_errors();?>
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="login-form">
                
                    <h2>Login</h2>
                    
                    <form action="<?php echo current_url();?>" method="post" accept-charset="utf-8">
                        <fieldset>
                            <div class="clearfix">
                                <input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" placeholder="email">
                            </div>
                            <div class="clearfix">
                                <input type="password" name="user_pass" value="" placeholder="Password">
                            </div>
                            <button class="btn primary" type="submit" name="login" value="Login">Sign in</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
    
</body>





</html>