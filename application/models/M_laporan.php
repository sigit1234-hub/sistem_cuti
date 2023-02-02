<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{
    function getTahun()
    {
        $query = $this->db->query("SELECT YEAR(tanggal) AS tahun FROM spl GROUP BY YEAR(tanggal) ORDER BY YEAR(tanggal) DESC");
        return $query->result();
    }
    function filterbytanggal($tanggalawal, $tanggalakhir)
    {
        $query = $this->db->query("SELECT * FROM spl WHERE tanggal BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal DESC");
        return $query->result();
    }
    function filterbybulan($tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT * FROM spl WHERE YEAR(tanggal) = '$tahun1' and MONTH(tanggal) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tanggal DESC");
        return $query->result();
    }
    function filterbytahun($tahun2)
    {
        $query = $this->db->query("SELECT * FROM spl WHERE YEAR(tanggal) = '$tahun2' ORDER BY id DESC");
        return $query->result();
    }
}
