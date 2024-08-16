<template>
    <div style="background-color: #ffffff">
        <div class="color-bar-1"></div>
        <div class="color-bar-2 color-bg"></div>
        
        <div class="container">
    
            <div class="row header">
                <div class="span5 logo">
                    <a href="index.htm"><img src="img/piccolo-logo.png" alt="" /></a>
                    <h5>Big Things... Small Packages</h5>
                </div>

                <div class="span7 navigation">
                    <div class="navbar hidden-phone">
                        <ul class="nav">
                            <li class="dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="index.htm">Home <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.htm">Full Page</a></li>
                                    <li><a href="index-gallery.htm">Gallery Only</a></li>
                                    <li><a href="index-slider.htm">Slider Only</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="features.htm">Features</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Pages <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="page-full-width.htm">Full Width</a></li>
                                    <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                                    <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                                    <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                                    <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                                    <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                                    <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                                    <li><a href="gallery-single.htm">Gallery Single</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-style1.htm">Blog Style 1</a></li>
                                    <li><a href="blog-style2.htm">Blog Style 2</a></li>
                                    <li><a href="blog-style3.htm">Blog Style 3</a></li>
                                    <li><a href="blog-style4.htm">Blog Style 4</a></li>
                                    <li><a href="blog-single.htm">Blog Single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="page-contact.htm">Contact</a>
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
            
            <div class="row headline">
                <div class="span8">
                    <div class="flexslider">
                        <ul class="slides">
                            <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                            <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                            <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                            <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                            <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="span4">
                    <h3>Welcome to Piccolo. <br />
                    A Big Theme in a Small Package.</h3>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium vulputate magna sit amet blandit.</p>
                    <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et tortor. In sit amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices.</p>
                    <a href="#"><i class="icon-plus-sign"></i>Read More</a> 
                </div>
            </div>
            
            <div class="row gallery-row">
                <div class="span12">
                    <h5 class="title-bg">Recent Work 
                        <small>That we are most proud of</small>
                        <button class="btn btn-mini btn-inverse hidden-phone" type="button">View Portfolio</button>
                    </h5>
                
                    <div class="row clearfix no-margin">
                        <ul class="gallery-post-grid holder">
                            <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Custom Illustration</a>For an international ad campaign.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-2" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">3 Color Poster Design</a>For a regional festival event.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-3" data-type="web">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="#" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Ink Pen Illustration</a>Created for a best selling children's book.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-4" data-type="video">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Custom Illustration</a>For an international add campaign.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-5" data-type="web illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Icon Design</a>Classic retro style illustration.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-6" data-type="illustration design">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Animation Cell</a>Creative storyboard illustration</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-7" data-type="design">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Poster Ad Campaign</a>Regional ad for a local company.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-8" data-type="web video">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Magazine Ad</a>For an international add campaign.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-9" data-type="design">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Character Designs</a>For a feature film.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-10" data-type="web design">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Poster and Ad Design</a>For an international add campaign.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-11" data-type="illustration">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Website and Animation</a>For a local business.</span>
                            </li>
                            <li class="span3 gallery-item" data-id="id-12" data-type="illustration video">
                                <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                    <span class="gallery-icons">
                                        <a href="img/gallery/gallery-img-1-full.jpg" class="item-zoom-link lightbox" title="Custom Illustration" data-rel="prettyPhoto"></a>
                                        <a href="gallery-single.htm" class="item-details-link"></a>
                                    </span>
                                </span>
                                <a href="gallery-single.htm"><img src="img/gallery/gallery-img-1-4col.jpg" alt="Gallery"></a>
                                <span class="project-details"><a href="gallery-single.htm">Branding Design</a>For an international add campaign.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="span6">
                    <h5 class="title-bg">From the Blog 
                        <small>All the latest news</small>
                        <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                        <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
                    </h5>

                    <div id="blogCarousel" class="carousel slide ">
                        <div class="carousel-inner">
                            <div class="active item">
                                <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                                <div class="post-info clearfix">
                                    <h4><a href="blog-single.htm">A subject that is beautiful in itself</a></h4>
                                    <ul class="blog-details-preview">
                                        <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015</li>
                                        <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a></li>
                                        <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a></li>
                                        <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a></li>
                                    </ul>
                                </div>
                                <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                            </div>
                            <div class="item">
                                <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                                <div class="post-info clearfix">
                                    <h4><a href="blog-single.htm">A great artist is always before his time</a></h4>
                                    <ul class="blog-details-preview">
                                        <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015</li>
                                        <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a></li>
                                        <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a></li>
                                        <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a></li>
                                    </ul>
                                </div>
                                <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                            </div>
                            <div class="item">
                                <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt="" class="align-left blog-thumb-preview" /></a>
                                <div class="post-info clearfix">
                                    <h4><a href="blog-single.htm">Is art everything to anybody?</a></h4>
                                    <ul class="blog-details-preview">
                                        <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015</li>
                                        <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#" title="Link">Admin</a></li>
                                        <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#" title="Link">12</a></li>
                                        <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a></li>
                                    </ul>
                                </div>
                                <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus tellus, aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a><p>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="span6">
                        <h5 class="title-bg">Recent Clients
                            <small>That love us</small>
                            <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                            <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
                        </h5>

                        <div id="clientCarousel" class="carousel slide no-margin">
                            <div class="carousel-inner">

                                <div class="active item">
                                    <p class="quote-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Client Name, Big Company</cite></p>
                                </div>

                                <div class="item">
                                    <p class="quote-text">"Adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Another Client Name, Company Name</cite></p>
                                </div>

                                <div class="item">
                                    <p class="quote-text">"Mauris eget tellus sem. Cras sollicitudin sem eu elit aliquam quis condimentum nulla suscipit. Nam sed magna ante. Ut eget suscipit mauris."<cite>- On More Client, The Company</cite></p>
                                </div>
                                
                            </div>
                        </div>

                        <ul class="client-logos">
                            <li><a href="#" class="client-link"><img src="img/gallery/client-img-1.png" alt="Client"></a></li>
                            <li><a href="#" class="client-link"><img src="img/gallery/client-img-2.png" alt="Client"></a></li>
                            <li><a href="#" class="client-link"><img src="img/gallery/client-img-3.png" alt="Client"></a></li>
                            <li><a href="#" class="client-link"><img src="img/gallery/client-img-4.png" alt="Client"></a></li>
                            <li><a href="#" class="client-link"><img src="img/gallery/client-img-5.png" alt="Client"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
            
        </div>
        

    </div>
</template>

