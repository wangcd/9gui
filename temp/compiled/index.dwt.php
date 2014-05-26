<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="101BL v2.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_page">
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="wrap ban_wrap">
	<div class="sitewith">
		<div class="idxban-left">
			<?php echo $this->fetch('library/category_tree_index.lbi'); ?>
		</div>
		<div class="idxban-right">
			<?php echo $this->fetch('library/index_ad.lbi'); ?>
		</div>
	</div>
</div>




<div class="wrap">
	<div class="sitewith">
		<div class="idxmid-left">

			
<!--
			<div class="noticbox box-border mt8">
				<?php echo $this->_var['shop_notice']; ?>  
			</div>
 -->           
			
            
			
<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

			<?php if ($this->_var['rand_sold_list']): ?>
			<div class="left-box box-border mt8">
				<div class="left-box-tit">
					<h2>发货订单</h2>
				</div>
				<div class="left-box-dl" id="orderQueue_div">
					<ul>
					<?php $_from = $this->_var['rand_sold_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rsorder');if (count($_from)):
    foreach ($_from AS $this->_var['rsorder']):
?>
						<li><a href="<?php echo $this->_var['rsorder']['url']; ?>"><?php echo $this->_var['rsorder']['goods_name']; ?></a></li>
						<li><?php echo $this->_var['rsorder']['buyer']; ?>** (<?php echo $this->_var['rsorder']['phone']; ?>) &nbsp;&nbsp;<?php echo $this->_var['rand_sold_date']; ?> </li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
           
		</div>
		<div class="idxmid-right">
<script>
$(function(){
	$(".qh_title").mouseover(
		function(){
			$(".qh_box div").removeClass("qh_title2");
			$(".qh_box div").addClass("qh_title1");
			$(this).addClass("qh_title2");
			$(".a0,.a1,.a2,.a3").css("display","none");
			$(".a"+$(this).index()).css("display","block");
		}
	);
})
</script>
           <div class="qh_box">
                <div class="qh_title qh_title2">精品推荐</div>
                <div class="qh_title qh_title1">本月热销</div>
                <div class="qh_title qh_title1">新品上架</div>
                <div class="qh_title qh_title1">限时抢购</div>
            </div>        
            <div class="qh_con">
                <?php echo $this->fetch('library/recommend_best.lbi'); ?>
                <?php echo $this->fetch('library/recommend_hot.lbi'); ?>

                <?php echo $this->fetch('library/recommend_new.lbi'); ?>

                <?php echo $this->fetch('library/recommend_time.lbi'); ?>

            </div>
		</div>
	</div>
</div>

<div class="cl pt8"></div>

<div class="wrap">
	<div class="sitewith fullbox box-border">
		<div class="box-tit brand-tit">
			<h2>品牌专区</h2>
		</div>
		<div class="brand-box-dl" id="brandWall">
		
<?php $this->assign('ads_id','2'); ?><?php $this->assign('ads_num','5'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
<?php echo $this->fetch('library/brands.lbi'); ?>

		</div>
	</div>

	<div class="cl pt8"></div>
    
<div class="wrap">
	<div class="sitewith">
		<div class="idxmid-left">

			
<!--
			<div class="noticbox box-border mt8">
				<?php echo $this->_var['shop_notice']; ?>  
			</div>
 -->           
			
            
			
<?php $this->assign('ads_id','6'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
<?php echo $this->fetch('library/top10.lbi'); ?>

           
		</div>
		<div class="idxmid-right">
<script>
$(function(){
	$(".showss:eq(1)").css("display","block");
	$(".fl_title:eq(0)").addClass("fl_title2");
	$(".fl_title").mouseover(		
		function(){
			$(".fl_box div").removeClass("fl_title2");
			$(".fl_box div").addClass("fl_title1");
			$(this).addClass("fl_title2");
			$(".showss").css("display","none");
			var a=$(this).index();
			if(a==0){
				$(".showss:eq(1)").css("display","block");
			}else if(a==1){
				$(".showss:eq(2)").css("display","block");
			}else if(a==2){
				$(".showss:eq(3)").css("display","block");
			}else if(a==3){
				$(".showss:eq(4)").css("display","block");
			}
			
		}
	);
})
</script>
           <div class="fl_box">
                <div class="fl_title fl_title1">一号专柜</div>
                <div class="fl_title fl_title1">二号专柜</div>
                <div class="fl_title fl_title1">三号专柜</div>
                <div class="fl_title fl_title1">四号专柜</div>
            </div>        
            <div class="fl_con">

				
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_3']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_3']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_5']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_5']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>


            </div>
		</div>
	</div>
</div>
</div>
<div style="display:none;">

<?php $this->assign('ads_id','4'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
<?php $this->assign('ads_id','4'); ?><?php $this->assign('ads_num','3'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>



</div>
<script type="text/javascript" src="themes/red_two/js/marquee.js"></script>

<script type="text/javascript">
<!--
$(function($) {
	$JQ_cat_ad_data = $(".JQ_cat_ad_data");
	$(".JQ_cat_ad").each(function(i){
		$(this).html($JQ_cat_ad_data.eq(i).html());
	});
	
	$("#orderQueue_div").scrollbox({
		switchItems:2
	});
	
});
-->
</script>


<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','2'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

<?php echo $this->fetch('library/scroll.lbi'); ?>
<div class="show_article_list">
	<div class="article_list_bg">
    	<div class="inde_pzdd_more"><a href="">更多>></a></div>
        <div class="inde_pzdd_more"><a href="">更多>></a></div>
        <div class="inde_pzdd_more"><a href="">更多>></a></div>
    </div>
	<div class="article_list_content">
    
    
    

<?php $this->assign('articles',$this->_var['articles_11']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_11']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
<?php $this->assign('articles',$this->_var['articles_12']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_12']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
<?php $this->assign('articles',$this->_var['articles_13']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_13']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
    
    
    </div>       
</div>    



<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
