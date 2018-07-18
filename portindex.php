<!DOCTYPE html>
<html>
<head>
<title> My Portpolio </title>
<meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="portpolio.css">
</head>
 
 
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
 
<div class="container-fluid">
<header><h1 align="right">MYweb.com</h1></header>
  <div class="row">
    <nav class="col-sm-1" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked">
	      <li><a href="#"><img src="idrees.jpg" width="100px" height="100px"/></a></li>
        <li class="active"><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>                     
          </ul>
        </li>
      </ul>
    </nav>
    <div class="col-sm-11">
	
      <div id="section1">    
        <h1>I am Idrees Muhammad</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
		<img class="img-responsive" src="idrees.jpg"  />
      </div>
      <div id="section2"> 
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>        
      <div id="section3">         
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41">         
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section42">         
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
	  
    </div>
</div>
</div>

</body>
</html>