<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/materials' => ['AppController', 'materials'],
    '/interview' => ['AppController', 'interview'],
    '/interview/filldp' => ['AppController', 'filldp'],
    '/interview/savedp' => ['AppController', 'savedp'],
    '/interview/readdp' => ['AppController', 'readdp'],
    '/helpme' => ['AppController', 'helpme']
];