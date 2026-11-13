
<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        // password_reset_tokens is already created
        // by the initial users migration.
    }

    public function down(): void
    {
        // Do not drop the table owned by the initial migration.
    }
};
