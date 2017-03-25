<?php
use Migrations\AbstractMigration;

class CreateCaughtFishNotes extends AbstractMigration
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
        $table = $this->table('caught_fish_notes');
        $table->addColumn('caught_fish_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ]);
        $table->addColumn('note', 'text', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addIndex([
            'caught_fish_id',
        ], [
            'name'   => 'BY_CAUGHT_FISH_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'note',
        ], [
            'name'   => 'BY_NOTE',
            'unique' => false,
        ]);
        $table->addIndex([
            'created',
        ], [
            'name'   => 'BY_CREATED',
            'unique' => false,
        ]);
        $table->addIndex([
            'modified',
        ], [
            'name'   => 'BY_MODIFIED',
            'unique' => false,
        ]);
        $table->create();
    }
}
