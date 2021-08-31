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

	<style>
		input[type=text]{padding:10px;width:280px;border:1px solid #E7E7E7;border-radius:5px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;font-family:Arial;}
		input[type=text]:hover{background-color:#f8fbff;}
		textarea{padding:10px;border:1px solid #E7E7E7;border-radius:5px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;width:100%;height:125px;}
		.box-light{padding:25px;color:#333333;margin:10px 0;background:#ffffff;transition:all 0.6s ease 0s;}
			.box-light .box-light{padding:0 35px;}
				.box-light .box-light p{margin:5px 0px;}
			.box-light h2,.box-light h3,.box-light h4{margin:0;padding:0;}
			.box-light h3{margin-top:10px;}
				.box-light h3 a{text-decoration:none;}
			.box-light img{transition:all 0.6s ease 0s;display:block;}
			.box-light:hover{box-shadow:1px 1px 10px #dcdcdc;}
				.box-light .box-light:hover{box-shadow:none;}
			.box-light p{padding:0;}
		.letter{background-color:#4C74AD;color:#ffffff;border-radius:50%;width:40px;height:40px;line-height:35px;font-weight:bold;text-align:center;float:left;margin-left:-35px;margin-right:15px;}
			.letter.blue{background-color:#3B689F;}
			.letter.green{background-color:#44A437;}
			.letter.orange{background-color:#ff7537;}
			.letter.purple{background-color:#b99aff;}
			.letter.gray{background-color:#888888;}
			.letter.red{background-color:#DC4739;}
		.chapeau{font-size:1em;margin:5px 0;font-weight:bold;}
		.gray{color:#888888;}
		.red{color:#DC4739;}
		.hidden{display:none;}
		.clear{clear:both;}
		.separator{border-top:1px solid #e7e7e7;border-bottom:1px solid #ffffff;width:100%;height:1px;margin-top:30px;margin-bottom:30px;clear:both;}
		.button-blue{margin-top:10px;float:right;font-family:Arial;cursor:pointer;font-size:1em;padding:10px 15px;font-weight:bold;border-radius:5px;color:#ffffff;border:0px;background:#3e679b;box-sizing:border-box;text-align:center;}

	</style>
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
				<?php 
						$db = new PDO('mysql:host=SERVER;dbname=dialogue;charset=utf8mb4', 'root', '');
						$currenturl = strtolower('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

						// Fonctions de chargement des commentaires

						function commentaires($url, $id_commentaire=0)
						{
							global $db;
						
							$i=0;
							$commentaires = '';
							$tcolor = ['blue','green','orange','purple','gray','red'];
							
							$sql = "SELECT id_commentaire, nom, commentaire, email, date FROM p3x_commentaire WHERE actif='y' AND url=".$db->quote($url);
							if($id_commentaire!=0){ $sql .= " AND id_sous_commentaire=".$id_commentaire; }else{ $sql .= " AND id_sous_commentaire=0"; }
							$sql .= " ORDER BY id_sous_commentaire, date";
							
							foreach($db->query($sql) as $data) {
								$i++;
								mt_srand(crc32($data['email']));
								
								$commentaires .= '<div class="box-light">';
									
									if($i==1 && $id_commentaire==0)
									{
										$sql2 = "SELECT COUNT(id_commentaire) FROM p3x_commentaire WHERE actif='y' AND url=".$db->quote($url);
										$query = $db->prepare($sql2); 
										$query->execute(); 
										$row = $query->fetch();
										$count = $row[0];
										$nb = $count;
										$s='s';
										
										if($count==1){ $nb = 'Un'; }
										
										$commentaires .= '<h2>'.$nb.' commentaire'.$s.'</h2>';
									}
									
									$commentaires .= '<div class="separator"></div>
														<div class="box-light">
															<div class="letter '.$tcolor[mt_rand(0, count($tcolor) - 1)].'">'.htmlentities(substr($data['nom'], 0, 1)).'</div>
															<p class="chapeau">@'.htmlentities($data['nom']).' <span class="gray">'.$data['date'].'</span></p>
															<p>'.htmlentities($data['commentaire']).'</p>
															<form id="comform-'.$data['id_commentaire'].'" method="post" action="'.$url.'">
																<input name="action" value="poster-commentaire" type="hidden">
																<input name="email" class="hidden" type="text">
																<input name="id_sous_commentaire" value="'.$data['id_commentaire'].'" type="hidden">
																<div id="comform-div-'.$data['id_commentaire'].'" class="comform-div hidden">
																	<p>Réponse à @'.htmlentities($data['nom']).'<br><textarea name="commentaire"></textarea></p>
																	<p>Nom<br><input name="nom" type="text"></p>
																	<p>Adresse e-mail<br><input name="emailtrue" type="text"></p>
																</div>
																<div class="clear"></div>
																<p><a class="repondre" data-rel="'.$data['id_commentaire'].'" href="#">Répondre</a></p>
																<div class="clear"></div>
															</form>
														</div>';
									
									$commentaires .= commentaires($url, $data['id_commentaire']);
									
								$commentaires .= '</div>';
							}
							
							return $commentaires;
						}

						// Insertion d'un commentaire
						
						if(isset($_POST['action']) && $_POST['action']=='poster-commentaire')
						{
							// Protection robot
							if(isset($_POST['email']) && empty($_POST['email']))
							{
								if(isset($_POST['commentaire']) && !empty($_POST['commentaire']) &&	isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['emailtrue']) && !empty($_POST['emailtrue']))
								{
									$id_sous_commentaire = 0;
									
									if(isset($_POST['id_sous_commentaire']) && is_numeric($_POST['id_sous_commentaire'])){ $id_sous_commentaire = intval($_POST['id_sous_commentaire']); }
								
									if(filter_var($_POST['emailtrue'], FILTER_VALIDATE_EMAIL))
									{
										$sql = "INSERT INTO p3x_commentaire(
																	id_sous_commentaire,
																	nom,
																	commentaire,
																	email,
																	url,
																	actif,
																	date
																) VALUES(
																	".$id_sous_commentaire.",
																	:nom,
																	:commentaire,
																	:emailtrue,
																	:currenturl,
																	'a',
																	'".date("Y-m-d H:i:s")."'
																)";
										$query = $db->prepare($sql);
										$query->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
										$query->bindValue(':commentaire', $_POST['commentaire'], PDO::PARAM_STR);
										$query->bindValue(':emailtrue', $_POST['emailtrue'], PDO::PARAM_STR);
										$query->bindValue(':currenturl', $currenturl, PDO::PARAM_STR);
										$query->execute();
										
										unset($_POST);
										
										$message_text = 'Votre message a été déposé mais vous devez attendre qu\'il soit validé.';
										$message_img = 'check';
									}
									else
									{
										$message_text = 'Votre adresse e-mail n\'est pas valide !';
									}
								}
								else
								{
									$message_text = 'Les informations obligatoires ne sont pas toutes renseignées !';
								}
							}
						}
						
						// Chargement des commentaires
						$commentaires = commentaires($currenturl, 0);
						if(!empty($commentaires)){ echo '<div class="box-light">'.$commentaires.'</div>'; }
					?>
					<h3>Poster un commentaire</h3>
					<form method="post" action="<?php echo $currenturl; ?>">
						<input type="hidden" name="action" value="poster-commentaire" />
						<input type="text" name="email" class="hidden" />
						<p>Commentaire<br /><textarea name="commentaire"></textarea></p>
						<p>Nom<br /><input type="text" name="nom" /></p>
						<p>Adresse e-mail<br /><input type="text" name="emailtrue" /></p>
						<p><input type="submit" class="button-blue left" value="Poster mon commentaire" /></p>
						<div class="clear"></div>
						<p class="red right">Votre adresse e-mail n'est pas publiée lorsque vous ajoutez un commentaire.<br />Tous les champs sont obligatoires pour soumettre votre commentaire.</p>
						<div class="clear"></div>
					</form>
				</div> <!-- /.container -->
			</article>
	        
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
					<p>Réalisé en 2020 avec <i class="fa fa-heart-o" style="color:#FF0000" aria-hidden="true"></i> par <a href="cissokomody6@gmail.com" target="_blank">Boubacar CISSOKO</a></p>
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

		<script src="//code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
	$('.repondre').click(function(){
		var id = $(this).attr('data-rel');
		if($('#comform-div-' + id).hasClass('hidden'))
		{
			$('.repondre').removeClass('button-blue');
			$(this).addClass('button-blue').css('float','left');
			$('.comform-div').addClass('hidden');
			$('#comform-div-' + id).find('p').show();
			$('#comform-div-' + id).removeClass('hidden');
			return false;
		}
		else
		{
			$('#comform-' + id).submit();
			return false;
		}
	});
</script>
	</body>
</html>
