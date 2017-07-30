# <img src="https://pepperonisandwich.oasis9.net/images/pepperonisandwich.jpg" width="60px" align="center" alt="Pepperoni Sandwich"> Pepperoni Sandwich

Pepperoni Sandwich is a GovHack project, made in Hamilton, NZ.

Its primary function, derived from its name, is carpooling. It uses public transport routes, traffic, crash, and roadworks data to aid in decongestion.

Hence, the more people begin to use this tool, the faster transport will be, and at the same time greenhouse gas emissions will decrease.

This is not a functional project but a conceptual prototype has been the outcome of our work over the weekend.

A demo is available at https://pepperonisandwich.oasis9.net, with default credentials:
```
	Username: sandwich
	Password: pepperoni
```

The credentials are, amusingly, hardcoded. They can be defined in html/auth.php

## Datasets

Our aim was to use public transport, accident, traffic, and corridor access data to optimize directions for the driver and the passenger, as well as the environment.

In a functional environment, the datasets Disaggregated Crash Data 2016 (NZTA), Greenhouse Gas Emissions 1990 - 2014 (Statistics NZ), and Public Transport Data 2017(NZTA) would each have been used to determine the routes to suggest to drivers.

Live APIs such as RAMM's (unavailable publicly currently) would be used to prevent accidents and holdups, increasing traffic flow.
This would be especially useful in a recovery from a natural disaster, as works are continually ongoing - in Christchurch, for instance.
Ensuring transport networks are always optimal for travel, where many forms of transport have been unexpectedly decommissioned, is where this software will prove most useful, as well as in a bustling city, where reducing traffic is now the aim.

Other data such as corridor access requests were unavailable due to public inaccessessibility.

## Setup

This project runs on PHP, hence the PHP engine is required.
The file tree is as such:

```
pepperonisandwich.oasis9.net
├── html			- Webroot
|	├── css
|	|	└── ...
|	├── js
|	|	└── ...
|	├── images
|	|	└── ...
|	├── auth.php		- Intentionally in webroot for compatibility with AJAX
|	└── index.php		- Serves files that exist outside of webroot
└── resources
	├── panel.php		- Main page shown once signed in - use the hamburger menu to navigate
	├── signin.php		- Page shown when not signed in
	└── pages		- Pages loaded into panel via AJAX
		├── load.php	- Loading screen
		├── home.php	- Homepage
		├── groups.php	- Grouping example
		└── 404.php	- ERROR ── Hacking too much time!
```

Unfortunately, there is no loading screen for the loading screen (and no loading screen for the loading screen for the loading screen...)

## Examples

Our example panel shows a Google Map with a heatmap intended for use with traffic data.

The group selection page implements a conceptual design for the analysis of different driver's paths that may be applicable to your intended direction of travel (A to B).

Should we continue work on this project, the next steps would be as follows:
```
	* Pester governments for data
	* Implement proper user account management systems and administration tools
	* Place appropriate user related data on the panel page (Carpools, volunteer status)
	* Introduce a search function that will lead to the group selection page
	* Add appropriate markers for your origin A and destination B for comparison with available approximately suitable driver paths
	* Avert Google Maps' default pathfinding by introducing waypoints to the router based on determined path
	* Implement a chat system for initial communication with driver/client
	* Mobile support
	* Consider financially viable options for commercialising the software
```

## Contributors

Bob Sharp

Samskar Palavarapu

Eric Zhang

Sir James Wong
