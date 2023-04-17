<?php
class ItemOwners
{
    public static function groupByOwners($itemsArr)
    {
        $result = array();
        foreach ($itemsArr as $item => $owner) {
            if (array_key_exists($owner, $result)) {
                array_push($result[$owner], $item);
            } else {
                $result[$owner] = array($item);
            }
        }
        return $result;
    }
}

$ItemsArr = array(
    "Baseball Bat" => "John",
    "Golf ball" => "Stan",
    "Tennis Racket" => "John"
);

echo json_encode(ItemOwners::groupByOwners($ItemsArr));


?>
