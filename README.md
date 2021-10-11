# Accountancy Cloud Technical Task

This task is designed to test your basic coding & problem-solving skills. You have as long as you like to complete it but for an indicative timescale we expect a Senior Developer to finish it in just under an hour.

We're ideally looking for candidates who can write readable, efficient and scalable code.

You may use online resources for general help with syntax, techniques etc but please don't copy code.

To submit the completed task, please create a public fork of this repository with your changes and send us the link. Alternatively you may send us a zipped directory with the files contained.

Setup instructions for Laravel can be found at https://laravel.com/docs/8.x/installation.

## The Task

After running the migrations and seeding the database (with `php artisan migrate` and `php artisan db:seed`), you'll have 3 database tables: `transactions`, `categories` and `transaction_categories`.

Using the data in these database tables, we'd like you to render a table in html on the page. You're not allowed to change the data in the seeder but you're free to create new migrations.

The table must have the following columns:
- Name
- Amount
- Date (formatted as d/m/Y)
- Categories (as a comma-separated string)
- Percentage of Total

You must also be able to search the transactions by name and category. We expect you to write this with JavaScript and you may use a library (like Vue or React) if you wish.

By default the table must be sorted by date in descending order and all amounts must be formatted to 2 decimal places.

We're big fans of TDD and we'd like you to take this approach when completing the task.

