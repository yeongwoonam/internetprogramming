<?php
/* Copyright (C) NAVER <http://www.navercorp.com> */

/**
 * class JoinTable
 * 		$conditions in an array of Condition objects 
 * 
 * @author Arnia Software
 * @package /classes/db/queryparts/table
 * @version 0.1
 */
class JoinTable extends Table
{

	/**
	 * join type
	 * @var string
	 */
	var $join_type;

	/**
	 * condition list
	 * @var array
	 */
	var $conditions;

	/**
	 * constructor
	 * @param string $name
	 * @param string $alias
	 * @param string $join_type
	 * @param array $conditions
	 * @return void
	 */
	function __construct($name, $alias, $join_type, $conditions)
	{
		parent::__construct($name, $alias);
		$this->join_type = $join_type;
		$this->conditions = $conditions;
	}

	function toString($with_value = true)
	{
		$part = strtoupper($this->join_type) . ' ' . $this->name;
		$part .= $this->alias ? (' AS ' . $this->alias) : '';
		$part .= ' ON ';
		
		$condition_count = 0;
		foreach($this->conditions as $conditionGroup)
		{
			if($condition_count === 0)
			{
				$conditionGroup->setPipe("");
			}
			$part .= $conditionGroup->toString($with_value);
			$condition_count++;
		}
		return $part;
	}

	function isJoinTable()
	{
		return true;
	}

	function getArguments()
	{
		$args = array();
		foreach($this->conditions as $conditionGroup)
		{
			$args = array_merge($args, $conditionGroup->getArguments());
		}
		return $args;
	}

}
/* End of file JoinTable.class.php */
/* Location: ./classes/db/queryparts/table/JoinTable.class.php */
