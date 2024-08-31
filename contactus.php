<?php
include('includes/header.php');
include('includes/navbar.php');
?>
<div class="career-parent">
<div class="aboutus career">
    <div>
        <h1>
            CONTACT US
        </h1>
        <p>
        Our first priority is to take the time to listen to you and help you achieve the results you are looking for. <br> 
        <b>NOW IS THE RIGHT TIME TO GO SOLAR!</b> 
     
        </p>
    </div>
    <div>
        <img src="imgs/contact.jpg" alt="">
       
    </div>
    
</div>
</div>


<div class="scrol-down career ">
    EXPLORE CAREERS


    <i class="bi bi-caret-down-fill"></i>
</div>

<div class="formulaire">
  <h1>
    DON’T HESITATE TO CONTACT A SOLAR EXPERT!

  </h1>
  <h4>
    Our experienced service team will be delighted to assist you with any <br> questions you may have and help you design the best solar system.

  </h4>
  <form id="regForm" action="">
    <h1> Request A Free Quote Here </h1>
    <div class="progress">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">What’s your name?
      <p><input placeholder="Name *" oninput="this.className = ''" name="fname"></p>
    </div>
    <div class="tab">What’s your phone number?
      <p><input placeholder="Phone *" oninput="this.className = ''" name="email"></p>

    </div>
    <div class="tab">What’s your email address?
      <p><input placeholder="EMAIL*" oninput="this.className = ''" name="fname"></p>
    </div>
    <div class="tab">What’s sort of service are looking for?
      <div>
        <input type="radio" class="radio_type" id="option1" name="op"><label for="option1">Solar services</label>
      </div>
      <div>
        <input type="radio" class="radio_type" id="option2" name="op"><label for="option2">Electrical services</label>
      </div>
      <div>
        <input type="radio" class="radio_type" id="option3" name="op"><label for="option3">Order a solar package</label>
      </div>

    </div>
    <div class="tab">What’s sort of service are looking for?
      <div>
        <input type="radio" class="radio_type" id="option4" name="opp"><label for="option4">Solar installation</label>
      </div>
      <div>
        <input type="radio" class="radio_type" id="option5" name="opp"><label for="option5">Salar cleaning</label>
      </div>
      <div>
        <input type="radio" class="radio_type" id="option6" name="opp"><label for="option6">Solar maintenance</label>
      </div>

    </div>

    <div class="tab">What’s your postcode?
      <p><input placeholder="postcode *" oninput="this.className = ''" name="uname"></p>
    </div>
    <div style="overflow:auto;">
      <div class="btns">
        
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    
  </form>
</div>


<?php
include('includes/contactus.php');

?>


<?php

include('includes/footer.php');
include('includes/scripts.php');
?>