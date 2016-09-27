# Job Board API Demo

WARNING: This application uses non-supported versions of the Jobs Common API clients and it is no longer updated. Please visit [JobApis.com](http://www.jobapis.com/) for other example code and projects.

This project serves as an example of incorporating several of the
[Jobs Common](https://github.com/JobBrander/jobs-common) 
job board api clients into a PHP project. This
demo uses the [Slim](http://www.slimframework.com/) Framework, 
but the concepts should hold true in any project using 
[Composer](https://getcomposer.org/) to manage dependencies.

## What is the Jobs Common project?

It's an open source attempt at standardizing the responses
given by job board APIs in PHP. In other words, it provides
a simple interface for getting jobs from job boards.

[Read more about the project here](http://www.jobapis.com/)

## Getting started with this project

1. Clone the repo: `git clone https://github.com/JobBrander/jobs-common-demo.git`.
2. Copy the `.env.example` file, rename it `.env`, and add API Keys for each job board listed.
3. Install the composer dependencies: `composer install`.
4. Run `php -S localhost:8000 -t public` to serve the application.
5. Visit the demo application at `http://localhost:8000/`.
