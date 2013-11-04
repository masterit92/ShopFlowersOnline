<div class="span9 crud">
	<h2><?php echo ( $this->create ? 'Thêm mới' : 'Sửa thông tin category' )?> </h2>
        <form action="<?php echo URL_BASE?>/admin/category/<?php echo ( $this->create ? 'postCreate' : 'postEdit' )?>" method="POST" class="form-horizontal">                    
	<input type="hidden" name="catId" value="<?php echo ( $this->create ? '' : $this->categories->getCatId() )?>" />
    <fieldset><legend>Thông tin cơ bản</legend>

    <div class="control-group">			
        <label class="control-label" for="name">Tên nhóm</label>              
		<div class="controls">
            <input type="text" id="name" name="name" value="<?php echo ( $this->create ? '' : $this->categories->getName() ); ?>" placeholder="Nhập tên nhóm...">
		</div>
    </div>

    <div class="control-group">
        <label class="control-label" for="parentId">Chọn nhóm</label>             
      	<div class="controls">           
			<select name="parentId" id="parentId">
				<option value="0">Nhóm mới</option>
                <?php
                    foreach($this->parents as $key =>$parent){
                ?>                 
				<option value="<?php echo $parent->getCatId() ?>"><?php echo $parent->getName() ?></option>
                <?php
                    }
                ?>                
			</select>             
		</div>
    </div>

    </fieldset>
    <div class="form-actions">
        <a href="<?php echo URL_BASE?>/admin/category/index" class="btn">Quay lại</a>
        <input type="submit" value="<?php echo ( $this->create ? 'Thêm mới' : 'Lưu thông tin' )?>" class="btn btn-primary">
    </div>
       </form>   
</div>