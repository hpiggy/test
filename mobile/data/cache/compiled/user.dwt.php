<?php echo $this->fetch('library/user_header.lbi'); ?>
<div class="user-info">
  <div class="user-img pull-left"><i class="glyphicon glyphicon-user"></i></div>
  <dl class="pull-left">
    <dt>
      <h4><?php echo $this->_var['info']['username']; ?></h4>
    </dt>
    <dd><?php echo $this->_var['rank_name']; ?></dd>
    <dd><?php echo $this->_var['info']['integral']; ?></dd>
  </dl>
  <span class="pull-right"><a href="<?php echo url('user/msg_list');?>" class="ect-colorf"><?php echo $this->_var['sys_notice']; ?>&nbsp;<i class="fa fa-envelope-o <?php if ($this->_var['new_msg']): ?>fa-envelope-o-sl<?php endif; ?>"></i></a></span></div>
<section class="ect-margin-tb " style="max-width:640px; margin-top:1em;">
  <ul class="row list-group public_section ect-margin-tb ect-margin-lr">
    <a href="<?php echo url('user/not_pay_order_list');?>" class="list-group-item href_info">
    <?php echo $this->_var['lang']['not_pay_list']; ?><i class="pull-right fa fa-angle-right"></i>
    </a> <a href="<?php echo url('user/order_list');?>" class="list-group-item href_info">
  <?php echo $this->_var['lang']['order_list_lnk']; ?><i class="pull-right fa fa-angle-right"></i>
    </a> <a href="<?php echo url('user/address_list');?>" class="list-group-item href_info">
    <?php echo $this->_var['lang']['label_address']; ?><i class="pull-right fa fa-angle-right"></i>
    </a> <a href="<?php echo url('user/account_detail');?>" class="list-group-item href_info">
    <?php echo $this->_var['lang']['label_user_surplus']; ?><i class="pull-right fa fa-angle-right"></i>
    </a> <a href="<?php echo url('user/profile');?>" class="list-group-item href_info">
    <?php echo $this->_var['lang']['user_center']; ?><i class="pull-right fa fa-angle-right"></i>
    </a>
    <a href="<?php echo url('user/edit_password');?>" class="list-group-item href_info">
    <?php echo $this->_var['lang']['edit_password']; ?><i class="pull-right fa fa-angle-right"></i>
    </a> <a href="<?php echo url('user/service');?>" class="list-group-item href_info">
   <?php echo $this->_var['lang']['user_service']; ?><i class="pull-right fa fa-angle-right"></i>
    </a> <a href="<?php echo url('user/share');?>" class="list-group-item href_info">
    <?php echo $this->_var['lang']['label_share']; ?><i class="pull-right fa fa-angle-right"></i>
    </a>
     <a href="<?php echo url('user/tag_list');?>" class="list-group-item href_info">
<?php echo $this->_var['lang']['label_tag']; ?><i class="pull-right fa fa-angle-right"></i>
    </a>
    <a href="<?php echo url('user/bonus');?>" class="list-group-item href_info">
 <?php echo $this->_var['lang']['label_bonus']; ?><i class="pull-right fa fa-angle-right"></i>
    </a>
     <a href="<?php echo url('user/booking_list');?>" class="list-group-item href_info">
     <?php echo $this->_var['lang']['label_booking']; ?><i class="pull-right fa fa-angle-right"></i>
    </a>
    <a href="<?php echo url('collection_list');?>" class="list-group-item href_info">
     <?php echo $this->_var['lang']['label_collection']; ?><i class="pull-right fa fa-angle-right"></i>
    </a>
    <a href="<?php echo url('comment_list');?>" class="list-group-item href_info">
     <?php echo $this->_var['lang']['label_comment']; ?><i class="pull-right fa fa-angle-right"></i>
    </a>
  </ul>
  <div class="ect-padding-lr">
  	<a href="<?php echo url('user/logout');?>" class="btn btn-danger btn-block ect-colorf"><?php echo $this->_var['lang']['label_logout']; ?></a>
  </div>
</section>
<section class="user-tab ect-margin-tb ect-margin-bottom0  ect-margin-lr" style="overflow:hidden;"> 

  <p class="ect-margin-tb ect-padding-lr"><b><?php echo $this->_var['lang']['user_history']; ?></b></p>
  
  <div class="tab-pane ect-pro-list" > 
      <?php if ($this->_var['history']): ?> 
      <span class="pull-right ect-padding-lr ect-margin-tb ect-margin-bottom0">
      <a href="<?php echo url('user/clear_history');?>" class="history_clear del"><i class="glyphicon glyphicon-trash"></i> <?php echo $this->_var['lang']['clear_history']; ?></a></span>
      <ul class="ect-margin-lr">
        <?php $_from = $this->_var['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
        <li style="border-right:none; border-bottom:1px solid #e3e3e3;"><a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>"><img src="<?php echo $this->_var['val']['goods_thumb']; ?>"></a>
          <dl>
            <dt>
              <h4 class="title"><a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>"><?php echo $this->_var['val']['goods_name']; ?></a></h4>
            </dt>
            <dd class="dd-price"><span class="pull-left"><strong><?php echo $this->_var['lang']['sort_price']; ?>：<b class="ect-colory"><?php echo $this->_var['val']['shop_price']; ?></b></strong><small class="ect-margin-lr"><del><?php echo $this->_var['val']['market_price']; ?></del></small></span></dd>
          </dl>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <?php else: ?>
      <p class="text-center  ect-margin-tb ect-padding-tb"><?php echo $this->_var['lang']['not_history']; ?><a href="<?php echo url('category/index');?>" class="ect-color ect-margin-lr" style="font-size:1.3em;"><?php echo $this->_var['lang']['enter']; ?></a><?php echo $this->_var['lang']['scan_goods']; ?></p>
      <?php endif; ?> 
    </div>
</section>
</div>
<?php echo $this->fetch('library/search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
    $(function(){
        $(".del").click(function(){
            if(!confirm('您确定要删除吗？')){
                return false;
            }
            var obj = $(this);
            var url = obj.attr("href");
            $.get(url, '', function(data){
                if(1 == data.status){
                    if(obj.hasClass("history_clear")){
                        obj.closest(".ect-pro-list").html("<p class='text-center  ect-margin-tb ect-padding-tb'>暂无浏览记录，点击<a href=<?php echo url('category/index');?> class='ect-color ect-margin-lr' style='font-size:1.3em;'>进入</a>浏览商品</p>");
                        obj.parent().siblings("ul").remove();
                    } 
                    else{
                        if(obj.closest("li").siblings("li").length == 0){
                            obj.closest("ul").html("<p class='text-center  ect-margin-tb ect-padding-tb'><?php echo $this->_var['lang']['no_data']; ?></p>");
                        }
                        obj.closest("li").remove();
                    }
                }
                else{
                    alert("删除失败");
                }
            }, 'json');
            return false;
   		});
    })
</script> 
</body>
</html>
