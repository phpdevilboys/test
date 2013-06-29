<meta http-equiv="content-type" content="text/html; charset=utf-8" />

{{ template:metadata }}
<!-- CSS Stylesheets -->
<link rel="stylesheet" href="{{ theme_url }}/assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="{{ theme_url }}/assets/css/styles_popup.css" type="text/css" />
<link rel="stylesheet" href="{{ theme_url }}/assets/css/tooltipster.css" type="text/css" />
<link rel="stylesheet" href="{{ theme_url }}/assets/css/pro_drop_1.css" type="text/css" />


<!-- Validation css-->
<link rel="stylesheet" href="{{ theme_url }}/assets/css/general.css" type="text/css" />

<!-- js Stylesheets -->
<script src="{{ theme_url }}/assets/js/jquey-1.7.2.min.js" type="text/javascript"></script>
<script src="{{ theme_url }}/assets/js/jquery.custom_radio_checkbox.js" type="text/javascript"></script>
<script src="{{ theme_url }}/assets/js/jquery.reveal.js" type="text/javascript"></script>
<script src="{{ theme_url }}/assets/js/jquery.tinycarousel.min.js" type="text/javascript"></script>
<script src="{{ theme_url }}/assets/js/jquery.tooltipster.js" type="text/javascript"></script>
<script src="{{ theme_url }}/assets/js/jquery.placeholder.js" type="text/javascript"></script>

<!-- Validation js-->
<script src="{{ theme_url }}/assets/js/validation.js" type="text/javascript"></script>

<!-- Favicon -->
<link href="{{ theme_url }}/favicon.ico" rel="shortcut icon" type="image/ico" /> 

<!-- jQuery Ui -->
<link rel="stylesheet" href="{{ theme_url }}/assets/css/jquery-ui-1.10.2.custom.min.css" type="text/css" />
<link rel="stylesheet" href="{{ theme_url }}/assets/css/tabs.css" type="text/css" />
<script type="text/javascript" src="{{ theme_url }}/assets/js/jquery-ui-1.10.2.custom.min.js"></script>

<script src="{{ theme_url }}/assets/js/template_js.js" type="text/javascript"></script>

<!-- Controller Defined JS Files -->
<?php //echo $this->template->javascripts() ?>

{{ content:is_segment segment="portfolio" }}
	{{ if status==true }}
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script src="{{ theme_url }}/assets/js/aam_js.js" type="text/javascript"></script>	
	{{ endif }}
{{ /content:is_segment }}

{{ content:is_segment segment="update-profile" }}
	{{ if status==true }}
		<script src="{{ theme_url }}/assets/js/edit-profile.js" type="text/javascript"></script>	
	{{ endif }}
{{ /content:is_segment }}