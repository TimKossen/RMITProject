<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
    <title>Kavalicious</title>

    <!-- We will cover style later. Skip down to the body tag -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link id='wireframecss' type="text/css" rel="stylesheet" href="/...wireframe.css"disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css" />
    <script src='a2.js'></script>
    <script src='wireframe.js'></script>

  </head>


   <header>
       	<img id = "logo" src='logo.png' alt='FAIL' class = "center">
      <!-- Image sourced from www.rmit.edu.au for educational purposes only -->

      </div>
    </header>
  <body>
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
  <a href="javascript:void(0);" id = "test" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" id = "mbutton"></i>
  </a>

    <main>

		 <article>
			<h1 id = "h1index"> The best Kava at the best price! </h1>
			<div id = "info">
			    <img src="SHIPPING.jpg" id = "info" class = "responsive">
		   </div>

				<p id = "c">
                                 Root  </br>
                                 Powder </br>
				 Pills </br>
				 Tea </br>
 				</p>
		 </article>
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