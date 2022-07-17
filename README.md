
# AsayEditor

Adding configured text editor to laravel application.

![Arabic](/screenshots/ar.png)
![English](/screenshots/en.png)

# Requirements

This package require that `livewire\livewire` package it's already installed in your project.

## Usage

```
composer require asayhome/asay-editor
```

- this package include styles and scripts need to be pushed in your blade, by default the package
use `after-scripts` tag for scripts stack and `after-scripts` for styles stack, you must added in
your project layout like next:

`@stack('after-styles')`
`@stack('after-scripts')`

or you can change this tags names by Publishing the package config file and change the value of:

`pushed-styles-container`
`pushed-scripts-container`

inside blade file:

```
 <livewire:asay-editor 
    id="textEditor" 
    language="ar" 
    :placeholder="__('Type your text her')"
    content="Editor content her" 
    height="200px" 
    />
```


### Publishing config

```
php artisan vendor:publish --tag=asayeditor-config
```

### Publishing lang

```
php artisan vendor:publish --tag=asayeditor-lang
```

### Publishing views

```
php artisan vendor:publish --tag=asayeditor-views
```

### Publishing assets

```
php artisan vendor:publish --tag=asayeditor-assets
```