<?php require_once('C:/Apache24/htdocs/common/autoload.php'); Context::init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } $oContext->close(); ?><root><node node_srl="67" parent_srl="0" menu_name_key='Welcome Page' text="<?php if(true) { $_names = array('ko' => 'Welcome Page', 'en' => 'Welcome Page', 'ja' => 'Welcome Page', 'zh-CN' => 'Welcome Page', 'zh-TW' => 'Welcome Page', 'de' => 'Welcome Page', 'es' => 'Welcome Page', 'fr' => 'Welcome Page', 'mn' => 'Welcome Page', 'ru' => 'Welcome Page', 'tr' => 'Welcome Page', 'vi' => 'Welcome Page', 'id' => 'Welcome Page', ); print $_names[$lang_type]; }?>" url="<?php print(true?'index':"")?>" href="<?php print(true?getSiteUrl('', '','mid','index'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="69" parent_srl="0" menu_name_key='Board' text="<?php if(true) { $_names = array('ko' => 'Welcome Page', 'en' => 'Welcome Page', 'ja' => 'Welcome Page', 'zh-CN' => 'Welcome Page', 'zh-TW' => 'Welcome Page', 'de' => 'Welcome Page', 'es' => 'Welcome Page', 'fr' => 'Welcome Page', 'mn' => 'Welcome Page', 'ru' => 'Welcome Page', 'tr' => 'Welcome Page', 'vi' => 'Welcome Page', 'id' => 'Welcome Page', 'ko' => 'Board', 'en' => 'Board', 'ja' => 'Board', 'zh-CN' => 'Board', 'zh-TW' => 'Board', 'de' => 'Board', 'es' => 'Board', 'fr' => 'Board', 'mn' => 'Board', 'ru' => 'Board', 'tr' => 'Board', 'vi' => 'Board', 'id' => 'Board', ); print $_names[$lang_type]; }?>" url="<?php print(true?'board':"")?>" href="<?php print(true?getSiteUrl('', '','mid','board'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="70" parent_srl="69" menu_name_key='SAMPLE 1' text="<?php if(true) { $_names = array('ko' => 'SAMPLE 1', 'en' => 'SAMPLE 1', 'ja' => 'SAMPLE 1', 'zh-CN' => 'SAMPLE 1', 'zh-TW' => 'SAMPLE 1', 'de' => 'SAMPLE 1', 'es' => 'SAMPLE 1', 'fr' => 'SAMPLE 1', 'mn' => 'SAMPLE 1', 'ru' => 'SAMPLE 1', 'tr' => 'SAMPLE 1', 'vi' => 'SAMPLE 1', 'id' => 'SAMPLE 1', ); print $_names[$lang_type]; }?>" url="<?php print(true?'#':"")?>" href="<?php print(true?'#':"")?>" is_shortcut='Y' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>"><node node_srl="71" parent_srl="70" menu_name_key='SAMPLE 1-1' text="<?php if(true) { $_names = array('ko' => 'SAMPLE 1-1', 'en' => 'SAMPLE 1-1', 'ja' => 'SAMPLE 1-1', 'zh-CN' => 'SAMPLE 1-1', 'zh-TW' => 'SAMPLE 1-1', 'de' => 'SAMPLE 1-1', 'es' => 'SAMPLE 1-1', 'fr' => 'SAMPLE 1-1', 'mn' => 'SAMPLE 1-1', 'ru' => 'SAMPLE 1-1', 'tr' => 'SAMPLE 1-1', 'vi' => 'SAMPLE 1-1', 'id' => 'SAMPLE 1-1', ); print $_names[$lang_type]; }?>" url="<?php print(true?'#':"")?>" href="<?php print(true?'#':"")?>" is_shortcut='Y' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="72" parent_srl="69" menu_name_key='SAMPLE 2' text="<?php if(true) { $_names = array('ko' => 'SAMPLE 1', 'en' => 'SAMPLE 1', 'ja' => 'SAMPLE 1', 'zh-CN' => 'SAMPLE 1', 'zh-TW' => 'SAMPLE 1', 'de' => 'SAMPLE 1', 'es' => 'SAMPLE 1', 'fr' => 'SAMPLE 1', 'mn' => 'SAMPLE 1', 'ru' => 'SAMPLE 1', 'tr' => 'SAMPLE 1', 'vi' => 'SAMPLE 1', 'id' => 'SAMPLE 1', 'ko' => 'SAMPLE 2', 'en' => 'SAMPLE 2', 'ja' => 'SAMPLE 2', 'zh-CN' => 'SAMPLE 2', 'zh-TW' => 'SAMPLE 2', 'de' => 'SAMPLE 2', 'es' => 'SAMPLE 2', 'fr' => 'SAMPLE 2', 'mn' => 'SAMPLE 2', 'ru' => 'SAMPLE 2', 'tr' => 'SAMPLE 2', 'vi' => 'SAMPLE 2', 'id' => 'SAMPLE 2', ); print $_names[$lang_type]; }?>" url="<?php print(true?'#':"")?>" href="<?php print(true?'#':"")?>" is_shortcut='Y' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /><node node_srl="73" parent_srl="69" menu_name_key='SAMPLE 3' text="<?php if(true) { $_names = array('ko' => 'SAMPLE 1', 'en' => 'SAMPLE 1', 'ja' => 'SAMPLE 1', 'zh-CN' => 'SAMPLE 1', 'zh-TW' => 'SAMPLE 1', 'de' => 'SAMPLE 1', 'es' => 'SAMPLE 1', 'fr' => 'SAMPLE 1', 'mn' => 'SAMPLE 1', 'ru' => 'SAMPLE 1', 'tr' => 'SAMPLE 1', 'vi' => 'SAMPLE 1', 'id' => 'SAMPLE 1', 'ko' => 'SAMPLE 2', 'en' => 'SAMPLE 2', 'ja' => 'SAMPLE 2', 'zh-CN' => 'SAMPLE 2', 'zh-TW' => 'SAMPLE 2', 'de' => 'SAMPLE 2', 'es' => 'SAMPLE 2', 'fr' => 'SAMPLE 2', 'mn' => 'SAMPLE 2', 'ru' => 'SAMPLE 2', 'tr' => 'SAMPLE 2', 'vi' => 'SAMPLE 2', 'id' => 'SAMPLE 2', 'ko' => 'SAMPLE 3', 'en' => 'SAMPLE 3', 'ja' => 'SAMPLE 3', 'zh-CN' => 'SAMPLE 3', 'zh-TW' => 'SAMPLE 3', 'de' => 'SAMPLE 3', 'es' => 'SAMPLE 3', 'fr' => 'SAMPLE 3', 'mn' => 'SAMPLE 3', 'ru' => 'SAMPLE 3', 'tr' => 'SAMPLE 3', 'vi' => 'SAMPLE 3', 'id' => 'SAMPLE 3', ); print $_names[$lang_type]; }?>" url="<?php print(true?'#':"")?>" href="<?php print(true?'#':"")?>" is_shortcut='Y' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></node><node node_srl="75" parent_srl="0" menu_name_key='XEIcon' text="<?php if(true) { $_names = array('ko' => 'Welcome Page', 'en' => 'Welcome Page', 'ja' => 'Welcome Page', 'zh-CN' => 'Welcome Page', 'zh-TW' => 'Welcome Page', 'de' => 'Welcome Page', 'es' => 'Welcome Page', 'fr' => 'Welcome Page', 'mn' => 'Welcome Page', 'ru' => 'Welcome Page', 'tr' => 'Welcome Page', 'vi' => 'Welcome Page', 'id' => 'Welcome Page', 'ko' => 'Board', 'en' => 'Board', 'ja' => 'Board', 'zh-CN' => 'Board', 'zh-TW' => 'Board', 'de' => 'Board', 'es' => 'Board', 'fr' => 'Board', 'mn' => 'Board', 'ru' => 'Board', 'tr' => 'Board', 'vi' => 'Board', 'id' => 'Board', 'ko' => 'XEIcon', 'en' => 'XEIcon', 'ja' => 'XEIcon', 'zh-CN' => 'XEIcon', 'zh-TW' => 'XEIcon', 'de' => 'XEIcon', 'es' => 'XEIcon', 'fr' => 'XEIcon', 'mn' => 'XEIcon', 'ru' => 'XEIcon', 'tr' => 'XEIcon', 'vi' => 'XEIcon', 'id' => 'XEIcon', ); print $_names[$lang_type]; }?>" url="<?php print(true?'xeicon':"")?>" href="<?php print(true?getSiteUrl('', '','mid','xeicon'):"")?>" is_shortcut='N' desc='' open_window='N' expand='N' normal_btn='' hover_btn='' active_btn='' link="<?php if(true) {?><?php print $_names[$lang_type]; ?><?php }?>" /></root>