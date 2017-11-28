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
                <div class="gap"></div> 
            <?php echo $error;?>
            <?php echo form_open_multipart('/admin/do_upload');?>

                    <input type="file" name="userfile" size="20" />
                    <br /><br />
                    <input type="submit" value="upload" />
                </form>
            </div>
        </section>
    </div>