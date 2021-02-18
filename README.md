# CodeIgniter 3 News Tutorial

See <https://codeigniter.com/userguide3/tutorial/index.html>.

If you want CodeIgniter4 version, see <https://github.com/kenjis/ci3-to-4-news>.

## Folder Structure

```
codeigniter/
├── application/
├── composer.json
├── composer.lock
├── public/
│   ├── .htaccess
│   └── index.php
└── vendor/
    └── codeigniter/
        └── framework/
            └── system/
```

## Requirements

- PHP 7.2 or later
- `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos))
- Git

## How to Use

### Installation

```
$ git clone https://github.com/kenjis/ci3-news
$ cd /path/to/ci3-news/
$ composer install
```

### Database Migration and Seeding

```
$ php public/index.php dbfixture/migrate
$ php public/index.php dbfixture/seed
```

### Run PHP built-in Server

```
$ bin/server.sh
```

### Run PHPUnit Tests

```
$ composer test
```

## Related Projects for CodeIgniter 3.x

- [CodeIgniter Composer Installer](https://github.com/kenjis/codeigniter-composer-installer)
- [Cli for CodeIgniter 3.0](https://github.com/kenjis/codeigniter-cli)
- [CodeIgniter Simple and Secure Twig](https://github.com/kenjis/codeigniter-ss-twig)
- [CodeIgniter Doctrine](https://github.com/kenjis/codeigniter-doctrine)
- [CodeIgniter Deployer](https://github.com/kenjis/codeigniter-deployer)
- [CodeIgniter3 Filename Checker](https://github.com/kenjis/codeigniter3-filename-checker)
- [CodeIgniter Widget (View Partial) Sample](https://github.com/kenjis/codeigniter-widgets)
- [CodeIgniter3 Namespaced Controller](https://github.com/kenjis/codeigniter3-namespaced-controller)
