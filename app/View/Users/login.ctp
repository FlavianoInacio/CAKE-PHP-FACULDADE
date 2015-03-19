<html>
<head>
	<title>Login</title>
</head>
<body>
	<H1>LOGIN</H1>
	<?php 
	echo $this->Form->create('User',array('action'=>'login'));
	echo $this->Form->input('username');
	echo $this->Form->input('password');	
	echo $this->Form->end('Login');
	 ?>
</body>
</html>