<div class="span9">    
    <h2>Danh Sách Ads</h2> 
    <p><a class="btn btn-primary" href="<?php echo URL_BASE?>/admin/ads/getCreate">Thêm mới</a></p>
                 
  <table class="table table-striped table-bordered table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên </th>
        <th>Ngày bắt đầu </th>
        <th>Ngày kết thúc </th>
        <th>Thao tác</th>
      </tr>
    </thead><tbody>
      <?php
      foreach($this->listAds as $key =>$ads){
      ?>      
      <tr>
        <td> <?php echo $ads->getAdsId(); ?> </td>
        <td> <?php echo $ads->getName(); ?> </td>
        <td> <?php echo $ads->getDateStart(); ?> </td>
        <td> <?php echo $ads->getDateEnd(); ?> </td>
        <td><a href="" class="btn btn-primary">Sửa</a>
            <a rel="" class="delete_toggler btn btn-danger">Xóa</a>
        </td>
      </tr>     
      <?php
      }  
      ?>      
  </tbody></table>
</div>

<div class="modal hide fade" id="delete_user">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Are You Sure?</h3>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this record?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="" accept-charset="UTF-8">        
          <a data-toggle="modal" href="#delete_user" class="btn">Keep</a>
        <input type="hidden" name="id" id="postvalue" value="" />
        <input type="submit" class="btn btn-danger" value="Delete" />
        </form>      
      </div>
    </div>

    <script>
      $('#delete_user').modal({
        show:false
      }); // Start the modal

      // Populate the field with the right data for the modal when clicked
      $('.delete_toggler').each(function(index,elem) {
          $(elem).click(function(){
            $('#postvalue').attr('value',$(elem).attr('rel'));
            $('#delete_user').modal('show');
          });
      });
    </script> 