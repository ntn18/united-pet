<head>
    <base href="<?=base_url() . 'assets/home/';?>">
    <meta charset="utf-8">
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- page title -->
    <title>United Pets - Cứu hộ động vật</title>
    <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
    <!-- Font files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700%7CMontserrat:400,500,600,700"
        rel="stylesheet">
    <link href="fonts/flaticon/flaticon.css" rel="stylesheet" type="text/css">
    <link href="fonts/fontawesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fav icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- plugins CSS -->
    <link href="css/plugins.css" rel="stylesheet">
    <!-- Colors CSS -->
    <link href="styles/maincolors.css" rel="stylesheet">
    <!-- LayerSlider CSS -->
    <link rel="stylesheet" href="vendor/layerslider/css/layerslider.css">

    <?php $this->load->view('home/base/style')?>
    <style>
    /* boxed */
    #top.boxed {
        max-width: 1200px;
        margin: 0 auto;
        box-shadow: 10px 10px 100px -19px rgba(0, 0, 0, 0.75);
        background: #fff;
    }

    #top.boxed .navbar,
    #top.boxed .top-bar,
    #top.boxed #slider,
    #top.boxed #nav,
    #top.boxed footer,
    #top.boxed #video-header {
        max-width: 1200px;
        margin: 0 auto !important;
    }
    </style><!-- Switcher Only -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="switcher/css/switcher.css" media="all" />
    <!-- END Switcher Styles -->

    <!-- Demo Examples (For Module #3) -->
    <link rel="alternate stylesheet" type="text/css" href="styles/maincolors.css" title="maincolors" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="styles/tinypaws.css" title="tinypaws" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="styles/veterinarian.css" title="veterinarian" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="styles/agility.css" title="agility" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="styles/superpet.css" title="superpet" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="styles/mymascot.css" title="mymascot" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/css/boxed.css" title="boxed" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="switcher/css/full.css" title="full" media="all" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-76370337-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-76370337-2');
    </script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T7ZJPV8');
    </script>
    <!-- End Google Tag Manager -->
</head>