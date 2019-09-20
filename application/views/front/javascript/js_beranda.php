<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
	am4core.ready(function() {

		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		// Create chart instance
		var chart = am4core.create("chart-penduduk", am4charts.PieChart);

		// Add data
		chart.data = [ {
		  "country": "Lithuania",
		  "litres": 501.9
		}, {
		  "country": "Czech Republic",
		  "litres": 301.9
		}, {
		  "country": "Ireland",
		  "litres": 201.1
		}, {
		  "country": "Germany",
		  "litres": 165.8
		}, {
		  "country": "Australia",
		  "litres": 139.9
		}, {
		  "country": "Austria",
		  "litres": 128.3
		}, {
		  "country": "UK",
		  "litres": 99
		}, {
		  "country": "Belgium",
		  "litres": 60
		}, {
		  "country": "The Netherlands",
		  "litres": 50
		} ];

		// Set inner radius
		chart.innerRadius = am4core.percent(50);

		// Add and configure Series
		var pieSeries = chart.series.push(new am4charts.PieSeries());
		pieSeries.dataFields.value = "litres";
		pieSeries.dataFields.category = "country";
		pieSeries.slices.template.stroke = am4core.color("#fff");
		pieSeries.slices.template.strokeWidth = 2;
		pieSeries.slices.template.strokeOpacity = 1;

		// This creates initial animation
		pieSeries.hiddenState.properties.opacity = 1;
		pieSeries.hiddenState.properties.endAngle = -90;
		pieSeries.hiddenState.properties.startAngle = -90;

		var chart = am4core.create("chart-potensi-desa", am4plugins_forceDirected.ForceDirectedTree);
		var networkSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())

		chart.data = [
		  {
		    name: "Core",
		    children: [
		      {
		        name: "First",
		        children: [
		          { name: "A1", value: 100 },
		          { name: "A2", value: 60 }
		        ]
		      },
		      {
		        name: "Second",
		        children: [
		          { name: "B1", value: 135 },
		          { name: "B2", value: 98 }
		        ]
		      },
		      {
		        name: "Third",
		        children: [
		          {
		            name: "C1",
		            children: [
		              { name: "EE1", value: 130 },
		              { name: "EE2", value: 87 },
		              { name: "EE3", value: 55 }
		            ]
		          },
		          { name: "C2", value: 148 },
		          {
		            name: "C3", children: [
		              { name: "CC1", value: 53 },
		              { name: "CC2", value: 30 }
		            ]
		          },
		          { name: "C4", value: 26 }
		        ]
		      },
		      {
		        name: "Fourth",
		        children: [
		          { name: "D1", value: 415 },
		          { name: "D2", value: 148 },
		          { name: "D3", value: 89 }
		        ]
		      },
		      {
		        name: "Fifth",
		        children: [
		          {
		            name: "E1",
		            children: [
		              { name: "EE1", value: 33 },
		              { name: "EE2", value: 40 },
		              { name: "EE3", value: 89 }
		            ]
		          },
		          {
		            name: "E2",
		            value: 148
		          }
		        ]
		      }

		    ]
		  }
		];

		networkSeries.dataFields.value = "value";
		networkSeries.dataFields.name = "name";
		networkSeries.dataFields.children = "children";
		networkSeries.nodes.template.tooltipText = "{name}:{value}";
		networkSeries.nodes.template.fillOpacity = 1;
		networkSeries.manyBodyStrength = -20;
		networkSeries.links.template.strength = 0.8;
		networkSeries.minRadius = am4core.percent(2);

		networkSeries.nodes.template.label.text = "{name}"
		networkSeries.fontSize = 10;

	}); // end am4core.ready()
</script>