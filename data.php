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
      ],
      [
        "university" => "Jessamine Career and Technology Center",
        "timeline" => "May 2022",
        "degree" => "Information Technology"
      ],
      [
        "university" => "West Jessamine High School",
        "timeline" => "May 2022",
        "degree" => "Diploma"
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
          "name" => "Database",
          "percent" => 80
        ],
        [
          "name" => "React",
          "percent" => 60
        ],
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
        'position' => 'President',
        'company' => 'Norse IoT',
        'timeline' => 'January 2023 - Present',
        'description' => 'Managed student led research and development of IoT applications. Planned and advertised all organization meetings and fundraising opportunities. Maintained and approved all organization purchase requests and budgets.',
        'achievements' => [],
        'tech' => [
          'ESP32'
        ]
      ],
      [
        'position' => 'Chief Executive Officer',
        'company' => 'Muscara Software Solutions',
        'timeline' => 'April 2022 - Present',
        'description' => "Engineered and implemented a educational technology application, actively empowering more than 8,000 students. Developed a suite of data analysis tools that automated student state testing results. Provided professional software consulting and testing to improve clients product reliability. Developed client landing pages and CMS dashboards to increase digital presence.",
        'achievements' => ["Raised over $6,000 in operation funding"],
        'tech' => ["Node.JS", 'Docker', 'Railway', 'MySQL', 'Deno', 'React', 'PostgreSQL', 'MariaDB'],
      ],
      [
        'position' => 'Support Engineer Intern',
        'company' => 'Identity Automation',
        'timeline' => 'May 2023 - August 2023',
        'description' => "Provided web-based application consulting and/or support. Performed in-depth analysis of functionality and usability concerns. Collaborated with client's IT personnel to comprehend complex issues. Diagnosed client SSO/SAML configurations and adeptly executed IAM remedies.",
        'achievements' => ["Maintained 15 minute response SLA", "Exceeded monthly ticket quota."],
        'tech' => ["Salesforce", "Slack"],
      ],
      [
        'position' => 'Network Engineer Team Lead',
        'company' => 'Jessamine County Schools',
        'timeline' => 'June 2019 - May 2022',
        'description' => "Performed training/onboarding of new student workers. Designed and implemented advanced dynamic routing configurations (OSPF, SPB, ISIS). Engineered automation scripts to improve job efficiency. Assisted in research and development of newer services and solutions. Installed, maintained, and configured Extreme/Avaya devices of the core network infrastructure. Managed Google Enterprise of over 12,000 Google devices, enrolling and deprovisioning when needed. Provided IAM maintenance for device and user profiles in Active Directory and Google.",
        'achievements' => [],
        'tech' => ["Avaya", "Slack", 'Extreme', 'Perl', 'Ruby', 'Python', 'Google Suite']
      ],
    ]
  ]
];

$people = [];

foreach ($data as $person) {
  $people[] = $person['general']['name'];
}
?>
