<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="Binary_tree\style.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
</head>
<style>
  * {
    box-sizing: border-box;
  }
  body {
    font-family: 'Montserrat', sans-serif;
    line-height: 1.6;
    margin: 0;
    min-height: 100vh;
  }
  ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }
  h2,
  h3,
  a {
    color: #34495e;
  }
  a {
    text-decoration: none;
  }
  .logo {
    margin: 0;
    font-size: 1.45em;
  }
  .main-nav {
    margin-top: 5px;
  }
  .logo a,
  .main-nav a {
    padding: 0px 15px;
    text-transform: uppercase;
    text-align: center;
    display: block;
  }
  .main-nav a {
    color: #074173;
    font-size: 1em;
  }
  .main-nav a:hover {
    color: #074173;
  }
  .header {
    padding-top: .5em;
    padding-bottom: .5em;
    border: 1px solid #a2a2a2;
    background-color: #f4f4f4;
    -webkit-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.75);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
  }
  @media (min-width: 769px) {
    .header,
    .main-nav {
      display: flex;
    }
    .header {
      flex-direction: column;
      align-items: center;
      .header {
        width: 80%;
        margin: 0 auto;
        max-width: 1150px;
      }
    }
  }
  @media (min-width: 1025px) {
    .header {
      flex-direction: row;
      justify-content: space-between;
    }
  }
  body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

</style>
<body>
      <header class="header">
        <h1 class="logo"><a href="index.html">Tree Vizualization</a></h1>
        <nav>
          <ul class="main-nav">
            <li><a href="index.php">Binary Tree</li>
            <li><a href="./logout.php" >Sign out</a></li>
        </nav>
    </header>
    <div class="container">
      <br>
      <br>
      <div class="findContainer"> 
        <h1 class="fw-light text-white m-0">Binary Tree Visualization</h1>
      </div>
      <textarea oninput="action()" type="number" placeholder='Enter an array which is separated with space. The root is first element.
    Ex: 5 9 1 3 7' id="inp" cols="30" rows="10"></textarea>
      <div class="btn-container">
        <button class="btn-clear" onclick="clearAndCreate()">Clear</button>
        <button class="btn" disabled onclick="toggleLock()">Lock</button>
      </div>
      <div class="box graph" id="tree"></div>
    </div>
    </body>
    <script src="Binary_tree\js\index.js"></script>
    <script src="Binary_tree/js/d3js.js"></script>
    <script src="Binary_tree\js\draw.js"></script>
    <script src="Binary_tree\js\binaryTree.js"></script>
</body>
</html>
