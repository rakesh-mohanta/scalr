<?php

class Scalr_Messaging_Msg_DbMsr_CreateDataBundleResult extends Scalr_Messaging_Msg_DbMsr {
	
	/**
	 * @deprecated
	 */
	public $snapshotId;
	
	//public $logFile;
	//public $logPos;
	//public $snapshotConfig;
	//public $dataBundleSize;
	
	function __construct ($snapshotId, $logFile, $logPos, $snapshotConfig, $dataBundleSize) {
		parent::__construct();	
		
		/**
		 * @deprecated
		 */
		$this->snapshotId = $snapshotId;
	
		//$this->logFile = $logFile;
		//$this->logPos = $logPos;
		//$this->snapshotConfig = $snapshotConfig;
		//$this->dataBundleSize = $dataBundleSize;	
	}	
}