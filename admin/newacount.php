<?php include 'header.php'; ?>

<section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Create Account
        </h2>
      </div>
      <div class="box">
          
          <form class="modal-content animate" action="dbaccount" method="post" enctype="multipart/form-data">
   
    <div class="container">
      
      <label for="uname"><b>Name</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label for="psw"><b>Select Photo</b></label>
      <input type="file" placeholder="Upload Photo" name="photo" required>
      
      <label for="psw"><b> Mobile Number</b></label>
      <input type="number" placeholder="Enter mobile number" name="phone" min="1000000000" max="9999999999" required>
      
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
      
      <label for="psw"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      
      <label for="Address"><b>Address</b></label>
      <input type="text" placeholder="Enter address" name="address" required>
      
      <label for="psw"><b>Adhar Number</b></label>
      <input type="number" placeholder="Enter number" name="adhar" min="100000000000" max="999999999999" required>
      
       
      <button  type="submit" name="submit" class="btn-box">SUBMIT</button>
     
    </div>

   
  </form>
       
      </div>
    </div>
  </section>

<?php include 'footer.php';