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
                                    <h2 class="main-title">기록은 기억을 지배한다</h2>
                                    <hr>
                                    <p>시도때도 없이 찍은 사진들</p>
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
                <div class="gap"></div> 
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Examples Of Excellence</h2>
                        <hr>
                        <p>She evil face fine calm have now. Separate screened he outweigh of distance landlord.</p>
                    </div> 

                    <ul class="portfolio-filter fade-down center">
                        <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">All</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".portrait">Portrait</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".landscape">Landscape</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".nature">Nature</a></li>
                    </ul> <!-- 클래스네임에 분류단어 사용해 사진 주제별로 분류하는 버튼 리스트 -->

                    <ul class="portfolio-items col-3 isotope fade-up">
                        <li class="portfolio-item landscape nature isotope-item">
                            <div class="item-inner">
                                <img src="static/images/photos/IMG_0538.jpg" alt="">
                                <h5>Lorem ipsum dolor sit amet</h5>
                                <div class="overlay">
                                    <a class="preview btn btn-outlined btn-primary" href="static/images/photos/IMG_0538.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                                </div>         
                            </div>           
                        </li> <!-- 앨범 미리보기 항목 -->
                    </ul>
                </div>
            </section>
    </div>