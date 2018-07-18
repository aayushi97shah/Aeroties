<?php
session_start();

 //echo $_SESSION['username'];
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designcarebd.com/corvance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:06:54 GMT -->
<head>

    <!-- meta -->
    <?php require 'common/header.php'

     ?>

    
</head>

<body>

    <!-- Preloader starts -->
    <div id="preloader"></div>
    <!-- Preloader ends -->
    <?php
       

       if(isset($_SESSION['username']))
       {
        require 'common/top1.php';
       }
       else{
        require 'common/top2.php';
       }
       
    ?> 


   


   
   
   
            
                
               



    <!-- Page Title area starts -->
    <section class="page-title section-big text-center">
        <div class="container">
            <h2>Product</h2>
            <p><a href="index.php">Home</a> <i class="fa fa-angle-double-right"></i> Cable ties And Security Seals</p>
        </div>
    </section>
    <!-- Page Title area ends -->
    


    <!-- Work area starts -->
    <section id="work" class="works section-big">
        <div class="container">

            <div class="row">

                <!-- Works filter -->
                <ul class="work filters">
                    <li class="filter" data-filter="all">CableTies & Security Seals</li>
                  
                   
                </ul>
                <!-- / Works filter -->

            </div>
            <?php
            require 'connection.php';
    $sql = "SELECT * FROM products";
$res = mysqli_query($conn,$sql);
?>
<?php while($r = mysqli_fetch_assoc($res)){ ?>

            <div class="portfolio">
                <div class="row work-items">

                    <!-- work item -->
                    <div class="col-md-4 col-sm-12 col-xs-12 mix illustrate web brand">
                        <div class="item">
                            <form method="post" action="addtocart.php?id=<?php echo $r['id'];?>">
                            <img src="<?php echo $r['image']; ?>" alt="">
                            <span class="cat"><?php echo $r['title'] ?></span>
                            <div class="overlay">
                                <div class="icon">
                                    <p><?php echo $r['description'] ?></p>
                                    <p><?php echo $r['price']?></p>
                                    
                                     <!-- <a href="addtocart.php?id=<?php //echo $r['id']. "&type=".$_GET; ?>" class="btn btn-primary" role="button";>Add to Cart</a> -->
                                         <input type="submit" name="submit" class="btn btn-primary" value="Add to cart"></p>
                                                                           
                                    <!-- <a href="#">Add to cart</a>
                                    <a href="login.php">BuyNow</a> -->
                                    <!-- <p class="tag">Finance, Insurance</p> -->
                                    <!-- <a href="ass" class="work-popup"><i class="fa fa-eye"></i></a> -->
                                </div>
                               <!--  <a href="#"><i class="fa fa-long-arrow-right"></i></a> -->
                           </form>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <!-- work item -->
                   

                    

                </div>
            </div>

        </div>
    </section>
    <!-- Work area ends -->

        

    


    
   <?php require 'common/bottom.php'?>

        
         
    <!-- Latest jQuery -->
   <?php require 'common/footer.php' ?>   
    
</body>


<!-- Mirrored from designcarebd.com/corvance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:06:54 GMT -->
</html>