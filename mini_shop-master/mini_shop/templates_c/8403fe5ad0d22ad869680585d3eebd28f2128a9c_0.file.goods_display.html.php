<?php
/* Smarty version 3.1.29, created on 2020-11-10 06:11:22
  from "C:\UniServerZ\www\mini_shop-master\mini_shop\templates\goods_display.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa2f0a59e7b6_85212895',
  'file_dependency' => 
  array (
    '8403fe5ad0d22ad869680585d3eebd28f2128a9c' => 
    array (
      0 => 'C:\\UniServerZ\\www\\mini_shop-master\\mini_shop\\templates\\goods_display.html',
      1 => 1604988674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa2f0a59e7b6_85212895 ($_smarty_tpl) {
?>
<div class="row">
  <div class="col-md-6">
  <div id="demo">
<div id="float-box">
<div id="small-box"></div>
<img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
" class="img-thumbnail">
</div>
<div id="big-box">
<img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
">
</div>
</div>
    
  </div>
  <div class="col-md-6">
    <h2><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</h2>
    <p>售價：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
元整</p>
    <p>人氣：<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</p>
    <div>
      <a href="index.php?op=add_to_cart&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
&goods_title=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
&goods_amount=1" class="btn btn-primary" role="button">加入購物車</a>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <a href="tool.php?op=goods_form&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-warning">編輯商品</a>
        <a href="tool.php?op=delete_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-danger">刪除商品</a>
      <?php }?>
    </div>
  </div>
</div>


<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#goods" aria-controls="goods" role="tab" data-toggle="tab">商品介紹</a></li>
  <li role="presentation"><a href="#note" aria-controls="note" role="tab" data-toggle="tab">退換或須知</a></li>
  <li role="presentation"><a href="#service" aria-controls="service" role="tab" data-toggle="tab">售後服務</a></li>
  <li role="presentation"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">特別說明</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="goods">
    <h3>商品介紹</h3>
    <p><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</p>
  </div>
  <div role="tabpanel" class="tab-pane" id="note">
    <h3>退換貨須知</h3>
    <ul>
      <li>商品到貨享十天猶豫期之權益<span class="text-danger">（注意！猶豫期非試用期）</span>，辦理退貨商品必須是全新狀態且包裝完整，否則將會影響退貨權限。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="service">
    <h3>售後服務</h3>
    <ul>
      <li>如您收到商品，請依正常程序儘速檢查商品，若商品發生新品瑕疵之情形，您可申請更換新品或退貨，請直接點選<a href="#" target="_blank">聯絡我們</a>。</li>
      <li>若您對於購買流程、付款方式、退貨及商品運送方式有疑問，你可直接點選<a href="#" target="_blank">會員中心</a>。</li>
    </ul>
  </div>
  <div role="tabpanel" class="tab-pane" id="other">
    <h3>特別說明</h3>
    <ul>
      <li>本公司對於所販售具遞延性之商品或服務，消費者權益均受保障。如因合作廠商無法提供商品或服務，請與本公司聯繫辦理退貨或換成等值商品。</li>
      <li>※特惠商品，不適用折價券</li>
    </ul>
  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
window.onload = function(){

//獲取到需要的元素
var demo = document.getElementById('demo');
var smallBbox = document.getElementById('small-box');
var floatBox = document.getElementById('float-box');
var bigBox = document.getElementById('big-box');
var bigBoxImg = bigBox.getElementsByTagName('img')[0];


floatBox.onmouseover = function(){
smallBbox.style.display = "block";
bigBox.style.display = "block";
}
floatBox.onmouseout = function(){
smallBbox.style.display = "none";
bigBox.style.display = "none";
}
floatBox.onmousemove = function(e){
var _event = e || event;
console.log(_event.clientY);
var l = _event.clientX - demo.offsetLeft - floatBox.offsetLeft - smallBbox.offsetWidth/2;//除2是因為讓滑鼠點出現在放大遮罩的中心位置
var t = _event.clientY - demo.offsetTop  - floatBox.offsetTop  - smallBbox.offsetHeight/2;

var demoWidth = demo.offsetWidth;
var demoHeight = demo.offsetHeight;


var smallBboxWidth = smallBbox.offsetWidth;
var smallBboxHeight = smallBbox.offsetHeight;
//滑鼠可以移動的最大XY的距離
var maxX = demoWidth - smallBboxWidth;
var maxY = demoHeight - smallBboxHeight;


l = Math.min(maxX,Math.max(0,l));
t = Math.min(maxY,Math.max(0,t));
smallBbox.style.left = l +"px";
smallBbox.style.top = t +"px";


var percentX = l / (floatBox.offsetWidth - smallBboxWidth);//求出小圖遮罩的座標佔可移動區域的比例
var percentY = t / (floatBox.offsetHeight - smallBboxHeight);


bigBoxImg.style.left = -percentX *(bigBoxImg.offsetWidth - bigBox.offsetWidth) +"px";//大圖對的移動方向和小圖遮罩的移動方向相反
bigBoxImg.style.top  = -percentY*(bigBoxImg.offsetHeight - bigBox.offsetHeight)+"px";

}
}
<?php echo '</script'; ?>
>

<?php }
}
