<?php
define('ROOT_DIR', '');
require_once(ROOT_DIR.'includes/loader.php');
require_once(ROOT_DIR.'includes/partials/header.php');

?>
<div style="height:100%; background-color:whitesmoke; padding:10px;">
    <h3 style="text-align:center;">
        <?php echo $user->DepartmentDesc . ' Department Assets' ?>
    </h3>
    <div>
        <h5>User Assets in <?php echo $user->DepartmentDesc . ' Deparment' ?></h5>
    </div>
    <div>
        <h5>Avaliable Assets in <?php echo $user->DepartmentDesc . ' Deparment' ?></h5>
    </div>
</div>


<?php require_once(ROOT_DIR.'includes/partials/footer.php'); ?>