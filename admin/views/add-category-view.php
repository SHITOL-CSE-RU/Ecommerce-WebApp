<?php
$obj_adminBack = new adminBack();
if (isset($_POST['ctg_btn'])) {
    $return_mesg = $obj_adminBack->add_category($_POST);
}
?>

<form action="" method='POST'>
    <h1>Add Category</h1><br>
    <div class="form-group">
        <label for="ctg_name">Category Name</label>
        <input type="text" name="ctg_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="ctg_des">Category Description</label>
        <input type="text" name="ctg_des" class="form-control">
    </div>
    <div class="form-group">
        <label for="ctg_name">Category Status</label>
        <select name="ctg_status" class="form-control">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>
    <input type="submit" value="Add Category" name="ctg_btn" class="btn btn-primary"><br>
    <?php
    if (isset($return_mesg)) {
        echo $return_mesg;
    }
    ?>
</form>