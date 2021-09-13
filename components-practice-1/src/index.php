<?php 

?>

<html>
<!DOCTYPE HTML>
<!-- Remove all optional tags before deploying to production (head,body,etc.) - they're just needed for live server in vs code. -->
<head> 

 <!-- Custom -->
 <link rel="stylesheet" type="text/css" href="styles/convenience.css">
    
 <!-- Vue -->
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

 <!-- Jquery -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <!-- Popper -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <!-- Bootstrap -->
 <!-- Stylesheet -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <!-- Script -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
<!-- DropZone -->
<script src="js/dropzone.js"></script>
<link rel="stylesheet" type="text/css" href="styles/dropzone.min.css">
<link rel="stylesheet" type="text/css" href="styles/basic.css">

 <!-- The App -->
 <script src="js/app.js"></script>

</head>


<!-- Image and text -->
<nav class="navbar fixed-top navbar-dark bg-theme-primary justify-content-center">
    <a class="navbar-brand" href="hi.html">
      <img src="img/shield-icon-1.ico" width="30" height="" class="d-inline-block align-top" alt="">
      Obfuscator
    </a>
</nav>


<body>

<div class=" center-screen">
    
  <div class ="col-lg">
    <!-- <div class="row center-contents">
      <img src="img/shield-icon-1.ico" width="90" height="" class="d-inline-block align-top" alt="">
    </div> -->

    <div class="row three-pct-padding">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Obfuscate your file.</h1>
        <p class="lead">Keep your source code protected from intellectual property theft and copyright infringement.</p>
        </div>
    </div>

        <div class="row center-contents">
            <form action="upload.php" class="dropzone dz-clickable max-width-thirty-vw max-height-ten-vh" id="my-awesome-dropzone">
                <div class="dz-message center-contents thirty-vw ten-vh">
                    <img src="img/cloud-upload-icon.png" width="60" height="" class="d-inline-block align-top" alt="">
                    <p class="ten-pct-padding">Drag &amp; Drop here or click</p> 
                </div>
                <div class="fallback">
                    <input  name="file" type="file" multiple />
                </div>
            </form>
        </div>

        <div class="row center-contents">
            <div class="btn btn-primary" id ="upload-button">Upload</div>
</div>
    </div>
 </div>
</div>

</body>


<div class ="fifty-px-footer bg-theme-primary">


</div>

</html>

