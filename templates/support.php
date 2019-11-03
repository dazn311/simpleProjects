
<?php 
    $banerImg1 = "";
    $banerImg2 = "";
   if($isMobile) {
     $banerImg1 =  "images/pic01.jpg";
     $banerImg2 =  "images/pic01.jpg";
   
   }else{
	 $banerImg1 =  "images/pic01.png"; 
	 $banerImg2 =  "images/pic01.png";
   }

?>

<div id="hide" class="container">

	 
</div>



<div id="three-column" class="container  ">
	<div id="tbox1"  >
		<h2 id="order">Count percents</h2>
		<p>To calculate percentages, you need to dial the number with the sign &quot;+&quot; or &quot;-&quot; the number in percentage and the sign &quot;%&quot;. Example: <span class="style4">150 + 20%</span>.</p>

		<a href="#" class="button">перейти...</a> </div>
	
	<div id="tbox2">
		<h2>multiplication table</h2>
		<p>For schoolchildren there is a multiplication table. It is very simple to use, press two digital buttons at the same time and the result will be displayed separately, without affecting the main expression.</p>
		<a href="index.php?page=help" class="button">выбрать...</a> </div>
	<div id="tbox3">
		<h2>For shopping</h2>
		<p>For shopping, you can, in addition to the numbers, write a text that tells you exactly what we think.</p>

		<a href="#" class="button">читать...</a> </div>
</div>

<div id="page" class="container ">
	<div id="content" class="animated flipInY">
		<div class="title">
			<h2>Новые <span class="byline"> приложения iOS</span></h2>
			
		</div>
		<a href="#" class="image image-full "><img id="banerImg2" src="images/pic01.jpg" alt="Calculator" /></a>
		<p>Новый <strong>xCal</strong> - это бесплатный калькулятор для IOS 8/12 разработан для инженеров, школьников и домохозяек.</p>
	</div>
	<div id="sidebar" class="animated bounceInRight">
		<h2 class="title">Планы</h2>
		<ul class="style2">
			<li class="first">
				<h3><a href="#">Менеджер Финансов</a></h3>
				<p>Менеджер финансов - будет совместно работать с калькулятором xCal.</p>
			</li>
			<li>
				<h3><a href="#">Фотоконтакт</a></h3>
				<p> "Фотоконтакт" - приложение для звонков по картинкам. Проложение разработывается главным образом для маклеров, с возможность выбирать недвижимость. </p>
			</li>
			<li>
				<h3><a href="#">Чат</a></h3>
				<p> Чат - эта программа для ПК, для телефонов и планшетов. С поддержкой СИМ карты и без нее. </p>
			</li>
		</ul>
	</div>
</div>

