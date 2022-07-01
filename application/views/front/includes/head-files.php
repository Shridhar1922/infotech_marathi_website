<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8 />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php echo !empty($cms_data[0]['cms_meta_title']) ? $cms_data[0]['cms_meta_title'] : 'Scrollup | Digital Newspaper' ?>
    </title>
    <meta name="description" content="<?php echo !empty($cms_data[0]['cms_description']) ? $cms_data[0]['cms_description'] : '📣 ब्रेकिंग न्यूज 😳 आता WhatsApp वर मिळवा न्यूज, जॉब्स आणि माहिती-मनोरंजन.आणि बरेच काही अगदी 
FREE त्यासाठी लगेच जॉईन करा 👉 Scrollup Digital Magazine 👈'; ?>">
    <meta name="keywords"
        content="<?php echo !empty($cms_data[0]['cms_meta_keywords']) ? $cms_data[0]['cms_meta_keywords'] : 'magazine in marathi, marathi magazine, digital magazine whatsapp,marathi news on whatsapp, whatsapp digital magazine, marathi digital magazine on whatsapp whatsapp magazine, free digital magazine whatsapp marathi, marathi digital magazine'; ?>">
    <meta name="msvalidate.01" content="886EBFE9AD0C33CFC5DDDB0E7888FEFA" />
    <link rel="icon"
        href="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['favicon']) ? $visualSettings[0]['favicon'] : 'assets/front_commonarea/img/scrollup_crop.png'; ?>"
        type="image/png" sizes="16x16">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content=" width=device-width,initial-scale=1maximum-scale=1,user-scalable=0,minimal-ui" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= site_url('assets/front_commonarea/'); ?>css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= site_url('assets/front_commonarea/'); ?>css/sweetalert.css">
    <link href="<?= site_url('assets/front_commonarea/'); ?>css/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/front_commonarea/'); ?>css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/front_commonarea/'); ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/front_commonarea/'); ?>css/aos.css" rel="stylesheet" type="text/css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BYJER8JEQL"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-BYJER8JEQL');
    </script>
    <script src="<?= site_url('assets/front_commonarea/'); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= site_url('assets/js/jquery.validate.min.js'); ?>"></script>

    <!-- Summer note -->
    <link rel="stylesheet" href="<?= site_url('assets/commonarea/'); ?>plugins/summernote/summernote.css">

    <meta property="og:title" content="Scrollup | Digital Newspaper">
    <meta property="og:site_name" content="Scrollup">
    <meta property="og:url" content="https://scrollup.in/">
    <meta property="og:description" content="📣 ब्रेकिंग न्यूज 😳 आता WhatsApp वर मिळवा न्यूज, जॉब्स आणि माहिती-मनोरंजन.आणि बरेच काही अगदी 
FREE त्यासाठी लगेच जॉईन करा 👉 Scrollup Digital Magazine 👈 ">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['favicon']) ? $visualSettings[0]['favicon'] : 'assets/front_commonarea/img/scrollup_crop.png'; ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="scrollup.in">
    <meta name="twitter:title" content="Scrollup | Digital Newspaper">
    <meta name="twitter:description" content="📣 ब्रेकिंग न्यूज 😳 आता WhatsApp वर मिळवा न्यूज, जॉब्स आणि माहिती-मनोरंजन.आणि बरेच काही अगदी 
FREE त्यासाठी लगेच जॉईन करा 👉 Scrollup Digital Magazine 👈">
    <meta name="twitter:image"
        content="<?php echo base_url(); ?><?php echo !empty($visualSettings[0]['favicon']) ? $visualSettings[0]['favicon'] : 'assets/front_commonarea/img/scrollup_crop.png'; ?>">

    <script type='application/ld+json'>
    {
        "@context": "https://schema.org",
        "@graph": [{
            "@type": "WebSite",
            "@id": "https://scrollup.in/#website",
            "url": "https://scrollup.in/",
            "name": "",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://scrollup.in/?s={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }, {
            "@type": "WebPage",
            "@id": "https://scrollup.in/#webpage",
            "url": "https://scrollup.in/",
            "inLanguage": "en-US",
            "name": "Scrollup provides authentic Magazine in Marathi, News on WhatsApp, Free digital newspaper & Free digital magazine. | Scrollup Digital Magazine",
            "isPartOf": {
                "@id": "https://scrollup.in/#website"
            },
            "datePublished": "2021-10-02T15:11:19+00:00",
            "dateModified": "2021-10-22T09:07:20+00:00",
            "description": "╨Б╨п╨г╨│ ╤А╨┤╨╝╤А╨╡╨Э╤А╨┤тЦС╤А╨╡╨Ч╤А╨┤╨е╤А╨┤тФР╤А╨┤╨Т╤А╨┤╨з ╤А╨┤╨╕╤А╨╡╨Э╤А╨┤╨┐╤А╨╡╨Т╤А╨┤╨м ╨Б╨п╨итФВ ╤А╨┤╨Ц╤А╨┤╨┤╤А╨┤тХЫ WhatsApp ╤А╨┤тХб╤А╨┤тЦС ╤А╨┤╨╛╤А╨┤тФР╤А╨┤тФВ╤А╨┤тХб╤А╨┤тХЫ ╤А╨┤╨╕╤А╨╡╨Э╤А╨┤╨┐╤А╨╡╨Т╤А╨┤╨м, ╤А╨┤╨м╤А╨╡╨Щ╤А╨┤╨╝╤А╨╡╨Э╤А╨┤тХХ ╤А╨┤╨Ц╤А╨┤╨│╤А╨┤тФР ╤А╨┤╨╛╤А╨┤тХЫ╤А╨┤тХг╤А╨┤тФР╤А╨┤╨┤╤А╨╡╨Р-╤А╨┤╨╛╤А╨┤╨╕╤А╨╡╨Ы╤А╨┤тЦС╤А╨┤╨Т╤А╨┤╨м╤А╨┤╨╕.╤А╨┤╨Ц╤А╨┤╨│╤А╨┤тФР ╤А╨┤╨╝╤А╨┤тЦС╤А╨╡╨Ч╤А╨┤╨к ╤А╨┤╨е╤А╨┤тХЫ╤А╨┤тХг╤А╨╡╨Р ╤А╨┤╨Х╤А╨┤╨з╤А╨┤╨╢╤А╨╡╨Р FREE ╤А╨┤╨┤╤А╨╡╨Э╤А╨┤╨┐╤А╨┤тХЫ╤А╨┤тХХ╤А╨┤тХЫ╤А╨┤╨░╤А╨╡╨Р ╤А╨┤тЦУ╤А╨┤╨з╤А╨╡╨Ч╤А╨┤╨к ╤А╨┤╨м╤А╨╡╨Щ╤А╨┤╨Ш╤А╨┤╨╕ ╤А╨┤╨е╤А╨┤тЦС╤А╨┤тХЫ ╨Б╨п╨б╨Щ Scrollup Digital Magazine ╨Б╨п╨б╨Ш"
        }]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Scrollup",
        "url": "https://scrollup.in/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
</head>

<body>
    <!-- <div class="preloader1">
    <div class="loader3">
      <span></span>
      <span></span>
    </div>
  </div> -->

    <div class="n-loader">
        <div class="container">
            <div class="📦"></div>
            <div class="📦"></div>
            <div class="📦"></div>
            <div class="📦"></div>
            <div class="📦"></div>
        </div>
    </div>