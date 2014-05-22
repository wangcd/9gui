<div class="box top10">
 
 <div class="box_1">
   <h3><span>销售排行榜</span></h3>
  <div class="top10List clearfix">
  <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_07190500_1400747792');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_07190500_1400747792']):
        $this->_foreach['top_goods']['iteration']++;
?>
  <ul class="clearfix">
	<img src="themes/red_two/images/top_<?php echo $this->_foreach['top_goods']['iteration']; ?>.gif" class="iteration" />
	<?php if ($this->_foreach['top_goods']['iteration'] < 4): ?>
      <li class="topimg">
      <a href="<?php echo $this->_var['goods_0_07190500_1400747792']['url']; ?>"><img src="<?php echo $this->_var['goods_0_07190500_1400747792']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_07190500_1400747792']['name']); ?>" class="samllimg" /></a>
      </li>
	<?php endif; ?>		
      <li <?php if ($this->_foreach['top_goods']['iteration'] < 4): ?>class="iteration1"<?php endif; ?>>
      <a href="<?php echo $this->_var['goods_0_07190500_1400747792']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_07190500_1400747792']['name']); ?>"><?php echo $this->_var['goods_0_07190500_1400747792']['short_name']; ?></a><br />
      <font class="f1"><?php echo $this->_var['goods_0_07190500_1400747792']['price']; ?></font><br />
      </li>
    </ul>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 </div>
</div>
<div class="blank5"></div>
