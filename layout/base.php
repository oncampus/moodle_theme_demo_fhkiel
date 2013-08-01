<?php
$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$haslogininfo = (empty($PAGE->layout_options['nologininfo']));

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));
$bodyclasses = array();

if ($hascustommenu) {$bodyclasses[] = 'has_custom_menu';}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title; ?></title>
	<!--[if IE 9]><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" ><![endif]-->
	<!--[if IE 8]><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" ><![endif]-->
	<!--[if IE 7]><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" ><![endif]-->
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
 
<body id="<?php p($PAGE->bodyid); ?>" class="<?php p($PAGE->bodyclasses); ?>">

<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page">
  <div id="headerwrapper">
	<div id="page-header-bg" class="gradient">
	<div id="page-header">
	  <div id="header"><div id="header-visuell">
	    <div class="headermenu">
		<?php if ($PAGE->heading) { 
            if (!empty($PAGE->layout_options['langmenu'])) {
                echo $OUTPUT->lang_menu();
            }
            echo $PAGE->headingmenu;
        } ?></div>
        <?php if ($hasnavbar) { ?>
            <div class="navbar clearfix">
                <div id="homeimage"><a href="<?php echo $CFG->wwwroot; ?>" title="Startseite">&nbsp;</a></div>
				<div id="info-login"><?php echo $OUTPUT->login_info(); ?></div>
				<div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
				<div class="navbutton"> <?php echo $PAGE->button; ?></div>
            </div>
        <?php } ?>
	  </div></div>
    </div>
	</div>
  </div>
  <div id="pagewrapper">
    <div id="page-content-wrapper"> 
      <div id="page-content">
	    <div id="page-visuell">
          <div id="region-main-box">
                <div id="region-main-wrap" class="colpos">
                    <div id="region-main">
                        <div class="region-content">
                            <?php echo $OUTPUT->main_content() ?>
                        </div>
                    </div>
                </div>
				<div class="clearer"></div>
		  </div>
	    </div>
	  </div>
    </div>
  </div>
 	
  <?php if ($hasfooter) { ?>
    <div id="page-footer">
	  <div id="footer">
    	<div id="footerlinks"><a href="http://www.fh-kiel.de" title="Fachhochschule Kiel" target="_blank">Homepage</a> &nbsp;|&nbsp; <a href="http://docs.moodle.org/en/License" target="_blank">License</a> &nbsp;|&nbsp; <a href="http://oncampuspedia.oncampus.de/" target="_blank">Wiki: oncampuspedia</a><br/><br/></div>
        <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
        // echo $OUTPUT->login_info(); 
        //echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();       
        ?>
    </div>
	</div>
    <?php } ?>
</div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>	
</body>
</html>