<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\Borrow;
use App\Models\Category;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('returnns', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Borrow::class);
            $table->date('return_date')->nullable();
            $table->string('paythefine')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returnns');
    }
};
