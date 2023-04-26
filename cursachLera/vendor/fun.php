<?php

function highlightPhpTags($string) {
    $string = preg_replace('/&lt;\?php/', '<span style="background-color: blue;">&lt;?php</span>', $string);
    $string = preg_replace('/\?&gt;/', '<span style="background-color: blue;">?&gt;</span>', $string);
    return $string;
}

?>