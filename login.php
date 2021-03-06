<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/bootstrap-datepicker.css" >

    <title>MVST</title>
  </head>
  <body>
    


    <div class="container" id="login"> 
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
         </div>
        <div class="col-md-auto">
        <h1>Login</h1>

            <form>
                <div class="form-group">
                    <label for="">Mobile No or Email address</label>
                    <input type="text" class="form-control" id="userid" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="login_password" placeholder="Password">
                </div>
                
                <div class="row">
                    <div class="col">
                        <button type="submit" id="user_login" class="btn btn-success">Login</button>        
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-primary" onclick="$('#register').show();$('#login').hide()">Register</button>
                    </div>
                </div>
            
            </form>
        </div>
        <div class="col col-lg-2">
        </div>
    </div>

        
    
    </div>

    <div class="container" id="register" style="display: none;"> 
    <h1>Register</h1>
        <form>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="form-group">
                    <label for="gender">Created By</label>
                    <select class="form-control" id="created_by">
                        <option value="Parents">Parents</option>
                        <option value="Siblings">Siblings</option>
                        <option value="Friends">Friends</option>
                        <option value="Relative">Relative</option>
                        <option value="Self">Self</option>
                    </select>
                </div>           
             </div>
             <div class="col-sm-12 col-md-3">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>           
             </div>
             
             <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="number" class="form-control" id="" placeholder="You can login with mobile no">
                </div>           
             </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="">Mobile Number</label>
                    <input type="number" class="form-control" id="mobile" placeholder="You can login with mobile no">
                </div>           
             </div>
             <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="=">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="You can login with email id">
                </div>           
             </div>
        </div>
        
        
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="">Create Password</label>
                    <input type="password" class="form-control" id="password" placeholder="You can login with mobile no">
                </div>           
             </div>
             <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" placeholder="You can login with email id">
                </div>           
             </div>
        </div>
        

        <div class="row">
            <div class="col"> 
                <button type="button" id="create" class="btn btn-success">Submit</button>        
            </div>
            <div class="col">
             <button type="button" class="btn btn-info" onclick="$('#register').hide();$('#login').show()"> Already Registered </button>
            </div>
        </div>
        
        </form>
    
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="public/javascript/jquery-3.1.1.min.js"> </script>
    <script src="public/javascript/bootstrap-datepicker.min.js" ></script>
    <script src="public/javascript/static-data.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

<script src="public/javascript/main.js" ></script>

  </body>
</html>