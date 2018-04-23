<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/shop.css" type="text/css" rel="stylesheet" />
<link href="css/Sellerber.css" type="text/css"  rel="stylesheet" />
<link href="css/bkg_ui.css" type="text/css"  rel="stylesheet" />
<link href="font/css/font-awesome.min.css"  rel="stylesheet" type="text/css" />
<script src="js/jquery-1.9.1.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script src="js/shopFrame.js" type="text/javascript"></script>
<script src="js/Sellerber.js" type="text/javascript"></script>
<script src="js/layer/layer.js" type="text/javascript"></script>
<script src="js/laydate/laydate.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.dataTables.bootstrap.js"></script>
<title>广告分类</title>
</head>
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <script src="js/css3-mediaqueries.js"  type="text/javascript"></script>
  <![endif]-->
<body>
<div class="margin advertising" id="page_style">
  <div class="operation clearfix">
<button class="btn button_btn btn-danger" type="button" onclick=""><i class="fa fa-trash-o"></i>&nbsp;删除</button>
<span class="submenu"><a href="javascript:void(0)" name="" onclick="add_AD_sort()" class="btn button_btn bg-deep-blue" title="添加分类"><i class="fa  fa-edit"></i>&nbsp;添加分类</a></span>
<div class="search  clearfix">
 <label class="label_name">搜索：</label><input name="" type="text"  class="form-control col-xs-6"/><button class="btn button_btn bg-deep-blue " onclick=""  type="button"><i class="fa  fa-search"></i>&nbsp;搜索</button>
</div>

</div>
<!--分类管理-->
<div class="sort_list">
 <table class="table table_list table_striped table-bordered" id="sample-table">
  <thead>
  <tr>
  <th width="30"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
   <th width="100">排序</th>
   <th>分类名称</th> 
   <th>介绍</th>   
   <th width="150">广告数量</th>
   <th width="180">添加时间（最新）</th>
   <th width="150">状态</th>
   <th >备注</th>
   <th width="200">操作</th>
   </tr>   
  </thead>
  <tbody>
   <tr>
   </tr>
  </tbody>
 </table>
</div>
</div>
<!--添加分类-->
<div id="ad_sort" class="display">
 <div class="add_style">
  <ul>
   <li class="clearfix"><label class="label_name col-xs-2">分类名称：&nbsp;&nbsp;</label><span class="cont_style col-xs-9"><input name="分类名称" type="text" id="form-field-1" class="col-xs-10 col-sm-5" style="width:450px"></span></li>
   <li class="clearfix"><label class="label_name col-xs-2">状&nbsp;&nbsp;态：&nbsp;&nbsp;</label>
   <div class="Add_content col-xs-9">
     <label><input name="form-field-radio2" type="radio" checked="checked" class="ace">
     <span class="lbl">显示</span></label>&nbsp;&nbsp;&nbsp;
     <label><input name="form-field-radio2" type="radio" class="ace">
     <span class="lbl">隐藏</span></label>
     </div>
     </li >
      <li class="clearfix"><label class="label_name col-xs-2">描&nbsp;&nbsp;述：&nbsp;&nbsp;</label><span class="cont_style col-xs-9"><textarea name="权限描述" class="form-control col-xs-12 col-sm-5" id="form_textarea" placeholder="" onkeyup="checkLength(this);"></textarea><span class="wordage">剩余字数：<span id="sy" style="color:Red;">200</span>字</span></span></li>
  </ul>
 </div>
</div>
<!--添加广告-->
<div id="Advert_add_style" class="Advert_add_style padding display" >
 <div class="add_style">
 <ul>
  <li class="clearfix"><label class="label_name col-xs-2">图片名称：&nbsp;&nbsp;</label><span class="cont_style col-xs-9"><input name="图片名称" type="text" id="form-field-1" class="col-xs-10 col-sm-5" style="width:450px"></span></li>
  <li class="clearfix"><label class="label_name col-xs-2">显示排序：&nbsp;&nbsp;</label><span class="cont_style col-xs-9"><input name="排序" type="text" id="form-field-1" placeholder="0" class="col-xs-10 col-sm-5" style="width:50px"></span></li>
  <li class="clearfix"><label class="label_name col-xs-2">链接地址：&nbsp;&nbsp;</label><span class="cont_style col-xs-9"><input name="地址" type="text" id="form-field-1" placeholder="地址" class="col-xs-10 col-sm-5" style="width:450px"></span></li>
   <li class="clearfix"><label class="label_name col-xs-2">状&nbsp;&nbsp;态：&nbsp;&nbsp;</label>
   <div class="Add_content col-xs-9">
     <label><input name="form-field-radio1" type="radio" checked="checked" class="ace">
     <span class="lbl">显示</span></label>&nbsp;&nbsp;&nbsp;
     <label><input name="form-field-radio1" type="radio" class="ace">
     <span class="lbl">隐藏</span></label>
     </div>
     </li >
     <li class="clearfix">
     <label class="label_name col-xs-2">设置时间：&nbsp;&nbsp;</label> 
    <div class="Add_content col-xs-9">
    <label class="l_f checkbox_time"><input type="checkbox" name="checkbox" class="ace" id="checkbox"><span class="lbl">是</span></label>
    <div class="Date_selection" style="display:none">
      <span class="label_name">开始日：</span><p class="laydate-icon" id="start" style="width:160px; margin-right:10px; height:30px; line-height:30px; float:left"></p>
      <span class="label_name">结束日：</span><p class="laydate-icon" id="end" style="width:160px;height:30px; line-height:30px; float:left"></p>
    </div>
    </div>   
    </li>
     <li class="clearfix"><label class="label_name col-xs-2">图&nbsp;&nbsp;片：&nbsp;&nbsp;</label>
     <span class="cont_style col-xs-9">        
       <div id="preview" class="preview_img"><img id="imghead" border=0 src="images/image.png" /></div>
       <div class="fileInput ">
        <input type="file" onchange="previewImage(this)" name="upfile" id="upfile" class="upfile"/>
        <input class="upFileBtn" type="button" value="上传图片" onclick="document.getElementById('upfile').click()" />
        </div>
      </span>
  </li>
 </ul>
 </div>
</div>
</body>
</html>
<script>
var dataSet=[
 ['<label><input type="checkbox" class="ace"><span class="lbl"></span></label>','1','首页轮播图（大）','首页轮播图','4','2016-08-28 15:23:12','启用','','<a href="javascript:void()" onclick="Advert_add(this,'+102+')" class="btn bg-deep-blue  operation_btn">添加</a> <a href="javascript:void()" onclick="picture_del(this,'+10001+')" class="btn btn-danger operation_btn">删除</a> <a href="advert_detailed_left.html" onclick=Advert_info(this,'+234+')" class="btn bg-deep-blue operation_btn">查看</a>'],
 ];
jQuery(function($) {
				var oTable1 = $('#sample-table').dataTable( {
				"data": dataSet,
				"width":"100%",	
				"bLengthChange":false,
				"iDisplayLength": 20,
				//"columns" : _tableCols,
				"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		        "bStateSave": true,//状态保存
				"searching": false,
		        "aoColumnDefs": [{"orderable":false,"aTargets":[0,2,3]
				}]
		
			   });
			
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			});
	/*产品-删除*/
function picture_del(obj,id){
	layer.confirm('确认要删除吗？',{icon:0,},function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
/*****添加广告******/
function Advert_add(obj ,id){
	layer.open({
        type: 1,
        title: '添加广告',
		maxmin: true, 
		shadeClose: false, //点击遮罩关闭层
        area : ['800px' , ''],
        content:$('#Advert_add_style'),
		btn:['提交','取消'],
		yes:function(index,layero){	
		 var num=0;
		 var str="";
     $(".add_style input[type$='text']").each(function(n){
          if($(this).val()=="")
          {
               
			   layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
                title: '提示框',				
				icon:0,								
          }); 
		    num++;
            return false;            
          } 
		 });
		  if(num>0){  return false;}	 	
          else{
			  layer.alert('添加成功！',{
               title: '提示框',				
			icon:1,		
			  });
			   layer.close(index);	
		  }		  		     				
		}
    });	
}
/***************添加分类***********/
function add_AD_sort( ){
	  layer.open({
        type: 1,
        title: '添加分类',
		maxmin: false, 
		shadeClose: false, //点击遮罩关闭层
        area : ['600px' , ''],
        content:$('#ad_sort'),
		btn:['添加','取消'],
			yes:function(index,layero){	
		 var num=0;
		 var str="";
		  $(".add_style input[type$='text']").each(function(n){
          if($(this).val()=="")
          {
               
			   layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
                title: '提示框',				
				icon:0,								
          }); 
		    num++;
            return false;            
          } 
		 });
		  if(num>0){  return false;}	 	
          else{
			  layer.alert('添加成功！',{
               title: '提示框',				
			icon:1,		
			  });
			   layer.close(index);	
		  }	
		 
		 }
	  })
	}
 /*checkbox激发事件*/
$('#checkbox').on('click',function(){
	if($('input[name="checkbox"]').prop("checked")){
		 $('.Date_selection ').css('display','block');
		}
	else{
		
		 $('.Date_selection').css('display','none');
		}	
	});
  /******时间设置*******/
  var start = {
    elem: '#start',
    format: 'YYYY-MM-DD',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};
var end = {
    elem: '#end',
    format: 'YYYY-MM-DD',
    min: laydate.now(),
    max: '2099-06-16',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，重置开始日的最大日期
    }
};
laydate(start);
laydate(end);
/*******滚动条*******/
$("body").niceScroll({  
	cursorcolor:"#888888",  
	cursoropacitymax:1,  
	touchbehavior:false,  
	cursorwidth:"5px",  
	cursorborder:"0",  
	cursorborderradius:"5px"  
});
function checkLength(which) {
	var maxChars = 200; //
	if(which.value.length > maxChars){
	   layer.open({
	   icon:2,
	   title:'提示框',
	   content:'您出入的字数超多限制!',	
    });
		// 超过限制的字数了就将 文本框中的内容按规定的字数 截取
		which.value = which.value.substring(0,maxChars);
		return false;
	}else{
		var curr = maxChars - which.value.length; //200 减去 当前输入的
		document.getElementById("sy").innerHTML = curr.toString();
		return true;
	}
};
</script>
