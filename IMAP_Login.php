<?php
/*
    Name:           IMAP_Login
    Description:    Login to imap server
    Version:        1.0
    last modified:  April 24, 2012

    Autor:          Roy Inganta Ginting
	Blog:			http://if09062.wordpress.com

    Leave this header in this file!
*/

class IMAP_Login{
	var $server = array();
	var $protokol;
	var $sertifikat;
	
	function IMAP_Login($server, $port=143){
		$this->server[0] = array($server, $port);
		$this->protokol = "imap";
		$this->sertifikat = "novalidate-cert";
	}
	
	/**
	 * Change protocol used to connect to server
	 */
	function set_protokol($proto){
		$this->protokol = $proto;
	}
	
	/**
	 * Change certificate option of server
	 */
	function set_sertifikat($cert){
		$this->sertifikat = $cert;
	}
	
	/**
	 * add new server to list
	 */
	function tambah_server($srv, $port=143){
		$this->server[] = array($srv, $port);
	}
	
	/**
	 * return array consist of server address and port number at the given index
	 */
	function get_server($idx){
		if (count($this->server) > $idx && $idx >= 0){
			return $this->server[$i];
		}
		return false;
	}
	
	/**
	 * check whether username and password is valid at the given imap server
	 * return server index when login successfull and false when login failure
	 */
	function login($username, $password){
		for($i=0; $i<count($this->server); $i++){
			$imap = @imap_open("{{$this->server[$i][0]}:{$this->server[$i][1]}/{$this->protokol}/{$this->sertifikat}}", $username, $password, OP_HALFOPEN);
			if ($imap){
				return $i;
			}
		}
		return false;
	}
	
	/**
	 * check whether username and password is valid at the given imap server
	 * return true when login success and false when login fail
	 */
	function is_login($username, $password){
		$log = $this->login($username, $password);
		if ($log !== false){
			return true;
		}
		return $log;
	}
}
?>