<?php 
    if(have_posts()):
        while(have_posts()): the_post();
?>
                    <div class="col-xl-6">
                            <div class="single-smblog mb-30">
                            
                                <div class="smblog-thum">
                                    <div class="blog-image w-img">
                                        <a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
                                    </div>
                                    <div class="blog-tag blog-tag-2">
                                        <a href="<?php the_permalink()?>"><?php //the_category()?></a>
                                    </div>
                                </div>
                                <div class="smblog-content smblog-content-3">
                                    <h6><a href="<?php the_permalink()?>"><?php the_title()?></a></a></h6>
                                    <span class="author mb-10">posted by <a href="#"><?php the_author()?></a></span>
                                    <p>It is accompanied by a case that can contain up to three different diffusers and can be used for dry storage of loose tea. The perfect way to enjoy brewing tea on fruit to...</p>
                                    <div class="smblog-foot pt-15">
                                        <div class="post-readmore">
                                            <a href="<?php the_permalink()?></a>"> Read More <span class="icon"></span></a>
                                        </div>
                                        <div class="post-date">
                                            <a href="<?php the_permalink()?>"><?php the_time('F j,Y')?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        

<?php 
    endwhile;
    endif;
?>