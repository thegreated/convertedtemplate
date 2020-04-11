<?php 
 if( have_posts() ): while( have_posts() ) : the_post(); ?>
<div class="song-item">
    <?php
    $file_arr = get_field('song_file');
    $file_url = $file_arr['url'];
    // $image = get_field('featured', $category->taxonomy . '_' . $category->term_id );
    $category_detail=get_the_terms(get_the_ID(),'artist');
    //print_r($category_detail);
    // echo get_the_ID();
    $image = get_field('photo', 'artist' . '_' . $category_detail[0]->term_id);
    //$categorys =  get_category_link($category->term_id);
    // print_r($image);

    ?>

    <div class="row">
        <div class="col-lg-4">
            <div class="song-info-box">
                <img src="<?php echo $image['url']?>" alt="">
                <div class="song-info">
               <a href="<?php the_permalink(); ?>">  <h4><?=$category_detail[0]->name ?></h4></a>  
                    <p><?php the_title(); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
    <?php //echo  $filedir ; ?>
            <div class="single_player_container">
                <div class="single_player">
                    <div class="jp-jplayer jplayer" data-ancestor=".jp_container_<?=$file_arr['id']?>" data-url="<?=$file_url;?>" id="jp_jplayer_0" style="width: 0px; height: 0px;">
                        <img id="jp_poster_0" style="width: 0px; height: 0px; display: none;">
                        <audio id="jp_audio_0" preload="metadata" src="<?php $file_url?>"></audio>
                    </div>
                    <div class="jp-audio jp_container_<?=$file_arr['id']?>" role="application" aria-label="media player">
                        <div class="jp-gui jp-interface">

                            <!-- Player Controls -->
                            <div class="player_controls_box">
                                <button class="jp-prev player_button" tabindex="0"></button>
                                <button class="jp-play player_button" tabindex="0"></button>
                                <button class="jp-next player_button" tabindex="0"></button>
                                <button class="jp-stop player_button" tabindex="0"></button>
                            </div>
                            <!-- Progress Bar -->
                            <div class="player_bars">
                                <div class="jp-progress">
                                    <div class="jp-seek-bar" style="width: 100%;">
                                        <div>
                                            <div class="jp-play-bar" style="width: 0%;"><div class="jp-current-time" role="timer" aria-label="time">00:00</div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jp-duration ml-auto" role="timer" aria-label="duration">01:30</div>
                            </div>
                        </div>
                        <div class="jp-no-solution" style="display: none;">
                            <span>Update Required</span>
                            To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="songs-links">
                <a href=""><img src="img/icons/p-1.png" alt=""></a>
                <a href=""><img src="img/icons/p-2.png" alt=""></a>
                <a href=""><img src="img/icons/p-3.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<?php endwhile; else:?>

<h3 class="text-center"> No data to show </h3>

<?php endif; ?>