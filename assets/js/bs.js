"use strict";

var slist = [];
var xicon = {

	url: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAAEW3a/2AAAACXBIWXMAAAsTAAALEwEAmpwYAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAAD6ElEQVR42mJgQIBFAAHECGXwATEHQAAxIAOAAEJBAAEEQhIgAiCAmIA4AMQACCA4AgggELIGYh6AAIJxwoF4BxBLAvFGgABCViUAxHdBDIAAYoEKnABiYSCeCMTPAQIIq50AAcQMxB5AXADEW4FYB4hNAAIIJHEdquA/ENsCsShAAMF0sAHxJhgHIIBg6AJUJQgzAAQQM1TwKhB/BeLfQDwPIIBAAmFQFT1Q+iJAAMG0vwfitVhcZwiltQECCBaKEUAsDcSO0CCYDLWuAYgVgfg+QAAh62aH0peAuBmITaF8SxABEEDo6BjUTWVQtiJMAiCAmJEUnQPiH0D8DCr+EYi1gPgmiA0QQDBFR4E4B8ruBuI/QCwP5b8FpQSAAAIxDgHxeSQ3ngLi3UCcBeW7gKIAIIBgJkbhSDD8UMwAEECgRCMDxK+BuBaLwtVAPB/EAAggUMKwB2IuIH4CxKBw/Qd1YwwQdwAxK0ghQACBFP4F4p9A/Blqw1doWEpB2SB5BoAAAklsgaY9Y6jgPSBeBcT9QOwOxCUghQABBEPSUFoUiBuBuBjKZ4E6hwEggNDRTiAOggZ4PrIEQACxILG5oTHgDk1mz5EVAgQQExJ7DdQ9GtAAB8WIFUwSIIBg9nNCo+4/1J3foXIiQOwDUgAQQDDUAg0SULbZAPW1GhDfgqUggACCWf8fKfd8hSYScMqGBhcDQACBUCWUfgnEsdCMCQJ7gXgSNOAlAQKIARorsCRmDE0925A8ug6I7wAEELI7g6Huk4ImWEIA5HZzIJ4FxBNgggABBDPdA1pE9UJLAlBolUITjhY0VmdBExQIeEITXAgQ74IGWDZIAiCAYCgOmipTgdgBalggUiHyHwmbAbEeEB+GlkugtOcEDR8GgACCISdoyWgONQCU49uQitAmaJmjg+QjcSCeCsTO0FyYAJIACCBkBMqSK6FRyI0kXgXE36DZdRVSgcEB9fZsaJCAAUAAEUKx0OLRFYg7oT5ZBTUIKwAIIHwIFOuvgLgCmkRA7DlQly7DpQkggJhxiPtCXXIQmifkoDEJKsEeQ4NHE4g3o2sECCBsCBQxH4DYDspXBeIV0KwRglS6fYcVXMgAIIDQkTu0yLaBuu4jNEnZQSNHDpp0bkPDsw4axnAAEEDISAdahy5HqyiCocU+qLRciCQOqtfbob7pgwkCBBAjkjcXQsvkUGjAg7AbtB55D62fr0N9sR+InwKxPxCvh+YmUGEwFSCAmKCBWwUt3gyhJcFdqAtkoBYdhsbyYmiaBJVyN6Dleyw0mEClXTdAAIFctwAao/I4gkIXiA9Ay6cSHGo4oQXEGoAAAwAs1rO6Un35fwAAAABJRU5ErkJggg==",
	anchor: new google.maps.Point(10, 16)
};

class site
{
	constructor(gm, map, sitedata)
	{
		this.self = this;
		this.gm = gm;
		this.map = map;
		this.cp = new google.maps.LatLng(sitedata['base'].lat, sitedata['base'].lon);

		this.siteid = sitedata['base'].siteid;
		this.sitename = sitedata['base'].sitename;
		this.title = sitedata['base'].title;
		this.description = sitedata['base'].description;
		this.lat = sitedata['base'].lat;
		this.lon = sitedata['base'].lon;

		this.cells = [];
		this.colors = ['#1abc9c', '#f1c40f', '#2ecc71', '#3498db', '#9b59b6', '#34495e', '#e67e22', '#e74c3c', '#95a5a6'];

		var cellblock = JSON.parse(JSON.stringify(sitedata.cell));

		for (var i = 0; i < cellblock.length; i++)
		{
			var nfo = cellblock[i];

			nfo.lat = this.lat;
			nfo.lon = this.lon;
			nfo.color = nfo.color || this.colors[i];

			this.cells.push(new cell(this.self, this.gm, this.map, nfo));
		}

		console.log("Initializing site class => " + sitedata['base'].sitename);
	}

	get name()
	{
		return this.sitename;
	}

	push(options)
	{
		options.lat = this.lat;
		options.lon = this.lon;

		this.cells.push(new cell(this.self, this.gm, this.map, options));
	};

	addmarker() {

		var self = this;

		this.marker = new this.gm.Marker({

			position: this.cp,
			map: this.map,
			title: this.title,
			icon: xicon
        });

		if (self.title.length > 1 && self.description.length > 1)
		{
			this.infowindow = new google.maps.InfoWindow({
				content: '<div class="infownd"><strong>' + this.title + '</strong><br><p>' + this.description + '</p></div>'
			});

			this.marker.addListener('click', function() {

				self.popup();
			});
		}
	};

	popup(content) {

		content = content || '<div class="infownd"><strong>' + this.title + '</strong><br><p>' + this.description + '</p></div>';

		this.infowindow.setContent(content);
		this.infowindow.open(this.map, this.marker);
	};

	show() {

		this.addmarker();

		for (var i = 0; i < this.cells.length; i++)
			this.cells[i].show();
	};

	focus()
	{
		this.map.setZoom(14);
		this.map.setCenter(this.marker.getPosition());
	};
};

function cell(mother, gm, map, options)
{
	this.mother = mother;
	this.gm = gm;
	this.map = map;

	this.cellid = options.cellid;
	this.title = options.title || '0';
	this.description = options.description || '0';
	this.lat = options.lat;
	this.lon = options.lon;
	this.cp = new google.maps.LatLng(this.lat, this.lon);
	this.azimuth = options.azimuth;
	this.beamspan = options.beamspan;
	this.beamrange = options.beamrange;
	this.color = options.color;

	this.print = function() {

		console.log("A logging process" + this.description);
	};

	this.getArcPath = function () {

		var point, previous,
			func = google.maps.geometry.spherical.computeOffset,
			points = [],
			loops = 0,
			a = this.azimuth,
			endAngle = a + this.beamspan,
			increment = (typeof resolution == 'number' && !isNaN(resolution)) ? resolution : 1;

		while (true) {

			point = func(this.cp, this.beamrange, a);
			points.push(point);

			if (a == endAngle && points.length > 1)
				break;

			previous = a;
			a += increment;

			// This is to prevent over spillage but wont work
			// for whole circle back angles
			//
			// if (a >= 360 && endAngle != 360) {

			// 	loops++;
			// 	if (loops > 1) {
			// 		console.error('Excessive recursion in getArcPath()');
			// 		return [];
			// 	}
			// 	a = a % 360;
			// }

			if ((previous < endAngle) && (a >= endAngle)) 
				a = endAngle;
		}

		return points;
	}

	this.show = function() {

		var self = this;
		var path = this.getArcPath();

		path.unshift(this.cp);
		path.push(this.cp);

		var poly = new gm.Polygon({

			path: path,
			map: this.map,
			strokeWeight: 0,
			fillColor: this.color,
			fillOpacity: 0.5
		});

		google.maps.event.addListener(poly, "click", function(event) {
		
			if (self.title.length > 1 && self.description.length > 1)
				self.mother.popup('<div class="infownd"><strong>' + self.title + '</strong><br><p>' + self.description + '</p></div>');
		});
	};
};


function initialize()
{
	var gm = google.maps;
	var cp = new gm.LatLng(option.main.center[0], option.main.center[1]);
	var map = new gm.Map(document.getElementById('map'), {

		mapTypeId: gm.MapTypeId.ROADMAP,
		zoom: 12,
		center: cp
	});

	console.log("option.data.length:" + option.data.length);

	for (var i = 0; i < option.data.length; i++)
	{
		var vals = JSON.parse(JSON.stringify(option.data[i]));

		slist.push(new site(gm, map, vals));
		slist[i].show();
	}

	$(document).on('change', ':file', function(e) {

		document.getElementById("fileupload").submit();
	});
}

google.maps.event.addDomListener(window, 'load', initialize);