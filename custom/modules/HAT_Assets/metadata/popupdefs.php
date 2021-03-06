<?php
if (isset($_REQUEST["target_owning_org_id_advanced"])) {
  $target_using_org_id_advanced=$_REQUEST["target_owning_org_id_advanced"];
} else {
  $target_using_org_id_advanced="";
}

if (isset($_REQUEST["asset_type"])) {
  $asset_type=$_REQUEST["asset_type"];
} else {
  $asset_type="";
}
if(isset($_REQUEST["asset_type_advanced"])&&$_REQUEST["asset_type_advanced"]!=""){
	$asset_type=$_REQUEST["asset_type_advanced"];
}

$popupMeta = array (
    'moduleMain' => 'HAT_Assets',
    'varName' => 'HAT_Assets',
    'orderBy' => 'hat_assets.name',
    'whereClauses' => array (
  'name' => 'hat_assets.name',
  'asset_desc' => 'hat_assets.asset_desc',
  'serial_number' => 'hat_assets.serial_number',
  'hat_asset_locations_hat_assets_name' => 'hat_assets.hat_asset_locations_hat_assets_name',
  'hat_assets_accounts_name' => 'hat_assets.hat_assets_accounts_name',
  'framework' => 'hat_assets.framework',
  'using_org_id' => 'hat_assets.using_org_id',
  'enable_it_rack' => 'hat_assets.enable_it_rack',
  'owning_org' => 'hat_assets.owning_org',
),
  'whereStatement'=>'hat_assets.haa_frameworks_id = "'.$_SESSION["current_framework"].'"'
                    .' AND (("'.$target_using_org_id_advanced. '"!="" and EXISTS (SELECT 1 FROM hit_racks r,hit_rack_allocations ra WHERE hat_assets.id = r.hat_assets_id AND r.id = ra.hit_racks_id AND ra.deleted = 0 AND hat_assets.using_org_id = "'.$target_using_org_id_advanced.'"))  or ""="'.$target_using_org_id_advanced.'") and ("'.$asset_type.'" ="" or( "'.$asset_type.'"="ODF" and exists (select 1 from aos_products where aos_products.name="ODF" and aos_products.deleted=0 and aos_products.id=hat_assets.aos_products_id) )) ',
    'searchInputs' => array (
  1 => 'name',
  4 => 'asset_desc',
  5 => 'serial_number',
  7 => 'hat_asset_locations_hat_assets_name',
  8 => 'hat_assets_accounts_name',
  11 => 'framework',
  12 => 'using_org_id',
  13 => 'enable_it_rack',
  16 => 'owning_org',
),
    'searchdefs' => array (
  'framework' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_FRAMEWORK',
    'id' => 'HAA_FRAMEWORKS_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'framework',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'asset_desc' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ASSET_DESC',
    'width' => '10%',
    'name' => 'asset_desc',
  ),
  'serial_number' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERIAL_NUMBER',
    'width' => '10%',
    'name' => 'serial_number',
  ),
  'hat_asset_locations_hat_assets_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LOCATION',
    'id' => 'HAT_ASSET_LOCATIONS_HAT_ASSETSHAT_ASSET_LOCATIONS_IDA',
    'width' => '10%',
    'name' => 'hat_asset_locations_hat_assets_name',
  ),
  'hat_assets_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_HAT_ASSETS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'HAT_ASSETS_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'hat_assets_accounts_name',
  ),
  'owning_org_id' => 
  array (
    'type' => 'varchar',
    'label' => '',
    'width' => '10%',
    'default' => true,
    'name' => 'owning_org_id',
  ),
  'enable_it_rack' => 
  array (
    'type' => 'varchar',
    'label' => '',
    'width' => '10%',
    'default' => true,
    'name' => 'enable_it_rack',
  ),
  'owning_org' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_OWING_ORG',
    'id' => 'OWNING_ORG_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'owning_org',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'ASSET_DESC' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ASSET_DESC',
    'width' => '10%',
    'default' => true,
    'name' => 'asset_desc',
  ),
  'HAT_ASSET_LOCATIONS_HAT_ASSETS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_LOCATION',
    'id' => 'HAT_ASSET_LOCATIONS_HAT_ASSETSHAT_ASSET_LOCATIONS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'hat_asset_locations_hat_assets_name',
  ),
  'HAT_ASSETS_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_HAT_ASSETS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'HAT_ASSETS_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'hat_assets_accounts_name',
  ),
  'HAT_ASSETS_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_HAT_ASSETS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'HAT_ASSETS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'hat_assets_contacts_name',
  ),
  'ATTRIBUTE5' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ATTRIBUTE5',
    'width' => '10%',
	'link' => true,
    'default' => true,
  ),
  'ATTRIBUTE9' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ATTRIBUTE9',
    'width' => '10%',
    'default' => true,
  ),
),
);
