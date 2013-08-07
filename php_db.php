<html>
	<body>
		<?php
		//	PHP와 MySQL의 상호작용
		//	데이터베이스 서버에 접속하는 함수
		$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
		//	데이터베이스에 접속
		mysql_select_db('db_name');
		//	SQL문을 질의(query)한다.
		$result = mysql_query('SELECT name FROM employee');
		//	결과를 출력한다.
		echo mysql_result($result, 2);
		?>
	</body>
</html>