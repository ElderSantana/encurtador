
	<head>
	    <title>MyUrl -  Encurtador de Url</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- Bootstrap -->

	    <link href="{{url('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
	    <link href="{{url('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	    <!-- styles -->
	    <link href="{{url('css/styles.css')}}" rel="stylesheet">
	    <link href="{{url('css/datepicker.css')}}" rel="stylesheet">

	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://code.jquery.com/jquery.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
    	<script src="{{url('js/custom.js')}}"></script>

    	<script src="{{url('js/bootstrap-datepicker.js')}}"></script>
    	
    	<script src="{{url('js/bootstrap-datepicker.pt-BR.js')}}"></script>

    	<!-- CK -->
    	<!-- 
    	<script src="{{url('ckeditor/ckeditor.js')}}"></script>
    	<link href="{{url('ckeditor/sample/sample.css')}}" rel="stylesheet">
    	 -->

    	<!-- TinyMCE -->
		<script type="text/javascript" src="{{url('tinymce_pt/jscripts/tiny_mce/tiny_mce.js')}}"></script>
		<script type="text/javascript" src="{{url('tinymce_pt/jscripts/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php')}}"></script>
		<script type="text/javascript">
			tinyMCE.init({
				// General options
		    language : "pt",
				mode : "textareas",
				theme : "advanced",
				plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

				// Theme options
		theme_advanced_buttons1:
		"code,bold,italic,underline,strikethrough,justifyleft,justifycenter,justifyright,justifyfull,cleanup,link,unlink,image,table,formatselect,fontselect,fontsizeselect,forecolor,backcolor,fullscreen",

				// Theme options
				theme_advanced_buttons2 : "",
				theme_advanced_buttons3 : "",
				theme_advanced_buttons4 : "",


				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,

				// Example content CSS (should be your site CSS)
			 content_css : "tinymce_pt/examples/css/content.css",

				// Drop lists for link/image/media/template dialogs
				template_external_list_url : "tinymce_pt/examples/lists/template_list.js",
				external_link_list_url : "tinymce_pt/examples/lists/link_list.js",
				external_image_list_url : "tinymce_pt/examples/lists/image_list.js",
				media_external_list_url : "tinymce_pt/examples/lists/media_list.js",
		    file_browser_callback : "tinyBrowser",
				// Replace values for the template plugin
				template_replace_values : {
					username : "Some User",
					staffid : "991234"
				}
			});
		</script>
		<!-- /TinyMCE -->

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
  </head>