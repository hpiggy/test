<?php echo $this->fetch('library/page_header.lbi'); ?><?php echo $this->fetch('library/page_top.lbi'); ?><?php echo $this->fetch('library/page_search1.lbi'); ?><?php echo $this->fetch('library/goods_list.lbi'); ?><?php echo $this->fetch('library/search.lbi'); ?><?php echo $this->fetch('library/page_footer.lbi'); ?><script type="text/javascript">
if( <?php echo $this->_var['show_asynclist']; ?> == 1){
 	get_asynclist('<?php echo url('category/asynclist', array('id'=>$this->_var['id'], 'brand'=>$this->_var['brand_id'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order'], 'keywords'=>$this->_var['keywords']));?>' , '__TPL__/images/loader.gif');
 }
</script>
<footer><nav class="ect-nav"><?php echo $this->fetch('library/page_menu.lbi'); ?></nav>
</footer>
<div style="padding-bottom:4.2em;"></div>
</body></html>