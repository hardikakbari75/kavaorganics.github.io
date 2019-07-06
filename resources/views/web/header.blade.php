<div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ url('/') }}">
                    <img src="{{ url('storage/app/images/logo_name.jpg') }}" alt="dashboard" class="logo">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ Request::segment(1) == ''? 'active':'' }}">
                        <a class="page-scroll" href="{{ url('/') }}">Home</a>
                    </li>
                    
                    <li class="{{ Request::segment(1) == 'team'? 'active':'' }}">
                        <a class="page-scroll" href="{{ url('team') }}">Team</a>
                    </li>
                    
                    <li class="{{ Request::segment(1) == 'testimonials'? 'active':'' }}">
                        <a class="page-scroll" href="{{ url('testimonials') }}">Testimonials</a>
                    </li>

                    <li class="{{ Request::segment(1) == 'about'? 'active':'' }}">
                        <a class="page-scroll" href="{{ url('about') }}">About</a>
                    </li>
                    
                    <li class="{{ Request::segment(1) == 'contact'? 'active':'' }}">
                        <a class="page-scroll" href="{{ url('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>We craft<br/>
                        brands, web apps,<br/>
                        and user interfaces<br/>
                        we are IN+ studio</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>
                        <a class="caption-link" href="#" role="button">Inspinia Theme</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <img src="{{ url('public/assets/img/landing/laptop.png') }}" alt="laptop"/>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>We create meaningful <br/> interfaces that inspire.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>