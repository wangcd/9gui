    	<div class="article_list_main fl">
        <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
            	<p><a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo sub_str($this->_var['article_item']['short_title'],13); ?></a><span><?php echo $this->_var['article_item']['add_time']; ?></span></p>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>          
        </div>

