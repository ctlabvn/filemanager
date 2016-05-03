# FileManager plugin for CakePHP 3.x (Still in develop, Please wait until stable)

Cakephp 3.x File manager, compatible to text editor like TinyMce, Ckeditor

## Idea

- A file manager can deeply integrated with CakePHP 3.x 
- A file manager that can be Authenticate and Authorize
- Session can be php, cake or database (app.php)

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require crabstudio/file-manager:dev-master
```

## Load plugin

You can use command line

```
bin/cake plugin load FileManager --routes --bootstrap
```

or paste this line at the end of `config\bootstrap.php`

```
Plugin::load('FileManager', ['bootstrap' => true, 'routes' => true]);
```

## Usage

access `http://your-project/file-manager`

=======
# Demo
![Index](http://i.imgur.com/rJVIzP2.png)