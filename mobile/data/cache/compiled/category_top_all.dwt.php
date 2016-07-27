<?php echo $this->fetch('library/page_header.lbi'); ?><?php echo $this->fetch('library/page_top.lbi'); ?><?php echo $this->fetch('library/page_search1.lbi'); ?><div class="container ect-dp-container">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> 
    <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
    <div class="panel panel-default"> 
      <?php if ($this->_var['cat']['cat_id']): ?>
      <div class="panel-heading" role="tab" id="heading<?php echo $this->_var['cat']['id']; ?>">
        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $this->_var['cat']['id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $this->_var['cat']['id']; ?>" style="display:block;color: rgb(128, 128, 128) !important;"><?php echo htmlspecialchars($this->_var['cat']['name']); ?> <i class="pull-right fa fa-angle-right"></i></a></h4>
      </div>
      <div id="collapse<?php echo $this->_var['cat']['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $this->_var['cat']['id']; ?>">
        <div class="panel-body"> 
          <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?>
          <div class="ect-margin-tb category-list">
            <h5> 
              <?php if ($this->_var['child']['cat_id']): ?> 
              <a href="<?php echo url('category/index',array('id'=>$this->_var['child']['id']));?>" style="color:#808080 !important;"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> 
              <?php else: ?> 
              <a href="<?php echo $this->_var['child']['url']; ?>" style="color:#808080 !important;"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> 
              <?php endif; ?> 
            </h5>
            <div> 
              <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ch');$this->_foreach['ch1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ch1']['total'] > 0):
    foreach ($_from AS $this->_var['ch']):
        $this->_foreach['ch1']['iteration']++;
?> 
              <a href="<?php echo $this->_var['ch']['url']; ?>" style="color:#b3a99f !important"><?php echo htmlspecialchars($this->_var['ch']['name']); ?></a> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </div>
      </div>
      <?php else: ?> 
      <a href="<?php echo url('category/index',array('id'=>$this->_var['cat']['id']));?>">
      <div class="panel-heading">
        <h4 class="panel-title"> <?php echo htmlspecialchars($this->_var['cat']['name']); ?> <i class="pull-right fa fa-angle-right"></i></h4>
      </div>
      </a> 
      <?php endif; ?> 
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
  </div>
</div><footer>
  <nav class="ect-nav"><?php echo $this->fetch('library/page_menu.lbi'); ?></nav>
</footer>
<div style="padding-bottom:4.2em;"></div><?php echo $this->fetch('library/page_footer.lbi'); ?></body></html>