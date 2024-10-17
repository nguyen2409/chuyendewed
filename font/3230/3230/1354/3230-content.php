<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1354">
    <div class='container'>
        <h1>Benefits of coaching</h1>
        <div class="category">
            <div class="category-item">
                <div class="content">
                    <p class="number">01</p>
                </div>
                <div class="content-text">
                    <h2 class="title">Schedules</h2>
                    <p class="text">Lorem ipsum dolor sit amet,consetetur sadip scing elitrsed diam lon</p>
                </div>
            </div>
            <div class="category-item">
                <div class="content">
                    <p class="number">02</p>
                </div>
                <div class="content-text">
                    <h2 class="title">Organisation</h2>
                    <p class="text">Lorem ipsum dolor sit amet, consetetur sadip scing elitrsed diam lon.</p>
                </div>
            </div>
            <div class="category-item">
                <div class="content">
                    <p class="number">03</p>
                </div>
                <div class="content-text">
                    <h2 class="title">Save Time</h2>
                    <p class="text">Lorem ipsum dolor sit amet, consetetur sadip scing elitrsed diam lon.</p>
                </div>
            </div>
            <div class="category-item">
                <div class="content">
                    <p class="number">04</p>
                </div>
                <div class="content-text">
                    <h2 class="title">Save Money</h2>
                    <p class="text">Lorem ipsum dolor sit amet, consetetur sadip scing elitrsed diam lon.</p>
                </div>
            </div>
        </div>
    </div>
</div> 
</body>