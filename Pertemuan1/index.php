<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="icon" href="assets/icon.png" />
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" type = "text/css" href="style.css">
  </head>
  <body>
    <div class="container">
	<header>
        <nav>
	    <div class="logo">
		<img src="assets/logo.png" alt="" />
          </div>
	    <input type="checkbox" id="click" />
	    <label for="click" class="menu-btn">
	      <i class="fas fa-bars"></i>
	    </label>
	    <ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Categories</a></li>
		<li><a href="login.php" class="btn_login">Login</a></li>
          </ul>
	  </nav>
	</header>
	<main>
        <div class="jumbotron">
	     <div class="jumbotron-text">
		 <h1>Find Your New Little Cat, Make a New Friend</h1>
		 <p> Teman barumu yang lucu menunggu mu, ayo temukan    mereka sekarang
		 </p>
		<button type="button" class="btn_getStarted">Get Started</button>
	     </div>
           <div class="jumbotron-img">
	       <img src="assets/jumbotron.png" alt="" />
           </div>
	  </div>
	  <div class="cards-categories">
	     <h2>Cat Categories</h2>
	     <div class="card-categories">
		  <div class="card">
		    <img src="assets/anggora.png" alt="" />
		    <h5>Anggora</h5>
		    <p> Anggora turki adalah salah satu ras kucing domestik alami tertua. Ras ini berasal dari Ankara, Turki. Kucing ini sangat populer dan terkenal di Indonesia.
                </p>
		  </div>
		  <div class="card">
			<img src="assets/persia.png" alt="" />
			<h5>Persia</h5>
			<p> Kucing persia adalah ras kucing domestik berbulu panjang dengan karakter wajah bulat dan moncong pendek. Namanya mengacu pada Persia.
			</p>
		  </div>
		  <div class="card">
		      <img src="assets/british.png" alt="" />
			<h5>British Shorthair</h5>
			<p> Kucing bulu pendek britania adalah salah satu ras kucing tertua di inggris. Kucing ini adalah kucing berbadan sedang dengan bulu yang pendek. </p>
		  </div>
	  </div>
    </div>
  </main>
  <footer>
    <h4>&copy; Lab Pemrograman Komputer 2023</h4>
  </footer>
</div>
</body>
</html>
