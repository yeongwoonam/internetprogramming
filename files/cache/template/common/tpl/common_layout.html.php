<?php if(!defined("__XE__"))exit;?><!DOCTYPE html>
<html lang="<?php echo $__Context->lang_type = Context::getLangType() ?>"<?php if($__Context->m){ ?> class="xe-mobilelayout"<?php } ?>>
<head>
<!-- META -->
<meta charset="utf-8">
<meta name="generator" content="Rhymix">
<?php if($__Context->m){ ?><meta name="viewport" content="<?php echo config('mobile.viewport') ?: 'width=device-width, initial-scale=1.0, user-scalable=yes' ?>" /><?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if(Context::getMetaTag())foreach(Context::getMetaTag() as $__Context->no=>$__Context->val){ ?>
<meta<?php if($__Context->val['is_http_equiv']){ ?> http-equiv="<?php echo $__Context->val['name'] ?>"<?php };
if(!$__Context->val['is_http_equiv']){ ?> name="<?php echo $__Context->val['name'] ?>"<?php } ?> content="<?php echo $__Context->val['content'] ?>" />
<?php } ?>
<meta name="csrf-token" content="<?php echo ($__Context->is_logged || $__Context->act) ? \Rhymix\Framework\Session::getGenericToken() : '' ?>" />
<!-- TITLE -->
<title><?php echo Context::getBrowserTitle() ?></title>
<!-- CSS -->
<?php if(Context::getCssFile(true))foreach(Context::getCssFile(true) as $__Context->key=>$__Context->css_file){ ?>
<?php if($__Context->css_file['targetie']){ ?><!--[if <?php echo $__Context->css_file['targetie'] ?>]><?php if(stripos($__Context->css_file['targetie'], 'gt') === 0){ ?><!--><?php };
} ?>
<link rel="stylesheet" href="<?php echo $__Context->css_file['file'] ?>"<?php if($__Context->css_file['media'] != 'all'){ ?> media="<?php echo $__Context->css_file['media'] ?>"<?php } ?> />
<?php if($__Context->css_file['targetie']){;
if(stripos($__Context->css_file['targetie'], 'gt') === 0){ ?><!--<?php } ?><![endif]--><?php echo "\n";
} ?>
<?php } ?>
<!-- JS -->
<?php if(Context::getJsFile('head', true))foreach(Context::getJsFile('head', true) as $__Context->key=>$__Context->js_file){ ?>
<?php if($__Context->js_file['targetie']){ ?><!--[if <?php echo $__Context->js_file['targetie'] ?>]><?php if(stripos($__Context->js_file['targetie'], 'gt') === 0){ ?><!--><?php };
} ?>
<script src="<?php echo $__Context->js_file['file'] ?>"></script>
<?php if($__Context->js_file['targetie']){;
if(stripos($__Context->js_file['targetie'], 'gt') === 0){ ?><!--<?php } ?><![endif]--><?php echo "\n";
} ?>
<?php } ?>
<!-- RSS -->
<?php if($__Context->rss_url){ ?><link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo $__Context->rss_url ?>" /><?php } ?>
<?php if($__Context->general_rss_url){ ?><link rel="alternate" type="application/rss+xml" title="Site RSS" href="<?php echo $__Context->general_rss_url ?>" /><?php } ?>
<?php if($__Context->rss_url){ ?><link rel="alternate" type="application/atom+xml" title="Atom" href="<?php echo $__Context->atom_url ?>" /><?php } ?>
<?php if($__Context->general_rss_url){ ?><link rel="alternate" type="application/atom+xml" title="Site Atom" href="<?php echo $__Context->general_atom_url ?>" /><?php } ?>
<!-- ICONS AND OTHER LINKS -->
<?php if(Context::getCanonicalURL()){ ?><link rel="canonical" href="<?php echo Context::getCanonicalURL() ?>" /><?php } ?>
<?php if($__Context->favicon_url){ ?><link rel="shortcut icon" href="<?php echo $__Context->favicon_url ?>" /><?php } ?>
<?php if($__Context->mobicon_url){ ?><link rel="apple-touch-icon" href="<?php echo $__Context->mobicon_url ?>" /><?php } ?>
<!-- OTHER HEADERS -->
<?php if(Context::getOpenGraphData())foreach(Context::getOpenGraphData() as $__Context->og_metadata){ ?>
<meta property="<?php echo $__Context->og_metadata['property'] ?>" content="<?php echo $__Context->og_metadata['content'] ?>" />
<?php } ?>
<?php echo Context::getHtmlHeader() ?>
<!-- COMMON JS VARIABLES -->
<script>
	var default_url = "<?php echo \Rhymix\Framework\URL::encodeIdna(Context::getDefaultUrl()) ?>";
	var current_url = "<?php echo \Rhymix\Framework\URL::encodeIdna($__Context->current_url) ?>";
	var request_uri = "<?php echo \Rhymix\Framework\URL::encodeIdna($__Context->request_uri) ?>";
	var current_lang = xe.current_lang = "<?php echo $__Context->lang_type ?>";
	var current_mid = <?php echo json_encode($__Context->mid ?: null) ?>;
	var http_port = <?php echo Context::get("_http_port") ?: 'null' ?>;
	var https_port = <?php echo Context::get("_https_port") ?: 'null' ?>;
	var enforce_ssl = <?php echo $__Context->site_module_info->security === 'always' ? 'true' : 'false' ?>;
	var cookies_ssl = <?php echo config('session.use_ssl_cookies') ? 'true' : 'false' ?>;
	var ssl_actions = <?php echo json_encode(array_keys(Context::getSSLActions())) ?>;
	var xeVid = null;
</script>
</head>
<!-- BODY START -->
<body<?php echo Context::getBodyClass() ?>>
<!-- PAGE CONTENT -->
<?php echo Context::getBodyHeader() ?>
<?php echo $__Context->content ?>
<?php echo Context::getHtmlFooter() ?>
<!-- ETC -->
<?php if(!$__Context->m){ ?><div id="rhymix_waiting" class="wfsr"><?php echo $lang->msg_call_server ?></div><?php } ?>
<div id="rhymix_debug_panel"></div>
<div id="rhymix_debug_button"></div>
<!-- BODY JS -->
<?php if(Context::getJsFile('body', true))foreach(Context::getJsFile('body', true) as $__Context->key=>$__Context->js_file){ ?>
<?php if($__Context->js_file['targetie']){ ?><!--[if <?php echo $__Context->js_file['targetie'] ?>]><?php } ?>
<script src="<?php echo $__Context->js_file['file'] ?>"></script>
<?php if($__Context->js_file['targetie']){ ?><![endif]--><?php echo "\n";
} ?>
<?php } ?>
</body>
</html>
