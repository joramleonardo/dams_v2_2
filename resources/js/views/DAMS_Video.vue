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
                            <li class="active">
                                <a>
                                    <router-link to="/videos" style="color: #fff !important;">
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

                <!-- Blog Post -->
                <article>
                    <h3 class="title-bg"><a  >Lorem ipsum dolor sit amet</a></h3>
                    <div class="post-summary">
                        <a  >
                            <iframe width="770" height="400" src="https://www.youtube.com/embed/GS1lzNOmuOc" title="&quot;Rambak ti Siyensya,&quot;DOST Sec. Renato U. Solidum, Jr. delivers a message 2023 DOST-RSTW Region 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                        <div class="post-summary-footer">
                            <ul class="post-data">
                                <li><i class="icon-calendar"></i> August 24, 2023</li>
                                <li><i class="icon-user"></i> <a href="#">Category</a></li>
                                <li><i class="icon-tags"></i> <a href="#">#photoshop</a>, <a href="#">#tutorials</a>, <a href="#">#illustration</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <!-- Blog Post -->
                <article>
                    <h3 class="title-bg"><a  >Lorem ipsum dolor sit amet</a></h3>
                    <div class="post-summary">
                        <a  >
                            <iframe width="770" height="400" src="https://www.youtube.com/embed/cxS2rP8Jffg" title="STARBOOKS Stronger than Ever @13th" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                        <div class="post-summary-footer">
                            <ul class="post-data">
                                <li><i class="icon-calendar"></i> August 24, 2023</li>
                                <li><i class="icon-user"></i> <a href="#">Category</a></li>
                                <li><i class="icon-tags"></i> <a href="#">#photoshop</a>, <a href="#">#tutorials</a>, <a href="#">#illustration</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <!-- Blog Post -->
                <article>
                    <h3 class="title-bg"><a  >Lorem ipsum dolor sit amet</a></h3>
                    <div class="post-summary">
                        <a  >
                            <iframe width="770" height="400" src="https://www.youtube.com/embed/9DQTeORqvzk" title="Mind the GaP (Gender and Poverty) Forum" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                        <div class="post-summary-footer">
                            <ul class="post-data">
                                <li><i class="icon-calendar"></i> August 24, 2023</li>
                                <li><i class="icon-user"></i> <a href="#">Category</a></li>
                                <li><i class="icon-tags"></i> <a href="#">#photoshop</a>, <a href="#">#tutorials</a>, <a href="#">#illustration</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <!-- Blog Post -->
                <article>
                    <h3 class="title-bg"><a  >Lorem ipsum dolor sit amet</a></h3>
                    <div class="post-summary">
                        <a  >
                            <iframe width="770" height="400" src="https://www.youtube.com/embed/0_0n40UGl88" title="2024Textile Convention KatHABI Fashion Show" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                        <div class="post-summary-footer">
                            <ul class="post-data">
                                <li><i class="icon-calendar"></i> August 24, 2023</li>
                                <li><i class="icon-user"></i> <a href="#">Category</a></li>
                                <li><i class="icon-tags"></i> <a href="#">#photoshop</a>, <a href="#">#tutorials</a>, <a href="#">#illustration</a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <!-- Pagination -->
                <div class="pagination">
                    <ul>
                    <li class="active"><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                    </ul>
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

                <!--Video Widget-->
                <h5 class="title-bg">Featured Coverage</h5>
                <iframe width="370" height="208" src="https://www.youtube.com/embed/nh697XT6DcY" title="Science Journo Ako goes to Davao Region" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

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

