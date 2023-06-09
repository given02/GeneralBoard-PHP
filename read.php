<?php
	include "./db.php";

	$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
	$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
	$hit = $hit['HIT'] + 1;
	$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
	$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
	$board = $sql->fetch_array();
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
<div id="board_read">
	<h2><?php echo $board['TITLE']; ?></h2>
		<div id="user_info">
			<?php echo $board['REG_ID']; ?> <?php echo $board['REG_DATE']; ?> 조회수:<?php echo $board['HIT']; ?>
				<div id="bo_line"></div>
			</div>
			<div id="bo_content">
				<?php echo nl2br("$board[CONTENT]"); ?>
			</div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="./index.php">[목록으로]</a></li>
			<li><a href="./modify.php?idx=<?php echo $board['IDX']; ?>">[수정]</a></li>
			<li><a href="./delete.php?idx=<?php echo $board['IDX']; ?>">[삭제]</a></li>
		</ul>
	</div>
</div>
</body>
</html>