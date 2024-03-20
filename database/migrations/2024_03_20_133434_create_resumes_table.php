<?php

use App\Models\resume;
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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        resume::create([
            'key' => '_sekolah',
            'label' => 'Tahun',
            'value' => '2021',
            'type' => 'text',
        ]);
        
        resume::create([
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
