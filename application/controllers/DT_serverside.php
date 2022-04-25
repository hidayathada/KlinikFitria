<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class DT_serverside extends CI_Controller { 
    
    public function pasien(){
        
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'pasien';
 
// Table's primary key
$primaryKey = 'idpasien';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$no =1;

$columns = array(
    array( 'db' => 'idpasien', 'dt' => 0 ),
    array( 'db' => 'nama', 'dt' => 1 ),
    array( 'db' => 'alamat',  'dt' => 2 ),
    array( 'db' => 'tgllahir',   'dt' => 3 ),
    array( 'db' => 'notelp',     'dt' => 4 ),
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'db_klinik_fitria',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
// require( 'ssp.class.php' );
    $this->load->library("ssp.php");
 
    echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
}
    public function obat(){
        
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'obat';
 
// Table's primary key
$primaryKey = 'idobat';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'idobat', 'dt' => 0 ),
    array( 'db' => 'nama', 'dt' => 1 ),
    array( 'db' => 'harga',  'dt' => 2 )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'db_klinik_fitria',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
// require( 'ssp.class.php' );
    $this->load->library("ssp.php");
 
    echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
}
    public function tindakan(){
        
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'tindakan';
 
// Table's primary key
$primaryKey = 'idtindakan';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'idtindakan', 'dt' => 0 ),
    array( 'db' => 'namatindakan', 'dt' => 1 ),
    array( 'db' => 'biaya',  'dt' => 2 )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'db_klinik_fitria',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
// require( 'ssp.class.php' );
    $this->load->library("ssp.php");
 
    echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
}
    
    public function rawat(){

    $this->load->model('Rawatmodel');
    
    // DB table to use
    $table = 'rawat';
    $sJoin = "INNER JOIN pasien ON (rawat.idpasien = pasien.idpasien)";
    $joinQuery = "FROM `{$table}` AS `c` LEFT JOIN `currency_names` AS `cn` ON (`cn`.`id` = `c`.`id_currency`)";
    // $extraCondition = "`id_client`=".$ID_CLIENT_VALUE;

    
    // Table's primary key
    $primaryKey = 'idrawat';
        
    // Array of database columns which should be read and sent back to DataTables.
    // The `db` parameter represents the column name in the database, while the `dt`
    // parameter represents the DataTables column identifier. In this case simple
    // indexes
    $no=0;
    $columns = array(
        array( 'db' => 'idrawat', 'dt' => 0 ),
        array( 'db' => 'tglrawat', 'dt' => 1 ),
        array( 'db' => 'totaltindakan',  'dt' => 2 ),
        array( 'db' => 'totalobat',   'dt' => 3 ),
        array( 'db' => 'totalharga',     'dt' => 4 ),
        array( 'db' => 'uangmuka',     'dt' => 5 ),
        array( 'db' => 'kurang',     'dt' => 6 ),
        array( 'db' => 'kurang',     'dt' => 7 ),
        // array( 'db' => 'nama',     'dt' => 4 ),
    );
    
    // SQL server connection information
    $sql_details = array(
        'user' => 'root',
        'pass' => '',
        'db'   => 'db_klinik_fitria',
        'host' => 'localhost'
    );
    
    
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * If you just want to use the basic configuration for DataTables with PHP
     * server-side, there is no need to edit below this line.
     */
    
    // require( 'ssp.class.php' );
        $this->load->library("ssp.php");
    
        echo json_encode(
        SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
    );
}
}