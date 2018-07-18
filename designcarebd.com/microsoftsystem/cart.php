<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designcarebd.com/corvance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:06:54 GMT -->
<head>

    <!-- meta -->
     <link rel="stylesheet" href="assets/css/cart.css" media="screen" title="no title" charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <?php require 'common/header.php' ?>
    <script>
    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            //your function call here
            document.test.submit();
        }
        
    }
</script>
    
    
</head>
<?php
require 'connection.php';
session_start();
$items=$_SESSION['cart'];
//$qty=$_SESSION['qty'];
$cartitems=explode(",", $items);
//$quantity=explode(",", $qty);
$categories = '';
//$x=count($quantity);
//echo $x."<br>";

/*for ($j=0; $j<$x ; $j++) { 
    # code...
    //echo $j."<br>";
    echo $quantity[$j]."<br>";
}
echo $items;*/
/*foreach($quantity as $k1)
{
     $k1 = trim($k1);
      $categories .= "<category>" . $k1 . "</category>\n";
      echo $categories;

}*/
 
                     

?>
<body>

    <!-- Preloader starts -->
    <div id="preloader"></div>
    <!-- Preloader ends -->
  <!--Top Bar Starts -->
    <div class="header-top-area">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 col-sm-10">
                     <div class="top-info-left">
                         <ul>
                             <li><a href="#">Call us :+(91)9825023045</a></li>
                             <li><a href="#">Email : d786shah@yahoo.co.uk</a></li>
                             
                         </ul>
                     </div>
                 </div>
                
             </div>
         </div>
    </div>
    <!-- Top Bar Ends -->

   


   
    <!-- Navigation area starts -->
    <div class="menu-area navbar-fixed-top">
        <div class="container">
            <div class="row">
            
                <!-- Navigation starts -->
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 hidden-xs">
                    <div class="mainmenu">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="index-2.html">Home 01</a></li>
                                    <li><a href="index2.html">Home 02</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul> -->
                            </li>
                            <li><a href="about.php">About us</a></li>
                            
                            <li>
                                <a href="project.php">Product</a>
                                
                            </li>
                            <li>
                                <a href="application.php">Application</a>
                                
                            </li>
                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="buynow.php">BuyNow</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Navigation ends -->

                <div class="mobile-menu-area">
                    <div class="mobile-menu navbar-fixed-top">
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                               <!--  <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="product.php">Product</a></li>
                                    <li><a href="#">Application</a></li>
                                </ul> -->
                            </li>
                            <li><a href="about.php">About us</a></li>
                           
                            <li>
                                <a href="product.php">Product</a>
                                
                            </li>
                            <li>
                                <a href="applicatiion.php">Application</a>

                            </li>
                            <li><a href="contact.php">Contact us</a></li>
                             <li><a href="buynow.php">BuyNow</a></li>
                        </ul>
                    </div>
                </div>

            </div><!-- .row -->

            <div class="right-column hidden-xs">
                <div class="right-area">
                    <div class="nav_side_content">
                         <div id="display">

                      <a href="cart.php"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                      <a href="logout.php" style="float:left;margin-left:3px;"><i class="fa fa-sign-out" aria-hidden="true"></i></a> 
 

                   </div>
               </div>
                </div>                    
            </div> 


         </div><!-- .container -->
    </div>
    <!-- Navigation area ends-->
    <!-- Top Bar Ends -->
    <br>
    <br>
    <br>
    <br>
    <section id="about" class="about-area clearfix">
        <div class="container-fluid">
            <div class="row d-flex">

      <!-- Title -->
      <div class="shopping-cart1">
      <div class="title1">
        Shopping Bag
      </div>
      <?php
                $total1 = '';
                    $i=1;
                    foreach ($cartitems as $key=>$id) {
                    $sql = "SELECT * FROM products WHERE id = $id";
                    $res=mysqli_query($conn, $sql);
                while($r = mysqli_fetch_assoc($res)){ ?>
               
      <!-- Product #1 -->
      <div class="item1">
        <div class="buttons1">
         <a href="delcart.php?remove=<?php echo $key; ?>">Remove</a>
          
        </div>
          <div class="image1">
          <img src="<?php echo $r['image']; ?>" alt=""height="50" width="100" />
        </div>
        <div class="description1">
          <span><?php echo $r['title'];?></span>
         
          
        </div>
         <?php
            $id=$r['id'];
            
            $customerid=$_SESSION['username'];
         // echo "$".$r['price'];
            $sql="SELECT * FROM signup WHERE username = '$customerid'";
            $res=mysqli_query($conn, $sql);
             $r = mysqli_fetch_assoc($res);
              $cid=$r['id'];
            
                    $qry="SELECT * FROM orderdetail WHERE flag=1 AND productid= $id AND customerid=$cid  ORDER BY id desc";
                    $res1=mysqli_query($conn, $qry);
                    $r1 = mysqli_fetch_assoc($res1);?>

        <div class="quantity1">
            <form method="post" action="qty.php" name="test">

          <button class="plus-btn" type="button" name="button">
            <img src="assets/img/plus.svg" alt="" />
          </button>
          <input type="text" name="qty" value="<?php echo $r1['qty'];?>">
         
          <button class="minus-btn" type="button" name="button">
            <img src="assets/img/minus.svg" alt="" />
          </button>
           
        </div>
        <div><input type="hidden" name="id" value="<?php echo $r1['productid'];?> "/>
            <input type="hidden" name="price" value="<?php echo $r1['price'];?> "/>
            
            <!-- <input type="submit" value="update" name="submit"> --></form>
        </div>
        <div class="total-price1"><?php echo"$".$r1['price'];?></div>
        <div class="total-price1">
                               


                    <?php echo $r1['totalprice'];?>
        </div>



    <?php
    $total1 = $total1 + $r1['totalprice'];
                $i++;
                $_SESSION['totalprice']=$total1;
                $total=$_SESSION['totalprice']; }
?>

            </div>

             <?php
              
              }
?>
              <div class="col-md-6 col-sm-6">
                <strong style="float:left;margin-top: 5px;">Total Price :$<?php echo $total; ?></strong>
                <a href="checkout.php" class="btn btn-info" style="float: left;margin-top:5px;">Checkout</a>
                
                
              </div>
        </div>

</div>
    </section>
<div>
             
               
        
</div>

                











<?php require 'common/bottom.php'?>

        
         
    <!-- Latest jQuery -->
   <?php require 'common/footer.php' ?>
   <script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if (value > 1) {
                value = value - 1;
            } else {
                value = 0;
            }

        $input.val(value);
        updateProductSubtotal(this, value);

        });

        $('.plus-btn').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $input = $this.closest('div').find('input');
            var value = parseInt($input.val());

            if (value < 100) {
            value = value + 1;
            } else {
                value =100;
            }

             $qty=$input.val(value);
            
            updateProductSubtotal(this, value);
        });

       

     
    </script>   
    

</body>


<!-- Mirrored from designcarebd.com/corvance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:06:54 GMT -->
</html>  
    
  
   

