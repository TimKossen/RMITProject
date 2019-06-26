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
      <a href="index.php" target="_blank">Home</a>
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
         <div id = "h1products">
         <h1> Our  Products </h1>
          </div>
		<table>
			<tr>
				<td>
				<button>
				<h2 id = "product">250g Purified Fijian Kava Root </h1>
				<img id = "img" src='img5.jpg' alt='FAIL'>
				<P id = "prices">  $59.99</P>
				</button>

				<button>
				<h2 id = "product">250g Pure Fijian Kava Powder</h1>
				<img id = "img" src='img2.jpeg' alt='FAIL'>
				<P id = "prices"> $69.99</P>
				</button>

				<button>
				<h2 id = "product">60 Pack Lab prepared Kava Capsules</h1>
				<img id = "img" src='img3.jpg' alt='FAIL'>
				<P id = "prices"> $79.99</P>
                </button>

				<button>
				<h2 id = "product">16 Pack KAVA Stress Relief Tea Bags</h1>
				<img id = "img" src='img1.jpeg' alt='FAIL'>
				<P id = "prices">$19.99 </P>
				</button>

				<button>
				<h2 id = "product">Kava Information Guide 100 pages</h1>
				<img id = "img" src='img6.jpg' alt='FAIL'>
				<P id = "prices"> $9.99</P>
				</button>

				<button>
				<h2 id = "product">12 Pack Orange Kava Candy Lollies </h1>
				<img id = "img" src='img4.jpg' alt='FAIL'>
				<P id = "prices"> $9.99</P>
				</button>

				</td>
				</tr>
			</table>
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