<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/assets/css/normalize.css">
	<link rel="stylesheet" href="/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/jarallax.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/main.css">
	<title>Premium Investment Club</title>
</head>
<body>
	

	<!-- МОБИЛЬНОЕ МЕНЮ -->
	<div class="mobile-menu pattern">
		<div class="mobile-menu__head">
			<div class="mobile-menu__logo">
				<a href="index.html">
					<img src="/assets/img/logo.svg" alt="SUU" title="SUU">
				</a>
			</div>
			<div class="mobile-menu__close">
				<img src="/assets/img/close.svg" alt="ico">
			</div>
		</div>
		<ul class="menu">
			<li>
				<a href="#consort">
					Международный консорциум
				</a>
			</li>
			<li>
				<a href="#exp">
					Девелопер
				</a>
			</li>
			<li>
				<a href="#projects">
					Проекты
				</a>
			</li>
			<li>
				<a href="#team">
					Команда
				</a>
			</li>
			<li>
				<a href="#footer">
					Контакты
				</a>
			</li>
		</ul>
		<div class="mobile-menu__lang">
			<a href="#">РУ</a>
			<a href="#">UZ</a>
			<a href="#">EN</a>
		</div>
	</div>



	<!-- HEADER HEADER__CABINET -->

	<header class="header header__cabinet">
		<div class="container">
			<div class="header__logo">
				<a href="#">
					<img src="/assets/img/logo.svg" alt="Premium Investment Club">
				</a>
			</div>			
			<div>
				<a href="#news" class="header-news">
					Новости
				</a>
				<a href="#" class="header-cabinet">
					<img src="/assets/img/dot.svg" alt="ico">
					<span>Выход</span>
				</a>
				<div class="header-mobile">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header>




	<section class="news-single">
		<div class="container">
			<div class="news-single__back">
				<a href="#">
					<svg width="10" height="16" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.03174 1.07215L8.01783 0L0 7.99974L8.01783 16L9.03174 14.9276L2.80708 8.71596L2.08937 7.99974L2.84179 7.24892L9.03174 1.07215Z" fill="#D9AF78"/>
					</svg>
					<span>Назад</span>
				</a>
			</div>
			<div class="news-single__wrap">
				<div class="news-single__main">
					<div class="news-single__img">
						<div class="news-item__date">
							{{$news->updated_at->format('d/m/Y')}}
						</div>
						<img src="/assets/img/location.jpg" alt="img">
					</div>
					<div class="news-single__text">
						<h2>
							{{$news->name}}
						</h2>
						<p>
							{!! $news->description_uz !!}
						</p>
					</div>
				</div>
				<div class="news-other">
					<div class="news-other__title">
						другие НОВОСТИ
					</div>
					<ul class="news-other__list">

						@foreach($all_news as $news)
							<?php $count++ ?>
							@if($count>9)
								@break
							@endif
							<li class="news-other__item">
								<div class="news-other__name">
									{{$news->name}}
								</div>
								<div class="news-other__date">
									<img src="/assets/img/calendar.svg" alt="ico">
									<span>{{$news->updated_at->format('d/m/Y')}}</span>
									<img src="/assets/img/news-arrow.svg" alt="ico">
								</div>
								<a href="{{Route('front.news.single', $news->id)}}" class="news-other__link"></a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>


	<!-- CABINET FOOTER -->

	<footer class="cabinet-footer">
		<div class="container">
			<div class="invest__text">
				До конца окончания приёма заявок осталось:
			</div>
			<div class="invest-counter">
				<div class="invest-counter__item month wow fadeInUp" data-wow-delay=".3s">
					<span>0</span> мес.
				</div>
				<div class="invest-counter__item day wow fadeInUp" data-wow-delay=".4s">
					<span>0</span> дн.
				</div>
				<div class="invest-counter__item hour wow fadeInUp" data-wow-delay=".5s">
					<span>0</span> ч.
				</div>
				<div class="invest-counter__item minute wow fadeInUp" data-wow-delay=".6s">
					<span>0</span> м.
				</div>
				<div class="invest-counter__item sec wow fadeInUp" data-wow-delay=".7s">
					<span>0</span> С.
				</div>
			</div>
			<div class="cabinet-footer__logo wow fadeInUp" data-wow-delay=".3s">
				<img src="/assets/img/cabinet.png" alt="ico">
			</div>
		</div>
	</footer>

	
	<script src="/assets/js/jquery-3.4.1.min.js"></script>
	<script src="/assets/js/owl.carousel.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="/assets/js/map.js"></script>
	<script src="/assets/js/wow.min.js"></script>
	<script src="/assets/js/jquery.nicescroll.min.js"></script>
	<script src="/assets/js/gsap.min.js"></script>
	<script src="/assets/js/jarallax.min.js"></script>
	<script src="/assets/js/chart.js"></script>
	<script src="/assets/js/main.js"></script>

	<!-- CКРИПТ ТОЛЬКО ДЛЯ КАБИНЕТ -->

	<script>
		let mainSigns = document.querySelectorAll('.cabinet-title__sign svg path')

		mainSigns.forEach(item => {
			let length = item.getTotalLength()
			item.style.strokeDasharray = length; 
			item.style.strokeDashoffset = length;
		})

		$('.cabinet-title__sign').css('opacity', '1')

		setTimeout(() => {
			$('.cabinet-title__sign').addClass('show')
		}, 500)

		const ctx = document.getElementById('myChart').getContext('2d');
		

		// НАСТРОЙКА ЧАРТА

		Chart.defaults.color  = '#fff'

		const myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			// названия графиков 
			labels: ['Начальная стоимость', 'Текущая оценка', 'Целевая стоимость'],
			datasets: [{
				label: 'Стоимость вклада, тыс. US$',
				// значения графиков 
				data: [100, 110, 130],
				backgroundColor: [
					'rgba(203, 187, 166, .3)',
					'rgba(210, 180, 140, .3)',
					'rgba(217, 175, 120, .3)',
				],
				borderColor: [
					'rgba(203, 187, 166, 1)',
					'rgba(210, 180, 140, 1)',
					'rgba(217, 175, 120, 1)',
				],
				borderWidth: 1,
				barPercentage: .8

			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
	</script>
</body>
</html>