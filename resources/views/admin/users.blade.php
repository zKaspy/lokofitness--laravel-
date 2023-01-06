<!DOCTYPE html>
<html>
<head>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <style type="text/css">
  header,
	main,
	footer {
	  padding-left: 240px;
	}

	body {
	  background: white;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
	}

	@media only screen and (max-width: 992px) {
	  header,
	  main,
	  footer {
	    padding-left: 0;
	  }
	}
    main {
        flex: 1 0 auto;
    }

	#credits li,
	#credits li a {
	  color: white;
	}

	#credits li a {
	  font-weight: bold;
	}

	.footer-copyright .container,
	.footer-copyright .container a {
	  color: #BCC2E2;
	}

	.fab-tip {
	  position: fixed;
	  right: 85px;
	  padding: 0px 0.5rem;
	  text-align: right;
	  background-color: #323232;
	  border-radius: 2px;
	  color: #FFF;
	  width: auto;
	}
  </style>
</head>

<body>

  <ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
      <div class="indigo darken-2 white-text" style="height: 180px;">
        <div class="row">
          <img style="margin-top: 5%;" width="100" height="100" src="{{ Auth::user()->img }}" class="circle responsive-img">

          <p style="margin-top: -13%;">
          {{ Auth::user()->name }}
          </p>
        </div>
      </div>
    </li>

    <li id="dash_dashboard"><a class="waves-effect" href="{{ route('admin') }}"><b>Панель управления</b></a></li>

    <ul class="collapsible" data-collapsible="accordion">
      <li id="dash_users">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Пользователи</b></div>
        <div id="dash_users_body" class="collapsible-body">
        <ul>
          <li id="dash_users_header">
            <a class="waves-effect" style="text-decoration: none;" href="{{ route('adminUsers') }}">Клиенты</a>
            <a class="waves-effect" style="text-decoration: none;" href="{{ route('workers') }}">Сотрудники</a>
          </li>
        </ul>
      </li>
    <li id="dash_users">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Отзывы</b></div>
        <div id="dash_users_body" class="collapsible-body">
        <ul>
          <li id="dash_users_header">
            <a class="waves-effect" style="text-decoration: none;" href="#!">Модерация</a>
            <a class="waves-effect" style="text-decoration: none;" href="#!">Архив</a>
          </li>
        </ul>
      </li>
    </ul>
    <li id="dash_pages"><a class="waves-effect" href="pages.html"><b>Страницы</b></a></li>
  </ul>

  <header>
    <ul class="dropdown-content" id="user_dropdown" style="top: 50px">
      <li><a class="indigo-text" href="{{ route('cabinet') }}">Профиль</a></li>
      <li><a class="indigo-text" href="{{ route('logout') }}">Выйти</a></li>
    </ul>

    <nav class="indigo" role="navigation">
      <div class="nav-wrapper">
        <a data-activates="slide-out" class="button-collapse show-on-large" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="/img/candage.gif"></a>

        <ul class="right hide-on-med-and-down">
          <li>
            <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
          </li>
        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </nav>

    <nav>
      <div class="nav-wrapper indigo darken-2">
        <a style="margin-left: 20px;" class="breadcrumb" href="{{ route('admin') }}">Панель управления администратора</a>
        <a class="breadcrumb" href="#">Пользователи</a>

        <div style="margin-right: 20px;" id="timestamp" class="right"></div>
      </div>
    </nav>
  </header>

  <main>
    <div class="row">
    <div class="col s12">
    <ul class="collection">

         @foreach ($users as $user)

        <li class="collection-item avatar">
        @if ($user->img != 'img/default.png')
          <img src="{{ $user->img }}" alt="" class="circle">
        @else
        <img src="/{{ $user->img }}" alt="" class="circle">
        @endif
          <span class="title">ID #{{ $user -> id }}</span>
          <p>{{ $user -> name }} <br>
          {{ $user -> email }}
          </p>
          <a href="users/{{ $user -> id }}" class="secondary-content" style="padding-top: 10px;"><i class="material-icons">send</i></a>
        </li>

        @endforeach

        </ul>
        <div class="paginate" style="text-align:center;">
            {{ $users->links() }}
        </div>
     </div>
  </div>
</main>

  <footer class="indigo page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Loko Fitness</h5>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <span>Made By <a style='font-weight: bold;' href="https://vk.com/shokkcontent" target="_blank">contrerasoff</a></span>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

  <script type="text/javascript">
  	$(document).ready(function() {
  	$('.button-collapse').sideNav();
		$('.collapsible').collapsible();
		$('select').material_select();
  	});
  </script>
</body>
</html>
