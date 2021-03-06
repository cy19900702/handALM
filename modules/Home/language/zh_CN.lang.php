<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings  = array(
    'LBL_MODULE_NAME' => '主页',
    'LBL_MODULES_TO_SEARCH' => '搜索模块',
    'LBL_NEW_FORM_TITLE' => '新增联系人',
    'LBL_FIRST_NAME' => '名:',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_PHONE' => '电话:',
    'LBL_EMAIL_ADDRESS' => '电子邮件:',
    'LBL_MY_PIPELINE_FORM_TITLE' => '我的管道',
    'LBL_PIPELINE_FORM_TITLE' => '我的销售数据',
		'LBL_RGraph_PIPELINE_FORM_TITLE' => 'RGRAPH Pipeline By Sales Stage',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => '营销活动投资汇报率',
    'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => '我谈成结束的商业机会',
    'LNK_NEW_CONTACT' => '新增联系人',
    'LNK_NEW_ACCOUNT' => '新增客户',
    'LNK_NEW_OPPORTUNITY' => '新增商业机会',
    'LNK_NEW_LEAD' => '新增潜在客户',
    'LNK_NEW_CASE' => '新增客户反馈',
    'LNK_NEW_NOTE' => '新增备忘录',
    'LNK_NEW_CALL' => '安排电话',
    'LNK_NEW_EMAIL' => '存档电子邮件',
    'LNK_COMPOSE_EMAIL' => '撰写电子邮件',
    'LNK_NEW_MEETING' => '安排会议',
    'LNK_NEW_TASK' => '新增任务',
    'LNK_NEW_BUG' => '汇报缺陷',
    'LBL_ADD_BUSINESSCARD' => '新增名片',
    'ERR_ONE_CHAR' => '请至少输入一个文字或者数字再查找...',
    'LBL_OPEN_TASKS' => '我要完成的任务',
    'LBL_SEARCH_RESULTS_IN' => '中',
    'LNK_NEW_SEND_EMAIL' => '撰写电子邮件',
    'LBL_NO_ACCESS' => '你没有权限访问这个模块，请联系管理员解决。',
    'LBL_NO_RESULTS_IN_MODULE' => '--没有结果--',
    'LBL_NO_RESULTS' => '<h2>未发现结果。请重新查找。</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>查找技巧:</h3><ul><li>确信您选择了上面合适的分类。</li><li>拓宽您的查找标准</li><li>如果您还不可以找到结果，请使用那个模块的高级查找。</li></ul>',

  'LBL_RELOAD_PAGE' => '请<a href="javascript:window.location.reload()">重新加载窗口</a>来使用这个SuiteCRM Dashlet。',
  'LBL_ADD_DASHLETS' => '添加栏',
  'LBL_ADD_PAGE' => '添加页',
  'LBL_DEL_PAGE' => '删除页面',
  'LBL_WEBSITE_TITLE' => '网站',
  'LBL_RSS_TITLE' => '新闻Feed',
  'LBL_DELETE_PAGE' => '删除页',
  'LBL_CHANGE_LAYOUT' => '改变布局',
  'LBL_RENAME_PAGE' => '重命名页',
  'LBL_CLOSE_DASHLETS' => '关闭',
  'LBL_OPTIONS' => '选项',
  // dashlet search fields
  'LBL_TODAY'=>'今天',
  'LBL_YESTERDAY' => '昨天',
  'LBL_TOMORROW'=>'明天',
  'LBL_LAST_WEEK'=>'上周',
  'LBL_NEXT_WEEK'=>'下周',
  'LBL_LAST_7_DAYS'=>'过去7天',
  'LBL_NEXT_7_DAYS'=>'未来7天',
  'LBL_LAST_MONTH'=>'上月',
  'LBL_NEXT_MONTH'=>'下月',
  'LBL_LAST_QUARTER'=>'上个季度',
  'LBL_THIS_QUARTER'=>'这个季度',
  'LBL_LAST_YEAR'=>'去年',
  'LBL_NEXT_YEAR'=>'明年',
  'LBL_LAST_30_DAYS' => '过去30天',
  'LBL_NEXT_30_DAYS' => '未来30天',
  'LBL_THIS_MONTH' => '本月',
  'LBL_THIS_YEAR' => '今年',

    'LBL_MODULES' => '模块',
    'LBL_CHARTS' => '图表',
    'LBL_TOOLS' => '工具',
    'LBL_WEB' => '网络',
    'LBL_SEARCH_RESULTS' => '查找结果',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => '模块视图',
      'Portal' => '门户网站',
      'Charts' => '图表',
      'Tools' => '工具',
      'Miscellaneous' => '混合'),
  'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your administrator has set. Please remove a SuiteCRM Dashlet to add a new one.',
  'LBL_ADDING_DASHLET' => '添加 SuiteCRM 仪表板单独组件中...',
  'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet 已添入',
  'LBL_REMOVE_DASHLET_CONFIRM' => '您确定要移除这个新增栏吗?',
  'LBL_REMOVING_DASHLET' => '移除新增栏中...',
  'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet 已移除',
  'LBL_DASHLET_CONFIGURE_GENERAL' => '常规',
  'LBL_DASHLET_CONFIGURE_FILTERS' => '过滤',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '只显示我的记录',
  'LBL_DASHLET_CONFIGURE_TITLE' => '客户',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '显示行数:',

  'LBL_DASHLET_DELETE' => '删除 SuiteCRM Dashlet',
  'LBL_DASHLET_REFRESH' => '刷新 SuiteCRM Dashlet',
  'LBL_DASHLET_EDIT' => '编辑 SuiteCRM Dashlet',

    'LBL_TRAINING_TITLE' => '培训',

  'LBL_CREATING_NEW_PAGE' => '创建新页中...',
  'LBL_NEW_PAGE_FEEDBACK' => 'You have created a new page. You can add new content with the Add SuiteCRM Dashlets option.',
  'LBL_DELETE_PAGE_CONFIRM' => '您确定您要删除这一页吗?',
  'LBL_SAVING_PAGE_TITLE' => '保存页标题...',
  'LBL_RETRIEVING_PAGE' => '挽救页面...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => '我的 CRM',
  'LBL_HOME_PAGE_2_NAME' => '销售页面',
  'LBL_HOME_PAGE_3_NAME' => '客户支持',
  'LBL_HOME_PAGE_6_NAME' => '市场页面',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => '追踪',
  'LBL_CLOSE_SITEMAP' => '关闭',

    'LBL_SEARCH' => '查找',
    'LBL_CLEAR' => '清除',

    'LBL_BASIC_CHARTS' => '基本视图',
    'LBL_REPORT_CHARTS' => '报表视图',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => '我喜欢的报表',
    'LBL_GLOBAL_REPORT_CHARTS' => '全局团队报表',
    'LBL_MY_TEAM_REPORT_CHARTS' => '我团队的报表',
    'LBL_MY_SAVED_REPORT_CHARTS' => '我保存的报表',

  'LBL_DASHLET_SEARCH' => '查找 SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => '版本',
    'LBL_BUILD' => '创建',


    'LBL_VIEWLICENSE_COM' => '<P>这段程序是免费软件; 您可以重新分配和/或修改条款下的GNU通用公共许可证版本3 <a href="LICENSE.txt" target="_blank" class="body">  </a> 作为出版自由软体基金会包括附加许可所列的源代码头.</P>',
    'LBL_ADD_TERM_COM' => '<P>互动的用户界面在修改这个程序源和目标代码版本必须显示适当的法律通告, a按照条例第5条的GNU通用公共许可证的第3版。按照第七条第（二）的GNU通用公共许可证，第3版, 这些适当的法律告示必须保留展示的"动力SugarCRM公司"; 徽标。如果显示器的标志，是不是合理可行的技术原因，制定适当的法律告示必须展示话： "供电所的SugarCRM ".</P>',


  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar版本一致性',
  'LBL_AND' => "和",
  'LBL_ARE' => "是",
  'LBL_TRADEMARKS' => '商标',
  'LBL_OF' => '的',
  'LBL_FOUNDERS' => '创办人',
  'LBL_JOIN_SUGAR_COMMUNITY' => '加入SuiteCRM 社区',
  'LBL_DETAILS_SUGARFORGE' => '协作和开发 SuiteCRM 的扩展',
  'LBL_DETAILS_SUGAREXCHANGE' => '买入和卖出已被认证的 SuiteCRM 扩展',
  'LBL_TRAINING' => '培训',
  'LBL_DETAILS_TRAINING' => 'Learn about SuiteCRM using online and interactive learning content',
  'LBL_FORUMS' => '评论',
  'LBL_DETAILS_FORUMS' => 'Discuss SuiteCRM with expert community users and developers',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => '搜索知识库中的用户和开发者话题',
  'LBL_DEVSITE' => '开发者论坛',
  'LBL_DETAILS_DEVSITE' => 'Discover resources, tutorials, and helpful links to get you up to speed on SuiteCRM development',
 'LBL_GET_SUGARCRM_RSS' => '获取 SuiteCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SuiteCRM 新闻',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SuiteCRM 培训新闻',
  'LBL_SUGARCRM_FORUMS' => 'SuiteCRM 论坛',
  'LBL_SUGARFORGE_NEWS' => 'SuiteCRM 新闻',
  'LBL_ALL_NEWS' => '所有新闻',
  'LBL_SOURCE_CODE' => '源代码',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Barnabás Debreceni开发的PHP的模板引擎',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - NuSphere公司和Dietrich Ayala开发的一组PHP类，它允许开发者创建和使用web服务',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Mihai Bazon开发的用于输入日期的日历',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Wayne Munro开发的用于创建PDF文档的库',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - PHP实现的WebDAV服务器.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - Vincent Blavet开发的为Zip格式的文章提供压缩和抽取功能的库',
  'LBL_SOURCE_SMARTY' => 'Smarty - 一个PHP的模板引擎.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - 用于实施丰富的客户端功能的用户界面库.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - 一个对PHP的全面功能邮件转换类',
  'LBL_SOURCE_JSHRINK' => 'JShrink - A Javascript minifier written in PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - 允许快速的双工 blowfish 加密，无需mcrypt PHP扩展.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - 一个SAX 解析器为HTML 和其它非法形成的XML文档',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library -  Yahoo的扩展功能! 用户界面库是 Jack Slocum创建',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash 播放器检测和嵌入脚本.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - 所见即所得编辑器控制的网页浏览器，使用户可以编辑HTML内容',
  'LBL_SOURCE_EXT' => 'Ext - 一个客户端JavaScript框架用于搭建web应用.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA帮助您阻止自动滥用您的站点(例如：垃圾评论或虚假注册)通过使用CAPTCHA确保只有真实用户执行了操作.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - 一个生成PDF文档的PHP类 .',
  'LBL_SOURCE_CSSMIN' => 'CssMin - A css parser and minifier.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML -PHP的一个普通的SAML工具包。',
  'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit.  Native scrolling inside a fixed width/height element.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - An open source, object oriented web application framework for PHP5.',
  'LBL_SOURCE_PARSECSV' => '语法分析器CSV  - PHP的CSV数据语法分析器',
  'LBL_SOURCE_PHPJS' => 'php.js - 在JavaScript使用PHP功能',
  'LBL_SOURCE_PHPSQL' => 'PHP SQ语法分析器',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - A standards-compliant HTML filtering library.',
  'LBL_SOURCE_XHPROF' => 'XHProf - A function-level hierarchical profiler for PHP.',
  'LBL_SOURCE_ELASTICA' => 'Elastica - PHP client for the distributed search engine elasticsearch ',
  'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
  'LBL_SOURCE_JQUERY' => 'jQuery - jQuery is a fast, small, and feature-rich JavaScript library.',
  'LBL_SOURCE_JQUERY_UI' => 'jQuery UI - jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.',
  'LBL_SOURCE_OVERLIB' => 'OverlibMWS - The overlibmws library uses javascript for DHTML popups that serve as informational and navigational aids for websites.',

  'LBL_DASHLET_TITLE' => '我的网站',
  'LBL_DASHLET_OPT_TITLE' => '客户',
  'LBL_DASHLET_INCORRECT_URL' => '指定的网站合肥位置错误',
  'LBL_DASHLET_OPT_URL' => '网站地址',
  'LBL_DASHLET_OPT_HEIGHT' => '小工具高度(像素)',
  'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM 新闻',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => '探索 SuiteCRM',
	'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => '详细信息' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => '基本查找' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => '高级查找' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => '首页图标',
    'LBL_TOUR_HOME_DESCRIPTION' => '单击闪退到您的主页操控板。',
    'LBL_TOUR_MODULES' => '模块',
    'LBL_TOUR_MODULES_DESCRIPTION' => '您所有的重要模块都在此。',
    'LBL_TOUR_MORE' => '更多模块',
    'LBL_TOUR_MORE_DESCRIPTION' => '您其他的模块在此。',
    'LBL_TOUR_SEARCH' => '纯文本搜索',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => '通知',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => '帐号',
    'LBL_TOUR_PROFILE_DESCRIPTION' => '获取简介、设置和登出。',
    'LBL_TOUR_QUICKCREATE' => '快速创建',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => '可折叠的页脚',
    'LBL_TOUR_FOOTER_DESCRIPTION' => '简单扩展和折叠页脚。',
    'LBL_TOUR_CUSTOM' => '自定义程序',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => '自定义整合会到此。',
    'LBL_TOUR_BRAND' => '您的品牌',
    'LBL_TOUR_BRAND_DESCRIPTION' => '您的徽标在此。您可以使用鼠标划过来获取更多信息。',
    'LBL_TOUR_WELCOME' => '欢迎来到SuiteCRM',
    'LBL_TOUR_WATCH' => '查看SuiteCRM有何新内容',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => '更多信息请访问我们的程序',
    'LBL_TOUR_DONE' => '您完成了。',
    'LBL_TOUR_REFERENCE_1' => '你可以随时参考我们',
    'LBL_TOUR_REFERENCE_2' => '通过简介标签下的“支持”链接。',
    'LNK_TOUR_DOCUMENTATION' => '参考文件',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_ABOUT' => '关于',
    'LBL_CONTRIBUTORS' => '捐助者',
    'LBL_ABOUT_SUITE' => '关于SuiteCRM',
    'LBL_PARTNERS' => '合作伙伴',
    'LBL_FEATURING' => 'AOS、 AOW、AOR、AOP、AOE 和从新排定模块由SalesAgility提供。',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite由Jason Eggers提供',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps由Jeffrey J. Walters提供',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO 由Conscious Solutions提供',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'ResponseTap 已发行对 SuiteCRM 7.3 的贡献',


    'LBL_LANGUAGE_SPANISH' => '西班牙语翻译由Disytel openConsulting提供',

    'LBL_ABOUT_SUITE_1' => 'SuiteCRM是SugarCRM.的分支。网络上很多文章解释了需要SugarCRM 分支的理由。',
    'LBL_ABOUT_SUITE_2' => 'SuiteCRM在开源授权- GPL3下发布',
    'LBL_ABOUT_SUITE_3' => 'SuiteCRM 完整地兼容SugarCRM 6.5.x',
    'LBL_ABOUT_SUITE_4' => '所有此工程管理以及发展的SuiteCRM代码都会释放为开源 - GPL3',
    'LBL_ABOUT_SUITE_5' => '可以选择免费和付费来获得SuiteCRM的支援',

    'LBL_SUITE_PARTNERS' => '我们有热衷于开源的SuiteCRM忠诚的合作伙伴。如需要浏览我们的合作伙伴名单，请参考我们的网站。',

);
