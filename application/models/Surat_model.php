<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    private const STATUS_GATEPASS = [
        0 => 'Belum Approve HSSE',
        1 => 'Approve HSSE',
        2 => 'Approve MPS',
        3 => 'Approve FTM',
    ];

    protected $casts = [
        'id' => 'int',
        'status' => 'int',
    ];

    protected $hidden = [
        'nama_barang',
        'unit',
        'jumlah',
        'foto',
        'app_mps',
        'app_hsse',
        'app_ftm',
    ];

    public function addGatepassmasuk($data)
    {
        $this->db->insert('gatepassmasuk', $data);
    }

    public function addGatepasskeluar($data)
    {
        $this->db->insert('gatepasskeluar', $data);
    }

    function getLastNumber($month, $year) {
        return $this->db
            ->query("SELECT COUNT(*) AS total FROM gatepassmasuk WHERE MONTH(tanggal_dibuat) = ? AND YEAR(tanggal_dibuat) = ?", [$month, $year])
            ->row()
            ->total;
    }

    public function getByNo($no)
    {
        $res = $this->db->get_where('gatepassmasuk', ['no_gatepass' => $no])->row_array();
        if (!$res) {
            return null;
        }

        $this->casts($res);

        $nama_barang = explode(',', $res['nama_barang']);
        $unit = explode(',', $res['unit']);
        $jumlah = explode(',', $res['jumlah']);
        $foto = explode(',', $res['foto']);

        $res['status_text'] = self::STATUS_GATEPASS[$res['status']];

        $res['approve_hsse'] = $res['app_hsse'] === '0' ? null : carbon_parse($res['app_hsse']);
        $res['approve_mps'] = $res['app_mps'] === '0' ? null : carbon_parse($res['app_mps']);
        $res['approve_ftm'] = $res['app_ftm'] === '0' ? null : carbon_parse($res['app_ftm']);

        $res['barang'] = [];
        foreach ($nama_barang as $i => $n) {
            $res['barang'][] = [
                'nama' => $n,
                'unit' => $unit[$i],
                'jumlah' => $jumlah[$i],
                'foto' => base_url('/assets/upload/' . $foto[$i]),
                'foto_original' => $foto[$i],
            ];
        }

        foreach ($this->hidden as $key) {
            unset($res[$key]);
        }

        return $res;
    }

    private function casts(&$data)
    {
        foreach ($this->casts as $key => $type) {
            if ($type == 'int') {
                $data[$key] = (int) $data[$key];
            }
        }
    }
}
