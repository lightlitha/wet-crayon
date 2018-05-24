<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Wet Crayon</title>
  <meta name="description" content="PPTX/PowerPoint Repository">
  <meta name="author" content="Nikitha Lilitha Mathagana">
  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="sites/usr/css/normalize.css">
  <link rel="stylesheet" href="sites/usr/css/skeleton.css">
  <link rel="stylesheet" href="sites/usr/css/w3.css">
  <link rel="stylesheet" href="sites/usr/css/custom.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--link rel="icon" type="image/png" href="images/favicon.png"-->
</head>
<body>

<!-- Styling
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<style>
  .form-style-8{
      font-family: 'Open Sans Condensed', arial, sans;
      width: 500px;
      padding: 30px;
      background: #FFFFFF;
      margin: 50px auto;
      box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.22);
      -moz-box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.22);
      -webkit-box-shadow:  0px 0px 1px rgba(0, 0, 0, 0.22);

  }
  .form-style-8 h2{
      background: #29323c;
      text-transform: uppercase;
      font-family: 'Open Sans Condensed', sans-serif;
      color: #EEE;
      font-size: 18px;
      font-weight: 100;
      padding: 20px;
      margin: -30px -30px 30px -30px;
  }
  .form-style-8 input[type="text"],
  .form-style-8 input[type="date"],
  .form-style-8 input[type="datetime"],
  .form-style-8 input[type="email"],
  .form-style-8 input[type="number"],
  .form-style-8 input[type="search"],
  .form-style-8 input[type="time"],
  .form-style-8 input[type="url"],
  .form-style-8 input[type="password"],
  .form-style-8 textarea,
  .form-style-8 select
  {
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      outline: none;
      display: block;
      width: 100%;
      padding: 7px;
      border: none;
      border-bottom: 1px solid #ddd;
      background: transparent;
      margin-bottom: 10px;
      font: 16px Arial, Helvetica, sans-serif;
      height: 45px;
  }
  .form-style-8 textarea{
      resize:none;
      overflow: hidden;
  }
  .form-style-8 input[type="button"],
  .form-style-8 input[type="submit"]{
      display: inline-block;
      cursor: pointer;
      color: #000;
      font-size: 12px;
      padding: 8px 8px;
      text-decoration: none;
  }
  .form-style-8 input[type="button"]:hover,
  .form-style-8 input[type="submit"]:hover {
    background-color: #29323c;
    color: #EEE;
  }
  .form-style-8 .help-block {
    padding: 20px 5px;
  }


  .alne-no-float {
    display: inline-block;
    text-align: center;
    width: 24%;
  }
  .alne-no-float a {
    text-decoration: none;
    font-size: 16pt;
  }
  .alne-no-float span {
    font-size: 8pt;
  }
  .active {
    /*background-color: #fff; color: #777;*/
  }
  .tabcontent {
    background-color: transparent;
  }
.alert {
  padding: 10px;
}
.alert-success {
  background-color: #4BB543;
  color: #FFF;
}
.alert-danger {
  background-color: #D9534F;
  color: #FFF;
}
</style>


<!-- Image Grid
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<style>
.img-row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 10%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 150px;
}
.column img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
/* Responsive layout - makes six columns */
@media screen and (max-width: 1280px) {
    .column {
        -ms-flex: 16.66%;
        flex: 16.66%;
        max-width: 16.66%;
    }
}

/* Responsive layout - makes four columns */
@media screen and (max-width: 1080px) {
    .column {
        -ms-flex: 25%;
        flex: 25%;
        max-width: 25%;
    }
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}

</style>

<!-- Tabs Used in Sidebar
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<style>
    /* Style the tab */
    .sblable {
        padding: 5px;
        width: 40%;
    }
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #FFF;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 16px;
    transition: 0.3s;
    font-size: 17px;
    width: 33%;
    border-radius: 0px;
    color: #485563;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #485563;
    color: #FFF;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<!-- Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->