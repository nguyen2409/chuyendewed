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
        <h1>
            Top Categories Of The Month
        </h1>
        <div class="category">
            <div class="category-item">
                <img class="img-fluid" alt="" loading="lazy" src="https://martfury.magebig.com/media/webps/jpg/media/wysiwyg/magebig/catalog/catalog-01.webp" data-webp="1">

                <div class="Content">
                    <h2>
                        Tv Televisions
                    </h2>
                    <ul>
                        <li>
                            Smart TV
                        </li>
                        <li>
                            4K Ultra HD TVs
                        </li>
                        <li>
                            LED TVs
                        </li>
                        <li>
                            OLED TVs
                        </li>
                        <li>
                            Accessories
                        </li>
                    </ul>
                </div>
            </div>
            <div class="category-item">
                <img class="img-fluid" alt="" loading="lazy" src="https://martfury.magebig.com/media/webps/jpg/media/wysiwyg/magebig/catalog/catalog-02.webp" data-webp="1">
                <div class="Content">
                    <h2>
                        Air Conditioners
                    </h2>
                    <ul>
                        <li>
                            Type Hanging On Wall
                        </li>
                        <li>
                            Type Erect
                        </li>
                        <li>
                            Type Hanging On Ceiling
                        </li>
                        <li>
                            Accessories
                        </li>
                    </ul>
                </div>
            </div>
            <div class="category-item">
                <img class="img-fluid" alt="" loading="lazy" src="https://martfury.magebig.com/media/webps/jpg/media/wysiwyg/magebig/catalog/catalog-03.webp" data-webp="1">
                <div class="Content">
                    <h2>
                        Washing Machine
                    </h2>
                    <ul>
                        <li>
                            Type Horizontal
                        </li>
                        <li>
                            Type Vertical
                        </li>
                        <li>
                            Type Drying Clothes
                        </li>
                    </ul>
                </div>
            </div>
            <div class="category-item">
                <img class="img-fluid" alt="" loading="lazy" src="https://martfury.magebig.com/media/webps/jpg/media/wysiwyg/magebig/catalog/catalog-04.webp" data-webp="1">
                <div class="Content">
                    <h2>
                        Audios &amp; Theaters
                    </h2>
                    <ul>
                        <li>
                            Speakers
                        </li>
                        <li>
                            Home Theater System
                        </li>
                        <li>
                            Wireless Audio
                        </li>
                        <li>
                            Headphone
                        </li>
                        <li>
                            Accessories
                        </li>
                    </ul>
                </div>
            </div>
            <div class="category-item">
                <img class="img-fluid" alt="" loading="lazy" src="https://martfury.magebig.com/media/webps/jpg/media/wysiwyg/magebig/catalog/catalog-05.webp" data-webp="1">
                <div class="Content">
                    <h2>
                        Office Electronics
                    </h2>
                    <ul>
                        <li>
                            Printers
                        </li>
                        <li>
                            Store &amp; Business
                        </li>
                        <li>
                            Scanners
                        </li>
                        <li>
                            Projectors
                        </li>
                        <li>
                            Phones
                        </li>
                    </ul>
                </div>
            </div>

            <div class="category-item">
                <img class="img-fluid" alt="" loading="lazy" src="https://martfury.magebig.com/media/webps/jpg/media/wysiwyg/magebig/catalog/catalog-06.webp" data-webp="1">
    
                <div class="Content">
                    <h2>
                        Car Electronics
                    </h2>
                    <ul>
                        <li>
                            Audio &amp; Video
                        </li>
                        <li>
                            Radar Detector
                        </li>
                        <li>
                            Car Security Products
                        </li>
                        <li>
                            Vehicle GPS Tracking
                        </li>
                        <li>
                            Portable CB Radios
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>