<?php

# generate date: 2016-03-22 22:13:13


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

	function availabilityHourlyList( $dateInput=20160201, $history=30, $view='hourOnly' ) {
		return $this->_call( 'availability.hourly.list', $this->_auth, $dateInput, $history, $view );
	}

	function availabilityInfo( $dateTo=20150901 ) {
		return $this->_call( 'availability.info', $this->_auth, $dateTo );
	}

	function availabilityList( $dateInput=20150901, $history=30, $sourceId=0 ) {
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
	# COUNTRY 

	function countryList(  ) {
		return $this->_call( 'country.list', $this->_auth );
	}


	# --- 
	# DEPLOY 

	function deployAdd( $tagId=0, $version='', $env='', $operatorId=0 ) {
		return $this->_call( 'deploy.add', $this->_auth, $tagId, $version, $env, $operatorId );
	}

	function deployInfo( $deployId=0 ) {
		return $this->_call( 'deploy.info', $this->_auth, $deployId );
	}

	function deployList( $environments=array() ) {
		return $this->_call( 'deploy.list', $this->_auth, $environments );
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
	# LANG 

	function langList(  ) {
		return $this->_call( 'lang.list', $this->_auth );
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

	function notifySenderInfo( $dateTo=20150101, $view='all', $From=0, $step=20 ) {
		return $this->_call( 'notify.sender.info', $this->_auth, $dateTo, $view, $From, $step );
	}

	function notifySenderList( $dateTo=20160101, $history=30 ) {
		return $this->_call( 'notify.sender.list', $this->_auth, $dateTo, $history );
	}

	function notifyUpdate( $contactId=0, $parameter=array(), $contactGroup=array() ) {
		return $this->_call( 'notify.update', $this->_auth, $contactId, $parameter, $contactGroup );
	}


	# --- 
	# OPERATOR 

	function operatorInfo( $operatorId=0 ) {
		return $this->_call( 'operator.info', $this->_auth, $operatorId );
	}

	function operatorLangSet( $operatorId=0, $lang='' ) {
		return $this->_call( 'operator.lang.set', $this->_auth, $operatorId, $lang );
	}

	function operatorList(  ) {
		return $this->_call( 'operator.list', $this->_auth );
	}

	function operatorLogList( $operatorId=0 ) {
		return $this->_call( 'operator.log.list', $this->_auth, $operatorId );
	}


	# --- 
	# RUM 

	function rumOutputInfo( $sourceId=0, $date='2015-09-01', $outputId=0 ) {
		return $this->_call( 'rum.output.info', $this->_auth, $sourceId, $date, $outputId );
	}


	# --- 
	# SEARCH 

	function searchList( $query='seznam' ) {
		return $this->_call( 'search.list', $this->_auth, $query );
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

	function sourceGroupUpdate( $sourceGroupId=0, $parameter=array() ) {
		return $this->_call( 'source.group.update', $this->_auth, $sourceGroupId, $parameter );
	}

	function sourceInfo( $sourceId=0 ) {
		return $this->_call( 'source.info', $this->_auth, $sourceId );
	}

	function sourceList( $sourceGroupId=0, $tagId=0 ) {
		return $this->_call( 'source.list', $this->_auth, $sourceGroupId, $tagId );
	}

	function sourceOutputGroup( $sourceId=0, $tsGroup=0 ) {
		return $this->_call( 'source.output.group', $this->_auth, $sourceId, $tsGroup );
	}

	function sourceOutputHeaderInfo( $sourceId=0, $date='2015-01-01', $outputId=0 ) {
		return $this->_call( 'source.output.header.info', $this->_auth, $sourceId, $date, $outputId );
	}

	function sourceOutputInfo( $sourceId=0, $date='2015-09-01', $limit=2000, $FromId=0, $outputId=0, $countrys=array(), $checkpointIds=array(), $dataView='all' ) {
		return $this->_call( 'source.output.info', $this->_auth, $sourceId, $date, $limit, $FromId, $outputId, $countrys, $checkpointIds, $dataView );
	}

	function sourceStatDailyList( $sourceId=0, $date='2001-01' ) {
		return $this->_call( 'source.stat.daily.list', $this->_auth, $sourceId, $date );
	}

	function sourceStatMonthlyList( $sourceId=0, $history=12 ) {
		return $this->_call( 'source.stat.monthly.list', $this->_auth, $sourceId, $history );
	}

	function sourceStatWeeklyList( $sourceId=0, $date='2001-01-01' ) {
		return $this->_call( 'source.stat.weekly.list', $this->_auth, $sourceId, $date );
	}

	function sourceUpdate( $sourceId=0, $sourceDict=array() ) {
		return $this->_call( 'source.update', $this->_auth, $sourceId, $sourceDict );
	}

	function sourceVideoInfo( $sourceId=0, $date='2015-09-01', $whatName='session', $whatId='' ) {
		return $this->_call( 'source.video.info', $this->_auth, $sourceId, $date, $whatName, $whatId );
	}


	# --- 
	# TAG 

	function tagAdd( $name='', $label='default', $flagNotify=0, $flagDeploy=0 ) {
		return $this->_call( 'tag.add', $this->_auth, $name, $label, $flagNotify, $flagDeploy );
	}

	function tagDelete( $tagId=0 ) {
		return $this->_call( 'tag.delete', $this->_auth, $tagId );
	}

	function tagInfo( $tagId=0 ) {
		return $this->_call( 'tag.info', $this->_auth, $tagId );
	}

	function tagList(  ) {
		return $this->_call( 'tag.list', $this->_auth );
	}

	function tagReplyAdd( $tagId=0, $sourceId=0, $operatorId=0, $senderId=0, $date=0 ) {
		return $this->_call( 'tag.reply.add', $this->_auth, $tagId, $sourceId, $operatorId, $senderId, $date );
	}

	function tagReplyList( $tagId=0, $sourceId=0, $From=0, $step=20 ) {
		return $this->_call( 'tag.reply.list', $this->_auth, $tagId, $sourceId, $From, $step );
	}

	function tagReplyUpdate( $tagReplyId=0, $operatorId=0, $comment='' ) {
		return $this->_call( 'tag.reply.update', $this->_auth, $tagReplyId, $operatorId, $comment );
	}


	# --- 
	# TIMEZONE 

	function timezoneList(  ) {
		return $this->_call( 'timezone.list', $this->_auth );
	}


	# --- 
	# VIDEO 

	function videoOutputInfo( $sourceId=0, $date='2015-09-01', $limit=2000, $FromId=0, $outputId=0, $countrys=array(), $checkpointIds=array(), $dataView='all', $videoId='' ) {
		return $this->_call( 'video.output.info', $this->_auth, $sourceId, $date, $limit, $FromId, $outputId, $countrys, $checkpointIds, $dataView, $videoId );
	}



}

?>
