<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    #------------------------------#
    #    Execute the migration     #
    #------------------------------#
    public function up(): void
    {
        // Table of users 
        Schema::create('users', function (Blueprint $table) {
            $table ->id();

            $table ->string  ('first_name');
            $table ->string  ('last_name');
            $table ->integer ('age');
            $table ->string  ('phone');
            $table ->enum    ('gander', ['Masculino','Femenino']);
            $table ->string  ('address');
            $table ->date    ('birth_date');
            $table ->string  ('photo_profile') ->nullable();
            $table ->text    ('biography') ->nullable();
            $table ->string  ('email') ->unique();
            $table ->string  ('password');
            $table ->boolean ('status_account') ->default(0);

            $table ->rememberToken();
            $table ->timestamps();
        });
    }

    #------------------------------#
    #    Reverse the migration     #
    #------------------------------#
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
