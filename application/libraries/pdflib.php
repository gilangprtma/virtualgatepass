<?php
require_once dirname(__FILE__).'/tcpdf-main/tcpdf.php';

class Pdflib extends TCPDF{
    function __construct() {
        parent::__construct();
    }
}
?>