<?php
function add($pdo, $table, $parameters)
{
    $query = "INSERT INTO `" . $table . "` (";
    foreach ($parameters as $key => $value) {
        $query .= "`$key`,";
    }
    $query = rtrim($query, ",");
    $query .= ") VALUES (";
    foreach ($parameters as $key => $value) {
        $query .= ":" . $key . ",";
    }
    ;
    $query = rtrim($query, ",");
    $query .= ")";
    $parameters = processDates($parameters);
    query($pdo, $query, $parameters);
}

//general purpose function
function query($pdo, $sql, $parameters = [])
{
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}
//formmated date
function processDates($fields)
{
    // Loop through the array of fields
    foreach ($fields as $key => $value) {
        // If any of the values are a DateTime object
        if ($value instanceof DateTime) {
            // Then replace the value in the array with the date
            $fields[$key] = $value->format('Y-m-d');
        }
    }
    return $fields;
}
