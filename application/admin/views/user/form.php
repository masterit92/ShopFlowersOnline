<script type="text/javascript">
	function isAlphapet(){
		var alphaExp = /^[a-zA-Z]+$/;
		var namee=document.field.fullname.value;
		var nalt=document.getElementById('fullname1');
		if(namee!=""){
			if(!namee.match(alphaExp)){
				nalt.innerHTML="<font color='red'> Invalid Characters </font>";
				//document.field.fullname.focus();
				document.field.fullname.value="";
				return false; 	
			}else{
				nalt.innerHTML="";
				return true; 
			}
		}else  if(namee.length==0) {
		   nalt.innerHTML="<font color='red'> Invalid Name</font>";
		   return false;
		}
	}
	
	function emailvalid(){
		var emal=document.field.email.value;
		var ealt=document.getElementById('email1');
		if(emal!=""){
			var emailExp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([com\co\.\in])+$/;
			if(!emal.match(emailExp)){
				ealt.innerHTML="<font color='red'> Invalid Email id </font>";
				return false; 	
			}else{
				ealt.nnerHTML="";
				return true;
			}
		}else if(emal.length==0){
			ealt.innerHTML="<font color='red'> Invalid Email id</font>";
			return false; 
		}
	}  

	
	function password(){
		var pawd1=document.getElementById('pwd');
		var palt=document.getElementById('pwd1');
		if(pawd1.value.length==0){
			palt.innerHTML="<font color='red'> Invalid PassWord</font>";
			return false;
		}else{
			palt.innerHTML="";
			return true;
		}

	}
	
	function pass(){
		var pawd1=document.getElementById('pwd');
		var pawdcon2=document.getElementById('pwd_con');
		var palt=document.getElementById('pwd1');
		var pcalt=document.getElementById('pwdcon1');
	  
		if(pawdcon2.value.length==0)  {
			pcalt.innerHTML="<font color='red'> Invalid Password Cofirm </font>";
		return false;
		}else if(pawd1.value!=pawdcon2.value){
			pcalt.innerHTML="";
			palt.innerHTML="<font color='red'> Password Mismatch</font>";
			return false;
		}else{
			palt.innerHTML="";
			pcalt.innerHTML="";
			return true;
		}
	}
	
	function slctemp(){
		var saalt=document.getElementById('opt1'); 
		saalt.innerHTML="";
	}
	
function chkform(){
	var nam=document.getElementById('fullname');
	var pawd=document.getElementById('pwd');  
	var pawdcon=document.getElementById('pwd_con');  
	
	if((pawd.value.length!=0) && (pawdcon.value.length!=0) && (nam.value.length!=0)) {
		if(isAlphapet()) {   
			if(emailvalid()){                  
				document.field.submit();
			}
		} 		
	}else{
		return false;
	}
} 	
</script>     

<div>
    <h1><?php echo ( $this->create ? 'New User' : 'Edit User' )?></h1>
    <div id="info" class=""> </div>
    <form name="field" id="regForm"  action="<?php echo URL_BASE?>/admin/user/<?php echo ( $this->create ? 'postCreate' : 'postEdit' )?>" method="POST" onsubmit="return(chkform());">                      
	<input type="hidden" name="userId" value="<?php echo ( $this->create ? '' : $this->users->getUserId() )?>" />
        
    <fieldset><legend>Basic Information</legend>

    <div>
        <label for="email">Email Address</label>              
        <div>
            <input type="text" id="email" name="email" onBlur="emailvalid()" value="<?php echo ( $this->create ? '' : $this->users->getEmail() ); ?>" placeholder="Enter Email Address...">       
				<span id="email1"></span>				
        </div>
    </div>

    <div>
        <label for="fullname">Full Name</label>              
        <div>
            <input type="text" id="fullname" name="fullname" onBlur="isAlphapet()" value="<?php echo ( $this->create ? '' : $this->users->getFullName() ); ?>" placeholder="Enter Full Name...">              
			<span id="fullname1"></span>
		</div>
    </div>

    <div>
        <label for="phone">Phone</label>              
        <div>
            <input type="text" id="phone" name="phone" value="<?php echo ( $this->create ? '' : $this->users->getPhone() ); ?>" placeholder="Enter Phone Number...">              
			<span id="phone1"></span>
		</div>
    </div>

    </fieldset>
    <fieldset><legend>Authentication</legend>
    <div>
        <label for="password">Password</label>              
        <div>
			<input type="password" name="pwd" id="pwd" onBlur='password()' placeholder="Enter New Password..." >    
			<span id="pwd1"></span>
      	</div>
    </div>
    <div>
        <label for="password_confirmation">Password Confirmation</label>              
        <div>
			<input type="password" name="pwd_con" id="pwd_con" onBlur='pass()' placeholder="Confirm New Password...">
			<span id="pwdcon1"></span>
        </div>
    </div>

    </fieldset>

    <fieldset><legend>Roles</legend>
    <div>           
      	<div>           
			<select name="roleUser" id="roleUser">
				<option value="0">Phân quyền</option>
                <?php
                    foreach($this->roles as $key =>$role){
                ?>                 
				<option value="<?php echo $role->getRoleId(); ?>"><?php echo $role->getName(); ?></option>
                <?php
                    }
                ?>                
			</select>             
		</div>
    </div>    
	</fieldset>          
        <div>         	
            <a href="<?php echo URL_BASE?>/admin/user/index" class="btn">Go Back</a>
            <input type="submit" name="btnCreate" id="x" value="<?php echo ( $this->create ? 'Create User' : 'Save User' )?>" />
        </div>
    </form>
</div>