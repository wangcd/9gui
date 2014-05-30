<style>
.pinjian{
	margin:auto;
	width:1200px;
	height:210px;
	border:1px solid #e6e6e6;
}
.pj_title{
	width:1200px;
	height:40px;
	background:url(themes/red_two/images/penjian.jpg) no-repeat;
}
#demo {
overflow:hidden;
width:1140px;
margin:10px 10px;
}
#demo img {
border: 1px solid #F2F2F2;
margin-left:10px;
}
#indemo {
float: left;
width: 800%;
}
#demo1 {
float: left;
}
#demo2 {
float: left;
}
</style>
<div class="pinjian">
    <div id="demo">
        <div id="indemo">
            <div id="demo1">
<?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_20455500_1401370938');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_20455500_1401370938']):
        $this->_foreach['top_goods']['iteration']++;
?>
            <a href="<?php echo $this->_var['goods_0_20455500_1401370938']['url']; ?>" title="<?php echo $this->_var['goods_0_20455500_1401370938']['short_name']; ?>"><img src="<?php echo $this->_var['goods_0_20455500_1401370938']['thumb']; ?>" width="150px" height="180px"/></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>            
            </div>
            <div id="demo2"></div>
        </div>
    </div>
</div>
<div class="blank5"></div>
<script>
<!--
var speed=10;
var tab=document.getElementById("demo");
var tab1=document.getElementById("demo1");
var tab2=document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
-->
</script>
