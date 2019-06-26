<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
    <title>Kavalicious</title>

    <!-- We will cover style later. Skip down to the body tag -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link id='wireframecss' type="text/css" rel="stylesheet" href="/...wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href=  "css/style.css">
     <script src='a2.js'></script>
     <script src='wireframe.js'></script>
  </head>

  <body>

   <header>
       	<img id = "logo" src='logo.png' alt='FAIL' class = "center">
      <!-- Image sourced from www.rmit.edu.au for educational purposes only -->

      </div>
    </header>
    <!-- Navigation menu for larger devices -->
<nav>
      <!-- link locations: relative to current directory -->
       <a href="index.php" target="_blank">Home</a></li>
      <!-- link locations: relative to e54061's root web directory -->
      <a href="products.php" target="_blank">Products</a>
      <a href="product.php" target="_blank">DISCOUNT!</a>
      <!-- link location: absolute -->
      <a href='login.php' target="_blank">Members</a>
    </nav>

    <!-- Navigation menu for smaller devices -->
<div class="topnav" id = "mobilemenu">
  <!-- Navigation links (hidden by default) -->
  <div id = "moblinks">
    <a href="index.php" target="_blank">Home</a>
      <!-- link locations: relative to e54061's root web directory -->
      <a href="products.php" target="_blank">Products</a>
      <a href="product.php" target="_blank">DISCOUNT!</a>
      <!-- link location: absolute -->
      <a href='login.php' target="_blank">Members</a>
  </div>
  </div>

  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" id = "mbutton"></i>
  </a>

    <main>


			<h1 id = "h1product"> Pure Fijian Kava Powder $250/kg </h1>
			<h2 id = "slashed"> $280/kg </h2>

			<img id = "dealimg" src='img2.jpeg' alt='FAIL' class = "responsive">

<div id = "deal">
    <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php"  id = "cart" method="post">
    <select name= "option" id = "type"> Select Harvest Type
    <option value = "NA" readonly>Select Harvest Type</option>
    <option value="Hydroponic">Hydroponic </option>
    <option value="Aguaponic">Aquaponic</option>
    <option value="Outdoor">Outdoor</option><input id="id" name="id" type="hidden" value="KVPH">
    <br/><br />
    <input type="button" value="-"  onclick="minus();">
    <input name = "qty" type = "text" size="25" value="1" id="count" readonly>
    <input type="button" value="+" onclick="plus();">
    <br /><br />
    <input type = "submit" id = "ORDER" value = "ORDER">
   </form>
</div>
<div id = "values">
   <span id = "Kg"> Kg </span><span id = "kgval">0</span><br /><br />
   <span id ="dollar" class="nowrap"> pay $ </span> <span id="payval">0</span><br />
   <span id ="save" class="nowrap"> SAVE $ </span> <span id="saveval">0</span>
   </div>
				<p id = "c1">
				                </br>
                                 Enjoy nature's </br>
                                 favourite relaxant  </br>
				                direct from Fiji! </br>
				                </p>

    </main>


<footer>
      &copy; Kavalicious Timothy Jon s3740259
      <script>
        document.write(new Date().getFullYear());
      </script>.
      <span>Contact: support@kavalicious.com </span><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </footer>

  </body>
</html>