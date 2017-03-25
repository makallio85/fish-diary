<?php
use Migrations\AbstractMigration;

class AddFishingPlaceTyopeIdToFishingPlaces extends AbstractMigration
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
        $table = $this->table('fishing_places');
        $table->addColumn('fishing_place_type_id', 'integer', [
            'default' => null,
            'limit'   => 11,
            'null'    => false,
        ]);
        $table->addIndex([
            'fishing_place_type_id',
        ], [
            'name'   => 'BY_FISHING_PLACE_TYPE_ID',
            'unique' => false,
        ]);
        $table->update();
    }
}
