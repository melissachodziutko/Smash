<!DOCTYPE html>
<html>

         
        <div class="hero-image">
            <link rel="stylesheet" href="overall.css">
  <div class="hero-text">
    <h1>Smash Bids</h1>
  </div>
</div>
    </head>
    <body>
       

        <center>
        <p>
           Instructions:
        </p>
        <p>
           Enter in your bid (whole numbers only, no decimals)
        </p>
        <p>
            Select your character from the dropdown
        </p>
        <p>
            Enter your full name (we won't be able to verify you otherwise)
        </p>
         <p>
            Questions? Contact Melissa Chodziutko on facebook or at game society. (if u have a problem with the way this website looks meet me outside)
        </p> 
        <?php
                #$time = $_POST['id'];
                $debug = true;
                require( 'includes/connect_db.php' ) ;
                # Includes these helper functions
                require( 'includes/helpers_limbo.php' ) ;
                # Shows the records in prints
		if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
                    if(isset($_GET['id'])) 
		                  show_record($dbc, $_GET['id']) ;
                }
                show_lost_records($dbc);
?>
            <br>
            <br>
        </center>
    </body>
            
</html>
