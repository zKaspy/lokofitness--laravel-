<html>
<head>
	<title>LOKO FINTESS - войти в личный кабинет</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cabinet.css">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta charset="utf-8">
	<script src="js/cabinet.js"></script>
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
		<div class="wrapper">
		<section class="login-form">
		@if (Session::has('error-email'))
		<div class="alert-message">
			<span>Данный Email адрес уже используется</span>
		</div>
		@endif
		@if (Session::has('error-auth'))
		<div class="alert-message">
			<span>Неправильный логин или пароль</span>
		</div>
		@endif
		@if (Session::has('error-empty'))
		<div class="alert-message">
			<span>Пожалуйста, заполните все поля!</span>
		</div>
		@endif
		@if (Session::has('error-data'))
		<div class="alert-message">
			<span>Проверьте, что ваши данные соответствуют правилам ниже:</span>
			<ul>
				<li>Длина пароля не менее 6 символов</li>
				<li>Email адрес содержит знак '@' и не используется на сайте</li>
				<li>Все поля заполнены</li>
			</ul>
		</div>
		@endif
			<div class="login-form-title">
				<ul>
					<li class="login-form-title-item login-form-title-item--active" onclick="FormReg()">Регистрация</li>
					<li class="login-form-title-item" onclick="FormAuth()">Вход</li>
				</ul>
			</div>
			<div class="form">
				<form class="form__reg" method="post" action="{{ route('registerPOST') }}">
				{{ csrf_field() }}
					<input class="form__reg-input" placeholder="Имя" name="name">
					<input class="form__reg-input" placeholder="Email" name="email">
					<input class="form__reg-input-password"  name="password" placeholder="Пароль" type="password">
					<img class="eye_toggle" onclick="hidePassword()" src="img/eye.png" width="15px" height="15px">
					<img class="eye_toggle-off" onclick="hidePassword()" src="img/eye-off.svg" width="15px" height="15px">
					<input class="form__reg-button" type="submit" value="Зарегистрироваться">
				</form>
				<div class="login-social">
				<div class="login-social-item">
				Войти через соцсети
				</div>
					<ul class="login-social-nav">
						<li class="login-social-nav-item"><a href="{{ route('socialAccount', 'vkontakte') }}"><img src="img/vk.svg" width="54px" height="54px"></a></li>
						<li class="login-social-nav-item"><a><img src="img/inst.png" width="54px" height="54px" style="opacity: 0.2"></a></li>
						<li class="login-social-nav-item"><a><img src="img/twitter.svg" width="54px" height="54px" style="opacity: 0.2"></a></li>
						<li class="login-social-nav-item"><a><img src="img/facebook.svg" width="54px" height="54px" style="opacity: 0.2"></a></li>
					</ul>
				</div>
			</div>
			<div class="form-auth">
				<form class="form__auth" method="post" action="{{ route('loginPOST') }}">
				{{ csrf_field() }}
					<input class="form__auth-input" placeholder="Email" name="email">
					<input class="form__auth-input-password"  name="password" placeholder="Пароль" type="password">
					<img class="eye_toggle" onclick="hidePasswordA()" src="img/eye.png" width="15px" height="15px">
					<img class="eye_toggle-off" onclick="hidePasswordA()" src="img/eye-off.svg" width="15px" height="15px">
					<input class="form__auth-button" type="submit" value="Войти">
				</form>
				<div class="recovery_password">
					<a>Забыли пароль?</a>
				</div>
				<div class="login-social">
				<div class="login-social-item">
				Войти через соцсети
				</div>
					<ul class="login-social-nav">
						<li class="login-social-nav-item"><a href="{{ route('socialAccount', 'vkontakte') }}"><img src="img/vk.svg" width="54px" height="54px"></a></li>
						<li class="login-social-nav-item"><a><img src="img/inst.png" width="54px" height="54px" style="opacity: 0.2"></a></li>
						<li class="login-social-nav-item"><a><img src="img/twitter.svg" width="54px" height="54px" style="opacity: 0.2"></a></li>
						<li class="login-social-nav-item"><a><img src="img/facebook.svg" width="54px" height="54px" style="opacity: 0.2"></a></li>
					</ul>
				</div>
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
	</div>
</body>
</html>