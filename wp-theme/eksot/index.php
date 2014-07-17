<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1012">
		<meta name="cmsmagazine" content="ac34329c8b8fb55150b5f3450971f8e1" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory');?>/favicon.ico">
        <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.min.css" media="all"/>
        <?php 
			wp_head(); 
		?>	
        <script src="<?php bloginfo('template_directory');?>/js/all.min.js"></script>
        <!--[if lte IE 8 ]><script type="text/javascript">window.location.href="<?php bloginfo('template_directory');?>/ie8min/index.html";</script><![endif]-->

        <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU&coordorder=longlat" type="text/javascript"></script>
        <!--
            Определение координат объекта http://api.yandex.ru/maps/tools/getlonglat/
        -->
        <script type="text/javascript">
            ymaps.ready(function () {
                var map = new ymaps.Map ("map", {
                    center: [37.619899,55.753676],
                    zoom: 12,
                    controls: ["zoomControl", "fullscreenControl", "typeSelector"]
                });
                 map.behaviors.disable('scrollZoom');
                //Добавляем элементы управления на карту

                $('.b-map__link').click(function(){
                    //map.removeAll();
                    var elHeight = $('.b-map__content').outerHeight();
                    $('.b-map__content').animate({
                        top: -elHeight
                    }, 600, function(){
                        $('.b-map__open').animate({
                            top: 0
                        }, 600);
                    });

                    var city = $(this).attr('href');
                    if(city == '#map_hq'){
                        myPlacemark = new ymaps.Placemark([37.619899,55.753676], {
                            hintContent: 'Москва!',
                            balloonContent: 'Столица России'
                        });

                        map.geoObjects.add(myPlacemark);
                    } else if(city == '#map_moscow'){

                    } else {
                        return false;
                    }

                   return false;
                });
            });
        </script>
    </head>
    <body>
		<div class="wrap">
			<header class="b-header">
				<div class="b-header__top">
					<div class="container">
						<div class="row">
							<div class="span4">
								<img class="b-header__logo" src="<?php bloginfo('template_directory');?>/images/logo.png" alt="матрас-кониционер.рф"/>
							</div>
							<div class="span4">
								<div class="b-header__feature icon-14">Мы продали уже более 1340 матрасов Eksot</div>
								<div class="b-header__feature icon-15">Наша компания на рынке с 2005 года</div>
								<div class="b-header__feature icon-16">Данным матрасом пользуется в мире более 1​0​ 000 000 человек</div>
							</div>
							<div class="span4">
								<div class="b-header__call">Звоните прямо сейчас <a class="open-popup rcall" href="#popupForm">заказать звонок</a></div>
								<div class="b-header__tel"><span class="code">8-800</span> 123-45-67</div>
							</div>
						</div>
					</div>
				</div>
				<nav class="b-header__menu">
					<div class="container">
						<ul class="b-header__menu-list">
							<li class="b-header__menu-item"><a class="anim-scroll" href="#ms-features">Преимущества</a></li><li class="b-header__menu-item"><a class="anim-scroll" href="#ms-reviews">Отзывы</a></li><li class="b-header__menu-item"><a class="anim-scroll" href="#ms-why">Зачем мне нужен Eksot?</a></li><li class="b-header__menu-item"><a class="anim-scroll" href="#ms-facts">Факты о качественном сне</a></li><li class="b-header__menu-item"><a class="anim-scroll" href="#ms-warranty">Гарантии</a></li><li class="b-header__menu-item"><a class="anim-scroll" href="#ms-delivery">Доставка</a></li>
						</ul>
					</div>
				</nav>
			</header>
			<div class="b-promo">
				<div class="container">
					<div class="b-promo__item">
						<img src="<?php bloginfo('template_directory');?>/images/content/promo-device.png" alt=""/>
						<div class="slogan">Теперь у Вас Меньше споров<br />и больше удовольствия!</div>
						<div class="price">15893 <span class="amount">руб</span></div>
					</div>
					<div class="b-promo__form">
						<?php echo do_shortcode('[contact-form-7 id="8" title="Форма в блоке Промо"]'); ?>
						<div class="ribbon">
							<div class="text">При заказе Вас ждет подарок</div>
						</div>
					</div>
				</div>
			</div>
			<div class="b-features">
				<div class="container">
					<div class="row">
						<div class="b-features__item">
							<div class="b-features__circle">
								<div class="b-features__icon icon-1"></div>
							</div>
							<h3 class="b-features__title">Охлаждение/Нагрев — от 18 до 40 градусов!</h3>
							<p>Любая желаемая температура в данном диапазаоне менее чем за 5 минут!</p>
						</div>
						<div class="b-features__item">
							<div class="b-features__circle">
								<div class="b-features__icon icon-2"></div>
							</div>
							<h3 class="b-features__title">Гарантия 2 года</h3>
							<p>Гарантия 2 года от официального сервисного цента</p>
						</div>
						<div class="b-features__item">
							<div class="b-features__circle">
								<div class="b-features__icon icon-3"></div>
							</div>
							<h3 class="b-features__title">Бесплатная доставка</h3>
							<p>В день заказа - максимум на следующий!</p>
						</div>
						<div class="b-features__item">
							<div class="b-features__circle">
								<div class="b-features__icon icon-4"></div>
							</div>
							<h3 class="b-features__title">Самая низкая цена в интернете</h3>
							<p>Самая низкая цена в интернете - найдете дешевле? сделаем дополнительную скидку</p>
						</div>
						<div class="b-features__item">
							<div class="b-features__circle">
								<div class="b-features__icon icon-5"></div>
							</div>
							<h3 class="b-features__title">372 довольных клиента</h3>
							<p>1372 довольных клиента - читайте интересные отзывы ниже!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="b-lfeature">
				<div class="container">
					<div class="b-lfeature__border">
						Удобный матрас-кондиционер который всего за пять минут может превратить вашу кровать в самое комфортабельное место на планете! Любая температура которую вы только пожелаете будет доступна всего лишь по нажатию кнопки на пульте!
					</div>
					<div class="b-lfeature__content">
						<div class="row" id="ms-features">
							<div class="span6">
								<h2 class="b-lfeature__title">и жаркими<br />летними днями</h2>
								<ul class="pr-dlist">
									<li>
										<h3 class="pr-dlist__title">Реакция</h3>

										<p>Комфортная и теплая температура во время сна - увеличивает его КПД что позволяет спать меньше и при этом продуктивней.</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Бодрость</h3>

										<p>Для пенсионеров и людей с пониженным иммунитетом рекомендуется сон при стабильно теплой температуре - это позволяет организму лучше противостоять любой заразе.</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Креативность</h3>

										<p>Оптимальная температура для сна от 16 до 20 градусов - отклонение от этой норму может стать причиной нарушений сна.</p>
									</li>
								</ul>
							</div>
							<div class="span6">
								<h2 class="b-lfeature__title b-lfeature__title_cold">холодными<br />зимними ночами...</h2>
								<ul class="pr-dlist">
									<li>
										<h3 class="pr-dlist__title">Реакция</h3>

										<p>Понижение температуры тела во время сна делает его более глубоким и оздоравливающим.</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Бодрость</h3>

										<p>Легкое понижение температуры тела и помещения для сна способствуют наиболее быстрому засыпанию. Статистика показывает что страдающие бессонницей люди имеют более высокую температуру тела.</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Креативность</h3>

										<p>Если спать при низкой температуре, организм во время сна сжигает больше калорий - примерно 100 ккал за 24 часа сна - это натуральное похудение во сне!</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="b-features">
						<div class="container">
							<div class="row">
								<div class="b-features__item">
									<div class="b-features__circle">
										<div class="b-features__icon icon-6"></div>
									</div>
									<h3 class="b-features__title">пульт</h3>
									<p>Управляйте температурой прямо из под одеяла!</p>
								</div>
								<div class="b-features__item">
									<div class="b-features__circle">
										<div class="b-features__icon icon-7"></div>
									</div>
									<h3 class="b-features__title">с водой</h3>
									<p>Работает на воде - никаких проводов или электричества!</p>
								</div>
								<div class="b-features__item">
									<div class="b-features__circle">
										<div class="b-features__icon icon-1"></div>
									</div>
									<h3 class="b-features__title">не заболеешь</h3>
									<p>Не создает воздушных потоков как кондиционер или вентилятор.</p>
								</div>
								<div class="b-features__item">
									<div class="b-features__circle">
										<div class="b-features__icon icon-9"></div>
									</div>
									<h3 class="b-features__title">стирается</h3>
									<p>Легкая стирка прямо в стиральной машинке.</p>
								</div>
								<div class="b-features__item">
									<div class="b-features__circle">
										<div class="b-features__icon icon-10"></div>
									</div>
									<h3 class="b-features__title">удобный</h3>
									<p>Сделан полностью из натуральных материалов - дышит!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="b-reviews" id="ms-reviews">
				<div class="container">
					<div class="b-reviews__header">
						<span class="b-reviews__count">372</span>
						<span class="b-reviews__htext">
							<span class="b-reviews__htitle">довольный клиента</span>
							<a class="b-reviews__hlink" href="#">Посмотреть все отзывы.</a>
						</span>
					</div>
					<div class="row">
						<div class="span6">
							<div class="b-reviews__slider">
								<ul class="slides">
									<li>
										<div class="b-reviews__item">
											<div class="b-reviews__iheader">Анна — преобрела 19 мая 2011 <span class="pr-rating"><span
													class="star"></span><span class="star"></span><span
													class="star"></span><span class="star"></span><span class="star star_empty"></span></span></div>
											<p>Отсутствие трения, согласно уравнениям Лагранжа, стабилизирует ускоряющийся нутация, что явно следует из прецессионных уравнений движения.</p>
										</div>
										<div class="b-reviews__item">
											<div class="b-reviews__iheader">Анна — преобрела 19 мая 2011 <span class="pr-rating"><span
													class="star"></span><span class="star"></span><span
													class="star"></span><span class="star"></span><span class="star star_empty"></span></span></div>
											<p>Отсутствие трения, согласно уравнениям Лагранжа, стабилизирует ускоряющийся нутация, что явно следует из прецессионных уравнений движения.</p>
										</div>
									</li>
									<li>
										<div class="b-reviews__item">
											<div class="b-reviews__iheader">Анна — преобрела 19 мая 2011 <span class="pr-rating"><span
													class="star"></span><span class="star"></span><span
													class="star"></span><span class="star"></span><span class="star star_empty"></span></span></div>
											<p>Отсутствие трения, согласно уравнениям Лагранжа, стабилизирует ускоряющийся нутация, что явно следует из прецессионных уравнений движения.</p>
										</div>
										<div class="b-reviews__item">
											<div class="b-reviews__iheader">Анна — преобрела 19 мая 2011 <span class="pr-rating"><span
													class="star"></span><span class="star"></span><span
													class="star"></span><span class="star"></span><span class="star star_empty"></span></span></div>
											<p>Отсутствие трения, согласно уравнениям Лагранжа, стабилизирует ускоряющийся нутация, что явно следует из прецессионных уравнений движения.</p>
										</div>
									</li>
									<li>
										<div class="b-reviews__item">
											<div class="b-reviews__iheader">Анна — преобрела 19 мая 2011 <span class="pr-rating"><span
													class="star"></span><span class="star"></span><span
													class="star"></span><span class="star"></span><span class="star star_empty"></span></span></div>
											<p>Отсутствие трения, согласно уравнениям Лагранжа, стабилизирует ускоряющийся нутация, что явно следует из прецессионных уравнений движения.</p>
										</div>
										<div class="b-reviews__item">
											<div class="b-reviews__iheader">Анна — преобрела 19 мая 2011 <span class="pr-rating"><span
													class="star"></span><span class="star"></span><span
													class="star"></span><span class="star"></span><span class="star star_empty"></span></span></div>
											<p>Отсутствие трения, согласно уравнениям Лагранжа, стабилизирует ускоряющийся нутация, что явно следует из прецессионных уравнений движения.</p>
										</div>
									</li>
									<li>
										<div class="b-reviews__item">
											<div class="b-reviews__iheader">Анна — преобрела 19 мая 2011 <span class="pr-rating"><span
													class="star"></span><span class="star"></span><span
													class="star"></span><span class="star"></span><span class="star star_empty"></span></span></div>
											<p>Отсутствие трения, согласно уравнениям Лагранжа, стабилизирует ускоряющийся нутация, что явно следует из прецессионных уравнений движения.</p>
										</div>
										<div class="b-reviews__item">
											<div class="b-reviews__iheader">Анна — преобрела 19 мая 2011 <span class="pr-rating"><span
													class="star"></span><span class="star"></span><span
													class="star"></span><span class="star"></span><span class="star star_empty"></span></span></div>
											<p>Отсутствие трения, согласно уравнениям Лагранжа, стабилизирует ускоряющийся нутация, что явно следует из прецессионных уравнений движения.</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="span6">
							<div class="b-rform">
								<?php echo do_shortcode('[contact-form-7 id="6" title="Форма в блоке отзывы"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="gray-line">
				<section class="b-facts" id="ms-why">
					<div class="pr-ltitle">
						<div class="container">
							<h2 class="pr-ltitle__title">Сталкиваетесь с такими проблемами?<br />Зачем мне нужен матрас EKSOT?</h2>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="span6">
								<img class="b-facts__img" src="<?php bloginfo('template_directory');?>/images/content/r-img2.jpg" alt="Проблема? Почему нужен матрас"/>
							</div>
							<div class="span6">
								<ul class="pr-dlist pr-dlist_negative">
									<li>
										<h3 class="pr-dlist__title">Вялость</h3>

										<p>Голос персонажа отталкивает мифопоэтический хронотоп, туда же попадает и еще недавно вызывавший безусловную симпатию </p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Беспокойство и стресс</h3>

										<p>Взрываетесь по пустяками и испытываете значительное волнение даже из мелких проблем?</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Качество и скорость принятия решений</h3>

										<p>Бывает «тупите» или частенько ошибаетесь в работе или домашних заботах?</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Кошмары и пробуждения?</h3>

										<p>Снятся страшные сны или частенько просыпаетесь в поту или замерзнув?</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Даже после 12 часов сна - чувствуете что не выспались?</h3>

										<p>Специально ложитесь пораньше а проснувшись все равно понимаете что не выспались и сил для побед не достаточно?</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="b-facts" id="ms-facts">
					<div class="pr-ltitle">
						<div class="container">
							<h2 class="pr-ltitle__title">Факты здорового сна с матрасом EKSOT и правильной температурой</h2>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="span6">
								<ul class="pr-dlist">
									<li>
										<h3 class="pr-dlist__title">Реакция</h3>

										<p>Вы делаете все значительно быстрее и качественней - теперь это совсем не сложно а даже приятно</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Бодрость</h3>

										<p>Проснувшись вы чувствуете необыкновенный заряд энергии на весь день и не устаете даже при серьезных нагрузках</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Креативность</h3>

										<p>Ваше чуство юмора и креативный подход бьют ключем - а хорошее настроение постоянный спутник</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Иммунитет</h3>

										<p>При правильном сне - ваш иммунитет значительно сильнее и простуда уже не сможет подобраться незаметно</p>
									</li>
									<li>
										<h3 class="pr-dlist__title">Потенция</h3>

										<p>Уровень потенции у правильно спящего человека значительно выше чем у того кто спал в не комфортных условиях</p>
									</li>
								</ul>
							</div>
							<div class="span6">
								<img class="b-facts__img" src="<?php bloginfo('template_directory');?>/images/content/r-img1.jpg" alt="Проблема? Почему нужен матрас"/>
							</div>
						</div>
					</div>
				</section>
			</div>
			<section class="b-install">
				<div class="pr-ltitle">
					<div class="container">
						<h2 class="pr-ltitle__title">установка и подключение</h2>
					</div>
				</div>
				<div class="container">
					<h3 class="b-install__subtitle">30 секунд + 4 действия и вы наслаждаетесь комфортной температурой</h3>
					<div class="row">
						<div class="span3">
							<div class="b-install__item">
								<img class="b-install__img" src="<?php bloginfo('template_directory');?>/images/content/install1.jpg" alt="Шаг 1"/>
								<p>Подсоедените один конец соеденительной трубки к матрасу, другой к блоку.</p>
							</div>
						</div>
						<div class="span3">
							<div class="b-install__item">
								<img class="b-install__img" src="<?php bloginfo('template_directory');?>/images/content/install2.jpg" alt="Шаг 2"/>
								<p>Наполните резервуар термоконтроллера водой</p>
							</div>
						</div>
						<div class="span3">
							<div class="b-install__item">
								<img class="b-install__img" src="<?php bloginfo('template_directory');?>/images/content/install3.jpg" alt="Шаг 3"/>
								<p>Включите ЭКСОТ</p>
							</div>
						</div>
						<div class="span3">
							<div class="b-install__item">
								<img class="b-install__img" src="<?php bloginfo('template_directory');?>/images/content/install4.jpg" alt="Шаг 4"/>
								<p>На панели блока термоконтроллера или припомощи ПДУ установите желаемую температуру</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="b-action">
				<div class="container">
					<div class="b-action__block">
						<h3 class="b-action__title">Эксклюзивная партия</h3>
						<div class="b-action__last">Последняя покупка: 01.04.2014 / 15:47</div>
						<div class="b-action__what">Осталось:</div>
						<div class="b-action__counter">
							<span class="num">2</span><span class="num">4</span><span class="num">3</span>
						</div>
						<div class="b-action__amount">штук</div>
						<p>Средняя скорость продажи - 4 штук в сутки<br />Примерно через 3 недели вы не сможите купить ничего подобного в России</p>
					</div>
				</div>
			</section>
			<section class="b-accessories">
				<div class="pr-ltitle">
					<div class="container">
						<h2 class="pr-ltitle__title">Доступная комплектация</h2>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="span4">
							<div class="b-accessories__item">
								<h3 class="b-accessories__title">Одноместный с матрасом 70x190</h3>
								<img src="<?php bloginfo('template_directory');?>/images/content/accessories_img1.jpg" alt="Одноместный с матрасом 70x190"/>
								<div class="b-accessories__price">7891.00 <span class="amount">руб</span></div>
								<a href="#popupProd" class="pr-button b-accessories__popup">заказать</a>
							</div>
						</div>
						<div class="span4">
							<div class="b-accessories__item">
								<h3 class="b-accessories__title">Двухместный с матрасом 140x190</h3>
								<img class="b-accessories__photo" src="<?php bloginfo('template_directory');?>/images/content/accessories_img2.jpg" alt="Одноместный с матрасом 70x190"/>
								<div class="b-accessories__price">7891.00 <span class="amount">руб</span></div>
								<a href="#popupProd" class="pr-button b-accessories__popup">заказать</a>
							</div>
						</div>
						<div class="span4">
							<div class="b-accessories__item">
								<h3 class="b-accessories__title">2x Одноместных с матрасом 70x190</h3>
								<img src="<?php bloginfo('template_directory');?>/images/content/accessories_img3.jpg" alt="Одноместный с матрасом 70x190"/>
								<div class="b-accessories__price">7891.00 <span class="amount">руб</span></div>
								<a href="#popupProd" class="pr-button b-accessories__popup">заказать</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="b-warranty" id="ms-warranty">
				<div class="container">
					<div class="row">
						<div class="span7">
							<div class="b-warranty__item icon-11">
								Гарантия 2 года! проверка и гарантийный талон при получении
							</div>
							<div class="b-warranty__item icon-12">
								Бесплатная доставка
							</div>
							<div class="b-warranty__item icon-13">
								Самая низкая цена в интернете
							</div>
						</div>
						<div class="span5">
							<div class="b-warranty__form-wrap">
								<?php echo do_shortcode('[contact-form-7 id="7" title="Форма в блоке Гарантии"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="b-map" id="ms-delivery">
				<div id="map"></div>
				<div class="container">
					<div class="b-map__open"></div>
					<div class="b-map__content">
						<div class="row">
							<div class="span4 offset1">
								<h3 class="b-map__title">Головной офис</h3>
							</div>
							<div class="span7">
								<h3 class="b-map__title">Точки самовывоза</h3>
							</div>
						</div>
						<div class="row">
							<div class="span4 offset1">
								<p>г. Москва, ул. Новокрымская, 15. оф. 12<br /><a class="b-map__link" href="#map_hq">показать на карте</a></p>
								<p>тел. 8-800 123-45-67<br />тел. 8-800 123-45-67<br />эл. почта: <a href="mailto:info@eksot.ru?subject=Обратная%20связь%20eksot.ru">info@eksot.ru</a></p>
							</div>
							<div class="span3">
								<p><strong>МОСКВА</strong><br />ул. ак. Королева, 12/133<br />пр. Героев, 12, анг. 44<br />ул. Матросова, 112 / 44<br />пер. Вольный, 12<br /><a class="b-map__link" href="#map_moscow">показать все пункты на карте</a></p>

								<p><strong>САНКТ ПЕТЕРБУРГ</strong><br />пр. Героев, 12, анг. 44<br />ул. Матросова, 112 / 44<br />пер. Вольный, 12<br /><a class="b-map__link" href="#">показать все пункты на карте</a></p>
							</div>
							<div class="span4">
								<p><strong>МОСКВА</strong><br />ул. ак. Королева, 12/133<br />пр. Героев, 12, анг. 44<br />ул. Матросова, 112 / 44<br />пер. Вольный, 12<br /><a class="b-map__link" href="#">показать все пункты на карте</a></p>

								<p><strong>САНКТ ПЕТЕРБУРГ</strong><br />пр. Героев, 12, анг. 44<br />ул. Матросова, 112 / 44<br />пер. Вольный, 12<br /><a class="b-map__link" href="#">показать все пункты на карте</a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="b-question">
				<div class="container">
					<h2 class="b-question__title">Остались вопросы?</h2>
					<p>Звоните — подробные консультации <strong>8-800 123-45-67</strong></p>
				</div>
			</section>
			<footer class="b-footer">
				<div class="container">
					<div class="row">
						<div class="span9">
							<div class="b-footer__copyrights">&copy; 2014. Матрас-кондиционер.рф</div>
							<ul class="b-footer__menu">
								<li class="b-footer__menu-item"><a class="b-footer__menu-link anim-scroll" href="#ms-features">Преимущества</a></li>
								<li class="b-footer__menu-item"><a class="b-footer__menu-link anim-scroll" href="#ms-reviews">отзывы</a></li>
								<li class="b-footer__menu-item"><a class="b-footer__menu-link anim-scroll" href="#ms-why">зачем мне нужен eksot?</a></li>
								<li class="b-footer__menu-item"><a class="b-footer__menu-link anim-scroll" href="#ms-facts">факты о качественном сне</a></li>
								<li class="b-footer__menu-item"><a class="b-footer__menu-link anim-scroll" href="#ms-warranty">гарантии</a></li>
								<li class="b-footer__menu-item"><a class="b-footer__menu-link anim-scroll" href="#ms-delivery">доставка</a></li>
							</ul>
						</div>
						<div class="span3">
							<div class="b-created">
								<a target="_blank" href="//mymediapro.ru" title="Создание сайтов"><img src="<?php bloginfo('template_directory');?>/images/mmp-logo.svg" alt="Создание сайтов" width="33" height="26"/></a>
								<p>Сделано с любовью в <a target="_blank" href="//mymediapro.ru" title="Создание сайтов">студии М</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
        <div style="display:none;">
            <div class="b-rform" id="popupForm">
				<?php echo do_shortcode('[contact-form-7 id="5" title="Заказ обратного звонка"]'); ?>
            </div>
        </div>
        <div style="display:none;">
            <div class="b-rform" id="popupProd">
				<?php echo do_shortcode('[contact-form-7 id="4" title="Форма заказа матраса"]'); ?>
            </div>
        </div>
		<?php wp_footer(); ?>
    </body>
</html>