<div class="header clearfix">
    <nav class="navbar navbar-default navbar-fixed-top" id="navbar-example">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="collapsed navbar-toggle" type="button" data-toggle="collapse"
                        data-target=".bs-example-js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">Logo</a>
            </div>
            <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/category/php-articles">Заметки (php)</a></li>
                            <li><a href="/category/php-code">Код (php)</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">JS<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/category/js-articles">Заметки (js)</a></li>
                            <li><a href="/category/js-code">Код (js)</a></li>
                        </ul>
                    </li>
                    <li class="li {!! $url == 'about' ? 'active' : null !!}"><a href="/about">О сайте</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
