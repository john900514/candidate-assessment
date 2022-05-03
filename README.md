<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

#Developer Assesment

## Tech Stack

This assessment repo is built on top of one of our go-to stacks:
- [Laravel](https://laravel.com/docs)
- [InertiaJS](https://inertiajs.com/how-it-works)
- [Vue3](https://vuejs.org/guide/introduction.html)
- [TailwindCSS](https://tailwindcss.com/docs)
- [DaisyUI](https://daisyui.com/components/)

##Setup
You will need:
- PHP 8.1+
- Composer
- MySQL (LTS or latest)
- Node 16

Once you have pulled down the code:
- copy .env.example to .env
- create a mysql database "candidate_assessment"

```bash
# install php dependencies
composer install

# install node dependencies
npm install

#create and seed the db
php artisan migrate:fresh --seed
```

##Development Server

```bash
# starts the development server, and recompiles the JS when you save
npm run hot

#if for somereason you just want to do a development build once, and not watch:
npm run develop

#start the application
php artisan serve
```

At this point, you should be able to navigate to localhost:8080, and see the website.

## Instructions
You will be given 2-4 hours to complete tickets from a ticket pool.  Which tickets you choose to complete are up to you. We include multiple ticket types ranging from fullstack/frontend/backend, and both bug fixes and new feature implementations.

Unless the ticket specifies otherwise, you are not allowed to add additional composer/npm packages, and must work within the confines of given tech stack. For CSS, we prefer you use Tailwind/Daisy where possible, and fallback to traditional scoped css.

You can use as much documentation and resources from the internet as you want, as long as there as you aren't receiving "live" help from any other person(s).

## Ready to begin?
Got the application stood up, and ready to go? Email [Philip](mailto:philip@capeandbay.com) saying you are ready for the tickets. Timer starts on email reply with tickets.

## Completion

Once you are done with the assessment, zip up the progress, and upload it to our google drive. Email [Philip](mailto:philip@capeandbay.com) with a list of tickets you attempted to complete, even if you made progress, but didn't quite finish all the way.

## License

Source Code for the candidate assessment if property of Cape & Bay, and may not be copied, distributed, or shared with any third party.
