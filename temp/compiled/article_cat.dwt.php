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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header1.lbi'); ?>

  <?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix">
  
  <div class="AreaL">
<?php echo $this->fetch('library/left_help.lbi'); ?>


    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="AreaR">
 
    <div >
                    <form action="<?php echo $this->_var['search_url']; ?>" name="search_form" method="post" class="article_search">
        <input name="keywords" type="text" id="requirement" value="<?php echo $this->_var['search_value']; ?>" class="inputBg" />
        <input name="id" type="hidden" value="<?php echo $this->_var['cat_id']; ?>" />
        <input name="cur_url" id="cur_url" type="hidden" value="" />
        <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="bnt_blue_1" />
      </form>
<div class="art_cat_box">
      <table width="100%" border="0" cellpadding="5" cellspacing="0">
      <tr>
        <th style="background:#e5e5e5"><?php echo $this->_var['lang']['article_title']; ?></th>
          <th style="background:#e5e5e5"><?php echo $this->_var['lang']['article_author']; ?></th>
          <th style="background:#e5e5e5"><?php echo $this->_var['lang']['article_add_time']; ?></th>
        </tr>
      <?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
      <tr>
        <td><a style="text-decoration:none" href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" class="f6"><?php echo $this->_var['article']['short_title']; ?></a></td>
          <td align="center"><?php echo $this->_var['article']['author']; ?></td>
          <td align="center"><?php echo $this->_var['article']['add_time']; ?></td>
        </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
    </div>
    </div>

  <div class="blank5"></div>
  <?php echo $this->fetch('library/pages.lbi'); ?>
  </div>  
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
document.getElementById('cur_url').value = window.location.href;
</script>
</html>
