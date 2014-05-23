<?php exit;?>a:3:{s:8:"template";a:9:{i:0;s:49:"F:/wamp/www/9gui/themes/red_two/exchange_list.dwt";i:1;s:56:"F:/wamp/www/9gui/themes/red_two/library/page_header1.lbi";i:2;s:57:"F:/wamp/www/9gui/themes/red_two/library/category_tree.lbi";i:3;s:51:"F:/wamp/www/9gui/themes/red_two/library/history.lbi";i:4;s:54:"F:/wamp/www/9gui/themes/red_two/library/ur_here_rs.lbi";i:5;s:56:"F:/wamp/www/9gui/themes/red_two/library/exchange_hot.lbi";i:6;s:57:"F:/wamp/www/9gui/themes/red_two/library/exchange_list.lbi";i:7;s:49:"F:/wamp/www/9gui/themes/red_two/library/pages.lbi";i:8;s:55:"F:/wamp/www/9gui/themes/red_two/library/page_footer.lbi";}s:7:"expires";i:1400809808;s:8:"maketime";i:1400806208;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="101BL v2.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>积分商城_玖櫃</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/red_two/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script><script type="text/javascript" src="js/jquery.json-2.4.min.js"></script><script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/global.js"></script><script type="text/javascript" src="js/compare.js"></script></head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
</script>
<script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript">
<!--
$(function($) {
	$("#search_input_btn").on("click",function(){
		$("#searchForm").submit();
	});
	
	$(".goodslist li,.goodslist-cate li").hover(
		function(){
			$(this).addClass("gl-li-focus");
		},
		function(){
			$(this).removeClass("gl-li-focus");
		}
	);
	$('#brandWall .bxdl-list a').each(function(){
		$(this).hover(function(){
			var $text = $(this).find('img').attr('alt');
			var $span ='<span>' + $text + '</span>';
			$(this).append($span).css('position','relative');
		},function(){
			$(this).css('position','');
			$(this).find('span').remove();
		})
	});
});
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
        return true;
    }
    else
    {
        alert("请输入搜索关键词！");
        return false;
    }
}
-->
</script>
<div class="wrap cl tophead_wrap">
	<div class="sitewith">
		<div class="fl" id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
		
		<div class="toptel fr">服务热线：<span class="toptelstyle">0379 - 6677 7766</span></div>
	</div>
</div>
<div class="wrap topmain_wrap">
	<div class="sitewith">
		<div class="fl"><a href="index.php"><img src="themes/red_two/images/logo1.jpg" height="70px;" /></a></div>
		
         <div class="hd_head_searchss fl">
                <form name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
                  <input type="text" maxlength="100" style="color:#333333;" name="keywords" id="keyword" class="hd_input_test"  value="" >
                  
                  <input class="hd_search_btn" type="submit" style="width:98px" value="搜 索" >
                  </input>
                </form>
          </div>
      
		
		<div class="fr"><img src="themes/red_two/images/logo3.jpg" height="70px;" /></div>
	</div>
</div>
<div class="wrap nav_wrap">
	<div class="sitewith top-navicat">
		<ul class="nav-menu-list">
			<li><a href="index.php">首页</a></li>
						<li><a href="category-2-b0.html"   >价格</a></li>
						<li><a href="search-promotion.html"   >限时抢购</a></li>
						<li><a href="search-best.html"   >玖櫃推荐</a></li>
						<li><a href="exchange.php"   class="nav-a-curt" >积分商城</a></li>
						<li><a href="article-15.html" target="_blank"   >洛阳市分店地址</a></li>
						<li><a href="article-16.html" target="_blank"   >联盟商家</a></li>
					</ul>
		<div class="shopcart fr" id="ECS_CARTINFO">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
	</div>
</div>
<div class="block clearfix">
  
  <div class="AreaL">
    
  
    <div id="category_tree">
  <div class="tit">所有商品分类</div>
  <img src="themes/red_two/images/btn_unfold.gif" style="display:none;">
	  <dl class="clearfix" >
		   <div class="box1 cate" id="cate">
						<h1 onclick="tab(0)"  		
                                style="border-top:none"
                 	>		 		
                <span class="f_l">
                <img src="themes/red_two/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;">
                </span>
                <a href="category-1-b0.html" class="  f_l">国家</a>
			</h1>
			<ul style="display:none" >
                                 <a class="over_2" href="category-13-b0.html">法国</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-14-b0.html">意大利</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-15-b0.html">德国</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-16-b0.html">西班牙</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-17-b0.html">匈牙利</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-18-b0.html">加拿大</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-19-b0.html">俄罗斯</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-20-b0.html">澳大利亚</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-21-b0.html">智利</a>  
                <div class="clearfix">
                                </div>   
                			</ul>
			<div style="clear:both"></div>
						<h1 onclick="tab(1)"  		
                 	>		 		
                <span class="f_l">
                <img src="themes/red_two/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;">
                </span>
                <a href="category-2-b0.html" class="  f_l">价格</a>
			</h1>
			<ul style="display:none" >
                                 <a class="over_2" href="category-22-b0.html">0-50元</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-23-b0.html">51-100元</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-24-b0.html">101-150元</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-25-b0.html">151-200元</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-26-b0.html">200-400元</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-27-b0.html">440元以上</a>  
                <div class="clearfix">
                                </div>   
                			</ul>
			<div style="clear:both"></div>
						<h1 onclick="tab(2)"  		
                 	>		 		
                <span class="f_l">
                <img src="themes/red_two/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;">
                </span>
                <a href="category-3-b0.html" class="  f_l">种类</a>
			</h1>
			<ul style="display:none" >
                                 <a class="over_2" href="category-6-b0.html">红葡萄酒</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-7-b0.html">白葡萄酒</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-8-b0.html">香槟起泡酒</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-9-b0.html">冰酒</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-10-b0.html">浆果酒</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-11-b0.html">啤酒</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-12-b0.html">伏特加</a>  
                <div class="clearfix">
                                </div>   
                			</ul>
			<div style="clear:both"></div>
						<h1 onclick="tab(3)"  		
                 	>		 		
                <span class="f_l">
                <img src="themes/red_two/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;">
                </span>
                <a href="category-5-b0.html" class="  f_l">酒具</a>
			</h1>
			<ul style="display:none" >
                                 <a class="over_2" href="category-28-b0.html">启瓶器</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-29-b0.html">红酒杯</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-30-b0.html">香槟杯</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-31-b0.html">烈酒杯</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-32-b0.html">醒酒器</a>  
                <div class="clearfix">
                                </div>   
                			</ul>
			<div style="clear:both"></div>
						<h1 onclick="tab(4)"  		
                 	>		 		
                <span class="f_l">
                <img src="themes/red_two/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;">
                </span>
                <a href="category-33-b0.html" class="  f_l">其他</a>
			</h1>
			<ul style="display:none" >
                                 <a class="over_2" href="category-34-b0.html">酒类杂志</a>  
                <div class="clearfix">
                                </div>   
                                 <a class="over_2" href="category-35-b0.html">酒类书籍</a>  
                <div class="clearfix">
                                </div>   
                			</ul>
			<div style="clear:both"></div>
			 
			</div>
		</dl>
</div>
<div class="blank"></div>
 
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = " block"
			obj_img.item(id).src = "themes/red_two/images/btn_unfold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/red_two/images/btn_fold.gif"
		}
}
</script>  
    <div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>    
    
    
    
  </div>
  
  
  <div class="AreaR">
  <div class="box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="exchange.php">积分商城</a> 
</div>
</div>
<div class="blank"></div>    
        <div class="box">
  <div class="box_1">
    <h3>
      <span>商品列表</span>
      <form method="GET" class="sort" name="listform">
        显示方式：
        <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/red_two/images/display_mode_list.gif" alt=""></a>
        <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/red_two/images/display_mode_grid_act.gif" alt=""></a>
        <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/red_two/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
        <select name="sort" style="border:1px solid #ccc;">
        <option value="goods_id" selected>按上架时间排序</option><option value="exchange_integral">按积分排序</option><option value="last_update">按更新时间排序</option>        </select>
        <select name="order" style="border:1px solid #ccc;">
        <option value="DESC" selected>倒序</option><option value="ASC">正序</option>        </select>
        <input type="image" name="imageField" src="themes/red_two/images/bnt_go.gif" alt="go"/>
        <input type="hidden" name="category" value="0" />
        <input type="hidden" name="display" value="grid" id="display" />
        <input type="hidden" name="integral_min" value="0" />
        <input type="hidden" name="integral_max" value="0" />
        <input type="hidden" name="page" value="1" />
      </form>
    </h3>
    <form name="compareForm" method="post">
            <div class="clearfix goodsBox" style="border:none; padding:11px 0 10px 5px;">
                              <div class="goodsItem">
              <a href="exchange-id14.html"><img src="images/201403/thumb_img/14_thumb_G_1395617579293.jpg" alt="4.8°百加得冰锐朗姆预调..." class="goodsimg" /></a><br />
              <p><a href="exchange-id14.html" title="4.8°百加得冰锐朗姆预调酒蓝莓味 275ml">4.8°百加得冰锐朗姆预调...</a></p>
              消耗积分：<font class="shop_s">100</font><br />
            </div>
                                            </div>
        </form>
  </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
  window.onload = function()
  {
    Compare.init();
    fixpng();
  }
  var button_compare = '';
</script>    
<form name="selectPageForm" action="/9gui/exchange.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l " style="margin-right:10px;">总计 <b>1</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
    
  </div>
  
</div>
<div id="footer" class="rs_footer">
<div class="sitewith rs_footer_ex">
</div>
<div id="VjiaFooter" class="block">
    
  <div >
    <div class="links clearfix"> 
       
       
       
      <a href="http://www.101bianli.com" target="_blank" title="101便利">101便利</a>　　｜　　
       
      <a href="http://www.baidu.com" target="_blank" title="百度">百度</a>　　｜　　
       
      <a href="http://www.souhu.con" target="_blank" title="搜狐">搜狐</a>　　｜　　
       
      <a href="http://www.goole.com" target="_blank" title="谷歌">谷歌</a>　　｜　　
       
      <a href="http://www.360.com" target="_blank" title="360知道">360知道</a>　　｜　　
       
       
    </div>
  </div>
  <div class="blank"></div>
   
</div>
  <p class="ft_footer_link"> 
     
     
     
  </p>
   
    <p>ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank">豫ICP备12019960号-1</a></p>
    
  <p>  
    </p>
  <p>
    
    
     
     
     
     
     
     
     
     
     
     
     
    </p>
  <p>&copy; 2012-2014 RockSnap 版权所有，并保留所有权利。</p>
  <p> </p>
</div>
<div class="ft_pic_link" id="footerbanner2LazyLoad"> <a href="#"><img src="themes/red_two/images/foot_img1.jpg"></a>| <a href="#"><img src="themes/red_two/images/foot_img2.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img3.jpg"></a>|<a><img src="themes/red_two/images/foot_img4.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img5.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img6.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img7.jpg"></a>|<a href="h#"><img src="themes/red_two/images/foot_img8.jpg"></a>|</div>
<div class="rs_float_window">
	<div class="rs_float_msg"><a href="message.php" target="_blank"><img src="themes/red_two/images/rs_float_window_msg.jpg" /></a></div>
		<div class="rs_float_qq" id="qqflip">
		<span class="flipmove"><img src="themes/red_two/images/rs_float_window_qq.jpg" /></span>
		<span class="qqlist">
									<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=123123123&amp;Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:123123123:50" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
												<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=100000&amp;Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:100000:50" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
								</span>
	</div>
</div>
<script type="text/javascript">
$(function($) {
	$('#qqflip').hover(
		function() { //On hover...
			$(this).find(".flipmove").stop().animate({marginTop: "-100px"}, 250);
		},
		function() { //On hover out...
			$(this).find(".flipmove").stop().animate({marginTop: "0"}, 250);
		}
	);
});
</script></body>
</html>