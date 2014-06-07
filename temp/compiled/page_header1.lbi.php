<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.8.3.min.js,jquery.json-2.4.min.js,transport.js,utils.js')); ?>
<script type="text/javascript">

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
        alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
        return false;
    }
}
-->

</script>
<div class="wrap cl tophead_wrap">
	<div class="sitewith">
		<div class="fl" id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
		
		<div class="toptel fr">服务热线：<span class="toptelstyle">0379 - 6677 7766</span></div>
	</div>
</div>
<div class="wrap topmain_wrap">
	<div class="sitewith">
    
		<div class="fl">
        	<a href="index.php" class="fl"><img src="themes/red_two/images/logo.gif" height="80px;" />
            </a>
            <div style="width:230px; float:left">
            <p class="logo_right" style="color:#1e0600">洛阳市区免费配送</p>

            <p class="logo_right" style="color: #cc0000;">原瓶进口假一赔十</p>
            </div>
        </div>
		

         <div class="hd_head_searchss fl">
                <form name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
                  <input type="text" maxlength="100" style="color:#333333;" name="keywords" id="keyword" class="hd_input_test"  value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"" >
                  
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
			<li><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
			<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
			<li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="nav-a-curt"<?php endif; ?> ><?php echo $this->_var['nav']['name']; ?></a></li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		<div class="shopcart fr" id="ECS_CARTINFO"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
	</div>
</div>
