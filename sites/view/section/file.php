<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left width-xs-5" id="myFileBar"><br>
  <div class="w3-container w3-row">

  </div>
  <hr>
  <div class="w3-container"></div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-question fa-fw"></i>  Help</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a>
    <hr>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file fa-fw"></i>  New File</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-folder fa-fw"></i>  New Folder</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<script>
// Get the Sidebar
var myFileBar = document.getElementById("myFileBar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (myFileBar.style.display === 'block') {
        myFileBar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        myFileBar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    myFileBar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
