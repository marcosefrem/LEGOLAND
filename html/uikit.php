<?php

    /*
        
    Configuración de guia de estilos, marcar con false si no se usa el componente    
        
    */

    $lists           =true;
    $tables           =true;
    $forms           =true;
    $alerts           =true;
    $dropdowns     =true;
    $modals           =true;
    $tabs           =true;
    $tooltips      =true;
    $breadcrumb    =true;
    $pagination    =true;
    $progress      =true;
    $accordion     =true;
    $video       =true;
    $carousel   =true;
    $animations    =true;    
    $blocks       =true;

    //Declaramos los colores

    $colors = array(
        array('color-white','#fff'),
        array('color-success','#71a67b'),
        array('color-info','#61a0b9'),
        array('color-warning','#f08400'),
        array('color-danger','#ec3457'),
        array('color-text','#4d4d4d'),
    );

    
    /*
        
    Ignorar a partir de aqui. NO TOCAR!!!    
        
    */

    //Función para pintar los colores
    function printColors($colors){
        $htmlColors = '';
        for ($i=0;$i<sizeof($colors);$i++){
          $htmlColors .= '
              <div class="col-xs-6 col-sm-3 col-md-2 margin-xs-b-10">
                  <div class="square bg-'.$colors[$i][0].'"></div>
                   <small>'.$colors[$i][0].'<br>'.$colors[$i][1].'</small> 
              </div>
          ';
        }
        echo $htmlColors;
    }
    
    
    

?>



    <?php include('src/includes/uikit/html-start.html')?>  

    <style type="text/css" media="screen">
        body > .navbar {
            -webkit-transition: background-color 300ms ease-in;
            transition: background-color 300ms ease-in
        }
        
        .affix{ top:0; right: 0; }
        
        @media (min-width:768px) {
            body > .navbar-transparent {
                background-color: transparent
            }
        
            body > .navbar-transparent .navbar-nav > .open > a {
                background-color: transparent !important
            }
        }
        
        #home {
            padding-top: 0
        }
        
        #home .navbar-brand {
            padding: 13.5px 15px 12.5px
        }
        
        #home .navbar-brand > img {
            display: inline;
            margin: 0 10px;
            height: 100%
        }
        
        #banner {
            min-height: 300px;
            border-bottom: none
        }
        
        .table-of-contents {
            margin-top: 1em
        }
        
        .page-header h1 {
            font-size: 4em
        }
        
        section {
            padding-top: 100px
        }
        
        .bs-component {
            position: relative
        }
        
        .bs-component .modal {
            position: relative;
            top: auto;
            right: auto;
            left: auto;
            bottom: auto;
            z-index: 1;
            display: block
        }
        
        .bs-component .modal-dialog {
            width: 90%
        }
        
        .bs-component .popover {
            position: relative;
            display: inline-block;
            width: 220px;
            margin: 20px
        }
        
        #source-button {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 100;
            font-weight: 700
        }
        
        .nav-tabs {
            margin-bottom: 15px
        }
        
        .progress {
            margin-bottom: 10px
        }
        
        footer {
            margin: 5em 0
        }
        
        footer li {
            float: left;
            margin-right: 1.5em;
            margin-bottom: 1.5em
        }
        
        footer p {
            clear: left;
            margin-bottom: 0
        }
        
        .splash {
            padding: 9em 0 2em;
            background-color: #141d27;
            background-image: url(../img/bg.jpg);
            background-size: cover;
            background-attachment: fixed;
            color: #fff;
            text-align: center
        }
        
        .splash .logo {
            width: 160px
        }
        
        .splash h1 {
            font-size: 3em
        }
        
        .splash #social {
            margin: 2em 0
        }
        
        .splash .alert {
            margin: 2em 0
        }
        
        .section-tout {
            padding: 4em 0 3em;
            border-bottom: 1px solid rgba(0, 0, 0, .05);
            background-color: #eaf1f1
        }
        
        .section-tout .fa {
            margin-right: .5em
        }
        
        .section-tout p {
            margin-bottom: 3em
        }
        
        .section-preview {
            padding: 4em 0 4em
        }
        
        .section-preview .preview {
            margin-bottom: 4em;
            background-color: #eaf1f1
        }
        
        .section-preview .preview .image {
            position: relative
        }
        
        .section-preview .preview .image:before {
            box-shadow: inset 0 0 0 1px rgba(0, 0, 0, .1);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";
            pointer-events: none
        }
        
        .section-preview .preview .options {
            padding: 1em 2em 2em;
            border: 1px solid rgba(0, 0, 0, .05);
            border-top: none;
            text-align: center
        }
        
        .section-preview .preview .options p {
            margin-bottom: 2em
        }
        
        .section-preview .dropdown-menu {
            text-align: left
        }
        
        .section-preview .lead {
            margin-bottom: 2em
        }
        
        @media (max-width:767px) {
            .section-preview .image img {
                width: 100%
            }
        }
        
        .sponsor {
            text-align: center
        }
        
        .sponsor a:hover {
            text-decoration: none
        }
        
        @media (max-width:767px) {
            .splash {
                padding-top: 4em
            }
        
            .splash .logo {
                width: 100px
            }
        
            .splash h1 {
                font-size: 2em
            }
        
            #banner {
                margin-bottom: 2em;
                text-align: center
            }
        }
        
        .square{
            padding-bottom: 100%;
            outline: 1px solid #eee
        }
        
        .icon{ 
            background: #eee;    
        }
        .ico-holder{
            margin: 5px;
            display: inline-block;
        }
        
        .title-uikit.h1,
        .title-uikit.h2,
        .title-uikit.h3,
        .title-uikit.h4,
        .title-uikit.h5,
        .title-uikit.h6{
            margin-top: 18px;
        }
        
        #dropdown .dropdown-menu { position: static !important; display: block; margin-bottom: 10px; float: none }
        
    </style>

    <body data-spy="scroll" data-target=".navbar" data-offset="108">
        <?php include('src/includes/uikit/off-canvas.html')?>    
        <?php include('src/includes/uikit/off-canvas-right.html')?> 
        <?php include('src/includes/blocks/header.html')?>

<!-- 		<button type="button" class="btn btn-block btn-primary click">Click!</button> -->

        <main class="wrapper tooltips popovers">
    
            <!-- Containers================================================== -->
            <section id="Containers" class="in">
	            
                <div class="container">
                    <div class="page-header">
                        <h1 class="title-uikit h1" id="containers">Containers</h1>
                    </div>
                </div>	            
	            
	            <div class="bs-component">
	                <div class="container">
	                    <div class="jumbotron">
	                        <h1 class="title-uikit h1">
	                            Container
	                        </h1>
	                        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	                        <p>
	                            <a class="btn btn-primary btn-lg">Learn more</a>
	                        </p>
	                    </div>
	                </div>
                </div>
                
                <div class="bs-component">
                    <div class="container-full">
                        <div class="jumbotron">
                            <div class="container">
                                <h1 class="title-uikit h1">Container Full</h1>
                                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                <p>
                                    <a class="btn btn-primary btn-lg">Learn more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>     
                <div class="bs-component">
                	<div class="container-fluid">
                        <div class="jumbotron">
                            <h1 class="title-uikit h1">Container Fluid</h1>
                            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                            <p>
                                <a class="btn btn-primary btn-lg">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>                
                
                           
                
            </section>
            
             <!-- Grid================================================== -->                        
            <section id="Grid" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1">Grid 12</h1>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                    <?php
                        for($i;$i<12;$i++){
                            $cols .= '
                            <div class="col-xs-1">
                                <div class="square bg-color-success"></div>
                            </div>';
                        }
                        echo $cols;
                        
                    ?>
                    
                                                
                </div><!-- row -->

            </section>                           
                
                    
            <!-- Icons================================================== -->                        
            <section id="Icons" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1">Icons</h1>
                        </div>
                    </div>
                </div>
                
                <?php

                    //Cargamos los svg-icon y los pintamos como spans
                    if ($handle = opendir('svg/svg-icon/')) {
                        
                        $entryArray='';
                        
                        //Formamos el array
                        while (false !== ($entry = readdir($handle))) {
                            //no metemos en el array ciertos archivos                                                
                            if (
                                $entry != "." ||
                                $entry != ".." ||
                                $entry != ".DS_Store") {
                                $entryArray[] = str_replace('.svg','',$entry);;
                            }
                            
                        }
                    
                        closedir($handle);
                    }
                        
                    sort($entryArray);                                        
                    unset($entryArray[0]);
                    unset($entryArray[1]);
                    sort($entryArray);
                    
                    $i=0;
                    //Pintamos el listado
                    foreach ($entryArray as $file){
                        
                        if  ($file!='.DS_Store'){
                            $iconsSVG .= "
                            <div class='ico-holder'>
                                <span class='icon' role='img' aria-label='Icono $file'>
                                    <span data-grunticon-embed class=\"icon-$file\"></span>
                                </span>
                                <div>
                                    <small>$file</small>
                                </div>
                            </div>
                            
                            
                            ";
                            $i++;
                        }
                        
                    }

                ?>
                
                <div class="row">
                    <div class="col-md-5 col-lg-4">

                        <div class="margin-sm-b-25">
                            <div class="ico-holder">
	                            <div class="bs-component">
	                                <span class="icon lg">
	                                    <span data-grunticon-embed- class="icon-<?php echo $entryArray[1] ?>"></span>
	                                </span>
                                </div>
                                <div>
                                    <small>LG</small>
                                </div>                                
                            </div>
                            <div class="ico-holder">
	                            <div class="bs-component">
	                                <span class="icon md">
	                                    <span data-grunticon-embed- class="icon-<?php echo $entryArray[1] ?>"></span>
	                                </span>
                                </div>
                                <div>
                                    <small>MD</small>
                                </div>                                
                            </div>
                            <div class="ico-holder">
	                            <div class="bs-component">
	                                <span class="icon sm">
	                                    <span data-grunticon-embed- class="icon-<?php echo $entryArray[1] ?>"></span>
	                                </span>
                                </div>
                                <div>
                                    <small>SM</small>
                                </div>                                
                            </div>
                            <div class="ico-holder">
	                            <div class="bs-component">
	                                <span class="icon xs">
	                                    <span data-grunticon-embed- class="icon-<?php echo $entryArray[1] ?>"></span>
	                                </span>
                                </div>
                                <div>
                                    <small>XS</small>
                                </div>                                
                            </div>
                        </div>

                        
                    </div>
                    
                    <div class="col-md-7 col-lg-8">
                        <?php echo $iconsSVG; ?>
                    </div>    
                </div><!-- row -->

            </section>                           
            <!-- Colours================================================== -->
            <section id="Colours" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="typography">Colours</h1>
                        </div>
                    </div>
                </div>
                <div class="row">                            
                    <?php
                        printColors($colors);                                        
                    ?>
                </div><!-- row -->
                

            </section>       
            <!-- Buttons================================================== -->
            <section id="Buttons" class="container in">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="title-uikit h1" id="buttons">Buttons</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <p class="bs-component">
                            <a href="#" class="btn btn-default">Default</a>
                            <a href="#" class="btn btn-primary">Primary</a>
                            <a href="#" class="btn btn-secondary">Secondary</a>
                            <a href="#" class="btn btn-link">Link</a>
                        </p>

                        <p class="bs-component">
                            <a href="#" class="btn btn-primary btn-lg">lg button</a>
                            <a href="#" class="btn btn-primary">button</a>
                            <a href="#" class="btn btn-primary btn-sm">sm button</a>
                            <a href="#" class="btn btn-primary btn-xs">xs button</a>
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <p class="bs-component">
                            <a href="#" class="btn btn-default btn-lg btn-block">Block level button</a>
                        </p>
                        <div class="bs-component" style="margin-bottom: 15px;">
                            <div class="btn-group btn-group-justified">
                                <a href="#" class="btn btn-default">Left</a>
                                <a href="#" class="btn btn-default">Middle</a>
                                <a href="#" class="btn btn-default">Right</a>
                            </div>
                        </div>
                        <span class="bs-component">
                    	    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">ON / OFF</button>
                    	</span>
                        <span class="bs-component">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked=""> Radio 1 (preselected)
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> Radio 2
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Radio 3
                                </label>
                            </div>   
                        </span>                             
                        
                    </div>
                </div>
            </section>
            <!-- Typography================================================== -->
            <section id="Typography" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="typography">Typography</h1>
                        </div>
                    </div>
                </div>
                <!-- Headings -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bs-component">
                            <h1 class="h1">Heading 1</h1>
                            <h2 class="h2">Heading 2</h2>
                            <h3 class="h3">Heading 3</h3>
                            <h4 class="h4">Heading 4</h4>
                            <h5 class="h5">Heading 5</h5>
                            <h6 class="h6">Heading 6</h6>
                            <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="bs-component">
                            <h2 class="title-uikit h2">Example body text</h2>
                            <p>Nullam quis risus eget 
                                <a class="link-default" href="#">link default</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, <a class="link-primary" href="#">link primary</a> ridiculus mus. Nullam id dolor id nibh <a class="link-secondary" href="#">link secondary</a> vehicula.
                            </p>
                            <p>
                                <small>This line of text is meant to be treated as fine print.</small>
                            </p>
                            <p>The following snippet of text is 
                                <strong>rendered as bold text</strong>.
                            </p>
                            <p>The following snippet of text is 
                                <em>rendered as italicized text</em>.
                            </p>
                            <p>An abbreviation of the word attribute is 
                                <abbr title="attribute">attr</abbr>.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Lists================================================== -->
            <section id="Lists" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="typography">Lists</h1>
                        </div>
                    </div>
                </div>
                <!-- Headings -->
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="title-uikit h2">Unordered</h2>	                            
                        <div class="bs-component">
                            <ul>
                                <li>Item 1</li>
                                <li>Item 2</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="title-uikit h2">Unstyled</h2>
                        <div class="bs-component">
                            <ul class="list-unstyled">
                                <li>Item 1</li>
                                <li>Item 2</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <h2 class="title-uikit h2">Ordered</h2>	                            
                        <div class="bs-component">
                            <ol>
                                <li>Item 1</li>
                                <li>Item 2</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="title-uikit h2">Icons</h2>	                            
                        <div class="bs-component">
                            <ul class="list-icons xs-icons">
                                <li>
                                    <div class="text">
                                        <span class="icon xs">
                                            <span class="icon-twitter" data-grunticon-embed->
                                        
                                            </span>
                                        </span>
                                        Lorem ipsum dolor sit amet
                                    </div>
                                </li>
                            </ul>                                    
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="bs-component"></div>
                    </div>    
                </div><!-- row -->
                
                
            </section>
            
            
            <!-- Tables================================================== -->
            <section id="Tables" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="tables">Tables</h1>
                        </div>
                        <div class="row">
                        
                            <div class="col-md-6">
                                <h2 class="title-uikit h2">Responsive</h2>
                                <div class="bs-component">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <caption class="sr-only">Descripción de la tabla</caption>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <h2 class="title-uikit h2">Reflow</h2>
                                <div class="bs-component">
                                    <div class="table-reflow">
                                        <table class="table table-hover table-striped">
                                            <caption class="sr-only">Descripción de la tabla</caption>
                                            <thead>
                                                <tr>
                                                    <th>Movie Title</th>
                                                    <th>Genre</th>
                                                    <th>Year</th>
                                                    <th>Gross</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-th="Movie Title">Star Wars</td>
                                                    <td data-th="Genre">Adventure, Sci-fi</td>
                                                    <td data-th="Year">1977</td>
                                                    <td data-th="Gross">$460,935,665</td>
                                                </tr>
                                                <tr>
                                                    <td data-th="Movie Title">Howard The Duck</td>
                                                    <td data-th="Genre">"Comedy"</td>
                                                    <td data-th="Year">1986</td>
                                                    <td data-th="Gross">$16,295,774</td>
                                                </tr>
                                                <tr>
                                                    <td data-th="Movie Title">American Graffiti</td>
                                                    <td data-th="Genre">Comedy, Drama</td>
                                                    <td data-th="Year">1973</td>
                                                    <td data-th="Gross">$115,000,000</td>
                                                </tr>
                                            </tbody>
                                        </table>    
                                    </div>
                                </div>

                            </div>
                        
                        </div>
                        <!-- /example -->
                    </div>
                </div>
            </section>
            <!-- Forms================================================== -->
            <section id="Forms" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="forms">Forms</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="well bs-component">
                            <form class="form-horizontal">
                                <fieldset>
                                    <legend>Legend</legend>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                        <div class="col-lg-10">
                                            <input type="email" data-error="error email" class="form-control" id="inputEmail" placeholder="Email">
                                            <div class="help-block with-errors">
                                                <ul role="alert">                                                        </ul>
                                            </div>                                                    
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="input-datepicker" class="col-lg-2 control-label">Datepicker</label>
                                        <div class="col-lg-10">
                                            <input name="input-datepicker" id="input-datepicker" type="text" class="js-datepicker form-control" value="" aria-invalid="false">
                                            <div class="help-block with-errors">
                                                <ul role="alert">                                                        </ul>
                                            </div>                                                    
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="start-datepicker" class="col-lg-2 control-label">Range</label>
                                        <div class="col-lg-10">
                                            <div class="input-daterange input-group js-datepicker" id="datepicker">
                                                <input type="text" class="input-sm form-control" id="start-datepicker" name="start-datepicker">
                                                <span class="input-group-addon">to</span>
                                                <input type="text" class="input-sm form-control" name="end-datepicker">
                                            </div>                                        
                                        </div>
                                    </div>                   
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                        <div class="col-lg-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">Checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" rows="3" id="textArea"></textarea>
                                            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Radios</label>
                                        <div class="col-lg-10">
                                            <div class="radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                                <label for="optionsRadios1">
                                                    Option one is this
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1" checked="">
                                                <label for="optionsRadios2">
                                                    Option two can be something else
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class="col-lg-2 control-label">Selects</label>
                                        <div class="col-lg-10">
                                            <select class="form-control" id="select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                            <br>
                                            <select multiple="" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            
                                            <label for="bill-file" class="btn btn-default js-upload-file" aria-label="Seleccionar archivo" data-file-name-holder="#file-names">Seleccionar archivo</label>    
                                            <input type="file" name="bill-file" id="bill-file" class="hide" multiple="" aria-invalid="false">
                                            <div id="file-names"></div>    
                                        </div>
                                                                                            
                                    </div>
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="bs-component">
                            <div class="form-group">
                                <label class="control-label" for="focusedInput">Focused input</label>
                                <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="disabledInput">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                                    </div>
                                    <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning">Input warning</label>
                                        <input type="text" class="form-control" id="inputWarning">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input error</label>
                                            <input type="text" class="form-control" id="inputError">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label" for="inputSuccess">Input success</label>
                                                <input type="text" class="form-control" id="inputSuccess">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="inputLarge">Large input</label>
                                                    <input class="form-control input-lg" type="text" id="inputLarge">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label" for="inputDefault">Default input</label>
                                                        <input type="text" class="form-control" id="inputDefault">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSmall">Small input</label>
                                                            <input class="form-control input-sm" type="text" id="inputSmall">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Input addons</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">$</span>
                                                                    <input type="text" class="form-control">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-default" type="button">Button</button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                </div>
                </div>
            </section>                    
            <!-- Navs================================================== -->
            <section id="Navs" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="navs">Navs</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="title-uikit h2" id="nav-tabs">Tabs</h2>
                        <div class="bs-component">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#home" data-toggle="tab">Home</a>
                                </li>
                                <li>
                                    <a href="#profile" data-toggle="tab">Profile</a>
                                </li>
                                <li class="disabled">
                                    <a>Disabled</a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#dropdown1" data-toggle="tab">Action</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#dropdown2" data-toggle="tab">Another action</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                                </div>
                                <div class="tab-pane fade" id="dropdown1">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                                </div>
                                <div class="tab-pane fade" id="dropdown2">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-lg-4">
                            <h2 class="title-uikit h2" id="nav-breadcrumbs">Breadcrumbs</h2>
                            <div class="bs-component">
                                <ul class="breadcrumb">
                                    <li class="active">Home</li>
                                </ul>
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="active">Library</li>
                                </ul>
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Library</a>
                                    </li>
                                    <li class="active">Data</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="title-uikit h2" id="pagination">Pagination</h2>
                            <div class="bs-component">
                                <ul class="pagination">
                                    <li class="disabled">
                                        <a href="#">&laquo;</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">&raquo;</a>
                                    </li>
                                </ul>
                                <ul class="pagination pagination-lg">
                                    <li class="disabled">
                                        <a href="#">&laquo;</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">&raquo;</a>
                                    </li>
                                </ul>
                                <ul class="pagination pagination-sm">
                                    <li class="disabled">
                                        <a href="#">&laquo;</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#">&raquo;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h2 class="title-uikit h2" id="pager">Pager</h2>
                            <div class="bs-component">
                                <ul class="pager">
                                    <li>
                                        <a href="#">Previous</a>
                                    </li>
                                    <li>
                                        <a href="#">Next</a>
                                    </li>
                                </ul>
                                <ul class="pager">
                                    <li class="previous disabled">
                                        <a href="#">&larr; Older</a>
                                    </li>
                                    <li class="next">
                                        <a href="#">Newer &rarr;</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </section>
            <!-- Indicators================================================== -->
            <section id="Indicators" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="indicators">Indicators</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-uikit h2">Alerts</h2>
                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-warning">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <h4 class="h4">Warning!</h4>
                                <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, 
                                    <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Oh snap!</strong>
                                <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Well done!</strong> You successfully read 
                                <a href="#" class="alert-link">this important alert message</a>.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bs-component">
                            <div class="alert alert-dismissible alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Heads up!</strong> This 
                                <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="title-uikit h2">Labels</h2>
                        <div class="bs-component" style="margin-bottom: 40px;">
                            <span class="label label-default">Default</span>
                            <span class="label label-primary">Primary</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-danger">Danger</span>
                            <span class="label label-info">Info</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h2 class="title-uikit h2">Badges</h2>
                        <div class="bs-component">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#">Home 
                                        <span class="badge">42</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Profile 
                                        <span class="badge"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Messages 
                                        <span class="badge">3</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Progress bars================================================== -->
            <section id="Progress bars" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="progress">Progress bars</h1>
                        </div>
                        <h3 class="title-uikit h3" id="progress-basic">Basic</h3>
                        <div class="bs-component">
                            <div class="progress-bars">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                        <h3 class="title-uikit h3" id="progress-alternatives">Contextual alternatives</h3>
                        <div class="bs-component">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
                        <h3 class="title-uikit h3" id="progress-striped">Striped</h3>
                        <div class="bs-component">
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>
                        <h3 class="title-uikit h3" id="progress-animated">Animated</h3>
                        <div class="bs-component">
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 45%"></div>
                            </div>
                        </div>
                        <h3 class="title-uikit h3" id="progress-stacked">Stacked</h3>
                        <div class="bs-component">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                                <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                                <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dialogs================================================== -->
            <section id="Dialogs" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="dialogs">Dialogs</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="title-uikit h2">Modals</h2>
                        <div class="bs-component">
                            <div class="modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="title-uikit h4" class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body…</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="title-uikit h2">Dropdown</h2>
                        <div id="dropdown" class="bs-component">
                            <ul class="dropdown-menu list-unstyled" role="menu" aria-labelledby="dropdownMenu2">
                                <li role="presentation" class="dropdown-header">Dropdown header</li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation" class="dropdown-header">Dropdown header</li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                            </ul>                                    
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="title-uikit h2">Popovers</h2>
                        <div class="bs-component">
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</button>
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamussagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>
                            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <h2 class="title-uikit h2">Tooltips</h2>
                        <div class="bs-component">
                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>
                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>
                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>
                            <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
                        </div>
                    </div>    
                </div><!-- row -->
        
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="title-uikit h2">Collapse</h2>
                        <div class="bs-component">

                            <div class="panel-group" id="accordion">
                            
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <span class="panel-title">
                                        <a data-toggle="collapse" class="no-scroll" data-parent="#accordion" href="#panel-1">
                                        Panel abierto <span class="icon-arrow bottom pull-right"></span>
                                        </a>
                                        </span>
                                    </div>
                                    <div id="panel-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <span class="panel-title">
                                        <a data-toggle="collapse" class="no-scroll" data-parent="#accordion" href="#panel-2">
                                        Panel cerrado <span class="icon-arrow bottom pull-right"></span>
                                        </a>
                                        </span>
                                    </div>
                                    <div id="panel-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>

                        </div>
                    </div>
                    
                </div><!-- row -->
        
                
            </section>
            <!-- Media================================================== -->
            <section id="Media" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="dialogs">Media</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="title-uikit h2">Responsive Video</h2>
                        <div class="bs-component">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/126544483"frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="title-uikit h2">Carousel</h2>
                        <div class="bs-component">

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                      <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjxnPjx0ZXh0IHg9IjMxNy43MzQzNzUiIHk9IjI1MCIgc3R5bGU9ImZpbGw6IzU1NTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTo0MnB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPkZpcnN0IHNsaWRlPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                    </div>
                                    <div class="item">
                                      <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjI3Ny4yODEyNSIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQycHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                    </div>
                                    <div class="item">
                                      <img data-src="holder.js/900x500/auto/#555:#333/text:Third slide" alt="Third slide [900x500]" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjxnPjx0ZXh0IHg9IjMwOC40MjE4NzUiIHk9IjI1MCIgc3R5bGU9ImZpbGw6IzMzMztmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTo0MnB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPlRoaXJkIHNsaWRlPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                
            </section>
            <!-- Blocks================================================== -->
            <section id="Blocks" class="container in">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-header">
                            <h1 class="title-uikit h1" id="progress">Blocks</h1>
                        </div>
                        
                        <?php
                        //Include automático de cualquier bloque excepto headers, footer u offcanvas
                        $files = preg_grep('~^(?!header)(?!footer)(?!off).*\.(html)$~', scandir("src/includes/blocks/"));
                        
						foreach ($files as $filename)
						{
							$title_name = str_replace('.html', '', $filename);
							$title_name = str_replace('src/includes/blocks/', '', $title_name);
							
							
							echo ' <h3 class="title-uikit h3">'.$title_name.'</h3>';
							echo '<div class="bs-component">';
						    include 'src/includes/blocks/'.$filename;
						}   echo '</div>';
						?>                     

                    </div>
                </div>
            </section>
            <div id="source-modal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="title-uikit h4" class="modal-title">Source Code</h4>
                        </div>
                        <div class="modal-body">
                            <pre></pre>
                        </div>
                    </div>
                </div>
            </div>

                
                
                
            
            
        
        
            <div id="aside-affix" data-spy="affix">

                <nav id="nav-bar-guide" class="navbar">
                    <ul class="nav list-unstyled" role="tablist">
                
                    </ul>
                 </nav>                                        
                
            </div>
            
        
        </main>
        
    <?php include('src/includes/blocks/footer.html')?>
    
    <?php include('src/includes/uikit/plugins.js.html')?>
    
    
        
        
    <?php include('src/includes/core/html-end.html')?>