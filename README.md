- course : https://www.udemy.com/course/master-laravel-6-with-vuejs-fullstack-development
- git : https://github.com/piotr-jura-udemy/master-laravel-vue-fullstack/tree/master
- find php.ini file on mac : `php -i | grep 'php.ini'`
- installing Vue : `npm install --save-dev @vitejs/plugin-vue`
- inertia docs : https://inertiajs.com/
- installing inertia : `composer require inertiajs/inertia-laravel`
 - server-side : https://inertiajs.com/server-side-setup
 1. rename welcome.blade to app.blade
 2. `php artisan inertia:middleware`
 - client-side : https://inertiajs.com/client-side-setup
 1. `npm install @inertiajs/vue3`

use npm run dev

- docs inertia 1.0 : https://inertiajs.com/upgrade-guide
- docs vue : https://vuejs.org/guide/introduction.html

- check db with artisan : `php artisan db:show`
- `php artisan migrate:status`
- mySql datatypes docs : https://dev.mysql.com/doc/refman/8.0/en/data-types.html
- vue computed properties : https://vuejs.org/guide/essentials/computed.html#computed-properties
- laravel validation form rules : https://laravel.com/docs/11.x/validation#available-validation-rules
- for routes with ziggy and js : `composer require tightenco/ziggy`
- docs ziggy routing : https://github.com/tighten/ziggy
- use ziggy for routing with Inertia
- tailwind docs : https://tailwindcss.com/docs/installation
- install tailwind : `npm install -D tailwindcss postcss autoprefixer` and `npx tailwindcss init`
- tailwind forms : `npm install -D @tailwindcss/forms` ; docs : https://github.com/tailwindlabs/tailwindcss-forms
- tailwind container css docs : https://tailwindcss.com/docs/container#using-the-container 
- composables : In Vue.js 3, composables are reusable functions that encapsulate logic and stateful behavior, leveraging the power of the Composition API. They provide a way to organize your code into smaller, more manageable units that can be shared and reused across different components in your application.



- Side Notes

- camelCase -> kebab_case

- dissertations to Gemini : 
 - can you say that in php everything can be an array in a class or even an object...but in javascript everything is an object ? im saying this because using ziggy in a laravel project i notice that passing multiple parameters in a route can be done using an object, but i have an idea that in php this is done by using an array, even so passing props to a view Vue is done using objects but in laravel php views blade you can do this using an array...what do you know about this ??
 Laravel leverages arrays for data passing, while Vue components use objects (props).
 Arrays: Ordered collections of key-value pairs (associative arrays) or numerically indexed lists. Arrays are flexible and can hold various data types (strings, integers, booleans, other arrays, etc.). In Laravel, you use arrays extensively for passing data to views, route parameters, validation rules, etc.
Objects: Represent real-world entities with properties (data) and methods (functions). While technically anything can be converted to an object in PHP, it's not as ubiquitous as in JavaScript.
Here's an analogy:
JavaScript: Objects are like Legos. You can build anything by combining them.
PHP: Objects are like specialized tools in a toolbox. You use them for specific tasks alongside other tools like arrays.