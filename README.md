<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Tech Stack

This assessment repo is built on top of one of our go-to stacks:
- [Laravel](https://laravel.com/docs)
- [InertiaJS](https://inertiajs.com/how-it-works)
- [Vue3](https://vuejs.org/guide/introduction.html)
- [TailwindCSS](https://tailwindcss.com/docs).

##Getting it running (without Docker/Sail)
You will need:
- PHP 8.1+
- Composer
- MySQL (LTS or latest)
- Node (LTS or latest)

Once you have pulled down the code:
- copy .env.example to .env
- create a mysql database "candidate_assessment"
- composer install
- php artisan migrate:fresh --seed
- npm install
- php artisan serve

At this point, you should be able to navigate to localhost:8080, and see the website.
- npm run develop - does a single development build
- npm run watch - watches for code changes, and reruns development builds automatically
- npm run hot - same as npm run watch, but tries to hot reload the code so you don't have to refresh the page in your browser.

##Getting it running (with Docker/Sail)
You will need:
- PHP 8.1+
- Composer
- Docker (LTS/Latest)

Once you have pulled down the code:
- copy .env.sail to .env
- ./vendor/bin/sail up
- ./vendor/bin/sail artisan migrate:fresh --seed

## Instructions
You will be given 2-4 hours to complete as many tickets as you want.  Which tickets you chose to complete are up to you. We include multiple ticket types ranging from fullstack/frontend/backend, and both bug fixes and new feature implementations.

Unless the ticket specifies otherwise, you are not to add additional composer/npm packages, and must work within the confines of given tech stack.

You can use as much documentation and resources from the internet as you want, as long as there as you aren't receiving "live" help from any other person(s).
## Completion

Once you are done with the assessment, zip up the progress, and upload it to our google drive. Email [Philip](mailto:philip@capeandbay.com) with a list of tickets you attempted to complete, even if you made progress, but didn't quite finish all the way.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## License

Source Code for the candidate assesment if property of Cape & Bay, and may not be copied, distributed, or shared with any third party.
