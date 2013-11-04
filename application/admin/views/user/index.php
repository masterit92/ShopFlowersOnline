<div class="span9">
  <h1>Quản lý Users</h1>
  <table class="table table-striped table-bordered table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>FullName</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($this->listAllUser as $key =>$usr){
      ?>
      <tr>
        <td> <?php echo $usr->getUserId(); ?> </td>
        <td> <?php echo $usr->getEmail(); ?>  </td>
        <td> <?php echo $usr->getFullName(); ?>  </td>
        <td> <?php echo $usr->getPhone(); ?> </td>
        <td><a href="<?php echo URL_BASE?>/admin/user/getEdit?id=<?php echo $usr->getUserId(); ?>" class="btn btn-primary">Sửa</a> 
            <a rel="<?php echo $usr->getUserId(); ?>" class="delete_toggler btn btn-danger">Xóa</a></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <a class="btn btn-primary right" href="<?php echo URL_BASE?>/admin/user/getCreate">Thêm mới</a>
</div>

<div class="modal hide fade" id="delete_user">
      <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>Are You Sure?</h3>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this user?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="<?php echo URL_BASE?>/admin/user/postDelete" accept-charset="UTF-8">        
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