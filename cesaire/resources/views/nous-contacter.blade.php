@include('layouts/header')


<div class="page-header-wrap bg-img" data-bg="assets/img/bg/page-header-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content">
                    <div class="page-header-content-inner">
                        <h1>Nous contacter</h1>

                        <ul class="breadcrumb">
                            <li><a href="index.html">Accueil</a></li>
                            <li class="current"><a href="#">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-content-wrapper sm-top">
    <div class="contact-page-content">
        <div class="contact-info-wrapper">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Notre Position</h4>
                                <p>20 Cadjehoun Appartement. 758, Cotonou, Benin</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-iphone"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Nous contacter</h4>
                                <p>Mobile: +229 95744666 <br>
                                    Fax: 123 456 789 <br>
                                    info@example.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info-item">
                            <div class="con-info-icon">
                                <i class="ion-ios-email-outline"></i>
                            </div>
                            <div class="con-info-txt">
                                <h4>Ecrivez nous</h4>
                                <p>Support24/7@example.com
                                    info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form-wrapper sm-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form-content">
                            <h2>Entrer En Contact</h2>

                            <div class="contact-form-wrap">
                                <form action="//whizthemes.com/mail-php/raju/gariongso/mail.php" method="post" id="contact-form">
                                    <div class="contact-form-inner">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item">
                                                    <label class="sr-only" for="name">name</label>
                                                    <input type="text" name="name" id="name" placeholder="Nom" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-item">
                                                    <label class="sr-only" for="email">email</label>
                                                    <input type="email" name="email" id="email" placeholder="Email" required />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-item">
                                                    <label class="sr-only" for="subject">subject</label>
                                                    <input type="text" name="subject" id="subject" placeholder="Objet" required />
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-item">
                                                    <label class="sr-only" for="message">message</label>
                                                    <textarea name="message" id="message" cols="30" rows="8" placeholder="Ecrivez Votre Message Ici" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-item">
                                                    <button class="btn btn-brand">Envoyer Le Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form Submission Notification -->
                                    <div class="form-message"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-map-wrapper sm-top">
            <div id="map_content" class="h-100" data-lat="9.5293472" data-lng="2.2584408" data-zoom="7"></div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->
@include('layouts/footer')
