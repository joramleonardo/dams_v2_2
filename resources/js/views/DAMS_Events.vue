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
                            <li class="active">
                                <a>
                                    <router-link to="/events" style="color: #fff !important;">
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
        <div class="span9 blog">

            <div class="row clearfix">
                <ul class="gallery-post-grid holder">

                    <!-- Gallery Item -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/dummy/1.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a   class="item-details-link"></a>
                            </span>
                        </span>
                        <a  ><img src="img/dummy/1.jpg" alt="Gallery"></a>
                        <span class="project-details"><a  >Lorem ipsum dolor sit amet</a>
                            Nam sed odio quis justo tristique porta. Phasellus sagittis at lacus at lobortis
                            <br>
                            <button class="btn btn-mini btn-inverse" type="button">
                               <router-link to="/post-details" style="color: #fff !important;">
                                    View
                                </router-link>
                            </button>
                        </span>
                        
                    </li>

                    <!-- Gallery Item -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/dummy/2.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a   class="item-details-link"></a>
                            </span>
                        </span>
                        <a  ><img src="img/dummy/2.jpg" alt="Gallery"></a>
                        <span class="project-details"><a  >Lorem ipsum dolor sit amet</a>
                            Nam sed odio quis justo tristique porta. Phasellus sagittis at lacus at lobortis
                            <br>
                            <button class="btn btn-mini btn-inverse" type="button">
                               <router-link to="/events" style="color: #fff !important;">
                                    View
                                </router-link>
                            </button>
                        </span>
                    </li>

                    <!-- Gallery Item -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/dummy/3.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a   class="item-details-link"></a>
                            </span>
                        </span>
                        <a  ><img src="img/dummy/3.jpg" alt="Gallery"></a>
                        <span class="project-details"><a  >Lorem ipsum dolor sit amet</a>
                            Nam sed odio quis justo tristique porta. Phasellus sagittis at lacus at lobortis
                            <br>
                            <button class="btn btn-mini btn-inverse" type="button">
                               <router-link to="/events" style="color: #fff !important;">
                                    View
                                </router-link>
                            </button>
                        </span>
                    </li>

                    <!-- Gallery Item -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/dummy/4.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a   class="item-details-link"></a>
                            </span>
                        </span>
                        <a  ><img src="img/dummy/4.jpg" alt="Gallery"></a>
                        <span class="project-details"><a  >Lorem ipsum dolor sit amet</a>
                            Nam sed odio quis justo tristique porta. Phasellus sagittis at lacus at lobortis
                            <br>
                            <button class="btn btn-mini btn-inverse" type="button">
                               <router-link to="/events" style="color: #fff !important;">
                                    View
                                </router-link>
                            </button>
                        </span>
                    </li>

                    <!-- Gallery Item -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/dummy/5.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a   class="item-details-link"></a>
                            </span>
                        </span>
                        <a  ><img src="img/dummy/5.jpg" alt="Gallery"></a>
                        <span class="project-details"><a  >Lorem ipsum dolor sit amet</a>
                            Nam sed odio quis justo tristique porta. Phasellus sagittis at lacus at lobortis
                            <br>
                            <button class="btn btn-mini btn-inverse" type="button">
                               <router-link to="/events" style="color: #fff !important;">
                                    View
                                </router-link>
                            </button>
                        </span>
                    </li>

                    <!-- Gallery Item -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/dummy/6.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a   class="item-details-link"></a>
                            </span>
                        </span>
                        <a  ><img src="img/dummy/6.jpg" alt="Gallery"></a>
                        <span class="project-details"><a  >Lorem ipsum dolor sit amet</a>
                            Nam sed odio quis justo tristique porta. Phasellus sagittis at lacus at lobortis
                            <br>
                            <button class="btn btn-mini btn-inverse" type="button">
                               <router-link to="/events" style="color: #fff !important;">
                                    View
                                </router-link>
                            </button>
                        </span>
                    </li>

                    <!-- Gallery Item -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/dummy/7.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a   class="item-details-link"></a>
                            </span>
                        </span>
                        <a  ><img src="img/dummy/7.jpg" alt="Gallery"></a>
                        <span class="project-details"><a  >Lorem ipsum dolor sit amet</a>
                            Nam sed odio quis justo tristique porta. Phasellus sagittis at lacus at lobortis
                            <br>
                            <button class="btn btn-mini btn-inverse" type="button">
                               <router-link to="/events" style="color: #fff !important;">
                                    View
                                </router-link>
                            </button>
                        </span>
                    </li>

                    <!-- Gallery Item -->
                    <li  class="span4 gallery-item" data-id="id-1" data-type="illustration">
                        <span class="gallery-hover-3col hidden-phone hidden-tablet">
                            <span class="gallery-icons">
                                <a href="img/dummy/8.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                <a   class="item-details-link"></a>
                            </span>
                        </span>
                        <a  ><img src="img/dummy/8.jpg" alt="Gallery"></a>
                        <span class="project-details"><a  >Lorem ipsum dolor sit amet</a>
                            Nam sed odio quis justo tristique porta. Phasellus sagittis at lacus at lobortis
                            <br>
                            <button class="btn btn-mini btn-inverse" type="button">
                               <router-link to="/events" style="color: #fff !important;">
                                    View
                                </router-link>
                            </button>
                        </span>
                    </li>

                </ul>
            </div>

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
        <div class="span3 sidebar">

            <!--Search-->
            <section>
                <div class="input-append">
                    <form action="#">
                        <input id="appendedInputButton" size="16" type="text" placeholder="Search"><button class="btn" type="button"><i class="icon-search" ></i></button>
                    </form>
                </div>
            </section>

            <!--Categories-->
            <h5 class="title-bg">Categories</h5>
            <ul class="post-category-list">
                <li><a href="#"><i class="icon-plus-sign"></i>Assistant Secretaries</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Deputy Directors</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Directors</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Executive Director</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Group photo</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Launch/ Events/Activities</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>MOA/MOU signing</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Participants</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Portraits</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Regional Directors</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Undersecretaries</a></li>
            </ul>


        </div>

    </div>
            
        </div>
        

    </div>
</template>

