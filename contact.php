<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
include_once 'mail.php';
        ?>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>permisdeconduire</title>
        
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- custom css-->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png"> 
    </head>
    <body style="background-image: url('images/permis-conduire.jpg')">
      <header class="masthead">

      <div class="overlay">
        <div class="container">
          <h1 class="heading animated bounceInDown text-white">ACHETER DIRECTEMENT VOTRE PERMIS DE CONDUIRE EN LIGNE</h1>
          <h2 class="animated bounceInUp display-8 text-white">AUPRES D'UNE AUTO ECOLE</h2>
        </div>
      </div>
    </header>   
        

<!-- Nav tabs -->
<div class="container" >
    <div class="tab-content card">
<!--Navbar-->

<?php        include_once 'menu.php'; ?>

<div class="animated swing tab-pane fade in show active" id="1" role="tabpanel">


<!--Section: Contact v.3-->
<section class="section mb-5 pt-5">


        <!--Grid column-->
        <div class="col-md-12">

            <!--Form with header-->
            <div class="card">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card-body form">
                            <!--Header-->
                            <div class="formHeader mb-1 pt-3">
                                <h3><i class="fa fa-envelope"></i> Ecrivez nous:</h3>
                            </div>

                            <br>

                            <form id="contact-form"  method="post">
                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form-contact-name" name='name' class="form-control" required>
                                                <label for="form-contact-name"  class="">Nom</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form-contact-email" name='email' class="form-control" required>
                                                <label for="form-contact-email" class="">Mail</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form-contact-phone" name="telephone" class="form-control" required >
                                                <label for="form-contact-phone" class="">Telephone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form">
                                            <div class="md-form">
                                                <input type="text" id="form-contact-company" name="subject" class="form-control" required>
                                                <label for="form-contact-company" class="">Sujet</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="form-contact-message" name="message" class="md-textarea"></textarea>
                                            <label for="form-contact-message">Message</label>
                                            <button type="submit" class="btn-floating btn-lg blue"><i class="fa fa-send-o">Envoyer</i></button>
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card-body contact text-center">
                            <div class="container">
                                <div class="mb-5">
                                    <h3>Infos Contact</h3>
                                </div>

                                <ul class="contact-icons">
                                  
                                    <li><i class="fa fa-phone"></i>
                                        <p>+ 01 234 567 89</p>
                                    </li>

                                    <li><i class="fa fa-envelope"></i>
                                        <p>contact@permisdeconduire.net</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            <!--/Form with header-->

        </div>
        <!--Grid column-->


</section>
<!--Section: Contact v.3-->
            


</div>
    </div>
</div>
                
        
    
  
<!--Footer-->
<?php        include_once 'footer.php'; ?>
    <!--/.Footer-->  
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
 
    </body>
</html>
