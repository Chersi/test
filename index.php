<!doctype html>
<html lang="ru">
	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	    <title>Big Shop</title>
	    <style>
	    .block1 {
	    	height: 1000px;
        	background-image: url(img/bg.jpg);
        	background-repeat: no-repeat;
        	background-size: cover:
        	}
        .block2 {
        	margin-top: -40px;
        }
        #block2 {
        	background-color: #fbfaf9;
        }
        .block4 {
        	margin-top: 200px;
        }
        #block4 {
        	background-color: #fbfaf9;
        }
        .block5 {
        	background-color: #8c85f9;
        	margin-top: 1000px;
        }
	    .navbar-brand {
	    	margin-top:65px;
	    	font-size:50px;
			background: linear-gradient( #FFFFFF 50%, #FFFF00);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			color: #FFFFFF;
	    }
	    #menu {
	    	margin-left:800px;
	    	margin-top:75px;
	    }
		form {
		    width: 400px;
		    height: 70px;
		    padding-left: 25px;
		    border-radius: 42px;
		    background: #FFFFFF;
		    outline: none;
		    position: relative;
		    transition: .3s linear;
		}
		#search input {
		    margin-left:50px;
		    float: left;
		    border: none;
		    outline: none;
		    font-weight: 900;
		}
		#search button {
		    margin-right: 350px;
		    width: 45px;
		    height: 45px;
		    background: none;
		    border: none;
		    position: absolute;
		    top: 6px;
		    right: 0;
		    outline: none;
		}
		#search button:before{
		    font-size: 35px;
		    content: "\f002";
		    font-family: FontAwesome;
		    color: #000000;
		}
		#headline {
			margin-top: 100px;
			margin-left: 1150px;
			font-size:110px;
		}
		#details button {
			margin-top: 60px;
			margin-left: 1150px;
		    width: 200px;
		    height: 70px;
		    border-radius: 42px;
		    background: #FFFFFF;
		    outline: none;
		    position: relative;
		    font-weight: 900;
		}
		#headline2 {
			margin-top: 100px;
			font-size:60px;
		}
		#headline3 {
			margin-top: 50px;
			font-size:60px;
		}
		#headline5{
			margin-top: 150px;
			margin-left: 420px;
			font-size:60px;
			color: white;
		}
		#headline6{
			margin-top: 50px;
			
			font-size:40px;
			color: black;
		}
		.card-deck {
			text-align: center;
			margin-top:50px;
			position: relative;
		}
		#btn_cart {
			background: linear-gradient( #9a6ef5 33%, #8c85f9);
			-webkit-text-fill-color: window;
			color: #9a6ef5;
			width: 150px;
		    height: 40px;
			position: absolute;
			margin-left: -70px;
			
		}
		#card-deck1 {
			padding-bottom:150px;
		}
		.card {
			border: none;
			background-color: #fbfaf9;
		}
		#img {
			width: 400px;
		    height: 70px;
			background-size: cover;
		}
		#text {
			line-height: normal;
			margin-top: 300px;
		}
		.tabs {
			height:70px;
			margin-top:50px;
		    border-radius: 42px;
		    background: #FFFFFF;
		    outline: none;
		    font-weight: 900;
		    cursor: pointer;
		}
		.tabs li {
			margin-top: 20px;
			margin-left: 70px;
	    	display: inline-block;
	    	padding: 5px 10px;
	    	border-radius:  50px 50px 50px 50px;
	    }
	    .tabs-content {
	    	position: relative;
	    	
			background-color: #fbfaf9;
	    }
	    .tabs-content li {
	    	list-style-type: none;
			background-color: #fbfaf9;
	    	margin-left: 40px;
	    	position: absolute;
	    	opacity: 0;
	    }
	    .tabs-content li:first-child {
	    	opacity:1;
	    }
	    form1 {
	    	width: 800px;
		    height: 70px;
		    padding-left: 25px;
		    border-radius: 42px;
		    background: #FFFFFF;
		    outline: none;
		    position: relative;
	    }
	    #sumbit {
	    	text-align: center;
	    	margin-top: 50px;
	    	margin-left: 190px;
	    	border-radius:20px;
	    }
	    #submit1 {
	    	outline: none;
	    }
	    #submit2 {
	    	margin-top: 5px;
	    	margin-left: 450px;
	    	width: 150px;
		    height: 60px;
	    	border-radius:20px;
			background:#8c85f9;
			color:#fff;
			font-size:20px;
			cursor:pointer;
	    }
	    </style>
	</head>
	<body>
	<div class="block1">
		<div class="container">
			<div class="row justify-content-center">	
				<nav class="navbar navbar-expand-lg navbar-light ">
					<a class="navbar-brand" href="#">Big Shop</a>
					<div id="menu">
						<form id="search" class="nav justify-content-end">
							<input type="text" placeholder="       Search"><button type="submit"></button>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    		<span class="navbar-toggler-icon"></span>
						</button>
				
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
				    		<li class="nav-item dropdown">
				        		<b class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          			Collection
				        		</b>
				        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          		<a class="dropdown-item" href="#">1</a>
				          		<a class="dropdown-item" href="#">2</a>
				          		<a class="dropdown-item" href="#">3</a>
				        	</div>
				      		</li>
				    	</ul>
				  	</div>
				    	</form>
				  	</div>
				</nav>
			</div>
		</div>
		
		<div id="headline">
			<b>Summer</b>
			<b style="color: white">Collection</b>
			<p style="color: yellow; font-size: 50px">25% <span style="color: white">OFF</span></p>
		</div>
		
		<div id="details">
			<button>Details  <i class="fa fa-long-arrow-right" style="color: #4e369a" aria-hidden="true"></i></button>
		</div>
	</div>
	
	<div class="block2">
		<div class="container">
			<div id="block2" class="row justify-content-center">
		    		<div id="headline2">
		    			<b>Trendy Arrivals</b>
		    		</div>
		    		<div class="card-deck">
						<div class="card">
						    <img src="img/Bag1.png" class="card-img-top" alt="...">
						    <div class="card-body" onmouseover="show()" onmouseout="hide()">
						      <h5 class="card-title">Bag 1</h5>
						      <h4 class="card-description">$ 10.20</h4>
						      <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
						    </div>
						  </div>
						  <div class="card">
						    <img src="img/Bag2.png" class="card-img-top" alt="...">
						    <div class="card-body">
						      <h5 class="card-title">Bag 2</h5>
						      <h4 class="card-description">$ 10.20</h4>
						      <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
						    </div>
						  </div>
						  <div class="card">
						    <img src="img/Bag3.png" class="card-img-top" alt="...">
						    <div class="card-body">
						      <h5 class="card-title">Bag 3</h5>
						      <h4 class="card-description">$ 10.20</h4>
						      <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
						    </div>
						  </div>
					</div>
					<div id="card-deck1" class="card-deck">
						  <div class="card">
						    <img src="img/Bag4.png" class="card-img-top" alt="...">
						    <div class="card-body">
						      <h5 class="card-title">Bag 4</h5>
						      <h4 class="card-description">$ 10.20</h4>
						      <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
						    </div>
						  </div>
						  <div class="card">
						    <img src="img/Bag5.png" class="card-img-top" alt="...">
						    <div class="card-body">
						      <h5 class="card-title">Bag 5</h5>
						      <h4 class="card-description">$ 10.20</h4>
						      <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
						    </div>
						  </div>
						  <div class="card">
						    <img src="img/Bag6.png" class="card-img-top" alt="...">
						    <div class="card-body">
						      <h5 class="card-title">Bag 6</h5>
						      <h4 class="card-description">$ 10.20</h4>
						      <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
						    </div>
						  </div>
					</div>
		    	</div>
		    </div>
		</div>
	
	<div class="block3">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-sm-6">
				<div id="text">
					<b style="font-size: 70px">Our Brands</b>
					<p style="font-size: 30px">Small Shoes 2017 new Arrivals mini Messenger <span style="color: #9185fa;">Classic Shoes</span></p>
					<p style="font-size: 20px; color: grey">По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</p>
				</div>
			</div>
			<div id="img" class="col-sm-6">
				<img src="img/phone.jpg"> 
			</div>
			</div>
		</div>
	</div>
	
	<div class="block4">
		<div class="container">
			<div id="block4" class="row justify-content-center">
		    		<div id="headline3">
		    			<b>Our Showcase</b>
		    		</div>
			    		<ul class="tabs">
							<li>
								<span>Fashion</span>
							</li>
							<li>
								<span>Furnitures</span>
							</li>
							<li>
								<span>Watches</span>
							</li>
							<li>
								<span>Mobile</span>
							</li>
							<li>
								<span>Cloth</span>
							</li>
							<li>
								<span>Toys</span>
							</li>
						</ul>
			</div>
					<ul class="tabs-content">
						<li>
				    		<div class="card-deck">
								<div class="card">
									<img src="img/clock1.png" class="card-img-top" alt="...">
								    <div class="card-body" onmouseover="show()" onmouseout="hide()">
								    	<h5 class="card-title">Watch 1</h5>
								    	<h4 class="card-description">$ 10.20</h4>
								    	<a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
								<div class="card">
									<img src="img/clock2.png" class="card-img-top" alt="...">
								    <div class="card-body">
								    	<h5 class="card-title">Watch 2</h5>
								    	<h4 class="card-description">$ 10.20</h4>
								    	<a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
								<div class="card">
								    <img src="img/clock3.png" class="card-img-top" alt="...">
								    <div class="card-body">
								    	<h5 class="card-title">Watch 3</h5>
								    	<h4 class="card-description">$ 10.20</h4>
								    	<a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
							</div>
							<div id="card-deck1" class="card-deck">
								<div class="card">
									<img src="img/clock4.png" class="card-img-top" alt="...">
								    <div class="card-body">
								    	<h5 class="card-title">Watch 4</h5>
								    	<h4 class="card-description">$ 10.20</h4>
								    	<a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
								<div class="card">
								    <img src="img/clock5.png" class="card-img-top" alt="...">
								    <div class="card-body">
								        <h5 class="card-title">Watch 5</h5>
								        <h4 class="card-description">$ 10.20</h4>
								        <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
								<div class="card">
								    <img src="img/clock6.png" class="card-img-top" alt="...">
								    <div class="card-body">
								        <h5 class="card-title">Watch 6</h5>
								        <h4 class="card-description">$ 10.20</h4>
								        <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
							</div>
						</li>
						<li>
							<div class="card-deck">
								<div class="card">
									<img src="img/clock6.png" class="card-img-top" alt="...">
								    <div class="card-body" onmouseover="show()" onmouseout="hide()">
								    	<h5 class="card-title">Watch 7</h5>
								    	<h4 class="card-description">$ 10.20</h4>
								    	<a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
								<div class="card">
									<img src="img/clock5.png" class="card-img-top" alt="...">
								    <div class="card-body">
								    	<h5 class="card-title">Watch 8</h5>
								    	<h4 class="card-description">$ 10.20</h4>
								    	<a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
								<div class="card">
								    <img src="img/clock4.png" class="card-img-top" alt="...">
								    <div class="card-body">
								    	<h5 class="card-title">Watch 9</h5>
								    	<h4 class="card-description">$ 10.20</h4>
								    	<a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
							</div>
							<div id="card-deck1" class="card-deck">
								<div class="card">
									<img src="img/clock3.png" class="card-img-top" alt="...">
								    <div class="card-body">
								    	<h5 class="card-title">Watch 10</h5>
								    	<h4 class="card-description">$ 10.20</h4>
								    	<a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
								<div class="card">
								    <img src="img/clock2.png" class="card-img-top" alt="...">
								    <div class="card-body">
								        <h5 class="card-title">Watch 11</h5>
								        <h4 class="card-description">$ 10.20</h4>
								        <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
								<div class="card">
								    <img src="img/clock1.png" class="card-img-top" alt="...">
								    <div class="card-body">
								        <h5 class="card-title">Watch 12</h5>
								        <h4 class="card-description">$ 10.20</h4>
								        <a id=btn_cart href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
								    </div>
								</div>
							</div>
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
						<li>
							
						</li>
				    </ul>
		</div>
	</div>
	
	<div class="block5">
		<div class="container">
			<div id="block5" class="row">
				<div id="headline5">
		    		<b>Newsletter</b>
		    	</div>
		    	<form1 id="sumbit">
				   <input id="submit1" name="email" placeholder="Enter your email address.."><input id="submit2" type="submit" value="Submit">
				 </form1>
			</div>
		</div>
	</div>
		

	<script>
	function show() {
		var show_card = document.getElementsByClassName("card-body").style.backgroundColor = "red";
	}
	
	function hide() {
		var show_card = document.getElementsByClassName("card-body").style.backgroundColor = "";
	}
	
	var links = document.querySelectorAll('.tabs li');
	var content = document.querySelectorAll('.tabs-content li');
	for(var i=0; i <links.length; i++) {
	    (function(i) {
	       var link = links[i];
	       link.onclick = function() {
	           for(var j=0; j <content.length; j++) {
	              var opacity = window.getComputedStyle(content[j]).opacity;
	              if(opacity == "1") {
	                 content[j].style.opacity = "0";
	              }
	           }
	        content[i].style.opacity = "1";
	        }
	    })(i);
	}
	</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>