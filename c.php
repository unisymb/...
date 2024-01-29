<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle Navbar with Search Example</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: #333;
      overflow: hidden;
    }

    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }

    .navbar input[type="text"] {
      float: right;
      padding: 8px; /* Adjusted padding */
      margin: 8px;
      border: none;
      font-size: 14px; /* Adjusted font size */
      width: 80%; /* Adjusted width */
      box-sizing: border-box;
    }

    .navbar-toggle {
      display: none;
      cursor: pointer;
      font-size: 18px;
    }

    @media screen and (max-width: 600px) {
      .navbar a:not(:first-child) {
        display: none;
      }

      .navbar input[type="text"] {
        float: none;
        display: block;
        width: 100%;
        box-sizing: border-box;
      }

      .navbar a.icon {
        float: right;
        display: block;
      }

      .navbar.responsive {
        position: relative;
      }

      .navbar.responsive .navbar-toggle {
        display: block;
      }

      .navbar.responsive a.icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .navbar.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
  </style>
</head>
<body>

<div class="navbar" id="myNavbar">
  <a href="#" class="active">Home</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Contact</a>
  <input type="text" placeholder="Search...">
  <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">&#9776;</a>
</div>

<script>
  function toggleNavbar() {
    var navbar = document.getElementById("myNavbar");
    if (navbar.className === "navbar") {
      navbar.className += " responsive";
    } else {
      navbar.className = "navbar";
    }
  }
</script>

</body>
</html>
