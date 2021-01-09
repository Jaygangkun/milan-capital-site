
    <?php
    $header_wrap_style = 'header--white-bk';
    include('header.php');
    ?>
    
    <div class="firm-main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h2 class="section-title-underline"><span class="section-title-underline__text">The Firm</span></h2>
                    <div class="section-desc text-center">At Milan, we invest for the long term because building successful, resilient businesses
        can lead to better returns, stronger communities and economic growth that works for everyone.</div>
                    <div class="firm-video-wrap">
                        <div class="firm-video-img-wrap" style="background-image:url(images/firm-video.png)">
                            <div class="firm-video-play-btn link-video-popup" href="#firm_video_modal">
                                <img class="firm-video-play-btn__img" src="images/icon-play.png">
                            </div>
                            <video controls style="display: none">
                                <source src="videos/MC-video-2.m4v" type="video/ogg">
                            </video>
                        </div>
                        <img class="firm-video-logo-icon-img" src="images/icon-logo-white.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="display: none">
		<div id="firm_video_modal">
			<div class="video-iframe-wrap">
                <!-- <iframe data-src="videos/MC-video-2.m4v" frameborder="0" allowfullscreen></iframe> -->
                <video controls>
                    <source src="videos/MC-video-2.m4v" type="video/ogg">
                </video>
			</div>
		</div>
	</div>
    <div class="firm-history-section" style="background-image:url(images/firm-history-bk.png)">
        <div class="container">
            <h4 class="section-sub-title text-center">FIRM HISTORY</h4>
            <div class="firm-history-slider-container">
                <div class="firm-history-slider">
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2010</div>
                        <div class="firm-history-desc">The Space Hunters is started from an apartment couch in Birmingham, AL with a $6k investment.</div>
                    </div>
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2010</div>
                        <div class="firm-history-desc">Milan Family Holdings (the first version of Milan Capital Management) is formed to acquire 10 cell phone stores.</div>
                    </div>
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2012</div>
                        <div class="firm-history-desc">Baby Panda Apps created after reading The 4-Hour Workweek.</div>
                    </div>
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2013-2015</div>
                        <div class="firm-history-desc">Emoji Slayer app does over $10MM in revenue.</div>
                    </div>
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2015</div>
                        <div class="firm-history-desc">Milan Family Holdings acquires its first commercial real estate property.</div>
                    </div>
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2016</div>
                        <div class="firm-history-desc">300+ unit apartment complex is acquired.</div>
                    </div>
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2017</div>
                        <div class="firm-history-desc">Financial platform is acquired, the name changed to Loanify.</div>
                    </div>
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2018</div>
                        <div class="firm-history-desc">Milan Capital Management is launched to house the 11 companies it owned under one roof and to focus strictly on Private Equity.</div>
                    </div>
                    <div class="firm-history-slide">
                        <div class="firm-history-year">2019</div>
                        <div class="firm-history-desc">MCM acquire 5 companies.</div>
                    </div>
                </div>
                <div class="firm-history-slider-prev-icon">
                    <img class="firm-history-slider-prev-icon__img" src="images/icon-slider-prev.png">
                </div>
                <div class="firm-history-slider-next-icon">
                    <img class="firm-history-slider-prev-icon__img" src="images/icon-slider-next.png">
                </div>
            </div>
        </div>
    </div>

    <div class="firm-desc-section">
        <div class="container">
            <div class="home-dna-sub-title">We continue to build on our track record to innovate into new strategies, drive growth, and serve up unprecedented returns.</div>
        </div>
    </div>

    <div class="firm-introduction-section">
        <div class="firm-introduction-col">
            <div class="firm-introduction-col-wrap">
                <div class="firm-introduction-title">Our People</div>
                <div class="firm-introduction-desc">We focus on attracting exceptionally talented people and rewarding initiative, independent thinking and integrity. We have a critical source of intellectual capital from our team’s latitude of skills and deep expertise.</div>
            </div>
        </div>
        <div class="firm-introduction-col">
            <div class="firm-introduction-col-wrap">
                <div class="firm-introduction-title">Our Scale</div>
                <div class="firm-introduction-desc">Investing across regions, industries and asset classes gives us the intellect, resources and captious mass to take advantage of opportunities on a global scale.</div>
            </div>
        </div>
        <div class="firm-introduction-col">
            <div class="firm-introduction-col-wrap">
                <div class="firm-introduction-title">All-Weather Performance</div>
                <div class="firm-introduction-desc">We look to our performance as being characterized by superior risk-adjusted returns across a broad and expanding range of asset classes and through all types of economic conditions.</div>
            </div>
        </div>
    </div>

    <?php
    include('footer.php')
    ?>