<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      }
      #bold{
        font-size: 30px;
        font-weight: bolder;
        /* display: inline; */
      }
      .intro{
        background-image: url("vc_images/videochat.jpg");
        background-position:left;
        background-repeat: no-repeat;
        font-weight: bold;
        font-size: 20px;
        height: 620px;
        color: white;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        /* width: 30%; */
        align-items: center;
        justify-content: center;

      }
      .upimage{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: auto;
        margin-right: auto;
      }

      .para{
        margin-top: 92px;
        width: 612px;
        height: 434px;
        display:block;
        float: right;
        margin-right: 30px;
        margin-left: 70px;
        justify-content: right;
        /* align-items: right; */
        height: 70%;
        text-align: center;
        background-color: rgba(128,128,128,30%);
      }
      footer{
        text-align: right;
        font-weight: bold;
        border-top: 6px groove black;
        border-bottom: 6px groove black;
        background-color: lightgrey;
        bottom: 0;
        margin-bottom: 0;
      }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>

  <header>
    <?php require 'partials/nav.php' ?>
  </header>
  <div class="upimage">
      <img src="vc_images/CHITCHAT.png" width="230px" height="230px">
  </div>

    <div class='intro'>
      <div class="para">
    <div id="bold">Don’t let distance get in your way, Meet Now!</div> </br> </br>
    It’s easy – simply Copy the URL and share with people you want to join the call.</br>
    Enjoy free video calls using ChitChat.</br></br>
    Start using Signing up by clicking this Button.</br>
    <form action="/phpscript/signup.php"></br>
    <button type="submit" class="btn btn-primary btn-lg">Get Started</button>
    </form>
      </div>

</div>


  <footer>
    No Emergency calls with ChitChat !!!</br>
ChitChat is not a replacement for your telephone and can't be used for emergency calling.
</footer>
  </body>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>
