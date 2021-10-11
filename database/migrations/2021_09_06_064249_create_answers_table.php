<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `answers` (
            `id` int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `user_id` int(10) UNSIGNED NOT NULL,
            `question_id` int(11) DEFAULT NULL,
            `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
            `answer_type` int(255) NOT NULL DEFAULT '0',
            `answer_audio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `privacyy` int(255) NOT NULL DEFAULT '0' COMMENT '1 = public, 0 = private',
            `privacy` int(255) NOT NULL DEFAULT '1' COMMENT '1 = public, 0 = private',
            `short_link` text COLLATE utf8_unicode_ci,
            `fidelity_score` tinyint(11) NOT NULL DEFAULT '-1',
            `english_check` tinyint(1) NOT NULL DEFAULT '-1',
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            `school_approved` int(255) NOT NULL DEFAULT '0'
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
        ");
        DB::statement("ALTER TABLE `answers` ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
