<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/materials' => ['AppController', 'materials'],
    '/interview' => ['AppController', 'interview'],
    '/interview/filldp' => ['AppController', 'filldp'],
    '/interview/readdp' => ['AppController', 'readdp'],
];