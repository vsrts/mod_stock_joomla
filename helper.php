<?php

class ModStockHelper{
	
    public static function getStock($params){
        $config = new JConfig();
        $main_db = $config->db;

        $db =JFactory::getDBO();
        $vs = new VslibVs();
        $database_name = $vs->getDbName();

        $database_name = 'multishop'; //delete on production

        if ($db->select($database_name)) {

            $query = "SELECT image, text
                        FROM stock
                        LEFT JOIN city_stock ON city_stock.stock_id=stock.id
                        LEFT JOIN cities ON city_stock.city_id=cities.id
                        WHERE cities.subdomain = '" . $params . "' ORDER BY sort ASC"
;

            $db->setQuery($query);
            $results = $db->loadObjectList();

            $db->select($main_db);

            return $results;


        }

    }
}
