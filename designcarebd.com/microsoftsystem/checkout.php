<!DOCTYPE html>
<html>
<head>
	<?php require 'common/header.php';
  session_start();?>
</head>
<body>
 <!-- Preloader starts -->
    <div id="preloader"></div>
    <!-- Preloader ends -->
    
    
    <!-- Top Bar Starts -->
   <?php require 'common/top1.php'?>
    <!-- Top Bar Ends -->

   
<!-- Contact Form area starts -->
    <section class="contact-form-area section-big">
        <div class="container">            

            <div class="row">
                <div class="col-md-12">
                   <br>
                </div>
            </div>

            <div class="contact-form ">
                <!-- Submition status -->
                <div id="form-messages">
                	<h2>Delivery Detailed</h2>
                </div>

                <form action="process.php" method="post" class="comment-form"  id="ajax-contact"><!--ajax-contact-->
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <input type="text"  name="name" placeholder="Name" id="name" required="required"/>
                           <input type="textarea" id="address" name="address" placeholder="Address" required="required">
                           <input type="email" id="email" name="email" placeholder="EmailId" required="required">
                            <input type="phone" id="phone" name="phone" placeholder="Enter your phone No. " required="required">
                            <input type="text" value="<?php echo $_SESSION['totalprice'];?>" readonly >
                            <!-- <input type="submit" value="submit" name="submit" id="submitButton" class="btn con-button"> -->
                        </div>
                        <div class="col-md-12">
                            
                            <div class="actions">
                                <input type="submit" value="SEND MESSAGE" name="submit" id="submitButton" class="btn con-button" title="Submit Your Message!">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
      </div>
       </section>
         <?php require 'common/bottom.php'?>

        
         
    <!-- Latest jQuery -->
   <?php require 'common/footer.php' ?> 
</body>
</html>