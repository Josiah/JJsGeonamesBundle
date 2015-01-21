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

### Filter localities  

This fork allows you to filter localities that you want to import into your database.  
**Note** This feature is little tested, use it at own risk.
  
#### Enable the filter  

To use a filter, you have to specify the filter option `geonames:load:localities --filter="rule" [countries]`.  
You might use several rules at once `geonames:load:localities --filter="rule,rule2" [countries]`.  

### Add a filter rule  

A filter rule consists of three parts:  
- the value name  
- the compare function  
- the compare value  
`:` is used as an delemiter: `valuename:compare_func:compare_value`.  

#### Value name  

The value name is used to access a specific variable inside the Locality class.  
It is internally converted to call the corresponding get function for that variable  (`population` would be converted to `getPopulation`).  
Only the first character of the value name will be converted to an upper-case letter,  
so make sure that you check `Import/Locality.php` for the correct spelling of your get-function.  

#### Compare function  

At this point you can use following functions:  
To check if the value:  
... is equal to the compare value (strings and integer) use `=`, `equal` or`equals`.  
... is less or equal than the compare value (integer) use `<=`.  
... is greater or equal than the compare value (integer) use  `>=`.  
... contains the compare value (string) use `contains`.  

#### Examples  

Here are some examples:  
```sh
# load all localities from germany with a population >= 2000  
app/console geonames:load:localities --filter="population:>=:2000" DE  
  
# load all localities with the locality-name "Kiel"  
app/console geonames:load:localities --filter="nameUtf8:equals:Kiel"  
  
# load all localities that contain "Test" in the locality-name  
app/console geonames:load:localities --filter="nameUtf8:contains:Test"  
  
# load all localities from germany with a population between 42000 and 100000  
app/console geonames:load:localities --filter="population:>=:42000,population:<=:100000" DE  
``` 

### Import localities

There are two options for importing the localities - either the whole world at
once or batched by countries. Internally the same import mechanism is used and
the import process will download a data file for each country and then process
the country files individually.

**Note** the full load process may take several hours to complete and requires
a large amount of memory.

```sh
# All countries
app/console geonames:load:localities

# Subset of countries (list the desired contries as arguments)
app/console geonames:load:localities US CA

#Using the filter function (all countries)

app/console geonames:load:localities --filter="option:func:value"

#Using the filter function (specific countries, as argument list)
app/console geonames:load:localities --filter="option:func:value" US CA

```

 [1]: http://geonames.org
 [2]: http://symfony.com
 [3]: http://www.doctrine-project.org/projects/migrations.html