<?php
if (isset($_GET['id']) && !isset($_GET['trash'])) {
    $fileid = htmlspecialchars($_GET['id']);
    $sqlquery = "SELECT fi.name, fi.extension, fi.location, fi.created, fi.modified, fi.fsize, fl.name AS flagname FROM wc_flag fl, wc_file fi WHERE fi.active = 1 && fi.id = $fileid;";
    $result = \Epiqworx\Abstraction\DBHandler::DQLqi($sqlquery);
    $colorflag = \Epiqworx\Abstraction\DBHandler::DQLi("SELECT * FROM wc_flag");
    $sortby = \Epiqworx\Abstraction\DBHandler::DQLi("SELECT id, name, checked FROM wc_forder");
    ?>
    <style> #sidebar, #Info {display: block;} </style>
<?php } else { ?>
    <style> #sidebar {display: none;} </style>
<?php } ?>

<aside id="sidebar" class="width-sm-4 width-xs-20 " style=" right:0; position: absolute;">
    <div id="fileInfo">
        <div class="tab">
            <button class="tablinks active" onclick="openTabCont(event, 'Info')">Info</button>
            <button class="tablinks" onclick="openTabCont(event, 'Options')">Options</button>
            <button class="tablinks" onclick="openTabCont(event, 'Update')">Update</button>
        </div>

        <div id="Info" class="tabcontent">
            <br/>
            <p><span class="width-xs-5 sblable">Name : </span> <span class=""> <?php echo $result['name'] ?></span></p>
            <div class="width-xs-20"></div>
            <p><span class="width-xs-5 sblable">Location : </span> <span class=""> <?php echo $result['location'] ?>/</span></p>
            <div class="width-xs-20"></div>
            <p><span class="width-xs-5 sblable">Created : </span> <span class=""> <?php echo $result['created'] ?></span></p>
            <div class="width-xs-20"></div>
            <p><span class="width-xs-5 sblable">Modified : </span> <span class=""> <?php echo $result['modified'] ?></span></p>
            <div class="width-xs-20"></div>
            <p><span class="width-xs-5 sblable">Size : </span> <span class=""> <?php echo $result['fsize'] ?></span></p>
            <div class="width-xs-20"></div>
            <p><span class="width-xs-5 sblable">Flag : </span> <span class=""> <?php echo $result['flagname'] ?></span></p>
        </div>

        <div id="Options" class="tabcontent">
            <?php for($x = 0; $x < count($sortby); $x++) { ?>
                <input type="checkbox" checked="" name="sortby" value="<?php echo $sortby[$x]['id']; ?>">
                <span><?php echo $sortby[$x]['name']; ?></span>
                <br/>
            <?php } ?>
        </div>

        <div id="Update" class="tabcontent">
            <?php $res = explode('.', $result['name']); ?>
            <form method="post" action="?/Filemod/updateFile/<?php echo htmlspecialchars($_GET['id']); ?>">
                <br/>
                <p>
                    <span class="width-xs-5 sblable">Name : </span> 
                    <input type="text" name="filename" value="<?php echo $res[0];?>">
                    <input type="hidden" name="ext" value="<?php echo $res[1];?>">
                    <span class="width-xs-5 sblable">File Category : </span> 
                    <input type="text" name="filecategory" value="">
                </p>
                <hr/>
                <h6>Flag</h6>
                <?php for($x = 0; $x < count($colorflag); $x++) { ?>
                <?php if($colorflag[$x]['name'] == $result['flagname']) { ?> 
                <input type="radio" checked="" name="colorflag" value="<?php echo $colorflag[$x]['id']; ?>"> 
                <?php } else { ?>
                <input type="radio" name="colorflag" value="<?php echo $colorflag[$x]['id']; ?>"> 
                <?php } ?>
                <span style="color: <?php echo $colorflag[$x]['color']; ?>"> <?php echo $colorflag[$x]['name']; ?> </span>
                <br/> 
                <?php  } ?>
                <br/>
                <input type="submit" value="Update">
            </form>
        </div>
    </div>

    <!--    <div id="fileEdit">
            <div class="tab">
                <button class="tablinks" onclick="openTabCont(event, 'Add')">Add</button>
                <button class="tablinks" onclick="openTabCont(event, 'Remove')">Remove</button>
                <button class="tablinks" onclick="openTabCont(event, 'Save')">Save</button>
            </div>
        </div>-->
</aside>

<script>
    function openTabCont(evt, tabOption) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabOption).style.display = "block";
    evt.currentTarget.className += " active";
    }
</script>