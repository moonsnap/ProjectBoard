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
                                    <h2 class="main-title">Get In Touch</h2>
                                    <hr>
                                    <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <div id="mapwrapper">
            <div id="map"></div>
        </div>
        <section id="contact" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 fade-up">
                        <h3>Contact</h3>
                        <br>
                        <p>
                            <span class="icon icon-envelop"></span> 
                            <h4>문 지 민</h4>
                            <a href="#">scenery25@gmail.com</a> <br/>
                        </p>
                    </div><!-- col -->
                
                    <div class="col-md-8 fade-up">
                        <div id="message"></div>
                        <form method="post" action="sendemail.php" id="contactform">
                            <input type="text" name="name" id="name" placeholder="Name" />
                            <input type="text" name="email" id="email" placeholder="Email" />
                            <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                            <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                        </form>
                    </div><!-- col -->
                </div><!-- row -->  
                <div class="gap"></div>         
            </div>
        </section>
    </div>