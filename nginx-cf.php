<?php
    header('Content-Type: text/plain');
?>
# Generated with nginx-cf by @theel0ja
# https://theel0ja.github.io/nginx-cf
<?php
    $ipv4 = file_get_contents("https://www.cloudflare.com/ips-v4");
    $ipv6 = file_get_contents("https://www.cloudflare.com/ips-v6");
    
    $ipv4 = explode("\n", $ipv4);
    $ipv6 = explode("\n", $ipv6);

    foreach($ipv4 as $i) {
        if($i != "") {
            echo "set_real_ip_from ". $i . ";\n";
        }
    }

    foreach($ipv6 as $i) {
        if($i != "") {
            echo "set_real_ip_from ". $i . ";\n";
        }
    }
    
?>
real_ip_header CF-Connecting-IP;
