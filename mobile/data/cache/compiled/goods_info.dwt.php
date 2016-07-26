<?php echo $this->fetch('library/page_header.lbi'); ?><div class="con">
  <div class="ect-bg">
    <header class="ect-header ect-margin-tb ect-margin-lr text-center icon-write ect-bg"> <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a> <span><?php echo $this->_var['title']; ?></span> </header>
    <nav class="ect-nav ect-nav-list" style="display:none;"><?php echo $this->fetch('library/page_menu.lbi'); ?></nav>
  </div>
  <div class="goods-info ect-padding-tb">
  	
      <section class="user-tab ect-border-bottom0">
        <div id="is-nav-tabs" style="height:3.15em; display:none;"></div>
        <div class="tab-content" style="padding:1em">
        <?php if ($this->_var['type'] == 'desc'): ?>
          <?php echo $this->_var['goods']['goods_desc']; ?>
          <?php elseif ($this->_var['type'] == 'attr'): ?>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
              <tr>
                <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
              </tr>
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <tr>
                <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
                <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
              </tr>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table>
            <?php endif; ?>
        </div>
      </section>
  </div>
</div><?php echo $this->fetch('library/search.lbi'); ?><?php echo $this->fetch('library/page_footer.lbi'); ?><footer><nav class="ect-nav"><?php echo $this->fetch('library/page_menu.lbi'); ?></nav>
</footer>
<div style="padding-bottom:4.2em;"></div></body></html>