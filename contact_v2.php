<!DOCTYPE html>

<html lang="en">  
   <head>
    <title>IDIDIKIT Website</title><!-- Metadata and title -->
        <link rel="icon" type="image/x-icon" href="images/logo.png" >
            <meta charset="utf-8">	
            <meta name="Keyword" content="Ididikit, NZ, Custom Design, Request, laser engraving, Vinyl Printing, Commission">
            <meta name="Author" content="Gabriel Zeaph Garcia">
            <meta name="Description" content="This website is made to showcase the products created by the NZ based company IDIDIKIT">
            <meta name="Viewport" content="Width=Device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style_v2.css">  
        <script src="js/myscript_v2.js"></script>	
    </head>

    <body>
    <div class="grid-container">
        <div class="nav" id="thetop">
            <div id="navbar">
                <div><a href="index_v2.html" id="logohome"><img src="images/ididikitLogoHorizontal.png" alt="Ididikit Logo" id="idklogo"></a></div>
                <div>    
                    <ul>
                        <li><a href="index_v2.html" class="navtext">Home</a></li>
                        <li><a href="page1_v2.html" class="navtext">Product Gallery</a></li>
                        <li><div class="activepage"><a href="contact_v2.php" class="navtext">Request A Design</a></div></li>
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
                                    <li><a href="index_v2.html" class="navtext">Home</a></li>
                                    <li><a href="page1_v2.html" class="navtext">Product Gallery</a></li>
                                    <li><div class="activepage"><a href="contact_v2.php" class="navtext">Request A Design</a></div></li>

                                </ul>
                            </li>
                        </ul>		
                </div><!--menutoggle div end -->
            </div><!--burger menu div end -->
            <div id="logo"><img src="images/ididikitLogoHorizontal.png" alt="Ididikit logo" id="idlogo"></div>
            </div> <!--nav div end -->

            <div class="header" id="contactheader">
                <!-- <div id="headerimage"><img src="images/NotebookPen.png" alt="Ididikit Logo" id="headerimage"></div> -->
                <div id="backgroundimgage">
                    <div id="headertextbox">
                        <h1 id="headertext">Request A Design</h1>
                    </div>
                </div>
            </div> <!-- header div end -->
            <div class="content">
                <hr>
                <!-- php code for contact form -->
                <div id="main">
                    <?php
                    
                    require_once("phpForm_mysqli.php")
                    ?>
                        
            
                    <div class="contactcontainer">
                        <!-- contact form code -->
                        <h1>Request A Design</h1>
                        <form action="connect.php" method="post">
                            <div class="row">

                                <div class="column">
                                    <label for="fname">Full Name</label>  
                                </div>
                                <div class="column2">
                                
                                <input type="text" id="fname" name="fname" placeholder="Your Full Name">
                                
                                </div>
                            </div>

                            <div class="row">

                                <div class="column">
                                    <label for="email">Email Adress</label>
                                    
                                </div>
                                <div class="column2">
                                
                                <input type="text" id="email" name="email" placeholder="Your Email Adress">
                                
                                </div>
                            </div>

                            <div class="row">

                                <div class="column">
                                    <label for="phone">Contact Number</label>
                                </div>

                                <div class="column2">
                                
                                <input type="text" id="phone" name="phone" placeholder="A contact number">
                                
                                </div>
                            </div>

                            <div class="row">

                                <div class="column">
                                    <label for="message">Subject</label>
                                </div>

                                <div class="column2">
                                
                                <textarea id="message" name="message" placeholder="Write Something..."></textarea>
                                
                                </div>
                            </div>
                            
                                <div class="row" id="formbutton">
                                    <input id="submitbutton" type="submit" value="Submit">
                                    
                                </div>
                        </form>
                    </div>
                    <br>
                    <div class="contactcontainer">
                        <h1 class="infoheader">Contact Us</h1>
                        <p><b>Email:</b> ididikit.nz@gmail.com</p>
                        <p><b>Phone:</b> 0220329826</p>
                        <p><b>Facebook:</b> Ididikit</p>
                        <p><b>Instagram:</b> @ididikit.nz</p>
                    </div>
                    

                </div>  
            </div>  <!--Content div end-->
            <div class="footer"><!-- this is the footer -->
				<div class="footerelementbox">
					<div id="footerimg">
						<img src="images/ididikit-01.png" alt="Ididikit Logo" class="idimagefooter">
					</div>

					<div class="footertextflex">
						<h1 class="footertextheader">&copy; Ididikit 2026, All rights reserved</h1>
						<p class="footertext">Created By Gabriel Garcia</p>
					</div>

					<div class="footerflex">
						<div class="footerlinkflex">
							<div><img src="images/linkicon.png" alt="Link Icon" class="linkicon"></div>
							<a href="https://www.instagram.com/ididikit.nz/"><h1 class="footerlink">Instagram</h1></a>
						</div>

						<div class="footerlinkflex">	
							<div><img src="images/linkicon.png" alt="Link Icon" class="linkicon"></div>
							<a href="https://www.facebook.com/ididikit.nz/"><h1 class="footerlink">Facebook</h1></a>
						</div>
					</div>
				</div>
                <!-- footer design for mobile phones -->
                <div class="footerelementboxresponsive">
					<div>
					<div id="footerimgresponsive">
						<div><img src="images/ididikit-01.png" alt="Ididikit Logo" class="idimagefooter"></div>
						<div><h1 class="footertextheader">&copy; Ididikit 2026, All rights reserved</h1></div>
					</div>

					<div>
						<p class="footertexttop">Other Platforms</p>
					</div>

					<div class="footerflexresponsive">
						<div class="footerlinkflex">
							<div><img src="images/linkicon.png" alt="Link Icon" class="linkicon"></div>
							<a href="https://www.instagram.com/ididikit.nz/"><h1 class="footerlink">Instagram</h1></a>
						</div>

						<div class="footerlinkflex">
							<div><img src="images/linkicon.png" alt="Link Icon" class="linkicon"></div>	
							<a href="https://www.facebook.com/ididikit.nz/"><h1 class="footerlink">Facebook</h1></a>
						</div>
					</div>

					<div class="footertextflex">
						<p class="footertext">Created By Gabriel Garcia</p>
					</div>
				</div>
		    </div>
        </div>
        </div>
    </body>
</html>