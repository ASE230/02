<?php
$data = [
  "Kevin" => [
    "general" => [
      "name" => "Kevin Muscara",
      "title" => "Software Engineer",
      "email" => "muscarak1@nku.edu",
      "phone" => "+18595518787",
      "summary" => "Software engineer with demonstrated experience in the field of education technology. Strong skill set in behavior/test driven software design, and software development management. Currently seeking a software management position, preferably in the Cincinnati tri-state area, or remote.",
      "avatarURL" => "https://avatars.githubusercontent.com/u/29820047?v=4"
    ],
    "links" => [
      "LinkedIn" => "kevinmuscara",
      "GitHub" => "kevinmuscara",
      "Website" => "kevin.cafe"
    ],
    "education" => [
      [
        "university" => "Northern Kentucky University",
        "timeline" => "Expected 2026",
        "degree" => "BS, Applied Software Engineering"
      ]
    ],
    "skills" => [
      "main" => [
        [
          "name" => "JavaScript/Node.JS",
          "percent" => 100
        ],
        [
          "name" => "Deno",
          "percent" => 80
        ],
        [
          "name" => "React",
          "percent" => 60
        ]
      ],
      "other" => ["Docker", "Python", "IAM Automation", "Computer Networking", "Project Management"],
    ],
    "awards" => [
      [
        "title" => "STLP Mobile App Challenge",
        "description" => "Placed 1st in the NKU STLP Mobile App Challenge."
      ],
      [
        "title" => "NKU CIE Pitch",
        "description" => "Placed 2nd in the NKU CIE Pitch competition."
      ],
      [
        "title" => "KY Pitch",
        "description" => "Placed 3rd in the annual KY Pitch competition."
      ]
    ],
    "languages" => ["English"],
    "interests" => ["Hiking", "Programming", "Running"],
    "projects" => [
      [
        "title" => "Hallpass",
        "description" => "Digital hallway management software used by over 8,000 students.",
        "image" => "https://hallpass.gg/seo.png",
        "link" => "https://hallpass.gg",
      ],
      [
        "title" => "GH Humidity Sensor",
        "description" => "Environmental sensor dashboard following a recent water pipe break.",
        "image" => "https://www.thenortherner.com/wp-content/uploads/2023/02/774A9308-900x695.jpg",
        "link" => "https://www.thenortherner.com/news/2023/02/10/how-norse-iot-club-builds-humidity-sensors-for-griffin-hall/",
      ],
      [
        "title" => "Woodford Nutrition",
        "description" => "Designed website for delicious shake shop.",
        "image" => "https://woodfordnutrition.com/favicon.jpeg",
        "link" => "https://woodfordnutrition.com",
      ],
    ],
    "experiences" => [
      [
        'position' => 'Support Engineer Intern',
        'company' => 'Identity Automation',
        'timeline' => 'May 2023 - August 2023',
        'description' => 'Helped people',
        'achievements' => ["maintained 15 minute response SLA"],
        'tech' => ["Salesforce"],
      ]
    ]
  ]
];

$people = [];

foreach ($data as $person) {
  $people[] = $person['general']['name'];
}
?>
