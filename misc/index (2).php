<?php header('Location: http://localhost/GC/pages/index.php')?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Gauss Chains Home Page</title>
        <link rel="stylesheet" href="styles/homepage.css">
        <style> 
        	#loginref {
        		text-align: right;
        		font-size:110%;
        	}	
        	img {
	 			float: left; 
	 			margin-right:5%;
			}
        </style> 
    </head>
    <body>
    	<header>
        	<h1>Gauss Chains, or, <i>how to buckle down and learn math(s)</i></h1>
        </header>
        <?php if(!array_key_exists('email',$_COOKIE)) {?>
        	<aside id='lint'>
        		<form id='login' action="http://localhost/GC/pages/login.php" method="get" accept-charset="UTF-8">
					<p>Enter your email address to login</p>
					<p>email: <input type="text" name="email" placeholder="Enter your email address"></p>
					<p>pass: <input type="password" name="password" placeholder="Enter your password"> </p>
					<p><input type="submit" name="submit" value="Login"></p>
					<p><a href="http://localhost/GC/pages/registration.html">First time user? Click here to register!</a></p>
				</form>
        		<!--<p id="loginref"><a href="pages/login.html">Click here to login</a></p> -->
       	 	</aside>
       	<?php } 
       	else { ?>
        	<aside>
        		<a href="pages/problems.php">Problems</a>
       		</aside>
       	<?php } ?>
        <section>
        	<!--List containing the "FAQ" -->
        	<ul>
        		<li><h2 class="question">If I do a Gauss Chain, what will I get?</h2>
        			<p><img src="images/Gauss_11.jpg" alt="Gauss pic" width=100 height=100></p>
        		</li>
        		<!--<p><img src="images/Gauss_11.jpg" alt="Gauss pic" width=100 height=100></p>-->
        		<p> Seriously. If you don't become as good at math as that guy, we guarantee your money back (not that we'd take any).
        			Ok, to be fair, you probably won't become Gauss. But, who cares? Gauss is dead, and you're not. Now stop moping about, 
        			and start solving problems.
        		</p> 
        		<li><h2 class="question">Why can't I write a computer program to solve a problem?</h2></li>
        		<p> For many problems, the restriction that your solution be found by hand pushes you toward an elegant method that exploits a 
        		fundamental pattern. </p>
        		
        		<p> With technology outlawed you won't need to consider thorny questions of computational complexity, proper syntax, or whether to instantiate long integers after all.  
        		We hope this will hasten your journey to the fringes of your creative ability and to the 
        		beautiful ideas that make mathematics worthwhile. </p>
        		<li><h2 class="question">What happens if I do use technology? </h2></li>
        		<p>An excruciatingly painful death will befall you, I'm afraid.</p>
        		<li><h2 class="question"> How many mathematical maturities (mA's) do I need to have?</h2></li>
        		<p>Around five.</p>
        		<li><h2 class="question">Why "Chain"?</h2></li>
        		<p>The problems within any chain get progressively more challenging.  If you start with the first problem and work your way down, you will gradually accumulate the domain-specific knowledge and general
        	   problem solving ability required to complete the chain.</p>
        		<li><h2 class="question">Why Gauss? Bruh, why not that Euler guy?</h2></li>
        		<p><a href="http://www.projecteuler.net">Euler was taken :( </a></p>
        		
        	</ul>
        </section>
        <footer>
        	<p>&copy; Copyright 2013 Gauss Chains</p>
        </footer>
    </body>
</html>