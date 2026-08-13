<!DOCTYPE html>
<html>
   <head>
    <title>IDIDIKIT Website</title><!-- Metadata and title -->
        <link rel="icon" type="image/x-icon" href="" >
            <meta charset="utf-8">	
            <meta name="Keyword" content="Ididikit, NZ, Custom Design, Request, laser engraving, Vinyl Printing, Commission"/>
            <meta name="Author" content="Gabriel Zeaph Garcia"/>
            <meta name="Description" content="This website is made to showcase the products created by the NZ based company IDIDIKIT"/>
            <meta name="Viewport" content="Width=Device-width, initial-scale=1"/>
        <link rel="stylesheet" href="css/style_V1.css">  
    </head>

    <body>
    <div class="grid-container">
        <div class="nav" id="thetop">
            <div id="navbar">
                <div><a href="index_V1.html"><img src="images\ididikitLogoHorizontal.png" alt="Ididikit Logo" id="idklogo"></a></div>
                <div>    
                    <ul>
                        <li><a href="index_V1.html" class="navtext">Home</a></li>
                        <li><a href="page2_V1.html" class="navtext">Product Gallery</a></li>
                        <li><div class="activepage"><a href="contact_V1.php" class="navtext">Request A Design</a></div></li>
                    </ul>	
                </div> 
            </div>
            <div id="burgermenu">
                <div id="menuToggle">
                    <input type="checkbox">
                    <span></span>
                    <span></span>
                    <span></span>
                        <ul id="menu">
                            <li>
                                <ul id="navflex">
                                    <li><a href="index_V1.html" class="navtext">Home</a></li>
                                    <li><a href="page2_V1.html" class="navtext">Product Gallery</a></li>
                                    <li><div class="activepage"><a href="contact_V1.php" class="navtext">Request A Design</a></div></li>

                                </ul>
                            </li>
                        </ul>		
                </div><!--menutoggle div end -->
            </div><!--burger menu div end -->
            <div id="logo"><img src="images\ididikitLogoHorizontal.png" alt="Ididikit logo" id="idlogo"></div>
            </div> <!--nav div end -->

            <div class="header">
                <!-- <img src="images\404NotCreated.jpg" alt="Image of an IDIDIKIT Product" id="headerimage"> -->
                <div id="headertextbox">
                    <h1 id="headertext">Request A <br> Design</h1>
                </div>
            </div> <!-- header div end -->
            <script type="text/javascript" src="js/myscript_V1.js"></script>	
            <div class="content">
                <hr>

                <div id="main">
                    <?php
                    
                    require_once("phpForm_mysqli.php")
                    ?>
                        
            
                    <div class="contact_container">
                        <h1>Request A Design</h1>
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
                            <div id="submitbutton">
                                <div class="row">
                                    <input type="submit" value="submit">
                                    
                                </div>
                            </div>
                        </form>

                        
                    </div>

                </div>  
            </div>  
            <div class="footer"><!-- this is the footer -->
				<div class="footerelementbox">
					<div id="footerimg">
						<img src="images\ididikit-01.png" alt="Ididikit Long" id="idimagefooter">
					</div>

					<div id="footertextflex">
						<h1 class="footertextheader">&copy; Ididikit 2026, All rights reserved</h1>
						<p class="footertext">Created By Gabriel Garcia</p>
					</div>

					<div class="footerflex">
						<div class="footerlinkflex">
							<a><h1 class="footerlink">Instagram</h1></a>
						</div>

						<div class="footerlinkflex">	
							<a><h1 class="footerlink">Facebook</h1></a>
						</div>
					</div>
				</div>
		</div>
    </div>
    
    </body>

</html>