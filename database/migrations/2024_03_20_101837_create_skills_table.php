<?php

use App\Models\skill;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        skill::create([
            'key' => '_html',
            'label' => 'HMTL',
            'value' => '80',
            'type' => 'text',
        ]);
        skill::create([
            'key' => '_css',
            'label' => 'CSS',
            'value' => '80',
            'type' => 'text',
        ]);
        skill::create([
            'key' => '_laravel',
            'label' => 'LARAVEL',
            'value' => '80',
            'type' => 'text',
        ]);
        skill::create([
            'key' => '_java',
            'label' => 'JAVA',
            'value' => '80',
            'type' => 'text',
        ]);
        skill::create([
            'key' => '_figma',
            'label' => 'FIGMA',
            'value' => '80',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
