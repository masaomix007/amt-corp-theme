<?php
/**
 * Template Name: WORKS (リダイレクト用)
 */

// /works/ にアクセスが来たら、/works/website/ へ転送する
wp_safe_redirect( home_url('/works/website/') );
exit;
?>