<?php
class Product
{

    private $conn;

    // Note: update table names, column names in here
    public $product_table               = 'tbl_products';
    public $sport_table               = 'tbl_sport';
    public $product_sport_linking_table = 'tbl_products_sport';

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getProduct()
    {
        //TODO:write the SQL query that returns all products from the tbl_products table
        // $query = 'SELECT * FROM '.$this->product_table;


        //TODO:write the SQL query that returns all products with its sport
        $query = 'SELECT m.*, GROUP_CONCAT(g.sport_name) as sport_name FROM ' . $this->product_table . ' m';
        $query .= ' LEFT JOIN ' . $this->product_sport_linking_table . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->sport_table . ' g ON link.sport_id = g.sport_id ';
        $query .= ' GROUP BY m.product_id';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    public function getProductBySport($sport){
        $query = 'SELECT m.*, GROUP_CONCAT(g.sport_name) as sport_name FROM ' . $this->product_table . ' m';
        $query .= ' LEFT JOIN ' . $this->product_sport_linking_table . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->sport_table . ' g ON link.sport_id = g.sport_id ';
        $query .= ' GROUP BY m.product_id';
        $query .= ' HAVING sport_name LIKE "%'.$sport.'%"';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }

    public function getProductByID($id)
    {
        $query = 'SELECT m.*, GROUP_CONCAT(g.sport_name) as sport_name FROM ' . $this->product_table . ' m';
        $query .= ' LEFT JOIN ' . $this->product_sport_linking_table . ' link ON link.product_id = m.product_id';
        $query .= ' LEFT JOIN ' . $this->sport_table . ' g ON link.sport_id = g.sport_id ';
        $query .= ' WHERE m.product_id=' . $id;
        $query .= ' GROUP BY m.product_id';

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;
    }
}
