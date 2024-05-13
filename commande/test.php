
<?php
require 'php/config.php';
?>



<!DOCTYPE html>
<html lang="fr-FR">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="Cabinet Manzoul" />
  <meta name="description" content="Cabinet Manzoul" />
  <meta name="author" content="oussema jebali" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cabinet Manzoul</title>
  
   <link rel="shortcut icon" href="images/fevicon.png" />

 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

 <link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

 <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

 <link href="css/flaticon.css" rel="stylesheet" type="text/css" />

 <link href="css/general.css" rel="stylesheet" type="text/css" />

 <link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/test.css">


 <link rel="stylesheet" type="text/css" href="css/skins/skin-default.css" data-style="styles" />
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />
<style>
#bottomLeftIcon {
  position: fixed;
  bottom: 20px;
  left: 20px;
}


.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
/* Position the image */
.popup .image {
  margin-left: 10px; /* Décalez l'image vers la droite */
}
.popup #popupTriggerr {
  margin-left: 50px; /* Décalez l'image vers la droite */
}
.popup #popupTriggeerr {
  margin-left: 80px; /* Décalez l'image vers la droite */
}
.popup #popupTrigge{
  margin-left: 140px; /* Décalez l'image vers la droite */
}
.popup #popupTriggge{
  margin-left: 150px; /* Décalez l'image vers la droite */
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 300px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>

</head>
  <body>
 

  
 



<section class="inner-intro bg bg-fixed bg-overlay-black-30" style="background-image:url(images/bg/69b648c0-396d-4b6c-86ad-279bbda3400c.jpg);">
	<div class="container">
	  <div class="row intro-title text-center">
		<div class="col-md-12">
		  <div class="section-title">
			<h1 >Commande</h1>
		  </div>
		</div>

	  </div>
	</div>
</section>

  
  <section class="login-form register-img dark-bg page-section-ptb" style="background: url(images/pattern/04.png) no-repeat 0 0; background-size: cover;">
    <div class="container">
      <div class="row  justify-content-center">
        <div class="col-lg-12">
        <div id="formmessage" style="display:none">Message de réussite/erreur va ici</div>
        <form action="" method="post" id="emailForm">
          <div class="login-1-form register-1-form clearfix text-center">
            <div class="et_pb_text_inner text-white">
              <h2 >Passer votre commande :</h2>
            </div>

          <!-- Mode de transport -->
            <div class="row mb-3">
                  <div class="col-md-4 mt-sm-2">
                      <h5 class="title mb-3">Mode de transport : </h5>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="transport" value="Maritime" checked="checked" id="radio1" type="radio">
                          <label for="radio1">Maritime</label>     
                      </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="transport" value="Aerien" id="radio2" type="radio">
                          <label for="radio2">Aerien</label>
                      </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                    <div class="radio">
                        <input name="transport" value="Routier" id="radio3" type="radio">
                        <label for="radio3">Routier</label>
                    </div>
                  </div>
            </div>


          <!-- Type de marchandise -->
            <div class="row mb-3">
                  <div class="col-md-4 mt-sm-2">
                      <h5 class="title mb-3">Type de marchandise : </h5>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="marchandise" value="Périssables" checked="checked" id="radio4" type="radio">
                          <label for="radio4">Périssables</label>
                            <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggerr">
                                        <span class="popuptext" id="myPopup">
                                          Une marchandise périssable est un produit qui a une durée de conservation limitée et qui est susceptible de se détériorer et de devenir inutilisable après un certain laps de temps. Ces produits sont souvent des denrées alimentaires, mais ils peuvent également inclure des produits pharmaceutiques, des fleurs fraîches, des produits cosmétiques, et toute autre matière sensible aux variations de température, à l'humidité, à la lumière ou à la pression atmosphérique.                                           
                                        </span>
                            </div>
                      </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="marchandise" value="Fragiles" id="radio5" type="radio">
                          <label for="radio5">Fragiles</label>
                            <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTrigger">
                                        <span class="popuptext" id="myPopup">
                                        Une marchandise fragile peut se détériorer ou se briser facilement en raison de sa structure délicate ou de sa composition sensible. Ces marchandises nécessitent un emballage, une manipulation et un transport particulièrement soigneux pour éviter tout dommage entre le chargement et la livraison.

                                        Les marchandises fragiles incluent les produits en verre, les produits électroniques, les objets de décoration ou les articles de valeur. Ces marchandises ont des surfaces sensibles ou des composants internes qui peuvent être facilement endommagés en cas de chocs, de vibrations ou de manipulations brutales.
                                        </span>
                            </div>
                      </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                    <div class="radio">
                        <input name="marchandise" value="Séches" id="radio6" type="radio">
                        <label for="radio6">Séches</label>
                          <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTrigger">
                                        <span class="popuptext" id="myPopup">
                                          Les marchandises sèches sont des produits qui ne sont pas considérés comme périssables. Contrairement aux marchandises périssables, elles n'ont pas de durée de conservation limitée et ne nécessitent donc pas de conditions de stockage et de transport sous température dirigée. Les marchandises sèches sont stables sur une plus longue période et peuvent être stockées et transportées à température ambiante.

                                          Les marchandises sèches peuvent inclure des produits variés tels que des denrées alimentaires emballées non-périssables, des appareils électroniques, des meubles, des matériaux issus de l'industrie sidérurgique, ou encore, des cargaisons en vrac comme du sable. Le conditionnement de ces produits vise à prévenir les dommages dus à l'humidité ou aux chocs physiques pendant le transport et le stockage.
                                        </span>
                          </div>
                    </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                    <div class="radio">
                        <input name="marchandise" value="Dangereuses" id="radio7" type="radio">
                        <label for="radio7">Dangereuses</label>
                            <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggeerr">
                                      <span class="popuptext" id="myPopup">
                                      Une marchandise est considérée comme dangereuse lorsqu'elle présente un risque pour la santé, la sécurité publique, l'environnement ou les biens, durant son transport. L'acheminement des marchandises dangereuses est strictement réglementé en raison de leur capacité à causer des dommages en cas de fuite, de déversement, d'exposition ou de mauvaise manipulation.

                                      Parmi les nombreux exemples de marchandises dangereuses, on peut citer les matières et objets explosibles, les gaz, les liquides inflammables, les matières toxiques ou les objets dangereux divers. Ces marchandises sont classées selon leur type de dangerosité et possèdent un numéro ONU. 
                                      </span>
                            </div>
                    </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                    <div class="radio">
                        <input name="marchandise" value="Volumineuses ou lourdes" id="radio8" type="radio">
                        <label for="radio8">Volumineuses ou lourdes</label>
                          <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTrigge">
                                        <span class="popuptext" id="myPopup">
                                          Les marchandises volumineuses ou lourdes concernent une catégorie de produits qui se caractérisent par leur poids important et/ou leur taille imposante. On parle alors de colis « hors gabarit » car ils ne peuvent pas être transportés dans des unités de chargement ordinaires en raison de leur taille ou de leur poids. Cela inclut des articles tels que des équipements industriels, des containers ou encore des composants d'infrastructures. 

                                          Ce fret très grand format nécessite des équipements spécialisés et des techniques de manutention spécifiques pour garantir sa sécurité tout au long du processus de transport. 
                                        </span>
                          </div>
                    </div>
                  </div>
            </div>
  
              <!-- Nom de la marchandise -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class="" aria-hidden="true"></i>
              <h5 class="title mb-3">Nom de la marchandise : </h5>
                <input id="Nom_marchandise" type="text" placeholder=" Nom de la marchandise : " name="Nom_marchandise">
              </div>
            </div>

              <!-- Poids -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class="" aria-hidden="true"></i>
              <h5 class="title mb-3">Poids en Kg : </h5>
                <input id="Poids" type="number" placeholder=" Poids : " name="Poids">
              </div>
            </div>

            <!-- Mesures -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class="" aria-hidden="true"></i>
              <h5 class="title mb-3">Mesures : </h5>
                <input id="Mesures" type="number" placeholder=" Mesures : " name="Mesures">
              </div>
            </div>

          <!-- Type de conteneur -->
          <div class="row mb-3">
                  <div class="col-md-4 mt-sm-2">
                      <h5 class="title mb-3">Type de conteneur : </h5>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="conteneur" value="complet" checked="checked" id="radio9" type="radio">
                          <label for="radio9">complet</label>
                      </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="conteneur" value="Groupage" id="radio10" type="radio">
                          <label for="radio10">Groupage</label>
                      </div>
                  </div>
          </div>

          <!-- Type de conteneur -->
          <div class="row mb-3">
                  <div class="col-md-4 mt-sm-2">
                      <h5 class="title mb-3">Type de conteneur : </h5>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="conteneur2" value="20 pieds" id="radio11" type="radio">
                          <label for="radio11">20 pieds</label>
                      </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="conteneur2" value="40 pieds" id="radio12" type="radio">
                          <label for="radio12">40 pieds</label>
                      </div>
                  </div>

          </div>          

            <!-- Quantité -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class="" aria-hidden="true"></i>
              <h5 class="title mb-3">Quantité : </h5>
                <input id="Quantité" type="number" placeholder=" Quantité : " name="Quantité">
              </div>
            </div>

          <!-- date -->
          <div class="section-field mb-3">
            <h5> Date :</h5>
              <div class="field-widget"> <i class="fa fa-adress" aria-hidden="true"></i>
                <input id="date" type="date" placeholder="Date :" name="date">
              </div>
          </div>


          <!-- Mode de payement -->
          <div class="row mb-3">
                  <div class="col-md-4 mt-sm-2">
                      <h5 class="title mb-3">Mode de paiement : </h5>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="paiement" value="Par cheques" checked="checked" id="radio13" type="radio">
                          <label for="radio13">Par cheques</label>
                      </div>
                  </div>
                  <div class="col-md-2 mt-sm-2">
                      <div class="radio">
                          <input name="paiement" value="En ligne" id="radio14" type="radio">
                          <label for="radio14">En ligne</label>
                      </div>
                  </div>
          </div> 

          <div class="choix-supplementaires" style="display: none;">
              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Virement SWIFT" id="radio15" type="radio">
                      <label for="radio15">Virement SWIFT</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          L'essentiel des virements internationaux utilise le réseau SWIFT (Society Worldwide Interbank Financial Télécommunication) Réseau international de communication électronique sécurisée entre Institutions financières) par l'intermédiaire duquel le secteur des finances effectue des transactions financières rapides et sécurisées.

                                          </span>
                        </div>                      
                  </div>
              </div>

              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Virement BIC" id="radio16" type="radio">
                      <label for="radio16">Virement BIC</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          Le BIC (identifiant international de banque) également connu sous la dénomination « Adresse SWIFT », cet identifiant est mondialement utilisé pour le routage des opérations.

                                          </span>
                        </div>
                  </div>
              </div>

              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Virement IBAN" id="radio17" type="radio">
                      <label for="radio17">Virement IBAN</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          L’IBAN (Identifiant International de compte bancaire) est un standard international d’origine européenne pour la codification et la présentation des comptes bancaires à l’échelle internationale. Il contient les informations suivantes importantes pour permettre le traitement efficace et simple d’un paiement international.

                                          </span>
                        </div>
                  </div>
              </div>

              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Virement SEPA" id="radio18" type="radio">
                      <label for="radio18">Virement SEPA</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          Le virement européen est un ordre de virement émis par une entreprise située à l'intérieur de l'Espace Economique Européen (EEE) en euros. Les frais bancaires sont partagés entre l'émetteur et le bénéficiaire. 

                                          </span>
                        </div>
                  </div>
              </div>

              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Billet à ordre" id="radio19" type="radio">
                      <label for="radio19">Billet à ordre</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          Le billet à ordre est une reconnaissance de dette par lequel une entreprise (le tireur ou le souscripteur) s’engage à payer une somme d’argent à son fournisseur (le tiré ou le bénéficiaire) à une échéance prévue à l’avance.

                                          </span>
                        </div>
                  </div>
              </div>

              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Lettre de change" id="radio20" type="radio">
                      <label for="radio20">Lettre de change</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          C'est un écrit où le tireur (exportateur) donne ordre au tiré (importateur) de payer à vue ou à une date déterminée, une certaine somme (le nominal) à lui-même ou à un tiers. La traite ou lettre de change (imprimé disponible auprès de la banque) est un effet de commerce représentatif des marchandises

                                          </span>
                        </div>
                  </div>
              </div>

              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Remise documentaire" id="radio21" type="radio">
                      <label for="radio21">Remise <br> documentaire</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          La remise documentaire est une procédure de recouvrement dans laquelle une banque a reçu mandat d'un exportateur (le vendeur) d'encaisser une somme due par un acheteur contre remise des documents. Le vendeur fait établir les documents de transport à l'ordre d'une banque

                                          </span>
                        </div>
                  </div>
              </div>
                <br>

              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Lettre de credit Stand-By" id="radio22" type="radio">
                      <label for="radio22">Lettre de credit <br> Stand-By</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          La lettre de crédit stand-by n'est utilisée par l'exportateur que si l'acheteur n'a pas réglé la somme dans les délais. C'est dans cette hypothèse seulement qu'il réclame le paiement à la banque qui a émis la garantie, en présentant les documents requis dans le texte de la lettre de crédit stand-by.

                                          </span>
                        </div>
                  </div>
              </div>
                <br>
              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="enligne" value="Credit documentaire" id="radio23" type="radio">
                      <label for="radio23">Credit documentaire</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          Le crédit documentaire est une création de la pratique commerciale et bancaire internationale.
                                          Face à l'incertitude du commerce international, le crédit documentaire est né pour répondre à un besoin de sécurité.
                                          Le crédit documentaire est une garantie bancaire exigée par le vendeur avant l'expédition des marchandises. Cette garantie émane en général de banque de l'acheteur. 

                                          </span>
                        </div>
                  </div>
              </div>
          </div>

          <div class="choix-supplementairescheque" style="display: none;">
              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="cheque" value="Cheque d'entreprises" id="radio24" type="radio">
                      <label for="radio24">Cheque d'entreprises</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          Le chèque d'entreprise (ou chèque de société) n'offre aucune garantie à l'exportateur, la provision sur le compte de l'importateur pouvant être insuffisante ou inexistante au moment où le chèque sera présenté par l'exportateur à son établissement bancaire. De manière générale, les banques qui reçoivent ce type de chèque ne le règlent qu'après avoir reçu les fonds de la banque de l'importateur.

                                          </span>
                        </div>
                  </div>
              </div>

              <div class="col-md-2 mt-sm-2">
                  <div class="radio">
                      <input name="cheque" value="Cheque de banque" id="radio25" type="radio">
                      <label for="radio25">Cheque de banque</label>
                        <div class="popup" onclick="myFunction()"><img src="images/1x/Plan de travail 2.png" alt="" class="image" id="popupTriggge">
                                          <span class="popuptext" id="myPopup">
                                          Le chèque de banque est un chèque tiré par une banque sur ses propres caisses ou sur une autre banque. Il offre donc une garantie contre le risque commercial. Il ne protège cependant pas du risque bancaire. Le chèque étranger ne peut pas être pris en charge par le système national

                                          </span>
                        </div>
                  </div>
              </div>
          </div>

            <!-- Nom -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class=""></i>
                <input id="Nom"  type="text" placeholder="Nom" name="Nom">
              </div>
            </div>

            <!-- prenom -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class=""></i>
                <input id="Prénom"  type="text" placeholder="Prénom" name="Prénom">
              </div>
            </div>

            <!-- Téléphone -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class=""></i>
                <input id="Téléphone"  type="tel" placeholder="Téléphone" name="Téléphone">
              </div>
            </div>   

            <!-- Adresse e-mail -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class=""></i>
                <input id="mail"  type="email" placeholder="Adresse e-mail" name="mail">
              </div>
            </div>     
            
            <!-- Adresse  -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class=""></i>
                <input id="Adresse"  type="text" placeholder="Adresse" name="Adresse">
              </div>
            </div>

            <!-- CP  -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class=""></i>
                <input id="CP"  type="text" placeholder="CP" name="CP">
              </div>
            </div>   
            
            <!-- Ville  -->
            <div class="section-field mb-3">
              <div class="field-widget"> <i class=""></i>
                <input id="Ville"  type="text" placeholder="Ville" name="Ville">
              </div>
            </div>


            
            <div class="clearfix"></div>
                <div class="section-field text-uppercase text-center mt-2">
                <button class="button btn-lg btn-theme full-rounded animated right-icn" type="submit" name="submit"  onclick="submitForm()">
                    <span>Annuler<i class="glyph-icon flaticon-monney" aria-hidden="true"></i></span>
                </button>
                <button class="button btn-lg btn-theme full-rounded animated right-icn" type="submit" name="submit"  onclick="submitForm()">
                    <span>Commander<i class="glyph-icon flaticon-monney" aria-hidden="true"></i></span>
                </button>
                </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </section>

    <footer class="text-white text-center">
      <div class="footer-widget">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
            </div>
          </div>
        </div>
      </div>
    </footer>

    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-level-up"></i></a></div>
    <div id="back-to-top"><a class="top arrow" href="../index.html"><i class="fa fa-home"></i></a></div>

  
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> 
<script type="text/javascript" src="js/popper.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.appear.js"></script> 
<script type="text/javascript" src="js/jquery.appear.js"></script> 
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script> 
<script type="text/javascript" src="js/style-customizer.js"></script> 
<script>
    function submitForm() {
        var formData = new FormData(document.getElementById('emailForm'));
        var xhr = new XMLHttpRequest();
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    document.getElementById('formmessage').innerHTML = xhr.responseText;
                } else {
                    document.getElementById('formmessage').innerHTML = 'Erreur lors de l\'envoi du formulaire.';
                }
                document.getElementById('formmessage').style.display = 'block';
            }
        };
        
        xhr.open('POST', 'test-form.php', true);
        xhr.send(formData);
    }
</script>

<script>
// Sélectionnez toutes les images
const images = document.querySelectorAll('.image');

// Attachez un gestionnaire d'événements de clic à chaque image
images.forEach(image => {
  image.addEventListener('click', function() {
    // Récupérez le popup associé à cette image
    const popup = this.nextElementSibling;
    // Affichez ou masquez le popup en basculant la classe 'show'
    popup.classList.toggle('show');
  });
});


// Sélectionnez les éléments radio pour le mode de paiement
const radioEnLigne = document.getElementById('radio14');
const choixSupplementairesEnLigne = document.querySelector('.choix-supplementaires');
const radioCheque = document.getElementById('radio13');
const choixSupplementairesCheque = document.querySelector('.choix-supplementairescheque');

// Ajoutez un écouteur d'événements de changement au bouton radio "En ligne"
radioEnLigne.addEventListener('change', function() {
    // Si "En ligne" est sélectionné, affichez les choix supplémentaires en ligne et cachez ceux du chèque
    if (this.checked) {
        choixSupplementairesEnLigne.style.display = 'block';
        choixSupplementairesCheque.style.display = 'none';
    }
});

// Ajoutez un écouteur d'événements de changement au bouton radio "Par chèques"
radioCheque.addEventListener('change', function() {
    // Si "Par chèques" est sélectionné, affichez les choix supplémentaires pour les chèques et cachez ceux en ligne
    if (this.checked) {
        choixSupplementairesCheque.style.display = 'block';
        choixSupplementairesEnLigne.style.display = 'none';
    }
});


</script>
<script type="text/javascript" src="js/custom.js"></script>
  </body>

</html>
