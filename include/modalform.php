<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

</head>
<body>
<div id="mModal" class="modal fade" role="dialog" style="margin:3.5%; ">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="container">
          <h2 class="text-center text-red">ENQUIRY FORM!!</h2>   
  
</div>
      </div>
      <div class="modal-body">
        <div class="container">
  
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="topon-input">Name</label>
      <input type="text" name="name" class="form-control" id="inputname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4"  class="topon-input">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
  </div>

  <div class="form-row">
    
    
    <div class="form-group col-md-6">
      <label for="inputAddress" class="topon-input">Qualification</label>
    <!-- <select name="courses">
      <option name="select" value="">Select Course</option>
      <option name="Web development" value="">Web development</option>
      <option name="Web designing" value="">Web designing</option>
      <option name="Python" value="">Python</option>


    </select> -->
    <input type="text" name="quali" class="form-control" id="inputname">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4"  class="topon-input">Contact</label>
      <input type="tel" name="contact" class="form-control" id="inputmobile4">
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-5">
      <label class="topon-input">Courses</label>
      <select class="form-control">
        <option value="">--Select your course--</option>
        <option value="web designing">Web Designing</option>
        <option value="web development">Web Development </option>
        <option value="wordpress developer">Wordpress Developer</option>
        <option value="Angular">Angular</option>
        <option value="android developer">Android Developer</option>
        <option value="iot">IOT</option>
        <option value="node js">Node Js</option>
        <option value="react js">React Js</option>
        <option value="data science">Data Science</option>
        <option value="ui/ux">UI/UX</option>
        <option value="AI">AI</option>
        <option value="ML">ML</option>


      </select>
    </div>
    <div class="col-md-6">
      <div class="g-recaptcha"
         data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
      </div>
    </div>
  </form>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</div>
      
      <div class="modal-footer" style="display: flex; justify-content: center;">
        <button type="submit"  class="btn btn-default" data-dismiss="modal">Submit</button>
      </div>
    </div>

  </div>
</div>
</div>
</body>
</html>