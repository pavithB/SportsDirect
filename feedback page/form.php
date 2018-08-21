<!DOCTYPE html>
<html>
<head>
	<h1 class="form-signin-heading">Customer Feedback</h1>
    <link rel="stylesheet" type="text/css" href="../css/feedback.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
    <style>
	h1{
	font-family:Arial, Helvetica, sans-serif;
  	background-color: #565656;
  color: transparent;
  text-shadow: 0px 2px 0px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;
}

.form-signin-heading {
  text-align:center;
  margin-bottom: 30px;
}
	</style>
</head>
<body>
<div class="content1" >
<br/>


 <form action="contact.php" method="post" class="form-signup">
    <label class="lbl"  for="name"> Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></br>
    <input type="text" id="name" name="name" placeholder="Enter name..." required><br/>

    <label class="lbl" >Email Address:</label></br> <input type="email" name="email" required placeholder="Enter a valid email address" required><br/>
<label class="lbl" >Comments:</label></br>

<textarea class="tArea" name="comment" cols="" rows="" placeholder="Enter comment here..."></textarea><br/>
   
	<div class="stars">
        <input type="radio" name="rating" class="star-1" id="star-1" value="1"/>
        <label class="star-1" for="star-1">1</label>
        <input type="radio" name="rating" class="star-2" id="star-2" value="2"/>
        <label class="star-2" for="star-2">2</label>
        <input type="radio" name="rating" class="star-3" id="star-3" value="3"/>
        <label class="star-3" for="star-3">3</label>
        <input type="radio" name="rating" class="star-4" id="star-4" value="4"/>
        <label class="star-4" for="star-4">4</label>
        <input type="radio" name="rating" class="star-5" id="star-5" value="5"/>
        <label class="star-5" for="star-5">5</label>
        <span></span>
    </div>
    </br>
	<center><input type="submit" value="Submit" name="submit" class="btn btn success"></center>
  	</form>
</div>

<div class="viewcomments" align="center">

</div>

</body>
</html>