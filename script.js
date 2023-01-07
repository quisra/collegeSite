let registerTag= document.getElementById('registerTag');
let display= document.getElementById('display');

registerTag.addEventListener("click", function(){
  display.innerHTML=`                
  <div id="display" class="div">
    <h2>LEAF ACADEMY REGISTERATION</h2>

    <form action="login.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="firstname">
      </div>
      
      <div class="form-group">
        <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
      </div>



      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" id="pwd" name="pwd">
      </div>

      <div class="form-group">
        <input type="password" class="form-control" placeholder="Confirm Password" id="confirm" name="confirm">
      </div>



      <button type="submit" name="register" class="btn btn-submit btn-block">REGISTER</button>
    </form> 
  </div>`;
});


