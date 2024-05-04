<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Activity;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('spans', function (Blueprint $table) {
            $table->id();
            $table->date("start_date");
            $table->date("end_date");
            $table->foreignIdFor(Activity::class)->constrained();
            $table->date("day_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spans');
    }
};
