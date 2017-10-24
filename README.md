# PHP Dates

[![Version](https://img.shields.io/badge/version-1.0.0-orange.svg)](https://github.com/ivandelabeldad/api-rackian)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/ivandelabeldad/api-rackian/blob/master/LICENSE)

Basic Dates library for PHP


## Install
```
composer require ivandelabeldad/dates
```


## Usage

### Create a Date
```
$date = Date::createDate(1999, 12, 31);
```

### Get a Date range
```
$startDate = Date::createDate(2000, 1, 1);
$endDate = Date::createDate(2000, 12, 31);

// Constains every day of the year 2000
$dates = Date::between($startDate, $endDate);
```

### Example of filtering usage
```
// Date[]
$dates = Date::between($startDate, $endDate);

// Get only weekends in summer and spring
$filtered = DateFilterBuilder::generate($dates)
	->filterBySeasons([Season::SUMMER, Season::SPRING])
   	->filterByDaysOfWeek([DayOfWeek::SATURDAY, DayOfWeek::SUNDAY])
    ->build();
```


## License

The API Rackian is open-sourced software licensed under
the MIT LICENSE
