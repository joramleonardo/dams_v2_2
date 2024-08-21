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
            
            <!-- Page Content
            ================================================== --> 
            <div class="row">

                <!-- Gallery Items
                ================================================== --> 
                <div class="span12 gallery-single">

                    <div class="row">
                        <div class="span6">
                            <img src="img/dummy/1.jpg" class="align-left thumbnail" alt="image">
                        </div>
                        <div class="span6">
                            <h2>Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                            <ul class="project-info">
                                <li><h6>Category:</h6> Secretary</li>
                                <li><h6>Date Taken:</h6> August 23, 2024</li>
                                <li><h6>Photographer:</h6> Jane Doe</li>
                                <li><h6>Tags:</h6> Design, Illustration</li>
                            </ul>

                            <button class="btn btn-inverse pull-left" type="button">
                                <router-link to="/photos"  style="color: white !important">
                                    Back to Gallery
                                </router-link>
                            </button>
                        </div>
                    </div>

                </div><!-- End gallery-single-->

            </div>
            
        </div>
        

    </div>
</template>

