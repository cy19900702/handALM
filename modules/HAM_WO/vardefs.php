<?php
$dictionary['HAM_WO'] = array (
	'table' => 'ham_wo',
	'audited' => false,
	'inline_edit' => false,
	'duplicate_merge' => false,
	'fields' => array (
		'ham_maint_sites_id' => array (
			'required' => false,
			'name' => 'ham_maint_sites_id',
			'vname' => 'LBL_SITE_HAM_MAINT_SITES_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'site' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'site',
			'vname' => 'LBL_SITE',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => '',
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'ham_maint_sites_id',
			'ext2' => 'HAM_Maint_Sites',
			'module' => 'HAM_Maint_Sites',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'location_extra_desc' => array (
			'required' => false,
			'name' => 'location_extra_desc',
			'vname' => 'LBL_LOCATION_EXTRA_DESC',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',

			
		),
		'ham_priority_id' => array (
			'required' => false,
			'name' => 'ham_priority_id',
			'vname' => 'LBL_PRIORITY_HAM_PRIORITY_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'priority' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'priority',
			'vname' => 'LBL_PRIORITY',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'ham_priority_id',
			'ext2' => 'HAM_Priority',
			'module' => 'HAM_Priority',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'wo_number' => array (
			'required' => false,
			'name' => 'wo_number',
			'vname' => 'LBL_WO_NUMBER',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',

			
		),

		'contact_id' => array (
			'required' => false,
			'name' => 'contact_id',
			'vname' => 'LBL_REPORTER_CONTACT_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'reporter' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'reporter',
			'vname' => 'LBL_REPORTER',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'contact_id',
			'ext2' => 'Contacts',
			'module' => 'Contacts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'account_id' => array (
			'required' => false,
			'name' => 'account_id',
			'vname' => 'LBL_REPORTER_ORG_ACCOUNT_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'reporter_org' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'reporter_org',
			'vname' => 'LBL_REPORTER_ORG',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'account_id',
			'ext2' => 'Accounts',
			'module' => 'Accounts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'reported_date' => array (
			'required' => false,
			'name' => 'reported_date',
			'vname' => 'LBL_REPORTED_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			'display_default' => '',

			
		),
		'date_target_start' => array (
			'required' => true,
			'name' => 'date_target_start',
			'vname' => 'LBL_TARGET_START_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			//'display_default' => 'now&12:00am',

	
		),
		'date_target_finish' => array (
			'required' => true,
			'name' => 'date_target_finish',
			'vname' => 'LBL_TARGET_FINISH_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			// 'display_default' => 'now&12:00am',

	
		),
		'date_actual_start' => array (
			'required' => false,
			'name' => 'date_actual_start',
			'vname' => 'LBL_ACTUAL_START_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			// 'display_default' => 'now&12:00am',

	
		),
		'date_actual_finish' => array (
			'required' => false,
			'name' => 'date_actual_finish',
			'vname' => 'LBL_ACTUAL_FINISH_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			// 'display_default' => 'now&12:00am',

	
		),
		'date_schedualed_start' => array (
			'required' => false,
			'name' => 'date_schedualed_start',
			'vname' => 'LBL_SCHEDUALED_START_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			// 'display_default' => 'now&12:00am',

	
		),
		'date_schedualed_finish' => array (
			'required' => false,
			'name' => 'date_schedualed_finish',
			'vname' => 'LBL_SCHEDUALED_FINISH_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			// 'display_default' => 'now&12:00am',

	
		),
		'date_start_not_earlier' => array (
			'required' => false,
			'name' => 'date_start_not_earlier',
			'vname' => 'LBL_START_NOT_EARLIER_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			// 'display_default' => 'now&12:00am',

	
		),
		'date_finish_not_later' => array (
			'required' => false,
			'name' => 'date_finish_not_later',
			'vname' => 'LBL_FINISH_NOT_LATER_DATE',
			'type' => 'datetimecombo',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			// 'display_default' => 'now&12:00am',

	
		),
		'wo_status' => array (
			'required' => true,
			'name' => 'wo_status',
			'vname' => 'LBL_WO_STATUS',
			'type' => 'enum',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 100,
			'size' => '20',
			'options' => 'ham_wo_status_list',
			'studio' => 'visible',
			'dependency' => false,

			
		),
		'hat_event_type_id' => array (
			'required' => false,
			'name' => 'hat_event_type_id',
			'vname' => 'LBL_EVENT_TYPE_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'event_type' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'event_type',
			'vname' => 'LBL_EVENT_TYPE',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'hat_event_type_id',
			'ext2' => 'HAT_EventType',
			'module' => 'HAT_EventType',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'hat_asset_locations_id' => array (
			'required' => false,
			'name' => 'hat_asset_locations_id',
			'vname' => 'LBL_LOCATION_HAT_ASSET_LOCATIONS_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'location' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'location',
			'vname' => 'LBL_LOCATION',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'hat_asset_locations_id',
			'ext2' => 'HAT_Asset_Locations',
			'module' => 'HAT_Asset_Locations',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'hat_assets_id' => array (
			'required' => false,
			'name' => 'hat_assets_id',
			'vname' => 'LBL_HAT_ASSETS_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'asset' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'asset',
			'vname' => 'LBL_ASSET',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'hat_assets_id',
			'ext2' => 'HAT_Assets',
			'module' => 'HAT_Assets',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		'asset_desc' => array (
			'source' => 'non-db', //显示当前资产的说明
	'name' => 'asset_desc',
			'vname' => 'LBL_ASSET_DESC',
			'type' => 'varchar',
			'default' => '',
			'reportable' => true,
			'studio' => 'visible'
		),
		'location_desc' => array (
			'source' => 'non-db', //显示当前地点的说明
	'name' => 'location_desc',
			'vname' => 'LBL_LOCATION_DESC',
			'type' => 'varchar',
			'default' => '',
			'reportable' => true,
			'studio' => 'visible'
		),
		'location_map_enabled' => array (
			'source' => 'non-db', //显示当前地点的说明
	'name' => 'location_map_enabled',
			'vname' => 'LBL_LOCATION_MAP_ENABLED',
			'type' => 'bool',
			'default' => '',
			'reportable' => true,
			'studio' => 'visible'
		),
		'map_type' => array (
			'required' => false,
			'name' => 'map_type',
			'vname' => 'LBL_MAP_TYPE',
			'type' => 'enum',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'options' => 'cux_map_type_list',

			
		),
		'map_lat' => array (
			'required' => false,
			'name' => 'map_lat',
			'vname' => 'LBL_MAP_LAT',
			'type' => 'float',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			//'default' => '0.00000000',
			'len' => '11',
			'size' => '20',
			'enable_range_search' => false,
			'precision' => '8',

			
		),
		'map_lng' => array (
			'required' => false,
			'name' => 'map_lng',
			'vname' => 'LBL_MAP_LNG',
			'type' => 'float',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			//'default' => '0.00000000',
	'len' => '11',
			'size' => '20',
			'enable_range_search' => false,
			'precision' => '8',

			
		),
		'map_zoom' => array (
			'required' => false,
			'name' => 'map_zoom',
			'vname' => 'LBL_MAP_ZOOM',
			'type' => 'int',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',

			
		),
		'map_enabled' => array (
			'required' => false,
			'name' => 'map_enabled',
			'vname' => 'LBL_MAP_ENABLED',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',

			
		),
		'map_address' => array (
			'required' => false,
			'name' => 'map_address',
			'vname' => 'LBL_MAP_ADDRESS',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',

			
		),
		'map_search_area' => array (
			'name' => 'map_search_area',
			'vname' => 'LBL_MAP_SEARCH_AREA',
			'source' => 'non-db',
			'type' => 'varchar',
			'massupdate' => 0,

			
		),
		'map_display_area' => array (
			'source' => 'non-db', //Location
	'name' => 'map_display_area',
			'vname' => 'LBL_MAP_DISPLAY_AREA',
			'type' => 'varchar',
			'reportable' => true,
			'studio' => 'visible'
		),
		'source_type' => array (
			'required' => false,
			'name' => 'source_type',
			'vname' => 'LBL_SOURCE_TYPE',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',

			
		),
		'source_id' => array (
			'required' => false,
			'name' => 'source_id',
			'vname' => 'LBL_SOURCE_ID',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',

			
		),
		'source_reference' => array (
			'required' => false,
			'name' => 'source_reference',
			'vname' => 'LBL_SOURCE_REFERENCE',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',

			
		),
		#add by yuan.chen		
	'plan_fixed' => array (
			'required' => false,
			'name' => 'plan_fixed',
			'vname' => 'LBL_PLAN_FIXED',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',

			
		),

		#活动头
	'activity' => array (
			'required' => false,
			'name' => 'activity',
			'vname' => 'ACTIVITY',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),

		'ham_act_id_rule' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'ham_act_id_rule',
			'vname' => 'HAM_ACT_ID_RULE',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'activity',
			'ext2' => 'HAM_ACT',
			'module' => 'HAM_ACT',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		#计划优先级
	'wo_priority_id' => array (
			'required' => false,
			'name' => 'wo_priority_id',
			'vname' => 'LBL_WO_PRIORITY_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'wo_priority' => array (
			'required' => true,
			'source' => 'non-db',
			'name' => 'wo_priority',
			'vname' => 'LBL_WO_PRIORITY',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'wo_priority_id',
			'ext2' => 'HAM_Priority',
			'module' => 'HAM_Priority',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		#合同号
	'contract_id' => array (
			'required' => false,
			'name' => 'contract_id',
			'vname' => 'LBL_CONTRACT_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'contract' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'contract',
			'vname' => 'LBL_CONTRACT',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'contract_id',
			'ext2' => 'AOS_Contracts',
			'module' => 'AOS_Contracts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		#工作中心
	'work_center_id' => array (
			'required' => false,
			'name' => 'work_center_id',
			'vname' => 'LBL_WORK_CENTER_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'work_center' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'work_center',
			'vname' => 'LBL_WORK_CENTER',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'work_center_id',
			'ext2' => 'HAM_Work_Centers',
			'module' => 'HAM_Work_Centers',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		#资源/工种
	'work_center_res_id' => array (
			'required' => false,
			'name' => 'work_center_res_id',
			'vname' => 'LBL_WORK_CENTER_RES_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'work_center_res' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'work_center_res',
			'vname' => 'LBL_WORK_CENTER_RES',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'work_center_res_id',
			'ext2' => 'HAM_Work_Center_Res',
			'module' => 'HAM_Work_Center_Res',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),

		#负责人
	'work_center_people_id' => array (
			'required' => false,
			'name' => 'work_center_people_id',
			'vname' => 'LBL_WORK_CENTER_PEOPLE_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',

			
		),
		'work_center_people' => array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'work_center_people',
			'vname' => 'LBL_WORK_CENTER_PEOPLE',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'work_center_people_id',
			'ext2' => 'HAM_Work_Center_People',
			'module' => 'HAM_Work_Center_People',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',

			
		),
		#工单修改权限
	'work_order_access' => array (
			'required' => true,
			'name' => 'work_order_access',
			'vname' => 'LBL_WORK_ORDER_ACCESS',
			'type' => 'enum',
			'massupdate' => 0,
			'default' => 'WORKCENTER',
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 100,
			'size' => '20',
			'options' => 'ham_wo_access_right_list',
			'studio' => 'visible',
			'dependency' => false,
			
		),

		#工序完工时可指派后续人员
	'next_woop_assignment' => array (
			'required' => false,
			'name' => 'next_woop_assignment',
			'vname' => 'LBL_NEXT_WOOP_ASSIGNMENT',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			
		),

		#工单随最后一道工序完成
	'complete_by_last_woop' => array (
			'required' => false,
			'name' => 'complete_by_last_woop',
			'vname' => 'LBL_COMPLETE_BY_LAST_WOOP',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			
		),

	'wo_lines' => array (
			'required' => false,
			'name' => 'wo_lines',
			'source'=>'non-db',
			'vname' => 'LBL_WO_LINES',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
		),
		'sr_link' => array (
			'name' => 'sr_link',
			'type' => 'link',
			'relationship' => 'ham_wo_sr',
			'vname' => 'LBL_SR_SUBPANEL_TITLE',
			'link_type' => 'many',
			'module' => 'HAM_SR',
			'bean_name' => 'HAM_SR',
			'source' => 'non-db',

			
		),

		'woop_link' => array (
			'name' => 'woop_link',
			'type' => 'link',
			'relationship' => 'ham_wo_woop',
			'vname' => 'LBL_WOOP_SUBPANEL_TITLE',
			'link_type' => 'many',
			'module' => 'HAM_WOOP',
			'bean_name' => 'HAM_WOOP',
			'source' => 'non-db',

			
		),
		'wo_line_link' => array (
			'name' => 'wo_line_link',
			'type' => 'link',
			'relationship' => 'ham_wo_line',
			'vname' => 'LBL_WO_LINE_SUBPANEL_TITLE',
			'link_type' => 'many',
			'module' => 'HAM_WO_Lines',
			'bean_name' => 'HAM_WO_Lines',
			'source' => 'non-db',

			
		),

		
	),
	'relationships' => array (

		'ham_wo_sr' => array (
			'lhs_module' => 'HAM_WO',
			'lhs_table' => 'ham_wo',
			'lhs_key' => 'id',
			'rhs_module' => 'HAM_SR',
			'rhs_table' => 'ham_sr',
			'rhs_key' => 'ham_wo_id',
			'relationship_type' => 'one-to-many',

			
		),

		'ham_wo_woop' => array (
			'lhs_module' => 'HAM_WO',
			'lhs_table' => 'ham_wo',
			'lhs_key' => 'id',
			'rhs_module' => 'HAM_WOOP',
			'rhs_table' => 'ham_woop',
			'rhs_key' => 'ham_wo_id',
			'relationship_type' => 'one-to-many',

			
		),

		'ham_wo_line' => array (
			'lhs_module' => 'HAM_WO',
			'lhs_table' => 'ham_wo',
			'lhs_key' => 'id',
			'rhs_module' => 'HAM_WO_Lines',
			'rhs_table' => 'ham_wo_lines',
			'rhs_key' => 'ham_wo_id',
			'relationship_type' => 'one-to-many',

			
		),

		
	),
	'optimistic_locking' => true,
	'unified_search' => true,

	
);
if (!class_exists('VardefManager')) {
	require_once ('include/SugarObjects/VardefManager.php');
}
VardefManager :: createVardef('HAM_WO', 'HAM_WO', array (
	'basic',
	'assignable',
	'security_groups'
));