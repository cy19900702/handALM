<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');

class HAM_Work_CentersViewList extends ViewList
{

/*
 *  重写方法，添加where条件
 */
function processSearchForm(){
  parent::processSearchForm();

  $haa_frameworks_id=$_SESSION["current_framework"];
	if ($this->where) { 
	  $this->where.=" AND EXISTS (SELECT 1 FROM ham_maint_sites hms WHERE hms.id = ham_work_centers.ham_maint_sites_id AND hms.haa_frameworks_id ='".$haa_frameworks_id."')";
	}else{
	  $this->where=" EXISTS (SELECT 1 FROM ham_maint_sites hms WHERE hms.id = ham_work_centers.ham_maint_sites_id AND hms.haa_frameworks_id ='".$haa_frameworks_id."')";
	}
}

}
