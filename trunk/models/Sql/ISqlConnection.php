<?php

interface  ISqlConnection
{
	public function GetConnection();
	public function Connect();
	public function Connect($connectionString,$userName,$Password,$dbString);
	public function Connect($connectionString,$userName,$Password);
	
	public function Close();
	
	public function SelectDB($dbString);

	public function IsConnected();
	
	public function ExcuteQurey($qureyString);
	public function ExcuteQurey($qureyString,$dbString);
	
	public function ExcuteStoredProcedureOutParm($procedureName,$outDataType);
	public function ExcuteStoredProcedureInParm($procedureName,$inDataType);
}