/*
	When the bandcamp link is pressed, stop all propagation so AmplitudeJS doesn't
	play the song.
*/
let bandcampLinks = document.getElementsByClassName('bandcamp-link');

for( var i = 0; i < bandcampLinks.length; i++ ){
	bandcampLinks[i].addEventListener('click', function(e){
		e.stopPropagation();
	});
}


let songElements = document.getElementsByClassName('song');

for( var i = 0; i < songElements.length; i++ ){
	/*
		Ensure that on mouseover, CSS styles don't get messed up for active songs.
	*/
	songElements[i].addEventListener('mouseover', function(){
		this.style.backgroundColor = '#00A0FF';

		this.querySelectorAll('.song-meta-data .song-title')[0].style.color = '#FFFFFF';
		this.querySelectorAll('.song-meta-data .song-artist')[0].style.color = '#FFFFFF';

		if( !this.classList.contains('amplitude-active-song-container') ){
			this.querySelectorAll('.play-button-container')[0].style.display = 'block';
		}

		this.querySelectorAll('img.bandcamp-grey')[0].style.display = 'none';
		this.querySelectorAll('img.bandcamp-white')[0].style.display = 'block';
		this.querySelectorAll('.song-duration')[0].style.color = '#FFFFFF';
	});

	/*
		Ensure that on mouseout, CSS styles don't get messed up for active songs.
	*/
	songElements[i].addEventListener('mouseout', function(){
		this.style.backgroundColor = '#FFFFFF';
		this.querySelectorAll('.song-meta-data .song-title')[0].style.color = '#272726';
		this.querySelectorAll('.song-meta-data .song-artist')[0].style.color = '#607D8B';
		this.querySelectorAll('.play-button-container')[0].style.display = 'none';
		this.querySelectorAll('img.bandcamp-grey')[0].style.display = 'block';
		this.querySelectorAll('img.bandcamp-white')[0].style.display = 'none';
		this.querySelectorAll('.song-duration')[0].style.color = '#607D8B';
	});

	/*
		Show and hide the play button container on the song when the song is clicked.
	*/
	songElements[i].addEventListener('click', function(){
		this.querySelectorAll('.play-button-container')[0].style.display = 'none';
	});
}

/*
	Initializes AmplitudeJS
*/
Amplitude.init({
	"songs": [
		{
			"name": "Мендей ким",
			"artist": "Кайрат Нуртас",
			"url": "../songs/kairat_nurtas_-_mendei_kim.mp3",
			"cover_art_url": "../img/album-art/kajrat_nurtas.jpg",
            "lyrics" : "Жүрегімді өзге жанға бермеймін <br>" +
                "Кім келсе де иесі тек сен деймін <br>" +
                "Сезіміңе жан тәніммен беріліп <br>" +
                "Бұл өмірде сені сүйер мендей кім <br><br>" +
                "Қайырмасы: <br>" +
                "Бұл өмірде сені сүйер мендей кім <br>" +
                "Басқаларды естімеймін, көрмеймін <br>" +
                "Жүрегіңді жараласам егер де <br>" +
                "Сен сүйген жүрегіммен емдеймін <br>" +
                "Тағдырыңды еркелетіп тербеймін <br>" +
                "Жасырсам да жан сырымды түсініп <br>" +
                "Бұл өмірде мені сүйер сендей кім <br><br>" +
                "Бақытыңа жаралған жан мен деймін <br>" +
                "Қандай сынақ жолықса да көнбеймін <br>" +
                "Сезіміңе жан тәніммен беріліп <br>" +
                "Бұл өмірде сені сүйер мендей кім"
		},
		{
			"name": "Ансарым",
			"artist": "Кайрат Нуртас",
			"url": "../songs/kairat_nurtas_-_ansarym.mp3",
			"cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
		},
        {
            "name": "Ешкимге сенбе",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas_-_eshkimge_senbe.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Жолыкпадын ертерек",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas_-_zholykpadyn_erterek.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Отаным-Казак ели",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas-otanym-aza-el-2019.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Унап барасын",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat-nurtas-unap-barasy-2019.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Сонгысы жур улылардын",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat-nurtas-soysy-zhr-lylardy-2019.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Бакытты жандармыз",
            "artist": "Кайрат Нуртас & Айдана Меденова",
            "url": "../songs/kairat-nurtas-aydana-medenova-baytty-zhandarmyz-2019.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Журегим сен келгели бакытты",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat-nurtas-zhregm-sen-kelgel-baytty-2017.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Журегиннен бир орын бер бос болса",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat-nurtas-zhregnen-br-oryn-ber-bos-bolsa-2017.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Багдаршам",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kayrat-nrtas-badarsham-2017.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Уакыт",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kayrat-nrtas-uayt-2017.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Мени багала",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kayrat-nrtas-men-baala-2017.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Мени умыт",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kayrat-nrtas-men-myt-2018.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Суйши мени",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kayrat-nrtas-sysh-men-zhaa-nsa-2016.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Мени тусинбей журсин",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kayrat-nrtas-men-tsnbey-zhrs-2016.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Ашуыма тиме",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas_-_ashuyma_time202.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Озин гана",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas_-_ozin_gan202.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Анама",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas_-_anama.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Омир гой",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas_-_omir_goi.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Маралым",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas_-_maralym.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Кеширейин",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kairat_nurtas_-_keshireyin.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Балалары акесине ан арнады",
            "artist": "Кайрат Нуртас",
            "url": "../songs/kayrat-nrtasty-balalary-kesne-n-arnady-2019.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
        {
            "name": "Адамдар, Адамдар",
            "artist": "Кайрат Нуртас & Серикбол Саулаубек",
            "url": "../songs/kayrat-nrtasty-balalary-kesne-n-arnady-2019.mp3",
            "cover_art_url": "../img/album-art/kajrat_nurtas.jpg"
        },
	]
});
