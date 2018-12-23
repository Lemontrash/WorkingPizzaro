@extends('layout')
@section('body') <body class="blog full-width"> @endsection
@section('content')
    <div id="content" class="site-content" tabindex="-1" >
        <div class="col-full">
            <div class="pizzaro-breadcrumb">
                <nav class="woocommerce-breadcrumb" >
                    <a href="{{route('blog')}}">Home</a>
                    <span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Page 1
                </nav>
            </div>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <article id="post-359" class="post-359 post type-post status-publish format-image has-post-thumbnail sticky hentry category-technology tag-event tag-festival tag-music tag-woocommerce post_format-post-format-image">
                        <header class="entry-header">
                            <div class="media-attachment">
                                <div class="post-thumbnail">
                                    <a href="{{route('blog')}}">
                                        <img width="1619" height="827" src="assets/images/blog/blog-1.jpg" class="attachment-full size-full wp-post-image" alt="" />
                                    </a>
                                </div>
                            </div>
                            <h1 class="alpha entry-title">
                                <a href="{{route('blog')}}" rel="bookmark">Pizza Festival – Reopen</a>
                            </h1>
                            <div class="entry-meta">
                                <div class="cat-links">
                                    <a href="#" rel="category tag">Technology</a>
                                </div>
                                <span class="posted-on">
                              <a href="{{route('blog')}}" rel="bookmark">
                              <time class="entry-date published" datetime="2016-10-13T14:53:25+00:00">October 13, 2016</time>
                              <time class="updated" datetime="2016-10-14T06:48:31+00:00">October 14, 2016</time>
                              </a>
                              </span>
                                <div class="author">
                                    <div class="label">Posted by:</div>
                                    <a href="#" title="Posts by farook" rel="author">farook</a>
                                </div>
                            </div>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                            <div class="post-readmore">
                                <a href="{{route('blog')}}" class="read-more-text">Read More</a>
                            </div>
                            <span class="comments-link">
                           <a href="#">Leave a comment</a>
                           </span>
                        </div>
                    </article>
                    <!-- #post-## -->
                    <div class="blog-menu">
                        <div class="container">
                            <span class="menu-item"><a href="{{route('blog')}}" >Design</a></span>
                            <span class="menu-item"><a href="{{route('blog')}}" >Links &amp; Quotes</a></span>
                            <span class="menu-item"><a href="{{route('blog')}}" >Music</a></span>
                            <span class="menu-item"><a href="{{route('blog')}}" >News</a></span>
                            <span class="menu-item"><a href="{{route('blog')}}" >Social</a></span>
                            <span class="menu-item"><a href="{{route('blog')}}" >Technology</a></span>
                            <span class="menu-item"><a href="{{route('blog')}}" >Uncategorized</a></span>
                            <span class="menu-item"><a href="{{route('blog')}}" >Videos</a></span>
                        </div>
                    </div>
                    <div class="posts">
                        <article id="post-356" class="post-356 post type-post status-publish format-audio hentry category-design category-music category-social tag-audio tag-awsome tag-buy-it tag-music  post_format-post-format-audio">
                            <header class="entry-header">
                                <div class="media-attachment">
                                    <iframe style="height=:165px; width:100%;" width="870" height="165" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229791977&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
                                </div>
                                <h1 class="alpha entry-title">
                                    <a href="{{route('blog')}}" rel="bookmark">Music for Dinner &#8211; Audio Player</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="{{route('blog')}}" rel="category tag">Design</a>,
                                        <a href="{{route('blog')}}" rel="category tag">Music</a>,
                                        <a href="{{route('blog')}}" rel="category tag">Social</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="{{route('blog')}}" rel="bookmark">
                                 <time class="entry-date published" datetime="2016-10-13T14:47:34+00:00">October 13, 2016</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Posted by:</div>
                                        <a href="{{route('blog')}}" title="Posts by farook" rel="author">farook</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                                <div class="post-readmore">
                                    <a href="{{route('blog')}}" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link"><a href="#">Leave a comment</a></span>
                            </div>
                        </article>
                        <!-- #post-## -->
                        <article id="post-354" class="post-354 post type-post status-publish format-video hentry category-videos tag-awsome tag-buy-it  tag-video tag-wordpress post_format-post-format-video">
                            <header class="entry-header">
                                <div class="media-attachment">
                                    <div class="video-container">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe src="https://player.vimeo.com/video/244136862" width="870" height="490" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="alpha entry-title">
                                    <a href="{{route('blog')}}" rel="bookmark">This is how we Baking our Pizza &#8211; Video Post</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="{{route('blog')}}" rel="category tag">Videos</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="{{route('blog')}}" rel="bookmark">
                                 <time class="entry-date published updated" datetime="2016-10-13T14:44:11+00:00">October 13, 2016</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Posted by:</div>
                                        <a href="{{route('blog')}}" title="Posts by farook" rel="author">farook</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>
                                <div class="post-readmore">
                                    <a href="{{route('blog')}}" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link">
                              <a href="#">Leave a comment</a>
                              </span>
                            </div>
                        </article>
                        <!-- #post-## -->
                        <article id="post-343" class="post-343 post type-post status-publish format-quote hentry category-links-quotes category-uncategorized tag-awsome tag-bootstrap tag-clean-design tag-woocommerce tag-wordpress post_format-post-format-quote">
                            <h1 style="display:none;">test</h1>
                            <div class="entry-content">
                                <blockquote>
                                    <p>Quisque a commodo lectus. Nunc vel dolor sed libero venenatis egestas. Cras non volutpat enim. Cras molestie purus id lorem sodales, in facilisis erat tristique. Aliquam luctus orci aliquet augue eleifend.</p>
                                    <cite> Steve Kowalsky</cite>
                                </blockquote>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-## -->
                        <article id="post-340" class="post-340 post type-post status-publish format-link hentry category-links-quotes category-news category-social tag-awsome tag-bootstrap tag-buy-it tag-clean-design  tag-woocommerce tag-wordpress post_format-post-format-link">
                            <h1 style="display:none;">test</h1>
                            <div class="entry-content">
                                <p>If you are looking for a developer on ThemeForest &#8211; check out the link</p>
                                <p>
                                    <a href="http://www.transvelo.com" target="_blank">
                                        <span>http://www.transvelo.com</span>
                                    </a>
                                </p>
                            </div>
                            <!-- .entry-content -->
                        </article>
                        <!-- #post-## -->
                        <article id="post-255" class="post-255 post type-post status-publish format-standard hentry category-uncategorized">
                            <header class="entry-header">
                                <h1 class="alpha entry-title">
                                    <a href="{{route('blog')}}" rel="bookmark">Iced Caramel Latte</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="{{route('blog')}}" rel="category tag">Uncategorized</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="{{route('blog')}}" rel="bookmark">
                                 <time class="entry-date published updated" datetime="2016-10-04T13:53:51+00:00">October 4, 2016</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Posted by:</div>
                                        <a href="#" title="Posts by farook" rel="author">farook</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>Quisque pretium turpis non tempus cursus. Nulla consequat, mi nec pellentesque imperdiet, mi quam congue magna, tristique commodo.</p>
                                <div class="post-readmore">
                                    <a href="{{route('blog')}}" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link">
                              <a href="#">Leave a comment</a>
                              </span>
                            </div>
                        </article>
                        <!-- #post-## -->
                        <article id="post-251" class="post-251 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
                            <header class="entry-header">
                                <div class="media-attachment">
                                    <div class="post-thumbnail">
                                        <a href="{{route('blog')}}">
                                            <img width="1619" height="827" src="assets/images/blog/blog-2.jpg" class="attachment-full size-full wp-post-image" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <h1 class="alpha entry-title">
                                    <a href="{{route('blog')}}" rel="bookmark">5th International Pizza Festival with New Better Competitors from All over the World.</a>
                                </h1>
                                <div class="entry-meta">
                                    <div class="cat-links">
                                        <a href="{{route('blog')}}" rel="category tag">Uncategorized</a>
                                    </div>
                                    <span class="posted-on">
                                 <a href="{{route('blog')}}" rel="bookmark">
                                 <time class="entry-date published" datetime="2016-10-04T13:49:25+00:00">October 4, 2016</time>
                                 </a>
                                 </span>
                                    <div class="author">
                                        <div class="label">Posted by:</div>
                                        <a href="#" title="Posts by farook" rel="author">farook</a>
                                    </div>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <p>Although the legendary Double Burger really needs no introduction, please allow us....</p>
                                <div class="post-readmore">
                                    <a href="{{route('blog')}}" class="read-more-text">Read More</a>
                                </div>
                                <span class="comments-link">
                              <a href="{{route('blog')}}">Leave a comment</a>
                              </span>
                            </div>
                        </article>
                        <!-- #post-## -->
                    </div>
                    <!-- /.posts -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .col-full -->
    </div>
    <!-- #content -->
    <div class="footer-v1-static-content">
        <div class="kc-css-994088 kc_row">
            <div class="kc-row-container  kc-container">
                <div class="kc-wrap-columns">
                    <div class="kc-css-194963 kc_col-sm-12 kc_column kc_col-sm-12">
                        <div class="stretch-full-width kc-col-container">
                            <div class="kc-css-126640 kc_shortcode kc_wrap_instagram  kc_ins_col_6">
                                <ul class="row">
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gyf2hTkr/" target="_blank"><img alt="" src="assets/images/footer/1.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4Gtf1BCmM/" target="_blank"><img alt="" src="assets/images/footer/2.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GnvhBqNt/" target="_blank"><img alt="" src="assets/images/footer/3.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4GhsuhQE4/" target="_blank"><img alt="" src="assets/images/footer/4.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F_ZbBuxI/" target="_blank"><img alt="" src="assets/images/footer/5.jpg"></a></li>
                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><a href="https://www.instagram.com/p/BO4F8fLhgkp/" target="_blank"><img alt="" src="assets/images/footer/6.jpg"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
