<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-upload"></i></a></li>
                <li><a href="#"><i class="fa fa-file-text"></i></a></li>
                <li><a href="#"><i class="fa fa-folder-open"></i></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-compressed"></i></a></li>
                <li><a href="#"><i class="fa fa-paste"></i></a></li>
                <li><a href="#"><i class="fa fa-trash"></i></a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= __('Sorting')?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Name</a></li>
                        <li><a href="#">Size</a></li>
                        <li><a href="#">Date</a></li>
                        <li><a href="#">Type</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
