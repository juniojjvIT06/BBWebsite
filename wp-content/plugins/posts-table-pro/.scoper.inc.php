<?php

declare( strict_types=1 );

use Isolated\Symfony\Component\Finder\Finder;

$wp_classes   = json_decode( file_get_contents( 'vendor/barn2/php-scoper-excludes/generated/exclude-wordpress-classes.json' ), true );
$wp_functions = json_decode( file_get_contents( 'vendor/barn2/php-scoper-excludes/generated/exclude-wordpress-functions.json' ), true );
$wp_constants = json_decode( file_get_contents( 'vendor/barn2/php-scoper-excludes/generated/exclude-wordpress-globals-constants.json' ), true );

// Find all assets that we need to append.
$finder = Finder::create();

$finder
	->in(
		[
            'vendor/barn2/table-generator/assets/build'
		]
	)
	->filter( static function ( SplFileInfo $file ) {
		return in_array( $file->getExtension(), [ 'css', 'js', 'woff', 'woff2', 'txt', 'php' ], true );
	} );

$assets = array_keys( \iterator_to_array( $finder ) );

return [
    // The prefix configuration. If a non null value will be used, a random prefix will be generated.
    'prefix'                     => 'Barn2\\Plugin\\Posts_Table_Pro\\Dependencies',
    'expose-global-constants' => false,
    'expose-global-classes'   => false,
    'expose-global-functions' => false,

    /**
     * By default when running php-scoper add-prefix, it will prefix all relevant code found in the current working
     * directory. You can however define which files should be scoped by defining a collection of Finders in the
     * following configuration key.
     *
     * For more see: https://github.com/humbug/php-scoper#finders-and-paths.
     */
    'finders'                    => [
        Finder::create()->
        files()->
        ignoreVCS( true )->
        notName( '/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.(json|lock)/' )->
        exclude(
            [
                'doc',
                'test',
                'build',
                'test_old',
                'tests',
                'Tests',
                'vendor-bin',
            ]
        )->
        in(
            [
                'vendor/barn2/table-generator/',
                'vendor/berlindb/'
            ]
        )->
		append( $assets )->
        name( [ '*.php' ] ),
    ],

	'exclude-classes'    => array_merge( $wp_classes ),
	'exclude-functions'  => array_merge( $wp_functions ),
	'exclude-constants'  => array_merge( $wp_constants ),
    'exclude-namespaces' => [ 'Barn2\\Plugin' ],

    /** When scoping PHP files, there will be scenarios where some of the code being scoped indirectly references the
     * original namespace. These will include, for example, strings or string manipulations. PHP-Scoper has limited
     * support for prefixing such strings. To circumvent that, you can define patchers to manipulate the file to your
     * heart contents.
     *
     * For more see: https://github.com/humbug/php-scoper#patchers.
     */
    // When scoping PHP files, there will be scenarios where some of the code being scoped indirectly references the
    // original namespace. These will include, for example, strings or string manipulations. PHP-Scoper has limited
    // support for prefixing such strings. To circumvent that, you can define patchers to manipulate the file to your
    // heart contents.
    //
    // For more see: https://github.com/humbug/php-scoper#patchers
    'patchers' => [
        
    ],
];
