<?php include_once "template/header.php";?>

<div class="container">
    <div class="row">
        <div class="col-6 my-2">
            <a href="index.php" class="btn btn-outline-primary">
                <i class="bi bi-arrow-left-circle"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="my-2">

                <?php
                if (isset($_POST['update'])){
                    $id = $_GET['id'];
                    if (updateCategory($id)){
                        echo showAlert('success','Update Category Success');
                    }else{
                        echo showAlert('danger','Update Category Fail');
                    }
                }

                ?>
                <form method="post">
                    <input type="text" class="form-control" name="category" placeholder="Edit Category">
                    <button class="btn btn-outline-success my-3" name="update">Update</button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "template/footer.php";?>
