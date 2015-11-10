<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
    <?php echo $this->fetch('library/cart.lbi'); ?>
    <?php echo $this->fetch('library/category_tree.lbi'); ?>
    <?php echo $this->fetch('library/goods_related.lbi'); ?>
    <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
    <?php echo $this->fetch('library/goods_article.lbi'); ?>
    <?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>
    
    
    
    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="AreaR">
   
   
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['auction_goods_info']; ?></span></h3>
    <div class="boxCenterList">
      <ul class="group clearfix">
      <li style="margin-right:8px; text-align:center;">
      <a href="<?php echo $this->_var['auction_goods']['url']; ?>"><img src="<?php echo $this->_var['auction_goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['auction_goods']['goods_name']); ?>" /></a>
      </li>
      <li style="width:555px; line-height:23px;">
      <form name="theForm" action="auction.php" method="post">
      <?php echo $this->_var['lang']['goods_name']; ?>：<font class="f5"><?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?></font><?php if ($this->_var['auction']['product_id'] > 0): ?>&nbsp;[<?php echo $this->_var['products_info']; ?>]<?php endif; ?><br>
      <?php echo $this->_var['lang']['au_current_price']; ?>：<?php echo $this->_var['auction']['formated_current_price']; ?><br>
      起止时间：<?php echo $this->_var['auction']['start_time']; ?> -- <?php echo $this->_var['auction']['end_time']; ?><br>
      <?php echo $this->_var['lang']['au_start_price']; ?>：<?php echo $this->_var['auction']['formated_start_price']; ?><br>
      <?php echo $this->_var['lang']['au_amplitude']; ?>：<?php echo $this->_var['auction']['formated_amplitude']; ?><br>
      <?php if ($this->_var['auction']['end_price'] > 0): ?>
      <?php echo $this->_var['lang']['au_end_price']; ?>：<?php echo $this->_var['auction']['formated_end_price']; ?><br>
      <?php endif; ?>
      <?php if ($this->_var['auction']['deposit'] > 0): ?>
      <?php echo $this->_var['lang']['au_deposit']; ?>：<?php echo $this->_var['auction']['formated_deposit']; ?><br>
      <?php endif; ?>
      <?php if ($this->_var['auction']['status_no'] == 0): ?>
      <?php echo $this->_var['lang']['au_pre_start']; ?>
      <?php elseif ($this->_var['auction']['status_no'] == 1): ?>
      <font class="f4"><?php echo $this->_var['lang']['au_under_way']; ?><span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span></font><br />
      <?php echo $this->_var['lang']['au_i_want_bid']; ?>：
      <input name="price" type="text" class="inputBg" id="price" size="8" />
      <input name="bid" type="submit" class="bnt_blue" id="bid" value="<?php echo $this->_var['lang']['button_bid']; ?>" style="vertical-align:middle;" />
      <input name="act" type="hidden" value="bid" />
      <input name="id" type="hidden" value="<?php echo $this->_var['auction']['act_id']; ?>" /><br />
      <?php else: ?>
      <?php if ($this->_var['auction']['is_winner']): ?>
      <span class="f_red"><?php echo $this->_var['lang']['au_is_winner']; ?></span><br />
      <input name="buy" type="submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['button_buy']; ?>" />
      <input name="act" type="hidden" value="buy" />
      <input name="id" type="hidden" value="<?php echo $this->_var['auction']['act_id']; ?>" />
      <?php else: ?>
      <?php echo $this->_var['lang']['au_finished']; ?>
      <?php endif; ?>
      <?php endif; ?>
      </form>
      </li>
      </ul>
    </div>
   </div>
  </div>
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['activity_intro']; ?></span></h3>
    <div class="boxCenterList">
    <?php echo nl2br(htmlspecialchars($this->_var['auction']['act_desc'])); ?>
    </div>
   </div>
  </div>
   <div class="blank5"></div>
   <div class="box">
   <div class="box_1">
    <h3><span><?php echo $this->_var['lang']['bid_record']; ?></span></h3>
    <div class="boxCenterList">
    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tr>
        <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_user']; ?></th>
        <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_price']; ?></th>
        <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_time']; ?></th>
        <th align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['au_bid_status']; ?></th>
      </tr>
<?php $_from = $this->_var['auction_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'log');$this->_foreach['fe_bid_log'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_bid_log']['total'] > 0):
    foreach ($_from AS $this->_var['log']):
        $this->_foreach['fe_bid_log']['iteration']++;
?>
      <tr>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['log']['user_name']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['log']['formated_bid_price']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['log']['bid_time']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php if (($this->_foreach['fe_bid_log']['iteration'] <= 1)): ?> <?php echo $this->_var['lang']['au_bid_ok']; ?><?php else: ?>&nbsp;<?php endif; ?></td>
      </tr>
    <?php endforeach; else: ?>
    <tr>
      <td colspan="4" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['no_bid_log']; ?></td>
    </tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </table>
    </div>
   </div>
  </div>
  </div>
  
</div>
<div class="blank"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var gmt_end_time = "<?php echo empty($this->_var['auction']['gmt_end_time']) ? '0' : $this->_var['auction']['gmt_end_time']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
var now_time = <?php echo $this->_var['now_time']; ?>;
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


onload = function()
{
  try
  {
    onload_leftTime(now_time);
  }
  catch (e)
  {}
}

</script>
</html>
