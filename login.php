<!DOCTYPE html>
<html lang="en" xml:lang="en">
<title>Final Project::Login</title>
<div id="wrapper">
<link rel="stylesheet" href="final.css">


<header>
<div id="TCicon"></div>
<h1>TimeCloud</h1>
</header>

 <nav>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="projects.html">Projects</a></li>
    <li><a href="resources.html">Resources</a></li>
    <li class = "active" style = "float:right"><a href="login.html">Login</a></li>
  </ul>
</nav>

<main>
  
<div id="mainst">

<h2>Hello <?php echo $_POST["userEmail"]; ?> and Welcome to TimeCloud</h2>
  
</div>

</main>
<footer>
Copyright &copy; 2018 TimeCloud<br>
<a href="kylepfedalen@gmail.com">KyleFedalen@gmail.com</a>
</footer>
</div>
</html>