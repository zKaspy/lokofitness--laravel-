<html>
   <head>
      <title>LOKO FINTESS - расписание занятий</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/schedule.css">
      <link rel="icon" type="image/png" href="img/favicon.png">
      <meta charset="utf-8">
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
         <section class="schedule">
            <div class="container">
               <table class="schedule-table">
                  <thead>
                     <tr>
                        <th>
                           <object
                              type="image/svg+xml"
                              data="img/ttimer.svg">
                           </object>
                        </th>
                        <th>12 октября</th>
                        <th>13 октября</th>
                        <th>14 октября</th>
                        <th>15 октября</th>
                        <th>16 октября</th>
                        <th>17 октября</th>
                        <th>18 октября</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>10:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">POLE DANCE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">POLE DANCE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">POLE DANCE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>11:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Бокс</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Бокс</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Бокс</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
						   		<div class="schedule-name">
                                 <a href="">Бокс</a>
                              </div>
							</div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">СТРЕТЧИНГ/РАСТЯЖКА (STRETCH)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">СТРЕТЧИНГ/РАСТЯЖКА (STRETCH)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>12:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">MMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">MMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">MMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">MMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Вольная борьба</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Артём Павлов</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Вольная борьба</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Ткаченко</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Вольная борьба</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Ткаченко</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>13:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Beginners</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Ткаченко</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Beginners</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Ткаченко</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Beginners</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Влада Буторина</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Beginners</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Влада Буторина</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Mix</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Влада Буторина</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Mix</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Ольга Зайцева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Fitness</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Ольга Зайцева</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>14:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Fitness</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Ольга Зайцева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Boom (платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Ольга Зайцева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Boom (платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Ольга Зайцева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Boom (платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Оксана Васильева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Flex (малая группа, платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Оксана Васильева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Flex (малая группа, платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Оксана Васильева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Flex (малая группа, платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Оксана Васильева</a>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td>15:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Flex (малая группа, платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Оксана Васильева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Flex (малая группа, платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Оксана Васильева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Flex (малая группа, платная тренировка)</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Злата Алексеева </a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Sculpt</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Злата Алексеева </a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Sculpt</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Злата Алексеева </a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Sculpt</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Злата Алексеева </a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Body Sculpt</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Злата Алексеева </a>
                           </div>
                        </td>
                     </tr>
					 <tr>
                        <td>16:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Самооборона</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Юлия Зеленская</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Самооборона</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Юлия Зеленская</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Самооборона</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Юлия Зеленская</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Самооборона</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Юлия Зеленская</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Самооборона</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Юлия Зеленская</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Мисутина</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Мисутина</a>
                           </div>
                        </td>
                     </tr>
					 <tr>
                        <td>17:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Мисутина</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Мисутина</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Мисутина</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Кикбоксинг</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Наталья Иванова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ZUMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Наталья Иванова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">CYCLE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Наталья Иванова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">CYCLE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Наталья Иванова</a>
                           </div>
                        </td>
                     </tr>
					 <tr>
                        <td>18:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ZUMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Буцаева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">CYCLE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Буцаева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ZUMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Буцаева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">CYCLE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Буцаева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Flat</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Евгения Буцаева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">Aqua Flat</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">MIX FIT</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Алексеева Злата</a>
                           </div>
                        </td>
                     </tr>
					 <tr>
                        <td>19:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">MIX FIT</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">MIX FIT</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ABT/  LEG FIT/ СУПЕР ЯГОДИЦЫ И ПРЕСС</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ABT/  LEG FIT/ СУПЕР ЯГОДИЦЫ И ПРЕСС</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ABT/  LEG FIT/ СУПЕР ЯГОДИЦЫ И ПРЕСС</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ABT/  LEG FIT/ СУПЕР ЯГОДИЦЫ И ПРЕСС</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ABT/  LEG FIT/ СУПЕР ЯГОДИЦЫ И ПРЕСС</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                     </tr>
					 <tr>
                        <td>20:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ABT/  LEG FIT/ СУПЕР ЯГОДИЦЫ И ПРЕСС</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ABT/  LEG FIT/ СУПЕР ЯГОДИЦЫ И ПРЕСС</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ТРНЕНИРОВКА "ДЕЛАЙ ТЕЛО"</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ТРНЕНИРОВКА "ДЕЛАЙ ТЕЛО"</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Оксана Васильева</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ТРНЕНИРОВКА "ДЕЛАЙ ТЕЛО"</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ТРНЕНИРОВКА "ДЕЛАЙ ТЕЛО"</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">TRX</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                     </tr>
					 <tr>
                        <td>21:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">TRX</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ГИБКОСТЬ И СИЛА</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ГИБКОСТЬ И СИЛА</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ZUMBA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">CYCLE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Дмитрий Алексеев</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">POLE DANCE</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">PILATES</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                     </tr>
					 <tr>
                        <td>22:00</td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ЗДОРОВАЯ СПИНА</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ЗДОРОВАЯ СПИНА</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">BODYART</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">BODYART</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ZUMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ZUMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                        <td class="entry">
                           <div class="schedule-event">
                              <div class="schedule-name">
                                 <a href="">ZUMA</a>
                              </div>
                           </div>
                           <div class="schedule-coach">
                              <a href="">Александра Галимова</a>
                           </div>
                        </td>
                     </tr>
                  </tbody>
               </table>
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