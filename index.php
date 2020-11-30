<!DOCTYPE HTML>
<html>
<head>
	
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Dong-Eui Mobile</title>
	
	<link rel="stylesheet" href="jquery.mobile/jquery.mobile-1.4.5.min.css"/>
	<script src="jquery.mobile/jquery-1.11.1.min.js"></script>
	<script src="jquery.mobile/jquery.mobile-1.4.5.min.js"></script>
	
	<script src="cordova.js"></script>	

<style>
   li { list-style:none; }
  .picture { list-style:none; padding:0; margin:0; }
  .picture li { float:left; width:50%;}
  .picture li a {display:block; margin:5px; border: 1px }
  .picture li img { display:block; width:50%;  height:auto;}
  .picture li img:hover { display:block; width:100%;  height:auto;} 
  
  table {
        width: 100%;
      }
      th, td {
        padding: 10px;
        border-bottom: 1px solid #dadada;
      }
</style>
</head>

<body>
<div data-theme="b">
	<div data-role="page" id="home">
		<div data-role="header" data-theme="b">
			<h1>동의과학대학교 소개 앱</h1>
		</div>
		<div data-role="content" style="text-align:center">
				<img src="bgdit1.jpg" >
			<ul data-role="listview" data-inset="true">
				<li><a href="#intro">동의과학대학교 소개</a></li>
				<li><a href="#movie" data-rel="dialog">동의과학대학교 영상</a></li>
				<li><a href="#wizard3-1" data-rel="dialog">동의과학대학교 음악</a></li>
				<li><a href="#gallery">동의과학대학교 사진</a></li>
			</ul>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>동의과학대학교_홍보</h1>
		</div>
	</div>
	
	<div data-role="page" id="intro" data-theme="b">
		<div data-role="header" data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>			
			<h1>동의과학대학교 소개</h1>
		</div>
		<div data-role="content">
				<div  style="text-align:center">
					<img src="bgdit2.png">
				</div>			
			<div data-role="collapsible-set" data-theme="b" data-content-theme="e">
				<div data-role="collapsible">
					<h3>동의과학대학교 역사</h3>
					<p>동의과학대학교(東義科學大學校), 1973년 3월 (동의전문학교) 개교</p>
				</div>
				<div data-role="collapsible">
					<h3>동의과학대학교 설립이념</h3>
					<p>본 대학은 동의학원 설립자이며 이사장인 석당 김임식 박사의 학원설립 정신인 동의지천에 바탕을 두고 있다. 동의는 바로 '새로운 도덕관, 바르고 참된 뜻을 펼치는 학문하는 곳' 이요, 지천이란 '군자'가 걸어야 할 지상의 목표 이다. 이에 동의과학대학의 건학정신은 성실하고 유능한 직업 기술인을 육성하는데 있다.</p>
				</div>
				<div data-role="collapsible" >
					<h3>동의과학대학교 개요</h3>
					<p>DONG-EUI INSTITUTE OF TECHNOLOGY - 부산광역시 부산진구 양지로 54 (양정동)에 있는 2/3/4년제[2] 사립 전문대학. 석당(碩堂) 김임식 박사가 1966년에 동의학원, 1972년에 동의전문학교를 설립한 것이 시초이다. 이후 동의공업전문학교, 동의공업대학, 동의과학대학, 동의과학대학교 순으로 개칭해서 지금에 이르렀다. 이는 산업환경 변화에 따라 인문사회계열, 자연과학계열, 보건계열 등 다양한 학과가 신설되면서 ‘공업대학’이라는 교명으로는 대학의 정체성을 표현하는 데 한계가 있다는 판단 하에 이뤄진 결정이다. 동의대학교, 동의공업고등학교, 동의중학교, 동의의료원과 같은 재단이다.</p>
				</div>
				<div data-role="collapsible" >
					<h3>동의과학대학교 위치(맵)</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.632889417953!2d129.0703436156025!3d35.16577526567454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568eca70d07d243%3A0xca0acf886f784030!2z64-Z7J2Y6rO87ZWZ64yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1604571617106!5m2!1sko!2skr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div data-role="collapsible" >
					<h3>동의과학대학교 학생정보</h3>
					<table width=600 border=1 align=center>
						<tr>
						<td>학번</td>
						<td>성</td>
						<td>이름</td>
						<td>학과</td>
						</tr>
						<?php
						$db_conn = @mysqli_connect("localhost", "root", "", "student");
						if (!$db_conn) {
							$error = mysqli_connect_error();
							$errno = mysqli_connect_errno();
							print "$errno: $error\n";
							exit();
						}
						$query = "SELECT * FROM student";
						$result = mysqli_query($db_conn, $query);
						if ( $result ) {
							echo "조회된 행의 수 : ".mysqli_num_rows($result)."<br />";
							while ($row = mysqli_fetch_assoc($result)) {
						?>
							<tr>
							<td><?=$row["std_no"];?></td>
							<td><?=$row["first_name"];?></td>
							<td><?=$row["last_name"];?></td>
							<td><?=$row["dp"];?></td>
							</tr>
						<?php
							}
							// 결과 해제
							mysqli_free_result($result);
						} else {
							echo "Error : ".mysqli_error($db_conn);
						}
						mysqli_close($db_conn);
						?>
						</table>
				</div>
			</div>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>동의과학대학교_홍보</h1>
		</div>		
	</div>
	
	<div data-role="page" id="movie" data-theme="b">
		<div data-role="header" data-position="fixed" data-theme="b">
			<h1>동의과학대학교 영상</h1>
		</div>
		<div data-role="content" >
			<div class="ui-bar ui-bar-e">하늘에서 바라본 동의과학대학교</div><br/>
			<li><iframe width="100%" height="240" src="https://www.youtube.com/embed/XHySVrxotNc"></iframe></li><br/>
			<div class="ui-bar ui-bar-e">동의과학대학교 CF</div><br/>
			<li><video controls width="100%" preload="metadata">
				<source src="ditmovie.mp4" type="video/mp4">
			</video></li>
		</div>
		<div data-role="footer" data-theme="b">
		</div>
	</div>
	
	<div data-role="page" id="wizard3-1">
		<div data-role="header">
			<h1>동의과학대학교 애국가</h1>
		</div>
		<div data-role="content">
			<div class="ui-bar ui-bar-e">애국가</div><br/>
			<audio controls width="100%" preload="metadata">
				<source src="anthem.mp3" type="audio/mp3">
			</audio>	
			<img src="3-1.jpg" alt="" width="100%">
		</div>
		<div data-role="footer">
			<a href="#home"  data-direction="reverse">이전</a>
			<a href="#wizard3-2" data-rel="dialog" data-transition="slide">다음</a>
		</div>
	</div>

	<div data-role="page" id="wizard3-2">
		<div data-role="header">
			<h1>동의과학대학교 CM</h1>
		</div>
		<div data-role="content">
			<div class="ui-bar ui-bar-e">동의합니다 CM송</div><br/>
			<audio controls width="100%" preload="metadata">
				<source src="ditcm.mp3" type="audio/mp3">
			</audio>			
			<img src="3-2.jpg" alt="" width="100%">
		</div>
		<div data-role="footer">
			<a href="#wizard3-1"  data-direction="reverse">이전</a>
			<a href="#home">처음</a>
		</div>
	</div>

	<div data-role="page" id="gallery"  data-theme="b">
		<div data-role="header" data-position="fixed"  data-theme="b">
			<a href="#home" data-icon="arrow-l" data-direction="reverse">처음</a>
			<h1>동의과학대학교 갤러리</h1>
		</div>
		<div data-role="content">
            <ul class="picture">
				<li><a href="4-1.jpg" rel="external"><img src="4-1.jpg" /></a></li>	
				<li><a href="4-2.jpg" rel="external"><img src="4-2.jpg" /></a></li>	
				<li><a href="4-3.jpg" rel="external"><img src="4-3.jpg" /></a></li>	
				<li><a href="4-4.jpg" rel="external"><img src="4-4.jpg" /></a></li>	
				<li><a href="4-5.jpg" rel="external"><img src="4-5.jpg" /></a></li>	
				<li><a href="4-6.jpg" rel="external"><img src="4-6.jpg" /></a></li>	
				<li><a href="4-7.jpg" rel="external"><img src="4-7.jpg" /></a></li>	
				<li><a href="4-8.jpg" rel="external"><img src="4-8.jpg" /></a></li>	
				<li><a href="4-9.jpg" rel="external"><img src="4-9.jpg" /></a></li>	 
				<li><a href="4-10.jpg" rel="external"><img src="4-10.jpg" /></a></li>    
				<li><a href="4-11.jpg" rel="external"><img src="4-11.jpg" /></a></li>   
				<li><a href="4-12.jpg" rel="external"><img src="4-12.jpg" /></a></li>
            </ul>
		</div>
		<div data-role="footer" data-position="fixed" data-theme="b">
			<h1>동의과학대학교_홍보</h1>
		</div>		
	</div>
</div>	
</body>
</html>
