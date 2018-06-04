<?php include 'header.php' ?>
      <div class="head_panel">
        <div id="map" class="map" style="border:1px solid:444; margin-top:20px"><iframe width="100%" frameborder="2" height="250" frameborder="250" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=DR.+TANGRIS+DENTAL+CENTRE,+Ho+Chi+Minh+Marg,+New+Delhi&amp;aq=0&amp;oq=dr+tangris+&amp;sll=28.645441,77.090757&amp;sspn=0.902681,1.365051&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=28.542916,77.242158&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br />
        
        </div>
        
        <div class="hgroup">
          <div class="title diagonal-bgcolor-trans">
            <div class="container">
              <h1>Contact</h1>
            </div>
          </div>
          <div class="subtitle body-bg_section">
            <div class="container">   
             
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="container">
          <div class="section-content">
            <div class="row pb-70">
              <div class="col-md-6 col-sm-6">
                <div class="box mbn">
                  <div class="box-heading">Fill the form below</div>
                   
                  <div class="box-body">
				  <p id="demo"></p>
                   <form id="appointment_form" name="appointment_form" class="" method="post" action="mail.php">
                      <div class="form-group">
                        <label class="control-label mll">Your Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" aria-required="true">
                      </div>
                      <div class="form-group">
                        <label class="control-label mll">Your Email <span class="required">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" aria-required="true">
                      </div>
                      <div class="form-group">
                        <label class="control-label mll">Your Phone <span class="required">*</span></label>
                        <input type="text" class="form-control"  name="phone" id="phone" aria-required="true">
                      </div>
                  <!--    <div class="form-group">
                        <label class="control-label mll">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required/>
                      </div>-->
                      <div class="form-group">
                        <label class="control-label mll">Message</label>
                        <textarea rows="8" class="form-control" name="message" id="message" ></textarea>
                      </div>
                      <p>Shared data will be held securely and will not be distributed to third parties.</p>
                      <div class="form-group mtxxl text-center mbn">
                        <input type="submit" value="Submit Message" name="submit" class="btn btn-outlined btn-primary"/>
                      </div>
                    </form>
                                      </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="box mbn">
                  <div class="box-heading">Contact us</div>
                  <div class="box-body">
                    <p>&nbsp;</p>
                    <div class="contact-infos">
                      <ul class="list-unstyled">
                        <li><a href="#"><i class="fa fa-map-marker fa-fw"></i>DR.TANGRI'S DENTAL AND ORTHODONTIC CENTRE <br> &nbsp;&nbsp;&nbsp;&nbsp; R-4, Nehru Enclave New Delhi 110 019, INDIA.</a></li>
                        <li><a href="#"><i class="fa fa-phone fa-fw"></i>+91-981-028-9955</a></li>
                        <li><a href="#"><i class="fa fa-envelope fa-fw"></i>drtangridental@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-globe fa-fw"></i>www.drtangri.com</a></li>
                      </ul>
                    </div>
                   
                </div>
              </div>
            </div>
          </div>
        </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  <!-- jQuery Form Validation code -->
  <script>
  
  
  
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#appointment_form").validate({
    
        // Specify the validation rules
        rules: {
			

		
            name: "required",
			email: {
                required: true,
					email: true },

            phone:  {
                required: true,
					number: true },
            
        },
        
        // Specify the validation error messages
        messages: {
			
            name: "<font color='red'>Please enter your  Name</font>",
			email: "<font color='red'>Please enter your  Email</font>",
			phone: "<font color='red'>Please Enter Phone No.</font>",
         
        },
		

        
        submitHandler: function(form) {
  
			    $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            success: function(data) {
		
               if (data.indexOf("Successfully") >= 0){
	
		window.location.replace("http://www.drtangri.com/thank-you.php");

		}
		else
		{
		
		$("#demo").html(data).css('display','block');
		}
				
				
            }   });
        }
    });

  });
  
  </script>
         
      <!-- ============================ FOOTER ============================-->
 <?php include 'footer.php' ?>
