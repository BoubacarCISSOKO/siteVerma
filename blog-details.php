<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Verma Emergent</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/verma.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/bouba.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">



		<link rel="stylesheet" media="screen, print, handheld" type="text/css" href="calendrier.css" />
    	<script type="text/javascript" src="calendrier.js"></script>

		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
			
	</head>

	<body style="background:#e2f6ff url('images/background.gif') center top no-repeat;">
		<div class="main-page-wrapper">



			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-main-header" style="font-family:Times New Roman">
				<div class="container">
					<a href="index.html" class="logo float-left tran4s"><img src="images/logo/verma.png" width="50px" height="40px" alt="Logo"></a>
					
					<!-- ========================= Theme Feature Page Menu ======================= -->
					<nav class="navbar float-right theme-main-menu one-page-menu">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       Menu
					       <i class="fa fa-bars" aria-hidden="true"></i>
					     </button>
					   </div>
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <div class="collapse navbar-collapse" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       	<li class="active"><a href="index.php">Accueil</a></li>
							<li><a href="index.php">PRESENTATION</a></li>
							<li><a href="index.php">PROBLEMES</a></li>
							<li><a href="index.php">PORTFOLIO</a></li>
							<li><a href="index.php">ASSOCIATION</a></li>
							<li><a href="index.php">ACTIVITES</a></li>
							<li><a href="index.php">PARTENAIRES</a></li>
							<li class="dropdown-holder"><a href="index.html">BLOG</a>
								<ul class="sub-menu">
					       			<li><a href="blog-details.html" class="tran3s">blog-details</a></li>
					       		</ul>
							</li>
							<li><a href="index.php">CONTACT</a></li>
					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->


			<!--
			=====================================================
				Theme Inner page Banner
			=====================================================
			-->
			<section class="inner-page-banner" style="background:url(images/inner-page/im10.jpg) repeat center">
				<div class="opacity" style="padding-top:95px">
					<div class="container">
						<ul>
							<h1><a href="index.php">Retour</a> > blog-details</h1>
							<li>/</li>
							<li></li>
						</ul>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</section> <!-- /.inner-page-banner -->
			

			
			<!--
			=====================================================
				Blog Page Details
			=====================================================
			-->
			<article class="blog-details-page">
				<div class="container"  style="font-family:areal;">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 p-fix">
						<div class="blog-details-post-wrapper" style="font-family:Times New Roman; color:#000000; font-size:20px">
							<img src="images/blog/c1 (1).jpg" alt="Image" width="500px" height="250px">
							<div class="post-heading">
								<h4>La Riziculture ?? VERMA</h4>
								<span>La val??e du fleuve SENEGAL</span>
							</div> <!-- /.post-heading -->
							<p>En Afrique Noire o?? il est difficile de d??finir et de d??limiter les "pays", la val??e du S??n??gal, de Bakel ?? la mer, sur 800 kilom??tres, pr??sente une forte industrialisation pour toute la popution. En effet, apr??s la saison des pluies, c'est la pr??paration de cette briante ??poque. L'ann??e 2019 marque le d??but de la riziculture ?? Verma. A noter qu'?? l'??poque, nos anc??tres pratiquaient cette culture mais qui avait disparue vers les ann??es 2000. Le taux de r??ussite n'a pas atteint 100% car la machine ?? arrosage avait eu des probl??mes en pleine milieu. </p>
							
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<p><i class="fa fa-quote-left" aria-hidden="true"></i>La culture du mais qui chaque annn??e affiche un taux de r??ussite tr??s satisfaisant pour toute la population.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
								</div> <!-- /.col -->
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<img src="images/blog/c1 (3).jpg" alt="Image">
								</div> <!-- /.col- -->
							</div> <!-- /.row -->

							 
          
						</div> <!-- /.blog-details-post-wrapper -->
					</div> <!-- /.col- -->

					<!-- ========================== Aside Bar ======================== -->
					<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 p-fix">
						<aside>
							<div class="sidebar-calendar" style="font-family:Times New Roman">
								
								<script type="text/javascript">
									calendrier();
								</script>
							</div> <!-- /.sidebar-calendar -->

						</aside>
					</div> <!-- /.col- -->
					
				
					
				
				</div> <!-- /.container -->
			</article>
	        
	     
	           
		    <div class="container">

		    	<form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
		        <div class="row">
				  	<div class="col-sm-0 col-md-0 col-lg-0"></div>
				  	<div class="col-sm-12 col-md-12 col-lg-12">
						  <h1 style="text-align: center">Commentaires</h1>
						  <div style="margin-top: 20px; background: white; box-shadow: 0 5px 10px rgba(0, 0, 0, .09); padding: 5px 10px; border-radius: 10px">
					
								 <h3 style="text-align: center">L'ensemble des commentaires post??s</h3>
     
			                    <?php
			                        try
			                        {
			                            $bdd = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', '');
			                        }
			                        catch(Exception $e)
			                        {
			                            die('Erreure : '.$e->getMessage());
			                        }
			                         
			                        $req = $bdd->query('SELECT id, auteur, titre, contenu, date_creation FROM billets ORDER BY date_creation');
			                        while ($donnees = $req->fetch())
			                        {
			                        ?>
			                            <div class="news">
			                                <p>Le titre du commentaire est: <strong><?php echo $donnees['titre']; ?></strong><br/>
			                                	<?php echo $donnees['contenu']; ?><br/>
			                                	publi?? le <?php echo $donnees['date_creation']; ?> par <strong><?php echo $donnees['auteur']; ?></strong></p><hr style="width: 100%; border:2px solid">
			                            </div>
			                        <?php
			                        }
			                        $req->closeCursor();
			                    ?>
						</div>
				  </div>
				</div>
	        </div>
			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer style="font-family:Times New Roman;">
				<div class="container">
					<a href="index.html" class="logo"><img src="images/logo/verma.png" width="85px" height="75px" alt="Logo"></a>

					<ul>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.linkedin.com/in/boubacar-cissoko-403b5217a" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
					<p>R??alis?? en 2020 avec <i class="fa fa-heart-o" style="color:#FF0000" aria-hidden="true"></i> par <a href="cissokomody6@gmail.com" target="_blank">Boubacar CISSOKO</a></p>
				</div>
			</footer>




			<!-- =============================================
				Loading Transition
			============================================== -->
			<div id="loader-wrapper">
				<div id="preloader_1">
	                <span>Verma</span>
	                <span>Verma</span>
	                <span>Verma</span>
	                <span>Verma</span>
	                <span>Verma</span>
	            </div>
			</div>

			

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
		<!-- Calendar js -->
		<script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
