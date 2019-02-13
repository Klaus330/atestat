
    <!-- >>>>>>>>>>>>>>>> Header Start <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
    <header class="header_area">
        <!-- Header Area Start -->
        <div class="main_header_area animated">
            <div class="container">
                <div class="row">


                    <div class="col-sm-2 col-xs-9">
                        <!-- Logo Area -->
                        <div class="logo_area">
                            <a href="/"><img src="/img/logo.png" width="50" height="50" alt=""></a>
                        </div>
                    </div>

                    <div class="col-sm-10 col-xs-12">
                        <!-- Menu Area Start -->
                        <div class="main_menu_area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="{{Request::is('/') ? 'current_page_item' : ''}}"><a href="{{Request::is("/") ? "#home" : "/"}}">Home</a></li>
                                        <li class="{{Request::is("about") ? 'current_page_item' : ''}}"><a href="{{Request::is("/") ? "#about" : "/about"}}">Despre</a></li>
                                        <li><a href="{{Request::is("/") ? "#video" : "/#video"}}" >Video</a></li>
                                        <li><a href="{{Request::is("/") ? "#work" : "/#work"}}">Utilizari</a></li>
                                        <li><a href="{{Request::is("/") ? "#plus" : "/#plus"}}">Avantaje</a></li>
                                        <li class="{{Request::is("examples/*") ? 'current_page_item' : ''}}"><a href="{{Request::is("/")  ? "#examples" : "/#examples"}}">Exemple</a></li>
                                        <li><a href="{{Request::is("/") ? "#faq" : "/#faq"}}">FAQ</a></li>
                                        <li><a href="{{Request::is("/") ? "#contact" : "/#contact"}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- >>>>>>>>>>>>>>>> Header End <<<<<<<<<<<<<<<< -->