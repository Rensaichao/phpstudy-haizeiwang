<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/Ukenn2112/UkennWeb@3.0/index/web.js"></script>
	
<script language="javascript">
	function chkinput(form){
		if(form.name.value==""){
			alert("请输入用户名!");
			form.name.select();
			return(false);
		}
		if(form.pwd.value==""){
			alert("请输入用户密码!");
			form.pwd.select();
			return(false);
		}
		return(true);
	}

</script>
	<script  color="255,182,193" opacity='1' zIndex="-1" count="100" src="https://cdn.bootcss.com/canvas-nest.js/2.0.4/canvas-nest.js" type="text/javascript"></script>
   <div class="loading">
        <h2>Login</h2>
        <form action="chkadmin.php"  method="post">
            <div class="input">
                <input name="name" type="text" class="inputcss" id="name" required>
                <label for="username">用户名</label>
            </div>
            <div class="input">
				 <input name="pwd" type="password" class="inputcss" id="pwd" required>
                <label for="Password">密码</label>
            </div>
            <button class="but">登陆</button>
        </form>
    </div>

