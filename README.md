## Coco CMS
Coco CMS is built on top of Statamic using Laravel Blade and Tailwind for the UI to streamline building websites. 

## Setup
1. Clone down this repository 
2. Create your `.env` file and copy the environment settings from `.env.example`. You can run `cp .env.example .env` to make things easier.
3. Configure your MySQL database in your new `.env` file and make sure it's connected.
4. Run `php artisan key:generate` to generate your application key.
5. Run `composer install && npm install` to install composer packages and node modules.
6. Run `php artisan migrate` to migrate your base database tables.
7. Run `php please eloquent:import-users` to [migrate](https://statamic.dev/tips/storing-users-in-a-database) the sole user to login to the CMS. The credentials are my github email address and the password is password - brilliant!
8. Run `npm run dev` and you should be up and running!

## Front End

### Creating Components
Write something useful here...


## Important Links

- [Statamic Main Site](https://statamic.com)
- [Statamic Documentation][docs]
- [Statamic Core Package Repo][cms-repo]
- [Statamic Migrator](https://github.com/statamic/migrator)
- [Statamic Discord][discord]

[docs]: https://statamic.dev/
[discord]: https://statamic.com/discord
[contribution]: https://github.com/statamic/cms/blob/master/CONTRIBUTING.md
[cms-repo]: https://github.com/statamic/cms
