<?php
include ('../control/addproductcheck.php');
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
    <?php
        if(isset($_GET['edit_id'])){
            $connection = new db();
            $conobj = $connection->OpenCon();
            $allProducts = $connection->ShowAll($conobj, "product");

            while($row = mysqli_fetch_object($allProducts)){
                ?>
                    <h2>Update Product</h2>
                    <form action="../control/updateProduct.php" method="post" enctype="multipart/form-data">
                        Product Name 
                        <input type="text" name="P_Name" value="<?=$row->P_Name?>">
                        Product Description 
                        <input type="text" name="P_Desc" value="<?=$row->P_Desc?>">
                        Product Category 
                        <input type="text" name="P_Category" value="<?=$row->P_Category?>">
                        Product price 
                        <input type="number" name="P_Price" value="<?=$row->P_Price?>">
                        Product Image 
                        <input type="file" name="P_Picture">
                        <input type="hidden" name="P_id" value="<?=$_GET['edit_id']?>">

                        <input type="submit" name="update" value="Update Product">

                    </form>
                <?php
            }
        }
        else{
            ?>
                <h2>Add Product</h2>
                <form action="../control/updateProduct.php" method="post" enctype="multipart/form-data">
                    Product Name 
                    <input type="text" name="pname">
                    Product Description 
                    <input type="text" name="pdesc">
                    Product Category 
                    <input type="text" name="pcate">
                    Product price 
                    <input type="number" name="pprice">
                    Product Image 
                    <input type="file" name="pimage">

                    <input type="submit" name="add" value="ADD Product">

                </form>
            <?php
        }
    ?>

</body>
</html>