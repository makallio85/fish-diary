<?php
use Migrations\AbstractMigration;

class CreateFishingPlaceTypes extends AbstractMigration
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
        $table = $this->table('fishing_place_types');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'name',
        ], [
            'name' => 'BY_NAME',
            'unique' => false,
        ]);
        $table->addIndex([
            'created',
        ], [
            'name' => 'BY_CREATED',
            'unique' => false,
        ]);
        $table->addIndex([
            'modified',
        ], [
            'name' => 'BY_MODIFIED',
            'unique' => false,
        ]);
        $table->create();
    }
}
