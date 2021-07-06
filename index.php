<?php include_once "template/header.php";?>

<div class="container">


    <?php
    if (isset($_POST['add'])){
        if (addCategory()){
            echo showAlert('success','Add Category Success');
        }else{
            echo showAlert('danger','Add Category Fail');
        }
    }

//    delete
    if (isset($_POST['delete'])){
        $id = $_POST['id'];
        if (deleteCategory($id)){
            echo showAlert('success','Delete Category Success');
        }else{
            echo showAlert('danger','Delete Category fail');
        }
    }
    ?>
    <div class="row">
        <div class="col-6">
            <div class="my-3">
                <div>
                    <form method="post" class="d-flex d-inline-block" >

                        <label>
                            <input type="text" name="category" class="form-control" placeholder="Add Category">
                        </label>
                        <button class="btn btn-outline-primary ms-2" name="add">
                            <i class="bi bi-plus-circle"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="my-2">
            <div class="col-12 col-lg-6">
                <table class="table table-bordered table-striped align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Control</th>
                            <th>Created_At</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach (categories() as $row){
                    ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->title; ?></td>
                            <td>
                                <div>
                                    <a href="edit.php?id=<?php echo $row->id; ?>" class="btn btn-outline-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form class="d-inline-block" method="post">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $row->id?>">
                                        <button class="btn btn-outline-danger" name="delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td><?php echo $row->created_at; ?></td>
                        </tr>
                    <?php };  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include_once "template/footer.php";?>

