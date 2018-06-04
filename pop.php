<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>


 #overlay {
     visibility: hidden;
     position: absolute;
     left: 0px;
     top: 0px;
     width:100%;
     height:100%;
     z-index: 1000;
}

     #overlay div {
     width:400px;
     height:350px;
     margin: 100px auto;
     background-color:#F2F2F2;
     border:1px solid #000;
     padding:15px;
     border-radius:5px;
}

.text_name{
	float:left;
	width:400px;
	height:30px;
	font-family:Verdana;
    font-size:14px;
	}

.input_text{
	float:right;
	width:250px;
	height:25px;
	margin-top:-28px;
	font-family:Verdana;
    font-size:14px;
	}
	
select{
	float: right;
    width: 254px;
    margin-top: -28px;
    height: 32px;
	font-family:Verdana;
    font-size:14px;
	}

.form_button {
		width:100px;
		height:30px;
		margin: 40px 0 0 298px;
        float:left;
		padding: 5px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		border: solid 1px #0076a3; 
		border-right:0px;
		background: #0095cd;
		background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
		background: -moz-linear-gradient(top,  #00adee,  #0078a5);
		border-radius: 5px 5px;
		
	}
	.form_button:hover {
		text-decoration: none;
		background: #007ead;
		background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
		background: -moz-linear-gradient(top,  #0095cc,  #00678e);
	}
	/* Fixes submit button height problem in Firefox */
	.form_button::-moz-focus-inner {
	  border: 0;
	}
	.form_clear{
		clear:both;
	}
	
	a {
    color:#f00;
    text-decoration:none;
    margin-top:40px;
}

	
</style>
<script>
        function overlay() {
            el = document.getElementById("overlay");
            el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
        }
       

    </script>
</head>

<body>

<div id="overlay">
     <div>
          <p style="text-align:center; font-size:16px; font-family:Verdana;">Book Your Appointment  [<a href='#' onclick='overlay()'>close</a>]</p>
          <br />
          
          <form class="form-contact" method="post" name="frm">
                     
                        <label class="text_name">Your Name <span class="required"></span></label>
                        <input type="text" name="name" id="name" class="input_text" required/>
                        
                        <label class="text_name">Patient name <span class="required"></span></label>
                        <input type="text"  name="name" id="name" class="input_text" required/>
                        
                         <label class="text_name">Contact Number <span class="required"></span></label>
                        <input type="text"  name="name" id="name" class="input_text" required/>
                        
                         <label class="text_name">E-mail <span class="required"></span></label>
                        <input type="text"  name="name" id="name" class="input_text" required/>
                        
                        <label class="text_name">Detail <span class="required"></span></label>
                        <input type="text"  name="name" id="name" class="input_text" required/>
                        
                        <label class="text_name">prefer docter <span class="required"></span></label>
                        <select>
  <option value="volvo">Dr.Sunil Tangri</option>
  <option value="saab">Dr.Charoo Tangri</option>
  <option value="mercedes">Dr.Karan Tangri</option>
  <option value="audi">Dr.Sonal Tangri</option>
</select>
                        
                       <br /><br /><br />
                     <input type="submit" value="Submit" class="form_button">
                      
                    </form>
                   
     </div>
</div>
        
        <a href='#' onclick='overlay()'>Address</a>
       

         
           



       




</body>
</html>