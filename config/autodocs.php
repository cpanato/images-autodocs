<?php

declare(strict_types=1);

return [
    'autodocs' => [
        'images_sources' => config_unfurl(
            'AUTODOCS_SOURCES',
            __DIR__.'/../workdir/sources/images/images'
        ),
        'pages' => [
            \App\Page\OverviewPage::class,
            \App\Page\ProvenancePage::class,
            \App\Page\TagsHistoryPage::class,
            \App\Page\VariantsPage::class
        ],
        'output' => envconfig('AUTODOCS_OUTPUT', __DIR__.'/../workdir/output'),
        'cache_dir' => envconfig('AUTODOCS_CACHE', __DIR__.'/../workdir/cache'),
        'cache_images_file' => envconfig('AUTODOCS_IMAGES_CACHE', 'images-tags.json'),
        'templates_dir' => envconfig('AUTODOCS_TEMPLATES', __DIR__.'/../templates'),
        'ignore_images' => config_unfurl(
            'AUTODOCS_IGNORE_IMAGES',
            'alpine-base:k3s-images:k3s-embedded:sdk:spire:musl-dynamic:nri-kube-events:nri-kubernetes:nri-prometheus:gcc-musl:source-controller'
        ),
        'changelog' => envconfig('AUTODOCS_CHANGELOG', __DIR__.'/../workdir/output'),
        'changelog_output' => envconfig('AUTODOCS_CHANGELOG_OUTPUT', __DIR__.'/../workdir/changelog.md')
    ]
];
