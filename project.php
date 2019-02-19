<!DOCTYPE html>
<html lang="en" xml:lang="en">
<title>Final Project::Projects</title>
<div id="wrapper">

<link rel="stylesheet" href="final.css">

<header>
<div id="TCicon"></div>
<h1>TimeCloud</h1>
</header>

 <nav>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li class = "active"><a href="projects.html">Projects</a></li>
    <li><a href="resources.html">Resources</a></li>
    <li class = "active" style = "float:right"><a href="login.html">Login</a></li>
  </ul>
</nav>
<main>
  
<div id="mainst">
<div class="myDIV" id = "myDIV1">
  <h2><?php echo $_POST["ProjectTitle1"]; ?></h2>
  <p class="center"><?php echo $_POST["projectnotes1"]; ?></p>
   
</div>

<button style="float:left;" class="btnstyle"  onclick="myFunction1()">Project 1(show/hide)</button>

<div class="myDIV" id = "myDIV2" >
  <h2><?php echo $_POST["ProjectTitle2"]; ?></h2>
  <p class="center"><?php echo $_POST["projectnotes2"]; ?></p>
</div>

<button style="float:left;" class="btnstyle" onclick="myFunction2()">Project 2(show/hide)</button>

<div class="myDIV" id="myDIV3">
  <h2><?php echo $_POST["ProjectTitle3"]; ?></h2>
  <p class="center"><?php echo $_POST["projectnotes3"]; ?></p>
</div>

<button  style="float:left;" class="btnstyle" onclick="myFunction3()">Project 3(show/hide)</button>

</div>
</main>

<footer>
Copyright &copy; 2018 TimeCloud<br>
<a href="kylepfedalen@gmail.com">KyleFedalen@gmail.com</a>
</footer>

</div>
</html>