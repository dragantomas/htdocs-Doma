<?php

include_once "sys/header.php";

include_once "sys/navigation.php";

?>

	<div id="slide">
		<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="overlay"></div>
				<img src="assets/images/slide3.jpg" style="width:100%">
				<div class="slide-text"><a href="blog.html">Најдобри услови за компјутерски науки</a></div>
			</div>
			<div class="mySlides fade">
				<div class="overlay"></div>
				<img src="assets/images/slide1.jpg" style="width:100%">
				<div class="slide-text"><a href="blog2.html">Уписи за студии <br/>за Академска година 2017/18</a></div>
			</div>
			<div class="mySlides fade">
				<div class="overlay"></div>
				<img src="assets/images/slide2.jpg" style="width:100%">
				<div class="slide-text"><a href="blog.html">Наставна програма според најновите трендови</a></div>
			</div>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			<div style="text-align:center"> 
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>
		</div>
	</div>
	<div class="row introduction">
		<div class="wrapper">
		<div class="introduction-background"></div>
			<div class="intro-text"><a href="blog.html">Најдобра Академија во Македонија<br/> за едукација и тренинг во ИТ сферата</a></div>
		</div>
		<div class="wrapper">
			<div class="intro-box">
				<h3>Кратки курсеви</h3>
				<div class="intro-box-inside">
					<a href="blog.html"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p></a>
				</div>
				<button type="submit"><a href="blog.html">Повеќе</a></button>
			</div>
			<div class="intro-box">
				<h3>Семестрални студии</h3>
				<div class="intro-box-inside">
					<a href="blog2.html"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p></a>
				</div>
				<button type="submit"><a href="blog2.html">Повеќе</a></button>
			</div>
			<div class="intro-box">
				<h3>Мастер студии</h3>
				<div class="intro-box-inside">
					<a href="blog.html"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p></a>
				</div>
				<button type="submit"><a href="blog.html">Повеќе</a></button>
			</div>
		</div>
	</div>
	<div class="row welcome">
		<div class="wrapper">
			<img src="assets/images/model1.jpg">
			<h1><a href="#">Добредојдовте на Академијата</a></h1>
			<div class="welcome-box">
				<div class="logo-back">
					<img src="assets/images/logoknigi.png">
				</div>
				<h3><a href="#">Богата библиотека</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div>
			<div class="welcome-box">
				<div class="logo-back">
					<img src="assets/images/logoprofesor.png">
				</div>
				<h3><a href="#">Врвни професори</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div>
			<div class="welcome-box">
				<div class="logo-back">
					<img src="assets/images/logouniverzitet.png">
				</div>
				<h3><a href="#">Модерни лаборатории</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div>
			<div class="welcome-box">
				<div class="logo-back">
					<img src="assets/images/logodesk.png">
				</div>
				<h3><a href="#">Нова инфраструктура</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div>
		</div>
	</div>
	<div class="row studii">
		<h1><a href="#">Најпопуларни студии</a></h1>
		<div class="wrapper">
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">ВЕБ ДЕВЕЛОПМЕНТ</a>
				</div>
				<div class="studii-img-container">
					<img src="assets/images/studii1.jpg" class="studii-image">
					<div class="studii-middle">
						<div>
							<button class="studii-box-btn" type="submit"><a href="#">повеќе</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">ГРАФИЧКИ ДИЗАЈН</a>
				</div>
				<div class="studii-img-container">
					<img src="assets/images/studii2.jpg" class="studii-image">
					<div class="studii-middle">
						<div>
							<button class="studii-box-btn" type="submit"><a href="#">повеќе</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">ПРОГРАМСКИ ЈАЗИЦИ</a>
				</div>
				<div class="studii-img-container">
					<img src="assets/images/studii3.jpg" class="studii-image">
					<div class="studii-middle">
						<div>
							<button class="studii-box-btn" type="submit"><a href="#">повеќе</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper">
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">МРЕЖНА ИНФРАСТРУКТУРА</a>
				</div>
				<div class="studii-img-container">
					<img src="assets/images/studii4.jpg" class="studii-image">
					<div class="studii-middle">
						<div>
							<button class="studii-box-btn" type="submit"><a href="#">повеќе</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">БАЗИ НА ПОДАТОЦИ</a>
				</div>
				<div class="studii-img-container">
					<img src="assets/images/studii5.jpg" class="studii-image">
					<div class="studii-middle">
						<div>
							<button class="studii-box-btn" type="submit"><a href="#">повеќе</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">ПРОЕКТ МЕНАЏМЕНТ</a>
				</div>
				<div class="studii-img-container">
					<img src="assets/images/studii1.jpg" class="studii-image">
					<div class="studii-middle">
						<div>
							<button class="studii-box-btn" type="submit"><a href="#">повеќе</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row izbor">
		<div class="wrapper">
		<div class="izbor-model"><img src="assets/images/model2.png"></div>
			<h1><a href="#">Зошто сме најдобриот избор?</a></h1>
		</div>
		<div class="wrapper">
			<div class="izbor-box">
				<div class="izbor-logo"><img src="assets/images/logotabla.png"></div>
					<h3><a href="#">Модерни студии</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div>
			<div class="izbor-box">
				<div class="izbor-logo"><img src="assets/images/logodiploma.png"></div>
					<h3><a href="#">Гарантирана кариера</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div>
			<div class="izbor-box">
				<div class="izbor-logo"><img src="assets/images/logotasna.png"></div>
					<h3><a href="#">Ниски трошоци</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div><div class="izbor-box">
				<div class="izbor-logo"><img src="assets/images/logokniga.png"></div>
					<h3><a href="#">Најдобра инфраструктура</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div><div class="izbor-box">
				<div class="izbor-logo"><img src="assets/images/logomolekul.png"></div>
					<h3><a href="#">Истражувачки процеси</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div><div class="izbor-box">
				<div class="izbor-logo"><img src="assets/images/logoskolo.png"></div>
					<h3><a href="#">Дополнителни настани</a></h3>
				<p class="welcome-box">Vivamus efficitur lacus mi, vitae volutpat nibh varius non. Quisque condimentum, mi ac feugiat ornare.</p>
			</div>
		</div>
	</div>
	<div class="row brojki">
		<div class="brojki-background"></div>
		<div class="wrapper">
			<div class="brojki-container">
				<h1>68</h1>
				<h6>професори</h6>
				<p></p>
			</div>
			<div class="brojki-container">
				<h1>130</h1>
				<h6>награди</h6>
				<p></p>
			</div>
			<div class="brojki-container">
				<h1>75%</h1>
				<h6>студенти</h6>
				<p>кои се вработени</p>
			</div>
			<div class="brojki-container">
				<h1>60</h1>
				<h6>проекти</h6>
				<p>на студенти <br/>во последните три години</p>
			</div>
			<div class="brojki-container">
				<h1>34</h1>
				<h6>компании</h6>
				<p>со кои соработуаме</p>
			</div>
		</div>
	</div>
	<div class="row profesori">
		<div class="profesori-background"></div>
		<div class="wrapper">
			<h1><a href="#">Нашиот наставен кадар</a></h1>
		</div>
		<div class="wrapper">
		 	<div class="prof-content prof-display-container">
		 		<div class="ProfmySlides">
		 		<button class="prof-btn-left" onclick="plusDivs(-1)">&#10094;</button>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor1.jpg"></a>
		 					<a href="#"><h6>Петар Петковски</h6></a>
		 					<a href="#"><p>доктор по компјутерски науки</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor2.jpg"></a>
		 					<a href="#"><h6>Билјана Стојкова</h6></a>
		 					<a href="#"><p>академски сликар</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor3.jpg"></a>
		 					<a href="#"><h6>Горан Стојановски</h6></a>
		 					<a href="#"><p>магистер по компјутерски науки</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor4.jpg"></a>
		 					<a href="#"><h6>Софија Наумовска</h6></a>
		 					<a href="#"><p>доктор по компјутерски науки</p></a>
		 				</div>
		 			</div>
				<button class="prof-btn-right" onclick="plusDivs(1)">&#10095;</button>
		 		</div>
		 		<div class="ProfmySlides">
		 		<button class="prof-btn-left" onclick="plusDivs(-1)">&#10094;</button>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><a href="#"><img src="assets/images/profesor5.jpg"></a>
		 					<a href="#"><h6>Владимир Стојаков</h6></a>
		 					<a href="#"><p>доктор по компјутерски науки</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor6.jpg"></a>
		 					<a href="#"><h6>Милан Ѓорчев</h6></a>
		 					<a href="#"><p>доктор по компјутерски науки</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor7.jpg"></a>
		 					<a href="#"><h6>Тони Младенов</h6></a>
		 					<a href="#"><p>доктор по применет дизајн</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor8.jpg"></a>
		 					<a href="#"><h6>Елена Пецова</h6></a>
		 					<a href="#"><p>магистер по индустриски дизајн</p></a>
		 				</div>
		 			</div>
		 		<button class="prof-btn-right" onclick="plusDivs(1)">&#10095;</button>
		 		</div>
		 		<div class="ProfmySlides">
		 		<button class="prof-btn-left" onclick="plusDivs(-1)">&#10094;</button>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor9.jpg"></a>
		 					<a href="#"><h6>Ирена Конева</h6></a>
		 					<a href="#"><p>доктор по природни науки</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor10.jpg"></a>
		 					<a href="#"><h6>Никола Ацкоев</h6></a>
		 					<a href="#"><p>доктор по компјутерски науки</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor11.jpg"></a>
		 					<a href="#"><h6>Светлана Локарева</h6></a>
		 					<a href="#"><p>магистер по компјутерски науки</p></a>
		 				</div>
		 			</div>
		 			<div class="prof-slider">
		 				<div class="prof-slider-inside">
		 					<a href="#"><img src="assets/images/profesor12.jpg"></a>
		 					<a href="#"><h6>Катерина Палевска</h6></a>
		 					<a href="#"><p>доктор по менаџмент</p></a>
		 				</div>
		 			</div>
		 		<button class="prof-btn-right" onclick="plusDivs(1)">&#10095;</button>
		 		</div>
		 	</div>
		</div>
	</div>
	<div class="row studenti">
		<div class="studenti-background"></div>
		<div class="wrapper">
		</div>
			<div class="wrapper">
			 	<div class="stud-content stud-display-container">
			<h1><a href="#">Претходни генерации</a></h1>
			 		<div class="StudmySlides">
			 			<button class="stud-btn-left" onclick="plusDivsSt(-1)">&#10094;</button>
				 			<div class="stud-slider">
				 				<div class="stud-slider-inside">
				 					<a href="#"><img src="assets/images/student2.png"></a>
				 					<a href="#"><h4>Борјанa Симоновска</h4></a>
				 					<h5>Веб девелопмент, генерација 2015/16</h5>
				 					<p>Duis ultricies justo nec lorem aliquet sodales. Suspendisse potenti. Cras ut posuere odio. Suspendisse porta, mauris venenatis dignissim porttitor, ligula magna pretium est, eu cursus tortor erat quis sem. Sed purus felis, dapibus vel fringilla in, luctus in metus. Quisque egestas tincidunt venenatis. Morbi nisi erat, dapibus a neque pharetra, molestie posuere ex. Proin eget congue sem, a pulvinar turpis. Aenean vehicula tristique justo in ultricies. Donec ut facilisis dolor.</p>
				 				</div>
				 			</div>
				 		<button class="stud-btn-right" onclick="plusDivsSt(1)">&#10095;</button>
				 	</div>
				 	<div class="StudmySlides">
			 			<button class="stud-btn-left" onclick="plusDivsSt(-1)">&#10094;</button>
				 			<div class="stud-slider">
				 				<div class="stud-slider-inside">
				 					<a href="#"><img src="assets/images/student1.png"></a>
				 					<a href="#"><h4>Симеон Нацев</h4></a>
				 					<h5>Графички дизајн, генерација 2015/16</h5>
				 					<p>Duis ultricies justo nec lorem aliquet sodales. Suspendisse potenti. Cras ut posuere odio. Suspendisse porta, mauris venenatis dignissim porttitor, ligula magna pretium est, eu cursus tortor erat quis sem. Sed purus felis, dapibus vel fringilla in, luctus in metus. Aenean vehicula tristique justo in ultricies. Quisque egestas tincidunt venenatis. Morbi nisi erat, dapibus a neque pharetra, molestie posuere ex. Proin eget congue sem, a pulvinar turpis. Aenean vehicula tristique justo in ultricies. Donec ut facilisis dolor.</p>
				 				</div>
				 			</div>
				 		<button class="stud-btn-right" onclick="plusDivsSt(1)">&#10095;</button>
				 	</div>
				 	<div class="StudmySlides">
			 			<button class="stud-btn-left" onclick="plusDivsSt(-1)">&#10094;</button>
				 			<div class="stud-slider">
				 				<div class="stud-slider-inside">
				 					<a href="#"><img src="assets/images/student3.png"></a>
				 					<a href="#"><h4>Јана Маркова</h4></a>
				 					<h5>Академија за програмирање, генерација 2015/16</h5>
				 					<p>Duis ultricies justo nec lorem aliquet sodales. Suspendisse potenti. Aenean vehicula tristique justo in ultricies. Cras ut posuere odio. Suspendisse porta, mauris venenatis dignissim porttitor, ligula magna pretium est, eu cursus tortor erat quis sem. Sed purus felis, dapibus vel fringilla in, luctus in metus. Quisque egestas tincidunt venenatis. Aenean vehicula tristique justo in ultricies. Morbi nisi erat, dapibus a neque pharetra, molestie posuere ex. Proin eget congue sem, a pulvinar turpis. Aenean vehicula tristique justo in ultricies. Donec ut facilisis dolor.</p>
				 				</div>
				 			</div>
				 		<button class="stud-btn-right" onclick="plusDivsSt(1)">&#10095;</button>
				 	</div>
				</div>
			</div>
	</div>
	<div class="row studii infrastruktura">
		<h1><a href="#">Инфраструктура</a></h1>
		<div class="wrapper">
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">ПРОСТОРИИ</a>
				</div>
				<div class="studii-img-container">
					<img src="assets/images/infra1.jpg" class="studii-image">
					<div class="studii-middle">
						<div>
							<button class="studii-box-btn" type="submit"><a href="#">повеќе</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">ОПРЕМА</a>
				</div>
				<div class="studii-img-container">
					<img src="assets/images/infra2.jpg" class="studii-image">
					<div class="studii-middle">
						<div>
							<button class="studii-box-btn" type="submit"><a href="#">повеќе</a></button>
						</div>
					</div>
				</div>
			</div>
			<div class="studii-box">
				<div class="studii-naslov">
					<a href="#">ЛОКАЦИЈА</a>
				</div>
				<div class="studii-img-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5931.000947818444!2d21.449792559832375!3d41.9895336043894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smk!4v1519589706934" width="378" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>	
				</div>
			</div>
		</div>
	</div>



<?php

include_once "sys/footer.php";

?>	

<script type="text/javascript" src="assets/scripts/slider.js"></script>
<script type="text/javascript" src="assets/scripts/global.js"></script>


<!-- <div class="navigation">
	<nav class="classic_menu"></nav>

	<div class="burger_menu">
		
		<button class="triger_burger">---</button>
		<nav class="burger_menu">
			<ul>
				<li></li>
			</ul>
		</nav>

	</div>

</div> -->



</body>
</html>


<!-- POSLEDNO ZA GIT > OD DOMA > 23:10 > Nedela 04-03-18 -->


