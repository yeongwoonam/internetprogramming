<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
<form id="body" method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
	<div id="content">
		<h2><?php echo $lang->install_progress_menu['dbInfo'] ?></h2>
		<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
			<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
		</div><?php } ?>
		<input type="hidden" value="<?php echo $__Context->error_return_url ?>" name="error_return_url">
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="procDBConfig" />
		<div class="x_control-group">
			<label for="db_type" class="x_control-label"><?php echo $lang->db_type ?></label>
			<div class="x_controls">
				<select id="db_type" name="db_type">
					<?php if(DB::getEnableList())foreach(DB::getEnableList() as $__Context->key=>$__Context->val){ ?>
						<option value="<?php echo $__Context->val->db_type ?>"<?php if($__Context->val->db_type==$__Context->defaultDatabase){ ?> selected="selected"<?php } ?> />
							<?php echo $__Context->val->db_type ?>
							<?php if($__Context->val->db_type == $__Context->defaultDatabase){ ?>(<?php echo $lang->cmd_recommended ?>)<?php } ?>
						</option>
					<?php } ?>
					<?php if(DB::getDisableList())foreach(DB::getDisableList() as $__Context->key=>$__Context->val){ ?>
						<option value="<?php echo $__Context->val->db_type ?>" disabled="disabled" /><?php echo $__Context->val->db_type ?> (<?php echo $lang->can_use_when_installed ?>)</option>
					<?php } ?>
				</select>
			</div>
		</div>
		<?php if(DB::getEnableList())foreach(DB::getEnableList() as $__Context->key=>$__Context->val){ ?><p class="install_help db_type db_type_<?php echo $__Context->val->db_type ?>"><?php echo $lang->db_desc[$__Context->val->db_type] ?></p><?php } ?>
		<div class="x_control-group">
			<label for="db_host" class="x_control-label"><?php echo $lang->db_hostname ?></label>
			<div class="x_controls"><input name="db_host" value="localhost" type="text" id="db_host" required /></div>
		</div>
		<div class="x_control-group">
			<label for="db_port" class="x_control-label"><?php echo $lang->db_port ?></label>
			<div class="x_controls"><input name="db_port" value="3306" type="text" id="db_port" required /></div>
		</div>
		<div class="x_control-group">
			<label for="db_user" class="x_control-label"><?php echo $lang->db_userid ?></label>
			<div class="x_controls"><input name="db_user" type="text" id="db_user" class="focus" required /></div>
		</div>
		<div class="x_control-group">
			<label for="db_pass" class="x_control-label"><?php echo $lang->db_password ?></label>
			<div class="x_controls"><input name="db_pass" type="password" id="db_pass" required /></div>
		</div>
		<div class="x_control-group">
			<label for="db_database" class="x_control-label"><?php echo $lang->db_name ?></label>
			<div class="x_controls"><input name="db_database" type="text" id="db_database" required /></div>
		</div>
		<div class="x_control-group">
			<label for="db_prefix" class="x_control-label"><?php echo $lang->db_table_prefix ?></label>
			<div class="x_controls"><input name="db_prefix" type="text" id="db_prefix" value="rx" required /></div>
		</div>
		<p class="install_help">
			<?php echo $lang->db_info_desc ?><br /><?php echo $lang->db_prefix_desc ?>
		</p>
	</div>
	<div id="buttons">
		<div class="align-left">
			<a href="<?php echo getUrl('', 'act','dispInstallCheckEnv') ?>" class="button grey">&laquo; <?php echo $lang->cmd_back ?></a>
		</div>
		<div class="align-right">
			<button type="submit" id="task-db-select" value="" data-checking="<?php echo $lang->msg_db_checking ?>"><?php echo $lang->cmd_next ?> &raquo;</button>
		</div>
	</div>
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
