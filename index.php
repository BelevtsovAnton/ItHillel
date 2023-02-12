
<?php
include( 'helpers.php');
$projects = [

    [
    'id' => 1,
    'name' => 'Проект 1',
        'count' => 5,
     ],
    [
     'id' => 2,
     'name' => 'Проект 2',
        'count' => 2,
    ],
    [
    'id' => 3,
    'name' => 'Проект 3',
        'count'=> 7,
    ],

];

$tasks = [
    'backlog'=> [

    [
        'id' => 1,
        'name'=>'Task 1',
        'description'=>   'Зробити головну сторінку списку задач з можливістю перегляду,
                                створення, редагування, видалення задач 1',
        'end_date'=> '16.02.2023'
    ],
    [
        'id' =>2,
        'name'=>'Task 2',
        'description'=> '  Зробити головну сторінку списку задач з можливістю перегляду,
                                створення, редагування, видалення задач 2',
        'end_date'=> '14.02.2023'
    ],
],
    'todo'=>[],

  'in-progress'=> [
    [
        'id' => 3,
        'name'=>'Task 3',
        'description'=> '  Зробити головну сторінку списку задач з можливістю перегляду,
                                створення, редагування, видалення задач 3',
        'end_date'=> '07.02.2023'
    ],
    ],
    'done'=>[],
];


print renderTemplate('layout.php',[
    'title'=>'Завдання та проекти | Дошка',
        'projects' => $projects,
        'content' => renderTemplate('main.php',['tasks'=>$tasks]),

    ]);
print renderTemplate('footer.php',[
    'footer.php' => $footer
]);
