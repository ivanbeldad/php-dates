# PHP Dates

[![Packagist](https://img.shields.io/packagist/v/ivandelabeldad/dates.svg)](https://packagist.org/packages/ivandelabeldad/dates)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/ivandelabeldad/api-rackian/blob/master/LICENSE)

Basic Dates library for PHP


## Install
```
composer require ivandelabeldad/dates
```


## Usage

### Create a Date
```php
// FROM YEAR-MONTH-DAY HOUR-MINUTE-SECOND
$date = Date::createDate(1999, 12, 31);

// CURRENT TIME
$now = Date::now();

// FROM TIME IN SECONDS
$date = Date::createFromTime(time());
```

### Get a Date range
```php
$startDate = Date::createDate(2000, 1, 1);
$endDate = Date::createDate(2000, 12, 31);

// Contains every day of the year 2000
$dates = Date::between($startDate, $endDate);
```

### DateList usage
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
$list->sort(new DateTimeComparator());

// DATES SORTED FROM AFTER TO BEFORE
$list->sort(new DateTimeComparator(), false);
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
