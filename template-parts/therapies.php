<?php
$therapies = [
  [ 'abbr' => 'TLNS', 'name' => 'Translingual Neurostimulation',                    'origin' => 'Russia / USA',                    'tag' => 'neuromodulation', 'years' => '2018→'        ],
  [ 'abbr' => 'HBOT', 'name' => 'Hyperbaric Oxygen Therapy',                         'origin' => 'Israel',                          'tag' => 'oxygen',          'years' => '2017'         ],
  [ 'abbr' => 'STEM', 'name' => 'Stem cells (HLA-matched cord blood)',               'origin' => 'Russia · Duke USA',               'tag' => 'biological',      'years' => '2018, 2020'   ],
  [ 'abbr' => 'SPML', 'name' => 'Selective Percutaneous Myofascial Lengthening',     'origin' => 'Dr. Roy Nuzzo · NJ, USA',         'tag' => 'surgical',        'years' => '2022, 2024'   ],
  [ 'abbr' => 'DMI',  'name' => 'Dynamic Movement Intervention',                     'origin' => 'Spain',                           'tag' => 'motor',           'years' => 'ongoing'      ],
  [ 'abbr' => 'GYRO', 'name' => 'GyroStim — passive vestibular stimulation',         'origin' => 'Bulgaria',                        'tag' => 'vestibular',      'years' => '2019'         ],
  [ 'abbr' => 'LLLT', 'name' => 'Low Level Light Therapy / Photobiomodulation',      'origin' => 'Italy — Cerebro',                 'tag' => 'photobiomodulation', 'years' => '2023→'        ],
  [ 'abbr' => 'SCS',  'name' => 'Non-invasive spinal cord stimulation',              'origin' => 'Chattanooga · USA',               'tag' => 'neuromodulation', 'years' => '2023'         ],
  [ 'abbr' => 'EMS',  'name' => 'Exopulse Mollii Suit (clinical trial)',             'origin' => 'France · Nice Rossetti',          'tag' => 'motor',           'years' => '2024'         ],
  [ 'abbr' => 'TOM',  'name' => 'Tomatis',                                           'origin' => 'France',                          'tag' => 'auditory',        'years' => 'ongoing'      ],
  [ 'abbr' => 'FELD', 'name' => 'Feldenkrais / ABM',                                'origin' => 'International',                   'tag' => 'motor',           'years' => 'ongoing'      ],
  [ 'abbr' => 'ALK',  'name' => 'Alinker walking-bike (daily)',                      'origin' => 'BE Alink · Netherlands',          'tag' => 'mobility',        'years' => 'daily'        ],
];

$tag_colors = [
  'neuromodulation' => 'accent',
  'oxygen'          => 'sky',
  'biological'      => 'leaf',
  'surgical'        => 'accent',
  'motor'           => 'leaf',
  'vestibular'      => 'sky',
  'photobiomodulation' => 'purple',
  'auditory'        => 'sky',
  'mobility'        => 'leaf',
];
?>
<section class="therapies" id="therapies">
  <div class="wrap">

    <div class="therapies-head">
      <div class="eyebrow">Thérapies documentées</div>
      <h2 class="display therapies-title">Ce que la France ne propose pas encore.</h2>
      <p class="therapies-lede">Une bibliothèque vivante des protocoles que nous avons testés, étudiés, ou suivis pour Marc et les enfants de l'association.</p>
    </div>

    <div class="therapies-grid">
      <?php foreach ( $therapies as $th ) :
        $color = esc_attr( $tag_colors[ $th['tag'] ] ?? 'accent' );
      ?>
      <article class="therapy">
        <div class="therapy-head">
          <div class="therapy-abbr serif"><?php echo esc_html( $th['abbr'] ); ?></div>
          <span class="tag tag-<?php echo $color; ?>"><?php echo esc_html( $th['tag'] ); ?></span>
        </div>
        <h3 class="therapy-name"><?php echo esc_html( $th['name'] ); ?></h3>
        <div class="therapy-meta">
          <span class="therapy-origin"><?php echo esc_html( $th['origin'] ); ?></span>
          <span class="therapy-years"><?php echo esc_html( $th['years'] ); ?></span>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="therapies-foot">
      <div class="muted">12 protocoles documentés · plus de 40 études compilées</div>
      <a href="#join" class="btn btn-ghost btn-sm">
        Accéder à la bibliothèque complète
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7H12M12 7L7 2M12 7L7 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>

  </div>
</section>
