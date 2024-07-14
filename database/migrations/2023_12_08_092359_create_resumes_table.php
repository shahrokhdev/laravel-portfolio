<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string("fullname");
            $table->string("fullname_fa")->nullable();
            $table->string("age");
            $table->string("email")->unique();
            $table->text("address");
            $table->text("address_fa")->nullable();
            $table->enum("freelance", ["available", "unavailable"])->default("available");
            $table->enum("freelance_fa", ["دردسترس", "غیردسترس"])->default("دردسترس");
            $table->string("skills");
            $table->string("skills_fa")->nullable();
            $table->string("experience")->nullable();
            $table->string("experience_fa")->nullable();
            $table->string("languages")->nullable();
            $table->string("languages_fa")->nullable();
            $table->integer("happy_clients")->default(0);
            $table->integer("project_completed")->default(0);
            $table->integer("awards_won")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
};
