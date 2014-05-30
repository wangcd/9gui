<div class="search_list">
	<div class="search_title">
<!--    	<span>价格</span>-->
    	<a href="#">　　重新筛选</a>
    </div>
    <div class="search_con">
    	<div class="search_con_list">
        	<div class="fenl"><?php echo $this->_var['lang']['price']; ?> :</div>
            <div class="fenl_list">
            	<div><a href=""><span class="fenl_list_fir">全部</span></a></div>
                <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
                <div><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
        <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_65693300_1401371131');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_65693300_1401371131']):
?>
        <div class="search_con_list">
        	<div class="fenl"><?php echo htmlspecialchars($this->_var['filter_attr_0_65693300_1401371131']['filter_attr_name']); ?> :</div>
            <div class="fenl_list">
            	<div><a href="" class=""><span class="fenl_list_fir">全部</span></a></div>
                <?php $_from = $this->_var['filter_attr_0_65693300_1401371131']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
                <div><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>        
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>

