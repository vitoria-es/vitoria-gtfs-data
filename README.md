# Vitória GTFS data

This is place to organize Vitória's public transport information in the GTFS format.

If you don't know what GTFS is and how it works, please check out the [Google Transit website](https://developers.google.com/transit/gtfs/) and read
the [GTFS Specification](https://developers.google.com/transit/gtfs/reference/). There's lots of good information there, and don't forget to come back here later.


## The Goal

The goal of this project's to make Vitória's public transport information available in Google Maps.

To make this happen we first need to have all required files' information at least partially populated. Afterwards, the repository will be presented to the transit authorities to get their support, fill in the gaps, QA assist, maintain and finally publish it to Google Maps.


## Help Needed

This is a voluntary endeavor to make the city's transit data structurally available and accessible to more people.

Help in general is throughly appreciated but the tasks below are a good starting point.

- [ ] Build a tool to scrape schedule data from the [city's transit website](http://sistemas.vitoria.es.gov.br/redeiti/).
- [ ] Populate the `frequencies.csv` file.
- [ ] Build or find a tool to help generating data for the `stop_times.csv` file.
- [ ] Populate at least one trip's worth of stop times data.
- [ ] Populate the missing data in the `trips.csv` file.
- [ ] Create a process for drawing the trip's shapes.
- [ ] Populate the `shapes.csv` file.


## Details

### Required Files

**Note:** during development files may be seem with the `.csv` extension as it's better handled by spreadsheet program, though the standard explicitly demands it to be `.txt`.

- [x] ~~agency.csv~~
- [x] ~~calendar.csv~~
- [x] ~~routes.csv~~
- [ ] stop_times.csv
- [x] ~~stops.csv~~
- [ ] trips.csv


### Optional Files

- [ ] calendar_dates.csv
- [x] ~~fare_attributes.csv~~
- [x] ~~fare_rules.csv~~
- [ ] shapes.csv
- [ ] frequencies.csv
- [ ] transfers.csv
- [x] ~~feed_info.csv~~


## Contact

This project was created by Saulo Pratti ([@blude](http://twitter.com/@blude)). Feel free to reach me out over Twitter!
