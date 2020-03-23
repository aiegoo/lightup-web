function InitTinyMCE(formId)
{
	InitTinyMCE(formId, "");
}

function InitTinyMCE(formId, isReadonly)
{
	tinyMCE.init({
	// General options
	selector : "#" + formId,
	theme : "advanced",
	language : "ko",

	plugins : "table,advlink,preview,media,contextmenu,paste,directionality,noneditable,visualchars",
	remove_script_host : true,

	forced_root_block : '',
	force_br_newlines : true,
	force_p_newlines : false,
	remove_linebreaks : false,
	remove_trailing_nbsp : false,
	verify_html : false,

	//content_css : "css/editor.css",
	content_css : "/red/1st/css/table.css,/red/1st/css/editor.css",
	skin : "default",
	readonly: isReadonly,

	// Theme options
        theme_advanced_fonts : "굴림=Gulim,New Gulim,SunGulim;돋움=Dotum,SunDotum,sans-serif;바탕=Batang;나눔고딕=NanumGothic;맑은고딕=Malgun Gothic;Comic Sans MS=Comic Sans MS;Helvetica=Helvetica;Tahoma=Tahoma;Verdana=Verdana",
        theme_advanced_font_sizes : "1,2,3,4,5,6",
	theme_advanced_buttons1 : "forecolor,backcolor,|,bold,underline,strikethrough,link,unlink,|,undo,redo,|,justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,imgUp,code,preview",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_buttons4 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : true,
	theme_advanced_resizing_use_cookie : false,

	});
}
