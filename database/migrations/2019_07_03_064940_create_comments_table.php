
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		//
		Schema::create('comments', function (Blueprint $table) {
			$table->increments('id');
			$table->string('text');
			$table->integer('lesson_id')->unsigned()->nullable();
			$table->foreign('lesson_id')
				->references('id')->on('lessons')
				->onDelete('set null');
			$table->index(['lesson_id']);
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('set null');
			$table->index(['user_id']);

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
		Schema::dropIfExists('comments');

	}
}
