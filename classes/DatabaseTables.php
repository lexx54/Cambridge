<?php
class DatabaseTables
{
    private $pdo;
    private $table;

    public function _construc(PDO $pdo, string $table)
    {
        $this->$pdo = $pdo;
        $this->$table = $table;
    }

    private function query($sql, $parameters = [])
    {
        $query = $this->$pdo->prepare($sql);
        $query->execute($parameters);
        return $query;
    }

    public function add($parameters)
    {
        $query = "INSERT INTO `" . $this->$table . "` (";
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
        $parameters = $this->processDates($parameters);
        $this->query($query, $parameters);
    }
    private function processDates($fields)
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
}
