<?php
  session_start();

  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        /* background-color: black; */
        background-image: url("vc_images/vc_img.jpg");
        /* display: flex; */
        /* height: 100vh; */
        margin: 0;
        align-items: center;
        justify-content: center;
        /* padding: 0 50px; */
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      }
      video {
        /* max-width: calc(50% - 100px); */
        width: auto;
        margin: 0 50px;
        height: 300px;
        align-self: center;
        /* box-sizing: border-box; */
        border-radius: 2px;
        padding: 0;
        background: lightblue;
      }
      .containers{
        height: 30px;
      }
      .videos{
        padding-top: 30px;
        margin-top: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      section{
        text-align: center;
      }
      button{
        background-color: #02cb69;
        color: #ffffff;
        margin: 10px 0 30px 0;
        padding: 5px 20px;
        border-radius: 5px;
        outline: none;
        cursor: pointer;
      }
      button{
        font-weight: bold;
      }
      .url{
        display: inline-block;
        font-weight: bold;
      }
      footer{
        background-position: center;
        background-color: #02cb69;
        color: white;
        font-weight: bold;
        text-align: center;
        position: fixed;
        bottom: 0;
        height: 30px;
        width: 100%;
      }
  </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Welcome </title>
  </head>
  <body>
    <?php require 'partials/nav.php' ?>
    <div class="containers">
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Welcome to ChitChat , <?php echo $_SESSION['username']?> !!!</h4>
    <div class="imp">Send this URL to your friends to start, <?php echo $_SESSION['username']?>
       : <div class="url"><?php echo current_url() ?> <button id="btnCopy" onclick="copy('url')"> Copy </button>
     <a href="whatsapp://send?text=<?php echo current_url() ?>" data-action="share/whatsapp/share" target="_blank"> <button>Through WhatsApp</button></a>
     </div>
   </div>
    </div>
    </div>

    <section>
    <?php
    function current_url()
    {
      $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      $validURL = str_replace("&","&amp;",$url);

      return $validURL;
    }

      echo "Page URL is : ";
      // echo "<a href="current_url()"> $validURL </a>";
     ?>
    </section>
    <div class="videos">
    <video id="localVideo" autoplay muted></video>
    <video id="remoteVideo" autoplay ></video>
    </div>

    <script src="script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    <footer>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="/phpscript/logout.php"> using this link.</a></p>
    </footer>
  </body>
  <script>
    function copy(copyId) {
      let inputElement = document.createElement("input");
      inputElement.type = "text";
      let copyText = document.getElementById(copyId).innerHTML;
      inputElement.value = copyText;
      document.body.appendChild(inputElement);
      inputElement.select();
      document.execCommand('copy');
      document.body.removeChild(inputElement);

      document.getElementById("alert").style.display = "block";
      setTimeout(function(){
          document.getElementById("alert").style.display = "none";
      }, 1000);
    }
  </script>
</html>
