<?php $result = \Epiqworx\Abstraction\DBHandler::DQLi("SELECT id, thumbnail, name, flag FROM wc_file WHERE member = 1 AND active = 2"); ?>
<?php if(empty($result)) { ?>
<div class="" style="margin: auto; padding-top: 50px;">
  <a href="?/Welcome/summon/home">
  <button class="btn-0" class="width-sm-20" style="font-size: 48pt;">
    <i class="fa fa-trash"></i>
    <span class="width-xs-20" style="font-size:22pt">No Trashed Files Found <br/> Try Trashing Unwanted Uploaded Files</span>
  </button>
  </a>
</div>
<?php } else { ?>
    <div class="img-row"> 
    <?php for($x = 0; $x < count($result); $x++) { ?>
        <div class="column">
            <a href="?/Welcome/summon/trash&trash=1&id=<?php echo $result[$x]['id']; ?>"> 
                <img src="sites/usr/img/<?= $result[$x]['thumbnail']?>.png" alt="Avatar" style="width:100%">
            </a>
            <div class="container">
                <span class="width-xs-20 txt-c"><b><?php echo $result[$x]['name']?></b></span>
                <p class="width-xs-20 txt-c"><?php echo $result[$x]['flag']?></p>
            </div>
        </div>
    <?php  } ?>
    </div>
<?php } ?>

