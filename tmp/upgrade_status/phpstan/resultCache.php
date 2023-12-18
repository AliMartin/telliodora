<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1702931526,
	'meta' => array (
  'cacheVersion' => 'v10-collectedData',
  'phpstanVersion' => '1.10.50',
  'phpVersion' => 80122,
  'projectConfig' => '{parameters: {bootstrapFiles: [/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php], excludePaths: {analyseAndScan: [*.api.php, */tests/fixtures/*.php, */tests/Drupal/Tests/Listeners/Legacy/*, */tests/fixtures/*.php, */settings*.php, */bower_components/*, */node_modules/*], analyse: []}, fileExtensions: [module, theme, inc, install, profile, engine], dynamicConstantNames: [Drupal::VERSION], scanFiles: [/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub], drupal: {drupal_root: /var/www/html, bleedingEdge: {checkDeprecatedHooksInApiFiles: false}, entityMapping: {aggregator_feed: {class: Drupal\\aggregator\\Entity\\Feed, storage: Drupal\\aggregator\\FeedStorage}, aggregator_item: {class: Drupal\\aggregator\\Entity\\Item, storage: Drupal\\aggregator\\ItemStorage}, block: {class: Drupal\\block\\Entity\\Block, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, block_content: {class: Drupal\\block_content\\Entity\\BlockContent, storage: Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage}, block_content_type: {class: Drupal\\block_content\\Entity\\BlockContentType, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, comment_type: {class: Drupal\\comment\\Entity\\CommentType, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, comment: {class: Drupal\\comment\\Entity\\Comment, storage: Drupal\\comment\\CommentStorage}, contact_form: {class: Drupal\\contact\\Entity\\ContactForm, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, contact_message: {class: Drupal\\contact\\Entity\\Message, storage: Drupal\\Core\\Entity\\ContentEntityNullStorage}, content_moderation_state: {class: Drupal\\content_moderation\\Entity\\ContentModerationState, storage: Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage}, editor: {class: Drupal\\editor\\Entity\\Editor, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, field_config: {class: Drupal\\field\\Entity\\FieldConfig, storage: Drupal\\field\\FieldConfigStorage}, field_storage_config: {class: Drupal\\field\\Entity\\FieldStorageConfig, storage: Drupal\\field\\FieldStorageConfigStorage}, file: {class: Drupal\\file\\Entity\\File, storage: Drupal\\file\\FileStorage}, filter_format: {class: Drupal\\filter\\Entity\\FilterFormat, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, image_style: {class: Drupal\\image\\Entity\\ImageStyle, storage: Drupal\\image\\ImageStyleStorage}, imce_profile: {class: Drupal\\imce\\Entity\\ImceProfile, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, configurable_language: {class: Drupal\\language\\Entity\\ConfigurableLanguage, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, language_content_settings: {class: Drupal\\language\\Entity\\ContentLanguageSettings, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, media_type: {class: Drupal\\media\\Entity\\MediaType, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, media: {class: Drupal\\media\\Entity\\Media, storage: Drupal\\media\\MediaStorage}, menu_link_content: {class: Drupal\\menu_link_content\\Entity\\MenuLinkContent, storage: \\Drupal\\menu_link_content\\MenuLinkContentStorage}, metatag_defaults: {class: Drupal\\metatag\\Entity\\MetatagDefaults, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, node_type: {class: Drupal\\node\\Entity\\NodeType, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, node: {class: Drupal\\node\\Entity\\Node, storage: Drupal\\node\\NodeStorage}, path_alias: {class: Drupal\\path_alias\\Entity\\PathAlias, storage: Drupal\\path_alias\\PathAliasStorage}, rdf_mapping: {class: Drupal\\rdf\\Entity\\RdfMapping, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, responsive_image_style: {class: Drupal\\responsive_image\\Entity\\ResponsiveImageStyle, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, search_page: {class: Drupal\\search\\Entity\\SearchPage, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, search_api_server: {class: Drupal\\search_api\\Entity\\Server, storage: Drupal\\search_api\\Entity\\SearchApiConfigEntityStorage}, search_api_index: {class: Drupal\\search_api\\Entity\\Index, storage: Drupal\\search_api\\Entity\\SearchApiConfigEntityStorage}, search_api_task: {class: Drupal\\search_api\\Entity\\Task, storage: Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage}, shortcut_set: {class: Drupal\\shortcut\\Entity\\ShortcutSet, storage: Drupal\\shortcut\\ShortcutSetStorage}, shortcut: {class: Drupal\\shortcut\\Entity\\Shortcut, storage: Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage}, action: {class: Drupal\\system\\Entity\\Action, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, menu: {class: Drupal\\system\\Entity\\Menu, storage: Drupal\\system\\MenuStorage}, taxonomy_term: {class: Drupal\\taxonomy\\Entity\\Term, storage: Drupal\\taxonomy\\TermStorage}, taxonomy_vocabulary: {class: Drupal\\taxonomy\\Entity\\Vocabulary, storage: Drupal\\taxonomy\\VocabularyStorage}, tour: {class: Drupal\\tour\\Entity\\Tour, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, user: {class: Drupal\\user\\Entity\\User, storage: Drupal\\user\\UserStorage}, user_role: {class: Drupal\\user\\Entity\\Role, storage: Drupal\\user\\RoleStorage}, webform: {class: Drupal\\webform\\Entity\\Webform, storage: \\Drupal\\webform\\WebformEntityStorage}, webform_submission: {class: Drupal\\webform\\Entity\\WebformSubmission, storage: Drupal\\webform\\WebformSubmissionStorage}, webform_options: {class: Drupal\\webform\\Entity\\WebformOptions, storage: \\Drupal\\webform\\WebformOptionsStorage}, workflow: {class: Drupal\\workflows\\Entity\\Workflow, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, pathauto_pattern: {class: Drupal\\pathauto\\Entity\\PathautoPattern, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, view: {class: Drupal\\views\\Entity\\View, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, date_format: {class: Drupal\\Core\\Datetime\\Entity\\DateFormat, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, entity_form_mode: {class: Drupal\\Core\\Entity\\Entity\\EntityFormMode, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, entity_view_display: {class: Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay, storage: Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplayStorage}, entity_form_display: {class: Drupal\\Core\\Entity\\Entity\\EntityFormDisplay, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, entity_view_mode: {class: Drupal\\Core\\Entity\\Entity\\EntityViewMode, storage: Drupal\\Core\\Config\\Entity\\ConfigEntityStorage}, base_field_override: {class: Drupal\\Core\\Field\\Entity\\BaseFieldOverride, storage: Drupal\\Core\\Field\\BaseFieldOverrideStorage}}}, deprecationRulesInstalled: true, tmpDir: /var/www/html/tmp/upgrade_status/phpstan, customRulesetUsed: true, reportUnmatchedIgnoredErrors: false}, rules: [PHPStan\\Rules\\Deprecations\\AccessDeprecatedPropertyRule, PHPStan\\Rules\\Deprecations\\AccessDeprecatedStaticPropertyRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedFunctionRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedMethodRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedStaticMethodRule, PHPStan\\Rules\\Deprecations\\FetchingClassConstOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\FetchingDeprecatedConstRule, PHPStan\\Rules\\Deprecations\\ImplementationOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InstantiationOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClassMethodSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClosureSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInFunctionSignatureRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedCastRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedTraitRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\Coder\\DiscouragedFunctionsRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\GlobalDrupalDependencyInjectionRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\PluginManager\\PluginManagerSetsCacheBackendRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\AccessDeprecatedConstant, mglaman\\PHPStanDrupal\\Rules\\Classes\\ClassExtendsInternalClassRule, mglaman\\PHPStanDrupal\\Rules\\Classes\\PluginManagerInspectionRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\ConditionManagerCreateInstanceContextConfigurationRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\RenderCallbackRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\StaticServiceDeprecatedServiceRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\GetDeprecatedServiceRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\Tests\\BrowserTestBaseDefaultThemeRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\ConfigEntityConfigExportRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\PluginAnnotationContextDefinitionsRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\ModuleLoadInclude, mglaman\\PHPStanDrupal\\Rules\\Drupal\\LoadIncludes, mglaman\\PHPStanDrupal\\Rules\\Drupal\\EntityQuery\\EntityQueryHasAccessCheckRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\SymfonyCmfRouteObjectInterfaceConstantsRule, mglaman\\PHPStanDrupal\\Rules\\Deprecations\\SymfonyCmfRoutingInClassMethodSignatureRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\RequestStackGetMainRequestRule, mglaman\\PHPStanDrupal\\Rules\\Drupal\\TestClassesProtectedPropertyModulesRule], services: [{class: mglaman\\PHPStanDrupal\\Drupal\\ServiceMap}, {class: mglaman\\PHPStanDrupal\\Drupal\\ExtensionMap}, {class: mglaman\\PHPStanDrupal\\Drupal\\EntityDataRepository, arguments: {entityMapping: %drupal.entityMapping%}}, {class: mglaman\\PHPStanDrupal\\Type\\EntityTypeManagerGetStorageDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityStorage\\EntityStorageDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityStorage\\GetQueryReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\ContainerDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalClassResolverDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityQuery\\EntityQueryDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityQuery\\EntityQueryAccessCheckDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityAccessControlHandlerReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalClassResolverDynamicStaticReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalServiceDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\DrupalStaticEntityQueryDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: mglaman\\PHPStanDrupal\\Reflection\\EntityFieldsViaMagicReflectionExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: mglaman\\PHPStanDrupal\\Reflection\\EntityFieldMethodsViaMagicReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: mglaman\\PHPStanDrupal\\Drupal\\DrupalStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: mglaman\\PHPStanDrupal\\Type\\EntityQuery\\AccessCheckTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: mglaman\\PHPStanDrupal\\DeprecatedScope\\GroupLegacyScope, tags: [phpstan.deprecations.deprecatedScopeResolver]}, {class: PHPStan\\Rules\\Deprecations\\DeprecatedClassHelper}, {class: PHPStan\\DependencyInjection\\LazyDeprecatedScopeResolverProvider}, {class: PHPStan\\Rules\\Deprecations\\DeprecatedScopeHelper, factory: @PHPStan\\DependencyInjection\\LazyDeprecatedScopeResolverProvider::get}, {class: PHPStan\\Rules\\Deprecations\\DefaultDeprecatedScopeResolver, tags: [phpstan.deprecations.deprecatedScopeResolver]}]}',
  'analysedPaths' => 
  array (
    0 => '/var/www/html/themes/custom/telliodora',
  ),
  'scannedFiles' => 
  array (
    '/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub' => '3954aa07121db386830c1efdfd9104abfb36408b',
  ),
  'composerLocks' => 
  array (
    '/var/www/html/composer.lock' => '501329bcc8c471723f918b5ed9e8fafc2bfbbd7e',
  ),
  'composerInstalled' => 
  array (
    '/var/www/html/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'asm89/stack-cors' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'b9c31def6a83f84b4d4a40d35996d375755f0e08',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../asm89/stack-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'chi-teck/drupal-code-generator' => 
        array (
          'pretty_version' => '2.6.2',
          'version' => '2.6.2.0',
          'reference' => '22ed1cc02dc47814e8239de577da541e9b9bd980',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../chi-teck/drupal-code-generator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/installers' => 
        array (
          'pretty_version' => 'v1.12.0',
          'version' => '1.12.0.0',
          'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/./installers',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/annotated-command' => 
        array (
          'pretty_version' => '4.9.1',
          'version' => '4.9.1.0',
          'reference' => 'e01152f698eff4cb5df3ebfe5e097ef335dbd3c9',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/annotated-command',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/config' => 
        array (
          'pretty_version' => '2.1.2',
          'version' => '2.1.2.0',
          'reference' => '597f8d7fbeef801736250ec10c3e190569b1b0ae',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/filter-via-dot-access-data' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'cb2eeba41f8e2e3c61698a5cf70ef048ff6c9d5b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/filter-via-dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/log' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '3ad08dc57e8aff9400111bad36beb0ed387fe6a9',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/output-formatters' => 
        array (
          'pretty_version' => '4.3.2',
          'version' => '4.3.2.0',
          'reference' => '06711568b4cd169700ff7e8075db0a9a341ceb58',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/output-formatters',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/robo' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => 'ccf80963abf11bdb8e90659aa99a7449b21e9452',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/robo',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/self-update' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '972a1016761c9b63314e040836a12795dff6953a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/self-update',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/site-alias' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'b0eeb8c8f3d54d072824ee31b5e00cb5181f91c5',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/site-alias',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'consolidation/site-process' => 
        array (
          'pretty_version' => '4.2.1',
          'version' => '4.2.1.0',
          'reference' => 'ee3bf69001694b2117cc2f96c2ef70d8d45f1234',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../consolidation/site-process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'container-interop/container-interop' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.2.0',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/annotations' => 
        array (
          'pretty_version' => '1.13.3',
          'version' => '1.13.3.0',
          'reference' => '648b0343343565c4a056bfc8392201385e8d89f0',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../doctrine/annotations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/reflection' => 
        array (
          'pretty_version' => '1.2.4',
          'version' => '1.2.4.0',
          'reference' => '6bcea3e81ab8b3d0abe5fde5300bbc8a968960c7',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../doctrine/reflection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/admin_toolbar' => 
        array (
          'pretty_version' => '3.4.2',
          'version' => '3.4.2.0',
          'reference' => '3.4.2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/admin_toolbar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/back_to_top' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '3.0.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/back_to_top',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/backup_migrate' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '5.0.3',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/backup_migrate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/bg_image_formatter' => 
        array (
          'pretty_version' => '1.17.0',
          'version' => '1.17.0.0',
          'reference' => '8.x-1.17',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/bg_image_formatter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/blazy' => 
        array (
          'pretty_version' => '2.22.0',
          'version' => '2.22.0.0',
          'reference' => '8.x-2.22',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/blazy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/block_class' => 
        array (
          'pretty_version' => '2.0.11',
          'version' => '2.0.11.0',
          'reference' => '2.0.11',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/block_class',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/block_field' => 
        array (
          'pretty_version' => '1.0.0-rc4',
          'version' => '1.0.0.0-RC4',
          'reference' => '8.x-1.0-rc4',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/block_field',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/blockgroup' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '2.0.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/blockgroup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/bootstrap5' => 
        array (
          'pretty_version' => '4.0.0-alpha1',
          'version' => '4.0.0.0-alpha1',
          'reference' => '4.0.0-alpha1',
          'type' => 'drupal-theme',
          'install_path' => '/var/www/html/vendor/composer/../../themes/contrib/bootstrap5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/captcha' => 
        array (
          'pretty_version' => '2.0.5',
          'version' => '2.0.5.0',
          'reference' => '2.0.5',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/captcha',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/context' => 
        array (
          'pretty_version' => '5.0.0-rc1',
          'version' => '5.0.0.0-RC1',
          'reference' => '5.0.0-rc1',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core' => 
        array (
          'pretty_version' => '9.5.11',
          'version' => '9.5.11.0',
          'reference' => '8afcb233c2a71501b35fed2713167c37831d5c19',
          'type' => 'drupal-core',
          'install_path' => '/var/www/html/vendor/composer/../../core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-annotation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-assertion' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-bridge' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-class-finder' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-composer-scaffold' => 
        array (
          'pretty_version' => '9.5.11',
          'version' => '9.5.11.0',
          'reference' => '08da8e59c6f1bd0b1a58d18f8addc0d937bbacc7',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../drupal/core-composer-scaffold',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-datetime' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-dependency-injection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-diff' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-discovery' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-event-dispatcher' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-file-cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-file-security' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-front-matter' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-gettext' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-graph' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-http-foundation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-php-storage' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-plugin' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-project-message' => 
        array (
          'pretty_version' => '9.5.11',
          'version' => '9.5.11.0',
          'reference' => '5dfa0b75a057caf6542be67f61e7531c737db48c',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../drupal/core-project-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-proxy-builder' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-recommended' => 
        array (
          'pretty_version' => '9.5.11',
          'version' => '9.5.11.0',
          'reference' => 'af3521be5376e333ddcdbd31c5a169f16423b46f',
          'type' => 'metapackage',
          'install_path' => NULL,
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-render' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-serialization' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-transliteration' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-utility' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/core-vendor-hardening' => 
        array (
          'pretty_version' => '9.5.11',
          'version' => '9.5.11.0',
          'reference' => '8293a845c64f1faad0d44955611f8cce69320274',
          'type' => 'composer-plugin',
          'install_path' => '/var/www/html/vendor/composer/../drupal/core-vendor-hardening',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/core-version' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '9.5.11',
          ),
        ),
        'drupal/ctools' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => '4.0.4',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/ctools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/embed' => 
        array (
          'pretty_version' => '1.7.0',
          'version' => '1.7.0.0',
          'reference' => '8.x-1.7',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/embed',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/entity' => 
        array (
          'pretty_version' => '1.4.0',
          'version' => '1.4.0.0',
          'reference' => '8.x-1.4',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/entity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/entity_embed' => 
        array (
          'pretty_version' => '1.5.0',
          'version' => '1.5.0.0',
          'reference' => '8.x-1.5',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/entity_embed',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/entity_reference_revisions' => 
        array (
          'pretty_version' => '1.10.0',
          'version' => '1.10.0.0',
          'reference' => '8.x-1.10',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/entity_reference_revisions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/fitvids' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '2.0.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/fitvids',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/google_analytics' => 
        array (
          'pretty_version' => '4.0.2',
          'version' => '4.0.2.0',
          'reference' => '4.0.2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/google_analytics',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/honeypot' => 
        array (
          'pretty_version' => '2.1.3',
          'version' => '2.1.3.0',
          'reference' => '2.1.3',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/honeypot',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/httpswww' => 
        array (
          'pretty_version' => '2.1.2',
          'version' => '2.1.2.0',
          'reference' => '2.1.2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/httpswww',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/jquery_ui' => 
        array (
          'pretty_version' => '1.6.0',
          'version' => '1.6.0.0',
          'reference' => '8.x-1.6',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/jquery_ui',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/jquery_ui_effects' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '2.0.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/jquery_ui_effects',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/linkit' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => '6.0.2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/linkit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/menu_link_attributes' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => '8.x-1.3',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/menu_link_attributes',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/metatag' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '2.0.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/metatag',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/paragraphs' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '8.x-1.16',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/paragraphs',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/pathauto' => 
        array (
          'pretty_version' => '1.12.0',
          'version' => '1.12.0.0',
          'reference' => '8.x-1.12',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/pathauto',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/recaptcha' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '8.x-3.2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/recaptcha',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/redirect' => 
        array (
          'pretty_version' => '1.9.0',
          'version' => '1.9.0.0',
          'reference' => '8.x-1.9',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/redirect',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/responsive_menu' => 
        array (
          'pretty_version' => '4.4.3',
          'version' => '4.4.3.0',
          'reference' => '4.4.3',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/responsive_menu',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/slick' => 
        array (
          'pretty_version' => '2.10.0',
          'version' => '2.10.0.0',
          'reference' => '8.x-2.10',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/slick',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/slick_extras' => 
        array (
          'pretty_version' => '1.0.0-rc8',
          'version' => '1.0.0.0-RC8',
          'reference' => '8.x-1.0-rc8',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/slick_extras',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/slick_views' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '8.x-2.8',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/slick_views',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/tb_megamenu' => 
        array (
          'pretty_version' => '1.7.0',
          'version' => '1.7.0.0',
          'reference' => '8.x-1.7',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/tb_megamenu',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/token' => 
        array (
          'pretty_version' => '1.13.0',
          'version' => '1.13.0.0',
          'reference' => '8.x-1.13',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/token',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/upgrade_status' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '4.0.0',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/upgrade_status',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drupal/webform' => 
        array (
          'pretty_version' => '6.2.2',
          'version' => '6.2.2.0',
          'reference' => '6.2.2',
          'type' => 'drupal-module',
          'install_path' => '/var/www/html/vendor/composer/../../modules/contrib/webform',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'drush/drush' => 
        array (
          'pretty_version' => '11.6.0',
          'version' => '11.6.0.0',
          'reference' => 'f301df5dec8d2aacb03d3e01e0ffc6d98e10ae78',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../drush/drush',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '3.2.6',
          'version' => '3.2.6.0',
          'reference' => 'e5997fa97e8790cdae03a9cbd5e78e45e3c7bda7',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'enlightn/security-checker' => 
        array (
          'pretty_version' => 'v1.11.0',
          'version' => '1.11.0.0',
          'reference' => '68df5c7256c84b428bf8fcff0d249de06ce362d2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../enlightn/security-checker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'google/recaptcha' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'd59a801e98a4e9174814a6d71bbc268dff1202df',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../google/recaptcha',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'grasmash/expander' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b7cbc1f2fdf9a9c0e253a424c2a4058316b7cb6e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../grasmash/expander',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '6.5.8',
          'version' => '6.5.8.0',
          'reference' => 'a52f0440530b54fa079ce76e8c5d196a42cad981',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '1.5.3',
          'version' => '1.5.3.0',
          'reference' => '67ab6e18aaa14d753cc148911d273f6e6cb6721e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '1.9.1',
          'version' => '1.9.1.0',
          'reference' => 'e4490cabc77465aaee90b20cfc9a770f8c04be6b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laminas/laminas-diactoros' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '2.18.1',
          ),
        ),
        'laminas/laminas-escaper' => 
        array (
          'pretty_version' => '2.13.0',
          'version' => '2.13.0.0',
          'reference' => 'af459883f4018d0f8a0c69c7a209daef3bf973ba',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laminas/laminas-escaper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laminas/laminas-feed' => 
        array (
          'pretty_version' => '2.22.0',
          'version' => '2.22.0.0',
          'reference' => '669792b819fca7274698147ad7a2ecc1b0a9b141',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laminas/laminas-feed',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laminas/laminas-servicemanager' => 
        array (
          'pretty_version' => '3.22.1',
          'version' => '3.22.1.0',
          'reference' => 'de98d297d4743956a0558a6d71616979ff779328',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laminas/laminas-servicemanager',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laminas/laminas-stdlib' => 
        array (
          'pretty_version' => '3.18.0',
          'version' => '3.18.0.0',
          'reference' => 'e85b29076c6216e7fc98e72b42dbe1bbc3b95ecf',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laminas/laminas-stdlib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laminas/laminas-text' => 
        array (
          'pretty_version' => '2.11.0',
          'version' => '2.11.0.0',
          'reference' => 'd799f3ccb3547e9e6ab313447138bae7009c7cc7',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../laminas/laminas-text',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/container' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => '375d13cb828649599ef5d48a339c4af7a26cd0ab',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../league/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'longwave/laminas-diactoros' => 
        array (
          'pretty_version' => '2.14.2',
          'version' => '2.14.2.0',
          'reference' => 'ae4f0becf249ae8eea8f2f8f9fb927104e55a885',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../longwave/laminas-diactoros',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.7.6',
          'version' => '2.7.6.0',
          'reference' => '897eb517a343a2281f11bc5556d6548db7d93947',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mathieuviossat/arraytotexttable' => 
        array (
          'pretty_version' => 'v1.0.10',
          'version' => '1.0.10.0',
          'reference' => 'dddaf50d2c1d655b985e63337c421b298f7854be',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../mathieuviossat/arraytotexttable',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mglaman/phpstan-drupal' => 
        array (
          'pretty_version' => '1.2.4',
          'version' => '1.2.4.0',
          'reference' => '57b2cc67fb4416e8484db37a3d8502ac8fb3c0d6',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/html/vendor/composer/../mglaman/phpstan-drupal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v4.18.0',
          'version' => '4.18.0.0',
          'reference' => '1bcbb2179f97633e98bbbc87044ee2611c7d7999',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orno/di' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '~2.0',
          ),
        ),
        'pear/archive_tar' => 
        array (
          'pretty_version' => '1.4.14',
          'version' => '1.4.14.0',
          'reference' => '4d761c5334c790e45ef3245f0864b8955c562caa',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pear/archive_tar',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pear/console_getopt' => 
        array (
          'pretty_version' => 'v1.4.3',
          'version' => '1.4.3.0',
          'reference' => 'a41f8d3e668987609178c7c4a9fe48fecac53fa0',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pear/console_getopt',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pear/pear-core-minimal' => 
        array (
          'pretty_version' => 'v1.10.14',
          'version' => '1.10.14.0',
          'reference' => 'a86fc145edb5caedbf96527214ce3cadc9de4a32',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../pear/pear-core-minimal',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pear/pear_exception' => 
        array (
          'pretty_version' => 'v1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
          'type' => 'class',
          'install_path' => '/var/www/html/vendor/composer/../pear/pear_exception',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '1.10.50',
          'version' => '1.10.50.0',
          'reference' => '06a98513ac72c03e8366b5a0cb00750b487032e4',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan-deprecation-rules' => 
        array (
          'pretty_version' => '1.1.4',
          'version' => '1.1.4.0',
          'reference' => '089d8a8258ed0aeefdc7b68b6c3d25572ebfdbaa',
          'type' => 'phpstan-extension',
          'install_path' => '/var/www/html/vendor/composer/../phpstan/phpstan-deprecation-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/cache' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container' => 
        array (
          'pretty_version' => '1.1.2',
          'version' => '1.1.2.0',
          'reference' => '513e0666f7216c7459170d56df27dfcefe1689ea',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '^1.0',
            1 => '1.0',
          ),
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '1.0.1',
          'version' => '1.0.1.0',
          'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.11.22',
          'version' => '0.11.22.0',
          'reference' => '128fa1b608be651999ed9789c95e6e2a31b5802b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'rsky/pear-core-min' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v1.10.14',
          ),
        ),
        'shama/baton' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'stack/builder' => 
        array (
          'pretty_version' => 'v1.0.6',
          'version' => '1.0.6.0',
          'reference' => 'a4faaa6f532c6086bc66c29e1bc6c29593e1ca7c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../stack/builder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony-cmf/routing' => 
        array (
          'pretty_version' => '2.3.4',
          'version' => '2.3.4.0',
          'reference' => 'bbcdf2f6301d740454ba9ebb8adaefd436c36a6b',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony-cmf/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v4.4.49',
          'version' => '4.4.49.0',
          'reference' => '33fa45ffc81fdcc1ca368d4946da859c8cdb58d9',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/debug' => 
        array (
          'pretty_version' => 'v4.4.44',
          'version' => '4.4.44.0',
          'reference' => '1a692492190773c5310bc7877cb590c04c2f05be',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/debug',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/dependency-injection' => 
        array (
          'pretty_version' => 'v4.4.49',
          'version' => '4.4.49.0',
          'reference' => '9065fe97dbd38a897e95ea254eb5ddfe1310f734',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/dependency-injection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v2.5.2',
          'version' => '2.5.2.0',
          'reference' => 'e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v4.4.44',
          'version' => '4.4.44.0',
          'reference' => 'be731658121ef2d8be88f3a1ec938148a9237291',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v4.4.44',
          'version' => '4.4.44.0',
          'reference' => '1e866e9e5c1b22168e0ce5f0b467f19bba61266a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v1.1.13',
          'version' => '1.1.13.0',
          'reference' => '1d5cd762abaa6b2a4169d3e77610193a7157129e',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1',
          ),
        ),
        'symfony/filesystem' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => '952a8cb588c3bc6ce76f6023000fb932f16a6e59',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/filesystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => '11d736e97f116ac375a81f96e662911a34cd50ce',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-client-contracts' => 
        array (
          'pretty_version' => 'v2.5.2',
          'version' => '2.5.2.0',
          'reference' => 'ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/http-client-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v4.4.49',
          'version' => '4.4.49.0',
          'reference' => '191413c7b832c015bb38eae963f2e57498c3c173',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v4.4.51',
          'version' => '4.4.51.0',
          'reference' => 'ad8ab192cb619ff7285c95d28c69b36d718416c7',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v5.4.13',
          'version' => '5.4.13.0',
          'reference' => 'bb2ccf759e2b967dcd11bdee5bdf30dddd2290bd',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-iconv' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '927013f3aac555983a5059aada98e1907d842695',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-iconv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => '875e90aeea2777b6f135677f618529449334a612',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => '70f4aebd92afca2f865444d30a4d2151c13c3179',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-php72',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php73' => 
        array (
          'pretty_version' => 'v1.28.0',
          'version' => '1.28.0.0',
          'reference' => 'fe2f306d1d9d346a7fee353d0d5012e401e984b5',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-php73',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v4.4.44',
          'version' => '4.4.44.0',
          'reference' => '5cee9cdc4f7805e2699d9fd66991a0e6df8252a2',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/psr-http-message-bridge' => 
        array (
          'pretty_version' => 'v2.1.4',
          'version' => '2.1.4.0',
          'reference' => 'a125b93ef378c492e274f217874906fb9babdebb',
          'type' => 'symfony-bridge',
          'install_path' => '/var/www/html/vendor/composer/../symfony/psr-http-message-bridge',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v4.4.44',
          'version' => '4.4.44.0',
          'reference' => 'f7751fd8b60a07f3f349947a309b5bdfce22d6ae',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/serializer' => 
        array (
          'pretty_version' => 'v4.4.47',
          'version' => '4.4.47.0',
          'reference' => '6e01d63c55657930a6de03d6e36aae50af98888d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/serializer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v2.5.2',
          'version' => '2.5.2.0',
          'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0',
          ),
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v6.4.0',
          'version' => '6.4.0.0',
          'reference' => 'b45fcf399ea9c3af543a92edf7172ba21174d809',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v4.4.47',
          'version' => '4.4.47.0',
          'reference' => '45036b1d53accc48fe9bab71ccd86d57eba0dd94',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v2.5.2',
          'version' => '2.5.2.0',
          'reference' => '136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0',
          ),
        ),
        'symfony/validator' => 
        array (
          'pretty_version' => 'v4.4.48',
          'version' => '4.4.48.0',
          'reference' => '54781a4c41efbd283b779110bf8ae7f263737775',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v5.4.29',
          'version' => '5.4.29.0',
          'reference' => '6172e4ae3534d25ee9e07eb487c20be7760fcc65',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v4.4.45',
          'version' => '4.4.45.0',
          'reference' => 'aeccc4dc52a9e634f1d1eebeb21eacfdcff1053d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'twig/twig' => 
        array (
          'pretty_version' => 'v2.15.6',
          'version' => '2.15.6.0',
          'reference' => 'ad637405a828601a56f32ccab9a85541c4b66c9d',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../twig/twig',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'typo3/phar-stream-wrapper' => 
        array (
          'pretty_version' => 'v3.1.7',
          'version' => '3.1.7.0',
          'reference' => '5cc2f04a4e2f5c7e9cc02a3bdf80fae0f3e11a8c',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../typo3/phar-stream-wrapper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webflo/drupal-finder' => 
        array (
          'pretty_version' => '1.2.2',
          'version' => '1.2.2.0',
          'reference' => 'c8e5dbe65caef285fec8057a4c718a0d4138d1ee',
          'type' => 'library',
          'install_path' => '/var/www/html/vendor/composer/../webflo/drupal-finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php' => 'c89a949241f7ae83deff75db26bca223c95b8911',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => 'eaf9127f074e9c7ebc65043ec4050f9fed60c2bb',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'apcu',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'hash',
    23 => 'iconv',
    24 => 'igbinary',
    25 => 'imagick',
    26 => 'intl',
    27 => 'json',
    28 => 'ldap',
    29 => 'libxml',
    30 => 'mbstring',
    31 => 'memcached',
    32 => 'msgpack',
    33 => 'mysqli',
    34 => 'mysqlnd',
    35 => 'openssl',
    36 => 'pcntl',
    37 => 'pcre',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'readline',
    44 => 'redis',
    45 => 'session',
    46 => 'shmop',
    47 => 'soap',
    48 => 'sockets',
    49 => 'sodium',
    50 => 'sqlite3',
    51 => 'standard',
    52 => 'sysvmsg',
    53 => 'sysvsem',
    54 => 'sysvshm',
    55 => 'tokenizer',
    56 => 'uploadprogress',
    57 => 'xml',
    58 => 'xmlreader',
    59 => 'xmlrpc',
    60 => 'xmlwriter',
    61 => 'xsl',
    62 => 'zip',
    63 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '0',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'collectedDataCallback' => static function (): array { return array (
); },
	'dependencies' => array (
  '/var/www/html/themes/custom/telliodora/telliodora.theme' => 
  array (
    'fileHash' => '2af0e464625da7009bd4895b75898e7781f2a72d',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
); },
];
