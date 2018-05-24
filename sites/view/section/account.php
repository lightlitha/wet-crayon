<style media="screen">
  .tabcontent {display: none;}
  #Information {display: block;}
</style>
<section class="">
  <!--Information Form
    ––––––––––––––––––––––––––––––––––––––––––––––––––-->
    <div class="form-style-8 tabcontent" id="Information">
        <h2>Update Your Details</h2>
        <form method="post" action="#" enctype="multipart/form-data">
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
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="text" name="fname" id="fname" placeholder="First Name">
            <input type="text" name="lname" id="lname" placeholder="Last Name">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="email" name="email2" id="email2" placeholder="Confirm Email">
            <input type="submit" value="Update" id="acc_update" />
        </form>
    </div>
    <!--Account Form
      ––––––––––––––––––––––––––––––––––––––––––––––––––-->
      <div class="form-style-8 tabcontent" id="Account">
          <h2>Deactivate Account and Leave a Message</h2>
          <form method="post" action="#" enctype="multipart/form-data">
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
              <h1>Information about deactivating an account on wetcrayon</h1>
              <input type="checkbox" name="deactivating" id="deactivating"> Are you sure you want to Deactivate Account ? <br/>
              <input type="submit" value="Submit" id="deactBtn" />
          </form>
      </div>
      <!--Picture Form
        ––––––––––––––––––––––––––––––––––––––––––––––––––-->
        <div class="form-style-8 tabcontent" id="Picture">
            <h2>Add A New Face To Your Account</h2>
            <form method="post" action="#" enctype="multipart/form-data">
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
                <input type="file" id="file" onchange="return fileValidation()"/>
                <div id="imagePreview"></div>
                <input type="submit" value="Upload" id="upload" />
            </form>
        </div>

        <!--Password Form
          ––––––––––––––––––––––––––––––––––––––––––––––––––-->
          <div class="form-style-8 tabcontent" id="Password">
              <h2>Update Your Password</h2>
              <form method="post" action="#" enctype="multipart/form-data">
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
                  <input type="password" name="oldpassword" id="oldpassword" placeholder="Old Password">
                  <input type="password" name="password" id="password" placeholder="New Password">
                  <input type="password" name="password2" id="password2" placeholder="Confirm New Password">
                  <input type="submit" value="Update" id="acc_update" />
              </form>
          </div>
          <!--Navigation
            ––––––––––––––––––––––––––––––––––––––––––––––––––-->

    <div class="form-style-8">
      <nav class="navbar vicious-stance">
        <div class="alne-no-float">
          <div class="level-1">
            <a>
              <button class="btn-0" onclick="openSettings(event, 'Password')">
                <span class="">Password</span>
              </button>
            </a>
          </div>
        </div>
        <div class="alne-no-float">
          <div class="level-1">
            <a>
              <button class="btn-0" onclick="openSettings(event, 'Picture')">
                <span class="">Picture</span>
              </button>
            </a>
          </div>
        </div>
        <div class="alne-no-float">
          <div class="level-1">
            <a>
              <button class="btn-0" onclick="openSettings(event, 'Account')">
                <span class="">Account</span>
              </button>
            </a>
          </div>
        </div>
        <div class="alne-no-float">
          <div class="level-1">
            <a>
              <button class="btn-0"  onclick="openSettings(event, 'Information')">
                <span class="">Information</span>
              </button>
            </a>
          </div>
        </div>
    </div>
</section>

<script type="text/javascript">
function openSettings(evt, settName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(settName).style.display = "block";
  evt.currentTarget.className += " active";
}

function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'" width=100%;/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>
