<?php
class ItemOwners{
    static function groupByOwners($ItemsArr){
        $ArrResult = array();
        foreach ($ItemsArr as $Item => $Owner) {
            if (array_key_exists($Owner, $ArrResult)) {
                array_push($ArrResult[$Owner], $Item);
            } else {
                $ArrResult[$Owner] = array($Item);
            }
        }
        return $ArrResult;
    }
}

$ItemsArr = array(
    "Baseball Bat" => "John",
    "Stan" => "Cap",
    "Golf ball" => "Stan",
    "Tennis Racket" => "John",
    "Squash Racket" => "John",
    "Squash Racket" => "Stan"
);

echo json_encode(ItemOwners::groupByOwners($ItemsArr));
//Coding Standards
?>
