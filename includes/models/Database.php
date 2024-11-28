<?php

namespace Referat;

class Database
{

    private $sqlite;

    public function __construct($path)
    {
        $this->sqlite = new \SQLite3($path);
    }

    public function getPlantData($plantID)
    {
    }

    public function getThreePlants($page = 1){
        $offset = ($page - 1) * 3;
        $query = "SELECT * FROM plants LIMIT 3 OFFSET $offset";
        $stmt = $this->sqlite->prepare($query);
        $result = $stmt->execute();
        $plants = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $plants[] = $row;
        }
        return $plants;
    }

    public function getCount(){
        $query = "SELECT COUNT(*) FROM plants";
        $stmt = $this->sqlite->prepare($query);
        $result = $stmt->execute();
        $count = $result->fetchArray(SQLITE3_ASSOC);
        return $count['COUNT(*)'];
    }

    public function writePlantData($data)
    {
        $query = "INSERT INTO plants (name, min_temperature, max_temperature, current_temperature, min_water, max_water, current_water, latitude, longitude) VALUES (:name, :min_temperature, :max_temperature, :current_temperature, :min_water, :max_water, :current_water, :latitude, :longitude)";

        $stmt = $this->sqlite->prepare($query);

        $stmt->bindValue(':name', $data['name'], SQLITE3_TEXT);
        $stmt->bindValue(':min_temperature', $data['min_temperature'], SQLITE3_FLOAT);
        $stmt->bindValue(':max_temperature', $data['max_temperature'], SQLITE3_FLOAT);
        $stmt->bindValue(':current_temperature', $data['current_temperature'], SQLITE3_FLOAT);
        $stmt->bindValue(':min_water', $data['min_water'], SQLITE3_FLOAT);
        $stmt->bindValue(':max_water', $data['max_water'], SQLITE3_FLOAT);
        $stmt->bindValue(':current_water', $data['current_water'], SQLITE3_FLOAT);
        $stmt->bindValue(':latitude', $data['latitude'], SQLITE3_FLOAT);
        $stmt->bindValue(':longitude', $data['longitude'], SQLITE3_FLOAT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}