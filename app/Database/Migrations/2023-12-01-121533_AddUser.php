<?php
 
namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class AddUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 255,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'fName' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'mName' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'lName' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'unique' => true,
                'constraint' => '255',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'birthday' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'contactNumber' => [
                'type' => 'BIGINT',
                'constraint' => 255,
                'unsigned' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }
 
    public function down()
    {
        $this->forge->dropTable('users');
    }
}