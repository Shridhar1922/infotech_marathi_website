<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</link>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
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
<header class="sticky">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="<?= site_url() ?>" class="navbar-brand logo">
                <img src="<?php echo base_url();?><?php echo !empty($visualSettings[0]['logo'])?$visualSettings[0]['logo']:'assets/commonarea/dist/img/Scrolup-Logo.png' ;?>"
                    height="60px">
            </a>
            <div class="dropdown ">
                <button class="btn btn-main dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="dropdown-menu mobile-view" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?= site_url('') ?>">Home</a>
                    <a class="dropdown-item" href="<?= site_url('about_us') ?>">About Us</a>
                    <a class="dropdown-item" href="<?= site_url('how_to_join') ?>">How to Join</a>
                    <a class="dropdown-item" href="<?= site_url('why_scrollup') ?>">Why Infotech Marathi</a>
                    <a class="dropdown-item" href="<?= site_url('referral-login') ?>">Referral Partner</a>
                    <a class="dropdown-item" href="<?= site_url('contact_us') ?>">Contact Us</a>
                </div>
            </div>


        </div>
    </nav>
</header>

<section class="tc-bg">
    <div class="container ">
        <h3 class="text-light about-title">
            Terms & Conditions
        </h3>
    </div>
</section>

<section class=" terms-conditions">
    <div class="container ">
        <?php echo !empty($cms_data[0]['cms_text']) ? $cms_data[0]['cms_text'] : '';?>
        <!-- <h5 class="t-and-c-main-heading">END USER LICENSE AGREEMENT</h5>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore laborum atque in obcaecati architecto
            adipisci corporis minus assumenda harum dolore! Veritatis, illo optio neque harum odio commodi corrupti
            minima aperiam.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolore pariatur, exercitationem eveniet
            voluptatum commodi aspernatur maiores! Asperiores alias possimus distinctio dolores itaque delectus porro,
            numquam enim ullam, voluptate modi!
        </p>

        <p>All rights not expressly granted to You are reserved.</p>

        <div class="t-c-list">
            <p class="title">LOREM IPSUM</p>
            <p class="desc">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem voluptate sequi repudiandae totam
                autem quis. Magnam voluptatem fuga, dolor quod alias ea sed officia, doloribus laboriosam beatae
                expedita harum accusantium repellendus maiores. Inventore tempora ratione nulla excepturi earum, at
                quidem!
            </p>
        </div>

        <div class="t-c-list">
            <p class="title">LOREM IPSUM TEXT</p>
            <ul class="t-c-points">
                <li>
                    <p class="desc">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt magni obcaecati iure autem
                        sed itaque consequuntur, fugiat non quaerat excepturi dolorum natus explicabo ipsam mollitia
                        eaque. Neque doloribus voluptate eum illum voluptates eaque voluptatem sint harum quia! Rem,
                        necessitatibus! Voluptatum, pariatur libero unde facere nisi ab amet eum corrupti porro!
                    </p>
                </li>
                <li>
                    <p class="desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, natus aliquid deserunt
                        optio assumenda quis sed voluptatibus enim et provident repudiandae eveniet totam labore
                        cupiditate ad ab veritatis. Non, dolore?
                    </p>
                </li>
                <li>
                    <p class="desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quidem quibusdam adipisci
                        est eos labore ut ipsam consequatur asperiores, quod accusamus at dicta? Voluptatem eveniet
                        suscipit quo at possimus, numquam neque? Beatae provident atque illum.
                    </p>
                </li>


        </div>

        <div class="t-c-list">
            <p class="title">LOREM IPSUM TEXT</p>
            <p class="desc">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, adipisci! Quasi, accusamus!
                Veritatis quae voluptatibus temporibus facilis dignissimos itaque voluptates perspiciatis velit, sunt
                fugiat sed, mollitia iste corporis? Nostrum voluptatum velit doloremque provident ratione tenetur.
            </p>
        </div>

        <div class="t-c-list">
            <p class="title">LOREM IPSUM TEXT</p>
            <p class="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint doloremque ad error dolorum iure
                voluptates voluptas esse tempore totam iusto adipisci consequatur pariatur sequi accusantium cum,
                assumenda suscipit ut maxime? Eveniet ab odit maxime, numquam non impedit sequi veniam commodi eum,
                error aperiam? Suscipit neque fuga cum vel. Voluptatem, pariatur.:
            </p>


        </div>





        <div class="t-c-list">
            <p class="title">LOREM IPSUM TEXT</p>
            <ul class="t-c-points">
                <li>
                    <p class="desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate modi ut cumque
                        necessitatibus exercitationem! Nisi incidunt facere ut necessitatibus quos quia odit iure,
                        sapiente, tempora ipsum ratione recusandae, mollitia fugiat?
                    </p>
                </li>
                <li>
                    <p class="desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat non dolorum ea? Officiis id
                        totam eos magni explicabo obcaecati, amet alias perferendis quia rerum sint temporibus sit
                        placeat in nihil itaque laudantium quam nisi dolores fuga tempore dolorem. Dolor, optio sed?
                        Suscipit, expedita. Quibusdam, autem!
                    </p>
                </li>
                <li>
                    <p class="desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, vitae? Repellendus, quo at
                        ab repellat aut ipsam maxime dolores facere laboriosam consequatur sapiente deleniti nihil
                        placeat ex assumenda necessitatibus nam.
                    </p>
                </li>

                <li>
                    <p class="desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, vitae? Repellendus, quo at
                        ab repellat aut ipsam maxime dolores facere laboriosam consequatur sapiente deleniti nihil
                        placeat ex assumenda necessitatibus nam.
                    </p>
                </li>
            </ul>
        </div>


        <div class="t-c-list">
            <p class="title">LOREM IPSUM TEXT</p>
            <p class="desc">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam qui consectetur recusandae nemo atque
                aspernatur accusantium unde mollitia cupiditate facere voluptatem eveniet, obcaecati magnam quasi?
            </p>
        </div> -->

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

<script src="<?= site_url('assets/front_commonarea/'); ?>js/app.js"></script>