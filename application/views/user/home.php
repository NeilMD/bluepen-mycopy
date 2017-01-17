<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Material UI One Page Theme</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url(); ?>userassets/min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>userassets/min/custom-min.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>userassets/css/custom.css">
</head>
<body id="top" class="scrollspy">

    <!-- Pre Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!--Navigation-->
    <div class="navbar-fixed">
        <nav id="nav_f" class="default_color" role="navigation">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" id="logo-container" class="brand-logo">BluePen</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#sites">Featured Sites</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a class="modal-trigger" href="#modal1" >Login</a></li>
                    </ul>
                    <ul id="nav-mobile" class="side-nav">
                        <li><a href="#sites">Featured Sites</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a class="modal-trigger" href="#modal1" >Login</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </div>
            </div>
        </nav>
    </div>

    <!--Hero-->
    <div class="section no-pad-bot" id="index-banner" >
        <div class="container">
            <h1 class="text_h center header cd-headline letters type">
                <span class="cd-words-wrapper waiting">
                    <b class="is-visible"><?php echo $messages[0]["value"]; ?></b>
                    <b><?php echo $messages[1]["value"]; ?></b>
                </span>
            </h1>
        </div>
    </div>
    <div class="section scrollspy" id="sites">
        <div class="container">
            <h2 class="header text_b">Featured Sites </h2>
            <div class="row">
                <?php for ($i = 0; $i < count($featured); $i++): ?>
                  <div class="col s12 m4 l4">
                      <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="<?php echo base_url(); ?>index.php/site/fimage/<?php echo $featured[$i]["site_ref"]; ?>">
                          </div>
                          <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4"><?php echo $featured[$i]["site_ref"]; ?> <i class="mdi-navigation-more-vert right"></i></span>
                              <p><a class="activator">More details </a></p>
                          </div>
                          <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4"><?php echo $featured[$i]["site_ref"]; ?> <i class="mdi-navigation-close right"></i></span>
                              <p><?php echo $featured[$i]["remarks"]; ?></p>
                          </div>
                      </div>
                  </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <!--Intro and service-->
    <div id="intro" class="section scrollspy">
        <div class="container">
            <div class="row">
                <div  class="col s12">
                    <h2 class="center header text_h2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem <span class="span_h2"> laoreet quis.</span> </h2>
                </div>

                <div  class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <img class="responsive-img circle" src="<?php echo base_url(); ?>userassets/sample-images/2.JPG">
                        <h5 class="promo-caption">Speeds up development</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <img class="responsive-img circle"  src="<?php echo base_url(); ?>userassets/sample-images/4.JPG">
                        <h5 class="promo-caption">User Experience Focused</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="center promo promo-example">
                        <img class="responsive-img circle"  src="<?php echo base_url(); ?>userassets/sample-images/5.JPG">
                        <h5 class="promo-caption">Fully responsive</h5>
                        <p class="light center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Work-->


    <!--Parallax-->
    <div class="parallax-container">
        <div class="parallax"><img src="<?php echo base_url(); ?>userassets/sample-images/6.jpg"></div>
    </div>

    <!--Team-->
    <div class="section scrollspy" id="about">
        <div class="container">
            <h2 class="header text_b"> About </h2>
            <div class="row">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem  Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="span_h2"> Phasellus  </span>vestibulum lorem risus, nec suscipit lorem
         </div>
     </div>
 </div>

 <!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="footer-copyright default_color">
        <div class="container">
             About BluePen
        </div>
    </div>
</footer>




<div id="modal1" class="modal modal-fixed">
   <div class="modal-content">
        <div class="row">
            <form id="login-form" class="col s12" action="<?php echo base_url() ?>index.php/home/login" method="POST">
                <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">account_circle</i>
                      <input name="username" id="username" type="text" class="validate">
                      <label for="first_name">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                 <a id="submit-login" class="waves-effect waves-light default_color pull-right btn" type="submit" name="login">Login<i class="mdi-content-send right white-text"></i></a>
            </form>
        </div>
    </div>
</div>

</body>


<!--  Scripts-->
<script src="<?php echo base_url(); ?>userassets/min/plugin-min.js"></script>
<script src="<?php echo base_url(); ?>userassets/min/custom-min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
				$("#submit-login").click(function() {
					$("#login-form").submit();
				});
    });

</script>
</html>
