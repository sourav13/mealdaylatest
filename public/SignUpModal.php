<div>
  <div class="container">
  <div class=" modal fade" id="SignUpmyModal" role="dialog">
     <div class="modal-dialog"> 
      <!-- Modal content-->
      <div class="modal-content">
      <div class="signUp-modal-header" style="padding:35px 50px;">
    
        <h4><span class="glyphicon glyphicon-lock"></span> Sign Up</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" action= "SignUp2.php" method="post">
            <div class="form-group">
                <label for="name"><span class="glyphicon glyphicon-user"></span>  Name</label>
                <input type="text" class="form-control" id="firstname" name ="name" placeholder="Enter Name" required>
               <!-- <label for="username"><span class="glyphicon glyphicon-user"></span> User Name</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter User Name"> !-->
                <label for="email"><span class="glyphicon glyphicon-envelope"></span>  Email</label>
                <input type="text" class="form-control" id="email" name ="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                  <label for="address"><span class="glyphicon glyphicon-home"></span>Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                <label for="phone"> <span class="glyphicon glyphicon-phone"></span>Phone</label>
                <input type="text" class="form-control" id="psw" name="phone" placeholder="Enter Phone" required>
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password" required>
            </div>


            <div class="checkbox">
                <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span> Sign Up</button>
        </form>
      </div>
        
      
    </div>
    </div> 
  </div>
</div>
</div>
