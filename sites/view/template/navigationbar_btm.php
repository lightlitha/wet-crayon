	<div class="row">
      <section class="header">
        <nav class="width-sm-20 navbar vicious-stance">
<!--Bottom Section of navigation bar
            –––––––––––––––––––––––––––––––––––––––––––––––– -->
          <div class="width-sm-20 width-xs-20 btm-nav">
            <!--Left Section of navigation bar
            ––––––––––––––––––––––––––––––––––––––––––––––––––-->
            <div class="width-sm-1">
              <div class="width-sm-20 level-1">
                <button class="width-sm-20 btn-0" 
                    <?php if(isset($_GET['id']) && !isset($_GET['trash']))  
                            {echo 'style="font-size: 16pt; color: #059"'; echo 'onClick=' . "location.href=" . "'#'";} 
                          else { echo 'style="font-size: 16pt; color: #333"'; echo 'onClick=' . "void(0)"; } 
                    ?>>
                  <i class="fa fa-eye"></i>
                  <span class="width-xs-20">View</span>
                </button>
              </div>
            </div>
            <div class="width-sm-1">
              <div class="width-sm-20 level-1">
                <button class="width-sm-20 btn-0" 
                    <?php if(isset($_GET['id']) && !isset($_GET['trash']))  
                            {echo 'style="font-size: 16pt; color: #077"'; echo 'onClick=' . "location.href=" . "'?/Filemod/downloadFile/" . htmlspecialchars($_GET['id']) ."'";} 
                          else {echo 'style="font-size: 16pt; color: #333"'; echo 'onClick=' . "void(0)";} 
                    ?>>
                  <i class="fa fa-download"></i>
                  <span class="width-xs-20">Download</span>
                </button>
              </div>
            </div>
            <div class="width-sm-1">
              <div class="width-sm-20 level-1">
                <button class="width-sm-20 btn-0" 
                    <?php if(isset($_GET['id']) && !isset($_GET['trash']))  
                            {echo 'style="font-size: 16pt; color: #F00"'; echo 'onClick=' . "location.href=" . "'?/Filemod/trashFile/" . htmlspecialchars($_GET['id']) ."'";} 
                          else {echo 'style="font-size: 16pt; color: #333"'; echo 'onClick=' . "void(0)";} 
                    ?>>
                  <i class="fa fa-remove"></i>
                  <span class="width-xs-20">Remove</span>
                </button>
              </div>
            </div>
            <?php if(isset($_GET['trash'])) { ?>
              <div class="width-sm-1">
              <div class="width-sm-20 level-1">
                <button class="width-sm-20 btn-0" 
                    <?php if(isset($_GET['id']))  
                            {echo 'style="font-size: 16pt; color: #094"'; echo 'onClick=' . "location.href=" . "'?/Filemod/restoreFile/" . htmlspecialchars($_GET['id']) ."'";} 
                          else {echo 'style="font-size: 16pt; color: #333"'; echo 'onClick=' . "void(0)";} 
                    ?>>
                  <i class="fa fa-undo"></i>
                  <span class="width-xs-20">Restore</span>
                </button>
              </div>
            </div>
            <?php } ?>
            

            <!--Middle Section of bottom navigation bar
            ––––––––––––––––––––––––––––––––––––––––––––––––––-->
            <div class="width-sm-4 width-xs-0">
              <button class="btn-0" class="width-sm-20"></button>
            </div>
            <div class="width-sm-6">
              <form>
                <input type="text" name="search" placeholder="Search Text" class="width-xs-16" style="color: #000; padding: 25px 0px 25px 0px; font-size: 12pt; border: none; background-color: #eee">
                <div class="width-xs-4">
                  <div class="width-sm-20 level-1">
                    <button class="width-sm-20 btn-0" style="font-size: 16pt; color: #333">
                      <i class="fa fa-search"></i>
                      <span class="width-xs-20"></span>
                    </button>
                  </div>
                </div>
              </form>
            </div>

            <!--Right Section of navigation bar fa-ellipsis-h
            ––––––––––––––––––––––––––––––––––––––––––––––––––-->
          <div class="width-xs-4" style="float:right;">
            <div class=" w3-bar width-xs-20">
              <span class="w3-bar-item w3-button" style="color: #000; font-size: 10pt;">
                Welcome <br/> 
              </span>
              <a href="#" class="w3-bar-item w3-button">
                <img src="sites/usr/img/cat3.png" style="width:32px">
              </a>
            </div>
          </div>
          </div>
        </nav>
    </section>
</div>
