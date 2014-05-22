 
			

<ul class="catetree-list">
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
	<li>
		<h3><span>&gt;</span><a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3>
		<p>
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rs_child');$this->_foreach['rs_childs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rs_childs']['total'] > 0):
    foreach ($_from AS $this->_var['rs_child']):
        $this->_foreach['rs_childs']['iteration']++;
?>
        	<a href="<?php echo $this->_var['rs_child']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['rs_child']['name']); ?></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>    
        </p>
	</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</ul>

			
<script type="text/javascript">
	$(function($) {
		$(".catetree-list li").hover(
			function(){
				$(this).addClass("current");
			},
			function(){
				$(this).removeClass("current");
			}
		);
	});

			$(function(){
				$(".category_li,.idxban-left").hover(
					function(){
						$(".idxban-left").show();
					},
					function(){
						$(".idxban-left").hide();
					}
				);			
			});	
</script>
