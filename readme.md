Geonames Bundle
===============

# Introduction

Provides access to the data exported by [geonames.org][1] into [symfony 2][sf2]
applications.


## What is [geonames.org][1]

From the geonames.org website:

> The GeoNames geographical database covers all countries and contains over
> eight million placenames that are available for download free of charge.


## When to use this bundle

Most useful application for this bundle is to normalize the geograhical
information stored in your database such as Countries, States and Cities. Thanks
to the extensive [geonames.org][1] data almost all cities, towns and suburbs are
covered worldwide.

## Features

- Imports the following geonames.org data:

    * Countries
    * Timezones
    * States & Provences
    * Cities, Towns, Suburbs, Villages etc.

- Provides the following data store implementations:

    * Doctrine ORM

# Installation

1. Install the bundle using composer:

    ```sh
    composer require jjs/geonames-bundle:*
    ```

    Or add it to your `composer.json` file directly

    ```json
    {
        require: {
            "jjs/geonames-bundle": "*"
        }
    }
    ```

2. Add the bundle to your `AppKernel.php`

    ```php
    // AppKernel::registerBundles()
    $bundles = array(
        // ...
        new JJs\Bundle\GeonamesBundle\JJsGeonamesBundle(),
        // ...
    );

## Install or update database schema

The database schema for he bundle is defined using [doctrine migrations][2].
Migration versioning is designed so they can be merged into your application
migrations or migrate the schema manually.

### Independant versioning

Execute the migrations using the supplied migration configuration

```sh
# Run in your project root directory
app/console doctrine:migrations:migrate --configuration=vendor/jjs/geonames-bundle/JJs/GeonamesBundle/migrations.xml
```

### Application versioning

This schema management stragegy involves more configuration and management, but
comes with the benefit of greater control. It is possible due to mapping between
incremental database version and semantic bundle version. It involves 'folding'
the geonames schema versioning into your own migrations and managing the
migration of your database as a whole.

As yet this versioning strategy is undocumented, please contact me if you're
interested in using it and I will write the documentation.

## Import the data

**Note** that importing the data from the remote geonames.org repository involves downloading
almost 250 MB data from [geonames.org][1].

The following commands can be used in sequence to load all supported data from
the [geonames.org][1] export (http://download.geonames.org/export/dump)

### Import countries

Loads a list of all countries which are refenced by the other imported data such
as timezones and localities.

```sh
app/console geonames:load:countries
```

### Import timezones

Loads a list of timezones mapped to countries

```sh
app/console geonames:load:timezones
```

### Import localities

There are two options for importing the localities - either the whole world at
once or batched by countries. Internally the same import mechanism is used and
the import process will download a data file for each country and then process
the country files individually.

**Note** the full load process may take several hours to complete and requires
a large amount of memory.

```
# All countries
app/console geonames:load:localities

# Subset of countries (list the desired contries as arguments)
app/console geonames:load:localities US CA
```

 [1]: http://geonames.org
 [2]: http://symfony.com
 [3]: http://www.doctrine-project.org/projects/migrations.html