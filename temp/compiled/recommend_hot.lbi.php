<div style="width:100%; height:200px; display:none" class="a1">

<?php if ($this->_var['hot_goods']): ?>
	<?php if ($this->_var['cat_rec_sign'] != 1): ?>
			<div class="right-box box-border mt8">
				<div class="right-box-dl">
					<ul class="goodslist">
						<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_44273600_1401505728');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_44273600_1401505728']):
?>
						<li>
							<div class="gl-img">
								<a href="<?php echo $this->_var['goods_0_44273600_1401505728']['url']; ?>">
									<b class="gl-water">热销</b>
									<img style="border:none;" src="<?php echo $this->_var['goods_0_44273600_1401505728']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_44273600_1401505728']['name']); ?>">
								</a>
								<?php if (! empty ( $this->_var['goods_0_44273600_1401505728']['brief'] )): ?>
								<div class="gl-abst-disc"><p><?php echo $this->_var['goods_0_44273600_1401505728']['brief']; ?></p></div>
								<?php endif; ?>
							</div>
							<div class="gl-name-p">
								<div class="gl-name"><a href="<?php echo $this->_var['goods_0_44273600_1401505728']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_44273600_1401505728']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_44273600_1401505728']['name']); ?></a></div>
								<div class="gl-price">
									<span class="gl-p-l"><b>
									<?php if ($this->_var['goods_0_44273600_1401505728']['promote_price'] != ""): ?>
									<?php echo $this->_var['goods_0_44273600_1401505728']['promote_price']; ?>
									<?php else: ?>
									<?php echo $this->_var['goods_0_44273600_1401505728']['shop_price']; ?>
									<?php endif; ?>
									</b></span>
									<span class="gl-p-r"><del><?php echo $this->_var['goods_0_44273600_1401505728']['market_price']; ?></del></span>
								</div>
							</div>
						</li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
			</div>
	<?php endif; ?>
<?php endif; ?>
</div>