<?php

use App\Models\User;
use App\Models\Media;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media_user', function (Blueprint $table) {
            $table->foreignIdFor(Media::class)->constrained()->onDelete('cascade');;
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->enum('status', ['watchlist', 'watching', 'watched']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.s
     */
    public function down(): void
    {
        Schema::dropIfExists('media_user');
    }
};
