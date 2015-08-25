<?php

require_once('siuxmethodlib.php');

class SiUXclient extends SiUXmethod {

	public function __construct( $auth='', $timeout=10 ) {
		$this->_auth 	= $auth;
		$this->_timeout	= $timeout;
		$this->_url 	= 'http://api.esiux.net:3035/RPC2';
	}



	private function _request($method, $methodArgList) {
		/*
		 * Request to RPC
		 *
		 * @return array
		 */

		$request = xmlrpc_encode_request( $method, $methodArgList );

		$context = stream_context_create(
			array('http' => array(
				'method'	=> "POST",
				'header' 	=> "Content-Type: text/xml",
				'content' 	=> $request
				)
			)
		);

		$file = file_get_contents($this->_url, false, $context);

		if ( !$file )
			return array(
				'status' 	=> 503,
				'statusMessage' => 'Service Unavailable',
				'errorMessage' 	=> 'Failed to open stream: Connection refused',
				'statusCode' 	=> 'SERVER_UNAVAILABLE', 'found' => 0
			);

		$ret = xmlrpc_decode($file);

		if ( $ret && xmlrpc_is_fault($ret) ) { 
			$ret = array(
				'status' 	=> 503,
				'statusMessage' => 'Service Unavailable',
				'errorMessage' 	=> "$ret[faultString] ($ret[faultCode])",
				'statusCode' 	=> 'SERVER_UNAVAILABLE',
				'found' 	=> 0
			);
		}

		return $ret;
	}



	protected function _call() {
		/*
		 * Call RPC method
		 *
		 * @return array
		 */

		$argList = func_get_args();

		$method 	= $argList[0];
		$methodArgList 	= array_slice($argList, 1);

		//print $method;
		//print var_dump($argList);
		//print var_dump($methodArgList);

		return $this->_request($method, $methodArgList);
	}



	public function methodList() {
		/*
		 * SiUX API method list
		 *
		 * @return array
		 */
		
		$ret =  $this->_request( 'system.listMethods', null );

		if ( isset( $ret['status'] ) && $ret['status'] == 503 )
			return ret;

		$data 	= array();
		$found 	= 0;

		foreach ($ret as $method) {

			if (substr( $method, 0, strlen('system.') ) === 'system.')
				continue;

			$methodList	= array();
			$no 		= 0;

			$methodPartNameList = explode('.', $method);

			foreach ($methodPartNameList as $methodPartName) {
				if ($no == 0)
					$methodList[] = strtolower($methodPartName);
				else
					$methodList[] = strtoupper( substr($methodPartName, 0, 1) ) . strtolower( substr($methodPartName, 1) );

				$no = $no + 1;
			}
			
			$method = implode('', $methodList);

			$data[] = array('methodName' => $method);
			$found 	= $found + 1;
		}

                return array(
			'status'	=> 200,
			'statusMessage'	=> 'OK',
			'statusCode'	=> 'OK',
			'data'		=> $data,
			'found'		=> $found
		);
	}

		

	protected function _callCurl() {
		/*
		 * Call RPC method - curl required
		 *
		 * @return array
		 */

		$argList = func_get_args();

		$method 	= $argList[0];
		$methodArgList 	= array_slice($argList, 1);

		$request = xmlrpc_encode_request( $method, $methodArgList );

    		$header[] = "Content-type: text/xml";
    		$header[] = "Content-length: " . strlen($request);
    
		try { 
			$ch = curl_init();   

			curl_setopt($ch, CURLOPT_URL, $this->_url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_TIMEOUT, $this->_timeout);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
   
			$ret = curl_exec($ch);
		}
		catch (Exception $err) {
			$ret = array(
				'status' 	=> 503,
				'statusMessage' => 'Service Unavailable',
				'errorMessage' 	=> $err->getMessage(),
				'statusCode' 	=> 'SERVER_UNAVAILABLE',
				'found' 	=> 0
			);
        	}

		curl_close($ch);

		return $ret;
	}

}



$siux = new SiUXclient();

#print_r( $siux->clientUpdate($client='CLIENT_HASH', array("name" => "TEST FIRMA2") ) );
print_r( $siux->sourceList($client='CLIENT_HASH') );
#print_r( $siux->availabilityList($client='CLIENT_HASH', $dateInput=20150807, $history=30, $sourceId=33439) );

print_r( $siux->methodList() );

?>
