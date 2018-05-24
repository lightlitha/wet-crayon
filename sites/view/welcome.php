<?php require_once 'template/header.php'; ?>
<?php require_once 'template/navigationbar_top.php'; ?>
<?php require_once 'template/navigationbar_btm.php'; ?>
<?php if(!isset($_GET['trash'])) { ?>
    <?php require_once 'template/sidebar.php'; ?>
<?php } ?>
<?php
    if(isset($req_ano)) {
      require_once $req_ano;
    }
?>
<?php require_once 'template/footer.php'; ?>
