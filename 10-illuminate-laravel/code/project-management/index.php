<?php

require_once __DIR__ . '/app/bootstrap.php';

/**
 * DDL
 */
//$dm::schema()->create('tasks', function (Blueprint $table) {
//    $table->increments('id');
//    $table->integer('user_id');
//    $table->string('title');
//    $table->longText('body')->nullable();
//    $table->enum('status', ['WAITING', 'DONE', 'IN_PROGRESS'])->default('WAITING');
//    $table->integer('wight')->default(1);
//
//    $table->softDeletes();
//    $table->timestamps();
//
//    $table->foreign('user_id')
//        ->on('users')
//        ->references('id')
//        ->cascadeOnDelete();
//});

/**
 * DML
 */
// Query builder
//$users = $dm::table('users')->get();
//
//$user = $dm::table('users')->insert([
//    'username' => 'newuser',
//    'full_name' => 'newuser',
//    'password' => '00000',
//]);
//

// Model
//print_r(\App\Models\User::all()->toArray());

//\App\Models\Task::query()->create([
//    'user_id' => 1,
//    'title' => 'Task 1',
//]);

//\App\Models\Task::query()->find(1)->update([
//    'body' => 'body task one'
//]);

//\App\Models\Task::query()->restore();




//print_r(\App\Models\Task::all()->toArray());