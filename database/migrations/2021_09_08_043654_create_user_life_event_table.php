<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLifeEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `user_life_event` (
            `id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `user_id` int(10) UNSIGNED NOT NULL,
            `life_event` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
            `event_year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `event_month` int(255) DEFAULT NULL,
            `event_type` tinyint(1) DEFAULT NULL COMMENT '0 = High Point , 1 = Low Point',
            `fidelity_score` tinyint(11) NOT NULL DEFAULT '-1',
            `standard` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            `school_approved` int(255) NOT NULL DEFAULT '0',
            `achievement_id` int(255) NOT NULL DEFAULT '0'
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;"
        );
        DB::statement("ALTER TABLE `user_life_event`
        ADD CONSTRAINT `user_life_event_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_life_event');
    }
}
