 
			

<ul class="catetree-list">
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
	<li>
		<div><b><a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></b></div>
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
		$(".catetree-list li:odd").css({background:"#ededed",color:"#888"});
		$(".catetree-list li:even").css({background:"#fff",color:"#888"});
		$(".catetree-list li:eq(0)").css("border-left","4px #f06680 solid");
		$(".catetree-list li:eq(1)").css("border-left","4px #db9b3f solid");
		$(".catetree-list li:eq(2)").css("border-left","4px #6aa515 solid");
		$(".catetree-list li:eq(3)").css("border-left","4px #3ab3e0 solid");
		$(".catetree-list li:eq(4)").css("border-left","4px #997ad3 solid");
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
