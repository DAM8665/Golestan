<?php
include  "../common/header.php";
include  "../common/General.php";
include "../DBConfig.php";
include "ProductController.php";
$mes ="";
if(isset($_POST) & !empty($_POST)) {

    if (isset($_POST['Add'])) {
        $controller = new ProductController();
        $mes = $controller->addNewProduct($_POST['Name'],$_POST['Description'],$_POST['Stock'],$_POST['Price']);

    }
}
?>
        <div class="container fill_height" style="padding-top: 100px">
            <div class="row align-items-center fill_height">
                <div class="col-md-6">
                    <form method="post" enctype="multipart/form-data">
                        <p style="color: green;text-align: center"> <?php echo $mes?></p>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input class="form-control" type="text" placeholder="Name"  name="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" name="Description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stock</label>
                            <input class="form-control" type="text" placeholder="Stock" name="Stock">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Price</label>
                            <input class="form-control" type="text" placeholder="Price" name="Price">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">image</label>
                            <input type="file" id="image" class="form-control" name="image">
                        </div>



                        <button type="submit" class="btn btn-primary"  name="Add" id="Add">Submit</button>
                    </form>
                </div>
            </div>
        </div>


<?php
include '../common/footer.php';
?>