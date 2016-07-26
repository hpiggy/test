<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
<?php echo $this->fetch('library/page_top.lbi'); ?>
  <div id="focus" class="focus">
    <div class="hd">
      <ul>
      </ul>
    </div>
    <div class="bd">
      <?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
  </div>
  
  <nav class="container-fluid">
    <ul class="row ect-row-nav ect-m-row-nav">
      <?php $_from = $this->_var['navigator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');if (count($_from)):
    foreach ($_from AS $this->_var['nav']):
?> 
      <a href="<?php echo $this->_var['nav']['url']; ?>">
      <li class="col-sm-3 col-xs-3"><i><img src="<?php echo $this->_var['nav']['pic']; ?>" ></i>
        <p class="text-center"><?php echo $this->_var['nav']['name']; ?></p>
      </li>
      </a> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </nav>
  
  	<div class="index-three">
    	<div class="pull-left" style="width:50%;"><img src="__TPL__/images/left-1.jpg" /></div>
        <div class="pull-left" style="width:50%;">
        	<p><img src="__TPL__/images/right1.jpg" /></p>
            <p><img src="__TPL__/images/right2.jpg" /></p>
        </div>
    </div>
  
  
  <div class="ect-dp-inbanner">
  	<?php 
$k = array (
  'name' => 'ads',
  'id' => '2',
  'num' => '10',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
    
  <footer>
    <nav class="ect-nav"><?php echo $this->fetch('library/page_menu.lbi'); ?></nav>
  </footer>
 
</div>
</div>
<?php echo $this->fetch('library/search.lbi'); ?><?php echo $this->fetch('library/page_footer.lbi'); ?><div style="padding-bottom:4.2em;"></div><script type="text/javascript">
get_asynclist("<?php echo url('index/ajax_goods', array('type'=>'best'));?>" , '__TPL__/images/loader.gif');
</script>
</body></html>