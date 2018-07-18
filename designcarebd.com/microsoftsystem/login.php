<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designcarebd.com/corvance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:06:54 GMT -->
<head>

    <!-- meta -->
    <?php require 'common/header.php' ?>
    
</head>

<body>

    <!-- Preloader starts -->
    <div id="preloader"></div>
    <!-- Preloader ends -->
    
    
    <!-- Top Bar Starts -->
   <?php require 'common/top.php'?>
    <!-- Top Bar Ends -->

   
<!-- Contact Form area starts -->
    <section class="contact-form-area section-big">
        <div class="container">            

            <div class="row">
                <div class="col-md-12">
                   <br>
                </div>
            </div>

            <div class="contact-form col-md-6">
                <!-- Submition status -->
                <div id="form-messages"></div>

                <form action="checklogin.php" method="post" class="comment-form">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Login</h2>
                            <input type="text"  name="username" placeholder="UserName" id="username" required="required"/>
                           <input type="Password" id="password" name="password" placeholder="Password" required="required">
                            <input type="submit" value="submit" name="submit" id="submitButton" class="btn con-button">
                        </div>
                       <!--  <div class="col-md-6">
                            <textarea name="message" id="message" rows="8" placeholder="Message"></textarea>
                            <div class="actions">
                                <input type="submit" value="SEND MESSAGE" name="submit" id="submitButton" class="btn con-button" title="Submit Your Message!">
                            </div>
                        </div> -->
                    </div>

                </form>
            </div>
    <!-- //col-md-6 -->
     <div class="contact-form col-md-6">
                <!-- Submition status -->
                <div id="form-messages"></div>

                <form  action="reg_insert.php" method="post" class="comment-form" id="contact_insert">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <h2>New User Signup!</h2>
                            <input type="text" name="name" placeholder="name" id="name" required="required">
                            <input type="phone" name="mobile" placeholder="mobile no" required="required">
                            <input type="email" name="email" placeholder="Email Id" required="required">
                            <input type="text" name="username" placeholder="Username" required="required">
                            <input type="password" name="password" placeholder="password" required="required">
                            <input type="submit" name="submit" class="btn con-button" value="submit">

                            
                        </div>
                       <!--  <div class="col-md-6">
                            <textarea name="message" id="message" rows="8" placeholder="Message"></textarea>
                            <div class="actions">
                                <input type="submit" value="SEND MESSAGE" name="submit" id="submitButton" class="btn con-button" title="Submit Your Message!">
                            </div>submit
                        </div> -->
                    </div>

                </form>
            </div>


        </div>
    </section>
    <!-- Contact Form area ends -->


   
   
   
            
                
               



    <!-- Page Title area starts -->
   

    


    
   <?php require 'common/bottom.php'?>

        
         
    <!-- Latest jQuery -->
   <?php require 'common/footer.php' ?>   
    
</body>


<!-- Mirrored from designcarebd.com/corvance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:06:54 GMT -->
</html>