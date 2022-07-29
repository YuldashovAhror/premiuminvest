<div class="mobile-menu pattern">
            <div class="mobile-menu__head">
                <div class="mobile-menu__logo">
                    <a href="{{ route('home') }}">
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
                        {{ __('asd.Международный консорциум') }}
                    </a>
                </li>
                <li>
                    <a href="#exp">
                        {{ __('asd.Девелопер') }}
                    </a>
                </li>
                <li>
                    <a href="#projects">
                        {{ __('asd.Проекты') }}
                    </a>
                </li>
                <li>
                    <a href="#team">
                        {{ __('asd.Команда') }}
                    </a>
                </li>
                <li>
                    <a href="#footer">
                        {{ __('asd.Контакты') }}
                    </a>
                </li>
            </ul>
            <?php $arr = ['РУ'=>'ru','O’z'=>'uz','ENG'=>'en'] ?>
	
				<div class="header-lang">
					<div class="header-lang__btn">
						<img src="/assets/img/lang.svg" alt="ico">
						<span>{{ array_search($lang, $arr)}}</span>
						<img src="/assets/img/chevron-down.svg" alt="ico">
					</div>
					<div class="header-lang__list">
						@foreach($arr as $key => $value)
							@if ($value != $lang)
								<a href="/languages/{{ $value }}" class="current">{{ $key}}</a>
							@endif
						@endforeach
					</div>
				</div>
        </div>