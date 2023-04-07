<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Process;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('list-assert', function () {
    Process::fake(['ls -la' => 'fake list of dir']);

    Process::run('ls -la');
    Process::assertRan('ls -la');
});

Artisan::command('fake', function () {
    Process::fake(['git log' => 'fake git log']);

    $this->info(Process::run('git log')->output());
    $this->info(Process::run('npm run build')->output());
});

Artisan::command('npm-build-2', function () {
    $this->info(Process::run('npm run build')->output());
});

Artisan::command('npm-build-1', function () {
    Process::run('npm run build', function ($type, $output) {
        $this->info($output);
    });
});

Artisan::command('gitlog', function () {
    $this->info(Process::run('git log')->output());
});


Artisan::command('npm-build-3', function () {

    $process = Process::start('npm run build');
    //do something while wait
    while ($process->running()){
       $this->info('Working....');
       sleep(1);
    }
    //wait to give the info all at once
    $process->wait();
    $this->info($process->output());
});
