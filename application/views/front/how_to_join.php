<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    #how-to-join video {
        height: 550px;
        border-radius: .5rem;
    }

    #how-to-join .modal-body {
        padding: 50px 0px;
    }

    #how-to button {
        position: relative;
        right: 12px;
        top: 3px;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #00000061 !important;
    }

    .modal-header {
        border-bottom: unset;
    }

    .modal-content {
        background-color: unset;
        border: none;
        outline: none;
    }

    .how-to-join-bg button {
        animation: ripple-white 1s infinite;
    }

    .modal-header .close {
        /* padding: 1rem 1rem; */
        margin: 0;


        color: #fff;

        z-index: 5;
    }

    #close-video {
        border: 4px solid;
        border-radius: 50%;
        background: transparent;
        font-size: 26px;
        color: #fff;
        height: 50px;
        width: 50px;
        padding: 0px !important;
        text-align: center;
        position: absolute;

        bottom: -15px;
        right: 48%;
    }

    .modal-header button:focus {
        outline: unset;
    }

    .text_how {
        font-size: 15px;
        margin-left: -20px;
        font-family: "jaldi", sans-serif;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .text_how:hover {
        color: skyblue;
    }
</style>


<header class="sticky">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="<?= site_url() ?>" class="navbar-brand logo">
                <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['logo']) ? $visualSettings[0]['logo'] : 'assets/commonarea/dist/img/Scrolup-Logo.png'; ?>" height="60px">
            </a>

            <div class="dropdown">
                <button class="btn btn-main dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="dropdown-menu mobile-view" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= site_url('') ?>">Home</a>
                    <a class="dropdown-item" href="<?= site_url('about_us') ?>">About Us</a>
                    <a class="dropdown-item" href="<?= site_url('how_to_join') ?>">How to Join</a>
                    <a class="dropdown-item" href="<?= site_url('why_scrollup') ?>">Why ScrollUp</a>
                    <a class="dropdown-item" href="<?= site_url('referral-login') ?>">Referral Partner</a>
                    <a class="dropdown-item" href="<?= site_url('contact_us') ?>">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<section class="how-to-join-bg" id="how-to">
    <div class="container ">
        <h3 class="text-light about-title">
            How To Join <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-transparent" data-toggle="modal" data-target="#how-to-join">
                <i class="fa fa-play-circle fa-2x " aria-hidden="true"></i>
            </button>
            <span class="text_how">
                <a type="button" data-toggle="modal" data-target="#how-to-join">Watch Video Process</a>
            </span>



        </h3>

    </div>
</section>


<!-- STEPS -->
<section id="how_to" class="pt-4 desktop-view">
    <div class="container">
        <div class="row pb-2 pt-5">
            <div class="col-md-6">
                <h4>Step 1 </h4>
                <h6 class="pt-3">१. जिल्हा निवडा</h6>
                <p>
                    <span style="font-size:18px">www.scrollup.in </span> वेबसाईट वर गेल्यावर तुमचा जिल्हा निवडा.
                    <br>
                </p>


                <h6>२. क्रमांक टाका</h6>
                <p> तुमचा 10 अंकी व्हाट्सअप क्रमांक टाका ज्यावर तुम्हाला अपडेट मिळवायच्या आहेत. <br>
                </p>

            </div>
            <div class="col-md-6 step-1">
                <img src="<?= site_url('assets/front_commonarea/'); ?>/img/appscreen-1.jpg" class="">

            </div>

        </div>
        <!-- 2 -->
        <div class="row py-2 ">
            <div class="col-md-6 step-1">
                <img src="<?= site_url('assets/front_commonarea/'); ?>/img/appscreen-2.jpg" class="">

            </div>
            <div class="col-md-6">
                <h4>Step 2 </h4>
                <h6 class=" pt-3">३. क्रमांक सेव्ह करा</h6>
                <p> तुमचा व्हाट्सअप नंबर टाकल्यावर क्रमांक सेव्ह करा वर क्लिक करा व व्हाट्सअप च्या आयकॉन वर जा.<br>
                </p>
                <h6>४. व्हाट्सअप वर गेल्यावर</h6>
                <p> तुम्हाला आधीपासून लिहलेला मेसेज येऊन आमचा नंबर दिसेल तो मेसेज सेंड करा.! <br>
                </p>
            </div>
        </div>
        <!-- 3 -->
        <div class="row py-2">
            <div class="col-md-6 ">
                <h4 class=" pb-3">Step 3 </h4>
                <h6>५. स्क्रोलअप नंबर</h6>
                <p> आलेला मेसेज पाठवल्यावर सेवा मिळवण्यासाठी स्क्रोलअप चा नंबर सेव्ह करणे गरजेच आहे.<br>
                </p>

                <h6>६. वेबसाईटवर जा</h6>
                <p> पुष्टी करण्यासाठी पुन्हा वेबसाईट वर जा आणि जॉईन करा वर क्लिक करून OK करा.<br>
                </p>

            </div>
            <div class="col-md-6 step-1">
                <img src="<?= site_url('assets/front_commonarea/'); ?>/img/appscreen-3.jpg" class="">

            </div>

        </div>
        <div class="row py-2">
            <div class="col-md-6 step-1">
                <img src="<?= site_url('assets/front_commonarea/'); ?>/img/appscreen-4.jpg" class="">

            </div>
            <div class="col-md-6 ">
                <h4 class=" pb-3">Step 4 </h4>
                <h6>7. पुढे पाठवा</h6>
                <p> तुमच्या मित्र मैत्रिणीला व परिवाराला विनामूल्य अपडेट्स देण्यासाठी ग्रुप वर किव्हा पर्सनल ला पाठवा (नोट -अनिवार्य नाही )<br>
                </p>

                <h6>8. 24 तासात सेवा सुरू</h6>
                <p> 24 तासात सेव्ह केलेल्या क्रमांकवरून दररोज अपडेट्स येन्यास सुरूवात होईल.<br>
                </p>

            </div>


        </div>
        <section class="bottom-text text-center pt-4">
            <div class="pb-4 text-center">
                <a class="btn btn-primary" href="<?= site_url('') ?>">Join Now</a>
            </div>
            <p>
                24 तासात सेव्ह केलेल्या क्रमांकवरून दररोज अपडेट्स येन्यास सुरूवात होईल .
            </p>
        </section>
    </div>


</section>

<!-- MOBILE VIEW -->
<section id="how_to" class="pt-4">
    <div class="container mobile-display">
        <div class="row py-2">
            <div class="col-md-6">
                <h4 class="py-2">Step 1 </h4>
                <h6>१. जिल्हा निवडा</h6>
                <p>
                    <span style="font-size:18px">www.scrollup.in </span> वेबसाईट वर गेल्यावर तुमचा जिल्हा निवडा.
                    <br>
                </p>


                <h6>२. क्रमांक टाका</h6>
                <p> तुमचा 10 अंकी व्हाट्सअप क्रमांक टाका ज्यावर तुम्हाला अपडेट मिळवायच्या आहेत. <br>
                </p>

            </div>
            <div class="col-md-6 step-1 pt-4">
                <img src="<?= site_url('assets/front_commonarea/'); ?>/img/appscreen-1.jpg" class="">

            </div>

        </div>
        <!-- 2 -->
        <div class="row py-2 ">

            <div class="col-md-6">
                <h4 class=" py-2">Step 2 </h4>
                <h6>३. क्रमांक सेव्ह करा</h6>
                <p> तुमचा व्हाट्सअप नंबर टाकल्यावर क्रमांक सेव्ह करा वर क्लिक करा व व्हाट्सअप च्या आयकॉन वर जा.<br>
                </p>
                <h6>४. व्हाट्सअप वर गेल्यावर</h6>
                <p> तुम्हाला आधीपासून लिहलेला मेसेज येऊन आमचा नंबर दिसेल तो मेसेज सेंड करा.! <br>
                </p>
            </div>
            <div class="col-md-6 step-1 pt-4">
                <img src="<?= site_url('assets/front_commonarea/'); ?>/img/appscreen-2.jpg" class="">

            </div>
        </div>
        <!-- 3 -->
        <div class="row py-2">
            <div class="col-md-6 ">
                <h4 class="py-2">Step 3 </h4>
                <h6>५. स्क्रोलअप नंबर</h6>
                <p> आलेला मेसेज पाठवल्यावर सेवा मिळवण्यासाठी स्क्रोलअप चा नंबर सेव्ह करणे गरजेच आहे.<br>
                </p>

                <h6>६. वेबसाईटवर जा</h6>
                <p> पुष्टी करण्यासाठी पुन्हा वेबसाईट वर जा आणि जॉईन करा वर क्लिक करून OK करा.<br>
                </p>

            </div>
            <div class="col-md-6 step-1 pt-4">
                <img src="<?= site_url('assets/front_commonarea/'); ?>/img/appscreen-3.jpg" class="">

            </div>

        </div>
        <div class="row py-2">

            <div class="col-md-6 ">
                <h4 class="py-2">Step 4 </h4>
                <h6>7. पुढे पाठवा</h6>
                <p> तुमच्या मित्र मैत्रिणीला व परिवाराला विनामूल्य अपडेट्स देण्यासाठी ग्रुप वर किव्हा पर्सनल ला पाठवा (नोट -अनिवार्य नाही )<br>
                </p>

                <h6>8. 24 तासात सेवा सुरू</h6>
                <p> 24 तासात सेव्ह केलेल्या क्रमांकवरून दररोज अपडेट्स येन्यास सुरूवात होईल.<br>
                </p>

            </div>
            <div class="col-md-6 step-1 pt-4">
                <img src="<?= site_url('assets/front_commonarea/'); ?>/img/appscreen-4.jpg" class="">

            </div>


        </div>
        <section class="bottom-text text-center pt-2">
            <div class="pb-4 text-center">
                <a class="btn btn-primary" href="<?= site_url('') ?>">Join Now</a>
            </div>

            <p>
                24 तासात सेव्ह केलेल्या क्रमांकवरून दररोज अपडेट्स येन्यास सुरूवात होईल.


            </p>
        </section>
    </div>


</section>


<!-- <footer>
    <p class="para-desc mx-auto text-muted mt-1 text-center footer-link-col" style="margin-bottom: 0px !important">
        <a href="<?= site_url('terms_and_conditions') ?>">Terms & Conditions</a> <span class="text-muted">&#124;</span>
        <a href="<?= site_url('privacy_policy') ?>">Privacy Policy</a>
    </p>
    <p class="para-desc mx-auto text-muted mt-1 text-center font-jaldi-bold" style="margin-bottom: 0px !important">
        ©2021 Scrollup. All Rights Reserved
    </p>
</footer> -->



<!-- Modal -->
<div class="modal fade" id="how-to-join" tabindex="-1" role="dialog" aria-labelledby="how-to-joinTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="margin:0px; max-width:unset;">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="how-to-joinTitle">HOW TO JOIN</h5> -->
                <button id="close-video" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="">
                    <div class="container text-center pb-4 mx-auto">
                        <video controls id="video1">
                            <source src="<?= site_url('assets/front_commonarea/img/how_to_join.mp4'); ?>" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </section>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>


<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>


<script>
    $('#how-to-join').on('shown.bs.modal', function() {
        $('#video1')[0].play();
    })
    $('#how-to-join').on('hidden.bs.modal', function() {
        $('#video1')[0].pause();
    })
</script>