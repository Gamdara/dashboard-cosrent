<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengiriman extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'             => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'datadiri_id'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'nama_penerima'  => ['type' => 'varchar', 'constraint' => 255, 'null' => 0],
            'kostum'         => ['type' => 'varchar', 'constraint' => 255, 'null' => 0],
            'alamat'         => ['type' => 'text', 'null' => 0],
            'no_hp'          => ['type' => 'varchar', 'constraint' => 20,  'null' => 0],
            'jenis_payment'  => ['type' => 'varchar', 'constraint' => 20, 'null' => 0],
            'tanggal_sewa'   => ['type' => 'datetime', 'null' => 0],
            'updated_at'     => ['type' => 'datetime', 'null' => true],
            'deleted_at'     => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('datadiri_id', 'data_diris', 'id', '', 'CASCADE');
        $this->forge->createTable('pengirimans', true);

    }

    public function down()
    {
        //
        $this->db->disableForeignKeyChecks();

        $this->forge->dropTable('pengirimans', true);

        $this->db->enableForeignKeyChecks();
    }
}
