<?php include "./db.php"; ?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판</title>
<link rel="stylesheet" type="text/css" href="./css/member.css" />
</head>
<body>
	<div id="login_box">
		<h1>로그인</h1>							
			<form method="post" action="./login_ok.php">
				<table align="center" border="0" cellspacing="0" width="300">
        			<tr>
            			<td width="130" colspan="1"> 
                		<input type="text" name="userid" class="inph">
            		</td>
            		<td rowspan="2" align="center" width="100" > 
                		<button type="submit" id="btn" >로그인</button>
            		</td>
        		</tr>
        		<tr>
            		<td width="130" colspan="1"> 
               		<input type="password" name="userpw" class="inph">
            	</td>
        	</tr>
        	<tr>
           		<td colspan="3" align="center" class="mem"> 
              	<a href="./member.php">회원가입 하시겠습니까?</a>
           </td>
        </tr>
    </table>
  </form>
</div>
</body>
</html>