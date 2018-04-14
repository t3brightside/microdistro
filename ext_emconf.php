<?php
  $EM_CONF[$_EXTKEY] = [
    'title' => 'Microtemplate Distribution',
    'description' => 'Demo at: https://microtemplate.t3brightside.com',
    'category' => 'distribution',
    'constraints' => [
      'depends' => [
        'typo3' => '8.7.0-8.7.99',
        'fluid_styled_content' => '8.7.0-8.7.99',
        'rte_ckeditor' => '8.7.0-8.7.99',
        'microtemplate' => '0.1.2-1.9.99',
        'gridelements' => '8.2.1-8.9.99',
        'youtubevideo' => '1.2.3-2.9.99',
        'metaplus' => '0.0.5-2.9.99',
        'pagelist' => '1.0.0-2.9.99',
        'personnel' => '1.0.0-2.9.99',
        'realurl' => '2.3.1-2.9.99',
        'unroll' => '2.0.2-2.9.99',
      ],
      'conflicts' => [
      ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Tanel Põld',
    'author_email' => 'tanel@brightside.ee',
    'author_company' => 'Brightside OÜ',
    'version' => '0.0.1',
  ];
