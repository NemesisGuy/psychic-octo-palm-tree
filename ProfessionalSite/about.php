<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
	include 'datatbaseconnection.php';
	include 'getcurrentusersrecord.php';
}
?>
<html>
    <head>
        <title>Professional Site</title>
        <?php include 'resources.php';?>
    </head>
    <body>
        <header>
            <?php include 'header.php';?>
        </header>    

        <div class="container">
            <div class = "jumbotron">
            <h2> ABOUT </h2>
				<p>Im a aspiring developer and student at <a href="https://www.cput.ac.za/homepage" target="_blank"> CPUT</a>, a well known technological university based in the Western Cape of South Africa. </p>

				<p>As students of <a href="https://www.cput.ac.za/homepage" target="_blank"> CPUT</a> we have many projects to submit in order to achieve a passing grade, this is one of those projects. I hope you find this project's design choice and presentation appealing.</p>
				<p>This website is powered by the combination of various Technologies such as HTML5, CSS3, Javascript, JQuery, Ajax, MySql and Bootstrap 4.    </p>
				<p>If you have any questions as to the process behind making this project feel free to <a href="contactus.php"> contact me</a>. </p>

                
            </div>
            <div class="jumbotron">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ultrices tellus. Aliquam et pharetra mauris. 
                    Fusce congue erat lectus, eget feugiat risus viverra et. Etiam elementum molestie felis ut finibus. In ut fermentum tellus,  
                    ut dapibus tellus. Nulla facilisi. Etiam condimentum dui vitae ornare pretium. Maecenas vehicula congue eleifend. 
                    In eget porttitor neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Etiam sodales commodo aliquet. Curabitur a vestibulum nibh. Suspendisse vitae tortor malesuada, pulvinar purus faucibus, 
                    cursus odio. Etiam tincidunt dolor maximus imperdiet sagittis. Vivamus et posuere elit. Quisque mollis risus nisi.
                </p>
                
            </div>
            
            
            
        </div>

        <footer>     
            <?php include 'footer.php';?>
        </footer>
    </body>

</html>