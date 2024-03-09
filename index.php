<?php
/**
 * Plugin Name: Practise plugin
 * Author: Rupom
 * Description: This is a practise plugin
 * Version: 1.0
 */
function prtc_word_count($content){
    $remove_tags = strip_tags($content);
    $word_count = str_word_count($content);
    $label = "Total word is";
    $content .= sprintf("<h2> %s : %s </h2>",$label,$word_count);
    return $content;
}
 add_filter( "the_content", "prtc_word_count");
 function prtc_word_count_minute($content){
    $remove_tags = strip_tags($content);
    $word_count = str_word_count($content);
    $minute_count = ($word_count / 200);
    $label = "Total minute is";
    $content .= sprintf("<h2> %s : %s </h2>",$label,$minute_count);
    return $content;
 }
 add_filter( "the_content", "prtc_word_count_minute");
 
?>