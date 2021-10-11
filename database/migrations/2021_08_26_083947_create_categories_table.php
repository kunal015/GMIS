<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE TABLE `categories` (
            `id` int(10) UNSIGNED NOT NULL PRIMARY KEY,
            `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
            `school_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `school_name_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
            `name_hi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
            `name_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
            `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
            `type` tinyint(4) NOT NULL COMMENT '1-LIFE PASSIONS 2-LIFE ACHIEVEMENTS PROFESSIONAL 3-LIFE ACHIEVEMENTS PERSONAL',
            `strength` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
            `strength_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
            `strength_hi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;
          ");
        DB::statement("ALTER TABLE `categories`
        MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;");
        DB::statement("INSERT INTO `categories` (`id`, `name`, `school_name`, `school_name_id`, `name_hi`, `name_id`, `image`, `type`, `strength`, `strength_id`, `strength_hi`, `created_at`, `updated_at`) VALUES
        (1, 'Brain Power', NULL, 'Kekuatan Otak', 'ब्रेन पावर', 'Hasil Pemikiran Besar', 'Brain_power.png', 1, 'Problem Solving,Decisiveness,Originality,Simplifying the Complex,Connecting the Dots,Thinking ahead,Sense Making', 'Memecahkan Masalah,Ketegasan,Keorisinilan,Menyederhanakan yang Rumit,Menghubungkan Titik-titik,Berpikir ke depan,Masuk Akal', 'समस्या को सुलझाने वाला ,निश्चितता,अपूर्वता,जटिल को सरल बनाना,कनेक्टिंग डॉट्स,आगे की सोचना,अर्थपुर्ण', NULL, NULL),
        (2, 'Sport and Physical Activities', NULL, 'Aktivitas Olahraga dan Fisik', 'खेल और शारीरिक गतिविधियाँ', 'Aktivitas Olahraga dan Fisik', 'Sports_Physical_Activities.png', 1, 'Drive,Passion,Confidence,Integrity,Dependability,Objectivity,Sense of Purpose', 'Dorongan,Keinginan,Kepercayaan Diri,Integritas,Kebergantungan,Objektivitas,Tujuan', 'अभियान,जुनून,आत्मविश्वास,ईमानदारी,निर्भरता,निष्पक्षतावाद,उद्देश्य की भावना', NULL, NULL),
        (3, 'Social and Cultural Activities', NULL, 'Aktivitas Sosial dan Kebudayaan', 'सामाजिक और सांस्कृतिक गतिविधियाँ', 'Aktivitas Sosial dan Budaya', 'Social_Cultural.png', 1, 'Collaborating,Valuing Relationships,Engagement,Diplomacy,Eloquence,Social Flexibility,Being Persuasive', 'Bekerja Sama,Menghargai Hubungan,Ikut Serta,Diplomasi,Kelancaran Berbicara,Fleksibilitas Sosial,Persuasif', 'सहयोग,रिश्तों को महत्व देना,भाग लेना,कूटनीति,सुवचन,सामाजिक लचीलापन,अनुशीलनशील होना', NULL, NULL),
        (4, 'Pursuit of Arts and Crafts', NULL, 'Seni dan Kerajinan', 'कला और शिल्प का उद्देश्य', 'Pencapaian dalam Seni dan Kerajinan', 'Pursuit_of_Arts_Crafts.png', 1, 'Curiosity,Critical Thinking,Taking Risk,Entrepreneurship,Exploring,Pioneering,Challenging the Norm', 'Keingintahuan,Berpikir Kritis,Mengambil Resiko,Kewirausahaan,Menjelajah,Kepeloporan,Menantang Norma', 'जिज्ञासा,गहन सोच,जोखिम लेना,उद्यमिता,खोज,अनुसंधान,सामान्य चुनौती', NULL, NULL),
        (5, 'Caring for Others', NULL, 'Kepedulian Sosial', 'दूसरों की देखभाल करना', 'Peduli terhadap Sesama', 'Caring_for_others.png', 1, 'Empathy,Self Awareness,Calmness,Trust,Patience,Gratitude,Compassion', 'Empati,Kesadaran Diri,Ketenangan,Kepercayaan,Kesabaran,Rasa Terima Kasih,Kasih Sayang', 'सहानुभूति,आत्म जागरूकता,शांति,भरोसा,धीरज,प्रति आभार,दया', NULL, NULL),
        (6, 'Making the World a Better Place', NULL, 'Membuat Dunia Lebih Baik', 'विश्व को एक बेहतर स्थान बनाना', 'Menjadikan Dunia Tempat yang Lebih Baik', 'Making_the_world_a_better_place.png', 1, 'Resilience,Dealing with Adversity,Will Power,Self Discipline,Persistence,Humility,Agility', 'Ketahanan,KetahananMenghadapi Kesulitan,Kemauan Keras,Disiplin Diri Sendiri,Kegigihan,Rendah Hati,Kelincahan', 'लचीलाता,कठिनाई से निपटना,इच्छा शक्ति,आत्मानुशासन,हठ,विनम्रता,चुस्ती', NULL, NULL),
        (7, 'Technical / Academic Achievement', 'Mental Ability Achievement', 'Pencapaian Kemampuan Mental', 'तकनीकी / शैक्षणिक उपलब्धि', 'Pencapaian Teknis / Akademis', 'technical_academic_achievement.jpg', 2, 'Problem Solving,Decisiveness,Originality,Simplifying the Complex,Connecting the Dots,Thinking ahead,Sense Making', 'Memecahkan Masalah,Ketegasan,Keorisinilan,Menyederhanakan yang Rumit,Menghubungkan Titik-titik,Berpikir ke depan,Masuk Akal', 'समस्या को सुलझाने वाला ,निश्चितता,अपूर्वता,जटिल को सरल बनाना,कनेक्टिंग डॉट्स,आगे की सोचना,अर्थपुर्ण', NULL, NULL),
        (8, 'Managerial / Leadership Achievement', 'Leadership Achievement', 'Pencapaian Kepemimpinan', 'प्रबंधकीय / नेतृत्व उपलब्धि', 'Pencapaian Manajerial / Kepemimpinan', 'managerial_leadership_achievement.jpg', 2, 'Drive,Passion,Confidence,Integrity,Dependability,Objectivity,Sense of Purpose', 'Dorongan,Keinginan,Kepercayaan Diri,Integritas,Kebergantungan,Objektivitas,Tujuan', 'अभियान,जुनून,आत्मविश्वास,ईमानदारी,निर्भरता,निष्पक्षतावाद,उद्देश्य की भावना', NULL, NULL),
        (9, 'People / Team Achievement', 'Teamwork Achievement', 'Pencapaian Kerja Tim', 'लोग / टीम की उपलब्धि', 'Pencapaian Bersama / Tim', 'people_team_achievement.jpg', 2, 'Collaborating,Valuing Relationships,Engagement,Diplomacy,Eloquence,Social Flexibility,Being Persuasive', 'Bekerja Sama,Menghargai Hubungan,Ikut Serta,Diplomasi,Kelancaran Berbicara,Fleksibilitas Sosial,Persuasif', 'सहयोग,रिश्तों को महत्व देना,भाग लेना,कूटनीति,सुवचन,सामाजिक लचीलापन,अनुशीलनशील होना', NULL, NULL),
        (10, 'Creative / Entrepreneurial Achievement', 'Creative / Artistic / Design Achievement', 'Pencapaian Kreatif / Artistik / Desain', 'रचनात्मक / उद्यमशीलता की उपलब्धि', 'Pencapaian Kreatif / Wirausaha', 'creative_entrepreneurial_achievement.jpg', 2, 'Curiosity,Critical Thinking,Taking Risk,Entrepreneurship,Exploring,Pioneering,Challenging the Norm', 'Keingintahuan,Berpikir Kritis,Mengambil Resiko,Kewirausahaan,Menjelajah,Kepeloporan,Menantang Norma', 'जिज्ञासा,गहन सोच,जोखिम लेना,उद्यमिता,खोज,अनुसंधान,सामान्य चुनौती', NULL, NULL),
        (11, 'Community / Social Impact Achievement', 'Community Service / Social Work Achievement', 'Pencapaian Pengabdian Masyarakat / Kegiatan Sosial', 'सामुदायिक / सामाजिक प्रभाव की उपलब्धि', 'Pencapaian Komunitas / Pengaruh Sosial', 'community_social_impcat.jpg', 2, 'Empathy,Self Awareness,Calmness,Trust,Patience,Gratitude,Compassion', 'Empati,Kesadaran Diri,Ketenangan,Kepercayaan,Kesabaran,Rasa Terima Kasih,Kasih Sayang', 'सहानुभूति,आत्म जागरूकता,शांति,भरोसा,धीरज,प्रति आभार,दया', NULL, NULL),
        (12, 'Change / Transformation Achievement', 'Self-Improvement / Self-Development Achievement ', 'Pencapaian Peningkatan Diri / Pengembangan Diri', 'परिवर्तन / परिवर्तन उपलब्धि', 'Pencapaian Perubahan / Transformasi', 'change_transformation_achievement.jpg', 2, 'Resilience,Dealing with Adversity,Will Power,Self Discipline,Persistence,Humility,Agility', 'Ketahanan,KetahananMenghadapi Kesulitan,Kemauan Keras,Disiplin Diri Sendiri,Kegigihan,Rendah Hati,Kelincahan', 'लचीलाता,कठिनाई से निपटना,इच्छा शक्ति,आत्मानुशासन,हठ,विनम्रता,चुस्ती', NULL,NULL)"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
