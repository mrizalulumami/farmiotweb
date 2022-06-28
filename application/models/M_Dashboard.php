<?php

class M_Dashboard extends CI_Model
{
    public function semua_devices()
    {
        $hasil = $this->db->query("SELECT * FROM devices");
		return $hasil->result_array();
    }
    public function count_devices()
	{
		$hasil = $this->db->query("SELECT COUNT(id) AS total_devices
		FROM devices WHERE statuses = 'online'");
		return $hasil->result_array();
	}

    public function count_device_by_name()
    {
        $hasil = $this->db->query("SELECT COUNT(*) AS total, nama_device
        FROM devices
        GROUP BY nama_device");
        return $hasil->result_array();
    }

    public function count_device_by_tahun()
    {
        $hasil = $this->db->query("SELECT COUNT(*) AS total, DATE_FORMAT(created_at, '%M') AS bulan
        FROM devices
        GROUP BY bulan DESC");
        return $hasil->result_array();
    }

    public function count_device_by_users()
    {
        $hasil = $this->db->query("SELECT a.id_users, b.fullname, b.status_user, Date_format(b.Created_At, '%d/%M/%Y') AS terdaftar, COUNT(*) AS tot_device
                                FROM devices AS a, users AS b
                                WHERE a.id_users = b.id AND b.status_user = 'active'
                                GROUP BY id_users");
        return $hasil->result_array();
    }
}