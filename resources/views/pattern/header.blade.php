<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page.show', ['alias' => 'qairat-nurtas-musics']) }}">Песни</a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('page.show', ['alias' => 'test']) }}">Клипы</a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('page.show', ['alias' => 'biografiya-kayrata-nurtasa']) }}">Биография</a>
            </li>

        </ul>
        {{--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>--}}
    </div>
</nav>
