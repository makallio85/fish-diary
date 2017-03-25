<?php
use Migrations\AbstractMigration;

class AddCaughtFishIdToCaughtFishPhotos extends AbstractMigration
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
        $table = $this->table('caught_fish_photos');
        $table->addColumn('caught_fish_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ]);
        $table->addIndex([
            'caught_fish_id',
        ], [
            'name'   => 'BY_CAUGHT_FISH_ID',
            'unique' => false,
        ]);
        $table->update();
    }
}
