<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://capeandbay-public.s3.us-east-1.amazonaws.com/cape_and_bay_logo_7687.svg?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEJv%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCXVzLWVhc3QtMSJIMEYCIQC%2BOQTrA7UTe7MMsZO0ktoaBA4l2y48A2%2B034QWwIy%2FWQIhAI57%2BcNZOeg13%2FbzO2521yZXHTFALS5B4Q3aCDqIR7jrKvsCCGQQAxoMODA5ODc0MTAwNjUxIgyNkm7%2FhmOAaZILLuoq2AI5PAlncTRqHfR2bXNVTKx8V%2B%2FkNsQw2toByZBmBKzBIemhfq162ErdlUoJhl%2FKa5WkFXQfIUFS4ssEeUkh6xoPgx6KbY%2BH%2FrnlRUuemz7juPwrAkxjLs3Sp%2Fuof92rnNY4mStJvAuLkG9ES20jSj3FiUSdHV1J4kRomBB%2F%2B8QqQXhO51K9G6HWbkLwTIUGiyA1CuwwDwNpRjBebbUYiykrPinry6V2AuU6OdXN6Ra1ijGp%2FArQKpO46uPaW8sTb%2BT0fKbD7pAy1jN9IEbp97%2FNeZyqzqWaHL0HFEeVW3RlJ7jIr1Mh%2B6GW5Fps5UbFfPDviEAiehXo%2FdfTBih9brwdvEPsvhNzl0m%2FWx8pTu7OPThC1jA2dTqGgdE33D%2B1zYXJRxrOHRthzDBYFaaiON%2FTfKYlhYRacnBMZhfUqasSK9KQhVb0MRRJHQeOEwzGXTb%2FTSSEribJoDDM58WTBjqyAm%2FuYtOKmj2E4v3dBx4HOjjRxQQDrO5eSi9SmOU8HlYYDoaDXUGg3y6k6Xx5aVjrpjJdnwSs2HqKfSnSAdMDOsoM0priBxY%2BJc6vNm%2B1zcYmN6PjBhbhjdy7ABJGV94nh01ODVZmln8K7kk4vHQ3FxkNlw1HToBwSqnKei9veVTlBQ%2Br7mP22dsR0kJvgTp4V15KeaDuBioPMndjHnoJrouWtm%2BvOI%2FD1rPaWeGOFlF9wW7J4MNMoqzgA3CRs2K6ueb9yWzVxkVXyOU0jpDEjyze0G%2BTSnNtMRy9QkcBs8lpMPFmYMZuWreg62lkBijNbaPtcWggdQOtxDBvC6PStJjTECEyOG%2FI15uVzYt554BqKt5yUlfef3FvYf5EaBE%2F5SMXXTq%2FBItonogkVk4PYqimpg%3D%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220503T183548Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIA3ZECCCGVZWUFOA6K%2F20220503%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=447eb85c0b806943593e276e4685c322afe1fe731680130b5fa1014c0466e4f5" width="400"></a></p>

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

###Environment:
Copy .env.example to .env

###Database
Create a mysql database "candidate_assessment"

###Dependencies

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
# starts the node development server, and recompiles the JS when you save
npm run hot

#if for some reason you just want to do a single development build, and not watch for changes:
npm run develop

#start the application
php artisan serve
```

At this point, you should be able to navigate to localhost:8000, and see the website.

## Instructions
You will be given 2-4 hours to complete tickets from a ticket pool.  Which tickets you choose to complete are up to you. We include multiple ticket types ranging from fullstack/frontend/backend, and both bug fixes and new feature implementations.

Unless the ticket specifies otherwise, you are not allowed to add additional composer/npm packages, and must work within the confines of given tech stack. For CSS, we prefer you use Tailwind/Daisy where possible, and fallback to traditional scoped css.

You can use as much documentation and resources from the internet as you want, as long as there as you aren't receiving "live" help from any other person(s).

## Ready to begin?
Got the environment and application stood up, and ready to go? Email [Philip](mailto:philip@capeandbay.com) saying you are ready for the tickets. Timer starts on email reply with tickets.

## Completion
Once you are done with the assessment, zip up the progress, and upload it to our google drive. Email [Philip](mailto:philip@capeandbay.com) with a list of tickets you attempted to complete, even if you made progress, but didn't quite finish all the way.

## License

Source Code for the candidate assessment if property of Cape & Bay, and may not be copied, distributed, or shared with any third party.
