## **Class 26 (Category Table Crud)**

    1. The idle practice is database table column name and input field name should be same.

    2. 2. Categories table fields

	Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });