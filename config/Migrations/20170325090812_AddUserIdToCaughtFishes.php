<?php
use Migrations\AbstractMigration;

class AddUserIdToCaughtFishes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('caught_fishes');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addIndex([
            'user_id',
        ], [
            'name' => 'BY_USER_ID',
            'unique' => false,
        ]);
        $table->update();
    }
}
