<?php
 // created: 2016-02-08 10:53:31
$layout_defs["Accounts"]["subpanel_setup"]['haa_qual_accounts'] = array (
  'order' => 10,
  'module' => 'HAA_QUAL',
  'subpanel_name' => 'Account_subpanel_haa_qual_accounts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_HAA_QUAL_SUBPANEL',
  'get_subpanel_data' => 'haa_qual_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
/*    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),*/
  ),
);
