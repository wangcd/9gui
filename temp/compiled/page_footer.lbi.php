
<div id="footer" class="rs_footer">
<div class="sitewith rs_footer_ex">
</div>

<div id="VjiaFooter" class="block">
  <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
  
  <div >
    <div class="links clearfix"> 
      <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?> 
      <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php if ($this->_var['txt_links']): ?> 
      <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?> 
      <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>　　｜　　
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
    </div>
  </div>
  <div class="blank"></div>
  <?php endif; ?> 
</div>

  <p class="ft_footer_link"> 
    <?php if ($this->_var['navigator_list']): ?> 
    <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_91317300_1401505717');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_91317300_1401505717']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
    <a href="<?php echo $this->_var['nav_0_91317300_1401505717']['url']; ?>" 
    <?php if ($this->_var['nav_0_91317300_1401505717']['opennew'] == 1): ?> 
    target="_blank" 
    <?php endif; ?> 
    ><?php echo $this->_var['nav_0_91317300_1401505717']['name']; ?></a> 
    <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> 
    | 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php endif; ?> 
  </p>
   
  <?php if ($this->_var['icp_number']): ?>
  <p><?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a></p>
  <?php endif; ?>
  
  <p> <?php if ($this->_var['service_phone']): ?> 
    Tel: <?php echo $this->_var['service_phone']; ?> 
    <?php endif; ?> 
    <?php if ($this->_var['service_email']): ?> 
    E-mail: <?php echo $this->_var['service_email']; ?><br />
    <?php endif; ?></p>


  <p>
    
    
    <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/red_two/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="themes/red_two/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
    <?php if ($this->_var['im']): ?> 
    <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></p>
  <p><?php echo $this->_var['copyright']; ?></p>
  <p><?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?></p>
</div>



<div class="ft_pic_link" id="footerbanner2LazyLoad"> <a href="#"><img src="themes/red_two/images/foot_img1.jpg"></a>| <a href="#"><img src="themes/red_two/images/foot_img2.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img3.jpg"></a>|<a><img src="themes/red_two/images/foot_img4.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img5.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img6.jpg"></a>|<a href="#"><img src="themes/red_two/images/foot_img7.jpg"></a>|<a href="h#"><img src="themes/red_two/images/foot_img8.jpg"></a>|</div>


<div class="rs_float_window">
	<div class="rs_float_msg"><a href="message.php" target="_blank"><img src="themes/red_two/images/rs_float_window_msg.jpg" /></a></div>
		<div class="rs_float_qq" id="qqflip">
		<span class="flipmove"><img src="themes/red_two/images/rs_float_window_qq.jpg" /></span>
		<span class="qqlist">
			<?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
			<?php if ($this->_var['im']): ?>
			<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $this->_var['im']; ?>&amp;Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $this->_var['im']; ?>:50" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
</script>