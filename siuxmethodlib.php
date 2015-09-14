<?php

# generate date: 2015-09-11 15:20:40


class SiUXmethod {


	# --- 
	# APIKEY 

	function apikeyAdd( $name='', $readOnly=0 ) {
		return $this->_call( 'apikey.add', $this->_auth, $name, $readOnly );
	}

	function apikeyDelete( $apikeyId=0 ) {
		return $this->_call( 'apikey.delete', $this->_auth, $apikeyId );
	}

	function apikeyList(  ) {
		return $this->_call( 'apikey.list', $this->_auth );
	}


	# --- 
	# AVAILABILITY 

	function availabilityInfo( $dateTo=20150901 ) {
		return $this->_call( 'availability.info', $this->_auth, $dateTo );
	}

	function availabilityList( $dateInput=20150901, $history=30, $sourceId=0 ) {
		return $this->_call( 'availability.list', $this->_auth, $dateInput, $history, $sourceId );
	}


	# --- 
	# CHECKPOINT 

	function checkpointInfo( $checkpointId=0 ) {
		return $this->_call( 'checkpoint.info', $this->_auth, $checkpointId );
	}

	function checkpointList( $active=-1 ) {
		return $this->_call( 'checkpoint.list', $this->_auth, $active );
	}


	# --- 
	# DROPOUT 

	function dropoutInfo( $dateTo=20150901 ) {
		return $this->_call( 'dropout.info', $this->_auth, $dateTo );
	}

	function dropoutList( $dateInput=2040101, $history=7 ) {
		return $this->_call( 'dropout.list', $this->_auth, $dateInput, $history );
	}


	# --- 
	# FILTER 

	function filterAdd( $filterData=array(), $sourceIds=array() ) {
		return $this->_call( 'filter.add', $this->_auth, $filterData, $sourceIds );
	}

	function filterDelete( $filterId=0 ) {
		return $this->_call( 'filter.delete', $this->_auth, $filterId );
	}

	function filterExist( $filterData=array(), $sourceIds=array() ) {
		return $this->_call( 'filter.exist', $this->_auth, $filterData, $sourceIds );
	}

	function filterInfo( $filterId=0 ) {
		return $this->_call( 'filter.info', $this->_auth, $filterId );
	}

	function filterList( $sourceId=0 ) {
		return $this->_call( 'filter.list', $this->_auth, $sourceId );
	}

	function filterViewList(  ) {
		return $this->_call( 'filter.view.list', $this->_auth );
	}


	# --- 
	# NOTIFY 

	function notifyAdd( $name='', $value='', $parameter=array(), $contactGroup=array() ) {
		return $this->_call( 'notify.add', $this->_auth, $name, $value, $parameter, $contactGroup );
	}

	function notifyDeactive( $value='' ) {
		return $this->_call( 'notify.deactive', $this->_auth, $value );
	}

	function notifyDelete( $contactId=0 ) {
		return $this->_call( 'notify.delete', $this->_auth, $contactId );
	}

	function notifyGroupAdd( $name='', $parameter=array() ) {
		return $this->_call( 'notify.group.add', $this->_auth, $name, $parameter );
	}

	function notifyGroupDelete( $contactGroupId=0 ) {
		return $this->_call( 'notify.group.delete', $this->_auth, $contactGroupId );
	}

	function notifyGroupInfo( $contactGroupId=0 ) {
		return $this->_call( 'notify.group.info', $this->_auth, $contactGroupId );
	}

	function notifyGroupList(  ) {
		return $this->_call( 'notify.group.list', $this->_auth );
	}

	function notifyInfo( $contactId=0 ) {
		return $this->_call( 'notify.info', $this->_auth, $contactId );
	}

	function notifyList( $status='all' ) {
		return $this->_call( 'notify.list', $this->_auth, $status );
	}

	function notifySenderInfo( $dateTo=20150101 ) {
		return $this->_call( 'notify.sender.info', $this->_auth, $dateTo );
	}

	function notifyUpdate( $contactId=0, $parameter=array(), $contactGroup=array() ) {
		return $this->_call( 'notify.update', $this->_auth, $contactId, $parameter, $contactGroup );
	}


	# --- 
	# OPERATOR 

	function operatorInfo( $operatorId=0 ) {
		return $this->_call( 'operator.info', $this->_auth, $operatorId );
	}

	function operatorList(  ) {
		return $this->_call( 'operator.list', $this->_auth );
	}

	function operatorLogList( $operatorId=0 ) {
		return $this->_call( 'operator.log.list', $this->_auth, $operatorId );
	}


	# --- 
	# SELENIUM 

	function seleniumAdd( $name='', $browser='chromelin', $timeout=30, $testType='content', $testIds=array(), $paramJS=1, $paramScreen='' ) {
		return $this->_call( 'selenium.add', $this->_auth, $name, $browser, $timeout, $testType, $testIds, $paramJS, $paramScreen );
	}

	function seleniumAdvancedAdd( $name='', $desc='', $code='', $nickname='', $inputUrl='', $targetUrl='' ) {
		return $this->_call( 'selenium.advanced.add', $this->_auth, $name, $desc, $code, $nickname, $inputUrl, $targetUrl );
	}

	function seleniumAdvancedInfo( $advancedId=0 ) {
		return $this->_call( 'selenium.advanced.info', $this->_auth, $advancedId );
	}

	function seleniumAdvancedList(  ) {
		return $this->_call( 'selenium.advanced.list', $this->_auth );
	}

	function seleniumInfo( $seleniumId=0 ) {
		return $this->_call( 'selenium.info', $this->_auth, $seleniumId );
	}

	function seleniumList(  ) {
		return $this->_call( 'selenium.list', $this->_auth );
	}

	function seleniumOutputInfo( $seleniumId=0, $date='2015-01-01' ) {
		return $this->_call( 'selenium.output.info', $this->_auth, $seleniumId, $date );
	}

	function seleniumTestAdd( $urlInput='', $searchType='css_selector', $searchValue='', $urlTarget='', $advancedId=0 ) {
		return $this->_call( 'selenium.test.add', $this->_auth, $urlInput, $searchType, $searchValue, $urlTarget, $advancedId );
	}

	function seleniumTestInfo( $seleniumTestId=0 ) {
		return $this->_call( 'selenium.test.info', $this->_auth, $seleniumTestId );
	}

	function seleniumTestList(  ) {
		return $this->_call( 'selenium.test.list', $this->_auth );
	}

	function seleniumUpdate( $seleniumId=0, $name='', $browser='chromelin', $timeout=30, $testType='content', $testIds=array(), $status='active', $paramJS=1, $paramScreen='' ) {
		return $this->_call( 'selenium.update', $this->_auth, $seleniumId, $name, $browser, $timeout, $testType, $testIds, $status, $paramJS, $paramScreen );
	}


	# --- 
	# SOURCE 

	function sourceActive( $sourceId=0 ) {
		return $this->_call( 'source.active', $this->_auth, $sourceId );
	}

	function sourceAdd( $sourceGroupId=0, $name='', $url='', $parameter=array() ) {
		return $this->_call( 'source.add', $this->_auth, $sourceGroupId, $name, $url, $parameter );
	}

	function sourceDeactive( $sourceId=0 ) {
		return $this->_call( 'source.deactive', $this->_auth, $sourceId );
	}

	function sourceDropoutInfo( $sourceId=0, $date='2015-09-01' ) {
		return $this->_call( 'source.dropout.info', $this->_auth, $sourceId, $date );
	}

	function sourceDropoutList( $sourceId=0, $history=7 ) {
		return $this->_call( 'source.dropout.list', $this->_auth, $sourceId, $history );
	}

	function sourceGroupAdd( $name='', $parameter=array() ) {
		return $this->_call( 'source.group.add', $this->_auth, $name, $parameter );
	}

	function sourceGroupDelete( $sourceGroupId=0 ) {
		return $this->_call( 'source.group.delete', $this->_auth, $sourceGroupId );
	}

	function sourceGroupInfo( $sourceGroupId=0 ) {
		return $this->_call( 'source.group.info', $this->_auth, $sourceGroupId );
	}

	function sourceGroupList(  ) {
		return $this->_call( 'source.group.list', $this->_auth );
	}

	function sourceInfo( $sourceId=0 ) {
		return $this->_call( 'source.info', $this->_auth, $sourceId );
	}

	function sourceList( $sourceGroupId=0 ) {
		return $this->_call( 'source.list', $this->_auth, $sourceGroupId );
	}

	function sourceOutputGroup( $sourceId=0, $tsGroup=0 ) {
		return $this->_call( 'source.output.group', $this->_auth, $sourceId, $tsGroup );
	}

	function sourceOutputInfo( $sourceId=0, $date='2015-09-01', $limit=2000, $FromId=0, $outputId=0, $countrys=array(), $checkpointIds=array(), $dataView='all' ) {
		return $this->_call( 'source.output.info', $this->_auth, $sourceId, $date, $limit, $FromId, $outputId, $countrys, $checkpointIds, $dataView );
	}

	function sourceStatDailyList( $sourceId=0, $date='2001-01' ) {
		return $this->_call( 'source.stat.daily.list', $this->_auth, $sourceId, $date );
	}

	function sourceStatList( $hostname, $history=7 ) {
		return $this->_call( 'source.stat.list', $hostname, $history );
	}

	function sourceStatMonthlyList( $sourceId=0, $history=12 ) {
		return $this->_call( 'source.stat.monthly.list', $this->_auth, $sourceId, $history );
	}

	function sourceUpdate( $sourceId=0, $sourceDict=array() ) {
		return $this->_call( 'source.update', $this->_auth, $sourceId, $sourceDict );
	}



}

?>
