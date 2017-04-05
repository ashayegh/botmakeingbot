<html>
<head>
</head>
<body>
<div><h3 style="color:#06dbbf;">Loading...</h3></div>
</body>
</html>
<?php

/****** setup *********/
$api = "2d160d";
$name = "mango";

// script runs every specified seconds.
$reload_delay = "10";

// # of boxes to buy and process on each load.
// Increase reload delay if you increase this:
// it taske time to make all those api calls
$building_rate = 50;

/****** /setup *********/

$ones = array();
$twos = array();
$trees = array();

$bots_a1 = array();
$bots_b1 = array();
$bots_c1 = array();
$bots_m1 = array();
$bots_r1 = array();
$bots_w1 = array();

$bots_a2 = array();
$bots_b2 = array();
$bots_c2 = array();
$bots_m2 = array();
$bots_r2 = array();
$bots_w2 = array();

$bots_a3 = array();
$bots_b3 = array();
$bots_c3 = array();
$bots_m3 = array();
$bots_r3 = array();
$bots_w3 = array();

$tmpw1 = "";
$tmpw2 = "";
$tmpw3 = "";
$flag1 = false;
$flag2 = false;
$flag3 = false;

$tmpr1 = "";
$tmpr2 = "";
$tmpr3 = "";
$flag1r = false;
$flag2r = false;
$flag3r = false;

$tmpm1 = "";
$tmpm2 = "";
$tmpm3 = "";
$flag1m = false;
$flag2m = false;
$flag3m = false;

$tmpa1 = "";
$tmpa2 = "";
$tmpa3 = "";
$flag1a = false;
$flag2a = false;
$flag3a = false;

$tmpb1 = "";
$tmpb2 = "";
$tmpb3 = "";
$flag1b = false;
$flag2b = false;
$flag3b = false;

$tmpc1 = "";
$tmpc2 = "";
$tmpc3 = "";
$flag1c = false;
$flag2c = false;
$flag3c = false;

/******$apikey *********/
function getapi()
{
    global $api;
    return $api;
}

function write_this($txt)
{
    $rtxt = "<html><head></head><body><div><h2 style=\"color:#8461f6;\">$txt</h2></div></body></html>";
    echo $rtxt;
}

function write_this1($txt)
{
    $rtxt = "<html><head></head><body><div><h1 style=\"color:#1e71fc;\">$txt</h1></div></body></html>";
    echo $rtxt;
}

function write_thisr($txt)
{
    $rtxt = "<html><head></head><body><div><h3 style=\"color:#2fee80;\">$txt</h3></div></body></html>";
    echo $rtxt;
}

function write_thisa($txt)
{
    $rtxt = "<html><head></head><body><div><h3 style=\"color:#445522;\">$txt</h3></div></body></html>";
    echo $rtxt;
}

function write_thisb($txt)
{
    $rtxt = "<html><head></head><body><div><h3 style=\"color:#30549c;\">$txt</h3></div></body></html>";
    echo $rtxt;
}

function write_thisc($txt)
{
    $rtxt = "<html><head></head><body><div><h3 style=\"color:#b17b35;\">$txt</h3></div></body></html>";
    echo $rtxt;
}

function write_thism($txt)
{
    $rtxt = "<html><head></head><body><div><h3 style=\"color:#fc381e;\">$txt</h3></div></body></html>";
    echo $rtxt;
}

function write_thisw($txt)
{
    $rtxt = "<html><head></head><body><div><h2 style=\"color:#fc1e91;\">$txt</h2></div></body></html>";
    echo $rtxt;
}

/* Build parts */
function mybuilds()
{
    $apikey = getapi();

    $response = file_get_contents("https://umbrella.jlparry.com/work/mybuilds?key=" . $apikey);

    return $response;
}

/* recycle passed in parts*/
function recycle($p1, $p2, $p3)
{
    //get $apikey
    $apikey = getapi();

    $response = file_get_contents("https://umbrella.jlparry.com/work/recycle/" . $p1 . "/" . $p2 . "/" . $p3 . "?key=" . $apikey);

    return $response;
}

/* buy robot with passed in parts*/
function buymybot($p1, $p2, $p3)
{
    //get $apikey
    $apikey = getapi();

    $response = file_get_contents("https://umbrella.jlparry.com/work/buymybot/" . $p1 . "/" . $p2 . "/" . $p3 . "?key=" . $apikey);
    return $response;
    /*
    $build_responce = "string";
    $build_responce_array = explode(" ", $response);
    $build_responce = $build_responce_array[0];
    if ( $build_responce == "Ok"){
        return $response;
    }
    else{
        return 0;
    } */
}

/* buy box */
function buybox()
{
    //get $apikey
    $apikey = getapi();

    $response = file_get_contents("https://umbrella.jlparry.com/work/buybox?key=" . $apikey);

    return $response;
}

/* store part ids*/
function save_parts($array)
{

    global $ones;
    global $twos;
    global $trees;

    global $bots_a1;
    global $bots_b1;
    global $bots_c1;
    global $bots_m1;
    global $bots_r1;
    global $bots_w1;

    global $bots_a2;
    global $bots_b2;
    global $bots_c2;
    global $bots_m2;
    global $bots_r2;
    global $bots_w2;

    global $bots_a3;
    global $bots_b3;
    global $bots_c3;
    global $bots_m3;
    global $bots_r3;
    global $bots_w3;

    global $tmpw1;
    global $tmpw2;
    global $tmpw3;
    global $flag1;
    global $flag2;
    global $flag3;

    global $tmpr1;
    global $tmpr2;
    global $tmpr3;
    global $flag1r;
    global $flag2r;
    global $flag3r;

    global $tmpm1;
    global $tmpm2;
    global $tmpm3;
    global $flag1m;
    global $flag2m;
    global $flag3m;

    global $tmpa1;
    global $tmpa2;
    global $tmpa3;
    global $flag1a;
    global $flag2a;
    global $flag3a;

    global $tmpb1;
    global $tmpb2;
    global $tmpb3;
    global $flag1b;
    global $flag2b;
    global $flag3b;

    global $tmpc1;
    global $tmpc2;
    global $tmpc3;
    global $flag1c;
    global $flag2c;
    global $flag3c;

    /* Sort parts */
    foreach ($array as $key => $jsons) {
        $id = "1a";
        $model = "x";
        $part = 0;

        foreach ($jsons as $key => $value) {
            /* Check if a companion can be built*/
            if ($flag1 && $flag2 && $flag3) {
                write_thisw(" * Building a W bot!");
                $risposta = buymybot($tmpw1, $tmpw2, $tmpw3);
                print $risposta;
                write_this(" ");
                $flag1 = false;
                $flag2 = false;
                $flag3 = false;

                if (sizeof($bots_w1) == 1) {
                    $bots_w1 = array();
                } else {
                    array_pop($bots_w1);
                }
                if (sizeof($bots_w2) == 1) {
                    $bots_w2 = array();
                } else {
                    array_pop($bots_w2);
                }
                if (sizeof($bots_w3) == 1) {
                    $bots_w3 = array();
                } else {
                    array_pop($bots_w3);
                }
            }
            if ($flag1r && $flag2r && $flag3r) {
                write_thisr(" * Building an R bot!");
                $risposta = buymybot($tmpr1, $tmpr2, $tmpr3);
                print $risposta;
                write_this(" ");
                $flag1r = false;
                $flag2r = false;
                $flag3r = false;
                if (sizeof($bots_r1) == 1) {
                    $bots_r1 = array();
                } else {
                    array_pop($bots_r1);
                }
                if (sizeof($bots_r2) == 1) {
                    $bots_r2 = array();
                } else {
                    array_pop($bots_r2);
                }
                if (sizeof($bots_r3) == 1) {
                    $bots_r3 = array();
                } else {
                    array_pop($bots_r3);
                }
            }
            if ($flag1a && $flag2a && $flag3a) {
                write_thisa(" * Building an A bot!");
                $risposta = buymybot($tmpa1, $tmpa2, $tmpa3);
                print $risposta;
                write_this(" ");
                $flag1a = false;
                $flag2a = false;
                $flag3a = false;
                if (sizeof($bots_a1) == 1) {
                    $bots_a1 = array();
                } else {
                    array_pop($bots_a1);
                }
                if (sizeof($bots_a2) == 1) {
                    $bots_a2 = array();
                } else {
                    array_pop($bots_a2);
                }
                if (sizeof($bots_a3) == 1) {
                    $bots_a3 = array();
                } else {
                    array_pop($bots_a3);
                }
            }
            if ($flag1b && $flag2b && $flag3b) {
                write_thisb(" * Building a B bot!");
                $risposta = buymybot($tmpb1, $tmpb2, $tmpb3);
                print $risposta;
                write_this(" ");
                $flag1b = false;
                $flag2b = false;
                $flag3b = false;
                if (sizeof($bots_b1) == 1) {
                    $bots_b1 = array();
                } else {
                    array_pop($bots_b1);
                }
                if (sizeof($bots_b2) == 1) {
                    $bots_b2 = array();
                } else {
                    array_pop($bots_b2);
                }
                if (sizeof($bots_b3) == 1) {
                    $bots_b3 = array();
                } else {
                    array_pop($bots_b3);
                }
            }
            if ($flag1c && $flag2c && $flag3c) {
                write_thisc(" * Building a C bot!");
                $risposta = buymybot($tmpc1, $tmpc2, $tmpc3);
                print $risposta;
                write_this(" ");
                $flag1c = false;
                $flag2c = false;
                $flag3c = false;
                if (sizeof($bots_c1) == 1) {
                    $bots_c1 = array();
                } else {
                    array_pop($bots_c1);
                }
                if (sizeof($bots_c2) == 1) {
                    $bots_c2 = array();
                } else {
                    array_pop($bots_c2);
                }
                if (sizeof($bots_c3) == 1) {
                    $bots_c3 = array();
                } else {
                    array_pop($bots_c3);
                }
            }
            if ($flag1m && $flag2m && $flag3m) {
                write_thism(" * Building a M bot!");
                $risposta = buymybot($tmpm1, $tmpm2, $tmpm3);
                print $risposta;
                write_this(" ");
                $flag1m = false;
                $flag2m = false;
                $flag3m = false;

                if (sizeof($bots_m1) == 1) {
                    $bots_m1 = array();
                } else {
                    array_pop($bots_m1);
                }
                if (sizeof($bots_m2) == 1) {
                    $bots_m2 = array();
                } else {
                    array_pop($bots_m2);
                }
                if (sizeof($bots_m3) == 1) {
                    $bots_m3 = array();
                } else {
                    array_pop($bots_m3);
                }
            }

            /* sort parts */
            if ($key == 'id') {
                $id = $value;
            } else if ($key == 'model') {
                $model = $value;
            } else if ($key == 'piece') {
                $part = $value;
                if ($part == 1) {
                    $ones[] = $id;
                    switch ($model) {
                        case "a":
                            $bots_a1[] = $id;
                            $tmpa1 = $id;
                            $flag1a = true;
                            break;
                        case "b":
                            $bots_b1[] = $id;
                            $tmpb1 = $id;
                            $flag1b = true;
                            break;
                        case "c":
                            $bots_c1[] = $id;
                            $tmpc1 = $id;
                            $flag1c = true;
                            break;
                        case "m":
                            $bots_m1[] = $id;
                            $tmpm1 = $id;
                            $flag1m = true;
                            break;
                        case "r":
                            $bots_r1[] = $id;
                            $tmpr1 = $id;
                            $flag1r = true;
                            break;
                        case "w":
                            $bots_w1[] = $id;
                            $tmpw1 = $id;
                            $flag1 = true;
                            break;
                        default:
                            print "\n" . $id . " not found\n";
                    }
                } else if ($part == 2) {
                    $twos[] = $id;
                    switch ($model) {
                        case "a":
                            $bots_a2[] = $id;
                            $tmpa2 = $id;
                            $flag2a = true;
                            break;
                        case "b":
                            $bots_b2[] = $id;
                            $tmpb2 = $id;
                            $flag2b = true;
                            break;
                        case "c":
                            $bots_c2[] = $id;
                            $tmpc2 = $id;
                            $flag2c = true;
                            break;
                        case "m":
                            $bots_m2[] = $id;
                            $tmpm2 = $id;
                            $flag2m = true;
                            break;
                        case "r":
                            $bots_r2[] = $id;
                            $tmpr2 = $id;
                            $flag2r = true;
                            break;
                        case "w":
                            $bots_w2[] = $id;
                            $tmpw2 = $id;
                            $flag2 = true;
                            break;
                        default:
                            print "\n" . $id . " not found\n";
                    }
                } else if ($part == 3) {
                    $trees[] = $id;
                    switch ($model) {
                        case "a":
                            $bots_a3[] = $id;
                            $tmpa3 = $id;
                            $flag3a = true;
                            break;
                        case "b":
                            $bots_b3[] = $id;
                            $tmpb3 = $id;
                            $flag3b = true;
                            break;
                        case "c":
                            $bots_c3[] = $id;
                            $tmpc3 = $id;
                            $flag3c = true;
                            break;
                        case "m":
                            $bots_m3[] = $id;
                            $tmpm3 = $id;
                            $flag3m = true;
                            break;
                        case "r":
                            $bots_r3[] = $id;
                            $tmpr3 = $id;
                            $flag3r = true;
                            break;
                        case "w":
                            $bots_w3[] = $id;
                            $tmpw3 = $id;
                            $flag3 = true;
                            break;
                        default:
                            print "\n" . $id . " not found\n";
                    }
                }
            }
        }
    }
}

function build_a_bot()
{
    global $bots_a1;
    global $bots_a2;
    global $bots_a3;
    $count = 0;
    $max = 0;
    /*
    if (!$bots_a1 ||!$bots_a2 || !$bots_a3 ) {
        return false;
    }*/

    if (sizeof($bots_a1) > $max) {
        $max = sizeof($bots_a1);
    }
    if (sizeof($bots_a2) > $max) {
        $max = sizeof($bots_a2);
    }
    if (sizeof($bots_a3) > $max) {
        $max = sizeof($bots_a3);
    }

    for ($count = 0; $count < $max; $count++) {
        $rsp = "string";
        //$rsp = buymybot($bots_a1[$count],$bots_a2[$count],$bots_a3[$count]);

        $tmp1 = array_pop($bots_a1);
        $tmp2 = array_pop($bots_a2);
        $tmp3 = array_pop($bots_a3);
        buymybot($tmp1, $tmp2, $tmp3);
        /*
        $build_responce = "string";
        $build_responce_array = explode(" ", $rsp);
        $build_responce = $build_responce_array[0];
        if ($build_responce != "ok") {
            //print "\n. !unable to sell bot A! .\n";
            // DO PROCESSING HERE!
            // IF NOT BUILT, STORE IDS IN AN ARRAY TO STORE IN SESSION
        } else {
            print "\n. SOLD Bot A .\n";
        }*/
    }
}

function build_b_bot()
{
    global $bots_b1;
    global $bots_b2;
    global $bots_b3;
    $count = 0;
    $max = 0;


    if (sizeof($bots_b1) > $max) {
        $max = sizeof($bots_b1);
    }
    if (sizeof($bots_b2) > $max) {
        $max = sizeof($bots_b2);
    }
    if (sizeof($bots_b3) > $max) {
        $max = sizeof($bots_b3);
    }

    for ($count = 0; $count < $max; $count++) {
        $rsp = "string";
        //$rsp = buymybot($bots_b1[$count],$bots_b2[$count],$bots_b3[$count]);

        $tmp1 = array_pop($bots_b1);
        $tmp2 = array_pop($bots_b2);
        $tmp3 = array_pop($bots_b3);
        buymybot($tmp1, $tmp2, $tmp3);

    }

}

function build_c_bot()
{
    global $bots_c1;
    global $bots_c2;
    global $bots_c3;
    $count = 0;
    $max = 0;
    /*
    if (!$bots_c1 ||!$bots_c2 || !$bots_c3 ) {
        return false;
    }*/
    if (sizeof($bots_c1) > $max) {
        $max = sizeof($bots_c1);
    }
    if (sizeof($bots_c2) > $max) {
        $max = sizeof($bots_c2);
    }
    if (sizeof($bots_c3) > $max) {
        $max = sizeof($bots_c3);
    }

    for ($count = 0; $count < $max; $count++) {
        $rsp = "string";
        //$rsp = buymybot($bots_c1[$count],$bots_c2[$count],$bots_c3[$count]);

        $tmp1 = array_pop($bots_c1);
        $tmp2 = array_pop($bots_c2);
        $tmp3 = array_pop($bots_c3);
        buymybot($tmp1, $tmp2, $tmp3);
    }
}

function build_m_bot()
{
    global $bots_m1;
    global $bots_m2;
    global $bots_m3;
    $count = 0;
    $max = 0;

    if (sizeof($bots_m1) > $max) {
        $max = sizeof($bots_m1);
    }
    if (sizeof($bots_m2) > $max) {
        $max = sizeof($bots_m2);
    }
    if (sizeof($bots_m3) > $max) {
        $max = sizeof($bots_m3);
    }

    for ($count = 0; $count < $max; $count++) {
        $rsp = "string";
        //$rsp = buymybot($bots_m1[$count],$bots_m2[$count],$bots_m3[$count]);
        $tmp1 = array_pop($bots_m1);
        $tmp2 = array_pop($bots_m2);
        $tmp3 = array_pop($bots_m3);
        buymybot($tmp1, $tmp2, $tmp3);
    }
}

function build_r_bot()
{
    global $bots_r1;
    global $bots_r2;
    global $bots_r3;
    $count = 0;
    $max = 0;
    if (sizeof($bots_r1) > $max) {
        $max = sizeof($bots_r1);
    }
    if (sizeof($bots_r2) > $max) {
        $max = sizeof($bots_r2);
    }
    if (sizeof($bots_r3) > $max) {
        $max = sizeof($bots_r3);
    }

    for ($count = 0; $count < $max; $count++) {
        $rsp = "string";
        $tmp1 = array_pop($bots_r1);
        $tmp2 = array_pop($bots_r2);
        $tmp3 = array_pop($bots_r3);
        buymybot($tmp1, $tmp2, $tmp3);
        //$rsp = buymybot($bots_r1[$count],$bots_r2[$count],$bots_r3[$count]);
    }
}

function build_w_bot()
{
    global $bots_w1;
    global $bots_w2;
    global $bots_w3;
    $count = 0;
    $max = 0;

    if (sizeof($bots_w1) > $max) {
        $max = sizeof($bots_w1);
    }
    if (sizeof($bots_w2) > $max) {
        $max = sizeof($bots_w2);
    }
    if (sizeof($bots_w3) > $max) {
        $max = sizeof($bots_w3);
    }

    for ($count = 0; $count < $max; $count++) {
        $rsp = "string";
        $tmp1 = array_pop($bots_w1);
        $tmp2 = array_pop($bots_w2);
        $tmp3 = array_pop($bots_w3);
        buymybot($tmp1, $tmp2, $tmp3);
        //$rsp = buymybot($bots_r1[$count],$bots_r2[$count],$bots_r3[$count]);
    }
}

/* buys a box and builds as many robots as possible. the remaining parts get recycled.*/
function buy()
{
    global $ones;
    global $twos;
    global $trees;
    global $name;
    global $building_rate;
    global $tmpw1;
    global $tmpw2;
    global $tmpw3;

    /* loop to buy TIMES more boxes for increased chances of full robot builds*/
    // comment out if you dont have much $$
    $itr = 0;
    $TIMES = $building_rate;
    for ($itr = 0; $itr < $TIMES; $itr++) {
        /* Buy 1 box */
        write_this("Buying a box... ");
        $json = buybox();
        $array = json_decode($json);

        /* sort and store part ids of box*/
        save_parts($array);
    }

    //write_this1("Building Purebred Robots...");

    /* attempt to build purebred robot*/


    build_w_bot();
    build_a_bot();
    build_b_bot();
    build_c_bot();
    build_r_bot();
    build_m_bot();


    write_this1("Building Mix Robots...");

    /* make and sell bots in random combinations */
    /* make and sell bots in random combinations */
    $i = 0;
    $j = 0;
    foreach ($ones as $uno) {
        $rsp = "string";
        $rsp = buymybot($uno, $twos[$i], $trees[$j]);
        $i++;
        $j++;

        $build_responce = "string";
        $build_responce_array = explode(" ", $rsp);
        $build_responce = $build_responce_array[0];

        if ($build_responce != "Ok") {
            //print ". !notSOLD! .";
            // DO PROCESSING HERE!
            // IF NOT BUILT, STORE IDS IN AN ARRAY TO STORE IN SESSION
        } else {
            print ". SOLD and made $build_responce_array[1] .";
        }
        // ELSE
        // IF BUILT, DELETE THOSE IDS FROM ARRAYS
    }
    write_this1("Recycling remaining parts...");
    /* Return remaining parts*/

    $i = 0;
    $j = 0;
    $fori = 0;
    for ($fori = 0; $fori < sizeof($ones); $fori = $fori + 3) {
        $yek = $ones[$fori];
        $dow = 0;
        $seh = 0;
        if (sizeof($ones) >= ($fori + 1)) {
            $dow = $ones[$fori + 1];
        }
        if (sizeof($ones) >= ($fori + 2)) {
            $seh = $ones[$fori + 2];
        }

        recycle($yek, $dow, $seh);
    }
    $fori = 0;
    for ($fori = 0; $fori < sizeof($twos); $fori = $fori + 3) {
        $yek = $twos[$fori];
        $dow = 0;
        $seh = 0;
        if (sizeof($twos) >= $fori + 1) {
            $dow = $twos[$fori + 1];
        }
        if (sizeof($twos) >= $fori + 2) {
            $seh = $twos[$fori + 2];
        }
        recycle($yek, $dow, $seh);
    }
    $fori = 0;
    for ($fori = 0; $fori < sizeof($trees); $fori = $fori + 3) {
        $yek = $trees[$fori];
        $dow = 0;
        $seh = 0;
        if (sizeof($trees) >= $fori + 1) {
            $dow = $trees[$fori + 1];
        }
        if (sizeof($trees) >= $fori + 2) {
            $seh = $trees[$fori + 2];
        }
        recycle($yek, $dow, $seh);
    }
    /*
    foreach($ones as $un) {
        $yek = $un;
        $dow = $twos[$i];
        $seh = $trees[$j];
        recycle($ye,$dow,$seh);
        $i++;
        $j++;
    }
    foreach($twos as $un) {
        $rsp_2 = recycle($un, $un, $un);
    }
    foreach($trees as $un) {
        $rsp_3 = recycle($un, $un, $un);
    }
    */
    /*
    $r1 = array_merge($lefover1, $ones);
    $r2 = array_merge($lefover2, $twos);
    $r3 = array_merge($lefover3, $trees);
    */
}

write_this1("Building and Recycling factory parts...");
/* Build and recycle parts specific to own factory*/
$json = mybuilds();
$jsonIterator = new RecursiveIteratorIterator(new RecursiveArrayIterator(json_decode($json, TRUE)), RecursiveIteratorIterator::SELF_FIRST);
$array = array();
foreach ($jsonIterator as $key => $val) {
    if (is_array($val)) {
    } else {
        if ($key == "id") {
            $array[] = $val;
        }
        if (sizeof($array) > 2) {
            $c1 = $array[0];
            $c2 = $array[1];
            $c3 = $array[2];
            recycle($c1, $c2, $c3);
            $array = array();
        }
    }
}

write_this1("Buying boxes...");
/* Buy box and build bots*/
buy();

/* Auto reload page */
$page = $_SERVER['PHP_SELF'];

/* Reload delay*/
$sec = $reload_delay;
write_this("Done. Current factory stats: ");
/* print current factory stats */
print file_get_contents("https://umbrella.jlparry.com/info/scoop/$name");
?>
<html>

<head>
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
</head>

<body>
<div>
    <h3>
        <?php
        echo "rebuilding in $sec secconds";
        ?>
    </h3>
</div>
</body>

</html>
