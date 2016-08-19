<div class="container-fluid category_search">
	<div class="row" style="margin:0 0;">
			<div class="col-xs-12" style="padding:0 0;">
<form action="<?php echo url('category/index');?><?php if ($this->_var['id']): ?>&id=<?php echo $this->_var['id']; ?><?php endif; ?>"  method="post" id="searchForm" name="searchForm">
      <div class="input-search"> <span>
        <input name="keywords" type="search" placeholder="<?php echo $this->_var['lang']['no_keywords']; ?>" id="keywordBox">
        </span>
        <button type="submit" value="<?php echo $this->_var['lang']['search']; ?>" onclick="return check('keywordBox')">搜索</button>
      </div>
    </form>
    </div>
    </div>
    </div>