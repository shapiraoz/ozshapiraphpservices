<?php

require 'Sql/ISqlConnection.php';

abstract class ASqlConnection
{
	public  function  GetConnection()
	{
		return  $m_conLink;
	}
		
	protected  $m_url;
	protected  $m_userName;
	protected  $m_connectionString;
	
	protected  $m_conLink;
	protected  $m_dbString;
	
	
	protected  function  ErrorExit($msg)
	{
		throw  new Exception($msg);
	}
	
	public  function IsConnected()
	{
		return ($this->m_conLink == null);
	}
	
}