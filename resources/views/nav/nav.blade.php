<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">ABC Moving Company</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li class="{!! set_active('/') !!}{!! set_active('schedule') !!}">{!! HTML::link('/', 'Schedule') !!}</li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recources <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="{!! set_active('crews') !!}">{!! HTML::linkRoute('crews.index', 'Crews') !!}</li>
                <li class="{!! set_active('movers') !!}">{!! HTML::linkRoute('movers.index', 'Movers') !!}</li>
                <li class="{!! set_active('trucks') !!}">{!! HTML::linkRoute('trucks.index', 'Trucks') !!}</li>
                
              </ul>
            </li>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>