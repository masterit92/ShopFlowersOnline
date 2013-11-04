
<div class="span9 crud">
	<h2>Thêm mới </h2>
        <form action="" method="POST" class="form-horizontal">                    
	<fieldset><legend>Ảnh Ads</legend>
    <div class="row">
        <div class="span6">
            <div class="control-group">
                <label class="control-label" for="picture">Upload Ảnh</label>                  
				<div class="controls">
					<input type="file" value="" id="image" name="image">
                </div>
            </div>
        </div>
        <div class="span3"> </div>
    </div></fieldset>     
	
    <fieldset><legend>Thông tin cơ bản</legend>
    <div class="control-group">			
        <label class="control-label" for="name">Tên Ads</label>              
		<div class="controls">
            <input type="text" id="name" name="name" placeholder="Nhập tên...">
		</div>
    </div>

    <div class="control-group">     
        <label class="control-label" for="ads_url">Ads url</label>              
        <div class="controls">
            <input type="text" id="ads_url" name="ads_url" placeholder="Ads url...">
		</div>
    </div>

    <div class="control-group">     
        <label class="control-label" for="date_start">Ngày bắt đầu</label>              
        <div class="controls">
            <input type="text" id="date_start" name="date_start" placeholder="Ngày bắt đầu...">
		</div>
    </div>
	
    <div class="control-group">     
        <label class="control-label" for="date_end">Ngày kết thúc</label>              
        <div class="controls">
            <input type="text" id="date_end" name="date_end" placeholder="Ngày kết thúc...">
		</div>
    </div>	  
    </fieldset>
	
    <div class="form-actions">
        <a href="" class="btn">Quay lại</a>
        <input type="submit" value="Thêm mới" class="btn btn-primary">
    </div>
        </form>          
</div>

