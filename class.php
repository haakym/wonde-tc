<?php

require_once(__DIR__ . '/bootstrap.php');

$classes = $school->classes->all(['students', 'lessons', 'lessons.period'], ['class_name' => $_GET['class_name']]);

foreach($classes as $class) {
    echo '<h1>Class ' . $class->name . '</h1>';
    echo '<h2>Students</h2>';
    echo '<ul>';
    foreach ($class->students->data as $student) {
        echo '<li>';
        echo $student->forename . ' ' . $student->surname;
        echo '</li>';
    }
    echo '</ul>';
    
    echo '<h2>Lessons</h2>';
    echo '<ul>';
    foreach ($class->lessons->data as $lesson) {
        echo '<li>';
            echo $lesson->id . ' on ' . $lesson->period->data->day;
        echo '</li>';
    }
    echo '</ul>';
}
