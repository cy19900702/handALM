<?php
function display_lines($focus, $field, $value, $view) {

	global $sugar_config, $locale, $app_list_strings, $mod_strings;

	$html = '';
	$html .= '<script src="modules/HIT_IP_TRANS_BATCH/js/html_dom_required_setting.js"></script>';
	if ($view == 'EditView') {
		$html .= '<script src="modules/HIT_IP_TRANS/js/line_items.js"></script>';
		//$html .= '<script src="modules/HAA_FF/ff_include.js"></script>';
		$html .= '<script src="custom/resources/IPSubnetCalculator/lib/ip-subnet-calculator.js"></script>';
		$html .= "<table border='0' id='lineItems' class='list view table'></table>";
		$html .= '<script>insertTransLineHeader(\'lineItems\');</script>';
		$html .= "<script> var lineData='';</script>";
		if ($focus->id != '') { //如果不是新增（即如果是编辑已有记录）
			$sql = "SELECT   hat.id
											        ,a.name hat_asset_name
											        ,s.name hit_ip_subnets
											        ,s.id   hit_ip_subnets_id
											        ,hi.name parent_ip
											        ,hat.associated_ip
											        ,hat.mask
											        ,hat.bandwidth_type
											        ,hat.port
											        ,hat.speed_limit
											        ,hat.gateway
													,hat.monitoring
													,hat.hat_assets_cabinet_id
													,b.name hat_assets_cabinet
													,hat.channel_content
													,hat.channel_num,s.ip_netmask,hat.mrtg_link	,hat.access_assets_id,c.name access_assets_name 
											FROM   hit_ip_trans hat
											LEFT JOIN hat_assets a ON (hat.hat_assets_id=a.id)
											LEFT JOIN hat_assets b ON (hat.hat_assets_cabinet_id=b.id)
											LEFT JOIN hit_ip_subnets s ON (hat.hit_ip_subnets_id=s.id)
											LEFT JOIN hit_ip hi ON (s.parent_hit_ip_id=hi.id)
											LEFT JOIN hat_assets c ON (hat.access_assets_id=c.id)
											WHERE hat.deleted=0 and hat.hit_ip_trans_batch_id ='" . $focus->id . "'";

			$result = $focus->db->query($sql);

			while ($row = $focus->db->fetchByAssoc($result)) {
				//echo var_dump($row);;
				$line_data = json_encode($row);
				$html .= "<script>lineData=" . $line_data . ";</script>";
				$html .= "<script>insertLineData(" . $line_data . ");</script>";
				//REF:custom/modules/HAT_Asset_Trans/js/line_items.js
				//通过insertLineData向已经完成初始化的页面要素中，写入值
			}
		}

		$html .= '<script>insertTransLineFootor(\'lineItems\');</script>';
		$html .= '<script>resetLineNum_Bold();</script>';

	} else
		if ($view == 'DetailView') {
			
			$html .= '<script src="modules/HIT_IP_TRANS/js/line_items_show.js"></script>';
			$html .= '<script src="custom/resources/IPSubnetCalculator/lib/ip-subnet-calculator.js"></script>';
			$html .= "<table border='0' cellspacing='16' width='37.5%' id='lineItems' class='list view table'></table>";
			$html .= '<script>insertTransLineHeader(\'lineItems\');</script>';

			if ($focus->id != '') { //如果不是新增（即如果是编辑已有记录）
				$sql = "SELECT   hat.id
													        ,a.name hat_asset_name
													        ,s.name hit_ip_subnets
													        ,s.id   hit_ip_subnets_id
													        ,hi.name parent_ip
													        ,hat.associated_ip
													        ,hat.mask
													        ,hat.bandwidth_type
													        ,hat.port
													        ,hat.speed_limit
													        ,hat.gateway
															,hat.monitoring
															,hat.hat_assets_cabinet_id
															,b.name hat_assets_cabinet
															,hat.channel_content
															,hat.channel_num,s.ip_netmask,s.ip_lowest+'~'+ s.ip_highest associated_ip,hat.mrtg_link,hat.access_assets_id,c.name access_assets_name 	
													FROM   hit_ip_trans hat
													LEFT JOIN hat_assets a ON (hat.hat_assets_id=a.id)
													LEFT JOIN hat_assets b ON (hat.hat_assets_cabinet_id=b.id)
													LEFT JOIN hit_ip_subnets s ON (hat.hit_ip_subnets_id=s.id)
													LEFT JOIN hit_ip hi ON (s.parent_hit_ip_id=hi.id)
													LEFT JOIN hat_assets c ON (hat.access_assets_id=c.id)
													WHERE hat.deleted=0 and  hat.hit_ip_trans_batch_id ='" . $focus->id . "'";

				$result = $focus->db->query($sql);

				while ($row = $focus->db->fetchByAssoc($result)) {
					//echo var_dump($row);;
					  
					$line_data = json_encode($row);
					//echo $line_data;
					$html .= "<script>insertLineData(" . $line_data . ");</script>";
					//REF:custom/modules/HAT_Asset_Trans/js/line_items.js
					//通过insertLineData向已经完成初始化的页面要素中，写入值
				}
			}
			$html .= '<script>insertTransLineFootor(\'lineItems\');</script>';
			$html .= '<script>resetLineNum_Bold();</script>';

		}
	//add by yuan.chen 2016-09-12
	if ($focus->id != '') {
		
		$event_sql = "SELECT 
						  h.change_ip_subnets,
						  h.change_associated_ip,
						  h.change_gateway,
						  h.change_bandwidth_type,
						  h.change_port,
						  h.change_speed_limit,
						  h.change_asset,
						  h.change_cabinet,
						  h.change_monitoring,
						  h.change_channel_num,
						  h.change_channel_content,h.change_mrtg_link,h.change_access_assets_name
					FROM
					      hat_eventtype h 
					WHERE h.deleted=0 
					AND   h.id ='" . $focus->hat_eventtype_id . "'";
		$event_result = $focus->db->query($event_sql);
		while ($event_row = $focus->db->fetchByAssoc($event_result)) {
			//echo var_dump($row);;
			$event_line_data = json_encode($event_row);
			//echo $event_line_data;
			$html .= "<script> var lineData=" . $event_line_data . ";</script>";
			$html .= "<script>changeRequired(" . $event_line_data . ");</script>";

		}
	}
	return $html;
}