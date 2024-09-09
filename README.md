# Time

This module reports on a few basic facts about time. 

## Table Schema

The table contains the following information, one row per machine:

* id (int) Unique id
* serial_number (string) Serial Number
* timezone (string) Country/City
* networktime_status (boolean) Is network time on
* networktime_server (string) List of network time servers enabled
* autotimezone (boolean) Is auto time zone on
* cur_local_time (string) The current local time as reported by macOS on last MunkiReport run
* location_enabled (boolean) Location services enabled
* automatic_time_only_enabled (boolean) If `TMAutomaticTimeOnlyEnabled` is set
* automatic_time_zone_enabled (boolean) If `TMAutomaticTimeZoneEnabled` is set