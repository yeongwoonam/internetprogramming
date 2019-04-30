<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array (
);
$addon_file = RX_BASEDIR . 'addons/autolink/autolink.addon.php';
$addon_info = unserialize('O:8:"stdClass":0:{}');
$run = true;
if ($run && file_exists($addon_file)):
  include($addon_file);
  $after_time = microtime(true);
  if (class_exists("Rhymix\\Framework\\Debug")):
    Rhymix\Framework\Debug::addTrigger(array(
      "name" => "addon." . $called_position,
      "target" => "autolink",
      "target_plugin" => "autolink",
      "elapsed_time" => $after_time - $before_time,
    ));
  endif;
endif;

$before_time = microtime(true);
$rm = 'run_selected';
$ml = array (
);
$addon_file = RX_BASEDIR . 'addons/member_extra_info/member_extra_info.addon.php';
$addon_info = unserialize('O:8:"stdClass":0:{}');
$run = true;
if ($run && file_exists($addon_file)):
  include($addon_file);
  $after_time = microtime(true);
  if (class_exists("Rhymix\\Framework\\Debug")):
    Rhymix\Framework\Debug::addTrigger(array(
      "name" => "addon." . $called_position,
      "target" => "member_extra_info",
      "target_plugin" => "member_extra_info",
      "elapsed_time" => $after_time - $before_time,
    ));
  endif;
endif;

$before_time = microtime(true);
$rm = 'run_selected';
$ml = array (
);
$addon_file = RX_BASEDIR . 'addons/resize_image/resize_image.addon.php';
$addon_info = unserialize('O:8:"stdClass":0:{}');
$run = true;
if ($run && file_exists($addon_file)):
  include($addon_file);
  $after_time = microtime(true);
  if (class_exists("Rhymix\\Framework\\Debug")):
    Rhymix\Framework\Debug::addTrigger(array(
      "name" => "addon." . $called_position,
      "target" => "resize_image",
      "target_plugin" => "resize_image",
      "elapsed_time" => $after_time - $before_time,
    ));
  endif;
endif;
