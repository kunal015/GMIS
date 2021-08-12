<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::statement("CREATE TABLE `user_details` (
                `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                `user_id` int(10) UNSIGNED NOT NULL,
                `image` text COLLATE utf8_unicode_ci DEFAULT NULL,
                `gender` int(11) DEFAULT NULL COMMENT '1-female, 2-male',
                `dob` date DEFAULT NULL COMMENT 'Year of birth',
                `age` int(11) DEFAULT NULL,
                `current_occupation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                `cityy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
                `place_workK` text COLLATE utf8_unicode_ci DEFAULT NULL,
                `place_work` text COLLATE utf8_unicode_ci DEFAULT NULL,
                `country_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Country I am at now',
                `country_been_to` text COLLATE utf8_unicode_ci COMMENT 'Countries I have been to' DEFAULT NULL,
                `statement_purpose` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                `language_spokens` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'language Spoken',
                `dial_code` int(11) DEFAULT NULL COMMENT 'Its country code for mobile',
                `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `mobile_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `interestss` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
                `interests` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
                `comunication_address` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
                `resume` text COLLATE utf8_unicode_ci DEFAULT NULL,
                `created_at` timestamp NULL DEFAULT NULL,
                `updated_at` timestamp NULL DEFAULT NULL,
                `mobile_1e` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `comunication_addresse` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
                `resumee` text COLLATE utf8_unicode_ci DEFAULT NULL,
                `percentile` int(255) NOT NULL DEFAULT '0',
                `profile_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `profile_filetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `fidelity` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Low',
                `pdfdata` text COLLATE utf8_unicode_ci DEFAULT NULL,
                `english_check` tinyint(1) NOT NULL DEFAULT '-1',
                `english_checkk` tinyint(1) NOT NULL DEFAULT '-1'
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
