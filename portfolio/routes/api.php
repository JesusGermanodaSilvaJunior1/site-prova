<?php
//routes/api.php

Route::get('/quiz', 'QuizController@index');
Route::post('/quiz', 'QuizController@store');

?>