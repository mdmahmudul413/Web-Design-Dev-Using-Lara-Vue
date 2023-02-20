## **Class 27 (Sub Category, Brand, Unit Crud)**

    1. The idle practice is database table column name and input field name should be same.
    
    2. Sub Categories table fields

	Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->text('description');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

     3. Brands table fields
	
	Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('image');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

     4. Units table fields

	Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->text('description');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
