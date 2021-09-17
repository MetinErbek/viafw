<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   </head>
   <body>
      <!------ Include the above in your HEAD tag ---------->
      <div class="container">
      <div class="card carcol-md-6 offset-md-2 col-sm-8 col-sm-offset-2" style="margin-top:20%;" >
         <div class="card-body">
            <div id="loginbox" class="mainbox  ">
               <div class="panel panel-info" >
                  <div class="panel-heading">
                     <div class="panel-title">Sign In</div>
                  </div>
                  <div style="padding-top:30px" class="panel-body" >
                     <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                     <form id="loginform" class="form-horizontal" role="form">
                        <div style="margin-bottom: 25px" class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                           <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                           <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div style="margin-top:10px" class="form-group">
                           <!-- Button -->
                           <div class="col-sm-12 controls">
                              <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                           </div>
                        </div>
                        <div class="form-group">
                     </form>
                     </div>                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
   </body>
</html>