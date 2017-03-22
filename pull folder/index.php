<!--Mobile first best viewed at 640x960-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Spacely</title>
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="class1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--logo-->
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header my-object">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Define Your Space Today...</h4>
                </div>
                <div class="modal-body">
                    <input type="image" src="social.jpeg" name="social" class="btTxt socialSubmit" id="saveForm" />
                    <input type="image" src="study.jpg" name="study" class="btTxt studySubmit" id="saveForm" />
                    <input type="image" src="meditation.jpeg" name="meditation" class="btTxt meditationSubmit" id="saveForm" />
                </div>
                <div class="modal-footer">
                    <form class="form-inline">
                        <div class="form-group form-group-lg">
                            <label for="exampleInputName2">Username</label>
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                        </div>
                        <div class="form-group form-group-lg">
                            <label for="exampleInputEmail2">Email (Optional)</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                        </div>
                        <button type="submit" class="btn btn-default btn-lg startButton">Go!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid logo">
        <img src="study1.jpg" class="">
        <div class="username">
            <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">JetCyclops</a></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row col-lg-6 chat">
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
                        <a class="navbar-brand" href="#">Spacely</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Spaces <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Study Spaces</a></li>
                                    <li><a href="#">Meditation Spaces</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Account</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
            <div class="row col-lg-7 liveFeed">
                Live Feed/CHAT .... Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eleifend ultricies lorem ut condimentum. Donec luctus blandit rutrum. Donec sapien felis, fermentum mattis scelerisque cursus, viverra vel eros. Sed venenatis metus dignissim ex tincidunt, a ornare velit tempor. Mauris eu ex nisl. Pellentesque nec libero sed nisi condimentum bibendum. Nulla mi tellus, efficitur ut leo vel, interdum bibendum arcu. Donec</div>
        </div>
        <div class="row col-lg-5 map">
            <img src="map.gif">
        </div>
        <div class="row col-lg-6">
            <div class="actions">
                <button type="button" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> Check in!
                </button>
                <button type="button" class="btn btn-default btn-lg">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Crime Layer
                </button>
            </div>
        </div>
    </div>
    <div class="row footer">
            <footer>
                <p>JetCyclops 2017</p>
            </footer>
        </div>
    <script type="text/javascript" src="js.js"></script>
</body>