<?php
$lang->introduce_title = 'Rhymix Installation';
$lang->enviroment_gather = 'Agreement on gathering installation environment information';
$lang->input_dbinfo_by_dbtype = 'Input %s info';
$lang->install_progress_menu['language'] = 'Select language';
$lang->install_progress_menu['license_agreement'] = 'License Agreement';
$lang->install_progress_menu['condition'] = 'Environment Check';
$lang->install_progress_menu['ftp'] = 'FTP Setup';
$lang->install_progress_menu['dbSelect'] = 'Choose database type';
$lang->install_progress_menu['dbInfo'] = 'DB Setup';
$lang->install_progress_menu['configInfo'] = 'Configuration';
$lang->install_progress_menu['adminInfo'] = 'Create Administrator Account';
$lang->install_condition_enable = 'Your server is compatible with Rhymix.';
$lang->install_condition_disable = 'Your server does not support Rhymix.';
$lang->install_details = 'Details';
$lang->install_simply = 'Simply';
$lang->advanced_setup = 'Advanced Setup';
$lang->install_ftp_reason = 'Reason of FTP info is needed.';
$lang->install_checklist_title['php_version'] = 'PHP Version';
$lang->install_checklist_title['permission'] = 'files folder permissions';
$lang->install_checklist_title['xml'] = 'xml / simplexml';
$lang->install_checklist_title['curl'] = 'curl';
$lang->install_checklist_title['iconv'] = 'iconv / mbstring';
$lang->install_checklist_title['json'] = 'json';
$lang->install_checklist_title['gd'] = 'gd';
$lang->install_checklist_title['mcrypt'] = 'mcrypt / openssl';
$lang->install_checklist_title['session'] = 'session.auto_start setting';
$lang->install_checklist_title['db_support'] = 'DB support';
$lang->install_checklist_desc['php_version'] = '[Required] Rhymix supports only PHP Version %s or higher';
$lang->install_checklist_desc['php_version_warning'] = '[Recommend] Rhymix recommends only PHP Version %s or higher';
$lang->install_checklist_desc['permission'] = '[Required] Please create a \'files\' directory under the installation path and change its permissions to 777.';
$lang->install_checklist_desc['xml'] = '[Required] XML Library is needed for XML communication';
$lang->install_checklist_desc['session'] = '[Required] PHP setting file\'s (php.ini) \'Session.auto_start\' must equal to zero in order for Rhymix to use the session';
$lang->install_checklist_desc['iconv'] = 'Iconv should be installed in order to convert between UTF-8 and other language sets';
$lang->install_checklist_desc['gd'] = 'GD Library should be installed in order to use functions to convert images';
$lang->install_checklist_xml = 'Install XML Library';
$lang->install_without_xml = 'XML Library is not installed';
$lang->install_checklist_gd = 'Install GD Library';
$lang->install_without_gd = 'GD Library is not installed for image convertion';
$lang->install_without_iconv = 'Iconv Library is not installed for processing characters';
$lang->install_session_auto_start = 'Possible problems might occur due to the php setting. session.auto_start is equal to 1';
$lang->install_permission_denied = 'Installation path\'s permission doesn\'t equal to 777';
$lang->install_notandum = 'You can edit this information in the admin module after installation.';
$lang->cmd_install_refresh_page = 'Refresh';
$lang->cmd_install_next = 'Continue installation';
$lang->cmd_ignore = 'Ignore';
$lang->cmd_recommended = 'Recommended';
$lang->db_desc['mysqli'] = 'Use MySQL or MariaDB. Rhymix will automatically use InnoDB if it is supported.';
$lang->db_desc['mysql'] = 'Use MySQL or MariaDB. Rhymix will automatically use InnoDB if it is supported.';
$lang->db_desc['cubrid'] = 'CUBRID is not supported.';
$lang->db_desc['mssql'] = 'Microsoft SQL Server is not supported.';
$lang->can_use_when_installed = 'Not installed on this server';
$lang->form_title = 'Database &amp; Administrator Information';
$lang->db_title = 'Please input DB information';
$lang->db_type = 'DB Type';
$lang->select_db_type = 'Please select the DB you want to use.';
$lang->db_hostname = 'DB Hostname';
$lang->db_port = 'DB Port';
$lang->db_userid = 'DB ID';
$lang->db_password = 'DB PW';
$lang->db_name = 'DB Name';
$lang->db_database_file = 'DB Database File';
$lang->db_table_prefix = 'Table Prefix';
$lang->db_info_desc = 'Please check database server information with your server administrator.';
$lang->db_prefix_desc = 'You can customize the table prefix. We recommend that you use lowercase alphabets only.';
$lang->admin_title = 'Administrator Info';
$lang->env_title = 'Settings';
$lang->use_optimizer = 'Enable Optimizer';
$lang->about_optimizer = 'If optimizer is enabled, users can quickly access to this site, since multiple CSS / JS files are put together and compressed before transmission. <br /> Nevertheless, this optimization might be problematic according to CSS or JS. If you disable it, it would work properly though it would work slower.';
$lang->use_rewrite = 'mod_rewrite';
$lang->use_sso = '<abbr title="Single Sign On">SSO</abbr>';
$lang->about_rewrite = 'If web server provides mod_rewrite, long URL such as <em>http://blah/</em><strong>?document_srl=123</strong> can be shortened like <em>http://blah/</em><strong>123</strong>';
$lang->checking_rewrite = 'Checking whether "Friendly URL" feature is available...';
$lang->disable_rewrite = '"Friendly URL" feature is not available. Please check with the server administrator about mod_rewrite module support.';
$lang->disable_rewrite_can_proceed = 'It is OK to continue to install and use Rhymix without the "Friendly URL" feature.';
$lang->about_nginx_rewrite = 'To use this feature at nginx, you need to configure rewrite. See <a href="https://github.com/xpressengine/xe-core/wiki/Nginx-rewite-%EC%84%A4%EC%A0%95%ED%95%98%EA%B8%B0" target="_blank">here</a>.';
$lang->time_zone = 'Time Zone';
$lang->about_time_zone = 'If the server time is different from your time zone, you can use this option to display times in your time zone.';
$lang->use_ssl = 'SSL';
$lang->ssl_options['none'] = 'None';
$lang->ssl_options['optional'] = 'Optional';
$lang->ssl_options['always'] = 'Always';
$lang->use_sitelock = 'Site Lock';
$lang->sitelock_options['none'] = 'None';
$lang->sitelock_options['lock'] = 'Lock after Install';
$lang->about_sitelock_after_install = 'If you lock your site, only your current IP range (%s) will be able to access your site.';
$lang->about_database_file = 'Sqlite saves data in a file. Location of the database file should be unreachable by web<br/><span style="color:red">Data file should be inside the permission of 777.</span>';
$lang->success_installed = 'Installation has been completed.';
$lang->msg_db_checking = 'Checking...';
$lang->msg_installing = 'Installing...';
$lang->msg_cannot_proc = 'Installation environment is not proper to proceed.';
$lang->msg_already_installed = 'Rhymix is already installed.';
$lang->msg_dbconnect_failed = 'An error has occurred while connecting to DB. Please check DB information again.';
$lang->msg_table_is_exists = 'Table is already created in the DB. Config file is recreated.';
$lang->msg_install_completed = 'Installation has been completed. Thank you for choosing Rhymix.';
$lang->msg_install_failed = 'An error has occurred while creating installation file.';
$lang->msg_create_table_failed = 'Failed to create database tables.';
$lang->msg_table_already_exists = 'Database tables already exist. Try using a different prefix.';
$lang->ftp_get_list = 'Get List';
$lang->ftp_form_title = 'FTP Account Information';
$lang->ftp = 'FTP';
$lang->ftp_host = 'FTP hostname';
$lang->ftp_port = 'FTP server port';
$lang->about_ftp_password = 'FTP password will not be stored.';
$lang->cmd_check_ftp_connect = 'Check FTP Connection';
$lang->msg_ftp_not_connected = 'Connection to the localhost via FTP failed. Please check the port number and whether the FTP service is available.';
$lang->msg_ftp_invalid_auth_info = 'Authentication failed. Please check the username and password.';
$lang->msg_ftp_mkdir_fail = 'Failed to create a directory using FTP. Please check the permission of FTP account.';
$lang->msg_ftp_chmod_fail = 'Chmod failed. Please check the permission and configuration of the FTP server.';
$lang->msg_ftp_connect_success = 'Successfully connected to FTP server and authenticated.';
$lang->ftp_path_title = 'FTP Path Information';
$lang->msg_ftp_installed_realpath = 'Absolute Path of Rhymix';
$lang->msg_ftp_installed_ftp_realpath = 'Rhymix installation path';
$lang->db_config_php_validation = 'Validation of db.config.php';
$lang->msg_possible_only_file = 'You can upload files only.';
