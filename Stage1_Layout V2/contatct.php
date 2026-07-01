<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form Design</title>
        <link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width">
    </head>

    <body>
        <div id="main">
            <h1>Contact</h1>
			<?php
			
			require_once("phpForm_mysqli.php")
			?>
				
			<div id="burgermenu">
				<nav role="navigation">	
				<div id="menuToggle">
					<input type="checkbox" />
					<span></span>
					<span></span>
					<span></span>
						<ul id="menu">
							<div id="navflex">
							<a href="index.html"><li>Home</li></a> 
							<a href="index.html"><li>Page 1</li></a> 
							<a href="index.html"><li>Page 2</li></a> 
							<a href="index.html"><li>Contact Us</li></a>
							</div>
						</ul>		
					</div><!--menutoggle div end -->
				</nav>
       		</div>
            <!-- breaking up the form -->
            <br><br><hr><br>
            <!-- Form -->
            <div class="contact_container">
                <form action="connect.php" method="post">
                    <div class="row">

                        <div class="column">
                            <label for="fname">Full Name</label>
                            
                        </div>
                        <div class="column2">
                        
                        <input type="text" id="name" name="name" placeholder="Your Full Name">
                        
                        </div>
                    </div>

                    <div class="row">

                        <div class="column">
                            <label for="fname">Email Adress</label>
                            
                        </div>
                        <div class="column2">
                        
                        <input type="text" id="email" name="email" placeholder="Your Email Adress">
                        
                        </div>
                    </div>

                    <div class="row">

                        <div class="column">
                            <label for="fname">Contact Number</label>
                        </div>

                        <div class="column2">
                        
                        <input type="text" id="phone" name="phone" placeholder="A contact number">
                        
                        </div>
                    </div>

                    <div class="row">

                        <div class="column">
                            <label for="fname">Subject</label>
                        </div>

                        <div class="column2">
                        
                        <textarea id="message" name="message" placeholder="Write Something..." style="height: 200px;"></textarea>
                        
                        </div>
                    </div>

                    <div class="row">

                    <input type="submit" value="submit">
                    </div>
					
					
					
					
                </form>
				
				<div id='footer'>&copy; Copyright Gabriel Gatela-Garcia, All rights reserved Tawa College 2026</div>
				
            </div>

        </div>    
    </body>

</html>