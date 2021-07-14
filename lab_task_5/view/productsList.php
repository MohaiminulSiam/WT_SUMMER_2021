<?php include('../model/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><h1>Products List</h1></legend>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Picture</th>
                <th>Action</th>
            </tr>

            <?php
                $connection = new db();
                $conobj = $connection->OpenCon();
                $allProducts = $connection->ShowAll($conobj, "product");

                while($row = mysqli_fetch_object($allProducts)){
                    ?>
                        <tr>
                            <td><?=$row->P_id?></td>
                            <td><?=$row->P_Name?></td>
                            <td><?=$row->P_Desc?></td>
                            <td><?=$row->P_Category?></td>
                            <td><?=$row->P_Price?></td>
                            <td><?=$row->P_Picture?></td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <a href="../view/addproduct.php?edit_id=<?=$row->P_id?>">Update</a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    <?php
                }
            ?>

        </table>

        <br>
            <a href="pageone.php">Back</a>
        <br>

    </fieldset>
</body>
</html>