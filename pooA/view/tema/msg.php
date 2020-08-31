<?php
	if(isset($_SESSION['msg'])){
		foreach($_SESSION['msg'] AS $msg){
			echo "<div class='msg alert alert-".$msg['class']."'>"
			.$msg['msg'].
			"
		  </div>";
		}
		unset($_SESSION['msg']);
		echo "<script>
			msg=document.querySelector('.msg');
			console.log(msg);
			setTimeout(()=> {
   				msg.style.display='none';

			}, 3000);

		</script>";
	}
?>