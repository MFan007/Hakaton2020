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
        <div class="sidebar"><p>Xiaomi Redmi K30</p>
            <img src="images/content30.jpg" alt="Xiaomi Redmi K30" width="160" height="212">
        </div>
        <div id="specs-list">
            <table cellspacing="0">
                <tr class="tr-hover">
                    <th rowspan="15" scope="row">Network</th>
                    <td class="ttl">Technology</td>
                    <td class="nfo">GSM / HSPA / LTE</td>
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
                    <td class="nfo"> HSDPA 850 / 900 / 1900 / 2100 </td>
                </tr>
                <tr class="tr-toggle" data-spec-optional>
                    <td class="ttl">&nbsp;</td>
                    <td class="nfo">HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100 - Canada</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl">4G bands</a></td>
                    <td class="nfo">LTE band 1(2100), 3(1800), 5(850), 7(2600), 8(900), 20(800), 38(2600), 40(2300), 41(2500)</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl"></td>
                    <td class="nfo">LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 12(700), 13(700), 17(700), 20(800), 26(850), 29(700), 38(2600), 40(2300), 41(2500), 66(1700/2100), 71(600) - Canada</td>
                </tr>
                <tr class="tr-toggle">
                    <td class="ttl">Speed</a></td>
                    <td class="nfo">HSPA, LTE-A</td>
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
                    <td class="nfo">Available. Released 2019, April</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="6">Body</th>
                    <td class="ttl">Dimensions</td>
                    <td class="nfo">164.3 x 76.7 x 7.9 mm (6.47 x 3.02 x 0.31 in)</td>
                </tr><tr>
                    <td class="ttl">Weight</td>
                    <td class="nfo">183 g (6.46 oz)</td>
                </tr>
                <tr>
                    <td class="ttl">Build</td>
                    <td class="nfo">Glass front (Gorilla Glass 3), plastic back, plastic frame</td>
                </tr>
                <tr>
                    <td class="ttl">SIM</td>
                    <td class="nfo">Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)</td>
                </tr>
                <tr><td class="ttl">&nbsp;</td><td class="nfo"></td></tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="5">Display</th>
                    <td class="ttl">Type</td>
                    <td class="nfo">Super AMOLED capacitive touchscreen, 16M colors</td>
                </tr>
                <tr>
                    <td class="ttl">Size</td>
                    <td class="nfo">6.7 inches, 108.4 cm<sup>2</sup> (~84.9% screen-to-body ratio)</td>
                </tr>
                <tr>
                    <td class="ttl">Resolution</td>
                    <td class="nfo">1080 x 2400 pixels, 20:9 ratio (~393 ppi density)</td>
                </tr>
                <tr>
                    <td class="ttl">Protection</td>
                    <td class="nfo">Corning Gorilla Glass 3</td>
                </tr>
                <tr><td class="ttl">&nbsp;</td><td class="nfo">HDR10+<br />
                        Always-on display</td></tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="4">Platform</th>
                    <td class="ttl">OS</td>
                    <td class="nfo">Android 9.0 (Pie); One UI</td>
                </tr>
                <tr><td class="ttl">Chipset</td>
                    <td class="nfo">Qualcomm SDM675 Snapdragon 675 (11 nm)</td>
                </tr>
                <tr><td class="ttl">CPU</td>
                    <td class="nfo">Octa-core (2x2.0 GHz Kryo 460 Gold & 6x1.7 GHz Kryo 460 Silver)</td>
                </tr>
                <tr><td class="ttl">GPU</td>
                    <td class="nfo">Mali-G72 MP3</td>
                </tr>
            </table>


            <table cellspacing="0">
                <tr>
                    <th rowspan="5">Memory</th>
                    <td class="ttl">Card slot</td>
                    <td class="nfo">microSDXC (dedicated slot) 	</td></tr>
                <tr>
                    <td class="ttl">Internal</td>
                    <td class="nfo">128GB 6GB RAM, 128GB 8GB RAM</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="4"  >Main Camera</th>
                    <td class="ttl">Triple</td>
                    <td class="nfo">32 MP, f/1.7, 26mm (wide), 1/2.8", 0.8µm, PDAF<br />
                        8 MP, f/2.2, 12mm (ultrawide), 1/4.0", 1.12µm<br />
                        5 MP, f/2.2, 1/5.0", 1.12µm, depth sensor</td>
                </tr>
                <tr>
                    <td class="ttl">Features</td>
                    <td class="nfo">LED flash, panorama, HDR</td>
                </tr>
                <tr>
                    <td class="ttl">Video</a></td>
                    <td class="nfo">2160p@30fps, 1080p@30/240fps</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="4">Selfie camera</th>
                    <td class="ttl">Single</td>
                    <td class="nfo">32 MP, f/2.0, 26mm (wide), 1/2.8", 0.8µm</td>
                </tr>
                <tr>
                    <td class="ttl">Features</td>
                    <td class="nfo">HDR</td>
                </tr>
                <tr>
                    <td class="ttl">Video</td>
                    <td class="nfo">1080p@30fps</td>
                </tr>
            </table>
            <table cellspacing="0">
                <tr>
                    <th rowspan="3">Sound</th>
                    <td class="ttl">Loudspeaker</td>
                    <td class="nfo">Yes</td>
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
                    <td class="nfo">2.0, Type-C 1.0 reversible connector, USB On-The-Go</td>
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
                    <td class="nfo">ANT+<br /></td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="7">Battery</th>
                    <td class="ttl">&nbsp;</td>
                    <td class="nfo">Non-removable Li-Ion 4000 mAh battery</td>
                </tr>
                <tr>
                    <td class="ttl">Charging</td>
                    <td class="nfo">Fast battery charging 15W<br /></td>
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
                    <td class="nfo">&nbsp;</td>
                </tr>
                <tr>
                    <td class="ttl">SAR EU</td>
                    <td class="nfo">0.35 W/kg (head) &nbsp; &nbsp; 1.48 W/kg (body) &nbsp; &nbsp; </td>
                </tr>
                <tr>
                    <td class="ttl">Price</td>
                    <td class="nfo">&#36;&thinsp;282.98 / &#8364;&thinsp;324.99 / &#163;&thinsp;260.16 / &#8377;&thinsp;20.590</td>
                </tr>
            </table>

            <table cellspacing="0">
                <tr>
                    <th rowspan="6">Tests</th>
                    <td class="ttl">Performance</td>
                    <td class="nfo">
                        <a class="noUnd">Basemark OS II: 2292 / Basemark OS II 2.0: 2209<br>Basemark X: 19106</td>
                </tr><tr>

                    <td class="ttl">Display</td>
                    <td class="nfo">Contrast ratio: Infinite (nominal)</td>
                </tr><tr>
                    <td class="ttl">Camera</td>
                    <td class="nfo">Photo / Video</td>
                </tr><tr>
                    <td class="ttl">Loudspeaker</td>
                    <td class="nfo">Voice 68dB / Noise 71dB / Ring 82dB</td>
                </tr>
                <tr>
                    <td class="ttl">Audio quality</td>
                    <td class="nfo">Noise -95.4dB / Crosstalk -93.3dB</td>
                </tr>
                <tr>
                    <td class="ttl">Battery life</td>
                    <td class="nfo">Endurance rating 104h</td>
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
