<?php


use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentitiesTable extends Migration
{

    /**
     * The name of the database connection to use.
     *
     * @var string
     */
    protected $connection = 'mongodb';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function($collection)
        {
            $collection->index('id');
            $collection->string('first');
            $collection->string('last');
            $collection->unique('email');
            $collection->string('address');
            $collection->string('phone');
        });

    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)
            ->table('identities', function (Blueprint $collection)
            {
                $collection->drop();
            });
    }
}
