# Vitória GTFS data

This is the repository for Vitória's public transport information in the GTFS format.

The GTFS “feeds” let public transit agencies publish their transit data and developers write applications that consume that data in an interoperable way.

It was created in the belief that public-interest information should be open and accessible.

To learn more, please check out the [Google Transit website](https://developers.google.com/transit/gtfs/) and read
the [GTFS Specification](https://developers.google.com/transit/gtfs/reference/), there's lots of good information there.


## The Goal

The goal of this project's to make Vitória's public transport information available in Google Maps.

To see an actual example of how this would look like, check out the [Belo Horizonte's transit directions](https://www.google.com.br/maps/dir/Restaurante+Rodoviária+de+BH+-+Av.+do+Contorno+-+Centro,+Belo+Horizonte+-+MG,+30110-002/Parque+Municipal+das+Mangabeiras+-+Mangabeiras,+Belo+Horizonte+-+MG/@-19.9361885,-43.9432215,14z/data=!4m14!4m13!1m5!1m1!1s0xa699fddee157cf:0x2947bf51730afd18!2m2!1d-43.9414736!2d-19.9134868!1m5!1m1!1s0xa699739551d309:0x979e8bad2de90b13!2m2!1d-43.9076151!2d-19.9550833!3e3?hl=pt-BR) on Google Maps.

To make this happen we first need to have all required files' information at least partially populated. Afterwards, the repository will be presented to the transit authorities to get their support, fill in the gaps, QA assist, maintain and finally host it online.


## Help Needed

This is a voluntary endeavor to make the city's transit data structurally available and accessible to more people.

Help in general is thoroughly appreciated though the tasks below are a good starting point.

- [x] ~~Build a tool to scrape schedule data from the [city's transit website](http://sistemas.vitoria.es.gov.br/redeiti/).~~
- [ ] Populate the `frequencies.csv` file.
- [ ] Build or find a tool to help generating data for the `stop_times.csv` file.
- [ ] Populate at least one trip's worth of stop times data.
- [ ] Populate the missing data in the `trips.csv` file.
- [ ] Create a process for drawing the trip's shapes.
- [ ] Populate the `shapes.csv` file.


## Details

### Tools

To help populating the feeds some tools were created to extract, parse and convert the transit data in various formats, which are located in the `tools/` folder. Keep in mind that these aren't optimized in any way but should work fine.

- **stops-parser.html** – a couple functions to convert from/to JSON, Geojson and CSV formats.
- **schedule-scraper** – extract routes schedule information. You should've [Composer](http://getcomposer.org) available to install its dependencies.

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
