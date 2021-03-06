<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['HAT_Counting_Tasks'] = array(
    // list of what Subpanels to show in the DetailView
    'subpanel_setup' => array(
              'hat_counting_lines' => array(
            'order' => 10,
           'module' => 'HAT_Counting_Lines',
           'sort_order' => 'asc',
           'sort_by' => 'id',
           'subpanel_name' => 'HAT_Counting_Task_Subpanels_Lines',
           'get_subpanel_data' => 'hat_counting_line_link',
           'title_key' => 'LBL_HAT_COUNTING_LINES_SUBPANEL',
           'top_buttons' => 
           array (
            0 => 
            array (
              'widget_class' => 'SubPanelTopCreateButton',
              ),
            ),
        ),
              'hat_counting_results' => array(
            'order' => 10,
           'module' => 'HAT_Counting_Results',
           'sort_order' => 'asc',
           'sort_by' => 'id',
           'subpanel_name' => 'HAT_Counting_Task_Subpanels_Results',
           'get_subpanel_data' => 'hat_counting_result_link',
           'title_key' => 'LBL_HAT_COUNTING_RESULTS_SUBPANEL',
           'top_buttons' => 
           array (
            0 => 
            array (
              'widget_class' => 'SubPanelTopCreateButton',
              ),
            ),
        ),
      ),   
    );
    ?>