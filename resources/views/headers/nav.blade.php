@section('navbar')
    <div class="container-fluid"> 
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black fixed-top border-bottom border-danger">
            <div class="container-fluid">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    {{ (menu('site','headers.navItem')) }}
                </div>
            </div>
        </nav>
    </div>
@show