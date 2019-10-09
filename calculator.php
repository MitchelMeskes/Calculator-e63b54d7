<?php






echo "Welke operatie wil je uitvoeren? (+, -)\n";
    $uitvoering = readline();
if ($uitvoering === '+' || $uitvoering === '-'){
}
else {
    echo "NO!";
    return;
}
echo "Eerste getal?\n";
    $cijfer1 = readline();
echo "Tweede getal?\n";
    $cijfer2 = readline();

echo "Uw rekensom: $cijfer1 $uitvoering $cijfer2" . PHP_EOL;

if ($uitvoering === '+') {
    $uitkomst = $cijfer1 + $cijfer2;
}
elseif ($uitvoering === '-'){
    $uitkomst = $cijfer1 - $cijfer2;
}

echo "uitkomst: $uitkomst"



?>