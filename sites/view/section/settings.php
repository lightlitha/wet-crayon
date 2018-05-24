<section class="">
        <div class="form-style-8">
        <h2>Settings</h2>
        <nav class="navbar vicious-stance">
          <div class="alne-no-float">
            <div class="level-1">
              <a>
                <button class="btn-0" onclick="openSettings(event, 'Theme')">
                  <span class="">Theme</span>
                </button>
              </a>
            </div>
          </div>
          <div class="alne-no-float">
            <div class="level-1">
              <a>
                <button class="btn-0" onclick="openSettings(event, 'Language')">
                  <span class="">Language</span>
                </button>
              </a>
            </div>
          </div>
        </nav>
          <div class="tabcontent" id="Theme">
              <form method="post" action="#" enctype="multipart/form-data" style="padding-bottom: 20px; padding-top:20px;">
                <?php if(isset($smsg)){ ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo $smsg; ?>
                    </div>
                  <?php } ?>
                  <?php if(isset($fmsg)){ ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $fmsg; ?>
                    </div>
                  <?php } ?>
                  <input type="radio" name="theme" value="default" > Defualt <br/><br/>
                  <input type="radio" name="theme" value="vicious-stance" > Vicious Stance <br/> <br/>
                  <input type="radio" name="theme" value="mind-crawl" > Mind Crawl <br/> <br/>
                  <input type="radio" name="theme" value="midnight-boom" > Midnight Boom <br/> <br/>
                  <input type="radio" name="theme" value="eternal-constance" > Eternal Constance <br/> <br/>
                  <input type="radio" name="theme" value="morpheus-den" > Morpheus Den <br/> <br/>
                  <input type="submit" value="Update" id="acc_update" />
              </form>
          </div>
    </div>
</section>
