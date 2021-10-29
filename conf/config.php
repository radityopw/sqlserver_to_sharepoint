<?php 

// konfigurasi tabel
$table = "mahasiswa";
$schema = "dbo";
$schema_cdc = "cdc_sharepoint";
$pk = "id";
$redis_prefix = $table;
$where_condition = "WHERE 1=1";
$select_cols = "*";

// koneksi ke database 
$dsn = 'sqlsrv:Database=sync_sharepoint;Server=127.0.0.1';
$user = 'sync_sharepoint';
$password = 'sync_sharepoint';

// koneksi ke sharepoint 
$sharepoint_server = "https://itsacid.sharepoint.com/sites/TestingSite";
$sharepoint_wsdl = $sharepoint_server."/_vti_bin/Lists.asmx?wsdl";
$sharepoint_user = getenv("SHAREPOINT_USER");
$sharepoint_pass = getenv("SHAREPOINT_PASS");
