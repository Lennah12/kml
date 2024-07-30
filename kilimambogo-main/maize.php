<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: paleturquoise;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 40px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color:green;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.topnav {
  overflow: hidden;
  background-color:orangered;
}

.topnav a {
  float: left;
  color:#000000 ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create a right-aligned (split) link inside the navigation bar */
.topnav a.split {
  float: left;
  background-color:green;
  color: black;
  
}
.dropbtn {
  background-color: orangered;
  color: black;
  padding: 16px;
  font-size: 14px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Kilimambogo Millers ltd</a><br><br>
  <div class="header-right">
    <a href="oryx.php">HOME</a>
    <a class="active">OUR BRANDS</a>
    <a href="about.php">ABOUT</a>
    <a href="contact">CONTACTS</a>
 <a href="about.php">SERVICES</a>
  </div>
</div>
<div class="topnav">
  <a href="#about" class="split">CONSUMER PRODUCTS</a>
  <div class="dropdown">
  <button class="dropbtn">MAIZE FLOUR</button>
  <a class="active">MAIZE FLOUR</a>
  <div class="dropdown-content">
    <a href="#">Oryx premium flour</a>
    <a href="#">Tahidi flour</a>
  </div>
</div>
</div>
</div>
<img src="corn5.jpg" width="100%"length="50%">
</body>
</html>


