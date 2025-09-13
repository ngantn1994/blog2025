<?php declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table(User::getTableName(), function (Blueprint $table) {
            $table->string('locale', 5)->nullable()->index();
        });
    }
    public function down(): void {
        Schema::table(User::getTableName(), function (Blueprint $table) {
            $table->dropColumn('locale');
        });
    }
};
