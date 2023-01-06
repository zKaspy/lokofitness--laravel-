<html>
	<head>
		<title>LOKO FITNESS - лучший фитнес-клуб г.Ярославль!</title>
		<link rel="stylesheet" href="css/style.css">
		<!-- <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet"> -->
		<!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet"> -->
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="img/favicon.png">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<link rel="stylesheet" href="css/flickity.min.css" media="screen">
		<script src="js/flickity.pkgd.min.js"></script>
		<script src="js/zslider.js"></script>
		<script src="js/header_fixed.js"></script>
		@toastr_css
	</head>
	<body>
		<div class="container">
			<header class="header">
				<div class="header__logo">
					<a href="{{ route('index') }}"><img src="img/5D8yfDG.png" width="100px" height="40px"></a>
				</div>
				<div class="header__menu">
					<div class="header__icon">
							<img src="img/timer.svg" width="20px" height="20px">
						</div>
					<div class="header__menu-item">
						<span class="header__title">РЕЖИМ РАБОТЫ</span> <br>
						<span class="header__subtitle">Ежедневно с 10:00 до 22:00</span>
					</div>
					<hr color="#eee" width="1px">
						<div class="header__icon">
							<img src="img/iphone-reverse.svg" width="20px" height="20px">
						</div>
					<div class="header__menu-item">
						<span class="header__title">Фрунзе проспект, 50</span> <br>
						<a href="tel:+74852333707" class="header__subtitle">+7(4852) 333-707</a>
					</div>
					<hr color="#eee" width="1px">
						<div class="header__icon">
							<img src="img/iphone-reverse.svg" width="20px" height="20px">
						</div>
					<div class="header__menu-item">
						<span class="header__title">Гагарина проспект, 34</span> <br>
						<a href="tel:+74852333707" class="header__subtitle">+7(4852) 333-707</a>
					</div>
					<hr color="#eee" width="1px">
				</div>	
				<div class="header__social">
					<a href="https://vk.com/hclokomotiv_official" target="_blank"><img src="img/vk.svg" width="30px" height="30px"></a>
					<a href="https://www.instagram.com/hclokomotiv" target="_blank"><img src="img/inst.png" width="30px" height="30px"></a>
				</div>
			</header>
		</div>
		<section class="header__bottom">
			<div class="container">
				<div class="header__bottom_menu">
					<ul class="header__bottom_nav">
						<li class="header__nav-item"><a href="{{ route('index') }}" target="_blank">Главная</a></li>
						<li class="header__nav-item"><a href="{{ route('comments') }}" target="_blank">Отзывы</a></li>
						<li class="header__nav-item"><a href="{{ route('team') }}" target="_blank">Команда</a></li>
						<li class="header__nav-item"><a href="{{ route('schedule') }}" target="_blank">Расписание</a></li>
						<li class="header__nav-item"><a href="{{ route('price') }}" target="_blank">Цены</a></li>
						@if (Auth::check())
						<li class="header__nav-item"><a href="{{ route('cabinet') }}" target="_blank">Личный кабинет</a></li>
						@else
						<li class="header__nav-item"><a href="{{ route('auth') }}" target="_blank">Войти</a></li>
						@endif
					</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="main_block">
		<div class="main">
			<div class="main__title">
				<h3>Фитнес-клуб в Ярославле</h3>
			</div>
			<div class="main__subtitle">
				<h1>Loko Fitness</h1>
			</div>
			<div class="main__menu">
				<ul class="main__menu-nav">
					<li>Тренажерный зал</li>
					<li>Ежедневно</li>
					<li>с 10:00 до 22:00</li>
					<li>Групповые тренировки</li>
					</ul>
				</div>
			</div>
			<div class="main__button">
				<button class="main__button-item"><a href=".about__info" class="linear-a" style="color: white; text-decoration: none;">Подробнее</a></button>
			</div>
		</section>
		<section class="about">
			<div class="container">
				<div class="about__title">
					Услуги нашего клуба
				</div>
				<div class="about__info">
				<div class="about__info-item">
					<p><b>Loko Fitness</b> – это множество вариаций тренировок по различным спортивным категориям, которые помогут вам поддерживать идеальную физическую форму, оставаться крепким и энергичным. Мы делаем все, чтобы вы были красивы и здоровы от самого нежного до преклонного возраста!</p>
				</div>
				<div class="about__info-item">
					<p>Просторный уютный центр в современном стиле Loft помогает каждому человеку, независимо от возраста, предпочтений и уровня физической подготовки, найти занятие по душе и проводить время в наиболее комфортной атмосфере</p>
				</div>
			</div>
				<ul class="about__card">
					<li class="about__card-item">
					<a href="" class="about__service" href="#" onclick="return false;" style="text-decoration: none;" data-service="1">
						<img src="img/card1.png" alt="" width="110px" height="110px">
						<div class="about__card-title">
							ТРЕНАЖЕРНЫЙ ЗАЛ
						</div>
						<div class="about__card-info">
							Зал 900 кв/м с зонированием и панорамными окнами
						</div>
					</a>
					</li>
					<li class="about__card-item">
					<a href="" class="about__service" href="#" onclick="return false;" style="text-decoration: none;" data-service="2">
						<img src="img/card2.png" alt="" width="110px" height="110px">
						<div class="about__card-title">
							БАССЕЙН
						</div>
						<div class="about__card-info">
							Аквазона с морской водой
						</div>
					</a>
					</li>
					<li class="about__card-item">
					<a href="" class="about__service" href="#" onclick="return false;" style="text-decoration: none;" data-service="3"> 
					<img src="img/card3.png" alt="" width="110px" height="110px">
						<div class="about__card-title">
							ФИТНЕС
						</div>
						<div class="about__card-info">
							5 залов групповых программ
						</div>
					    </a>
					</li>
					<li class="about__card-item">
					<a href="" class="about__service" href="#" onclick="return false;" style="text-decoration: none;" data-service="4">
						<img src="img/card4.png" alt="" width="110px" height="110px">
						<div class="about__card-title">
							БОЙЦОВСКИЙ КЛУБ
						</div>
						<div class="about__card-info">
							Ваше личное совершенствование в единоборствах
						</div>
						</a>
					</li>
					<li class="about__card-item">
					<a href="" class="about__service" href="#" onclick="return false;" style="text-decoration: none;" data-service="5">
						<img src="img/card5.png" alt="" width="110px" height="110px">
						<div class="about__card-title">
							БАННЫЙ КОМПЛЕКС
						</div>
						<div class="about__card-info">
							Все, что нужно после хорошей тренировки!
						</div>
						</a>
					</li>
					<li class="about__card-item">
					<a href="" class="about__service" href="#" onclick="return false;" style="text-decoration: none;" data-service="6">
						<img src="img/card6.png" alt=""width="110px" height="110px">
						<div class="about__card-title">
							ФУНКЦИОНАЛЬНЫЙ ТРЕНИНГ
						</div>
						<div class="about__card-info">
							Работать на свой результат, оставаясь в команде
						</div>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<section class="about_club">
			<div class="about_club-title">
				О нас
			</div>
			<div class="about__club">
			<div class="about__director">
				<img src="img/dir1.jpg" alt="Директор фитнес-клуба" width="673px" height="450px">
			</div>
			<div class="about__director-info">
				<h5>
				– ПОЧЕМУ ИМЕННО ЭТОТ БИЗНЕС? КАК ПРИШЛА ИДЕЯ? ЧТО ПОВЛИЯЛО НА ПЕРЕХОД В СФЕРУ ПРЕДПРИНИМАТЕЛЬСТВА?
				</h5>
				<p>
				– Идея родилась сама собой, я с 6 лет в спорте, имею КМС по боевым видам спорта, занимался борьбой. Идея открыть свой фитнес-клуб зрела давно, но не было финансовой возможности. Потому что даже на маленькую студию требуются деньги как минимум на адаптацию помещения для ремонта. На переход в сферу предпринимательства повлияло то, что на наемной работе расти уже было некуда, поэтому пришлось искать свои пути.
				</p>
				<a href="#" class="read-full">Читать полностью</a>
			</div>			
		</div>
		</section>
		<section class="comments_block">
			<div class="container">
			<div class="comments__title">
					Отзывы гостей
			</div>
			<ul class="comments__list" data-flickity='{ "cellAlign": "center", "contain": true, "pageDots": false, "wrapAround": false }'>
				<li class="list-item" style="height: 525px; width: 370px;">
					<img src="img/car1.jpeg" alt="">
					<div class="comments__list-title">@qwertystyle</div>
					<p>После тяжелой тренировки!</p>
				</li>
				<li class="list-item" style="height: 525px; width: 370px;">
					<img src="img/car2.jpg" alt="">
					<div class="comments__list-title">@zkaspy</div>					
					<p>Пусть я после занятий спортом обессиленный, уставший, но в то же время, какой заряд бодрости дают эти тренировки!</p>
				</li>
				<li class="list-item" style="height: 525px; width: 370px;">
					<img src="img/car3.jpg" alt="">
					<div class="comments__list-title">@zaevskij</div>
					<p>Уже результат на лицо! :)</p>
				</li>
				<li class="list-item" style="height: 525px; width: 370px;">
					<img src="img/car4.jpg" alt="">
					<div class="comments__list-title">@difi</div>
					<p>Сегодня был тяжелый день, но при этом классный :></p>
				</li>
				<li class="list-item" style="height: 525px; width: 370px;">
					<img src="img/car5.jpg" alt="">
					<div class="comments__list-title">@world_d</div>
					<p>Легкая усталость, но на душе приятно!</p>
				</li>
				<li class="list-item" style="height: 525px; width: 370px;">
					<img src="img/car6.jpg" alt="">
					<div class="comments__list-title">@hans landa</div>
					<p>Завтра буду сильней :D</p>
				</li>
			</ul>
		</div>
		</section>
		<section class="map">
			<div class="container">
				<div class="map__title">
					Где мы находимся?
				</div>
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A05903f69e72a839401414aa2fe0154c4c8b2c153bb0ebb223ca31ec5e811c741&amp;source=constructor" width="890" height="377" frameborder="0"></iframe>		
			</div>
		</section>
		<footer class="footer">
			<div class="footer__nav">
				<a class="footer__nav-item" href="{{ route('index') }}">Главная</a>
				<a class="footer__nav-item" href="{{ route('team') }}">Команда</a>
				<a class="footer__nav-item" href="{{ route('schedule') }}">Расписание</a>
				<a class="footer__nav-item" href="{{ route('price') }}">Цены</a>
				<a class="footer__nav-item" href="{{ route('cabinet') }}">Личный кабинет</a>
			</div>
			<div class="footer__social">
				<a href="https://vk.com/hclokomotiv_official" target="_blank"><img src="img/vk.svg" width="30px" height="30px"></a>
				<a href="https://twitter.com/hclokomotiv" target="_blank"><img src="img/twitter.svg" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/hclokomotiv" target="_blank"><img src="img/facebook.svg" width="30px" height="30px"></a>
				<a href="https://www.instagram.com/hclokomotiv" target="_blank"><img src="img/inst.png" width="30px" height="30px"></a>
			</div>
			</div>
			<div class="footer__company">
				ИП Марков В.М <br>
				ИНН: 773465029964 <br>
				ИГНРП: 316774600285846 <br>
				г. Ярославль, ул. Советская д.77
			</div>
		</footer>
		<div class="footer__copyright">
			© LOKO FITNESS 2020-2021 | Все права защищены.
			Копирование материалов данного сайта без разрешения правообладателя запрещено.
		</div>

		<div class="modal_window_about">
			<div class="wrapper_modal">
				<div class="modal-about">
					История открытия первого фитнес-клуба
				</div>
				<div class="close-menu">
					<svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
				</div>
				<div class="modal_text">
					<p>
					<b> – Какие были сложности на этапе запуска?</b> <br>
					– Особо никаких. Просто достаточно грамотно подошел, плотно исследовал сферу, изучал что популярно, что востребовано. Пожалуй, только дороговизна рекламы вызывала сложности. Поэтому упор сделали на социальные сети. И не ошиблись. На 95% мы делаем рекламу в ВКонтакте, Instagram. Присутствуем в одноклассниках, но там слишком мало целевой аудитории.
					</p>
					<p style="padding-top: 8px;">
						<b>– Какую книгу бы вы советовали почитать?</b> <br>
						– Очень советую «Семь навыков высокоэффективных людей» Стивена Кови. В ней написаны очевидные вещи, которые просто нужно вытащить из подсознания.
					</p>
					<p style="padding-top: 8px;">
						<b>– Проходите ли вы тренинги и если да, то какой рекомендуете пройти?</b> <br>
						– Да. Особенно по продажам, так как не занималась никогда ими. Еще очень помогли тренинги по тайм-менеджменту. Опять же, говорят очевидные вещи, но иногда их не удается систематизировать в голове, с чем тренинги замечательно справляются.
					</p>
					<p style="padding-top: 8px;">
						<b>– И напоследок, что бы вы посоветовали молодым предпринимателям?</b> <br>
						– Не бояться. Идти напролом.
					</p>
				</div>
			</div>
		</div>

		<div class="about__service-modal">
			<div class="about__service-modal_wrapper">
				<div class="about__service-modal-about">
					Об услуге «Фитнес»
				</div>
				<div class="about__service-modal-close-menu">
					<svg height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
				</div>
				<div class="about__service-modal-modal_text">
					<div class="about__service-modal-img">
						<img src="img/price4.jpg" alt="" width="350px" height="235px" class="about__service-modal-img-link">
					</div>
					<div class="about__service-modal-text">
					<p class="about__service-modal-text-p">
					
					</p>

					<p style="padding-top: 70px">
					С ценами вы можете ознакомиться на <a href="{{ route('price') }}">данной</a> странице, <br>
					<a href="{{ route('team') }}">Подобрать себе тренера</a>
					</p>
					</div>
				</div>
			</div>
		</div>
	

		@jquery
    	@toastr_js
		@toastr_render
		<script>
		$('.linear-a').on('click', function() {
        let href = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(href).offset().top
        }, {
            duration: 570,  
            easing: "linear" 
        });

        return false;
        });

		$('.read-full').on('click', function() {
			$('.modal_window_about').css('visibility', 'visible');
			$('body').css('overflow', 'hidden');
		});
		$('.close-menu').on('click', function() {
			$('.modal_window_about').css('visibility', 'hidden');
			$('body').css('overflow', 'auto');
			$(document).scrollTop($('.about_club-title').offset().top);
		});

		// модальное окно описания услуги

		function addEvent (elem, type, handler) {
		if  (elem.addEventListener) {
			elem.addEventListener(type, handler, false);
		} else {
			elem.attachEvent('on' + type, function() { handler.call( elem ); });
		}
		return false;
		}

		var itemBox = document.querySelectorAll('.about__service');

		for(var i = 0; i < itemBox.length; i++){
		addEvent(itemBox[i], 'click', aboutServiceClick);
		}

			function aboutServiceClick() {
				if (this.getAttribute('data-service') == 1) {
					document.getElementsByClassName('about__service-modal-about')[0].innerHTML = 'Об услуге «‎Тренажерный зал»‎';
					document.getElementsByClassName('about__service-modal-img-link')[0].src = 'img/price4.jpg';
					document.getElementsByClassName('about__service-modal-text-p')[0].innerHTML = 'Если вы не любите или вам надоел обычный фитнес, посетите тренажерный зал — прекрасный способ поддерживать себя в отличной физической форме. Вы сами можете решить, какую группу мышц вам нужно тренировать, а наши специалисты подскажут вам, как лучше и быстрее добиться результата.';
				} else if (this.getAttribute('data-service') == 2) {
					document.getElementsByClassName('about__service-modal-about')[0].innerHTML = 'Об услуге «‎Бассейн»‎';
					document.getElementsByClassName('about__service-modal-img-link')[0].src = 'img/price5.jpg'
					document.getElementsByClassName('about__service-modal-text-p')[0].innerHTML = 'Фитнес-клуб с бассейном — так можно сказать про каждый из наших клубов. Вода прекрасно влияет на кожу, настроение и самочувствие, помогает всегда держать себя в форме. Поэтому занятия в ней полезны практически всем, а люди, которые ходят в тренажерный зал или занимаются фитнесом, могут расслабиться после напряженной тренировки и дать отдых своим мышцам.';
				} else if (this.getAttribute('data-service') == 3) {
					document.getElementsByClassName('about__service-modal-about')[0].innerHTML = 'Об услуге «‎Фитнес»‎';
					document.getElementsByClassName('about__service-modal-img-link')[0].src = 'img/price8.jpg';
					document.getElementsByClassName('about__service-modal-text-p')[0].innerHTML = 'Фитнес — вид физической активности, который направлен на поддержание общей физической формы, достигаемой за счёт правильного питания, отдыха и умеренных физических нагрузок. В более широком смысле — общая физическая подготовленность организма человека.';
				} else if (this.getAttribute('data-service') == 4) {
					document.getElementsByClassName('about__service-modal-about')[0].innerHTML = 'Об услуге «‎Бойцовский клуб»‎';
					document.getElementsByClassName('about__service-modal-img-link')[0].src = 'img/price6.jpg';
					document.getElementsByClassName('about__service-modal-text-p')[0].innerHTML = 'Для любителей единоборств мы приготовили популярные и интересные занятия с профессиональными тренерами. Вы можете выбрать именно то, что Вам понравится: Самбо, Бокс, Джиу-Джитсу, Тайский бокс, Иайдо, Борьба, Самооборона и не только.Отличный тренерский состав представлен чемпионами мира, мастерами спорта международного класса и заслуженными мастерами спорта.';
				} else if (this.getAttribute('data-service') == 5) {
					document.getElementsByClassName('about__service-modal-about')[0].innerHTML = 'Об услуге «‎Банный комплекс»‎';
					document.getElementsByClassName('about__service-modal-img-link')[0].src = 'img/price7.jpg';
					document.getElementsByClassName('about__service-modal-text-p')[0].innerHTML = 'Банный комплекс сочетает традиции русского целебного омовения и современные высокие стандарты комфорта. Дизайнерский интерьер, услуги профессиональных банщиков помогают восстановить гармонию тела и духа. спа меню. Банные программы. Массаж. Маникюрный кабинет. Русский дух. Базовая банная процедура, в которую входит прогрев, мягкое парение с дубовыми вениками, погружение в контрастные купели и чайная церемония от «Шале Микс».';
				} else { 
					document.getElementsByClassName('about__service-modal-about')[0].innerHTML = 'Об услуге «‎Функциональный тренинг»‎';
					document.getElementsByClassName('about__service-modal-img-link')[0].src = 'img/price9.jpg';
					document.getElementsByClassName('about__service-modal-text-p')[0].innerHTML = 'Функциональные тренировки — это возможность достичь максимальных результатов за короткий срок. В сети Lokofitness многие члены клубов выбирают именно этот формат тренировок, и, соответственно, удобное время посещения фитнес-центра. У нас достаточное количество тренеров, и все они — опытные, квалифицированные специалисты, разрабатывающие уникальные и безопасные программы тренировок, основываясь на ваших целях, опыте занятий, противопоказаниях.';
				}

				$('.about__service-modal').css('visibility', 'visible');
				$('body').css('overflow', 'hidden');
			}

			$('.about__service-modal-close-menu').on('click', function() {
				$('.about__service-modal').css('visibility', 'hidden');
				$('body').css('overflow', 'auto');
				$(document).scrollTop($('.about__title').offset().top);
			});
		</script>
	</body>
</html>