<?php

# generate date: 2015-08-26 11:03:55


class SiUXmethod {


	# --- 
	# APIKEY 

	function apikeyAdd( $name='', $readOnly=0 ) {
		return $this->_call( 'apikey.add', $this->_auth, $name, $readOnly );
	}

	function apikeyDelete( $apiId=0 ) {
		return $this->_call( 'apikey.delete', $this->_auth, $apiId );
	}

	function apikeyList(  ) {
		return $this->_call( 'apikey.list', $this->_auth );
	}


	# --- 
	# AVAILABILITY 

	function availabilityInfo( $dateTo=20140101 ) {
		return $this->_call( 'availability.info', $this->_auth, $dateTo );
	}

	function availabilityList( $dateInput=20140101, $history=30, $sourceId=0 ) {
		return $this->_call( 'availability.list', $this->_auth, $dateInput, $history, $sourceId );
	}


	# --- 
	# BROWSER 

	function browserList(  ) {
		return $this->_call( 'browser.list', $this->_auth );
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
	# CONTACT 

	function contactAdd( $name='', $value='', $parametr=array(), $contactGroup=array() ) {
		return $this->_call( 'contact.add', $this->_auth, $name, $value, $parametr, $contactGroup );
	}

	function contactDeactive( $value='' ) {
		return $this->_call( 'contact.deactive', $this->_auth, $value );
	}

	function contactDelete( $contactId=0 ) {
		return $this->_call( 'contact.delete', $this->_auth, $contactId );
	}

	function contactGroupAdd( $name='', $parametr=array() ) {
		return $this->_call( 'contact.group.add', $this->_auth, $name, $parametr );
	}

	function contactGroupDelete( $contactGroupId=0 ) {
		return $this->_call( 'contact.group.delete', $this->_auth, $contactGroupId );
	}

	function contactGroupInfo( $contactGroupId=0 ) {
		return $this->_call( 'contact.group.info', $this->_auth, $contactGroupId );
	}

	function contactGroupList(  ) {
		return $this->_call( 'contact.group.list', $this->_auth );
	}

	function contactInfo( $contactId=0 ) {
		return $this->_call( 'contact.info', $this->_auth, $contactId );
	}

	function contactList( $status='all' ) {
		return $this->_call( 'contact.list', $this->_auth, $status );
	}

	function contactUpdate( $contactId=0, $parametr=array(), $contactGroup=array() ) {
		return $this->_call( 'contact.update', $this->_auth, $contactId, $parametr, $contactGroup );
	}


	# --- 
	# COUNTRY 

	function countryList(  ) {
		return $this->_call( 'country.list', $this->_auth );
	}


	# --- 
	# DOMAIN 

	function domainList(  ) {
		return $this->_call( 'domain.list', $this->_auth );
	}


	# --- 
	# DROPOUT 

	function dropoutInfo( $dateTo=20140101 ) {
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
	# LANG 

	function langList(  ) {
		return $this->_call( 'lang.list', $this->_auth );
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
	# SENDER 

	function senderInfo( $dateTo=20140101 ) {
		return $this->_call( 'sender.info', $this->_auth, $dateTo );
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

	function sourceDropoutInfo( $sourceId=0, $date='2008-01-01' ) {
		return $this->_call( 'source.dropout.info', $this->_auth, $sourceId, $date );
	}

	function sourceDropoutList( $sourceId=0, $history=7 ) {
		return $this->_call( 'source.dropout.list', $this->_auth, $sourceId, $history );
	}

	function sourceGroupAdd( $name='', $parametr=array() ) {
		return $this->_call( 'source.group.add', $this->_auth, $name, $parametr );
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

	function sourceOutputInfo( $sourceId=0, $date='2008-01-01', $limit=2000, $FromId=0, $outputId=0, $countrys=array(), $checkpointIds=array(), $dataView='all' ) {
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


	# --- 
	# TIMEZONE 

	function timezoneList(  ) {
		return $this->_call( 'timezone.list', $this->_auth );
	}



}

?>
