<template>
    <div style="background-color: #ffffff">
        <div class="color-bar-1"></div>
        <div class="color-bar-2 color-bg"></div>
        
        <div class="container">
            <div class="row header">
                <div class="span5 logo">
                    <img src="img/logo-1.png" alt="" />
                    <h5>Digital Assets Management System</h5>
                </div>
                <div class="span7 navigation">
                    <div class="navbar hidden-phone">
                        <ul class="nav">
                            <li class="">
                                <a>
                                    <router-link to="/home">
                                        Home
                                    </router-link>
                                </a>
                            </li>
                            <li class="">
                                <a>
                                    <router-link to="/events">
                                        Events
                                    </router-link>
                                </a>
                            </li>
                            <li class="">
                                <a>
                                    <router-link to="/photos">
                                        Photos
                                    </router-link>
                                </a>
                            </li>
                            <li class="">
                                <a>
                                    <router-link to="/videos">
                                        Coverages
                                    </router-link>
                                </a>
                            </li>
                            <li class="">
                                <a>
                                    <router-link to="/">
                                        Contact
                                    </router-link>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form action="#" id="mobile-nav" class="visible-phone">
                        <div class="mobile-nav-select">
                            <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                                <option value="">Navigate...</option>
                                <option value="index.htm">Home</option>
                                    <option value="index.htm">- Full Page</option>
                                    <option value="index-gallery.htm">- Gallery Only</option>
                                    <option value="index-slider.htm">- Slider Only</option>
                                <option value="features.htm">Features</option>
                                <option value="page-full-width.htm">Pages</option>
                                    <option value="page-full-width.htm">- Full Width</option>
                                    <option value="page-right-sidebar.htm">- Right Sidebar</option>
                                    <option value="page-left-sidebar.htm">- Left Sidebar</option>
                                    <option value="page-double-sidebar.htm">- Double Sidebar</option>
                                <option value="gallery-4col.htm">Gallery</option>
                                    <option value="gallery-3col.htm">- 3 Column</option>
                                    <option value="gallery-4col.htm">- 4 Column</option>
                                    <option value="gallery-6col.htm">- 6 Column</option>
                                    <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                                    <option value="gallery-single.htm">- Gallery Single</option>
                                <option value="blog-style1.htm">Blog</option>
                                    <option value="blog-style1.htm">- Blog Style 1</option>
                                    <option value="blog-style2.htm">- Blog Style 2</option>
                                    <option value="blog-style3.htm">- Blog Style 3</option>
                                    <option value="blog-style4.htm">- Blog Style 4</option>
                                    <option value="blog-single.htm">- Blog Single</option>
                                <option value="page-contact.htm">Contact</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="row">

            <!-- Blog Posts
            ================================================== --> 
            <div class="span8 blog">

                <!-- Blog Post 1 -->
                <article>
                    <h3 class="title-bg"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
                    <div class="post-content">
                        <a href="#"><img src="img/dummy/1.jpg" alt="Post Thumb"></a>

                        <div class="post-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                        </div>

                        <div class="post-summary-footer">
                            <ul class="post-data">
                                <li><i class="icon-calendar"></i> August 24, 2023</li>
                                <li><i class="icon-user"></i> <a href="#">Category</a></li>
                                <li><i class="icon-tags"></i> <a href="#">#photoshop</a>, <a href="#">#tutorials</a>, <a href="#">#illustration</a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <h5 class="title-bg"> More Photos</h5>

                <div class="row">
                    <div class="span2">
                        <img src="img/dummy/1.jpg" alt="Image" class="thumbnail">
                    </div>
                    <div class="span2">
                        <img src="img/dummy/2.jpg" alt="Image" class="thumbnail">
                    </div>
                    <div class="span2">
                        <img src="img/dummy/3.jpg" alt="Image" class="thumbnail">
                    </div>
                    <div class="span2">
                        <img src="img/dummy/4.jpg" alt="Image" class="thumbnail">
                    </div>
                    <div class="span2">
                        <img src="img/dummy/5.jpg" alt="Image" class="thumbnail">
                    </div>
                    <div class="span2">
                        <img src="img/dummy/6.jpg" alt="Image" class="thumbnail">
                    </div>
                    <div class="span2">
                        <img src="img/dummy/7.jpg" alt="Image" class="thumbnail">
                    </div>
                    <div class="span2">
                        <img src="img/dummy/8.jpg" alt="Image" class="thumbnail">
                    </div>
                </div>
            </div>

            <!-- Blog Sidebar
            ================================================== --> 
            <div class="span4 sidebar">

                <!--Search-->
                <section>
                    <div class="input-append">
                        <form action="#">
                            <input id="appendedInputButton" size="16" type="text" placeholder="Search"><button class="btn" type="button"><i class="icon-search"></i></button>
                        </form>
                    </div>
                </section>


                <!--Categories-->
                <h5 class="title-bg">Categories</h5>
                <ul class="post-category-list">
                    <li><a href="#"><i class="icon-plus-sign"></i>Anniversaries</a></li>
                    <li><a href="#"><i class="icon-plus-sign"></i>Awarding Ceremonies</a></li>
                    <li><a href="#"><i class="icon-plus-sign"></i>Competition/ Contests</a></li>
                    <li><a href="#"><i class="icon-plus-sign"></i>Exhibits</a></li>
                    <li><a href="#"><i class="icon-plus-sign"></i>Lectures, Discussion, Seminar, Training</a></li>
                    <li><a href="#"><i class="icon-plus-sign"></i>NYSTIF</a></li>
                    <li><a href="#"><i class="icon-plus-sign"></i>Program Launch</a></li>
                    <li><a href="#"><i class="icon-plus-sign"></i>RSTW</a></li>
                </ul>
            </div>

    </div>
            
        </div>
        

    </div>
</template>

