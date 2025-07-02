<?php
Kirby::plugin('luxuryluke/filetemplates', [

  'areas' => [
    'luxuryluke.filetemplates' => function (\Kirby\Cms\App $kirby) {
      return [
        'label' => 'Files',
        'icon'  => 'check',
        'menu'  => true,
        'link'  => 'filetemplates',
        'views' => [
          [
            'pattern' => 'filetemplates',
            'action'  => function ()  use ($kirby) {
              $files = [];
              foreach ($kirby->site()->images() as $image) {
                $files[] = [
                  'id'    => $image->id(),
                  'name' => $image->filename(),
                  'size' => $image->niceSize()
                ];
              }

              return [
                'component' => 'luxuryluke.filetemplates',
                'title'     => 'Files',
                'props'     => [
                  'files' => $files
                ]
              ];
            }
          ]
        ]
      ];
    }
  ]

]);