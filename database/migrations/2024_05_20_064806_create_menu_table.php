<?php

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
        Schema::create('tthn_menu', function (Blueprint $table) {
            $table->id(); //id
            $table->string('name', 1000);
            $table->string('link', 1000);
            $table->unsignedInteger('table_id')->nullable();
            $table->text('type');
            $table->unsignedTinyInteger('status')->default(2);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();

            $table->timestamps(); //created,update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tthn_menu');
    }
};
