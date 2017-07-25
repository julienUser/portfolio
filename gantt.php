<head><link href="css/dhtmlxgantt.css" rel="stylesheet"></head>
<?php require 'include/header.php'; ?>

<body>
	<?php require 'include/nav.php'; ?>	
	<img src="img/gantt/projectBGND.jpg" alt="" height="400">
		<div class="container-fluid"><br>
			<div id="gantt" style='width:100%; height:700px;'></div>
			</br>
		</div>
		
		<script src="js/dhtmlxgantt.js"></script>
		<script type="text/javascript">
			var tasks = {
					data:[

						// Dossiers principaux

						{id:10, text:"Applications logicielles",start_date:"22-09-2014", duration:730,
					    progress: 1, open: false, color:"046380"},
					    {id:20, text:"Applications mobiles",start_date:"22-09-2015", duration:365,
					    progress: 1, open: false, color:"B64926"},
					    {id:30, text:"Applications WEB",start_date:"22-09-2014", duration:730,
					    progress: 1, open: false, color:"D79771"},
					    {id:40, text:"Réseau",start_date:"22-09-2014", duration:730,
					    progress: 1, open: false, color:"79BD8F"},
					    {id:50, text:"Veille",start_date:"22-09-2014", duration:730,
					    progress: 1, open: false, color:"4E8953"},

					    // Sous-dossier applications logicielles

					    {id:101, text:"C#",start_date:"22-09-2014", duration:730,
					    progress: 1, parent:10, open: false, color:"ECF0F1"},
					    {id:102, text:"SQL",start_date:"22-09-2014", duration:730,
					    progress: 1, parent:10, open: false, color:"ECF0F1"},

					    // Sous-dossier applications mobiles

					    {id:201, text:"Swift",start_date:"22-09-2015", duration:365,
					    progress: 1, parent:20, open: false, color:"ECF0F1"},

					    // Sous-dossier applications WEB

					    {id:301, text:"HTML",start_date:"22-09-2014", duration:730,
					    progress: 1, parent:30, open: false, color:"ECF0F1"},
					    {id:302, text:"PHP",start_date:"22-09-2014", duration:730,
					    progress: 1, parent:30, open: false, color:"ECF0F1"},
					    {id:303, text:"JS",start_date:"22-09-2014", duration:730,
					    progress: 1, parent:30, open: false, color:"ECF0F1"},

					    // Projets applications logicielles

					    {id:5, text:"Projet C# 1ère année",start_date:"02-02-2015", duration:60,
					    progress: 1, parent:101, open: true},
					    {id:1, text:"Projet SQL 1ère année",start_date:"22-09-2014", duration:270,
					    progress: 1, parent:102, open: true},
					    {id:9, text:"Projet E4 C#",start_date:"12-10-2015", duration:241,
					    progress: 1, parent:101, open: true},

					    // Projets applications mobiles

					    {id:7, text:"Application prise de notes en SWIFT",start_date:"05-10-2015", parent:201, duration:13, progress: 1, open: true},

					    // Projets applications WEB

					    {id:2, text:"Projet HTML 1ère année",start_date:"17-10-2014", duration:13,
					    progress: 1, parent:301, open: true},
					    {id:3, text:"Projet PHP 1ère année",start_date:"05-01-2015", duration:165,
					    progress: 1, parent:302, open: true},
					    {id:6, text:"ABSYS",start_date:"04-05-2015", duration:45,
					    progress: 1, parent:301, open: true},
					    
					    {id:8, text:"Projet E4 Symfony",start_date:"06-10-2015", duration:247,
					    progress: 1, parent:302, open: true},
					    {id:14, text:"SFVidéothèque",start_date:"28-10-2015", duration:23,
					    progress: 1, parent:302, open: true},
					    {id:17, text:"Plateforme de petites annonces en Symfony",start_date:"04-01-2016", duration:60,
					    progress: 1, parent:302, open: true},

					    {id:15, text:"Création d'un portfolio",start_date:"02-11-2015", duration:228,
					    progress: 1, parent:301, open: true},
					    {id:16, text:"Jeu en javascript",start_date:"06-11-2015", duration:21,
					    progress: 1, parent:303, open: true},


					    // Projets réseau

		
					    {id:4, text:"Projet Réseau 1ère année",start_date:"15-01-2015", duration:100,
					    progress: 1, parent:40, open: false},
					    {id:11, text:"Projet réseau 2nd année",start_date:"15-10-2015", duration:217,
					    progress: 1, parent:40, open: true},

					    // Veilles

					    {id:12, text:"Veille technologique",start_date:"15-10-2015", duration:246,
					    progress: 1, parent:50, open: true},
					    {id:13, text:"Veille juridique",start_date:"15-10-2015", duration:246,
					    progress: 1, parent:50, open: true},

					],
					links:[
					    {id:1, source:102, target:1, type:"1"},
					    {id:2, source:301, target:2, type:"1"},
					    {id:3, source:302, target:3, type:"1"},
					    {id:4, source:40, target:4, type:"1"},
					    {id:5, source:101, target:5, type:"1"},
					    {id:6, source:301, target:6, type:"1"},

					    {id:7, source:201, target:7, type:"1"},
					    {id:8, source:302, target:8, type:"1"},
					    {id:9, source:101, target:9, type:"1"},
					    {id:11, source:40, target:11, type:"1"},
					    {id:12, source:50, target:12, type:"1"},
					    {id:13, source:50, target:13, type:"1"},
					    {id:14, source:302, target:14, type:"1"},
					    {id:15, source:301, target:15, type:"1"},
					    {id:16, source:303, target:16, type:"1"},
					    {id:17, source:302, target:17, type:"1"}
					]
				};
		        gantt.config.readonly = true;
				gantt.config.scale_unit = "month"; 				
		        gantt.config.step = 1;
				// gantt.templates.date_scale = function(date) {
				//     var d = gantt.date.date_to_str("%F %d");
				//     return "<strong>Day " + (scale_day++) + "</strong><br/>" + d(date);
				// };
				gantt.config.scale_height = 44;
		        gantt.init("gantt");
		        gantt.parse (tasks);

		
        </script>
	<?php require 'include/footer.php'; ?>
</body>
