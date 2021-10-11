<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `user_achievements`(
            `id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `user_id` int(10) UNSIGNED NOT NULL,
            `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
            `company_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
            `strength` text COLLATE utf8_unicode_ci,
            `company_detaill` text COLLATE utf8_unicode_ci DEFAULT NULL,
            `company_detail` text COLLATE utf8_unicode_ci DEFAULT NULL,
            `type` tinyint(4) NOT NULL COMMENT '1-PROFESSIONAL 2-PERSONAL',
            `category_id` tinyint(4) NOT NULL COMMENT '1-LIFE PASSIONS 2-LIFE ACHIEVEMENTS PROFESSIONAL 3-LIFE ACHIEVEMENTS PERSONAL',
            `media_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `media` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `photo_type` int(11) DEFAULT NULL,
            `privacy_everyone` int(255) NOT NULL DEFAULT '1',
            `privacy_recruiters` int(255) NOT NULL DEFAULT '1',
            `privacy_network` int(255) NOT NULL DEFAULT '1',
            `privacy_private` int(255) NOT NULL DEFAULT '1',
            `start_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `end_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `present` int(255) NOT NULL DEFAULT '0',
            `positionn` int(255) NOT NULL DEFAULT '0',
            `position` int(255) DEFAULT '0',
            `fidelity_score` tinyint(11) NOT NULL DEFAULT '-1',
            `standard` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            `school_approved` int(255) NOT NULL DEFAULT '0'
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
          ");
        DB::statement("ALTER TABLE `user_achievements`
        ADD CONSTRAINT `user_achievements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_achievements');
    }
}
