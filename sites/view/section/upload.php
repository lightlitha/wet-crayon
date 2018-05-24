<section class="">
        <div class="form-style-8">
        <h2>Upload File</h2>
        <form method="post" action="?/Filemod/uploadPowerPoint/upload" enctype="multipart/form-data">
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
          <input type="file" name="file" id="file" onchange="return fileValidation('file', 'The file chosen cannot be uploaded <br/> please Upload PowerPoint presentations only', 'helpmsg', /(\.ppt|\.pptx)$/i)">
          <p class="help-block" id="helpmsg">Upload PowerPoint file</p>
          <input type="submit" value="Upload" id="ppt_submit" />
        </form>
    </div>
</section>

<script type="">
function fileValidation(id, msg, msgid = "helpmsg", ext = /(\.jpg|\.jpeg|\.png|\.gif)$/i) {
  var fileInput = document.getElementById(id);
  var filePath = fileInput.value;
  var allowedExtensions = ext;
  if(!allowedExtensions.exec(filePath)){
      document.getElementById(msgid).innerHTML = msg;
      document.getElementById(msgid).style.color = 'red';
      document.getElementById("ppt_submit").disabled = true;
      fileInput.value = '';
      return false;
  }else{
    document.getElementById(msgid).innerHTML = "PowerPoint File Ready For Upload";
    document.getElementById(msgid).style.color = 'black';
    document.getElementById("ppt_submit").disabled = false;
  }
}
</script>
