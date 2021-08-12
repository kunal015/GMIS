<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `user_school` (
            `id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `school_name` varchar(255) DEFAULT NULL,
            `stream` varchar(255) DEFAULT NULL,
            `standard` varchar(255) DEFAULT NULL,
            `school_id` varchar(255) DEFAULT NULL,
            `user_id` int(255) DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            `deleted_at` timestamp NULL DEFAULT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
          ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_school');
    }
}
