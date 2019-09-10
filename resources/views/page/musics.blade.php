@extends('layouts.app')
@section('content')
{{--    {!! Breadcrumbs::render('post.show', $page) !!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="page_content">
                <div class="page_title">
                    <h1>Песни</h1>
                </div>

                <div class="page_desc">
                    <!-- Blue Playlist Container -->
                    <div id="blue-playlist-container">

                        <!-- Amplitude Player -->
                        <div id="amplitude-player">

                            <!-- Left Side Player -->
                            <div id="amplitude-left">
                                <img data-amplitude-song-info="cover_art_url"/>
                                <div id="player-left-bottom">
                                    <div id="time-container">
							<span class="current-time">
								<span class="amplitude-current-minutes" ></span>:<span class="amplitude-current-seconds"></span>
							</span>
                                        <div id="progress-container">
                                            <input type="range" class="amplitude-song-slider"/>
                                            <progress id="song-played-progress" class="amplitude-song-played-progress"></progress>
                                            <progress id="song-buffered-progress" class="amplitude-buffered-progress" value="0"></progress>
                                        </div>
                                        <span class="duration">
								<span class="amplitude-duration-minutes"></span>:<span class="amplitude-duration-seconds"></span>
							</span>
                                    </div>

                                    <div id="control-container">
                                        <div id="repeat-container">
                                            <div class="amplitude-repeat" id="repeat"></div>
                                            <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
                                        </div>

                                        <div id="central-control-container">
                                            <div id="central-controls">
                                                <div class="amplitude-prev" id="previous"></div>
                                                <div class="amplitude-play-pause" id="play-pause"></div>
                                                <div class="amplitude-next" id="next"></div>
                                            </div>
                                        </div>

                                        <div id="volume-container">
                                            <div class="volume-controls">
                                                <div class="amplitude-mute amplitude-not-muted"></div>
                                                <input type="range" class="amplitude-volume-slider"/>
                                                <div class="ms-range-fix"></div>
                                            </div>
                                            <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle-right"></div>
                                        </div>
                                    </div>

                                    <div id="meta-container">
                                        <span data-amplitude-song-info="name" class="song-name"></span>

                                        <div class="song-artist-album">
                                            <span data-amplitude-song-info="artist"></span>
                                            <span data-amplitude-song-info="album"></span>
                                        </div>

{{--                                        <div class="song-lyrics">--}}
{{--                                            <p data-amplitude-song-info="lyrics"></p>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                            <!-- End Left Side Player -->

                            <!-- Right Side Player -->
                            <div id="amplitude-right">
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Мендей ким</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:27</span>
                                </div>

                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Ансарым</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:52</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Ешкимке сенбе</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:14</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Жолыкпадын ертерек</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://switchstancerecordings.bandcamp.com/track/i-came-running" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:36</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Отаным-Казак ели</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:54</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Унап барасын</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://pglost.bandcamp.com/track/terrain" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:15</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Сонгысы жур улылардын</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://russiancircles.bandcamp.com/track/vorel" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">5:10</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="7">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Бакытты жандармыз</span>
                                        <span class="song-artist">Кайрат Нуртас & Айдана Меденова</span>
                                    </div>
                                    <a href="http://jimkata.bandcamp.com/track/intro-sweet-glory" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:44</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="8">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Журегим сен келгели бакытты</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://littlepeople.bandcamp.com/track/offcut-6" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">2:59</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="9">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Журегиннен бир орын бер бос болса</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/dusk-to-dawn-2" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:23</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Багдаршам</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:37</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Уакыт</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:42</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Мени багала</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:53</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Мени умыт</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:30</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Суйши мени</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">4:08</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Мени тусинбей журсин</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:55</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Аушыма тиме</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:47</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Озин гана</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:52</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Анама</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:39</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Омир гой</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:06</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Маралым</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:46</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Кеширейин</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:36</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Балалары акесине ан арнады</span>
                                        <span class="song-artist">Кайрат Нуртас</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:46</span>
                                </div>
                                <div class="song amplitude-song-container amplitude-play-pause" data-amplitude-song-index="10">
                                    <div class="song-now-playing-icon-container">
                                        <div class="play-button-container">

                                        </div>
                                        <img class="now-playing" src="/img/now-playing.svg"/>
                                    </div>
                                    <div class="song-meta-data">
                                        <span class="song-title">Адамдар, Адамдар</span>
                                        <span class="song-artist">Кайрат Нуртас & Серикбол Саулаубек</span>
                                    </div>
                                    <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                        <img class="bandcamp-grey" src="/img/bandcamp-grey.svg"/>
                                        <img class="bandcamp-white" src="/img/bandcamp-white.svg"/>
                                    </a>
                                    <span class="song-duration">3:43</span>
                                </div>
                            </div>
                            <!-- End Right Side Player -->
                        </div>
                        <!-- End Amplitdue Player -->
                    </div>

                    <!--
                        Include UX functions JS

                        NOTE: These are for handling things outside of the scope of AmplitudeJS
                    -->
                    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
                </div>
            </div>
        </div>
    </div>
@stop
