<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
    
    <div class="banner">
        <div class = "container top">
            <ul class="dump">
                <li><a href="#">HOME</a></li>
                <li><span>BAGS</span></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class= "container mid">
            <h1>BAGS</h1>
            <p>staring from $149 and sale up 75%</p>
        </div>
    </div>

    