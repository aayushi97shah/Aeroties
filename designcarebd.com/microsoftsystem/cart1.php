<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['username']))
{
    header("location:buynow.php");
}


       

      
       
       
    
?>
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
    
   

<?php
 if(isset($_SESSION['username']))
       {
        require 'common/top1.php';
       }
 ?>
   
   
<?php
session_start();
$items=$_SESSION['cart'];
$qty=$_SESSION['qty'];
$cartitems=explode(",", $items);
$quantity=explode(",", $qty);
$categories = '';
$x=count($quantity);
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
foreach ($quantity as $k1=>$item)
?>

<br>
<br>
<br>

<section id="about" class="about-area clearfix">
        <div class="container-fluid">
            <div class="row d-flex">
            <table border="1" style="margin-left:50px; margin-bottom: 20px;">
            <tr>
		          <th>S.no</th>
		          <th>Item Name</th>
                  <th>Quantity</th>
		          <th>Remove</th>
		          <th>Price</th>

	       </tr> 



                <?php
                    $total1 = '';
                    $i=1;
                    foreach ($cartitems as $key=>$id) {
                    $sql = "SELECT * FROM products WHERE id = $id";
                    $res=mysqli_query($conn, $sql);
                    $r = mysqli_fetch_assoc($res);
                ?>	  
            <tr>
                <td><?php echo $i; ?></td>

                <td><?php echo $r['title']; ?></td>
                <td>  
                </td>
                <td><a href="delcart.php?remove=<?php echo $key; ?>">Remove</a> </td>
                
                <td>$<?php echo $r['price']; ?></td>

            </tr>
            <?php
                $total1 = $total1 + $r['price'];
                $i++;
                $_SESSION['total']=$total1;
                $total=$_SESSION['total'];
                }
                ?>
            <tr>
                <td><strong>Total Price</strong></td>
                <td><strong>$<?php echo $total; ?></strong></td>
                <td colspan="2"><a href="checkout.php" class="btn btn-info">Checkout</a></td>
            </tr>
        </table>
</div>                 
        </div>       
    </section>
    <a href="logout.php">Logout</a>

 

       <?php require 'common/bottom.php'?>
         
    <!-- Latest jQuery -->
   <?php require 'common/footer.php' ?>   
    
</body>


<!-- Mirrored from designcarebd.com/corvance/project.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 May 2018 09:06:54 GMT -->
</html>

<!-- http://codingcyber.org/simple-shopping-cart-application-php-mysql-6394/ -->