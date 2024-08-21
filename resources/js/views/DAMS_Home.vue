<template>
    <div style="background-color: #ffffff">
        <div class="color-bar-1"></div>
        <div class="color-bar-2 color-bg"></div>
        
        <div class="main-banner">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                <div class="header-text">
                    <h2><em>Digital Assets</em> Management System </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id molestie lorem. Ut massa est, ornare et tristique a, fringilla quis purus. Vivamus elit ligula, accumsan vitae venenatis sed, fringilla at nisi.</p>
                    <div class="s131">
                        <form>
                            <div class="inner-form">
                            <div class="input-field first-wrap">
                                <input id="search" type="text" placeholder="What are you looking for?" />
                            </div>
                            <div class="input-field second-wrap">
                                <div class="input-select">
                                    <b-form-select v-model="selected" :options="options"></b-form-select>
                                </div>
                            </div>
                            <div class="input-field third-wrap">
                                <button class="btn-search" type="button">
                                        <router-link to="/search-result" style="color: #fff !important;">
                                            Search
                                        </router-link>
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>    
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="row header">
                <div class="span5 logo">
                    <img src="img/logo-1.png" alt="" />
                    <h5>Digital Assets Management System</h5>
                </div>
                <div class="span7 navigation">
                    <div class="navbar hidden-phone">
                        <ul class="nav">
                            <li class="active">
                                <a>
                                    <router-link to="/home" style="color: #fff !important;">
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
                            <!-- <li>
                                
                                <form action="#">
                                    <input id="appendedInputButton" type="text" placeholder="Search">
                                </form>
                            </li> -->
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

            
            
            <div class="row headline">
                <div class="span12">
                    <h5 class="title-bg">Featured Event
                        <button class="btn btn-mini btn-inverse hidden-phone" type="button">
                            <router-link to="/events" style="color: #fff !important;">
                                Browse More
                            </router-link>
                        </button>
                    </h5>
                </div>
                <div class="span8">
                    <div class="flexslider">
                        <ul class="slides">
                            <li><a href=""><img src="img/dummy/31.jpg" alt="slider" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    <p class="lead">Nulla vitae risus aliquam, tincidunt ipsum suscipit, molestie purus. Nulla facilisi. 
                        Pellentesque dictum ante a rhoncus vulputate. Sed ac nunc a mauris venenatis placerat ac ultrices lectus.</p>
                    <a>
                        <router-link to="/post-details">
                            Read More
                        </router-link>
                        
                    </a> 
                </div>
            </div>

            <div class="row">
                <div class="span6">
                    <h5 class="title-bg">Featured Coverage
                        <button class="btn btn-mini btn-inverse hidden-phone" type="button">
                            <router-link to="/videos" style="color: #fff !important;">
                                Browse More
                            </router-link>
                        </button>
                    </h5>
                    <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <iframe width="570" height="350" src="https://www.youtube.com/embed/cxS2rP8Jffg" title="STARBOOKS Stronger than Ever @13th" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </li>
                    </ul>
                    </div>
                </div>

        <!-- Thumbnail Grid
        ================================================== -->
                <div class="span6">
                    <h5 class="title-bg">Featured Photos
                        <button class="btn btn-mini btn-inverse hidden-phone" type="button">
                            <router-link to="/photos" style="color: #fff !important;">
                                Browse More
                            </router-link>
                        </button>
                    </h5>

                    <ul class="thumbnails">
                        <li class="span3">
                            <router-link to="/single-photo">
                                <img src="img/dummy/1.jpg" alt="Post Thumb" class="thumbnail" >
                            </router-link>
                        </li>
                        <li class="span3"><img src="img/dummy/2.jpg" alt="Thumbnail" class="thumbnail" /></li>
                        <li class="span3"><img src="img/dummy/3.jpg" alt="Thumbnail" class="thumbnail" /></li>
                        <li class="span3"><img src="img/dummy/4.jpg" alt="Thumbnail" class="thumbnail" /></li>
                    </ul>

                </div>

            </div>
            
            <div class="row gallery-row">
                <div class="span12">
                    <h5 class="title-bg">Recent Events
                        <button class="btn btn-mini btn-inverse hidden-phone" type="button">
                            <router-link to="/events" style="color: #fff !important;">
                                Browse More
                            </router-link>
                        </button>
                    </h5>
                
                    <div class="row clearfix no-margin">
                        <ul class="gallery-post-grid holder">
                            <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/dummy/28.png" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                    </span>
                                </span>
                                <a  ><img src="img/dummy/28.png" alt="Gallery"></a>
                                <span class="project-details">
                                    <a  >Lorem ipsum dolor sit amet</a>
                                    Nulla vitae risus aliquam, tincidunt ipsum suscipit, molestie purus. Nulla facilisi... 
                                    <router-link to="/post-details">
                                        Read More
                                    </router-link>
                                </span>
                            </li>
                            <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/dummy/27.png" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                    </span>
                                </span>
                                <a  ><img src="img/dummy/27.png" alt="Gallery"></a>
                                <span class="project-details">
                                    <a  >Lorem ipsum dolor sit amet</a>
                                    Nulla vitae risus aliquam, tincidunt ipsum suscipit, molestie purus. Nulla facilisi... 
                                    <router-link to="/post-details">
                                        Read More
                                    </router-link>
                                </span>
                            </li>
                            <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/dummy/33.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                    </span>
                                </span>
                                <a  ><img src="img/dummy/33.jpg" alt="Gallery"></a>
                                <span class="project-details">
                                    <a  >Lorem ipsum dolor sit amet</a>
                                    Nulla vitae risus aliquam, tincidunt ipsum suscipit, molestie purus. Nulla facilisi... 
                                    <router-link to="/post-details">
                                        Read More
                                    </router-link>
                                </span>
                            </li>
                            <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/dummy/24.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                    </span>
                                </span>
                                <a  ><img src="img/dummy/24.jpg" alt="Gallery"></a>
                                <span class="project-details">
                                    <a  >Lorem ipsum dolor sit amet</a>
                                    Nulla vitae risus aliquam, tincidunt ipsum suscipit, molestie purus. Nulla facilisi... 
                                    <router-link to="/post-details">
                                        Read More
                                    </router-link>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        

    </div>
</template>

<script>
    export default {
        data() {
            return {
            selected: null,
            options: [
                { value: null, text: 'Select Type' },
                { value: 'a', text: 'Events' },
                { value: 'b', text: 'Coverages' },
            ]
            }
        }
    }
</script>