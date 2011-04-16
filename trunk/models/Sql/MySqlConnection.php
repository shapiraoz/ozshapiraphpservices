<?php
require 'Sql/ISqlConnection.php';

class  MySqlConnection extends ASqlConnection implements ISqlConnection 
{
	
	public function Connect();
	
	public function Connect($connectionString,$userName,$Password,$dbString)
	{
		$this->Connect($connectionString,$userName,$Password);
		$this->SelectDB($dbString);
		return $this->m_conLink;
		
	}
	
	public function Connect($connectionString,$userName,$Password)
	{
		$this->m_conLink = mysql_connect($connectionString,$userName,$Password);
		mysql_query("SET NAMES 'hebrew'");
		return $this->m_conLink;
	}
	
	public function SelectDB($dbString)
	{
		if($this->IsConnected()) $this->ErrorExit("Error: connection didn't establish");
		mysql_select_db($dbString,$this->m_conLink);
	}
	
	public function ExcuteQurey($qureyString)
	{
		if ($this->IsConnected()) return mysql_query($qureyString,$this->m_conLink);
	}
	
	public function Close()
	{	
		if($this->IsConnected()) mysql_close($this->m_conLink);
		
	}
	
	public function ExcuteStoredProcedureOutParm($procedureName,$outDataType);
	public function ExcuteStoredProcedureInParm($procedureName,$inDataType);
	
		
}