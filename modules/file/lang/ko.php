<?php
$lang->file = '파일';
$lang->file_management = '파일 관리';
$lang->file_upload = '파일 업로드';
$lang->file_upload_config = '파일 업로드 설정';
$lang->file_name = '파일 이름';
$lang->file_size = '파일 크기';
$lang->download_count = '다운로드 받은 수';
$lang->status = '상태';
$lang->is_valid = '유효';
$lang->is_stand_by = '대기';
$lang->file_list = '첨부 파일 목록';
$lang->allow_outlink = '다운로드 링크 외부 접근 허용';
$lang->allow_outlink_site = '다운로드 링크 허용 사이트';
$lang->allow_outlink_format = '다운로드 링크 허용 확장자';
$lang->allowed_filesize = '파일 크기 제한';
$lang->allowed_attach_size = '문서 첨부 제한';
$lang->allowed_filetypes = '허용 확장자';
$lang->inline_download_format = '다운로드시 현재 창 사용';
$lang->inline_download_image = '이미지';
$lang->inline_download_audio = '오디오';
$lang->inline_download_video = '비디오';
$lang->inline_download_text = '텍스트 (HTML 제외)';
$lang->inline_download_pdf = 'PDF';
$lang->about_inline_download_format = '선택한 종류의 파일은 다운로드 링크를 클릭하더라도 다운로드 창을 열지 않고 현재 창에 표시합니다.';
$lang->enable_download_group = '다운로드 가능 그룹';
$lang->about_allow_outlink = '다른 사이트에서 파일 다운로드 링크에 직접 접근하는 것을 차단합니다.<br />다운로드 링크를 사용하지 않고 본문에 바로 삽입할 수 있는 이미지 파일 등에는 적용되지 않습니다.';
$lang->about_allow_outlink_format = '파일 외부 링크 설정에 상관없이 허용하는 파일 확장자입니다.<br />여러 개 입력시 쉼표(,)을 이용해서 구분해 주세요. 예) doc, zip, pdf';
$lang->about_allow_outlink_site = '파일 외부 링크 설정에 상관없이 허용하는 사이트 주소입니다.<br />여러 개 입력시 줄을 바꿔서 구분해 주세요. 예) https://www.rhymix.org/';
$lang->about_allowed_filesize = '각 파일의 용량을 제한할 수 있습니다.<br />관리자에게는 이 게시판의 제한과 <a href="%s" target="_blank">파일 모듈</a>의 제한 중 높은 쪽이 적용됩니다.';
$lang->about_allowed_attach_size = '하나의 문서에 첨부할 수 있는 최대 용량을 제한할 수 있습니다.<br />관리자에게는 이 게시판의 제한과 <a href="%s" target="_blank">파일 모듈</a>의 제한 중 높은 쪽이 적용됩니다.';
$lang->about_allowed_filesize_global = '관리자를 포함하여 사이트 전체에 적용되는 파일 크기 제한입니다.';
$lang->about_allowed_attach_size_global = '관리자를 포함하여 사이트 전체에 적용되는 문서당 총 첨부 용량 제한입니다.';
$lang->about_allowed_size_limits = 'IE9 이하, 구버전 안드로이드 등에서는 php.ini에서 지정한 %sB로 제한됩니다.';
$lang->about_allowed_filetypes = '"*.확장자"로 지정할 수 있고 ";" 으로 여러 개 지정이 가능합니다. 예) *.* or *.jpg;*.gif;';
$lang->cmd_delete_checked_file = '선택항목 삭제';
$lang->cmd_move_to_document = '문서로 이동';
$lang->cmd_download = '다운로드';
$lang->msg_not_permitted_download = '다운로드할 수 있는 권한이 없습니다.';
$lang->msg_file_cart_is_null = '삭제할 파일을 선택해주세요.';
$lang->msg_checked_file_is_deleted = '%d개의 첨부 파일이 삭제되었습니다.';
$lang->msg_exceeds_limit_size = '허용된 용량을 초과하여 첨부가 되지 않았습니다.';
$lang->msg_not_allowed_filetype = '업로드할 수 없는 파일 형식입니다.';
$lang->msg_file_not_found = '요청한 파일을 찾을 수 없습니다.';
$lang->file_search_target_list['filename'] = '파일 이름';
$lang->file_search_target_list['filesize_more'] = '파일 크기(byte, 이상)';
$lang->file_search_target_list['filesize_mega_more'] = '파일 크기(MB, 이상)';
$lang->file_search_target_list['filesize_less'] = '파일 크기(byte, 이하)';
$lang->file_search_target_list['filesize_mega_less'] = '파일 크기(MB, 이하)';
$lang->file_search_target_list['download_count'] = '다운로드 횟수(이상)';
$lang->file_search_target_list['user_id'] = '아이디';
$lang->file_search_target_list['user_name'] = '이름';
$lang->file_search_target_list['nick_name'] = '닉네임';
$lang->file_search_target_list['regdate'] = '등록일';
$lang->file_search_target_list['ipaddress'] = 'IP 주소';
$lang->file_search_target_list['isvalid'] = '상태';
$lang->msg_not_allowed_outlink = '외부링크에서 다운로드할 수 없습니다.';
$lang->msg_not_permitted_create = '파일 또는 디렉터리를 생성할 수 없습니다.';
$lang->msg_file_upload_error = '파일 업로드 중 에러가 발생하였습니다.';
$lang->msg_upload_invalid_chunk = '분할 업로드 처리 중 오류가 발생하였습니다.';
$lang->msg_32bit_max_2047mb = '32비트 서버에서는 파일 크기 제한이 2047MB를 초과할 수 없습니다.';
$lang->no_files = '파일이 없습니다.';
$lang->file_manager = '선택한 파일 관리';
$lang->selected_file = '선택한 파일';