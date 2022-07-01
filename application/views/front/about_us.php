<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.content-marathi {
    /* display: none; */
}

.content-english {
    /* display: none; */
}

.modal.fade {
    opacity: 1;
}

.modal-backdrop.fade {
    opacity: 1;
    background: #00000085;
}

.modal.fade .modal-dialog {
    margin: 0px !important;
    -webkit-transform: translate(0);
    -moz-transform: translate(0);
    transform: translate(0);
    padding: 0px 10px;
}
</style>

<section id="mobile-lang">
    <div class="radio_btn">
        <label class="radio-inline"><input type="radio" class="radioBtnClass" value="Marathi" name="optradio"
                id="marathi" checked>मराठी</label>
        <label class="radio-inline"><input type="radio" class="radioBtnClass" value="English"
                name="optradio">English</label>
    </div>
</section>

<!-- NAVBAR -->
<header class="sticky">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="<?= site_url() ?>" class="navbar-brand logo">
                <img src="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['logo']) ? $visualSettings[0]['logo'] : 'assets/commonarea/dist/img/Scrolup-Logo.png'; ?>"
                    height="60px" />
            </a>

            <div class="language">
                <label label class="radio-inline"><input type="radio" value="Marathi" class="radioBtnClass"
                        name="optradio" checked>मराठी</label>
                <label class="radio-inline"><input type="radio" value="English" class="radioBtnClass"
                        name="optradio">English</label>
            </div>



            <div class="dropdown">
                <button class="btn btn-main dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="dropdown-menu mobile-view" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= site_url('') ?>">Home</a>
                    <a class="dropdown-item" href="<?= site_url('about_us') ?>">About Us</a>
                    <a class="dropdown-item" href="<?= site_url('how_to_join') ?>">How to Join</a>
                    <a class="dropdown-item" href="<?= site_url('why_infotech_marathi') ?>">Why Infotech Marathi</a>
                    <a class="dropdown-item" href="<?= site_url('referral-login') ?>">Referral Partner</a>
                    <a class="dropdown-item" href="<?= site_url('contact_us') ?>">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- HEADER  -->
<section class="about-bg">
    <div class="container">
        <h3 class="text-light about-title">About Us</h3>
    </div>
</section>

<!-- MAIN CONTENT -->
<div id="english_content">
    <section id="about" class=" content-english" style="background-color: #f3f4f7">
        <div class="container">
            <div class="row">
                <div class="col-md-12  my-4">
                    <h4 class="py-4 text-center">Welcome to Infotech Marathi Digital Magazine</h4>

                    <ul style="padding: 0px" class="ul-eng">
                        <li>
                            <p> In this age of breaking news, our first priority is to get the truth
                                and accurate news to you without compromising the truth and
                                precision from the facts in the news.</p>
                        </li>
                        <li>
                            <p>Our goal is to address the lack of information in rural areas and
                                keep them up to date by delivering the latest and important news
                                directly and clearly to the people.</p>
                        </li>
                        <li>
                            <p> Infotech Marathi is a digital social network that provides you with a
                                thorough and in-depth analysis of news.</p>
                        </li>
                        <li>
                            <p> We will always be ready to try to establish a better atmosphere in
                                the society by reducing the rumors spread by the news and making
                                people logically aware.</p>
                        </li>
                        <li>
                            <p> In a very short time, the scroll-up team started offering services
                                on WhatsApp only to provide news and important information.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTENT BOXES -->
    <section id="icon-boxes" class="p-4 content-english">
        <!-- <h2 class="py-3 text-center">Our Services</h2> -->
        <h4 class="text-center py-4">
            Infotech Marathi launched through WhatsApp - This Marathi Digital Magazine provides
            the following services:
        </h4>
        <div class="container">
            <!-- 1st ROW -->
            <div class="row mb-4">
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <!-- <img src="" alt=""> -->
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/News.gif"
                                class="" />

                            <h3>News</h3>
                            <p>
                                Infotech Marathi Digital Magazine on WhatsApp will give you important news
                                and events that you can read in a couple of minutes without
                                twisting words
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/job_update.gif"
                                class="" />
                            <h3>Job Updates</h3>
                            <p>
                                Accurate information on all job or employment opportunities for
                                children in rural and urban areas will be given on Infotech Marathi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Competetive_Exam.gif"
                                class="" />
                            <h3>Competitive Examination</h3>
                            <p>
                                Important documents and information about all types of competitive
                                exams will give you Infotech Marathi on WhatsApp in simple language and
                                fastest.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Government_Sceme.gif"
                                class="" />
                            <h3>Government Scheme</h3>
                            <p>
                                People in rural areas use WhatsApp but they don't get enough
                                information about government schemes. Infotech Marathi gives them
                                information directly in Marathi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2nd ROW -->
            <div class="row mb-4">
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Motivation_thought.gif"
                                class="" />
                            <h3>Inspirational Ideas</h3>
                            <p>
                                Marathi Status will give a Infotech Marathi on WhatsApp that will create
                                excitement and make everyone happy by reading good vibes .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Entertainment.gif"
                                class="" />
                            <h3>Entertainment</h3>
                            <p>
                                Fun stories from the daily stress the articles that will make you
                                happy to read will be given on the Infotech Marathi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/crime.gif"
                                class="" />
                            <h3>Crime</h3>
                            <p>
                                Illegal Behavior or Crime in Maharashtra will give you a Infotech Marathi
                                newspaper on WhatsApp by writing scholarly on deep.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Horoscope.gif"
                                class="" />
                            <h3>Horoscope</h3>
                            <p>
                                Infotech Marathi will help you to see your position in the twelve zodiac
                                signs, what will be the position of the planets in the horoscope
                                and what effect it will have on you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3rd ROW -->
            <div class="row mb-4">
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/local_update.gif"
                                class="" />
                            <h3>Local Update</h3>
                            <p>
                                Infotech Marathi Digital Updates on your WhatsApp will give you the news
                                of your district in a very concise form.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Self_Business_Guide.gif"
                                class="" />
                            <h3>Self Employment Guidance</h3>
                            <p>
                                The industry will guide and scroll up to help you achieve new
                                goals and ensure its steady long-term expansion.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Sport.gif"
                                class="" />
                            <h3>Games</h3>
                            <p>
                                Infotech Marathi will provide you with important sports information and
                                sports news from all over the world to rural areas on WhatsApp
                                Digital Magazine.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Politics.gif"
                                class="" />
                            <h3>Politics</h3>
                            <p>
                                Infotech Marathi WhatsApp Magazine on WhatsApp will give you a Free
                                glimpse of the politics of Maharashtra and India, not just voting.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4th ROW -->
            <div class="row mb-4">
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Technology.gif"
                                class="" />
                            <h3>Technology</h3>
                            <p>
                                Infotech Marathi technology will give you in-depth information on when
                                various tools are created based on knowledge in science and how to
                                use them to make human life happier.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Agriculture.gif"
                                class="" />

                            <h3>Agricultural Guidance</h3>
                            <p>
                                Use of modern technology, research and development of agriculture
                                in a new way will now make every farmer Infotech Marathi magazine
                                agricultural guidance on whatsapp.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Quality_Article.gif"
                                class="" />
                            <h3>Quality Articles</h3>
                            <p>
                                An article that will definitely fill your mind after reading will
                                give you Infotech Marathi on Marathi magazine WhatsApp.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/health.gif"
                                class="" />
                            <h3>Health</h3>
                            <p>
                                Scroll up Digital Magazine information on WhatsApp will give you
                                knowledge, new diseases and how to prevent them to stay healthy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTTOM TEXT -->
    <section class="content-english">
        <div class="container ">
            <div class="row bottom-text">
                <div class="col-md-12  py-2">
                    <div class="container text-center">
                        <div class="pb-4 text-center">
                            <a class="btn btn-primary" href="<?= site_url('') ?>">Join Now</a>
                        </div>
                        <p>
                            We hope you enjoy our service as much as we enjoy offering it to you. If
                            you have any questions or suggestions, please do not hesitate to contact
                            us.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- ------------------------------------------------------------------------------------------------------------ -->

<!--  CONTENT IN MARATHI-->
<div id="marathi_content">
    <section id="about" class=" content-marathi" style="background-color: #f3f4f7">
        <div class="container">
            <div class="row">
                <div class="col-md-12  my-4">
                    <h4 class="py-4 text-center">
                        नमस्कार इन्फोटेक मराठी या डिजिटल मॅगझीन मध्ये आपला स्वागत आहे
                    </h4>

                    <ul style="padding:0;" class="ul-marathi">
                        <li>
                            <p> ब्रेकिंग न्यूजच्या या युगात, बातमीतील तथ्यांमधून सत्यता आणि तंतोतंत
                                तडजोड न करता आपल्यापर्यंत सत्य आणि अचूक बातम्या पोहोचवणे हे आमचे
                                पहिले प्राधान्य आहे.</p>
                        </li>
                        <li>
                            <p>ग्रामीण भागातील माहितीचा अभाव दूर करणे आणि
                                ताज्या आणि महत्त्वाच्या बातम्या थेट आणि स्पष्टपणे लोकांपर्यंत
                                पोहोचवून यांना अद्ययावत ठेवणे हे आमचे ध्येय आहे</p>
                        </li>

                        <li>
                            <p>

                                इन्फोटेक मराठी हे एक डिजिटल सोशल नेटवर्क आहे ज्यावर बातम्यांचं
                                अभ्यासपूर्ण आणि सखोल विश्लेषण करून तुम्हाला दिले जाईल.
                            </p>
                        </li>

                        <li>
                            <p>
                                बातम्यांद्वारे पसरवल्या जाणाऱ्या अफवा कमी करून लोकांना
                                तार्किकदृष्ट्या जागरूक करून समाजात चांगले वातावरण प्रस्थापित
                                करण्याचा प्रयत्न करण्यासाठी आम्ही सदैव सज्ज राहू.
                            </p>
                        </li>

                        <li>
                            <p>
                                अगदी कमी वेळात फक्त मुद्द्यांच्या बातम्या व महत्वाची माहिती
                                देण्यासाठी इन्फोटेक मराठी टीम ने व्हाट्सअप्प वर सेवा देण्यास सुरुवात
                                केली.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES CARDS -->
    <section id="icon-boxes" class="p-4 content-marathi">
        <!-- <h2 class="py-3 text-center">Our Services</h2> -->
        <h4 class="text-center py-4">
            व्हॉटस्अपच्या माध्यमातून सुरू झालेले
            इन्फोटेक मराठी - हे मराठी डिजीटल मॅगझीन
            खालील सेवा पुरवते :
        </h4>
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <!-- <img src="" alt=""> -->
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/News.gif"
                                class="" />

                            <h3>न्यूज</h3>
                            <p>
                                महत्वाच्या बातम्या आणि घडामोडी आपल्याला शब्दांची फिरवाफिरवी न करता
                                दोन मिनिटात वाचून होतील अश्या बातम्या व्हाट्सअप वर इन्फोटेक मराठी
                                डिजिटल मॅगझीन देईल
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/job_update.gif"
                                class="" />
                            <h3>नोकरी अपडेट्स</h3>
                            <p>
                                ग्रामीण आणि शहरी भागातील मुलामुलींसाठी नोकरी किंवा रोजगाराच्या
                                सर्व संधीची अचुक माहिती इन्फोटेक मराठी वर दिली जाईल
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Competetive_Exam.gif"
                                class="" />
                            <h3>स्पर्धा परीक्षा</h3>
                            <p>
                                सर्व प्रकारच्या स्पर्धा परिक्षेबाबत महत्वाचे डॉक्युमेंट आणि माहिती
                                सोप्या भाषेत व सर्वात जलद व्हाट्सअप वर तुम्हाला इन्फोटेक मराठी देईल .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Government_Sceme.gif"
                                class="" />
                            <h3>शासकीय योजना</h3>
                            <p>
                                ग्रामीण भागातील लोक व्हाट्सअप वापरतात पण त्यांना सरकारी योजनांची
                                माहिती पुरेशी भेटत नाही त्यांना इन्फोटेक मराठी थेट मराठीमध्ये माहिती
                                देते .
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2nd ROW -->
            <div class="row mb-4">
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Motivation_thought.gif"
                                class="" />
                            <h3>प्रेरणादायक सुविचार</h3>
                            <p>
                                उत्साह निर्माण करतील आणि सुविचार वाचून आनंदी होतील अशे सर्वाना
                                आवडतील अशे मराठी स्टेटस व्हाट्सअप वर इन्फोटेक मराठी देईल.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Entertainment.gif"
                                class="" />
                            <h3>मनोरंजन</h3>
                            <p>
                                रोजच्या ताण तणावापासून मजेशीर अशे मनोरंजनाचे किस्से आणि वाचल्यावर
                                आनंद भेटेल अशे लेख इन्फोटेक मराठी वर दिले जातील .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/crime.gif"
                                class="" />
                            <h3>क्राईम</h3>
                            <p>
                                बेकायदेशीर वर्तन किंवा महाराष्ट्रातील गुन्हेगारी खोल वर
                                अभ्यासपूर्ण लिहून तुम्हाला व्हाट्सअप्प वर इन्फोटेक मराठी न्युजपेपर देईल
                                .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Horoscope.gif"
                                class="" />
                            <h3>राशिभविष्य</h3>
                            <p>
                                कुंडलीतील ग्रहांची स्थिती कशी असेल आणि त्याचा तुमच्यावर काय परिणाम
                                होईल, हे बारा राशीमध्ये तुमचा अंदाज पाहण्यास
                                इन्फोटेक मराठी मदत करेल .
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3rd ROW -->
            <div class="row mb-4">
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/local_update.gif"
                                class="" />
                            <h3>लोकल अपडेट</h3>
                            <p>
                                तुमच्या जिल्ह्यातील बातम्या तुमच्या व्हाट्सअप्प वर
                                इन्फोटेक मराठी
                                डिजिटल अपडेट अगदी संक्षिप्त स्वरूपात तुम्हाला देईल.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Self_Business_Guide.gif"
                                class="" />
                            <h3>स्वयं रोजगार मार्गदर्शन</h3>
                            <p>
                                तुम्हाला नवीन लक्ष्य साध्य करणे आणि त्याचा स्थिर दीर्घ-मुदतीचा
                                विस्तार सुनिश्चित करन्यासाठी उद्योग मार्गदर्शन व मदत
                                इन्फोटेक मराठी
                                करेल .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Sport.gif"
                                class="" />
                            <h3>खेळ</h3>
                            <p>
                                जगभरापासून ते ग्रामीण भागापर्यंत जे महत्वाचे खेळ माहिती आणि
                                खेळाबद्दल बातम्या असतील ते
                                इन्फोटेक मराठी तुम्हाला व्हाट्सअप डिजिटल
                                मॅगझीन वर देईल .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Politics.gif"
                                class="" />
                            <h3>राजकीय</h3>
                            <p>
                                फक्त मतदान केल की झाल अस नसून महाराष्ट्राच्या आणि भारताच्या
                                राजकारणाच्या सूत्रांच्या हालचाली तुम्हाला व्हाट्सअप्प वर
                                इन्फोटेक मराठी
                                व्हाट्सअप मॅगझीन देईल .
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4th ROW -->
            <div class="row mb-4">
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Technology.gif"
                                class="" />
                            <h3>तंत्रज्ञान</h3>
                            <p>
                                मानवी जीवन सुखी करण्यासाठी विज्ञानातील ज्ञानाच्या आधारे जेव्हा
                                विविध साधनांची निर्मिती केली जाते त्याची सखोल माहिती
                                इन्फोटेक मराठी
                                तंत्रज्ञान तुम्हाला देईल.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Agriculture.gif"
                                class="" />
                            <h3>कृषी मार्गदर्शन</h3>
                            <p>
                                आधुनिक तंत्रज्ञाचा वापर , संशोधन नव्या पद्धतीने शेतीचा विकास आता
                                प्रत्येक शेतकऱ्याला करणार
                                इन्फोटेक मराठी मॅगझीन कृषी मार्गदर्शन
                                व्हाट्सअप वर .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/Quality_Article.gif"
                                class="" />
                            <h3>दर्जेदार लेख</h3>
                            <p>
                                जे वाचल्यावर नक्कीच तुमचे मन भरून येईल अशे लेख तुम्हाला
                                इन्फोटेक मराठी
                                मराठी मॅगझीन व्हाट्सअप्प वर देईल.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <img src="<?= site_url('assets/front_commonarea/'); ?>/img/about-us-images/health.gif"
                                class="" />
                            <h3>आरोग्य</h3>
                            <p>
                                निरोगी आरोग्य ठेवण्यासाठी ज्ञान , नवीन आजार व त्यापासून प्रतिबंधित कसे राहायचे हे
                                इन्फोटेक मराठी माहिती व्हाट्सअप वर देईल.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bottom Text -->
    <section>
        <div class="container content-marathi">
            <div class="row bottom-text">
                <div class="col-md-12  py-2">
                    <div class="container text-center">
                        <div class="pb-4 text-center">
                            <a class="btn btn-primary" href="<?= site_url('') ?>">Join Now</a>
                        </div>
                        <p>
                            आम्हाला आशा आहे की तुम्ही आमच्या सेवेचा लाभ घ्याल. आपल्याकडे काही प्रश्न किंवा काही सुचवावे
                            वाटले तर कृपया आमच्याशी संपर्क साधण्यास संकोच करू नका. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- <section style="background-color: #f3f4f7">
    <div class="gotohome">
        <a class="" href="<?= site_url('') ?>">Go To Home Page</a>
    </div>
</section> -->

<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>
<script>
$("#english_content").hide();
$("input[type='radio']").change(function(e) {

    if ($("input[type='radio'].radioBtnClass").is(':checked')) {
        var radio_btn = $("input[type='radio'].radioBtnClass:checked").val();
        //   alert(radio_btn);
    } else {
        var radio_btn = '';
    }
    if (radio_btn == "English") {
        $("#marathi_content").hide();
        $("#english_content").show();
    } else if (radio_btn == "Marathi") {
        $("#marathi_content").show();
        $("#english_content").hide();
    }
});
</script>