/*************************************************************
* 这个文件是HandALM一个重要的通用性模块，它会被其它多个模块调用
* 这个文件中定义了FlexForm的基本方法
* 同时这个文件中还提供了以下重要的函数
* mark_field_disabled
* mark_field_enabled
* FFCheckField
*************************************************************/
$.getScript("custom/resources/bootstrap3-dialog-master/dist/js/bootstrap-dialog.min.js"); //MessageBox
$('head').append('<link rel="stylesheet" href="custom/resources/bootstrap3-dialog-master/dist/css/bootstrap-dialog.min.css" type="text/css" />');


function triger_setFF(id_value, module_name) {
  //console.log("index.php?to_pdf=true&module=HAA_FF&action=setFF&ff_module="+module_name+"&ff_id="+id_value);
  if (id_value!="") {
   $.ajax({
        url: "index.php?to_pdf=true&module=HAA_FF&action=setFF&ff_module="+module_name+"&ff_id="+id_value,
        success: function (result) {
             var ff_fields = jQuery.parseJSON(result);

			 hideAllAttributes(ff_fields)//将所有的Attribute先变空，如果Attribute在FF中有设置，在后续的SetFF过程中会自动显示出来，否则这些扩展字段默认都不显示
             $.each(ff_fields.FF, function () { //针对读取到的FF模板，针对每个设置的条目进行处理
                setFF(this)
            })

            if (typeof(ff_fields.JS)!="undefined") {
             	eval($('<textarea>').html(htmlUnescape(ff_fields.JS)).text());
            }
        },
        error: function () { //失败
            alert('Error loading document');
        },
        async:false
    });
  }
}

function htmlUnescape(str){
    return str
        .replace(/&quot;/g, '"')
        .replace(/&#39;/g, "'")
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>')
        .replace(/&amp;/g, '&');
}

function setFF(FFObj) {
	//设置FlexFORM，基于triger_setFF函数读取到的Ajax结果，动态的调整界面字段
	//其中FFObj是FF_Fields中定义的需要变化的各个字段及属性
	//console.log(FFObj);//<-------------------如果你需要调试，可以将这一行的内容输出

	var view = action_sugar_grp1;
	//有些界面在EditView和DetailView中处理有所不同，因此先读取出当前界面是哪些，保存在View中
	//另外如果当前界面不是EditView或DetailView可能会有错误

	if (FFObj.fieldtype=="HIDE") { //将字段进行隐藏
		mark_field_disabled(FFObj.field,true,false);
	} else if(FFObj.fieldtype=="LIST"){
		mark_field_setlist(FFObj);
	} else if(FFObj.fieldtype=="CHECKBOX"){ 
		mark_field_setcheckbox(FFObj);
	} else if (FFObj.fieldtype=="PLACEHOLDER"){
		mark_field_disabled(FFObj.field,true,true);
	} else if (FFObj.fieldtype=="READONLY"){
		//write annother function to control
		//add by yuan.chen
		mark_field_readonly(FFObj.field,false);

	}


	//修改标签名称
	 if (FFObj.fieldtype!="HIDE" && FFObj.fieldtype!="PLACEHOLDER") {
	//如果是非隐藏字段
		//console.log(FFObj.field + " lab:"+FFObj.label+" "+(FFObj.label!=null))
		if (FFObj.label!=null && FFObj.label!="") {
			if (view=="EditView") {
				$("#"+FFObj.field+'_label').html(FFObj.label+":"); 
			} else if(view =="DetailView") {
				$("td[field='"+FFObj.field+"']").prev("td").html(FFObj.label+":");

			}
		}
	}

	if (view=="EditView") {
		//设定是否为必须值
		/*if (FFObj.att_required == 0||FFObj.att_required == '0' || FFObj.fieldtype!="HIDE" || FFObj.fieldtype!="PLACEHOLDER" || FFObj.fieldtype!="CHECKBOX"){
			//非必须
			$("#"+FFObj.field+'_label').children().remove(".required");
		} else {
			//必须
			if ($("#"+FFObj.field+'_label').is(":visible")) {
				$("#"+FFObj.field+"_label").append('<span class="required">*</span>');
				//只需要加入这个Class系统就会自动进行验证，不需要额外的内容
			}
		}*/
		//modify by chen zeng 20161117
		//if (FFObj.att_required == 0) {
		//modified by toney.wu 20161118
		//如果昌隐藏字段，都自动为非必须
		if (FFObj.att_required == 0||FFObj.att_required == '0' || FFObj.fieldtype=="HIDE" || FFObj.fieldtype=="PLACEHOLDER" || FFObj.fieldtype=="CHECKBOX"){
			//非必须
			$("#"+FFObj.field+'_label').children().remove(".required");
			removeFromValidate('EditView',FFObj.field);
		} else {
			//必须
			$("#"+FFObj.field+'_label').append('<span class="required">*</span>');
			addToValidate('EditView', FFObj.field,'varchar', 'true', FFObj.label);
		}
		//check_form方法影响范围过大，不应使用
		//END modify by chen zeng 20161117

		//设定默认值
		if (FFObj.default_val!=null&&FFObj.default_val!="") {
			var thisObj = $("#"+FFObj.field);
			$("#"+FFObj.field+":checkbox").attr('checked',(FFObj.default_val=='1'?'true':'false')); //针对Checkbox
			thisObj.val(FFObj.default_val);//针对其它input以及select对象
			$("#"+FFObj.field).trigger('change');//触发设置了默认值之后的chanage事件
		}
	}
}

/******************************
//在FF设置之前进行调用，用于将所有的Attribute对象进行隐藏，也就是所有的Attribute默认都是不显示的，除非在FF中进行了设置
//之后通过SetFF确定是否需要将已经隐藏的Attribute进行显示出来。
/*****************************/
function hideAllAttributes(ff_fields) {

	var i=1;
	while ($("#attribute"+i).length != 0 || $("#attribute"+i+"_c").length != 0) {
		//检查界面模块是否有Attribute存在，如果有就继续下一个，循环直到不再有新的Attribute存在

		var ff_defined=false;
        $.each(ff_fields.FF, function () { //针对读取到的FF模板，针对每个设置的条目进行处理
            if (this.field == "attribute"+i || this.field == "attribute"+i+"_c") {
            	//如果在当前FF中有针对当前Attribute字段的定义，则不对当前字段进行处理，直接以FF的定义进行处理
            	ff_defined=true;
            }
        })
        if (ff_defined==false) {
			//以下判断是将attributeX失效，还是将attributeX_c失效
			if ($("#attribute"+i).length != 0) {
				mark_field_disabled("attribute"+i,true,false);
			} else {
				mark_field_disabled("attribute"+i+"_c",true,false);
			}
		}
		i++;//查找下一个attribute
	}
}

function mark_field_setlist(fields) {
	var view=action_sugar_grp1;
	var field_name=fields.field;
	
	var pre_val = $("#"+field_name).val();
	console.log("pre_val = "+pre_val);
	if (view=='EditView') {
		var html="<select id='"+field_name+"' class='"+field_name+"' name='"+field_name+"'></select>";
		//$("#"+field_name+'_label').html(fields.label+":");
		$("#"+field_name).parent().html(html);
		$.ajax({
			url:"index.php?to_pdf=true&module=HAA_FF&action=get_HAA_FF&code_tag="+fields.listfilter,
			type:"POST",
			success:function(data){
				var fields = jQuery.parseJSON(data);
				var option="";
				for (var i = 0; i < fields.length; i++) {
					option+="<option value='"+fields[i]+"'>"+fields[i]+"</option>";
					if(fields[i]==pre_val){
						option+="<option selected ='selected' value='"+fields[i]+"'>"+fields[i]+"</option>";
					}else{
						option+="<option value='"+fields[i]+"'>"+fields[i]+"</option>";
					}
					
				}
				$("#"+field_name).append(option);
			}
		});
	}else if(view=='DetailView'){
		$("#"+field_name).parent().prev().html(fields.label+":");
	}
}

function mark_field_setcheckbox(fields){
	var view=action_sugar_grp1;
	var html="";
	var field_name=fields.field;
	if (view=='EditView') {
		$("#"+field_name+'_label').html(fields.label+":");
		var checkval=$("#"+field_name).val();
		html='<input id="'+field_name+'" name="'+field_name+'" type="checkbox" value="1"/>';//默认为false
		if (checkval==1) {
			html='<input id="'+field_name+'" name="'+field_name+'" type="checkbox" value="1" checked/>';
		}
		$("#"+field_name).val("0").hide();
		$("#"+field_name).parent().append(html);
	} else if(view=='DetailView'){
		var checkval=$("#"+field_name).html();
		html='<input id="'+field_name+'" name="'+field_name+'" type="checkbox" disabled value="1"/>';
		if (checkval==1) {
			html='<input id="'+field_name+'" name="'+field_name+'" type="checkbox" disabled value="1" checked/>';
		}
		$("#"+field_name).hide();
		$("#"+field_name).parent().html(html);
		$("#"+field_name).parent().prev().html(fields.label+":");
	}
}

function mark_field_disabled(field_name, hide_bool, keep_position=false, donot_clean=true) {
	var view = action_sugar_grp1;
	if(view == 'EditView') {
		mark_obj = ($("#"+field_name).length>0)?$("#"+field_name):$("[name='"+field_name+"'");
		mark_obj_lable = $("#"+field_name+"_label");
		mark_obj_tr = $("#"+field_name).closest("tr");

		if (donot_clean==false) {
		    //消除已经填写的数据
		    if ($("#"+field_name).prev().prop('nodeName')=="INPUT") {
		    	$("#"+field_name).removeAttr('value')
		    }
		    if ($("#"+field_name+"_id").prev().prop('nodeName')=="INPUT") {
		    	$("#"+field_name+"_id").removeAttr('value')
		    }
		}

	  if(hide_bool==true) {
	    	if (keep_position==false) {
	        	mark_obj.closest('td').css({"display":"none"});
	        	mark_obj_lable.css({"display":"none"});
	        	mark_obj_tr.append("<td></td><td></td>");

				//mark_obj_lable.css({"visibility":"hidden"});
				//toney.wu 20161007修改为通过display控制，否则界面上会大面积留下 
	      	}else{
	          	mark_obj.closest('td').css({"display":"table-column"});
	          	mark_obj_lable.css({"display":"table-column"});
				mark_obj.closest('td').css({"visibility":"hidden"});
				mark_obj_lable.css({"visibility":"hidden"});
	      	}
	    }else{
	        mark_obj.closest('td').css({"display":""});
	        mark_obj_lable.css({"display":""});
	        //Modefy By osmond.liu 20161123 更改字体颜色
	        //mark_obj.css({"color":"#efefef","background-Color":"#efefef;"});
	        mark_obj.css({"color":"#aaaaaa","background-Color":"#efefef;"});
	        //End Modefy By osmond.liu 20161123 更改字体颜色
	        mark_obj.attr("readonly",true);
	        mark_obj_lable.css({"color":"#aaaaaa"});
	    }
	    if (typeof validate != "undefined" && typeof validate['EditView'] != "undefined") {
	      removeFromValidate('EditView',field_name); //去除必须验证
	    }
	    $("#"+field_name+"_label").children().remove(".required");

	    if  (typeof $("#btn_"+field_name)!= 'undefined') {
	      $("#btn_"+field_name).css({"visibility":"hidden"});
	    }
	    if  (typeof $("#btn_clr_"+field_name)!= 'undefined') {
	      $("#btn_clr_"+field_name).css({"visibility":"hidden"});
	    }

	  } //End EditView
	  else if (view == 'DetailView') {
	    //DetailedView只需要考虑隐藏字段的情况
		  mark_obj_td = $("td[field='"+field_name+"']");
		  mark_obj_lable_td = mark_obj_td.prev("td");
		  mark_obj_tr = mark_obj_td.closest("tr");

	      if(hide_bool==true) {
		     //需要进行隐藏
	          if (keep_position==false) {
	          	//缩进隐藏
	          	if (mark_obj_td.css("display")!="none") {
		            mark_obj_td.hide(); //当前字段所在的TD隐藏
		            mark_obj_lable_td.hide();//当前字段之前的TD隐藏（标签TD)
					mark_obj_tr.append("<td></td><td></td>");
				//之前HIDE了两个单元格，在此补上，以防显示错位
				}
	          }else{
	          	//不缩进隐藏,直接接两个TD中的内容清空，不进行处理

	          }
			mark_obj_lable_td.html("");
			mark_obj_td.html("");
	     }
	  } //end DetailView

	  	//以下内容针对EditView和DetailView都有效，基于mark_obj_tr
  	    //判断是否当前行完全是空白了，如果已经完全是空白，则将当前行直接清空
  	    //如果当前行可以清空，则进一步判断，当前区域是否是空白，如果当前区域也是空白，直接将当前区域清空
		var hide_tr_bool=true;
		$.each(mark_obj_tr.children("td"), function() {
		  	if ($(this).text().trim()!="" && !($(this).css("visibility")=="hidden" || $(this).css("display")=="none")) {
		  		//如果当前字段有内容，并且有内容的字段没有隐藏，则认为当前行不为空
		  		hide_tr_bool=false;
		  		return false;//break for jquery each;
		  	}
		});


		if (hide_tr_bool==true) {//如果确定当前行已经完全为空了，则将当前行直接隐去。
			var hide_table_bool=true;
			//如果当前行可以直接隐去，则进一步判断是否当前行所在的整个区块都可以直接隐去
			$.each(mark_obj_tr.siblings().children("td"), function() {
			  	//if ($(this).text()!="" && !($(this).css("visibility")=="hidden" || $(this).css("display")=="none")) {
			  		if ($(this).text()!="" && ($(this).css("visibility")!="hidden" || $(this).css("display")!="none")) {
			  		//如果当前字段有内容，并且有内容的字段没有隐藏，则认为当前行不为空
			  		hide_table_bool=false;
			  		return false;//break for jquery each;
			  	};
			});


			if (hide_table_bool==true) {
				mark_obj_tr.closest("div").hide();//将当前行所在区块隐去
			}else{
				mark_obj_tr.hide();//将当前行隐去
			}
		}
}//end function mark_field_disabled

function mark_field_readonly(field_name) {
	  var view = action_sugar_grp1;
	  if(view == 'EditView') {
		mark_obj = ($("#"+field_name).length>0)?$("#"+field_name):$("[name='"+field_name+"'");
		mark_obj_lable = $("#"+field_name+"_label");
		mark_obj_tr = $("#"+field_name).closest("tr");

	   
		mark_obj.closest('td').css({"display":""});
		mark_obj_lable.css({"display":""});
		mark_obj.attr("disabled","disabled");
		
		mark_obj.css({"background-Color":"#efefef;"});
		mark_obj.attr("readonly",true);
		mark_obj_lable.css({"color":"#aaaaaa"});
	    
	    if (typeof validate != "undefined" && typeof validate['EditView'] != "undefined") {
	      removeFromValidate('EditView',field_name); //去除必须验证
	    }
	    $("#"+field_name+"_label .required").hide();

	    if  (typeof $("#btn_"+field_name)!= 'undefined') {
	      $("#btn_"+field_name).css({"visibility":"hidden"});
	    }
	    if  (typeof $("#btn_clr_"+field_name)!= 'undefined') {
	      $("#btn_clr_"+field_name).css({"visibility":"hidden"});
	    }
	    //消除已经填写的数据
	    //$("#"+field_name).val("");
	    if  (typeof $("#"+field_name+"_id")!= 'undefined') {
	      $("#"+field_name+"_id").val("");
	    }
		
		if($("#"+field_name).attr("class")=="date_input"){
		//console.log(field_name);
		var next_dates_array =$("#"+field_name).nextAll();
		next_dates_array.css({"visibility":"hidden"});
		}
		
		
	  }
}


function mark_field_enabled(field_name, not_required_bool) {
  // field_name = 字段名，不需要jquery select标志，直接写名字
  // not_required_bool如果为空或没有明确定义为true的话，字段为必须输入。如果=true则为非必须
  // not_required_bool = ture = 非必须，可选
  // not_required_bool = false = 必须
  // alert(not_required_bool);
  $("#"+field_name).css({"color":"#000000","background-Color":"#ffffff"});
  $("#"+field_name).attr("readonly",false);
  $("#"+field_name+"_label").css({"color":"#000000"})



  if(typeof not_required_bool == "undefined" || not_required_bool==false || not_required_bool=="") {
      //addToValidate('EditView', field_name,'varchar', 'true', $("#"+field_name+"_label").text());// 将当前字段标记为必须验证
      // 打上必须星标
      $("#"+field_name+'_label').children().remove(".required");
		if ($("#"+field_name+'_label').is(":visible")) {
			addToValidate('EditView', field_name,'varchar', 'true', $("#"+field_name+"_label").text());
			$("#"+field_name+"_label").append('<span class="required">*</span>');
			//只需要加入这个Class系统就会自动进行验证，不需要额外的内容
		}

  } else { // 如果不是必须的，则不显示星标
    // 直接Remove有时会出错，所有先设置为Validate再Remove
    addToValidate('EditView', field_name,'varchar', 'true', $("#"+field_name+"_label").text());
    removeFromValidate('EditView',field_name);
     // 去除必须验证
    /*$("#"+field_name+"_label .required").hide();*/
     $("#"+field_name+'_label').children().remove(".required");
  }

  if  (typeof $("#btn_"+field_name)!= 'undefined') {// 移除选择按钮
    $("#btn_"+field_name).css({"visibility":"visible"});
  }
  if  (typeof $("#btn_clr_"+field_name)!= 'undefined') {// 移除清空按钮
    $("#btn_clr_"+field_name).css({"visibility":"visible"});
  }
}


/***************************************
*FFCheckField用于，通过Ajax完成字段的合规性验证
*常用于:重名检测，关联性检测及更复杂的用途
***************************************
*Parameters:
* field_idStr string 当前被验证字段的ID名
* ajaxStr string 需要向HAA_FF/validateField.php传递的所有参数
* errMsg string 如果验证失败，显示的错误信息
* async_bool
***************************************
* Return
* Ture: 没有任何问题
* False : 有验证错误
* 其它备注：本函数一般与OverwriteSaveBtn()配合使用
***************************************/
	// for example,
	// ajaxStr="d&mode=locationName&val='+checkname+'&id=' + locaton_id"
	// errMsg="SUGAR.language.get('app_strings', 'LBL_DUPLICATED_ERR')"

function FFCheckField( field_idStr, ajaxStr, errMsg, async_bool=false) {
	//console.log('index.php?to_pdf=true&module=HAA_FF&action=validateField&'+ajaxStr);
	var result=false;
	var checkname =$("#"+field_idStr).val();

	if(checkname=="") {
		return
	}

	$("#"+field_idStr).after("<span id='"+field_idStr+"_validating'> <img src='"+SUGAR.themes.loading_image+"'/>"+ SUGAR.language.get('app_strings', 'LBL_VALIDATING')+"</span>");

	$.ajax({//
		url: 'index.php?to_pdf=true&module=HAA_FF&action=validateField&'+ajaxStr,
		async: async_bool,
		success: function (data) {
			console.log("checked result="+data+":"+(data=='0'||data==0));
			clear_all_errors();
			$("#"+field_idStr+"_validating").remove();
			//save_btn=$("#SAVE_HEADER, #SAVE_FOOTER")
			if (data=='0'||data==0) {
				//console.log('error');
/*					save_btn.prop('disabled', true);
				save_btn.addClass('disabled');*/
				add_error_style('EditView',field_idStr,errMsg);
				result=false;
			} else {
/*					save_btn.prop('disabled', false);
				save_btn.removeClass('disabled');*/
				result=true;
			}
		},//end sucess
		error: function () { //失败
			alert('Error loading AJAX for status check');
			$("#"+field_idStr+"_validating").remove();
		}//end error
	})//end ajax

	return result;
}

/***************************************
*OverwriteSaveBtn() 代替标准的SAVE及SAVE&Continue按钮，允许在提交前进行额外的逻辑校验
***************************************
**Parameters:
* preValidateFunction function 之前需要校验的逻辑，指向一个Function，
* 							   这里是检验逻辑，可能是一短简单的JS校验，也可能是一段耗时更长的Ajax检查
*                              这个逻辑完成了额外的验证逻辑与提示信息，并且返回true/false表示通过/不通过
*                              在这个逻辑中可以不包括check_form因为在本函数中提交前会最终确认一次check_form()
*结果：
*	 无返回值，这个函数会依据参数的结果，决定是否进行保存。如果参数结果为false则什么也不做。
*备注：
*本函数一般只用于EditView的场景，在EditView对应的JS中配合FFCheckField（）完成
***************************************/
function OverwriteSaveBtn(preValidateFunction) {
	SaveBtn = $('#SAVE_HEADER, #SAVE_FOOTER');
	SaveBtn.removeAttr('onclick');
	SaveBtn.attr("type","button"); //防止有Submit类的Button会自动提交，因此将类型变为Button

	SaveBtn.click(function(){
		//因为数据校验可能需要时间，在此可以先进行用户提示
		//因为Ajax检查时间可能很长，因此在检查前先显示出Dialog提示用户

		//setTimeout(SaveBtn.addClass("disabled").attr("disabled",true), 1000);
  		//SaveBtn.addClass("disabled").attr("disabled",true);
		var validateResult = preValidateFunction();

		if ($(".validation-message").length==0 && validateResult) {//如果验证没有问题
			//执行Save按钮正常执行的内容
			validateResult = check_form('EditView');//通过标准的check_form再做一次校验
			if (validateResult) {
				BootstrapDialog.show({
            		message: "<img src='"+SUGAR.themes.loading_image+"'/> "+SUGAR.language.get('app_strings', 'LBL_SAVING')+" & "+SUGAR.language.get('app_strings', 'LBL_LOADING_PAGE'),
        		});
 				//以下是Save按钮标准的保存内容
 				var _form = document.getElementById('EditView'); _form.action.value='Save'; if(validateResult)SUGAR.ajaxUI.submitForm(_form);return false;
 			}
		} else {
			//console.log("Something wrong");
  			//SaveBtn.removeClass("disabled").attr("disabled",false);
/*			BootstrapDialog.show({
        		message: SUGAR.language.get('app_strings', 'LBL_EMAIL_ERROR_GENERAL_TITLE'),
        		type:BootstrapDialog.TYPE_WARNING,
    		});			//dialog.close();
*/		}

	// /save_and_continue 在修改时会存在，新增时不存在
	});

	if ($("#save_and_continue").length>0) {
		SaveCtiBtn = $('#save_and_continue');
		SaveCtiBtn.removeAttr('onclick');
		SaveCtiBtn.attr("type","button"); //防止有Submit类的Button会自动提交，因此将类型变为Button

		SaveCtiBtn.click(function(){
			//因为数据校验可能需要时间，在此可以先进行用户提示
			var validateResult = preValidateFunction();
			if ($(".validation-message").length==0 && validateResult) {//如果验证没有问题
				//执行Save按钮正常执行的内容
				validateResult = check_form('EditView');//通过标准的check_form再做一次校验
				if (validateResult) {
					BootstrapDialog.show({
	            		message: "<img src='"+SUGAR.themes.loading_image+"'/> "+SUGAR.language.get('app_strings', 'LBL_SAVING')+" & "+SUGAR.language.get('app_strings', 'LBL_LOADING_PAGE'),
	        		});
	 				//以下是Save按钮标准的保存内容
					this.form.action.value='Save';if(check_form('EditView')){sendAndRedirect('EditView', 'Saving HAT_Asset_Locations...', '?action=ajaxui#ajaxUILoc=index.php%3Faction%3DEditView%26module%3DHAT_Asset_Locations%26record%3Db65eb9e1-0bf7-baf7-d775-58071f913196%26offset%3D2');}	 			}
			} else {
					console.log("Something wrong")
			}
		});
	};

}