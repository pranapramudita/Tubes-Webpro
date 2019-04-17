<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- title, icon, etc.-->
        <title>Genius | Song Lyrics &amp; Knowledge</title>
        <link rel="shortcut icon" href="assets/icon.jpg">

        <script>
        var CURRENT_USER = null;
        var CANONICAL_DOMAIN = "genius.com";
        var CANONICAL_DOMAIN_PARTS_LENGTH = 2;
        var CURRENT_TAG = null;
        var TRACKING_DATA = {};
        var VALID_SUBDOMAINS = ["non-music","rap","rock","country","r-b","pop"];
        var EMBEDLY_KEY = "fc778e44915911e088ae4040f9f86dcd";
        var MOBILE_DEVICE = false;
        var APP_CONFIG = {"env":"production","api_root_url":"/api","transform_domain":"transform.genius.com","facebook_app_id":"265539304824","facebook_opengraph_api_version":"2.8","pusher_app_key":"6d893fcc6a0c695853ac","embedly_key":"fc778e44915911e088ae4040f9f86dcd","app_store_url":"https://itunes.apple.com/us/app/genius-by-rap-genius-search/id709482991?ls=1&mt=8","play_store_url":"https://play.google.com/store/apps/details?id=com.genius.android","soundcloud_client_id":"632c544d1c382f82526f369877aab5c0","annotator_context_length":32,"comment_reasons":[{"_type":"comment_reason","context_url":"https://genius.com/8846441/Genius-how-genius-works/More-on-annotations","display_character":"R","handle":"Restates the line","id":1,"name":"restates-the-line","raw_name":"restates the line","requires_body":false,"slug":"restates_the_line"},{"_type":"comment_reason","context_url":"https://genius.com/8846441/Genius-how-genius-works/More-on-annotations","display_character":"S","handle":"It’s a stretch","id":2,"name":"its-a-stretch","raw_name":"it’s a stretch","requires_body":false,"slug":"its_a_stretch"},{"_type":"comment_reason","context_url":"https://genius.com/8846441/Genius-how-genius-works/More-on-annotations","display_character":"M","handle":"Missing something","id":3,"name":"missing-something","raw_name":"missing something","requires_body":false,"slug":"missing_something"},{"_type":"comment_reason","context_url":"https://genius.com/8846441/Genius-how-genius-works/More-on-annotations","display_character":"…","handle":"Other","id":4,"name":"other","raw_name":"other","requires_body":true,"slug":"other"}],"comment_reasons_help_url":"https://genius.com/8846441/Genius-how-genius-works/More-on-annotations","filepicker_api_key":"Ar03MDs73TQm241ZgLwfjz","filepicker_policy":"eyJleHBpcnkiOjIzNTEwOTE1NTgsImNhbGwiOlsicGljayIsInJlYWQiLCJzdG9yZSIsInN0YXQiLCJjb252ZXJ0Il19","filepicker_signature":"68597b455e6c09bce0bfd73f758e299c95d49a5d5c8e808aaf4877da7801c4da","filepicker_s3_image_bucket":"filepicker-images-rapgenius","available_roles":["moderator","mega_boss","in_house_staff","verified_artist","meme_artist","engineer","editor","educator","staff","whitehat","tech_liaison","mediator"],"canonical_domain":"genius.com","enable_angular_debug":false,"fact_track_launch_article_url":"https://genius.com/a/genius-and-spotify-together","user_authority_roles":["moderator","editor","mediator"],"user_verification_roles":["community_artist","verified_artist","meme_artist"],"user_vote_types_for_delete":["votes","upvotes","downvotes"],"brightcove_account_id":"4863540648001","mixpanel_delayed_events_timeout":"86400","unreviewed_annotation_tooltip_info_url":"https://genius.com/8846524/Genius-how-genius-works/More-on-editorial-review","video_placements":{"desktop_song_page":[{"name":"sidebar","min_relevance":"high","fringe_min_relevance":"low","max_videos":0},{"name":"sidebar_thumb","min_relevance":"medium","fringe_min_relevance":"low","max_videos":0},{"name":"recirculated","min_relevance":"low","max_videos":3}],"mobile_song_page":[{"name":"footer","min_relevance":"medium","max_videos":1},{"name":"recirculated","min_relevance":"low","max_videos":3}],"desktop_artist_page":[{"name":"sidebar","min_relevance":"medium","fringe_min_relevance":"low","max_videos":2}],"mobile_artist_page":[{"name":"carousel","min_relevance":"medium","fringe_min_relevance":"low","max_videos":5}],"amp_song_page":[{"name":"footer","min_relevance":"medium","max_videos":1}],"amp_video_page":[{"name":"related","min_relevance":"low","max_videos":8}],"desktop_video_page":[{"name":"series_related","min_relevance":"low","max_videos":8,"series":true},{"name":"related","min_relevance":"low","max_videos":8}],"desktop_article_page":[{"name":"carousel","min_relevance":"low","max_videos":5}],"mobile_article_page":[{"name":"carousel","min_relevance":"low","max_videos":5}],"desktop_album_page":[{"name":"sidebar","min_relevance":"medium","fringe_min_relevance":"low","max_videos":1}],"amp_album_page":[{"name":"carousel","min_relevance":"low","max_videos":5}]},"app_name":"rapgenius-cedar","vttp_parner_id":"719c82b0-266e-11e7-827d-7f7dc47f6bc0","default_cover_art_url":"https://assets.genius.com/images/default_cover_art.png?1555428161","sizies_base_url":"https://t2.genius.com/unsafe","max_line_item_event_count":10,"dmp_match_threshold":0.05,"ab_tests":[],"external_song_match_purposes":["streaming_service_lyrics","streaming_service_player"],"brightcove_mobile_thumbnail_web_player_id":"SyGQSOxol","brightcove_modal_web_player_id":"S1LI5bh0","brightcove_song_story_web_player_id":"SkfSovRVf","brightcove_standard_web_player_id":"S1ZcmcOC1x","brightcove_standard_no_autoplay_web_player_id":"ByRtIUBvx","brightcove_sitemap_player_id":"BJfoOE1ol"};
        var SESSION_CONFIG = {"current_user":null,"taboola_enabled":false,"fringe_enabled":true,"log_client_metrics":false,"show_ads":true};
        var AD_CONFIG = {"ad_placements":{"amp_article_sticky":{"sizes":[[300,50],[320,50]],"kv":{"is_atf":false}},"amp_article_footer":{"sizes":[[300,250]],"kv":{"is_atf":false}},"amp_album_sticky":{"sizes":[[320,50]]},"amp_album_footer":{"sizes":[[300,250]]},"amp_song_annotation":{"sizes":[[300,250]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294868"}},{"bidder":"ix","params":{"id":10,"siteID":194719}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613918"}}]},"amp_song_below_player":{"sizes":[[300,250]],"kv":{"is_atf":false}},"amp_song_below_song_bio":{"sizes":[[300,250]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294916"}},{"bidder":"ix","params":{"id":8,"siteID":194716}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613910"}}]},"amp_song_leaderboard":{"sizes":[[320,50]],"kv":{"is_atf":true},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"13937404"}},{"bidder":"ix","params":{"id":25,"siteID":300787}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"1051268"}}]},"amp_song_medium1":{"sizes":[[300,250],[320,480]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294891"}},{"bidder":"ix","params":{"id":1,"siteID":194712}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613900"}}]},"amp_song_medium2":{"sizes":[[300,250]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294897"}},{"bidder":"ix","params":{"id":5,"siteID":194713}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613902"}}]},"amp_song_medium3":{"sizes":[[300,250]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294900"}},{"bidder":"ix","params":{"id":6,"siteID":194714}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613906"}}]},"amp_song_medium_footer":{"sizes":[[300,250]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294876"}},{"bidder":"ix","params":{"id":7,"siteID":194715}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613908"}}]},"amp_song_q_and_a":{"sizes":[[300,250]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294908"}},{"bidder":"ix","params":{"id":11,"siteID":194720}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613920"}}]},"amp_song_sticky":{"sizes":[[300,50],[320,50]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294881"}},{"bidder":"ix","params":{"id":3,"siteID":194711}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613898"}}]},"amp_video_leaderboard":{"sizes":[[320,50]]},"android_song_inread2":{"sizes":"MEDIUM_RECTANGLE"},"android_song_inread3":{"sizes":"MEDIUM_RECTANGLE"},"android_song_inread":{"sizes":"MEDIUM_RECTANGLE"},"app_song_inread2":{"sizes":"MEDIUM_RECTANGLE"},"app_song_inread3":{"sizes":"MEDIUM_RECTANGLE"},"app_song_inread":{"sizes":"MEDIUM_RECTANGLE"},"brightcove_article_web_player":{"sizes":[[640,360]]},"brightcove_modal_web_player":{"sizes":[[640,360]]},"brightcove_article_list_web_player":{"sizes":[[640,360]]},"brightcove_mobile_thumbnail_web_player":{"sizes":[[640,360]]},"desktop_album_leaderboard":{"master_on_page":true,"sizes":[[970,250],[728,90],[970,90],[970,1]],"placeholder_size":[728,90],"kv":{"is_atf":true}},"desktop_album_sidebar":{"sizes":[[300,250]],"placeholder_size":[300,250],"kv":{"is_atf":true}},"desktop_article_sidebar":{"sizes":[[300,600],[300,250]]},"desktop_article_leaderboard":{"master_on_page":true,"sizes":[[970,250],[728,90],[970,90],[970,1]],"placeholder_size":[728,90],"kv":{"is_atf":true}},"desktop_article_skin":{"sizes":[[1700,800],[1700,1200]],"kv":{"is_atf":true}},"desktop_artist_leaderboard":{"sizes":[[970,250],[728,90],[970,90],[970,1]],"placeholder_size":[728,90]},"desktop_artist_sidebar":{"sizes":[[300,250]],"placeholder_size":[300,250]},"desktop_discussion_leaderboard":{"sizes":[[728,90]],"placeholder_size":[728,90]},"desktop_discussion_sidebar":{"sizes":[[300,250]],"placeholder_size":[300,250]},"desktop_forum_leaderboard":{"sizes":[[728,90]],"placeholder_size":[728,90]},"desktop_forum_medium1":{"sizes":[[300,250]]},"desktop_home_footer":{"sizes":[[728,90]],"placeholder_size":[728,90]},"desktop_home_leaderboard":{"master_on_page":true,"sizes":[[970,250],[728,90],[970,1]],"kv":{"is_atf":true}},"desktop_home_skin":{"sizes":[[1700,800],[1700,1200]],"kv":{"is_atf":true}},"desktop_home_himbo":{"sizes":[[800,500]],"kv":{"is_atf":true}},"desktop_search_leaderboard":{"sizes":[[970,250],[728,90]],"placeholder_size":[728,90]},"desktop_search_sidebar":{"sizes":[[300,250],[300,600]]},"desktop_song_annotation":{"sizes":[[300,250]],"placeholder_size":[300,250],"has_only_dynamic_placements":true,"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294796"}},{"bidder":"ix","params":{"siteId":194718,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"639856"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"399321791"}}]},"desktop_song_comments":{"sizes":[[300,250],[336,280],[468,60]],"placeholder_size":[300,250],"has_only_dynamic_placements":true,"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294806"}},{"bidder":"ix","params":{"siteId":194722,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"639858"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"408703511"}}]},"desktop_song_inread":{"sizes":[[1,1],[1,2],[300,250],[336,280],[320,480],[468,60]],"placeholder_size":[300,250],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11476342"}},{"bidder":"ix","params":{"siteId":201300,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"660418"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"351297791"}}]},"desktop_song_inread2":{"sizes":[[300,250],[336,280],[468,60]],"placeholder_size":[300,250],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11476344"}},{"bidder":"ix","params":{"siteId":201301,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"660420"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"464408951"}}]},"desktop_song_inread3":{"sizes":[[300,250],[336,280],[468,60]],"placeholder_size":[300,250],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11476345"}},{"bidder":"ix","params":{"id":21,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"660424"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"464409071"}}]},"desktop_song_leaderboard":{"sizes":[[970,250],[728,90],[970,90],[970,1]],"placeholder_size":[728,90],"kv":{"is_atf":true},"master_on_page":true,"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294811"}},{"bidder":"ix","params":{"siteId":197229,"size":[728,90]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"639864"}}]},"desktop_song_lyrics_footer":{"sizes":[[300,250],[300,600],[336,280],[468,60]],"placeholder_size":[300,250],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294823"}},{"bidder":"ix","params":{"siteId":194710,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"639860"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"397849871"}}]},"desktop_song_medium1":{"sizes":[[300,600],[300,250]],"placeholder_size":[300,250],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294830"}},{"bidder":"ix","params":{"siteId":194709,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"639862"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"346199471"}}]},"desktop_song_q_and_a":{"sizes":[[300,250]],"has_only_dynamic_placements":true,"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11474887"}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"660286"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"464408711"}}]},"desktop_song_sidebar_top":{"sizes":[[300,250]],"placeholder_size":[300,250],"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11621942"}},{"bidder":"ix","params":{"siteId":221945,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"135638","zoneId":"682610"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"21615783137"}}]},"desktop_song_skin":{"sizes":[[1700,800],[1700,1200]],"kv":{"is_atf":true}},"desktop_user_leaderboard":{"master_on_page":true,"sizes":[[728,90]],"placeholder_size":[728,90]},"desktop_user_sidebar":{"sizes":[[300,250]],"placeholder_size":[300,250]},"desktop_video_sidebar":{"sizes":[[300,250],[300,600]],"placeholder_size":[300,250]},"mobile_artist_leaderboard":{"master_on_page":true,"sizes":[[320,50]],"placeholder_size":[320,50]},"mobile_artist_footer":{"sizes":[[300,250]],"placeholder_size":[300,250]},"mobile_discussion_leaderboard":{"sizes":[[320,50]],"placeholder_size":[320,50]},"mobile_home_adhesion":{"master_on_page":true,"sizes":[[320,50],[320,100]],"kv":{"is_atf":true}},"mobile_home_footer":{"sizes":[[300,250]],"kv":{"is_atf":false}},"mobile_forum_leaderboard":{"sizes":[[320,50]],"placeholder_size":[320,50]},"mobile_search_leaderboard":{"sizes":[[320,50]],"placeholder_size":[320,50]},"mobile_search_footer":{"sizes":[[300,250]],"placeholder_size":[300,250]},"mobile_song_annotation":{"sizes":[[300,250]],"placeholder_size":[300,250],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294868"}},{"bidder":"ix","params":{"siteId":194719,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613918"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"399321431"}}]},"mobile_song_comments":{"sizes":[[300,250],[300,50],[320,50],[320,100]],"placeholder_size":[300,250],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294870"}},{"bidder":"ix","params":{"siteId":194721,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613922"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"408703391"}}]},"mobile_song_footer":{"sizes":[[300,250],[300,50],[320,50],[320,100]],"placeholder_size":[300,250],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294876"}},{"bidder":"ix","params":{"siteId":194715,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613908"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"395129471"}}]},"mobile_song_lyrics_header":{"sizes":[[320,50],[320,100]],"kv":{"is_atf":true},"master_on_page":true,"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"13937403"}},{"bidder":"ix","params":{"id":26,"siteID":300788}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"1051274"}}]},"mobile_song_lyrics_header_adhesion":{"sizes":[[300,50],[320,50],[320,100]],"kv":{"is_atf":true},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294881"}},{"bidder":"ix","params":{"siteId":194711,"size":[300,50]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613898"}}]},"mobile_song_medium1":{"sizes":[[1,1],[1,2],[300,250],[320,480]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294891"}},{"bidder":"ix","params":{"siteId":194712,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613900"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"346200911"}}]},"mobile_song_medium2":{"sizes":[[300,250]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294897"}},{"bidder":"ix","params":{"siteId":194713,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613902"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"346201631"}}]},"mobile_song_medium3":{"sizes":[[300,250]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294900"}},{"bidder":"ix","params":{"siteId":194714,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613906"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"408703151"}}]},"mobile_song_q_and_a":{"sizes":[[300,250],[300,50],[320,50],[320,100]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294908"}},{"bidder":"ix","params":{"siteId":194720,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613920"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"408703271"}}]},"mobile_song_song_bio":{"sizes":[[300,250],[300,50],[320,50],[320,100]],"kv":{"is_atf":false},"prebid_placements":[{"bidder":"appnexus","params":{"placementId":"11294916"}},{"bidder":"ix","params":{"siteId":194716,"size":[300,250]}},{"bidder":"rubicon","params":{"accountId":"15874","siteId":"107816","zoneId":"613910"}},{"bidder":"undertone","params":{"publisherId":"3603","placementId":"408703991"}}]},"mobile_user_leaderboard":{"master_on_page":true,"sizes":[[320,50]]},"mobile_user_footer":{"sizes":[[300,250]]},"web_annotator_annotation":{"sizes":[[300,250]],"kv":{"is_atf":false}}},"dfp_network_id":"342026871","a9_pub_id":"3459","prebid":{"priceGranularity":{"buckets":[{"min":0.1,"max":0.99,"increment":0.01},{"min":1.0,"max":4.98,"increment":0.02},{"min":5.0,"max":20.0,"increment":0.1}]},"bidderSettings":{"districtmDMX":{"bidCpmAdjustment":0.9}},"sizes":[[970,250],[970,90],[728,90],[468,60],[336,280],[300,50],[300,250],[300,600],[320,100],[320,50],[1,2]],"experimental_bidders":[]},"platform":"desktop","prebid_timeout":1000,"prebid_terminal_timeout":1500,"header_bidding_enabled":true,"prebid_server_enabled":false,"prebid_server_timeout":400,"prebid_server":{"appnexus":{"account_id":"c438d9e0-0182-4737-8ad7-68bcaf49d76e","endpoint":"https://prebid.adnxs.com/pbs/v1/auction","sync_endpoint":"https://prebid.adnxs.com/pbs/v1/cookie_sync"},"rubicon":{"account_id":"15874","endpoint":"https://prebid-server.rubiconproject.com/auction","sync_endpoint":"https://prebid-server.rubiconproject.com/cookie_sync"}},"ias_enabled":true,"ias_pubid":"927569","cmp_enabled":false,"consent_timeout":10000}
        var ANALYTICS_CONFIG = {"enabled":true,"mixpanel_enabled":true,"comscore_client_id":"17151659","quantcast_account":"p-f3CPQ6vHckedE","librato_web_client_host":"librato-collector.genius.com"}
        var TOP_LEVEL_BLOCK_CONTAINERS = ["address","article","aside","blockquote","div","dl","fieldset","footer","form","h1","h2","h3","h4","h5","h6","header","menu","nav","ol","p","pre","section","table","ul"];
        var TOP_LEVEL_STANDALONE_BLOCKS = ["img","hr"];
        </script>
        <script async src="https://www.youtube.com/iframe_api"></script>
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <link href="https://assets.genius.com/stylesheets/compiled/bagon_desktop-062e50c85f030df8de131237f6c93154.css" media="screen" rel="stylesheet" type="text/css" />
        <link as="script" href="https://assets.genius.com/javascripts/compiled/bagon_desktop-5d5222adc88b3a0bb642.js" rel="preload" /><script defer="true" src="https://assets.genius.com/javascripts/compiled/bagon_desktop-5d5222adc88b3a0bb642.js" type="text/javascript"></script>
        <style>
        @font-face {
            font-family: 'Programme';
            font-style: normal;
            font-weight: bold;
        }

        @font-face {
            font-family: 'Programme';
            src: url(https://assets.genius.com/fonts/programme_normal.woff2?1555428161) format('woff2'),
            url(https://assets.genius.com/fonts/programme_normal.woff?1555428161) format('woff');
            font-style: normal;
            font-weight: normal;
        }

        @font-face {
            font-family: 'Programme';
            src: url(https://assets.genius.com/fonts/programme_normal_italic.woff2?1555428161) format('woff2'),
            url(https://assets.genius.com/fonts/programme_normal_italic.woff?1555428161) format('woff');
            font-style: italic;
            font-weight: normal;
        }

        @font-face {
            font-family: 'Programme';
            src: url(https://assets.genius.com/fonts/programme_light.woff2?1555428161) format('woff2'),
            url(https://assets.genius.com/fonts/programme_light.woff?1555428161) format('woff');
            font-style: normal;
            font-weight: 100;
        }

        @font-face {
            font-family: 'Programme';
            src: url(https://assets.genius.com/fonts/programme_light_italic.woff2?1555428161) format('woff2'),
            url(https://assets.genius.com/fonts/programme_light_italic.woff?1555428161) format('woff');
            font-style: italic;
            font-weight: 100;
        }
        </style>
    </head>

    <body class="act-show cont-home snarly" handle-routable-links>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <!-- code -->
        <div class="header" ng-controller="HeaderCtrl as header_ctrl" click-outside="close_mobile_subnav_menu()">
        <global-message ng-if="header_ctrl.cloudflare_error" ng-cloak>
            {{:: 'cloud_flare_always_on_short_message' | i18n }}
            <br>Check <a href="https://twitter.com/genius" target="_blank">@genius</a> for updates. We'll have things fixed soon.
        </global-message>
        <div class="header-primary active">
            <div class="header-expand_nav_menu" ng-click="toggle_mobile_subnav_menu()"><div class="header-expand_nav_menu-contents"></div></div>

            
            <div class="logo_container">
                <a href="https://genius.com/" class="logo_link">GENIUS</a>
            </div>
            <header-actions></header-actions>
        </div>
        <search-form search-style="header"></search-form>

  

        <ul class="header-nav_menu" ng-class="{'header-nav_menu--visible': mobile_subnav_menu_open}">
        <div ng-cloak>
            <header-menu-item class="header-nav_menu--hide_when_expand_menu_is_not_available" name="Home" url="https://genius.com/"></header-menu-item>
            <header-menu-item name="Featured Stories" url="https://genius.com/#featured-stories"></header-menu-item>
            <header-menu-item name="Top Songs" url="https://genius.com/#top-songs"></header-menu-item>
            <header-menu-item name="Videos" url="https://genius.com/#videos"></header-menu-item>
            <header-menu-item name="Community" url="https://genius.com/#community"></header-menu-item>
            
            
            <span class="nav_menu-item nav_menu-item--separator">|</span>
            <header-menu-item name="Shop" url="https://shop.genius.com/"></header-menu-item>
            
            <span class="nav_menu-item nav_menu-item--separator">|</span>
            <li class="nav_menu-item">
        <a href="https://www.facebook.com/geniusdotcom/" class="nav_menu-link nav_menu-link--facebook" target="_blank">
            <svg src="facebook.svg" class="inline_icon"></svg>
            <span class="nav_menu-link-social_text">Facebook</span>
        </a>
        </li>
        <li class="nav_menu-item">
        <a href="https://twitter.com/Genius" class="nav_menu-link" target="_blank">
            <svg src="twitter.svg" class="inline_icon"></svg>
            <span class="nav_menu-link-social_text">Twitter</span>
        </a>
        </li>
        <li class="nav_menu-item">
        <a href="https://www.instagram.com/genius/" class="nav_menu-link" target="_blank">
            <svg src="instagram.svg" class="inline_icon"></svg>
            <span class="nav_menu-link-social_text">Instagram</span>
        </a>
        </li>
        <li class="nav_menu-item">
        <a href="https://www.youtube.com/genius" class="nav_menu-link nav_menu-link--no_right_padding" target="_blank">
            <svg src="youtube.svg" class="inline_icon nav_menu-link-youtube_icon"></svg>
            <span class="nav_menu-link-social_text">Youtube</span>
        </a>
        </li>

        </div>
        </ul>

        </div>
    </body>
</html>