<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">        
    
    </head>

    <body data-spy="scroll" data-offset="0" data-target="#theMenu" class="body_login">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="index.html">HOME</a></li>
                        <li class="active">
                            <a data-toggle="modal" data-target="#loginModal">Login</a>
                        </li>
                        <li><a href="create_account.html">Create Account</a></li>                        
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Login</h4>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                        
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="1">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="2">
                            </div>                                  
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-1 col-md-offset-2">
                    <div class="well">

                            <h2>Information</h2>
                            <hr class="colorgraph"> 

                            <div class="form-group">
                                <label>Please Login</label>
                            </div>                                                  
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script> <!-- Map(Back) -->
        <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/backmap.js"></script>
    
    </body>
</html>
