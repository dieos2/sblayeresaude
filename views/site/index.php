


    <!-- HERO -->
    <div class="wesley_tm_section" id="home">
        <div class="wesley_tm_hero_header">
            <div class="wesley_tm_universal_box_wrap">
                <div class="bg_wrap">
                    <div class="overlay_image hero jarallax" data-speed="0" data-jarallax-original-styles="null" style="background-image: none; background-attachment: scroll; background-size: auto;"><div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;http://frenify.com/envato/marketify/html/wesley/1//img/hero/2.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1349px; height: 1011.75px; overflow: hidden; pointer-events: none; margin-left: 0px; margin-top: -217.375px; visibility: visible; transform: translate3d(0px, 0px, 0px);"></div></div></div>
                    <div class="overlay_video"></div>
                    <div class="overlay_color hero"></div>
                </div>
                <div class="content hero">
                    <div class="container hero">
                        <div class="wesley_tm_hero_title" style="opacity: 1; margin-top: 0px;">
                            <h5>procurando um Fono...?</h5>
                            <p class="name">Aqui estou <span>Sávio</span></p>
                            <div class="wesley_tm_hero_share">
                                <ul>
                                    <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#"><i class="xcon-facebook"></i></a></li>
                                    <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#"><i class="xcon-twitter"></i></a></li>
                                    <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#"><i class="xcon-linkedin"></i></a></li>
                                    <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#"><i class="xcon-instagram"></i></a></li>
                                    <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#"><i class="xcon-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="wesley_tm_arrow_wrap bounce anchor">
                            <a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#about"><i class="xcon-angle-double-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /HERO -->

    <!-- ABOUT -->
    <div class="wesley_tm_section" id="about">
        <div class="container">
            <div class="wesley_tm_about_wrap">
                <div class="author_wrap">
                    <div class="leftbox">
                        <div class="image_wrap">
                            <img src="<?= $sobre->foto ?>" alt="">
                        </div>
                    </div>
                    <div class="rightbox">
                        <div class="wesley_tm_main_title_holder about">
                            <h3 style="color: orange"><?= $sobre->titulo ?></h3>
                        </div>
                        <div class="subtitle"><p><?= $sobre->subtitulo ?></p></div>
                        <div class="definition">
                            <?= $sobre->texto ?>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /ABOUT -->

    <!-- SKILLS -->
    <div class="wesley_tm_section"  id="sobre">
	<div class="wesley_tm_first_style">
                <div class="wesley_tm_main_title_holder">
                    <h3>Atuação</h3>
                  
                </div>
         <div class="container">
            <div class="">
                <div class="author_wrap">
                 
                 
                       
                        <div class="definition">
                            <p style="font-size: 20px"> 
                                <?= $atuacao->texto ?>
                            </p>

                        </div>
                       
                    
                </div>
            </div>
        </div>
    </div>
	</div>
    <!-- /SKILLS -->

    <!-- SERVICES -->
    <div class="wesley_tm_section" id="services">
        <div class="wesley_tm_service_wrapper_all" data-bg="white" data-style="first" data-animation="bottom">
            <div class="wesley_tm_first_style">
                <div class="wesley_tm_main_title_holder">
                    <h3>Cursos</h3>
                    <span>Laserterapia Clínica</span>
                </div>
                <div class="container">
                    <div class="wesley_tm_services_wrap">
                        <ul class="wesley_tm_miniboxes">
                           <?php
                foreach ($cursos as $data) {?>
                            <li class="wow fadeInUp wesley_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeInUp; height: 334px;">
                                <a href="/curso/view?id=<?= $data->id?>"><div class="inner">
                                    <div class="detail_wrap">
                                        <div class="image">
                                          
                                        </div>
                                        <span><?= $data->titulo  ?></span>
                                        <p style="font-style: italic"> <?= $data->subtitulo  ?></p>
                                       
                                        <p>  Público Alvo: <?= $data->publicoAlvo  ?>
                                        </p>
                                    </div>
                                    <div class="overlay_color"></div>
                                </div>
                                    </a>
                            </li>
                <?php }?>
                        </ul>
                    </div>
                </div>
            </div>

          

        </div>
    </div>
    <!-- /SERVICES -->

    <!-- COUNTER -->
    <div class="wesley_tm_section">
        <div class="wesley_tm_counter_wrap_all">
            <div class="wesley_tm_universal_box_wrap">
                <div class="bg_wrap">
                    <div class="overlay_image counter jarallax" data-speed="0" data-jarallax-original-styles="null" style="background-image: none; background-attachment: scroll; background-size: auto;"><div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;http://frenify.com/envato/marketify/html/wesley/1//img/hero/1.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1349px; height: 735.627px; overflow: hidden; pointer-events: none; margin-left: 0px; margin-top: -79.3133px; visibility: visible; transform: translate3d(0px, 0px, 0px);"></div></div></div>
                    <div class="overlay_color counter"></div>
                </div>
                <div class="content counter">
                    <div class="container">
                        <div class="wesley_tm_counter_wrap" data-col="4" data-delay="300">
                            <ul class="wesley_tm_counter_list wesley_tm_miniboxes">
                                <li>
                                    <div class="inner wesley_tm_minibox" style="height: 272px;">
                                        <h3><span><span class="wesley_tm_counter stop" data-from="0" data-to="2222" data-speed="3000">2,222</span></span></h3>
                                        <span>Cursos Administrados</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner wesley_tm_minibox" style="height: 272px;">
                                        <h3><span><span class="wesley_tm_counter stop" data-from="0" data-to="333" data-speed="3000">333</span>K</span></h3>
                                        <span>Hosras de Curso</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner wesley_tm_minibox" style="height: 272px;">
                                        <h3><span><span class="wesley_tm_counter stop" data-from="0" data-to="8888" data-speed="3000">8,888</span></span></h3>
                                        <span>Clientes Felizes</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner wesley_tm_minibox" style="height: 272px;">
                                        <h3><span><span class="wesley_tm_counter stop" data-from="0" data-to="100" data-speed="3000">100</span>%</span></h3>
                                        <span>Satisfação Garantida</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /COUNTER -->

    <!-- PORTFOLIO -->
    <div class="wesley_tm_section" id="portfolio">
        <div class="wesley_tm_portfolio_wrapper_all" data-portfolio-style="default">
            <div class="wesley_tm_first_portfolio">
                <div class="wesley_tm_main_title_holder portfolio">
                    <h3>Agenda</h3>
                    <span>Participe de Cursos Incríveis</span>
                </div>
                <div class="wesley_tm_portfolio_home_wrap masonry gallery_zoom" style="position: relative; height: 1160px;">
               <?php
                foreach ($agendas as $data) {?>
                    <div class="item masonry_item wow slideInUp" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: slideInUp; width: 370px; height: 260px; margin: 15px; position: absolute; left: 40px; top: 0px;">
                        <div class="inner">
                            <div class="image"></div>
                            <div class="image_overlay"></div>
                            <div class="image_definition">
                                <div class="title">
                                    <a class="#" href="http://frenify.com/envato/marketify/html/wesley/1/index.html#">AOC Productions</a>
                                </div>
                            </div>
                            <div class="link">
                                <a class="zoom" href="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/1.jpg"></a>
                            </div>
                        </div>
                    </div>
                  <?php }?>
                </div>
                <div class="wesley_tm_button">
                    <a href="http://frenify.com/envato/marketify/html/wesley/1/index.html"><span>Ver todas</span></a>
                </div>
            </div>

            <!-- PORTFOLIO FILTER -->
            <div class="wesley_tm_second_portfolio">
                <div class="container">
                    <div class="wesley_tm_portfolio_wrap">
                        <div class="wesley_tm_main_title_holder portfolio">
                            <h3>Awesome Works</h3>
                            <span>Meet our awesome works</span>
                        </div>
                        <div class="wesley_tm_portfolio_titles"></div>
                        <ul class="wesley_tm_portfolio_filter">
                            <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#" class="current" data-filter="*">All</a></li>
                            <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#" data-filter=".design">Design</a></li>
                            <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#" data-filter=".photography">Photography</a></li>
                            <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#" data-filter=".development">Development</a></li>
                        </ul>
                        <ul class="wesley_tm_portfolio_list gallery_zoom">
                            <li class="design">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="Aoc Productions" data-category="Design">
                                    <a class="zoom" href="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/1.jpg#">
                                        <img src="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/1.jpg" alt="">
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="photography">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="Ind Hed" data-category="Photography">
                                    <a class="zoom" href="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/2.jpg#">
                                        <img src="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/2.jpg" alt="">
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="development">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="Paper Mockup" data-category="Development">
                                    <a class="zoom" href="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/3.jpg#">
                                        <img src="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/3.jpg" alt="">
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="photography">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="The Nordic" data-category="Photography">
                                    <a class="zoom" href="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/4.jpg#">
                                        <img src="./SBlaser_files/600x600.jpg" alt="">
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="design">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="Creatives Castle" data-category="Design">
                                    <a class="zoom" href="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/5.jpg#">
                                        <img src="./SBlaser_files/600x600.jpg" alt="">
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="photography">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="White Bag" data-category="Photography">
                                    <a class="zoom" href="http://frenify.com/envato/marketify/html/wesley/1/img/portfolio/6.jpg#">
                                        <img src="./SBlaser_files/600x600.jpg" alt="">
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /PORTFOLIO FILTER -->

        </div>
    </div>
    <!-- /PORTFOLIO -->

    <!-- TESTIMONIALS -->
    <div class="wesley_tm_section" id="testimonials">
        <div class="wesley_tm_testimonials_wrapper_all">
            <div class="wesley_tm_universal_box_wrap">
                <div class="bg_wrap">
                    <div class="overlay_image testimonial jarallax" data-speed="0" data-jarallax-original-styles="null" style="background-image: none; background-attachment: scroll; background-size: auto;"><div id="jarallax-container-2" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;http://frenify.com/envato/marketify/html/wesley/1//img/hero/3.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1349px; height: 990.166px; overflow: hidden; pointer-events: none; margin-left: 0px; margin-top: -206.583px; visibility: visible; transform: translate3d(0px, 0px, 0px);"></div></div></div>
                    <div class="overlay_color testimonial"></div>
                </div>
                <div class="content testimonial">
                    <div class="wesley_tm_testimonial_wrap">
                        <div class="container">
                            <div class="carousel_wrap">
                                <ul class="owl-carousel owl-loaded owl-drag">



                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-1460px, 0px, 0px); transition: all 0s ease 0s; width: 5110px;">
                                            <?php foreach ($citacoes as $data) {?>
                                            <div class="owl-item cloned" style="width: 730px;">
                                                <li class="item">
                                                    <div class="inner">
                                                        <div class="quotebox_wrap">
                                                            <i class="xcon-quote-left"></i>
                                                        </div>
                                                        <div class="definitions_wrap">
                                                            <p>“We were looking for a logo with a touch of modernism. Wesley grasped our needs and produced a stunning design.”</p>
                                                        </div>
                                                        <div class="name_holder">
                                                            <p>Calena Gomez, AOC Designer</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                        <?php } ?>
                                        </div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /TESTIMONIALS -->

    <!-- NEWS -->
    <div class="wesley_tm_section" id="news">
        <div class="wesley_tm_news_wrap">
            <div class="container">
                <div class="wesley_tm_main_title_holder news">
                    <h3>Últimas Notícias</h3>
                    <span>Fique por dentro das últimas notícias</span>
                </div>
                <div class="wesley_tm_list_wrap blog_list" data-column="3" data-space="30">
                    <ul class="total">
                        <?php foreach ($noticias as $data) {?>
                        <li class="wow fadeInUp" data-wow-duration="1.2s" style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                            <div class="inner_list">
                                <div class="image_wrap">
                                    <img class="small" src="./SBlaser_files/500x350.jpg" alt="">
                                    <img class="big" src="./SBlaser_files/1170x450.jpg" alt="">
                                    <div class="news_image" data-url="img/blog/1.jpg" style="background-image: url(&quot;img/blog/1.jpg&quot;);"></div>
                                    <a class="link_news" href="http://frenify.com/envato/marketify/html/wesley/1/index.html"></a>
                                </div>
                                <div class="definitions_wrap">
                                    <div class="date_wrap">
                                        <p>January 22, 2018 <a href="http://frenify.com/envato/marketify/html/wesley/1/index.html">Logos</a></p>
                                    </div>
                                    <div class="title_holder">
                                        <h3><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html">How to Create Great Logo for Your Business</a></h3>
                                    </div>
                                    <div class="definition">
                                        <p>If you are reading this, you probably plan to start a small business or a side hustle very soon. And you probably have a couple ...</p>
                                    </div>
                                    <div class="full_def">
                                        <p>If you are reading this, you probably plan to start a small business or a side hustle very soon. And you probably have a couple of questions running through your mind like: Do I really need that logo? Or Yep, I really need one. But how can I get it on a budget? This post was created to help you bring system out of confusion so you can get the best out of your business and enter the market full force. First of all, yes, you do need a logo, and it does not really matter how big or small your business is. Even if you  making a craft soap and sell it to your relatives and friends, you still need a logo. If you plan to monetize an idea, you need a logo for it. Otherwise your work, your efforts, your image and your future brand belong to everyone, like grapes at a grocery store. But most importantly, the final design you come up with should be effective enough to promote your business and get you that place in the sun. Here are a few tips that will make the whole process easier and more fun. The first step to a killer logo is an idea. So start feeding your brain with new impressions and experiences. Use anything that works for you. Try hiking and gain inspiration from nature. Or visit an art gallery. Meditation, photography, action sports In a nutshell, any kind of activity that fills you up with energy and joy may help you get that revolutionary idea. It is always useful to browse the websites (or social media profiles) of your potential rivals to not only judge their logos but to practice analysis. Do you find your competitor logo effective or attractive? Try to think of the ways it helps the rival company to be profitable. Is there something you would change? Why? All of these questions can really help you to improve your own perception of your brand as well as the future marketing strategy. Find out what the strengths and weaknesses of your rivals are and benefit from that knowledge. When it comes to logo design, there are and always will be several safe choices like bold and elegant black and white logos or serif font wordmarks. But if you are striving to get that killer logo, do not be afraid to cross the line and try something rebellious. Go out there and get to know the latest design trends. For example, you may experiment with the bold colors like Ultra Violet, which is the Pantone color of the year, by the way. Or play with the typography and color gradients.</p>
                                    </div>
                                    <div class="wesley_tm_popup_share_wrap">
                                        <ul>
                                            <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#">Facebook</a></li>
                                            <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#">Twitter</a></li>
                                            <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#">Linkedin</a></li>
                                            <li><a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#">Behance</a></li>
                                        </ul>
                                    </div>
                                    <div class="read_more">
                                        <a href="http://frenify.com/envato/marketify/html/wesley/1/index.html#"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /NEWS -->

  <div class="wesley_tm_section" id="contact">
    <div class="wesley_tm_contact_wrap_all">
            <div class="wesley_tm_main_title_holder contact">
                <h3>Contato</h3>
                <span>Qualquer pergunta? entre em contato e eu responderei o mais breve possivel.</span>
            </div>
           
        </div>
        <div class="container">
            <div class="wesley_tm_about_wrap">
                <div class="author_wrap">
                    <div class="leftbox" style="background: #fff; padding: 15px;">
                        <div class="wesley_tm_main_title_holder about">
                            <h3 style="color: orange">Envie sua mensagem</h3>
                        </div>
                            <div class="wesley_tm_contact_wrap">
                <div class="main_input_wrap">
                    <form action="http://frenify.com/" method="post" class="contact_form" id="contact_form">
                        <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                        <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <input id="name" type="text" placeholder="Seu Nome">
                        </div>
                        <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <input id="email" type="text" placeholder="Seu Email">
                        </div>
                        <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.6s; animation-name: fadeIn;">
                            <textarea id="message" placeholder="Sua Mensagem"></textarea>
                        </div>
                        <div class="wesley_tm_button wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.8s; animation-name: fadeIn;">
                            <a id="send_message" href="http://frenify.com/envato/marketify/html/wesley/1/index.html#"><span>Enviar Mensagem</span></a>
                        </div>
                    </form>
                </div>
            </div>
                      
                    </div>
                    <div class="rightbox" style="min-height: 540px">
                        <div class="wesley_tm_main_title_holder about">
                            <h3 style="color: orange">Contatos</h3>
                        </div>
                       
                        <div class="definition">
						<p></p>
						<p></p>
                            <p>sb.laseresaude@gmail.com<p>
                            <p>+55 91 987027815 <img style="width: 33px;" src="https://www.jungnapratica.com.br/wp-content/uploads/2019/05/icon-whatsApp.png" /></p>

                            <p>+55 91 989708375 Agendamento de Consultas</p>

                          
                        </div>
                       
                    </div> 
                    <div class="rightbox" style="min-height: 540px">
                        <div class="wesley_tm_main_title_holder about">
                            <h3 style="color: orange">Facebook</h3>
                        </div>
                       
                        <div class="definition">
					<div class="fb-page" data-href="https://www.facebook.com/sb.laseresaude" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sb.laseresaude" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sb.laseresaude">Sávio Bastos</a></blockquote></div>
                          
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- /CONTACT -->

  