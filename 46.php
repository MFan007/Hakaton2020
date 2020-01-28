<?php
session_start();
require "db_config.php";

if(isset($_SESSION['userId'])) {
    ?>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Click">
    <meta name="description" content="Click is a website that stores a database of mobile phones in order to show information about them">
    <meta name="keywords" content="click, mobile, phone, mobile phone, telecommunication, internet, camera, search, information, info, technology, HTML, CSS, JavaScript, PHP, MySQL, JQuery, Bootstrap">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Darko Antunovic, Milos Medan, VTS">
    <meta name="viewport" content="with=device-width, initial scale=1.0">
    <link rel="stylesheet" type="text/css" href="specs.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Click</title>
</head>
<body>
<!-- Top Navigation Bar -->
<header>
    <div class="logo"><a href="index.php">CLICK</a></div>
    <nav class="active">
        <ul>
            <li><a href="about.php">About</a></li>
            <!-- Sub-menu 2 -->
            <?php
            if(!isset($_SESSION['userId'])) {
                echo '<li class="sub-menu"><a>Profile</a>
                        <ul>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </li>';
            }
            ?>
        </ul>
    </nav>
    <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
    <!-- Responsive part with the treee stripes -->
</header>
<div id="bigdiv">
    <div class="fixed-size-container">
        <div class="sidebar"><p>Honor 20</p>
            <img src="images/content46.jpg" alt="Honor 20" width="160" height="212">
        </div>
        <div id="specs-list">
            <table cellspacing="0">
                <tr class="tr-hover">
                    <th rowspan="15" scope="row">Network</th>
                    <td class="ttl">Technology</td>
                    <td class="nfo">GSM / CDMA / HSPA / EVDO / LTE</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl">2G bands</td>
                    <td class="nfo">GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual-SIM model only)</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl"></td>
                    <td class="nfo">CDMA 800 / 1900 - USA</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl">3G bands</td>
                    <td class="nfo">HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100 - Global, USA</td>
                </tr>
                <tr class="tr-toggle" data-spec-optional>
                    <td class="ttl">&nbsp;</td>
                    <td class="nfo">CDMA2000 1xEV-DO - USA</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl">4G bands</a></td>
                    <td class="nfo">LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 32(1500), 38(2600), 39(1900), 40(2300), 41(2500), 66(1700/2100) - Global</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl"></td>
                    <td class="nfo">LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 14(700), 17(700), 18(800), 19(800), 20(800), 25(1900), 26(850), 28(700), 29(700), 30(2300), 38(2600), 39(1900), 40(2300), 41(2500), 46(5200), 66(1700/2100), 71(600) - USA</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl">Speed</a></td>
                    <td class="nfo">HSPA 42.2/5.76 Mbps, LTE-A (7CA) Cat20 2000/150 Mbps</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="2" scope="row">Launch</th>
                    <td class="ttl">Announced</td>
                    <td class="nfo">2019, February</td>
                </tr>
                <tr>
                    <td class="ttl">Status</td>
                    <td class="nfo">Available. Released 2019, March</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="6">Body</th>
                    <td class="ttl">Dimensions</td>
                    <td class="nfo">149.9 x 70.4 x 7.8 mm (5.90 x 2.77 x 0.31 in)</td>
                </tr><tr>
                    <td class="ttl">Weight</td>
                    <td class="nfo">157 g (5.54 oz)</td>
                </tr>
                <tr>
                    <td class="ttl">Build</td>
                    <td class="nfo">Glass front (Gorilla Glass 6), glass back (Gorilla Glass 5), aluminum frame</td>
                </tr>
                <tr>
                    <td class="ttl">SIM</td>
                    <td class="nfo">Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)</td>
                </tr>
                <tr><td class="ttl">&nbsp;</td><td class="nfo">Samsung Pay (Visa, MasterCard certified)<br />
                        IP68 dust/water resistant (up to 1.5m for 30 mins)</td></tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="5">Display</th>
                    <td class="ttl">Type</td>
                    <td class="nfo">Dynamic AMOLED capacitive touchscreen, 16M colors</td>
                </tr>
                <tr>
                    <td class="ttl">Size</td>
                    <td class="nfo">6.1 inches, 93.2 cm<sup>2</sup> (~88.3% screen-to-body ratio)</td>
                </tr>
                <tr>
                    <td class="ttl">Resolution</td>
                    <td class="nfo">1440 x 3040 pixels, 19:9 ratio (~550 ppi density)</td>
                </tr>
                <tr>
                    <td class="ttl">Protection</td>
                    <td class="nfo">Corning Gorilla Glass 6</td>
                </tr>
                <tr><td class="ttl">&nbsp;</td><td class="nfo">HDR10+<br />
                        Always-on display</td></tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="4">Platform</th>
                    <td class="ttl">OS</td>
                    <td class="nfo">Android 9.0 (Pie), upgradable to Android 10.0; One UI 2</td>
                </tr>
                <tr><td class="ttl">Chipset</td>
                    <td class="nfo">Exynos 9820 (8 nm) - EMEA/LATAM<br>Qualcomm SM8150 Snapdragon 855 (7 nm) - USA/China</td>
                </tr>
                <tr><td class="ttl">CPU</td>
                    <td class="nfo">Octa-core (2x2.73 GHz Mongoose M4 & 2x2.31 GHz Cortex-A75 & 4x1.95 GHz Cortex-A55) - EMEA/LATAM<br>Octa-core (1x2.84 GHz Kryo 485 & 3x2.42 GHz Kryo 485 & 4x1.78 GHz Kryo 485) - USA/China</td>
                </tr>
                <tr><td class="ttl">GPU</td>
                    <td class="nfo">Mali-G76 MP12 - EMEA/LATAM<br>Adreno 640 - USA/China</td>
                </tr>
            </table>


            <table cellspacing="0">
                <tr>
                    <th rowspan="5">Memory</th>
                    <td class="ttl">Card slot</td>
                    <td class="nfo">microSDXC (uses shared SIM slot) - dual SIM model only</td></tr>
                <tr>
                    <td class="ttl">Internal</td>
                    <td class="nfo">128GB 8GB RAM, 512GB 8GB RAM</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="4"  >Main Camera</th>
                    <td class="ttl">Triple</td>
                    <td class="nfo">12 MP, f/1.5-2.4, 26mm (wide), 1/2.55", 1.4µm, Dual Pixel PDAF, OIS<br />
                        12 MP, f/2.4, 52mm (telephoto), 1/3.6", 1.0µm, AF, OIS, 2x optical zoom<br />
                        16 MP, f/2.2, 12mm (ultrawide), 1/3.1", 1.0µm, Super Steady video</td>
                </tr>
                <tr>
                    <td class="ttl">Features</td>
                    <td class="nfo">LED flash, auto-HDR, panorama</td>
                </tr>
                <tr>
                    <td class="ttl">Video</a></td>
                    <td class="nfo">2160p@60fps (no EIS), 2160p@30fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, dual-video rec., stereo sound rec., gyro-EIS & OIS</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="4">Selfie camera</th>
                    <td class="ttl">Single</td>
                    <td class="nfo">10 MP, f/1.9, 26mm (wide), 1/3", 1.22µm, Dual Pixel PDAF</td>
                </tr>
                <tr>
                    <td class="ttl">Features</td>
                    <td class="nfo">Dual video call, Auto-HDR</td>
                </tr>
                <tr>
                    <td class="ttl">Video</td>
                    <td class="nfo">2160p@30fps, 1080p@30fps</td>
                </tr>
            </table>
            <table cellspacing="0">
                <tr>
                    <th rowspan="3">Sound</th>
                    <td class="ttl">Loudspeaker</td>
                    <td class="nfo">Yes, with stereo speakers</td>
                </tr>
                <tr>
                    <td class="ttl">3.5mm jack</td>
                    <td class="nfo">Yes</td>
                </tr>
                <tr>
                    <td class="ttl">&nbsp;</td>
                    <td class="nfo" >32-bit/384kHz audio<br />
                        Dolby Atmos sound<br />
                        Tuned by AKG</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="9">Comms</th>
                    <td class="ttl">WLAN</td>
                    <td class="nfo">Wi-Fi 802.11 a/b/g/n/ac/ax, dual-band, Wi-Fi Direct, hotspot</td>
                </tr>
                <tr>
                    <td class="ttl">Bluetooth</td>
                    <td class="nfo">5.0, A2DP, LE, aptX</td>
                </tr>
                <tr>
                    <td class="ttl">GPS</td>
                    <td class="nfo">Yes, with A-GPS, GLONASS, BDS, GALILEO</td>
                </tr>
                <tr>
                    <td class="ttl">NFC</td>
                    <td class="nfo">Yes</td>
                </tr>
                <tr>
                    <td class="ttl">Radio</td>
                    <td class="nfo">FM radio (USA & Canada only)</td>
                </tr>
                <tr>
                    <td class="ttl">USB</td>
                    <td class="nfo">3.1, Type-C 1.0 reversible connector</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="9" >Features</th>
                    <td class="ttl">Sensors</td>
                    <td class="nfo">Fingerprint (under display, ultrasonic), accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2</td>
                </tr>
                <tr>
                    <td class="ttl">&nbsp;</td>
                    <td class="nfo">ANT+<br />
                        Bixby natural language commands and dictation<br />
                        Samsung DeX (desktop experience support)</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="7">Battery</th>
                    <td class="ttl">&nbsp;</td>
                    <td class="nfo">Non-removable Li-Ion 3400 mAh battery</td>
                </tr>
                <tr>
                    <td class="ttl">Charging</td>
                    <td class="nfo">Fast battery charging 15W<br />
                        USB Power Delivery 2.0<br />
                        Fast Qi/PMA wireless charging 15W<br />
                        Power bank/Reverse wireless charging 9W</td>
                </tr>
            </table>


            <table cellspacing="0">
                <tr>
                    <th rowspan="6" >Misc</th>
                    <td class="ttl">Colors</td>
                    <td class="nfo">Prism White, Prism Black, Prism Green, Prism Blue, Canary Yellow, Flamingo Pink, Cardinal Red, Smoke Blue</td>
                </tr>
                <tr>
                    <td class="ttl">Models</td>
                    <td class="nfo">SM-G973F, SM-G973U, SM-G973W, SM-G973U1, SM-G9730, SM-G973N</td>
                </tr>
                <tr>
                    <td class="ttl">SAR</td>
                    <td class="nfo">0.93 W/kg (head) &nbsp; &nbsp; 0.79 W/kg (body) &nbsp; &nbsp; </td>
                </tr>
                <tr>
                    <td class="ttl">SAR EU</td>
                    <td class="nfo">0.48 W/kg (head) &nbsp; &nbsp; 1.59 W/kg (body) &nbsp; &nbsp; </td>
                </tr>
                <tr>
                    <td class="ttl">Price</td>
                    <td class="nfo">&#36;&thinsp;464.63 / &#8364;&thinsp;499.36 / &#163;&thinsp;477.16 / &#8377;&thinsp;49,495</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="6">Tests</th>
                    <td class="ttl">Performance</td>
                    <td class="nfo">
                        <a class="noUnd">Basemark OS II: 4539 / Basemark OS II 2.0: 4465<br>Basemark X: 44097</td>
                </tr><tr>

                    <td class="ttl">Display</td>
                    <td class="nfo">Contrast ratio: Infinite (nominal), 4.498 (sunlight)</td>
                </tr><tr>
                    <td class="ttl">Camera</td>
                    <td class="nfo">Photo / Video</td>
                </tr><tr>
                    <td class="ttl">Loudspeaker</td>
                    <td class="nfo">Voice 82dB / Noise 74dB / Ring 85dB</td>
                </tr>
                <tr>
                    <td class="ttl">Audio quality</td>
                    <td class="nfo">Noise -92.2dB / Crosstalk -92.7dB</td>
                </tr>
                <tr>
                    <td class="ttl">Battery life</td>
                    <td class="nfo">Endurance rating 79h</td>
                </tr>
                <tr>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- footer -->
<footer class="site-footer">
    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved</p>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.menu-toggle').click(function () {
            $('nav').toggleClass('active')
        })
        $('ul li').click(function () {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
        })
    })
</script>
</body>
</html>
    <?php
}
else{
    header("Location: index.html");
}
?>
