<?php

$params = [
    
    'mapbox_token'=>'pk.eyJ1Ijoicm9lbGZpbHdlYiIsImEiOiJjbGh6am1tankwZzZzM25yczRhMWhhdXRmIn0.aLWnLb36hKDFVFmKsClJkg',
    'fpo_cluster' => [
        [
            "id" => 1,
            "label" => "Cluster 1 (Baybay)"
        ],
        [
            "id" => 2,
            "label" => "Cluster 2a (Ilaya)"
        ],
        [
            "id" => 3,
            "label" => "Cluster 2b (Ilaya)"
        ],
        [
            "id" => 4,
            "label" => "Cluster 3 (Umiray)"
        ],
      
    ],
    
    'floras' => [
        [
            "icon" => '',
            "id" => 1,
            "label_eng" => "Epiphytes",
            "label" => "Epipitas"
        ],
        [
            "icon" => '',
            "id" => 2,
            "label_eng" => "Ferns",
            "label" => "Pako"
        ],
        [
            "icon" => '',
            "id" => 3,
            "label_eng" => "Grass",
            "label" => "Damo at Uwak-Uwakan"
        ],
        [
            "icon" => '',
            "id" => 4,
            "label_eng" => "Herbs",
            "label" => "Halamang-Gamot"
        ],
        [
            "icon" => '',
            "id" => 5,
            "label_eng" => "Trees",
            "label" => "Punong Kahoy"
        ],
        [
            "icon" => '',
            "id" => 6,
            "label_eng" => "Vines",
            "label" => "Gumagapang na halaman"
        ],
        [
            "icon" => '',
            "id" => 7,
            "label_eng" => "Palms",
            "label" => "Palma"
        ],
        [
            "icon" => '',
            "id" => 8,
            "label_eng" => "Shrubs",
            "label" => "Halaman na Mababa"
        ],
        [
            "icon" => '',
            "id" => 99,
            "label_eng" => "Others",
            "label" => "Iba pa"
        ],
    ],

    'faunas' => [
        [
            "icon" => '',
            "id" => 1,
            "label_eng" => "Fish",
            "label" => "Isda"
        ],
        [
            "icon" => '',
            "id" => 2,
            "label_eng" => "Arthropods",
            "label" => "Arthropoda"
        ],
        [
            "icon" => '',
            "id" => 3,
            "label_eng" => "Birds",
            "label" => "Ibon"
        ],
        [
            "icon" => '',
            "id" => 4,
            "label_eng" => "Amphibians",
            "label" => "Amphibians"
        ],
        [
            "icon" => '',
            "id" => 5,
            "label_eng" => "Mammals",
            "label" => "Mamalya"
        ],
        [
            "icon" => '',
            "id" => 6,
            "label_eng" => "Reptiles",
            "label" => "Reptilya"
        ],
        [
            "icon" => '',
            "id" => 99,
            "label_eng" => "Others",
            "label" => "Iba pa"
        ],
    ],

     'incidents' => [
            [
                'id' => 1,
                'label_eng' => 'Logging', //Deforestation
                'label' => 'Pagpuputol ng puno',
                "icon" => 'https://gennakar.accessgov.ph/default/categories/Logging.png',
                'incident_type' => [
                    [
                        'id' => 1,
                        'label_eng' => 'Personal Use',
                        'label' => 'Panggamit sa bahay',
                        "icon" => '',
                    ],
                    [
                        'id' => 2,
                        'label_eng' => 'Commercial Activity',
                        'label' => 'Pambenta',
                        "icon" => '',
                    ],
                ]
            ],
            [
                'id' => 2,
                'label_eng' => 'Land Clearing',
                'label' => 'Pagkakaingin',
                "icon" => 'https://gennakar.accessgov.ph/default/categories/kaingin.png',
                'incident_type' => [
                    [
                        'id' => 1,
                        'label_eng' => 'Agricultural',
                        'label' => 'May kinalaman sa pagtatanim',
                        "icon" => '',
                    ],
                    [
                        'id' => 2,
                        'label_eng' => 'Infrastructure',
                        'label' => 'May kinalaman sa pagpapagawa',
                        "icon" => '',
                    ],
                    [
                        'id' => 3,
                        'label_eng' => 'Mining',
                        'label' => 'May kinalaman sa pagmimina',
                        "icon" => '',
                    ],
                    [
                        'id' => 4,
                        'label_eng' => 'Others',
                        'label' => 'Iba pa',
                        "icon" => '',
                    ],
                ]
            ],
            [
                'id' => 3,
                'label_eng' => 'Enroachment',
                'label' => 'Pag-angkin ng lupa',
                "icon" => 'https://gennakar.accessgov.ph/default/categories/encroachment.png',
                'incident_type' => [
                    [
                        'id' => 1,
                        'label_eng' => 'Unauthorized settlements',
                        'label' => 'Iligal pag-iiskwater',
                        "icon" => '',
                    ],
                    [
                        'id' => 2,
                        'label_eng' => 'Unauthorized tourism facility',
                        'label' => 'Iligal na pang-turista',
                        "icon" => '',
                    ],
                    [
                        'id' => 3,
                        'label_eng' => 'Others',
                        'label' => 'Iba pa',
                        "icon" => '',
                    ],
                ]
            ],
            [
                'id' => 4,
                'label_eng' => 'Poaching',
                'label' => 'Ilegal na pangagaso',
                "icon" => 'https://gennakar.accessgov.ph/default/categories/Pouching.png',
                'incident_type' => [
                    [
                        'id' => 1,
                        'label_eng' => 'Flora',
                        'label' => 'Halaman',
                        "icon" => '',
                    ],
                    [
                        'id' => 2,
                        'label_eng' => 'Fauna',
                        'label' => 'Hayop',
                        "icon" => '',
                    ],
                    [
                        'id' => 3,
                        'label_eng' => 'Others',
                        'label' => 'Iba pa',
                        "icon" => '',
                    ],
                    
                ]
            ],
            [
                'id' => 5,
                'label_eng' => 'Soil Erosion',
                'label' => 'Pagguho ng lupa',
                "icon" => 'https://gennakar.accessgov.ph/default/categories/soil-erosion.png',
                'incident_type' => [
                    [
                        'id' => 1,
                        'label_eng' => 'Water-induced',
                        'label' => 'Dahil sa tubig o ulan',
                        "icon" => '',
                    ],
                    [
                        'id' => 2,
                        'label_eng' => 'Human-activity',
                        'label' => 'Dahil sa tao',
                        "icon" => '',
                    ],
                ]
            ],
            [
                'id' => 6,
                'label_eng' => 'Illegal Forest Activity',
                'label' => 'Ilegal na gawain',
                "icon" => 'https://gennakar.accessgov.ph/default/categories/illegal-activities.png',
                'incident_type' => [
                    [
                        'id '=>1,
                        'label_eng' => 'Mining',
                        'label' => 'Pagmimina',
                        "icon" => '',
                    ],
                    [
                        'id '=>2,
                        'label_eng' => 'Charcoal making',
                        'label' => 'Paguuling',
                        "icon" => '',
                    ],
                ]
            ],
            [
                'id' => 7,
                'label_eng' => 'Pollution',
                'label' => 'Polusyon',
                "icon" => 'https://gennakar.accessgov.ph/default/categories/other-pollutants.png',
                'incident_type' => [
                    [
                        'id' => 1,
                        'label_eng' => 'Water pollution',
                        'label' => 'Sa tubig',
                        "icon" => '',
                    ],
                    [
                        'id' => 2,
                        'label_eng' => 'Air pollution',
                        'label' => 'Sa hangin',
                        "icon" => '',
                    ],
                    [
                        'id' => 3,
                        'label_eng' => 'Solid waste',
                        'label' => 'Basura',
                        "icon" => '',
                    ],
                    [
                        'id' => 4,
                        'label_eng' => 'Others',
                        'label' => 'Iba pa',
                        "icon" => '',
                    ],
                ]
            ],
            [
                'id' => 8,
                'label_eng' => 'Damaged Infrastracture',
                'label' => 'Sirang imprastraktura',
                "icon" => 'https://gennakar.accessgov.ph/default/categories/damage-infra.png',
                'incident_type' => [
                    [
                        'id' => 1,
                        'label_eng' => 'Natural causes',
                        'label' => 'Dahil sa kalikasan, ulan, baha, etc.',
                        "icon" => '',
                    ],
                    [
                        'id' => 2,
                        'label_eng' => 'Neglect',
                        'label' => 'Dahil napabayaan',
                        "icon" => '',
                    ],
                    [
                        'id' => 3,
                        'label_eng' => 'Vandalism',
                        'label' => 'Sinadyang sirain',
                        "icon" => '',
                    ],
                ]
            ],
            [
                'id' => 9,
                'label_eng' => 'Others',
                'label' => 'Iba pa',
                "icon" => '',
                'incident_type' => []
           ],
         ],
        
    'mapbox' => [
        'color_pallete' => [
            'red' => ['#f2c94c', '#f2994a', '#eb5757'],
            'purple' => ['#fdacb2', '#fa5f96', '#c21d7d'],
            'violet' => ['#a9c6de', '#818abc', '#804b9b'],
            'blue' => ['#b4d1e2', '#5fa3ce', '#2b75b2'],
            'green' => ['#b7e392', '#66bf71', '#1a994e'],
            'black' => ['#dadbdb', '#8b8b8b', '#333333'],
        ],
        'color_scheme' => [
            '#F10909' => [
                'name' => 'Red',
                'typhoon_class' => 'Very High',
            ],
            '#F0B60A' => [
                'name' => 'Yellow',
                'typhoon_class' => 'High',
            ],
            '#FF0000' => [
                'name' => 'Red',
                'center' => 'Kabilogan',
                'condition' => 'High',
                'barangay' => 'Mahabang Lalim',
                'shed_name' => 'Anibong',
                'cluster_ol' => 'Kabilogan Cluster',
                'cluster_number' => 'Cluster 2',
                'cluster' => 'Kabilogan Cluster',
                'province' => 'Bulacan',
                'watershed' => 'Umiray',
                'region' => 'Region III (Central Luzon)',
                'municipality' => 'Doña Remedios Trinidad',
                'municipality_cadastral' => 'Nakar',
                'soil' => 'Sibul Clay',
                'land_cover_2003' => 'Grassland',
                'land_cover_2010' => 'Grassland',
                'land_cover_2015' => 'Grassland',
                'street' => 'Sabiduria, Arellano',
            ],
            '#00FF00' => [
                'name' => 'Lime Green',
                'barangay' => 'Sablang',
                'shed_name' => 'Masanga',
                'cluster_ol' => 'Ilaya Cluster',
                'cluster' => 'Ilaya Cluster',
                'province' => 'Laguna',
                'watershed' => 'Kaliwa',
                'municipality' => 'Norzagaray',
                'soil' => 'Antipolo Sandy Clay',
                'land_cover_2003' => 'Perennial Crop',
                'land_cover_2010' => 'Perennial Crop',
                'land_cover_2015' => 'Perennial Crop',
                'street' => 'Suarez',
            ],
            '#0000FF' => [
                'name' => 'Blue',
                'barangay' => 'Pesa',
                'shed_name' => 'Ibona',
                'cluster_ol' => 'Baybay Itaas',
                'cluster_number' => 'Cluster 1',
                'cluster' => 'Baybay Cluster',
                'province' => 'Quezon',
                'watershed' => 'Kanan',
                'region' => 'Region IV-A (CALABARZON)',
                'municipality' => 'Santa Maria',
                'municipality_cadastral' => 'Contested',
                'soil' => 'Annam Loam Gravelly',
                'land_cover_2003' => 'Shrubs',
                'land_cover_2010' => 'Shrubs',
                'land_cover_2015' => 'Shrubs',
                'street' => 'Roxas',
            ],
            '#FFFF00' => [
                'name' => 'Yellow',
                'condition' => 'Low',
                'barangay' => 'Minahan Norte',
                'shed_name' => 'Banbanan',
                'cluster_ol' => 'Baybay Ibaba',
                'province' => 'Rizal',
                'municipality' => 'General Nakar',
                'soil' => 'Qulangua Silt Loam',
                'land_cover_2003' => 'Built-up',
                'land_cover_2010' => 'Built-up',
                'land_cover_2015' => 'Built-up',
                'street' => 'Burgos',
            ],
            '#FF00FF' => [
                'name' => 'Magenta',
                'barangay' => 'Maigang',
                'shed_name' => 'Ikdan',
                'municipality' => 'Infanta',
                'soil' => 'Novaliches Loam',
                'land_cover_2003' => 'Open/Barren',
                'land_cover_2010' => 'Open/Barren',
                'land_cover_2015' => 'Open/Barren',
                'street' => 'Quezon',
            ],
            '#00FFFF' => [
                'name' => 'Cyan',
                'barangay' => 'Pamplona',
                'shed_name' => 'Agos-Nakar Side',
                'municipality' => 'City Of Antipolo',
                'soil' => 'Mountain Soil',
                'land_cover_2003' => 'Annual Crop',
                'land_cover_2010' => 'Annual Crop',
                'land_cover_2015' => 'Annual Crop',
            ],
            '#800080' => [
                'name' => 'Purple',
                'barangay' => 'Lumutan',
                'shed_name' => 'Masla',
                'cluster_ol' => 'Lumutan',
                'municipality' => 'Rodriguez (Montalban)',
                'soil' => 'Umingan Loam',
                'land_cover_2003' => 'Closed Forest',
                'land_cover_2010' => 'Closed Forest',
                'land_cover_2015' => 'Closed Forest',
            ],
            '#FFA500' => [
                'name' => 'Orange',
                'condition' => 'Moderate',
                'barangay' => 'Pagsangahan',
                'shed_name' => 'Malatunglan',
                'cluster_ol' => 'Pagsangahan',
                'municipality' => 'Tanay',
                'soil' => 'Annam Clay Loam',
                'land_cover_2003' => 'Open Forest',
                'land_cover_2010' => 'Open Forest',
                'land_cover_2015' => 'Open Forest',
            ],
            '#FFC0CB' => [
                'name' => 'Pink',
                'barangay' => 'Magsikap',
                'shed_name' => 'Tamala',
                'soil' => 'Antipolo Soils',
                'land_cover_2003' => 'Inland Water',
                'land_cover_2010' => 'Inland Water',
                'land_cover_2015' => 'Inland Water',
            ],
            '#008000' => [
                'name' => 'Green',
                'barangay' => 'Batangan',
                'shed_name' => 'Idyang',
                'land_cover_2003' => 'Mangrove Forest',
                'land_cover_2010' => 'Mangrove Forest',
                'land_cover_2015' => 'Mangrove Forest',
            ],
            '#FFD700' => [
                'name' => 'Gold',
                'center' => 'Maligaya',
                'barangay' => 'Maligaya',
                'shed_name' => 'Magnac',
                'land_cover_2010' => 'Wooded Grassland',
            ],
            '#800000' => [
                'name' => 'Maroon',
                'barangay' => 'Minahan Sur',
                'shed_name' => 'Depalyon',
            ],
            '#008080' => [
                'name' => 'Teal',
                'barangay' => 'Anoling',
                'shed_name' => 'Guindan',
            ],
            '#FF4500' => [
                'name' => 'Orange-Red',
                'barangay' => 'Banglos'
            ],
            '#00CED1' => [
                'name' => 'Dark Turquoise',
                'center' => 'Umiray',
                'barangay' => 'Umiray',
                'cluster_ol' => 'Umiray',
            ],
            '#FF69B4' => [
                'name' => 'Hot Pink',
                'barangay' => 'Contested Area'
            ],
            '#8A2BE2' => [
                'name' => 'Blue-Violet',
                'barangay' => 'Catablingan'
            ],
            '#FF6347' => [
                'name' => 'Tomato',
                'barangay' => 'Poblacion'
            ],
            '#FF1493' => [
                'name' => 'Deep Pink',
                'barangay' => 'San Marcelino'
            ],
            '#32CD32' => [
                'name' => 'Lime',
                'barangay' => 'Canaway'
            ],
            '#DC143C' => [
                'name' => 'Crimson',
                'barangay' => 'Daraitan'
            ],
            '#00FF7F' => [
                'name' => 'Spring Green',
                'barangay' => 'Puray'
            ],
            '#1E90FF' => [
                'name' => 'Dodger Blue',
                'barangay' => 'Cuyambay'
            ],
            '#6A5ACD' => [
                'name' => 'Slate Blue',
                'barangay' => 'San Andres'
            ],
            '#000080' => [
                'name' => 'Navy Blue',
                'barangay' => 'Kabayunan'
            ],
            '#48D1CC' => [
                'name' => 'Medium Turquoise',
                'barangay' => 'Mamuyao'
            ],
            '#FF8C00' => [
                'name' => 'Dark Orange',
                'barangay' => 'San Lorenzo'
            ],
            '#6B8E23' => [
                'name' => 'Olive Drab',
                'barangay' => 'Santa Inez'
            ],
            '#9932CC' => [
                'name' => 'Dark Orchid',
                'barangay' => 'Calawis'
            ],
            '#FFA07A' => [
                'name' => 'Light Salmon',
                'barangay' => 'Sampaloc'
            ],
            '#20B2AA' => [
                'name' => 'Light Sea Green',
                'barangay' => 'Magsaysay'
            ],
            '#BA55D3' => [
                'name' => 'Medium Orchid',
                'barangay' => 'Santiago'
            ],
            '#FF8F00' => [
                'name' => 'Dark Orange',
                'barangay' => 'Tinucan'
            ],
            '#DA70D6' => [
                'name' => 'Orchid',
                'barangay' => 'Plaza Aldea (Pob)'
            ],
            '#FFDAB9' => [
                'name' => 'Peach Puff',
                'barangay' => 'Cayabu'
            ],
            '#7FFF00' => [
                'name' => 'Chartreuse',
                'barangay' => 'Jose Laurel, Sr'
            ],
            '#993333' => [
                'name' => 'Dark Scarlet',
                'barangay' => 'Sapang Bulak'
            ],
            '#4B0082' => [
                'name' => 'Indigo',
                'barangay' => 'Laiban'
            ],
            '#FF7F50' => [
                'name' => 'Coral',
                'barangay' => 'Camachin'
            ],
            '#00FFB0' => [
                'name' => 'Turquoise',
                'barangay' => 'Santo Niño'
            ],
            '#FFD600' => [
                'name' => 'Amber',
                'barangay' => 'San Jose (Pob)'
            ],
            '#FFFF99' => [
                'name' => 'Canary Yellow',
                'barangay' => 'Kalawakan'
            ],
        ],
        'layers' => [
            'assessor' => [
                'boundaries' => [
                    'cadastral' => [
                        [
                            'id' => 'ab-cadastral-barangay',
                            'label' => 'Per Barangay',
                            'opacity' => 85,
                            'visible' => true,
                            'color_key' => 'barangay',
                            'data_labels' => [
                                'Mahabang Lalim',
                                'Sablang',
                                'Pesa',
                                'Minahan Norte',
                                'Maigang',
                                'Pamplona',
                                'Lumutan',
                                'Pagsangahan',
                                'Magsikap',
                                'Batangan',
                                'Maligaya',
                                'Minahan Sur',
                                'Anoling',
                                'Banglos',
                                'Umiray',
                                'Contested Area',
                                'Catablingan',
                                'Poblacion',
                                'San Marcelino',
                                'Canaway',
                            ]
                        ],
                        [
                            'id' => 'ab-cadastral-municipality',
                            'label' => 'Per Municipality',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'municipality_cadastral',
                            'data_labels' => [
                                'Nakar',
                                'Contested'
                            ]
                        ],
                        [
                            'id' => 'ab-cadastral-cluster-ol',
                            'label' => 'Per Cluster Ol',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'cluster_ol',
                            'data_labels' => [
                                'Kabilogan Cluster',
                                'Ilaya Cluster',
                                'Baybay Itaas',
                                'Baybay Ibaba',
                                'Lumutan',
                                'Pagsangahan',
                                'Umiray',
                            ]
                        ],
                        [
                            'id' => 'ab-cadastral-cluster',
                            'label' => 'Per Cluster',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'cluster',
                            'data_labels' => [
                                'Kabilogan Cluster',
                                'Ilaya Cluster',
                                'Baybay Cluster',
                            ]
                        ]
                    ],
                    'major' => [
                        [
                            'id' => 'ab-major-barangay',
                            'label' => 'Per Barangay',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'barangay',
                            'data_labels' => [
                                'Mahabang Lalim',
                                'Daraitan',
                                'Puray',
                                'Cuyambay',
                                'San Andres',
                                'Kabayunan',
                                'Mamuyao',
                                'San Lorenzo',
                                'Santa Inez',
                                'Calawis',
                                'Lumutan',
                                'Sampaloc',
                                'Pagsangahan',
                                'Magsaysay',
                                'Santiago',
                                'Tinucan',
                                'Plaza Aldea (Pob)',
                                'Umiray',
                                'Cayabu',
                                'Jose Laurel, Sr',
                                'Contested Area',
                                'Sapang Bulak',
                                'Laiban',
                                'Camachin',
                                'Santo Niño',
                                'San Jose (Pob)'
                            ]
                        ],
                        [
                            'id' => 'ab-major-municipality',
                            'label' => 'Per Municipality',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'municipality',
                            'data_labels' => [
                                'Doña Remedios Trinidad',
                                'Norzagaray',
                                'Santa Maria',
                                'General Nakar',
                                'Infanta',
                                'City Of Antipolo',
                                'Rodriguez (Montalban)',
                                'Tanay',
                            ]
                        ],
                        [
                            'id' => 'ab-major-province',
                            'label' => 'Per Province',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'province',
                            'data_labels' => [
                                'Bulacan',
                                'Laguna',
                                'Quezon',
                                'Rizal',
                            ]
                        ],
                        [
                            'id' => 'ab-major-region',
                            'label' => 'Per Region',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'region',
                            'data_labels' => [
                                'Region III (Central Luzon)',
                                'Region IV-A (CALABARZON)',
                            ]
                        ],
                        [
                            'id' => 'ab-major-watershed',
                            'label' => 'Per Watershed',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'watershed',
                            'data_labels' => [
                                'Umiray',
                                'Kaliwa',
                                'Kanan',
                            ]
                        ]
                    ],
                    'minor' => [
                        [
                            'id' => 'ab-minor-barangay',
                            'label' => 'Per Barangay',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'barangay',
                            'data_labels' => [
                                'Mahabang Lalim',
                                'Sablang',
                                'Pesa',
                                'Minahan Norte',
                                'Maigang',
                                'Pamplona',
                                'Magsikap',
                                'Batangan',
                                'Maligaya',
                                'Minahan Sur',
                                'Anoling',
                                'Banglos',
                                'Umiray',
                                'Contested Area',
                                'Catablingan',
                                'Poblacion',
                                'San Marcelino',
                                'Canaway',
                            ]
                        ],
                        [
                            'id' => 'ab-minor-cluster',
                            'label' => 'Per Cluster',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'cluster_number',
                            'data_labels' => [
                                'Cluster 1',
                                'Cluster 2',
                            ]
                        ],
                        [
                            'id' => 'ab-minor-watershed',
                            'label' => 'Per Watershed',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'shed_name',
                            'data_labels' => [
                                'Anibong',
                                'Masanga',
                                'Ibona',
                                'Banbanan',
                                'Ikdan',
                                'Agos-Nakar Side',
                                'Masla',
                                'Malatunglan',
                                'Tamala',
                                'Idyang',
                                'Magnac',
                                'Depalyon',
                                'Guindan',
                            ]
                        ]
                    ]
                ],
                'typhoon' => [
                    'typhoon' => [
                        [
                            'id' => 'typhoon-class',
                            'label' => 'Per Classification',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'typhoon_class',
                            'data_labels' => [
                                'Very High',
                                'High',
                            ]
                        ],
                        [
                            'id' => 'typhoon-barangay',
                            'label' => 'Per Barangay',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'barangay',
                            'data_labels' => [
                                'Mahabang Lalim',
                                'Sablang',
                                'Pesa',
                                'Minahan Norte',
                                'Maigang',
                                'Pamplona',
                                'Lumutan',
                                'Pagsangahan',
                                'Magsikap',
                                'Batangan',
                                'Maligaya',
                                'Minahan Sur',
                                'Anoling',
                                'Banglos',
                                'Umiray',
                                'Contested Area',
                                'Catablingan',
                                'Poblacion',
                                'San Marcelino',
                                'Canaway',
                            ]
                        ]
                    ],
                ],
                'soil' => [
                    'soil' => [
                        [
                            'id' => 'soil-description',
                            'label' => 'Per Clay/Loam',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'soil',
                            'data_labels' => [
                                'Sibul Clay',
                                'Antipolo Sandy Clay',
                                'Annam Loam Gravelly',
                                'Qulangua Silt Loam',
                                'Novaliches Loam',
                                'Mountain Soil',
                                'Umingan Loam',
                                'Annam Clay Loam',
                                'Antipolo Soils',
                            ]
                        ],
                        [
                            'id' => 'soil-barangay',
                            'label' => 'Per Barangay',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'barangay',
                            'data_labels' => [
                                'Mahabang Lalim',
                                'Sablang',
                                'Pesa',
                                'Minahan Norte',
                                'Maigang',
                                'Pamplona',
                                'Lumutan',
                                'Pagsangahan',
                                'Magsikap',
                                'Batangan',
                                'Maligaya',
                                'Minahan Sur',
                                'Anoling',
                                'Banglos',
                                'Umiray',
                                'Contested Area',
                                'Catablingan',
                                'Poblacion',
                                'San Marcelino',
                                'Canaway',
                            ]
                        ],
                        [
                            'id' => 'soil-cluster',
                            'label' => 'Per Cluster',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'cluster',
                            'data_labels' => [
                                'Kabilogan Cluster',
                                'Ilaya Cluster',
                                'Baybay Cluster',
                            ]
                        ],
                    ]
                ],
                'land_cover' => [
                    'namria' => [
                        [
                            'id' => 'land-cover-namria-barangay',
                            'label' => 'Per Barangay',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'barangay',
                            'zoom' => 11,
                            'data_labels' => [
                                'Mahabang Lalim',
                                'Sablang',
                                'Pesa',
                                'Minahan Norte',
                                'Maigang',
                                'Pamplona',
                                'Lumutan',
                                'Pagsangahan',
                                'Magsikap',
                                'Batangan',
                                'Maligaya',
                                'Minahan Sur',
                                'Anoling',
                                'Banglos',
                                'Umiray',
                                'Contested Area',
                                'Catablingan',
                                'Poblacion',
                                'San Marcelino',
                                'Canaway',
                            ]
                        ],
                        [
                            'id' => 'land-cover-namria-cluster',
                            'label' => 'Per Cluster',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'cluster',
                            'zoom' => 11,
                            'data_labels' => [
                                'Kabilogan Cluster',
                                'Ilaya Cluster',
                                'Baybay Cluster',
                            ]
                        ],
                        [
                            'id' => 'land-cover-namria-2003',
                            'label' => '2003',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2003',
                            'zoom' => 11,
                            'data_labels' => [
                                'Grassland',
                                'Perennial Crop',
                                'Shrubs',
                                'Built-up',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                                'Inland Water',
                                'Mangrove Forest',
                            ]
                        ],
                        [
                            'id' => 'land-cover-namria-2010',
                            'label' => '2010',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2010',
                            'zoom' => 11,
                            'data_labels' => [
                                'Grassland',
                                'Mangrove Forest',
                                'Perennial Crop',
                                'Inland Water',
                                'Shrubs',
                                'Built-up',
                                'Wooded Grassland',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                            ]
                        ],
                        [
                            'id' => 'land-cover-namria-2015',
                            'label' => '2015',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2015',
                            'zoom' => 11,
                            'data_labels' => [
                                'Grassland',
                                'Mangrove Forest',
                                'Perennial Crop',
                                'Inland Water',
                                'Built-up',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                                'Shrubs',
                            ]
                        ],
                    ],
                    'major' => [
                        [
                            'id' => 'land-cover-major-barangay',
                            'label' => 'Barangay',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'barangay',
                            'zoom' => 12,
                            'data_labels' => [
                                'Mahabang Lalim',
                                'Kalawakan',
                                'Daraitan',
                                'Puray',
                                'Cuyambay',
                                'San Andres',
                                'Kabayunan',
                                'Mamuyao',
                                'San Lorenzo',
                                'Santa Inez',
                                'Calawis',
                                'Lumutan',
                                'Sampaloc',
                                'Pagsangahan',
                                'Magsaysay',
                                'Santiago',
                                'Tinucan',
                                'Plaza Aldea (Pob)',
                                'Umiray',
                                'Cayabu',
                                'Jose Laurel, Sr',
                                'Contested Area',
                                'Sapang Bulak',
                                'Laiban',
                                'Camachin',
                                'Santo Niño',
                                'San Jose (Pob)',
                            ]
                        ],
                        [
                            'id' => 'land-cover-major-municipality',
                            'label' => 'Municipality',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'municipality',
                            'zoom' => 12,
                            'data_labels' => [
                                'Doña Remedios Trinidad',
                                'Norzagaray',
                                'Sant Maria',
                                'General Nakar',
                                'Infanta',
                                'City of Antipolo',
                                'Rodriguez (Montalban)',
                                'Tanay',
                            ]
                        ],
                        [
                            'id' => 'land-cover-major-province',
                            'label' => 'Province',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'province',
                            'zoom' => 12,
                            'data_labels' => [
                                'Bulacan',
                                'Laguna',
                                'Quezon',
                                'Rizal',
                            ]
                        ],
                        [
                            'id' => 'land-cover-major-region',
                            'label' => 'Region',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'region',
                            'zoom' => 12,
                            'data_labels' => [
                                'Region III (Central Luzon)',
                                'Region IV-A (CALABARZON)',
                            ]
                        ],
                        [
                            'id' => 'land-cover-major-watershed',
                            'label' => 'Watershed',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'watershed',
                            'zoom' => 12,
                            'data_labels' => [
                                'Umiray',
                                'Kaliwa',
                                'Kanan',
                            ]
                        ],
                        [
                            'id' => 'land-cover-major-2003',
                            'label' => '2003',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2003',
                            'zoom' => 12,
                            'data_labels' => [
                                'Grassland',
                                'Perennial Crop',
                                'Shrubs',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                                'Inland Water',
                                'Mangrove Forest',
                            ]
                        ],
                        [
                            'id' => 'land-cover-major-2010',
                            'label' => '2010',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2010',
                            'zoom' => 12,
                            'data_labels' => [
                                'Grassland',
                                'Perennial Crop',
                                'Inland Water',
                                'Shrubs',
                                'Built-up',
                                'Wooded Grassland',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                            ]
                        ],
                        [
                            'id' => 'land-cover-major-2015',
                            'label' => '2015',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2015',
                            'zoom' => 12,
                            'data_labels' => [
                                'Grassland',
                                'Perennial Crop',
                                'Inland Water',
                                'Built-up',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                                'Shrubs',
                            ]
                        ],
                    ],
                    'minor' => [
                        [
                            'id' => 'land-cover-minor-barangay',
                            'label' => 'Per Barangay',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'barangay',
                            'zoom' => 10,
                            'data_labels' => [
                                'Sablang',
                                'Pesa',
                                'Minahan Norte',
                                'Maigang',
                                'Pamplona',
                                'Magsikap',
                                'Batangan',
                                'Maligaya',
                                'Minahan Sur',
                                'Anoling',
                                'Banglos',
                                'Umiray',
                                'Contested Area',
                                'Catablingan',
                                'Poblacion',
                                'San Marcelino',
                                'Canaway',
                            ]
                        ],
                        [
                            'id' => 'land-cover-minor-cluster',
                            'label' => 'Per Cluster',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'cluster',
                            'zoom' => 10,
                            'data_labels' => [
                                'Kabilogan Cluster',
                                'Ilaya Cluster',
                                'Baybay Cluster',
                            ]
                        ],
                        [
                            'id' => 'land-cover-minor-cluster-category',
                            'label' => 'Per Cluster Category',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'cluster_number',
                            'zoom' => 10,
                            'data_labels' => [
                                'Cluster 1',
                                'Cluster 2',
                            ]
                        ],
                        [
                            'id' => 'land-cover-minor-watershed',
                            'label' => 'Per Watershed',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'shed_name',
                            'zoom' => 10,
                            'data_labels' => [
                                'Masanga',
                                'Ibona',
                                'Banbanan',
                                'Ikdan',
                                'Agos-Nakar Side',
                                'Masla',
                                'Anibong',
                                'Malatunglan',
                                'Tamala',
                                'idyang',
                                'Magnac',
                                'Depalyon',
                                'Guindan',
                            ]
                        ],
                        [
                            'id' => 'land-cover-minor-2003',
                            'label' => '2003',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2003',
                            'zoom' => 10,
                            'data_labels' => [
                                'Perennial Crop',
                                'Shrubs',
                                'Built-up',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                                'Inland Water',
                                'Mangrove Forest',
                            ]
                        ],
                        [
                            'id' => 'land-cover-minor-2010',
                            'label' => '2010',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2010',
                            'zoom' => 10,
                            'data_labels' => [
                                'Mangrove Forest',
                                'Perennial Crop',
                                'Inland Water',
                                'Shrubs',
                                'Built-up',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                            ]
                        ],
                        [
                            'id' => 'land-cover-minor-2015',
                            'label' => '2015',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'land_cover_2015',
                            'zoom' => 10,
                            'data_labels' => [
                                'Grassland',
                                'Mangrove Forest',
                                'Perennial Crop',
                                'Inland Water',
                                'Built-up',
                                'Open/Barren',
                                'Annual Crop',
                                'Closed Forest',
                                'Open Forest',
                                'Shrubs',
                            ]
                        ],
                    ]
                ],
                'eil' => [
                    'reina' => [
                        [
                            'id' => 'eil-per-condition',
                            'label' => 'Per Condition',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'condition',
                            'data_labels' => [
                                'High',
                                'Low',
                                'Moderate',
                            ]
                        ],
                        [
                            'id' => 'eil-per-cluster',
                            'label' => 'Per Cluster',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'cluster',
                            'data_labels' => [
                                'Kabilogan Cluster',
                                'Ilaya Cluster',
                                'Baybay Cluster',
                            ]
                        ],
                        [
                            'id' => 'eil-per-barangay',
                            'label' => 'Per Barangay',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'barangay',
                            'data_labels' => [
                                'Mahabang Lalim',
                                'Sablang',
                                'Pesa',
                                'Minahan Norte',
                                'Maigang',
                                'Lumutan',
                                'Pagsangahan',
                                'Magsikap',
                                'Batangan',
                                'Maligaya',
                                'Minahan Sur',
                                'Anoling',
                                'Umiray',
                                'Contested Area',
                                'Catablingan',
                                'San Marcelino',
                                'Canaway',
                            ]
                        ],
                    ]
                ],
                'center' => [
                    'growth center' => [
                        [
                            'id' => 'growth-center',
                            'label' => 'Per Center',
                            'opacity' => 85,
                            'visible' => false,
                            'color_key' => 'center',
                            'data_labels' => [
                                'Kabilogan',
                                'Maligaya',
                                'Umiray',
                            ]
                        ],
                    ]
                ]
            ],
            'boundaries' => [
                'cadastral' => [
                    'id' => 'quezon-administrative-boundary-cadastral',
                    'label' => 'Cadastral Edit',
                    'colors' => ['#2ecafa', '#100882'],
                    'opacity' => 50,
                    'visible' => false 
                ],
                'major' => [
                    'id' => 'quezon-administrative-boundary-major',
                    'label' => 'Major',
                    'colors' => ['#f551fb', '#8c127c'],
                    'opacity' => 50,
                    'visible' => false 
                ],
            ],
            'landslide' => [
                'hazard' => [
                    'id' => 'quezon-landslidehazards',
                    'label' => 'Landslide Hazard',
                    'colors' => ['#d2b48c', '#654321'],
                    'opacity' => 85,
                    'visible' => false,
                ],
                'alluvial-fan' => [
                    'id' => 'alluvial-fan',
                    'label' => 'Alluvial Fan',
                    'colors' => ['#804b9b', '#804b9b'],
                    'opacity' => 85,
                    'visible' => false 
                ],
            ],
            'flood' => [
                '5yr' => [
                    'id' => 'quezon-flood-5yr',
                    'label' => '5 Years',
                    'colors' => ['#b4d1e2', '#2b75b2'],
                    'opacity' => 85,
                    'visible' => false 
                ],
                '25yr' => [
                    'id' => 'quezon-flood-25yr',
                    'label' => '25 Years',
                    'colors' => ['#b4d1e2', '#2b75b2'],
                    'opacity' => 85,
                    'visible' => false 
                ],
                '100yr' => [
                    'id' => 'quezon-flood-100yr',
                    'label' => '100 Years',
                    'colors' => ['#b4d1e2', '#2b75b2'],
                    'opacity' => 85,
                    'visible' => true 
                ]
            ],
            'storm_surge' => [
                'advisory-1' => [
                    'id' => 'quezon-storm-surge-advisory-1',
                    'label' => 'Advisory 1',
                    'colors' => ['#f2c94c', '#eb5757'],
                    'opacity' => 85,
                    'visible' => true 
                ],
                'advisory-2' => [
                    'id' => 'quezon-storm-surge-advisory-2',
                    'label' => 'Advisory 2',
                    'colors' => ['#f2c94c', '#eb5757'],
                    'opacity' => 85,
                    'visible' => false 
                ],
                'advisory-3' => [
                    'id' => 'quezon-storm-surge-advisory-3',
                    'label' => 'Advisory 3',
                    'colors' => ['#f2c94c', '#eb5757'],
                    'opacity' => 85,
                    'visible' => false 
                ],
                'advisory-4' => [
                    'id' => 'quezon-storm-surge-advisory-4',
                    'label' => 'Advisory 4',
                    'colors' => ['#f2c94c', '#eb5757'],
                    'opacity' => 85,
                    'visible' => false 
                ]
            ]
        ]
    ],
    'other_plans' => [
        [
            'label' => 'PDRA',
            'description' => 'Pre-Disaster Risk Assessment',
            'class' => 'success'
        ],
        [
            'label' => 'RDANA',
            'description' => 'Rapid Damage Assessment and Needs Analysis',
            'class' => 'warning'
        ],
        [
            'label' => 'ICS',
            'description' => 'Incident Command System',
            'class' => 'danger'
        ],
        [
            'label' => 'EOC',
            'description' => 'Emergency Operations Center',
            'class' => 'primary'
        ],
        [
            'label' => 'Sendai',
            'description' => 'Framework for Disaster Risk Reduction',
            'class' => 'dark'
        ],
    ],
    'user.passwordResetTokenExpire' => 36000,
    'pagination' => [25 => 25, 50 => 50, 75 => 75, 100 => 100,],
    'alert_level' => [
        0 => [
            'id' => 0, 
            'label' => 'White', 
            'class' => 'outline-secondary',
            'description' => 'RDANA teams on stand-by'
        ],
        1 => [
            'id' => 1, 
            'label' => 'Blue',
            'class' => 'primary',
            'description' => 'RDANA teams to be pre-activated in preparation for possible deployment'
        ],
        2 => [
            'id' => 2, 
            'label' => 'Red', 
            'class' => 'danger',
            'description' => 'RDANA teams to report to the EOC for deployment'
        ],
    ],
    'ambulance_dispatched_status' => [
        0 => ['id' => 0, 'label' => 'Waiting', 'class' => 'primary'],
        1 => ['id' => 1, 'label' => 'Not Dispatched','class' => 'danger'],
        2 => ['id' => 2, 'label' => 'Dispatched', 'class' => 'success'],
    ],
    'tech_issue_types' => [
        0 => ['id' => 0, 'label' => 'Report Bug','class' => 'danger'],
        1 => ['id' => 1, 'label' => 'Audit Logs', 'class' => 'success'],
    ],

    'scholarship_status' => [
        0 => ['id' => 0, 'label' => 'Pending','class' => 'warning'],
        1 => ['id' => 1, 'label' => 'For Interview', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'Rejected', 'class' => 'danger'],
        3 => ['id' => 3, 'label' => 'Approved', 'class' => 'success'],
        4 => ['id' => 4, 'label' => 'Terminated', 'class' => 'danger'],
        5 => ['id' => 5, 'label' => 'Active', 'class' => 'success'],
        6 => ['id' => 6, 'label' => 'Graduated', 'class' => 'secondary'],
    ],

    'tech_issue_status' => [
        0 => ['id' => 0, 'label' => 'Open','class' => 'success'],
        1 => ['id' => 1, 'label' => 'Ongoing', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'Closed', 'class' => 'danger'],
        // 3 => ['id' => 3, 'label' => 'Unsolved', 'class' => 'danger'],
    ],
    'var' => [
        'statement_types' => [
            0 => 'Responder/Officer In-charge',
            1 => 'Witness/Bystander'
        ],
        'type' => [
            'Car',
            'Passenger Van',
            'Motorcycle',
            'Bicycle',
            'Truck',
            'Tricycle',
            'Bus',
            'Pedestrian',
            'Boat',
        ],
        'medical_complaints' => [
            'Traumatic injury',
            'Traumatic injury (Serious)',
            'Loss of consciousness / fainting',
            'Altered level of consciousness',
            'Chest pain / discomfort',
            'Respiratory distress /difficulty breathing',
            'Back Injury',
            'Internal injury',
            'Fractures/Broken bones',
            'Burns (light)',
            'Neck Injury',
            'Limb loss',
            'Burns (Severe)',
            'Knee, foot or ankle injuries',
            'Shoulder, wrist or hand injuries',
            'Lacerations, bruises or "road rash"',
            'Expired',
        ],
        'insurance_type' => [
            'TPL (Compulsory Third Party Liability) Insurance',
            'Comprehensive Car Insurance',
            'Third Party Fire and Theft Insurance',
            'Third Party Property Damage Insurance '
        ],
        'insurance_status' => [
            0 => 'None',
            1 => 'Expired',
            2 => 'Covered',
        ],
        'main_cause' => [
            'Vehicle Defect',
            'Road Defect',
            'Human Error',
        ],
        'collision_type' => [
            'Head-on Collision',
            'Sideswipe Collision',
            'Rear-end Collision',
            'Side-Impact Collision',
            'T-bone Car Accident',
            'Vehicle Rollover',
            'Multiple Vehicle Accident',
            'Single Vehicle Accident',
        ],
        'weather_condition' => [
            'Fair/Clear',
            'Light Rain',
            'Heavy Rain',
            'Smoke/Smog',
            'Windy',
            'Foggy',
            'Stormy'
        ],
        'road_condition' => [
            'Dry',
            'Flooded',
            'Wet',
            'Damaged Road',
            'Missing Traffic Sign/Marker',
        ],
        'road_type' => [
            'National Road (Highway)',
            'Expressway/toll Road',
            'Provincial Road',
            'Municipal Road',
            'Barangay Road',
            'Farm to Market Road',
            'Private Road'
        ]
    ],
    'allowance_status' => [
        0 => ['id' => 0, 'label' => 'Pending','class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Received', 'class' => 'success'],
    ],
    'hazard_map_types' => [
        1 => ['id' => 1, 'label' => 'Barangay', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'Municipal', 'class' => 'primary'],
        3 => ['id' => 3, 'label' => 'Watershed','class' => 'danger'],
    ],
    'gender' => [
        0 => ['id' => 0, 'label' => 'Male','class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Female', 'class' => 'success'],
    ],
    'request_status' => [
        0 => ['id' => 0, 'label' => 'Pending', 'actionLabel' => 'Pending', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Approved', 'actionLabel' => 'Approve', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'Declined', 'actionLabel' => 'Decline', 'class' => 'danger'],
        3 => ['id' => 3, 'label' => 'Cancelled', 'actionLabel' => 'Cancel', 'class' => 'danger'],
    ],

    'is_senior' => [
        0 => ['id' => 0, 'label' => 'No', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Yes', 'class' => 'success'],
    ],
    'post_activity_type' => [
        ['id' => 1, 'label' => 'SIAD'],
        ['id' => 2, 'label' => 'DRRM']
    ],
    'type_of_accident' => [
        'Emergency Medical',
        'Vehicular',
        'Water Search and Rescue',
        'Mountain Search and Rescue',
        'Disaster (Earthquake, Flood, Tsunami Fire)',
    ],

    'type_of_activity' => [
        'siad' => [
            'Assistance',
            'Environment Monitoring',
            'Training / Seminar',
            'Disaster Response / Rescue',
            'Project Monitoring',
            'Field Visit',
        ],
        'drrm' => [
            'Disaster Preparedness',
            'Disaster Response',
            'Prevention and Mitigation',
            'Rehabilitation and Recovery',
            'Project Monitoring',
            'Field Visit',
        ]
    ],
    'pwd_form' => [
        'type' => [
            'New Applicant',
            'Renewal'
        ],
        'sex' => [
            'Female',
            'Male'
        ],
        'civil_status' => [
            'Single',
            'Separated',
            'Cohabitation',
            'Married',
            'Widow/er',
        ],
        'type_of_disability' => [
            [
                'Deaf or Hard of Hearing',
                'Intellectual Disability',
                'Learning Disability',
                'Mental Disability',
                'Physical Disability',
            ],
            [
                'Psychosocial Disability',
                'Speech and Language Impairment',
                'Visual Disability',
                'Cancer (RA11215)',
                'Rare Disease (RA10747)'
            ]
        ],
        'cause_of_disability' => [
            [
                'type' => 'Congenital / Inborn',
                'cause' => [
                    'Autism',
                    'ADHD',
                    'Cerebral Palsy',
                    'Down Syndrome'
                ]
            ],
            [
                'type' => 'Acquired',
                'cause' => [
                    'Chronic Illness',
                    'Cerebral Palsy',
                    'Injury'
                ]
            ]
        ],

        'educational_attainment' => [
            [
                'None',
                'Kindergarten',
                'Elementary',
                'Junior High School',
            ],
            [
                'Senior High School',
                'College',
                'Vocational',
                'Post Graduate'
            ]
        ],
        'status_of_employment' => [
            'Employed',
            'Unemployed',
            'Self-employed',
        ],
        'types_of_employment' => [
            'Permanent / Regular',
            'Seasonal',
            'Casual',
            'Emergency',
        ],
        'category_of_employment' => [
            'Government',
            'Private',
        ],
        'occupation' => [
            'Managers',
            'Professionals',
            'Technicians and Associate Professionals',
            'Clerical Support Workers',
            'Service and Sales Workers',
            'Skilled Agricultural, Forestry and Fishery Workers',
            'Craft and Related Trade Workers',
            'Plant and Machine Operators and Assemblers',
            'Elementary Occupations',
            'Armed Forces Occupations',
        ],
        'accomplished_by' => [
            'Applicant',
            'Guardian',
            'Representative'
        ]
    ],
    'masterlist_status' => [
        0 => ['id' => 0, 'label' => 'Pending', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Added', 'class' => 'success'],
    ],
    'religions' => [
        'Roman Catholic',
        'Islam',
        'Evangelicals (PCEC)',
        'Iglesia ni Cristo',
        'Protestant (NCCP)',
        'Aglipayan',
        'Seventh-day Adventist',
        'Bible Baptist Church',
        'United Church of Christ in the Philippines',
        'Jehovah\'s Witnesses',
        'None',
    ],
    'ethnicity' => [
        'Tagalog',
        'Cebuano',
        'Badjao',
        'Ilokano',
        'Waray',
        'Yakan',
        'Kapampangan',
        'Ilonggo',
        'B\'laan',
        'Bikolano',
        'Ati',
        'Maranao',
        'Aeta',
        'Suludnon',
        'T\'boli',
        'Igorot',
        'Tausug',
        'Ivatan',
        'Bagobo',
        'Mangyan'
    ],

    'survey_color' => [
        ['id' => 1, 'color'=>'#181C32', 'label' => 'Black', 'class' => '', 'priority' => 3],
        ['id' => 2, 'color'=>'#E4E6EF', 'label' => 'Gray', 'class' => '', 'priority' => 4],
        ['id' => 3, 'color'=>'#1BC5BD', 'label' => 'Green', 'class' => '', 'priority' => 1],
        ['id' => 4, 'color'=>'#F64E60', 'label' => 'Red', 'class' => '', 'priority' => 2],
    ],

    'voters' => [
        1 => ['id' => 1, 'label' => 'Yes'],
        2 => ['id' => 2, 'label' => 'No'],
    ],
    'social_pension_funds' => [
        0 => ['id' => 0, 'label' => 'N/A', 'class' => 'secondary'],
        1 => ['id' => 1, 'label' => 'Local', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'National', 'class' => 'warning'],
    ],
    'event_category_types_list' => [
        0 => ['id' => 0, 'label' => 'Default', 'class' => 'secondary'],
        1 => ['id' => 1, 'label' => 'Un Planned Attendees', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'Social Pension', 'class' => 'warning'],
    ],
    'priority_sector' => [
        ['id' => 1,'code'=>'SC', 'label' => 'Senior Citizen', 'class' => 'primary' ],
        ['id' => 2, 'code'=>'SLP',  'label' => 'Sustainable Livelihood Program', 'class' => 'success'],
        ['id' => 3, 'code'=>'IP',  'label' => 'Indigenous Peoples', 'class' => 'secondary'],
        ['id' => 4, 'code'=>'SP',  'label' => 'Solo Parent', 'class' => 'danger'],
        ['id' => 5, 'code'=>'PWD',  'label' => 'Persons with Disabilities', 'class' => 'warning'],
        ['id' => 6, 'code'=>'Kalipi',  'label' => 'Kalipunan ng Liping Pilipino', 'class' => 'info'],
        ['id' => 7, 'code'=>'PYAP',  'label' => 'Pag-asa Youth Association of the Philippines', 'class' => 'dark'],
        ['id' => 8, 'code'=>'BAKTOM',  'label' => 'BAKTOM LGBTQ Organization', 'class' => 'success'],
    ],
    'units' => [
        1 => ['id' => 1, 'label' => 'Tablet'],
        2 => ['id' => 2, 'label' => 'Pieces'],
        3 => ['id' => 3, 'label' => 'Capsul'],
        4 => ['id' => 4, 'label' => 'Milliliter'],
        5 => ['id' => 5, 'label' => 'Liters'],
        6 => ['id' => 6, 'label' => 'Syrup'],
        7 => ['id' => 7, 'label' => 'Pack'],
    ],
    'patient_relation_types' => [
        1 => ['id' => 1, 'label' => 'Client is a patient.'],
        2 => ['id' => 2, 'label' => 'Patient is a member of my household'],
        3 => ['id' => 3, 'label' => 'Patient is not a member of my household but is my relative.'],
        4 => ['id' => 4, 'label' => 'Patient is not related to the client by familial ties.'],
    ],
    'attendees_types' => [
        0 => ['id' => 0, 'label' => 'Planned'],
        1 => ['id' => 1, 'label' => 'Un Planned'],
    ],

    'document_status' => [
        0 => ['id' => 0, 'label' => 'Pending'],
        1 => ['id' => 1, 'label' => 'For Review'],
        2 => ['id' => 2, 'label' => 'Reviewed'],
        3 => ['id' => 3, 'label' => 'For Approval'],
        4 => ['id' => 4, 'label' => 'Approved'],
        5 => ['id' => 5, 'label' => 'Created'],
    ],
    'fourPs' => [
        0 => ['id' => 0, 'label' => 'Yes'],
        1 => ['id' => 1, 'label' => 'No'],
    ],
    'client_categories' => [
        1 => ['id' => 1, 'label' => 'Children in need of special protection'],
        2 => ['id' => 2, 'label' => 'Youth in need of special protection'],
        3 => ['id' => 3, 'label' => 'Women in especially difficult circumstances'],
        4 => ['id' => 4, 'label' => 'Person with disability'],
        5 => ['id' => 5, 'label' => 'Senior citizen'],
        6 => ['id' => 6, 'label' => 'Family head and other needy adult'],
    ],
    'recommended_services_assistance' => [
        1 => ['id' => 1, 'label' => 'Counseling'],
        2 => ['id' => 2, 'label' => 'Legal assistance'],
        3 => ['id' => 3, 'label' => 'Medical assistance (Cash)'],
        4 => ['id' => 4, 'label' => 'Medical assistance (Laboratory Request)'],
        5 => ['id' => 5, 'label' => 'Medical assistance (Medicine)'],
        6 => ['id' => 6, 'label' => 'Burial assistance'],
        7 => ['id' => 7, 'label' => 'Transportation assistance'],
        8 => ['id' => 8, 'label' => 'Others'],
    ],
    'transaction_document_status' => [
        0 => ['id' => 0, 'label' => 'Pending', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'For Review (MSWDO Head)', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'Reviewed (MSWDO Head)', 'class' => 'success'],
        3 => ['id' => 3, 'label' => 'For Approval (Mayor)', 'class' => 'primary'],
        4 => ['id' => 4, 'label' => 'Approved (Mayor)', 'class' => 'success'],
        5 => ['id' => 5, 'label' => 'Completed', 'class' => 'success'],
    ],
    'event_assistance_types' => [
        0 => ['id' => 0, 'label' => 'Default', 'class' => 'success'],
        1 => ['id' => 1, 'label' => 'Cash', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'In-kind', 'class' => 'primary'],
    ],
    'solo_member' => [
        1 => ['id' => 1, 'label' => 'Yes', 'class' => 'danger'],
        2 => ['id' => 2, 'label' => 'No', 'class' => 'secondary'],
    ],

    'event_category_types' => [
        0 => ['id' => 0, 'label' => 'Default', 'class' => 'secondary'],
        1 => ['id' => 1, 'label' => 'Disaster', 'class' => 'danger'],
    ],
    'social_pension_status' => [
        0 => ['id' => 0, 'label' => 'No', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Yes', 'class' => 'success'],
    ],
    'pwd' => [
        0 => ['id' => 0, 'label' => 'Undefined', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Yes', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'No', 'class' => 'danger'],
    ],
    'solo_parent' => [
        0 => ['id' => 0, 'label' => 'Undefined', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Yes', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'No', 'class' => 'danger'],
    ],
    'living_status' => [
        1 => ['id' => 1, 'label' => 'Alive', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'Deceased', 'class' => 'danger'],
    ],
    'budget_specific_to' => [
        0 => ['id' => 0, 'label' => 'Initial', 'class' => 'success'],
        1 => ['id' => 1, 'label' => 'Transaction', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'Event', 'class' => 'success'],
    ],
    'budget_actions' => [
        0 => ['id' => 0, 'label' => 'Initial', 'class' => 'success'],
        1 => ['id' => 1, 'label' => 'Additional', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'Disbursed', 'class' => 'warning'],
    ],
    
    'assistance_status' => [
        0 => ['id' => 0, 'label' => 'Unclaim', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Claimed', 'class' => 'success'],
    ],
    'enable_visitor' => [
        0 => ['id' => 0, 'label' => 'Disable', 'class' => 'danger'],
        1 => ['id' => 1, 'label' => 'Enable (require internet connection)', 'class' => 'success'],
    ],
    /*'event_categories' => [
        1 => ['id' => 1, 'label' => 'Disaster Mitigation and Preparedness', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'Disaster Response and Recovery', 'class' => 'success'],
        3 => ['id' => 3, 'label' => 'Emergency Shelter Assistance', 'class' => 'success'],
        4 => ['id' => 4, 'label' => 'Family and Community Disaster Awareness', 'class' => 'success'],
        5 => ['id' => 5, 'label' => 'Crisis Intervention', 'class' => 'success'],
        6 => ['id' => 6, 'label' => 'Training and Capacity Building', 'class' => 'success'],
        7 => ['id' => 7, 'label' => 'Others', 'class' => 'success'],
    ],*/
    'event_status' => [
        0 => ['id' => 0, 'label' => 'Pending', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Ongoing', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'Completed', 'class' => 'success'],
        3 => ['id' => 3, 'label' => 'Cancelled', 'class' => 'danger'],
    ],
    'event_member_status' => [
        0 => ['id' => 0, 'label' => 'Unclaim', 'class' => 'warning'],
        1 => ['id' => 1, 'label' => 'Claimed', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'Attended', 'class' => 'success'],
        3 => ['id' => 3, 'label' => 'Unattended', 'class' => 'danger'],
    ],
    'whitelist_ip_only' => [
        0 => ['id' => 0, 'label' => 'All', 'class' => 'danger'],
        1 => ['id' => 1, 'label' => 'Whitelist Only', 'class' => 'success'],
    ],
    'record_status' => [
        0 => ['id' => 0, 'label' => 'In-active', 'class' => 'danger'],
        1 => ['id' => 1, 'label' => 'Active', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'Draft', 'class' => 'secondary'],
    ],
    'scholarship_state' => [
        0 => ['id' => 0, 'label' => 'Terminated', 'class' => 'danger'],
        1 => ['id' => 1, 'label' => 'Active', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'Graduated', 'class' => 'secondary'],
    ],
    'ip_types' => [
        0 => ['id' => 0, 'label' => 'Black List', 'class' => 'success'],
        1 => ['id' => 1, 'label' => 'White List', 'class' => 'danger'],
    ],
    'notification_status' => [
        0 => ['id' => 0, 'label' => 'New', 'class' => 'danger'],
        1 => ['id' => 1, 'label' => 'Read', 'class' => 'success'],
    ],
    'notification_types' => [
        0 => [
            'id' => 0, 
            'type' => 'notification_change_password', 
            'label' => 'Password Changed',
            'secondaryLabel' => 'Password Changed'
        ],
        1 => [
            'id' => 1, 
            'type' => 'new_transaction', 
            'label' => 'New Transaction',
            'secondaryLabel' => 'New Transaction'
        ],
        2 => [
            'id' => 2, 
            'type' => 'mho_transaction', 
            'label' => 'MHO Approved Transaction',
            'secondaryLabel' => 'For MSWDO Clerk\'s Approval Transaction',
        ],
        3 => [
            'id' => 3, 
            'type' => 'clerk_transaction', 
            'label' => 'MSWDO Clerk Approved Transaction',
            'secondaryLabel' => 'For MSWDO Head\'s Approval Transaction',
        ],
        4 => [
            'id' => 4, 
            'type' => 'mswdo_head_transaction', 
            'label' => 'MSWDO Head Approved Transaction',
            'secondaryLabel' => 'For Mayor\'s Approval Transaction',
        ],
        5 => [
            'id' => 5, 
            'type' => 'mayor_transaction', 
            'label' => 'Mayor Approved Transaction',
            'secondaryLabel' => 'For Budget Officer\'s Certification Transaction',
        ],
        6 => [
            'id' => 6, 
            'type' => 'budget_officer_transaction', 
            'label' => 'Budget Officer Certified Budget for the Transaction',
            'secondaryLabel' => 'For Accounting Officer\'s Approval Transaction',
        ],
        7 => [
            'id' => 7, 
            'type' => 'accounting_officer_transaction', 
            'label' => 'Accounting Officer set transaction for disbursement',
            'secondaryLabel' => 'For Disbursing Officer\'s Disbursement Transaction',
        ],
        8 => [
            'id' => 8, 
            'type' => 'disbursing_officer_transaction', 
            'label' => 'Disbursing Officer disburse the assistance',
            'secondaryLabel' => 'For Accounting Officer\'s Proofing Transaction',
        ],
        9 => [
            'id' => 9, 
            'type' => 'treasurer_transaction', 
            'label' => 'Treasurer Completed Transaction',
            'secondaryLabel' => 'Treasurer Completed Transaction'
        ],
        10 => [
            'id' => 10, 
            'type' => 'import_household', 
            'label' => 'Household Imported',
            'secondaryLabel' => 'Household Imported'
        ],
        11 => [
            'id' => 11, 
            'type' => 'import_member', 
            'label' => 'Member Imported',
            'secondaryLabel' => 'Member Imported'
        ],
        12 => [
            'id' => 12, 
            'type' => 'import_survey', 
            'label' => 'Survey Imported',
            'secondaryLabel' => 'Survey Imported'
        ],
        13 => [
            'id' => 13, 
            'type' => 'ambulance_request', 
            'label' => 'Ambulance Request',
            'secondaryLabel' => 'New Ambulance Request'
        ],
        14 => [
            'id' => 14, 
            'type' => 'technical_issue', 
            'label' => 'Technical Issue',
            'secondaryLabel' => 'New Technical Issue'
        ],
        15 => [
            'id' => 15, 
            'type' => 'new_patrol', 
            'label' => 'New Patrol',
            'secondaryLabel' => 'New Patrol Record'
        ],
        16 => [
            'id' => 16, 
            'type' => 'approved_request', 
            'label' => 'Approved Ambulance Request',
            'secondaryLabel' => 'Approved Ambulance Request'
        ],
    ],
    'user_status' => [
        0 => ['id' => 0, 'label' => 'Archived', 'class' => 'danger'],
        9 => ['id' => 9, 'label' => 'Not Verified', 'class' => 'warning'],
        10 => ['id' => 10, 'label' => 'Active', 'class' => 'success'],
    ],
    'user_block_status' => [
        0 => ['id' => 0, 'label' => 'Allowed', 'class' => 'success'],
        1 => ['id' => 1, 'label' => 'Blocked', 'class' => 'danger'],
    ],
    'visit_log_actions' => [
        0 => ['id' => 0, 'label' => 'Login', 'class' => 'success'],
        1 => ['id' => 1, 'label' => 'Logout', 'class' => 'danger'],
    ],
    'transaction_status' => [
        1 => [
            'id' => 1, 
            'label' => 'New Transaction', 
            'class' => 'warning status-new-transaction',
            'actionLabel' => 'Set as New Transaction',
            'secondaryLabel' => 'For MSWDO Clerk Verification',
            'sort' => 1,
        ],
        2 => [
            'id' => 2, 
            'label' => 'MHO Approved', 
            'class' => 'primary',
            'actionLabel' => 'Approve',
            'secondaryLabel' => 'For MSWDO Clerk\'s Approval',
            'sort' => 5,
        ],
        3 => [
            'id' => 3, 
            'label' => 'MHO Declined', 
            'class' => 'danger',
            'actionLabel' => 'Decline',
            'sort' => 6,
        ],
        4 => [
            'id' => 4, 
            'label' => 'MSWDO Head Approved', 
            'class' => 'facebook',
            'actionLabel' => 'Approve',
            'secondaryLabel' => 'For Mayor\'s Approval',
            'sort' => 10,
        ],
        5 => [
            'id' => 5, 
            'label' => 'MSWDO Head Declined', 
            'class' => 'danger status-mswdo-head-declined',
            'actionLabel' => 'Decline',
            'sort' => 11,
        ],
        6 => [
            'id' => 6, 
            'label' => 'Mayor Approved', 
            'class' => 'twitter',
            'actionLabel' => 'Approve',
            'secondaryLabel' => 'For Budget Officer\'s Approval',
            'sort' => 13,
        ],
        7 => [
            'id' => 7, 
            'label' => 'Mayor Declined', 
            'class' => 'danger status-mayor-declined',
            'actionLabel' => 'Decline',
            'sort' => 14,
        ],
        8 => [
            'id' => 8, 
            'label' => 'Budget Officer Certified', 
            'class' => 'info status-budget-officer-certified',
            'actionLabel' => 'Certify',
            'secondaryLabel' => 'For Accounting Officer\'s Approval',
            'sort' => 16,
        ],
        9 => [
            'id' => 9, 
            'label' => 'Disbursed', 
            'class' => 'primary status-disbursed',
            'actionLabel' => 'Disburse',
            'secondaryLabel' => 'For Accounting Officer\'s Proofing',
            'sort' => 20,
        ],
        10 => [
            'id' => 10, 
            'label' => 'Completed', 
            'class' => 'success status-completed',
            'actionLabel' => 'Complete',
            'sort' => 22,
        ],
        11 => [
            'id' => 11, 
            'label' => 'White Card Created', 
            'class' => 'success',
            'actionLabel' => 'White Card Created',
            'sort' => 4,
        ],
        12 => [
            'id' => 12, 
            'label' => 'Certificate Created', 
            'class' => 'success status-certificate-created',
            'actionLabel' => 'Certificate Created',
            'secondaryLabel' => '',
            'sort' => 23,
        ],
        13 => [
            'id' => 13, 
            'label' => 'MSWDO Clerk Approved', 
            'class' => 'success status-mswdo-clerk-approved',
            'actionLabel' => 'Approve',
            'secondaryLabel' => 'For MSWDO Head\'s Approval',
            'sort' => 8,
        ],
        14 => [
            'id' => 14, 
            'label' => 'Accounted: For Disbursement', 
            'class' => 'success status-for-disbursement',
            'actionLabel' => 'Approve',
            'secondaryLabel' => 'For Disbursement Officer\'s Approval',
            'sort' => 18,
        ],
        15 => [
            'id' => 15, 
            'label' => 'MHO Processing', 
            'class' => 'warning status-mho-processing',
            'actionLabel' => 'MHO Processing',
            'sort' => 3,
        ],
        16 => [
            'id' => 16, 
            'label' => 'MSWDO Clerk Processing', 
            'class' => 'warning status-mswdo-clerk-processing',
            'actionLabel' => 'MSWDO Clerk Processing',
            'sort' => 7,
        ],
        17 => [
            'id' => 17, 
            'label' => 'MSWDO Head Processing', 
            'class' => 'warning status-mswdo-head-processing',
            'actionLabel' => 'MSWDO Head Processing',
            'sort' => 9,
        ],
        18 => [
            'id' => 18, 
            'label' => 'Mayor Processing', 
            'class' => 'warning status-mayor-processing',
            'actionLabel' => 'Mayor Processing',
            'sort' => 12,
        ],
        19 => [
            'id' => 19, 
            'label' => 'Budget Officer Processing', 
            'class' => 'warning status-budget-officer-processing',
            'actionLabel' => 'Budget Officer Processing',
            'sort' => 15,
        ],
        20 => [
            'id' => 20, 
            'label' => 'Accounting Officer Processing', 
            'class' => 'warning status-accounting-officer-processing',
            'actionLabel' => 'Accounting Officer Processing',
            'sort' => 17,
        ],
        21 => [
            'id' => 21, 
            'label' => 'Disbursing Officer Processing', 
            'class' => 'warning status-disbursing-officer-processing',
            'actionLabel' => 'Disbursing Officer Processing',
            'sort' => 19,
        ],
        22 => [
            'id' => 22, 
            'label' => 'Accounting Officer Proofing', 
            'class' => 'warning status-accounting-officer-proofing',
            'actionLabel' => 'Accounting Officer Proofing',
            'sort' => 21,
        ],
        23 => [
            'id' => 23, 
            'label' => 'Treasurer Processing', 
            'class' => 'warning status-treasurer-processing',
            'actionLabel' => 'Treasurer Processing',
            'sort' => 24,
        ],
        24 => [
            'id' => 24, 
            'label' => 'Payment Completed', 
            'class' => 'success status-payment-completed',
            'actionLabel' => 'Payment Complete',
            'sort' => 25,
        ],
        25 => [
            'id' => 25, 
            'label' => 'IDReleased', 
            'class' => 'success status-id-released',
            'actionLabel' => 'IDRelease',
            'sort' => 26,
        ],
        26 => [
            'id' => 26, 
            'label' => 'Social Pension Received', 
            'class' => 'success',
            'actionLabel' => 'Social Pension Receive',
            'sort' => 27,
        ],
        27 => [
            'id' => 27, 
            'label' => 'For Uploading of Whitecard', 
            'class' => 'warning status-for-white-card-creation',
            'actionLabel' => 'Upload Whitecard',
            'secondaryLabel' => '',
            'sort' => 2,
        ],
        28 => [
            'id' => 28, 
            'label' => 'MSDWO Clerk Declined', 
            'class' => 'danger status-mswdo-clerk-declined',
            'actionLabel' => 'Decline',
            'secondaryLabel' => '',
            // 'sort' => 2,
        ],
    ],
    'school_attend' => [
        1 => ['id' => 1, 'label' => 'No', 'class' => 'warning'],
        2 => ['id' => 2, 'label' => 'Yes', 'class' => 'warning'],
    ],
    'industries' => [
        'Advertising and marketing',
        'Aerospace',
        'Agriculture',
        'Computer and technology',
        'Construction',
        'Education',
        'Energy',
        'Entertainment',
        'Fashion',
        'Finance and economic',
        'Food and beverage',
        'Health care',
        'Hospitality',
        'Manufacturing',
        'Media and news',
        'Mining',
        'Pharmaceutical',
        'Telecommunication',
        'Transportation',
    ],
    'pensioners' => [
        0 => ['id' => 0, 'label' => 'No', 'class' => 'success'],
        1 => ['id' => 1, 'label' => 'Yes', 'class' => 'success'],
    ],
    'source_of_incomes' => [
        1 => ['id' => 1, 'label' => 'Salary', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'Business', 'class' => 'success'],
    ],
    'pensioner_from' => [
        1 => ['id' => 1, 'label' => 'PVAO', 'class' => 'success'],
        2 => ['id' => 2, 'label' => 'SSS', 'class' => 'success'],
        3 => ['id' => 3, 'label' => 'GSIS', 'class' => 'success'],
    ],
    'family_head' => [
        0 => ['id' => 0, 'label' => 'No', 'class' => 'success'],
        1 => ['id' => 1, 'label' => 'Yes', 'class' => 'success'],
    ],
    'event_types' => [
        1 => ['id' => 1, 'label' => 'Seminar', 'class' => 'primary'],
        2 => ['id' => 2, 'label' => 'Training', 'class' => 'success'],
        3 => ['id' => 3, 'label' => 'Event', 'class' => 'secondary'],
        4 => ['id' => 4, 'label' => 'Assistance', 'class' => 'danger'],
        // 5 => ['id' => 5, 'label' => 'Social Pension', 'class' => 'danger'],
    ],
    'transaction_types' => [
        1 => [
            'id' => 1,
            'label' => 'Emergency Welfare Program',
            'slug' => 'emergency-welfare-program',
            'objective' => 'Provision of timely and appropriate assistance to individuals in crisis situation to help alleviate the condition, solution of disturbed, displace individuals or families and those who are victims of disasters, who are in need of food, clothing, temporary shelter and other emergency needs.', 
            'class' => 'primary',
        ],
        2 => [
            'id' => 2,
            'label' => 'Senior Citizen ID Application',
            'slug' => 'senior-citizen-id-application',
            'objective' => 'Issuance of identification card for the elderly residents of the municipality as proof of eligibility per Article 6 of Rule IV (Privileges for the Senior Citizen) of Implementing Rules and Regulations of Republic Act No. 9994 known as the “expanded Senior Citizens Act of 2010." Issued by the Office of the Senior Citizen Affairs through MSWD personnel in‐charge of the Senior Citizens.', 
            'class' => 'success',
        ],
        3 => [
            'id' => 3,
            'label' => 'Social Pension',
            'slug' => 'social-pension',
            'objective' => 'Provision of monthly stipend to augment the daily subsistence and medical needs of select indigent citizens of Real, the most vulnerable sector, through social protection.',
            'class' => 'warning'
        ],
        4 => [
            'id' => 4,
            'label' => 'Death Assistance',
            'slug' => 'death-assistance',
            'objective' => 'Provision of death benefit assistance to every Realeño available through a beneficiary as the nearest surviving relative by consanguinity.',
            'class' => 'secondary'
        ],
        5 => [
            'id' => 5,
            'label' => 'Certificate of Indigency',
            'slug' => 'certificate-of-indigency',
            'objective' => 'Certificate of Indigency is issued to requesting clients that their household is classified as an indigent family based on verification, interview, and claim of no financial capacity to pay for services.',
            'class' => 'danger'
        ],
        6 => [
            'id' => 6,
            'label' => 'Financial Certification',
            'slug' => 'financial-certification',
            'objective' => 'Financial Certification is issued to requesting clients having been assessed in accordance with DOH Classification on Indigence using the DSWD Assessment Tool.',
            'class' => 'danger'
        ],
        7 => [
            'id' => 7,
            'label' => 'Social Case Study Report',
            'slug' => 'social-case-study-report',
            'objective' => 'This includes identifying information, family composition, problems presented, background information, assessment and recommendations.',
            'class' => 'info'
        ],
        8 => [
            'id' => 8,
            'label' => 'Certificate of Marriage Counseling',
            'slug' => 'certificate-of-marriage-counseling',
            'objective' => 'Certificate of Marriage Counselling is required and issued to prospective couples with at least one partner being in the age range of 18‐24 years old who have completed marriage counselling activities.',
            'class' => 'info'
        ],
        9 => [
            'id' => 9,
            'label' => 'Certificate of Compliance',
            'slug' => 'certificate-of-compliance',
            'objective' => 'Certificate of Compliance is issued to prospective couples who have been provided couples with information and guidance performing their roles as husband and wife, and prepare them for the challenges of married life and their responsibilities as spouses, family members, and future parents.',
            'class' => 'info'
        ],
        10 => [
            'id' => 10,
            'label' => 'Certificate of Apparent Disability',
            'slug' => 'certificate-of-apparent-disability',
            'objective' => 'Certificate of Apparent Disability is issued to clients having had manifested the presence of physical Impairment and impaired mobility or function such as totally blind, missing limbs, limping and the likes after undergoing interview and assessment.',
            'class' => 'info'
        ],
    ],
    'emergency_welfare_programs' => [
        1 => [
            'id' => 1,
            'label' => 'AICS (Medical - Medicine)',
            'medical' => true,
            'requirements' => [
                [
                    'name' => 'Barangay where the client is presently residing',
                    'where_to_secure' => 'Barangay where the client is presently residing'
                ],
                [
                    'name' => 'White Card (1 Original)',
                    'where_to_secure' => 'Municipal Health Office'
                ],
                [
                    'name' => 'Clinical Abstract/Medical Certificate signed by a Licensed Physician within the last 3 months (1 Photocopy), if necessary',
                    'where_to_secure' => 'Attending physician or from Medical Records of the Hospital/ Clinic.'
                ],
                [
                    'name' => 'Hospital Bill or Statement of Account for those who were confined, if applicable (1 Photocopy)',
                    'where_to_secure' => 'Hospital where the client/patient is confined.'
                ],
                [
                    'name' => 'Medical prescription with the name, license number Signature of the requesting physician',
                    'where_to_secure' => 'Attending physician from a hospital/ clinic.'
                ]
            ]
        ],
        2 => [
            'id' => 2,
            'label' => 'AICS (Medical - Medical Procedure)',
            'medical' => true,
            'requirements' => [
                [
                    'name' => 'Barangay where the client is presently residing',
                    'where_to_secure' => 'Barangay where the client is presently residing'
                ],
                [
                    'name' => 'White Card (1 Original)',
                    'where_to_secure' => 'Municipal Health Office'
                ],
                [
                    'name' => 'Clinical Abstract/Medical Certificate signed by a Licensed Physician within the last 3 months (1 Photocopy), if necessary',
                    'where_to_secure' => 'Attending physician or from Medical Records of the Hospital/ Clinic.'
                ],
                [
                    'name' => 'Hospital Bill or Statement of Account for those who were confined, if applicable (1 Photocopy)',
                    'where_to_secure' => 'Hospital where the client/patient is confined.'
                ],
                [
                    'name' => 'Medical prescription with the name, license number Signature of the requesting physician',
                    'where_to_secure' => 'Attending physician from a hospital/ clinic.'
                ]
            ]
        ],
        3 => [
            'id' => 3,
            'label' => 'AICS (Medical - Laboratory Request)',
            'medical' => true,
            'requirements' => [
                [
                    'name' => 'Barangay Clearance (1 Original)',
                    'where_to_secure' => 'Barangay where the client is presently residing'
                ],
                [
                    'name' => 'White Card (1 Original)',
                    'where_to_secure' => 'Municipal Health Office'
                ],
                [
                    'name' => 'Laboratory request with the name, license number Signature of the requesting physician',
                    'where_to_secure' => 'Attending physician from a hospital/ clinic.'
                ],
            ]
        ],
        4 => [
            'id' => 4,
            'label' => 'Balik Probinsya Program',
            'medical' => false,
            'requirements' => [
                [
                    'name' => 'Barangay Clearance (1 Original)',
                    'where_to_secure' => 'Barangay where the client is presently residing'
                ],
                [
                    'name' => 'Social Case Study Report (1 Original Copy)',
                    'where_to_secure' => 'Municipal Social Welfare and Development Office (MSWDO)'
                ],
            ]
        ],
    ]
];

$params['transaction_types_menu'][1] = $params['transaction_types'][1];
$params['transaction_types_menu'][2] = $params['transaction_types'][2];
$params['transaction_types_menu'][3] = $params['transaction_types'][3];
$params['transaction_types_menu'][4] = $params['transaction_types'][4];
$params['transaction_types_menu'][5] = [
    'id' => 5,
    'label' => 'Certification',
    'slug' => 'certification',
    'objective' => 'Transactions for request of the following certifications: Certificate of Indigency, Certificate of Financial Capacity, Certificate of Apparent Disability.',
    'class' => 'danger'
];

$params['transaction_types_menu'][7] = [
    'id' => 7,
    'label' => 'Social Case Study Report',
    'slug' => 'social-case-study-report',
    'objective' => 'Generate report that describes the present situation of a needy individual and to justify the current condition of a client or patient to be eligible for assistance from sponsoring agencies in the form of financial assistance, hospitalization assistance, medical intervention.',
    'class' => 'info'
];

$params['transaction_types_menu'][8] = [
    'id' => 7,
    'label' => 'Marriage Certification',
    'slug' => 'marriage-certification',
    'objective' => 'Transactions for request of the following: Certificate of Marriage Counseling, Certificate of Compliance.',
    'class' => 'warning'
];


return $params;