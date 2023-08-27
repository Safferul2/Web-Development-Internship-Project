<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else {
  $loggedin=false;
}
echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">ChitChat</a>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto>
        <li class="nav-item active">
          <a class="nav-link" href="/phpscript/Home.php">Home</a>
        </li>';

        if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/phpscript/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/phpscript/signup.php">Signup</a>
        </li>';
      }
        if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/phpscript/logout.php">Logout</a>
      </li> </ul>';
    }
  echo '
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav> ';

?>
