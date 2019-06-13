<?php
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 */

// -------------------------------------------------------------------------------------------------

namespace app\Models;

use app\Core\ModelClass;

class Home extends ModelClass
{
	public function lihatbuah($value='')
	{
		$this->_db->where("id_admin = '2'");
		$this->_db->table('buah');
		return $this->_db->fetch();
	}

	public function datasiswa()
	{
		$siswa['nama'] = 'Ridatul Zannah';
		$siswa['kelas'] = 'XII';
		$siswa['alamat'] = 'Cisayong';

		return $siswa;
	}

	public function daftarkategori()
	{
		$this->_db->table('tb_kategori');
		return $this->_db->fetch();
	}
}