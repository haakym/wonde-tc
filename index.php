<?php

require_once(__DIR__ . '/bootstrap.php');



echo '<ul>';
    foreach ($school->employees->all(['classes']) as $employee) {
        echo '<li>';
            echo $employee->forename . ' ' . $employee->surname;
            echo '<ul>';
                if (!$employee->classes->data) {
                    echo '<li>';
                        echo 'No classes';
                    echo '</li>';
                }
                foreach ($employee->classes->data as $class) {
                    echo '<li>';
                        echo '<a href="/class.php?class_name=' . $class->name . '">' . $class->name . '</a>';
                    echo '</li>';
                }
            echo '</ul>';
        echo '</li>';
    }
echo '</ul>';
