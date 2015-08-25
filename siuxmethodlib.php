<?php

class SiUXmethod {

	function availabilityInfo( $client='', $dateTo=20140101 ) {
		return $this->_call( 'availability.info', $client, $dateTo );
	}

	function availabilityList( $client='', $dateInput=20140101, $history=30, $sourceId=0 ) {
		return $this->_call( 'availability.list', $client, $dateInput, $history, $sourceId );
	}

	function browserList( $client='' ) {
		return $this->_call( 'browser.list', $client );
	}

	function checkpointInfo( $client='', $checkpointId=0 ) {
		return $this->_call( 'checkpoint.info', $client, $checkpointId );
	}

	function checkpointList( $client='', $active=-1 ) {
		return $this->_call( 'checkpoint.list', $client, $active );
	}

	function clientUpdate( $client='', $clientDict=array() ) {
		return $this->_call( 'client.update', $client, $clientDict );
	}

	function contactActive( $client='', $value='' ) {
		return $this->_call( 'contact.active', $client, $value );
	}

	function sourceList( $client='' ) {
		return $this->_call( 'source.list', $client );
	}
}

?>
