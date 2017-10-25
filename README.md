# PHP Dates

[![Packagist](https://img.shields.io/packagist/v/ivandelabeldad/dates.svg)](https://packagist.org/packages/ivandelabeldad/dates)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/ivandelabeldad/api-rackian/blob/master/LICENSE)

Basic Dates library for PHP


## Install
```
composer require ivandelabeldad/dates
```


## Usage

### Date, Time, and DateTime
```php
// Time only have hour, minute and seconds
$time = Time::now();

// Date have year, month, day, season and day of week
$date = Date::now();

// DateTime have date attributes and time either
$dateTime = DateTime::now();
```

### Create a Date, Time or DateTime
```php
// FROM YEAR-MONTH-DAY HOUR-MINUTE-SECOND
$time       = Time::create(12, 45, 0);
$date       = Date::create(1999, 12, 31);
$dateTime   = DateTime::create(1999, 12, 31, 12, 45, 0);

// FROM CURRENT TIME
$time       = Time::now();
$date       = Date::now();
$dateTime   = DateTime::now();

// FROM TIME IN SECONDS (UNIX TIME)
$time       = Time::fromUnixTime(time());
$date       = Date::fromUnixTime(time());
$dateTime   = DateTime::fromUnixTime(time());
```

### Get a Date range (Only Dates)
```php
$startDate = Date::create(2000, 1, 1);
$endDate = Date::create(2000, 12, 31);

// Contains every day of the year 2000
$dates = DateUtils::datesBetween($startDate, $endDate);
```

### DateLists usage
```php
$list = new DateArrayList();

// ADD ONE DATE
$list->add(Date::now());

// ADD MULTIPLE DATES
$list->addAll([
    $date1,
    $date2,
    $date3,
]);

// RETURN 4
$list->size();

// REMOVE FIRST DATE AND MOVE OTHERS TO THE BEGINNING
$list->remove(0);
```

### Sorting using lists
```php
// DATES SORTED FROM BEFORE TO AFTER
$list->sort(new DateNaturalComparator());

// DATES SORTED FROM AFTER TO BEFORE
$list->sort(new DateNaturalComparator(), false);
```

### Example of filtering usage
```php
// Get only weekends in summer and spring
$filtered = DateFilter::builder($listOfDates)
	->filterBySeasons([Season::SUMMER, Season::SPRING])
   	->filterByDaysOfWeek([DayOfWeek::SATURDAY, DayOfWeek::SUNDAY])
    ->build();
```


## License

The API Rackian is open-sourced software licensed under
the [MIT LICENSE](https://github.com/ivandelabeldad/php-dates/blob/master/LICENSE)
