<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

class IpFilter
{
	public function filter($ip_list, $ip = NULL)
	{
		if(!$ip) $ip = $_SERVER['REMOTE_ADDR'];
		return Rhymix\Framework\Filters\IpFilter::inRanges($ip, $ip_list);
	}
	
	public function validate($ip_list = array())
	{
		return Rhymix\Framework\Filters\IpFilter::validateRanges($ip_list);
	}
	
}

/* End of file : IpFilter.class.php */
/* Location: ./classes/security/IpFilter.class.php */
