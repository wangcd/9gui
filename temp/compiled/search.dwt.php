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

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.8.3.min.js,jquery.json-2.4.min.js,utils.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header1.lbi'); ?>
<div class="block clearfix">
  
  <div class="AreaL">
    
<?php echo $this->fetch('library/category_tree.lbi'); ?>

    

    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="AreaR">
  
  
  <?php if ($this->_var['action'] == "form"): ?>
  
  <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['advanced_search']; ?></span></h3>
    <div class="boxCenterList">
      <form action="search.php" method="get" name="advancedSearchForm" id="advancedSearchForm">
    <table border="0" align="center" cellpadding="3">
      <tr>
        <td valign="top"><?php echo $this->_var['lang']['keywords']; ?>：</td>
        <td>
          <input name="keywords" id="keywords" type="text" size="40" maxlength="120" class="inputBg" value="<?php echo $this->_var['adv_val']['keywords']; ?>" />
          <label for="sc_ds"><input type="checkbox" name="sc_ds" value="1" id="sc_ds" <?php echo $this->_var['scck']; ?> /><?php echo $this->_var['lang']['sc_ds']; ?></label>
          <br /><?php echo $this->_var['lang']['searchkeywords_notice']; ?>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->_var['lang']['category']; ?>：</td>
        <td><select name="category" id="select" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_category']; ?></option><?php echo $this->_var['cat_list']; ?></select>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->_var['lang']['brand']; ?>：</td>
        <td><select name="brand" id="brand" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_brand']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['brand_list'],'selected'=>$this->_var['adv_val']['brand'])); ?>
          </select>
        </td>
      </tr>
      <tr>
        <td><?php echo $this->_var['lang']['price']; ?>：</td>
        <td><input name="min_price" type="text" id="min_price" class="inputBg" value="<?php echo $this->_var['adv_val']['min_price']; ?>" size="10" maxlength="8" />
          -
          <input name="max_price" type="text" id="max_price" class="inputBg" value="<?php echo $this->_var['adv_val']['max_price']; ?>" size="10" maxlength="8" />
        </td>
      </tr>
      <?php if ($this->_var['goods_type_list']): ?>
      <tr>
        <td><?php echo $this->_var['lang']['extension']; ?>：</td>
        <td><select name="goods_type" onchange="this.form.submit()" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_option']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['goods_type_list'],'selected'=>$this->_var['goods_type_selected'])); ?>
          </select>
        </td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['goods_type_selected'] > 0): ?>
      <?php $_from = $this->_var['goods_attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
      <?php if ($this->_var['item']['type'] == 1): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><input name="attr[<?php echo $this->_var['item']['id']; ?>]" value="<?php echo $this->_var['item']['value']; ?>" class="inputBg" type="text" size="20" maxlength="120" /></td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['item']['type'] == 2): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><input name="attr[<?php echo $this->_var['item']['id']; ?>][from]" class="inputBg" value="<?php echo $this->_var['item']['value']['from']; ?>" type="text" size="5" maxlength="5" />
          -
          <input name="attr[<?php echo $this->_var['item']['id']; ?>][to]" value="<?php echo $this->_var['item']['value']['to']; ?>"  class="inputBg" type="text" maxlength="5" /></td>
      </tr>
      <?php endif; ?>
      <?php if ($this->_var['item']['type'] == 3): ?>
      <tr>
        <td><?php echo $this->_var['item']['attr']; ?>：</td>
        <td colspan="3"><select name="attr[<?php echo $this->_var['item']['id']; ?>]" style="border:1px solid #ccc;">
            <option value="0"><?php echo $this->_var['lang']['all_option']; ?></option>
            <?php echo $this->html_options(array('options'=>$this->_var['item']['options'],'selected'=>$this->_var['item']['value'])); ?>
          </select></td>
      </tr>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>

      <?php if ($this->_var['use_storage'] == 1): ?>
      <tr>
        <td>&nbsp;</td>
        <td><label for="outstock"><input type="checkbox" name="outstock" value="1" id="outstock" <?php if ($this->_var['outstock']): ?>checked="checked"<?php endif; ?>/> <?php echo $this->_var['lang']['hidden_outstock']; ?></label>
        </td>
      </tr>
      <?php endif; ?>

      <tr>
        <td colspan="4" align="center"><input type="hidden" name="action" value="form" />
          <input type="submit" name="Submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['button_search']; ?>" /></td>
      </tr>
    </table>
  </form>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  <?php endif; ?>

   <?php if (isset ( $this->_var['goods_list'] )): ?>
     <div class="box">
     <div class="box_1">
      <h3>
    
        <?php if ($this->_var['intromode'] == 'best'): ?>
         <span><?php echo $this->_var['lang']['best_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'new'): ?>
         <span><?php echo $this->_var['lang']['new_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'hot'): ?>
         <span><?php echo $this->_var['lang']['hot_goods']; ?></span>
         <?php elseif ($this->_var['intromode'] == 'promotion'): ?>
         <span><?php echo $this->_var['lang']['promotion_goods']; ?></span>
         <?php else: ?>
         <span><?php echo $this->_var['lang']['search_result']; ?></span>
         <?php endif; ?>
          <?php if ($this->_var['goods_list']): ?>
          <form action="search.php" method="post" class="sort" name="listform" id="form">
           <select name="sort">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['sort'],'selected'=>$this->_var['pager']['search']['sort'])); ?>
              </select>
              <select name="order">
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['order'],'selected'=>$this->_var['pager']['search']['order'])); ?>
              </select>
              <input type="image" name="imageField" src="themes/red_two/images/bnt_go.gif" alt="go"/>
              <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
              <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
              <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
              <?php if ($this->_var['key'] != "sort" && $this->_var['key'] != "order"): ?>
                <?php if ($this->_var['key'] == 'keywords'): ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item']); ?>" />
                <?php else: ?>
                  <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item']; ?>" />
                <?php endif; ?>
              <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </form>
          <?php endif; ?>
           </h3>
        <?php if ($this->_var['goods_list']): ?>
		<div class="clearfix goodsBox" style="border:none; padding:18px 0 10px 0px;">
			<ul class="goodslist-cate">
				<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
				<?php if ($this->_var['goods']['goods_id']): ?>
				<li>
					<div class="gl-img">
						<a href="<?php echo $this->_var['goods']['url']; ?>">
							<?php if ($this->_var['goods']['discount_rate'] > 0): ?>
							<b class="gl-water"><?php echo $this->_var['goods']['discount_rate']; ?>折</b>
							<?php endif; ?>
							<img style="border:none;" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>">
						</a>
						<?php if (! empty ( $this->_var['goods']['goods_brief'] )): ?>
						<div class="gl-abst-disc"><p><?php echo $this->_var['goods']['goods_brief']; ?></p></div>
						<?php endif; ?>
					</div>
					<div class="gl-name-p">
						<div class="gl-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['name']); ?></a></div>
						<div class="gl-price">
							<span class="gl-p-l"><b>
							<?php if ($this->_var['goods']['promote_price'] != ""): ?>
							<?php echo $this->_var['goods']['promote_price']; ?>
							<?php else: ?>
							<?php echo $this->_var['goods']['shop_price']; ?>
							<?php endif; ?>
							</b></span>
							<span class="gl-p-r"><del><?php echo $this->_var['goods']['end_date']; ?></del></span>
                            <font class="f4" id="leftTime"><?php echo $this->_var['goods']['end_date']; ?></font><br />
						</div>
					</div>
				</li>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
<script type="text/javascript">
$(function(){
	$(".rs_jq_timer").each(function(){
		countDown($(this).html(), this);
	});
	
});
<script type="text/javascript">
$(function(){
	$(".rs_jq_timer").each(function(){
		countDown($(this).html(), this);
	});
});
function countDown(time, elemId){
	//if(typeof end_time == "string")
	var end_time = new Date(time).getTime();//月份是实际月份-1
	//current_time = new Date().getTime(),
	sys_second = (end_time-new Date().getTime())/1000;
	alert(end_time);
	var timer = setInterval(//按照指定的周期（以毫秒计）来调用函数或计算表达式。
		function(){
			var elemText = "剩余";
			if (sys_second > 0) {
				sys_second -= 1;
				var day = Math.floor((sys_second / 3600) / 24);//返回小于等于数字参数的最大整数，对数字进行下舍入
				var hour = Math.floor((sys_second / 3600) % 24);
				var minute = Math.floor((sys_second / 60) % 60);
				var second = Math.floor(sys_second % 60);
				if(day > 0){
					elemText += "<b>" + day + "</b>天";
				}
				elemText += "<b>" + hour + "</b>时";
				elemText += '<b>' + minute + "</b>分";
				elemText += '<b>' + second + "</b>秒";
				$(elemId).html(elemText);
			} else { 
				clearInterval(timer);
				$(elemId).text("活动结束");
			}
		}, 1000);
}
</script>
          
          <script type="text/javascript">
        <?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

				<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        <?php if ($this->_var['key'] != 'button_compare'): ?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php else: ?>
        var button_compare = '';
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


        var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
        window.onload = function()
        {
          Compare.init();
          fixpng();
        }
	var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
	var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
	var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
        </script>
        <?php else: ?>
        <div style="padding:20px 0px; text-align:center" class="f5" ><?php echo $this->_var['lang']['no_search_result']; ?></div>
        <?php endif; ?>
        </div>
      </div>
      <div class="blank"></div>
      <?php echo $this->fetch('library/pages.lbi'); ?>
   <?php endif; ?>

  </div>
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
