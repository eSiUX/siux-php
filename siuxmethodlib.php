<?php

class SiUXmethod {

	function availabilityInfo( $client='', $dateTo=20140101 ) {
		return $this->_call( 'availability.info', $this->_auth, $dateTo );
	}

	function availabilityList( $client='', $dateInput=20140101, $history=30, $sourceId=0 ) {
		return $this->_call( 'availability.list', $this->_auth, $dateInput, $history, $sourceId );
	}

	function browserList( $client='' ) {
		return $this->_call( 'browser.list', $this->_auth );
	}

	function checkpointInfo( $client='', $checkpointId=0 ) {
		return $this->_call( 'checkpoint.info', $this->_auth, $checkpointId );
	}

	function checkpointList( $client='', $active=-1 ) {
		return $this->_call( 'checkpoint.list', $this->_auth, $active );
	}

	function clientUpdate( $client='', $clientDict=array() ) {
		return $this->_call( 'client.update', $this->_auth, $clientDict );
	}

	function contactActive( $client='', $value='' ) {
		return $this->_call( 'contact.active', $this->_auth, $value );
	}

	function sourceList( $client='' ) {
		return $this->_call( 'source.list', $this->_auth );
	}
}

?>
