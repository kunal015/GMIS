<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::statement("CREATE TABLE `users` (
                `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                `secure_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                `name_prefix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `email` varchar(255) NOT NULL COLLATE utf8_unicode_ci UNIQUE,
                `email_verified_at` timestamp NULL DEFAULT NULL,
                `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `life_strengths` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'For social login',
                `provider_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
                `is_active` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0-block 1-unblock',
                `complete_step` int(11) NOT NULL DEFAULT '0',
                `last_step` int(11) NOT NULL DEFAULT '0',
                `is_profile_completed` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-Not Complete 1-Complete',
                `is_review_profile` int(11) NOT NULL DEFAULT '0',
                `is_email_verify` int(11) NOT NULL DEFAULT '0',
                `is_old_user` int(11) NOT NULL DEFAULT '0',
                `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
                `view_count` int(255) DEFAULT '0',
                `rank` int(11) NOT NULL DEFAULT '0',
                `coache_id` int(11) DEFAULT NULL,
                `is_quick` int(11) NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
                `is_event` int(11) NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
                `event` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `event_mail` int(11) NOT NULL DEFAULT '0',
                `is_tallant` int(255) NOT NULL DEFAULT '0',
                `is_lifevitae` int(255) NOT NULL DEFAULT '0',
                `is_cargo` int(255) NOT NULL DEFAULT '0',
                `api_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `is_mentor` int(255) NOT NULL DEFAULT '0',
                `mentor_review` int(255) NOT NULL DEFAULT '0',
                `is_transneuron` int(255) NOT NULL DEFAULT '0',
                `transid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `is_glossareadd` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
                `glossareadidd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `is_glossaread` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
                `glossareadid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `created_at` timestamp NULL DEFAULT NULL,
                `updated_at` timestamp NULL DEFAULT NULL,
                `deleted_at` timestamp NULL DEFAULT NULL,
                `last_login` timestamp NULL DEFAULT NULL,
                `last_loginn` timestamp NULL DEFAULT NULL,
                `api_tokenn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `is_mentorr` int(255) NOT NULL DEFAULT '0',
                `is_aiesec` int(255) NOT NULL DEFAULT '0',
                `is_tour` int(255) NOT NULL DEFAULT '0',
                `is_profession` int(255) NOT NULL DEFAULT '0',
                `deck` int(255) NOT NULL DEFAULT '0' COMMENT '1 = Braingroom',
                `is_school` int(255) DEFAULT '0',
                `school_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `school_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `school_section` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
                `is_teacher_approve` int(255) NOT NULL DEFAULT '0' COMMENT '0=Pending, 1=Review Teacher,2=Approved',
                `is_teacher_edit_approve` int(255) NOT NULL DEFAULT '0',
                `is_school_password` int(255) NOT NULL DEFAULT '0',
                `jobselection` text COLLATE utf8_unicode_ci DEFAULT NULL,
                `is_summer` int(255) NOT NULL DEFAULT '0',
                `auto_profession` int(255) DEFAULT '0'
              )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;;
              ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
