<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">관리자 페이지</h2>
                                    <hr>
                                    <p>관리자 메뉴입니다</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="portfolio" class="white">
            <div class="container">
                <div class="row">
                    <div class="gap"></div> 
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Admin</h3>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" action="admin/authentication" method="POST">
                                    <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="userid" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
	            </div>    
                
            </div>
        </section>
    </div>