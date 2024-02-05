<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table("events", function (Blueprint $table) {

             // $table->unsignedBigInteger("tag_id")->nullable()->after("id");
            // $table->foreign("tag_id")->references("id")->on("tags")->nullOnDelete();

            $table->foreignId('tag_id')->nullable()->after("id")->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_tag_id_foreign'); //elimina il vincolo e rende la colonna un normale intero
            $table->dropColumn('tag_id'); //elimina la colonna
        });
    }
};
