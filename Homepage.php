<?php
//define constants for connection info
define("MYSQLUSER","ictatjcub_wedworks");
define("MYSQLPASS","123zxc");
define("HOSTNAME","localhost");
define("MYSQLDB","ictatjcu_wedworks");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>theWedWorks</title>

<link rel="stylesheet" href="style.css" type="text/css"/>

<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet">
    <link href="file://///jcub.edu.au/homedirs$/jc479637/aab/ICT 1/TheWedWorks/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


    <header>
        <div class="logo">
            <a href="homepage.html">
            <img src="Img/Untitled.png" alt="" />
            </a>
            </div>
            <nav id="main-nav">
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="OurStory.html">Our Story</a></li>
                <li><a href="what we deliver.html">What we Deliver</a></li>
                <li><a href="#services">Expense Corner</a></li>
                <li><a href="#dresses">Our Wedding Work</a></li>
                <li><a href="#contact">Attaché</a></li>
                <li><a href="#contact">Reach Us</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home">
       <hr>
        <h1>Plan Your dream Wedding</h1>       
        <p>Your dream, our commitment</p>
        <a class="register-button" href="services.html#register">Know More</a>
        <br>
        <a href="#about">
           <i class="fas fa-chevron-circle-down"></i>
        </a>
    </section>
    
    
  
    <section id="dresses">
        <h3>Events</h3>
        <hr>
      <div class="products">
           <ul>
               <li class="container">
               <a href="#">
               <img src="img/img6.jpeg" alt=""  />
               <h4>Dummy Content</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum pariatur voluptatibus earum error quibusdam dolorem consequatur, magni amet facere! Reiciendis!</p>               
               <div class="overlay">               
                </div>
               </a>
               </li>
               
               <li class="container">
               <a href="#">
               <img src="img/img1.jpeg" alt="" />
               <h4>Dummy Content</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum pariatur voluptatibus earum error quibusdam dolorem consequatur, magni amet facere! Reiciendis!</p>
               <div class="overlay">
               </div>
               </a>
               </li>
               
               <li class="container">
               <a href="#">
               <img src="img/img4.jpeg" alt="" />
               <h4>Dummy Content</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum pariatur voluptatibus earum error quibusdam dolorem consequatur, magni amet facere! Reiciendis!</p>
               <div class="overlay">
                </div>
               </a>
               </li>
               
               <li class="container">
               <a href="#">
               <img src="img/img5.jpeg" alt="" />
               <h4>Dummy Content</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum pariatur voluptatibus earum error quibusdam dolorem consequatur, magni amet facere! Reiciendis!</p>
               <div class="overlay">
               </div>
               </a>
               </li>
               
               <li class="container">
               <a href="#">
               <img src="img/img8.jpeg" alt="" />
               <h4>Dummy Content</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum pariatur voluptatibus earum error quibusdam dolorem consequatur, magni amet facere! Reiciendis!</p>
               
               <div class="overlay">
              
                </div>
               </a>
               </li>
               <li class="container">
               <a href="#">
               <img src="img/img13.jpg" alt="" />
               <h4>Dummy Content</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum pariatur voluptatibus earum error quibusdam dolorem consequatur, magni amet facere! Reiciendis!</p>
               
               <div class="overlay">                 
           
                </div>
               </a>
               </li>
               </ul>
               </div>
               </section>
               
                       
         <section id="contact">   
     <div class="queryForm">              
    
        <h3>Contact</h3>
        <hr/>
         <ul>
                  
           
        
        <h4>For Any Suggestion, Query or Details please feel free to contact us.</h4>
        
        <p>Phone : <a href="callto:07 4771 1234">07 4771 1234</a></p>
        
        <p>E-mail : <a href="mailto:thewedworks9y@gmail.com">thewedworks9@gmail.com</a></p>
            
        
        <form action="#">
            <input class="input-text" type="email" tabindex="1" placeholder="Email"/><br>
            <input class="input-text" type="text" tabindex="2" placeholder="Name"/><br>
            <textarea class="input-text" tabindex="3" placeholder="Inquiry"></textarea><br>
            <input class="button" type="submit"/>
            
        </form>
      
        </ul>
    </section>
</div>
   
    
    <footer>  
    <div class="footer">
        <nav id="nav">
         <ul>  
       <li><a href="homepage.html">Home</a></li>
       <li><a href="OurStory.html">Our Story</a></li>
       <li><a href="Gallery.html">Gallery</a></li>
       <li><a href="ReachUs.html">Reach Us</a></li> 
            
           
            <search action="#">
    <input class="input-text" type="text" tabindex="2" placeholder="search"/><br>
    

     <section id="social">
     <!-- Add font awesome icons -->      
	
	<a href="#" class="fa fa-google"></a>
	<a href="#" class="fa fa-youtube"></a>
	<a href="#" class="fa fa-instagram"></a>
     <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-facebook"></a>     
      </section>  
    </search>
    </ul>
     </nav>
             <p>&copy; 2019 thewedworks Copyrights
        </p>
        </div>
    </footer>

</body>
</html>