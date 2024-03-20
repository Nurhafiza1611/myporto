<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Sederhana',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'Alamat',
            'value' => 'Padang, Pesisir Selatan, Sumatera Barat',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://youtube.com/@nurhafiza506',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://instagram.com/@myonlynur__',
            'type' => 'text',
        ]);
     
        setting::create([
            'key' => '_github',
            'label' => 'Github',
            'value' => 'https://github.com/Nurhafiza1611',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_linkedin',
            'label' => 'Linkedin',
            'value' => 'https://www.linkedin.com/in/mrs-nurhafiza-2a11bb294/',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_email',
            'label' => 'Contact Us',
            'value' => 'nurh@gmail.com',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Website Sederhana dari laravel dengan admin filament ',
            'type' => 'text',
        ]);
        
        setting::create([
            'key' => '_me',
            'label' => 'About Me',
            'value' => 'Programmer - Mahasiswi - PTI',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_degree',
            'label' => 'Degree',
            'value' => 'Student Bachelor',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_age',
            'label' => 'Usia',
            'value' => '21',
            'type' => 'text',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
