<?php echo $this->fetch('library/user_header.lbi'); ?>
 <form name="formLogin" action="<?php echo url('user/login');?>" method="post" class="validforms">
 <div class="flow-consignee ect-bg-colorf" style="border:none; margin-top:1em;">
     <section class="ect-margin-lr">
      <div class="form-group">
    		<label><?php echo $this->_var['lang']['username']; ?>：</label>	<input placeholder="<?php echo $this->_var['lang']['username']; ?>/<?php echo $this->_var['lang']['mobile']; ?>/<?php echo $this->_var['lang']['email']; ?>" name="username" class="form-control" type="text" id="username" datatype="*" >
        </div>
        <div class="form-group">
    		<label><?php echo $this->_var['lang']['label_password']; ?>：</label><input placeholder="<?php echo $this->_var['lang']['label_password']; ?>"  name="password" type="password" class="form-control" datatype="*6-16" />
        </div>
        <?php if ($this->_var['enabled_captcha']): ?>
       <div class="form-group">
          <label><?php echo $this->_var['lang']['comment_captcha']; ?>：</label>
             <input name="captcha" type="text" placeholder="<?php echo $this->_var['lang']['comment_captcha']; ?>" class="form-control">
             </span><img src="<?php echo url('Public/captcha', array('rand'=>$this->_var['rand']));?>" alt="captcha"class="img-yzm  " style="margin-top:.4em;" onClick="this.src='<?php echo url('public/captcha', array('t'=>'Math.random()'));?>'" /></div>
            </div>
            <?php endif; ?>
      </ul>
    </section>
  </div>
  <p class="ect-checkbox ect-padding-tb ect-margin-tb ect-margin-bottom0 ect-padding-lr">
     <input type="checkbox" value="1" name="remember" id="remember" class="l-checkbox" />
     <label for="remember"><?php echo $this->_var['lang']['remember']; ?><i></i></label>
      <?php if ($this->_var['anonymous_buy'] == 1 && $this->_var['step'] == 'flow'): ?>
      <a href="<?php echo url('flow/consignee',array('direct_shopping'=>1));?>" style="float:right;"><?php echo $this->_var['lang']['direct_shopping']; ?></a>
      <?php endif; ?>
     
  </p>
   <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
  <div class="ect-padding-lr ect-padding-tb"> 
  <input type="submit" class="btn btn-info ect-btn-info ect-dp-info" value="<?php echo $this->_var['lang']['now_landing']; ?>" />
  </div>
  </form>
  <p class="ect-padding-lr ect-margin-tb text-right ect-margin-bottom0" style="clear:both">
  <?php if ($this->_var['oauth_url']): ?>
	<a href="<?php echo $this->_var['oauth_url']; ?>">微信授权登录</a> 
  <?php endif; ?>
	<a href="<?php echo url('user/get_password_phone');?>"><?php echo $this->_var['lang']['forgot_password']; ?></a>  
	<a href="<?php echo url('user/register');?>"><?php echo $this->_var['lang']['free_registered']; ?></a>
  </p>
  <div class="ect-padding-lr ect-margin-tb user-hezuo">
  	<?php echo $this->_var['lang']['third_login']; ?>
  	<p>
    	<a href="<?php echo url('user/third_login',array('type'=>'qq'));?>"><img src="__TPL__/images/qq.png"></a>
        <a href="<?php echo url('user/third_login',array('type'=>'sina'));?>"><img src="__TPL__/images/weibo.png"></a>
    </p>
  </div>
  </div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
