<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataDiri extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'             => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama_lengkap'   => ['type' => 'varchar', 'constraint' => 255, 'null' => 0],
            'social_media'   => ['type' => 'varchar', 'constraint' => 155, 'null' => true],
            'social_media2'   => ['type' => 'varchar', 'constraint' => 155, 'null' => true],
            'ktp'            => ['type' => 'blob', 'null' => 0],
            'ktp_selfie'     => ['type' => 'blob', 'null' => 0],
            'hp_kerabat'     => ['type' => 'varchar', 'constraint' => 20,  'null' => true],
            'updated_at'     => ['type' => 'datetime', 'null' => true],
            'deleted_at'     => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        // $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->createTable('data_diris', true);
    }

    public function down()
    {
        //
        $this->db->disableForeignKeyChecks();

        $this->forge->dropTable('data_diris', true);

        $this->db->enableForeignKeyChecks();
    }
}
