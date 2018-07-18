<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designcarebd.com/corvance/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:07:59 GMT -->


    <head>
 <?php require 'common/header.php';
        ?>


  

 <!-- <script src="assets/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {
    
      $("#contact_insert").on('submit',function(e){
        e.preventDefault();
        $.ajax({    //create an ajax request to load_page.php
            type: "POST",
            url: "insert.php",             
            data:new FormData(this), // "coun_id="+id, {}
            cache       : false,
            contentType : false,
            processData : false, //expect html to be returned                
            success: function(response){
                 alert(response);
         
          
                   
            }
            

        });
      });
});

  </script> -->
</head>
   


<body>

    <!-- Preloader starts -->
    <div id="preloader"></div>
    <!-- Preloader ends -->
    
    
    <!-- Top Bar Starts -->
     <?php require 'common/top.php';?>
    <!-- Navigation area ends -->



    <!-- Page Title area starts -->
    <section class="page-title section-big text-center">
        <div class="container">
            <h2>CONTACT US</h2>
            <p><a href="index.php">Home</a> <i class="fa fa-angle-double-right"></i> Contact Us</p>
        </div>
    </section>
    <!-- Page Title area ends -->
    


    <!-- Address area starts -->
    <section class="address-area section-big">
        <div class="container">            

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="subtitle">CONTACT US</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="address-box">
                        <i class="fa fa-headphones"></i>
                        <h4>Phone Us</h4>
                        <a href="tel:0124121541">(+91)9825023045</a>

                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="address-box">
                        <i class="fa fa-envelope"></i>
                        <h4>Email Us</h4>
                        <a href="mailto:support@admin.com">d786shah@yahoo.co.uk</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="address-box">
                        <i class="fa fa-send"></i>
                        <h4>Location</h4>
                        <p>Gujarat, Ahmedabad 380015</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Address area ends -->
    


    <!-- Contact Form area starts -->
    <section class="contact-form-area section-big">
        <div class="container">            

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="subtitle">SEND US A MESSAGE</h3>
                        <p>Locavore pork belly scenester biodiesel mixtape tacos art party mustache cardigan kitsch squid disrupt. Biodiesel mixtape tacos art party mustache cardigan kitsch squid disrupt.</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
				<!-- Submition status -->
				<div id="form-messages"></div>

				<form id="ajax-contact" action="insert.php" method="post" class="comment-form" id="contact_insert">
					
					<div class="row">
						<div class="col-md-6">
							<input name="name" id="name" type="text" placeholder="Name" required="required" >
							<input name="phone" id="phone" type="text" placeholder="Phone">
							<input name="email" id="email" type="text" placeholder="Email" required="required">
						</div>
						<div class="col-md-6">
							<textarea name="message" id="message" rows="8" placeholder="Message"></textarea>
							<div class="actions">
								<input type="submit" value="SEND MESSAGE" name="submit" id="submitButton" class="btn con-button" title="Submit Your Message!">
							</div>
						</div>
					</div>

				</form>
            </div>

        </div>
    </section>
    <!-- Contact Form area ends -->



   <!-- Google Map starts-->
    <div id="contactgoogleMap">
        
    </div>
   
    <!-- Google Map ends -->


    
     <?php require 'common/bottom.php'?>

        
         
    <!-- Latest jQuery -->
  

    <!-- GOOGLE MAP JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>






    <!-- Google Map js-->
    <script>

        var myCenter=new google.maps.LatLng(23.019042, 72.543542);
       /* 23.023664, 72.536817*/
      /* 23.019042, 72.543542*/
        function initialize()
        {
            var mapProp = {
                center:myCenter,
                scrollwheel: false,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("contactgoogleMap"),mapProp);
            var marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE,
                icon:'assets/img/map-marker.png',
                map: map,
            });
            var styles = [
                {
                    stylers: [
                        { hue: "#03a9f5" },
                        { saturation: -60 }
                    ]
                },
            ];
            map.setOptions({styles: styles});
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <?php require'common/footer.php'?>
    
</body>


<!-- Mirrored from designcarebd.com/corvance/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:07:59 GMT -->
</html>