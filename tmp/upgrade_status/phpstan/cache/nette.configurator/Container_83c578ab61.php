<?php
// source: phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: /var/www/html/tmp/upgrade_status/deprecation_testing.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_83c578ab61 extends _PHPStan_39fe102d2\Nette\DI\Container
{
	protected $tags = [
		'phpstan.parser.richParserNodeVisitor' => [
			'04' => true,
			'05' => true,
			'06' => true,
			'07' => true,
			'010' => true,
			'011' => true,
			'012' => true,
			'013' => true,
			'014' => true,
			'015' => true,
			'016' => true,
			'073' => true,
			'074' => true,
		],
		'phpstan.stubFilesExtension' => ['036' => true, '038' => true, '039' => true, '0320' => true],
		'phpstan.broker.methodsClassReflectionExtension' => ['091' => true, '095' => true, '0319' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => [
			'092' => true,
			'097' => true,
			'0228' => true,
			'0318' => true,
		],
		'phpstan.broker.allowedSubTypesClassReflectionExtension' => ['096' => true],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'098' => true,
			'099' => true,
			'0186' => true,
			'0196' => true,
			'0202' => true,
			'0203' => true,
			'0206' => true,
			'0230' => true,
			'0255' => true,
			'0281' => true,
			'0282' => true,
			'0289' => true,
			'0290' => true,
			'0291' => true,
			'0292' => true,
			'0293' => true,
			'0294' => true,
			'0307' => true,
			'0308' => true,
			'0309' => true,
			'0310' => true,
			'0311' => true,
			'0312' => true,
			'0313' => true,
			'0314' => true,
		],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0151' => true,
			'0152' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0156' => true,
			'0157' => true,
			'0158' => true,
			'0159' => true,
			'0160' => true,
			'0161' => true,
			'0163' => true,
			'0164' => true,
			'0165' => true,
			'0166' => true,
			'0167' => true,
			'0168' => true,
			'0169' => true,
			'0170' => true,
			'0171' => true,
			'0172' => true,
			'0173' => true,
			'0174' => true,
			'0175' => true,
			'0176' => true,
			'0177' => true,
			'0179' => true,
			'0180' => true,
			'0183' => true,
			'0184' => true,
			'0188' => true,
			'0189' => true,
			'0191' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0197' => true,
			'0200' => true,
			'0201' => true,
			'0208' => true,
			'0209' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0214' => true,
			'0215' => true,
			'0216' => true,
			'0217' => true,
			'0218' => true,
			'0219' => true,
			'0221' => true,
			'0230' => true,
			'0233' => true,
			'0234' => true,
			'0235' => true,
			'0236' => true,
			'0237' => true,
			'0239' => true,
			'0240' => true,
			'0241' => true,
			'0242' => true,
			'0243' => true,
			'0244' => true,
			'0245' => true,
			'0246' => true,
			'0247' => true,
			'0248' => true,
			'0249' => true,
			'0250' => true,
			'0251' => true,
			'0252' => true,
			'0253' => true,
			'0254' => true,
			'0256' => true,
			'0257' => true,
			'0258' => true,
			'0259' => true,
			'0260' => true,
			'0261' => true,
			'0262' => true,
			'0263' => true,
			'0266' => true,
			'0275' => true,
			'0279' => true,
			'0280' => true,
			'0283' => true,
			'0284' => true,
			'0285' => true,
			'0286' => true,
			'0287' => true,
			'0288' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0162' => true,
			'0178' => true,
			'0192' => true,
			'0227' => true,
			'0231' => true,
			'0232' => true,
			'0264' => true,
			'0265' => true,
			'0267' => true,
			'0268' => true,
			'0269' => true,
			'0270' => true,
			'0271' => true,
			'0272' => true,
			'0273' => true,
			'0274' => true,
			'0276' => true,
			'0278' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0181' => true, '0220' => true, '0222' => true],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0182' => true,
			'0185' => true,
			'0187' => true,
			'0199' => true,
			'0289' => true,
			'0295' => true,
			'0315' => true,
			'0316' => true,
			'0317' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0198' => true,
			'0204' => true,
			'0205' => true,
			'0223' => true,
			'0224' => true,
			'0225' => true,
			'0226' => true,
			'0229' => true,
		],
		'phpstan.dynamicMethodThrowTypeExtension' => ['0207' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0238' => true, '0321' => true],
		'phpstan.deprecations.deprecatedScopeResolver' => ['0322' => true, '0326' => true],
		'phpstan.rules.rule' => [
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.15' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.22' => true,
			'rules.23' => true,
			'rules.24' => true,
			'rules.25' => true,
			'rules.26' => true,
			'rules.27' => true,
			'rules.28' => true,
			'rules.29' => true,
			'rules.3' => true,
			'rules.30' => true,
			'rules.31' => true,
			'rules.32' => true,
			'rules.33' => true,
			'rules.34' => true,
			'rules.35' => true,
			'rules.36' => true,
			'rules.37' => true,
			'rules.4' => true,
			'rules.5' => true,
			'rules.6' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => '_PHPStan_39fe102d2\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_39fe102d2\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			['0115', '0116', '0118', '0119', '0132'],
			[
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
				'rules.23',
				'rules.24',
				'rules.25',
				'rules.26',
				'rules.27',
				'rules.28',
				'rules.29',
				'rules.30',
				'rules.31',
				'rules.32',
				'rules.33',
				'rules.34',
				'rules.35',
				'rules.36',
				'rules.37',
			],
		],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['rules.0']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['rules.1']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule' => [['rules.2']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule' => [['rules.3']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule' => [['rules.4']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule' => [['rules.5']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule' => [['rules.6']],
		'PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule' => [['rules.7']],
		'PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule' => [['rules.8']],
		'PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule' => [['rules.9']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule' => [['rules.10']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule' => [['rules.11']],
		'PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule' => [['rules.12']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule' => [['rules.13']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule' => [['rules.14']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule' => [['rules.15']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule' => [['rules.16']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule' => [['rules.17']],
		'mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule' => [['rules.18']],
		'mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule' => [['rules.19']],
		'mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\AbstractPluginManagerRule' => [1 => ['rules.20']],
		'mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule' => [['rules.20']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\AccessDeprecatedConstant' => [['rules.21']],
		'mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule' => [['rules.22']],
		'mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule' => [['rules.23']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\ConditionManagerCreateInstanceContextConfigurationRule' => [['rules.24']],
		'mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule' => [['rules.25']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule' => [['rules.26']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule' => [['rules.27']],
		'mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule' => [['rules.28']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\DeprecatedAnnotationsRuleBase' => [1 => ['rules.29', 'rules.30']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule' => [['rules.29']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule' => [['rules.30']],
		'mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludeBase' => [1 => ['rules.31', 'rules.32']],
		'mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude' => [['rules.31']],
		'mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes' => [['rules.32']],
		'mglaman\PHPStanDrupal\Rules\Drupal\EntityQuery\EntityQueryHasAccessCheckRule' => [['rules.33']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\SymfonyCmfRouteObjectInterfaceConstantsRule' => [['rules.34']],
		'mglaman\PHPStanDrupal\Rules\Deprecations\SymfonyCmfRoutingInClassMethodSignatureRule' => [['rules.35']],
		'mglaman\PHPStanDrupal\Rules\Drupal\RequestStackGetMainRequestRule' => [['rules.36']],
		'mglaman\PHPStanDrupal\Rules\Drupal\TestClassesProtectedPropertyModulesRule' => [['rules.37']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeVisitorAbstract' => [
			[
				'03',
				'04',
				'05',
				'06',
				'07',
				'08',
				'09',
				'010',
				'011',
				'012',
				'013',
				'014',
				'015',
				'016',
				'060',
				'073',
				'074',
				'083',
			],
		],
		'PhpParser\NodeVisitor' => [
			[
				'03',
				'04',
				'05',
				'06',
				'07',
				'08',
				'09',
				'010',
				'011',
				'012',
				'013',
				'014',
				'015',
				'016',
				'060',
				'073',
				'074',
				'083',
			],
		],
		'PhpParser\NodeVisitor\NameResolver' => [['03']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['04']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['05']],
		'PHPStan\Parser\ArrayWalkArgVisitor' => [['06']],
		'PHPStan\Parser\ClosureArgVisitor' => [['07']],
		'PHPStan\Parser\CurlSetOptArgVisitor' => [['08']],
		'PHPStan\Parser\TypeTraverserInstanceofVisitor' => [['09']],
		'PHPStan\Parser\ArrowFunctionArgVisitor' => [['010']],
		'PHPStan\Parser\MagicConstantParamDefaultVisitor' => [['011']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['012']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['013']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['014']],
		'PHPStan\Parser\LastConditionVisitor' => [['015']],
		'PhpParser\NodeVisitor\NodeConnectingVisitor' => [['016']],
		'PHPStan\Node\Printer\ExprPrinter' => [['017']],
		'PhpParser\PrettyPrinter\Standard' => [['018']],
		'PhpParser\PrettyPrinterAbstract' => [['018']],
		'PHPStan\Node\Printer\Printer' => [['018']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['019']],
		'PHPStan\Php\PhpVersion' => [['020']],
		'PHPStan\Php\PhpVersionFactory' => [['021']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['022']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['023']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['024']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['025']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['026']],
		'PHPStan\PhpDoc\ConstExprParserFactory' => [['027']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['028']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['029']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['030']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['031']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['032']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['033']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['034']],
		'PHPStan\PhpDoc\StubValidator' => [['035']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['036', '038', '039', '0320']],
		'PHPStan\PhpDoc\CountableStubFilesExtension' => [['036']],
		'PHPStan\PhpDoc\StubFilesProvider' => [['037']],
		'PHPStan\PhpDoc\DefaultStubFilesProvider' => [['037']],
		'PHPStan\PhpDoc\JsonValidateStubFilesExtension' => [['038']],
		'PHPStan\PhpDoc\ReflectionEnumStubFilesExtension' => [['039']],
		'PHPStan\Analyser\Analyser' => [['040']],
		'PHPStan\Analyser\FileAnalyser' => [['041']],
		'PHPStan\Analyser\RuleErrorTransformer' => [['042']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['043']],
		'PHPStan\Analyser\InternalScopeFactory' => [['044']],
		'PHPStan\Analyser\LazyInternalScopeFactory' => [['044']],
		'PHPStan\Analyser\ScopeFactory' => [['045']],
		'PHPStan\Analyser\NodeScopeResolver' => [['046']],
		'PHPStan\Analyser\ConstantResolver' => [['047']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['048']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['049']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['050']],
		'PHPStan\Cache\Cache' => [['051']],
		'PHPStan\Collectors\Registry' => [['052']],
		'PHPStan\Collectors\RegistryFactory' => [['053']],
		'PHPStan\Command\AnalyseApplication' => [['054']],
		'PHPStan\Command\AnalyserRunner' => [['055']],
		'PHPStan\Command\FixerApplication' => [['056']],
		'PHPStan\Dependency\DependencyResolver' => [['057']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['058']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['059']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['060']],
		'PHPStan\DependencyInjection\Container' => [['061'], ['062']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['062']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['063']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['064']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['065']],
		'PHPStan\DependencyInjection\Type\ExpressionTypeResolverExtensionRegistryProvider' => [['066']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['067']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['068']],
		'PHPStan\File\FileHelper' => [['069']],
		'PHPStan\File\FileExcluderFactory' => [['070']],
		'PHPStan\File\FileExcluderRawFactory' => [['071']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\File\FileMonitor' => [['072']],
		'PHPStan\NodeVisitor\StatementOrderVisitor' => [['073']],
		'PHPStan\Parser\DeclarePositionVisitor' => [['074']],
		'PHPStan\Parallel\ParallelAnalyser' => [['075']],
		'PHPStan\Parallel\Scheduler' => [['076']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['077']],
		'PHPStan\Process\CpuCoreCounter' => [['078']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['079']],
		'PHPStan\Reflection\InitializerExprTypeResolver' => [['080']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['081', '091', '093', '095', '0319']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['081']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['082', '092', '093', '097', '0228', '0318']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['082']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['083']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['084']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['085']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['086']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['087']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['088']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['089']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['090']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['091']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['092']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['093']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['094']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['095']],
		'PHPStan\Reflection\AllowedSubTypesClassReflectionExtension' => [['096']],
		'PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension' => [['096']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['097']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'098',
				'099',
				'0186',
				'0196',
				'0202',
				'0203',
				'0206',
				'0230',
				'0255',
				'0281',
				'0282',
				'0289',
				'0290',
				'0291',
				'0292',
				'0293',
				'0294',
				'0307',
				'0308',
				'0309',
				'0310',
				'0311',
				'0312',
				'0313',
				'0314',
			],
		],
		'PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension' => [['098', '099']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['0100']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['0101']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['0102']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['0106'], ['0103', '0104']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['0103']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['0104']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['0105']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['0107']],
		'PHPStan\Rules\AttributesCheck' => [['0108']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['0109']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['0110']],
		'PHPStan\Rules\Classes\LocalTypeAliasesCheck' => [['0111']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['0112']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['0113']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['0114'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['0114']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['0115']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['0116']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['0117']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['0118']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['0119']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['0120']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['0121']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0122']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0123']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0124']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0125']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0126']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0127']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0128']],
		'PHPStan\Rules\IssetCheck' => [['0129']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0130']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0131']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0132']],
		'PHPStan\Rules\Methods\MethodParameterComparisonHelper' => [['0133']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0134']],
		'PHPStan\Rules\NullsafeCheck' => [['0135']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0136']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0136']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0137']],
		'PHPStan\Rules\PhpDoc\AssertRuleHelper' => [['0138']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0139']],
		'PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper' => [['0140']],
		'PHPStan\Rules\Playground\NeverRuleHelper' => [['0141']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0142']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0142']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0143']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0144']],
		'PHPStan\Rules\RuleLevelHelper' => [['0145']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0146']],
		'PHPStan\Type\FileTypeMapper' => [['0147']],
		'PHPStan\Type\TypeAliasResolver' => [['0148']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['0149']],
		'PHPStan\Type\BitwiseFlagHelper' => [['0150']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
				'0159',
				'0160',
				'0161',
				'0163',
				'0164',
				'0165',
				'0166',
				'0167',
				'0168',
				'0169',
				'0170',
				'0171',
				'0172',
				'0173',
				'0174',
				'0175',
				'0176',
				'0177',
				'0179',
				'0180',
				'0183',
				'0184',
				'0188',
				'0189',
				'0191',
				'0193',
				'0194',
				'0195',
				'0197',
				'0200',
				'0201',
				'0208',
				'0209',
				'0211',
				'0212',
				'0213',
				'0214',
				'0215',
				'0216',
				'0217',
				'0218',
				'0219',
				'0221',
				'0230',
				'0233',
				'0234',
				'0235',
				'0236',
				'0237',
				'0239',
				'0240',
				'0241',
				'0242',
				'0243',
				'0244',
				'0245',
				'0246',
				'0247',
				'0248',
				'0249',
				'0250',
				'0251',
				'0252',
				'0253',
				'0254',
				'0256',
				'0257',
				'0258',
				'0259',
				'0260',
				'0261',
				'0262',
				'0263',
				'0266',
				'0275',
				'0279',
				'0280',
				'0283',
				'0284',
				'0285',
				'0286',
				'0287',
				'0288',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0151']],
		'PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension' => [['0152']],
		'PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension' => [['0153']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['0154']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0155']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0156']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0158']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0161']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0162',
				'0178',
				'0192',
				'0227',
				'0231',
				'0232',
				'0264',
				'0265',
				'0267',
				'0268',
				'0269',
				'0270',
				'0271',
				'0272',
				'0273',
				'0274',
				'0276',
				'0278',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0162',
				'0178',
				'0192',
				'0227',
				'0231',
				'0232',
				'0238',
				'0264',
				'0265',
				'0267',
				'0268',
				'0269',
				'0270',
				'0271',
				'0272',
				'0273',
				'0274',
				'0276',
				'0278',
				'0280',
				'0321',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0162']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0163']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0164']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0165']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0166']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0167']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0168']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0169']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0170']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0171']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0172']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0173']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0174']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0175']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0176']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0178']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0179']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0180']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0181', '0220', '0222']],
		'PHPStan\Type\Php\AssertThrowTypeExtension' => [['0181']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [
			['0182', '0185', '0187', '0199', '0289', '0295', '0315', '0316', '0317'],
		],
		'PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension' => [['0182']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0183']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0184']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0185']],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0186']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0187']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0188']],
		'PHPStan\Type\Php\ConstantFunctionReturnTypeExtension' => [['0189']],
		'PHPStan\Type\Php\ConstantHelper' => [['0190']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0191']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0192']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0196']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0197']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [
			['0198', '0204', '0205', '0223', '0224', '0225', '0226', '0229'],
		],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0198']],
		'PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension' => [['0199']],
		'PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension' => [['0200']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0201']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0202', '0203']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0204']],
		'PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension' => [['0205']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0206']],
		'PHPStan\Type\DynamicMethodThrowTypeExtension' => [['0207']],
		'PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension' => [['0207']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0208']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0209']],
		'PHPStan\Type\Php\FilterFunctionReturnTypeHelper' => [['0210']],
		'PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension' => [['0211']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0212']],
		'PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension' => [['0213']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0214']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0215']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0216']],
		'PHPStan\Type\Php\GettypeFunctionReturnTypeExtension' => [['0217']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0218']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0219']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0220']],
		'PHPStan\Type\Php\IniGetReturnTypeExtension' => [['0221']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0222']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0223']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0224']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0225']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0226']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['0227']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0228']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0229']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0230']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0231']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0232']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0233']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0234']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0235']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['0236']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0237']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0238', '0321']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0238']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0239']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0240']],
		'PHPStan\Type\Php\LtrimFunctionReturnTypeExtension' => [['0241']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0242']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0243']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0244']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0245']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0246']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0247']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0248']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0249']],
		'PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension' => [['0250']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0251']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0252']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0253']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0254']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0255']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0256']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0257']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0258']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0259']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0260']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0261']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0262']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0263']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0264']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0265']],
		'PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension' => [['0266']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0267']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0268']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0269']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0270']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0271']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0272']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0273']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0274']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0275']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0276']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0277']],
		'PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension' => [['0278']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0279']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0280']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0281']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0282']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0283']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0284']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0285']],
		'PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension' => [['0286']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0287']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0288']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0289']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0290', '0291', '0292', '0293', '0294']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0295']],
		'PHPStan\Type\ClosureTypeFactory' => [['0296']],
		'PHPStan\Type\Constant\OversizedArrayBuilder' => [['0297']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [['reflectionProvider'], ['broker'], [2 => 'betterReflectionProvider']],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'currentPhpVersionRichParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionSimpleDirectParser',
				'defaultAnalysisParser',
				'php8Parser',
				'pathRoutingParser',
			],
		],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\SimpleParser' => [2 => ['currentPhpVersionSimpleDirectParser', 'php8Parser']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser']],
		'PhpParser\Parser' => [2 => ['phpParserDecorator', 'currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PhpParser\Lexer' => [2 => ['currentPhpVersionLexer', 'php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PhpParser\Parser\Php7' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\Rules\LazyRegistry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [2 => ['betterReflectionSourceLocator']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['originalBetterReflectionReflector'],
			2 => [
				1 => 'betterReflectionReflector',
				'betterReflectionClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
				'nodeScopeResolverReflector',
			],
		],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [['originalBetterReflectionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			2 => ['betterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\BetterReflection\Reflector\ClassReflector' => [2 => ['betterReflectionClassReflector']],
		'PHPStan\BetterReflection\Reflector\FunctionReflector' => [2 => ['betterReflectionFunctionReflector']],
		'PHPStan\BetterReflection\Reflector\ConstantReflector' => [2 => ['betterReflectionConstantReflector']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0298']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0299']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['0300']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0301', '0302']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0301']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0302']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
			['0303'],
		],
		'PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter' => [['0303']],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'mglaman\PHPStanDrupal\Drupal\ServiceMap' => [['0304']],
		'mglaman\PHPStanDrupal\Drupal\ExtensionMap' => [['0305']],
		'mglaman\PHPStanDrupal\Drupal\EntityDataRepository' => [['0306']],
		'mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension' => [['0307']],
		'mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension' => [['0308']],
		'mglaman\PHPStanDrupal\Type\EntityStorage\GetQueryReturnTypeExtension' => [['0309']],
		'mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension' => [['0310']],
		'mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension' => [['0311']],
		'mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension' => [['0312']],
		'mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryAccessCheckDynamicReturnTypeExtension' => [['0313']],
		'mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension' => [['0314']],
		'mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension' => [['0315']],
		'mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension' => [['0316']],
		'mglaman\PHPStanDrupal\Type\DrupalStaticEntityQueryDynamicReturnTypeExtension' => [['0317']],
		'mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension' => [['0318']],
		'mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension' => [['0319']],
		'mglaman\PHPStanDrupal\Drupal\DrupalStubFilesExtension' => [['0320']],
		'mglaman\PHPStanDrupal\Type\EntityQuery\AccessCheckTypeSpecifyingExtension' => [['0321']],
		'PHPStan\Rules\Deprecations\DeprecatedScopeResolver' => [['0322', '0326']],
		'mglaman\PHPStanDrupal\DeprecatedScope\GroupLegacyScope' => [['0322']],
		'PHPStan\Rules\Deprecations\DeprecatedClassHelper' => [['0323']],
		'PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider' => [['0324']],
		'PHPStan\Rules\Deprecations\DeprecatedScopeHelper' => [['0325']],
		'PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver' => [['0326']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('020'));
	}


	public function createService03(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(options: ['preserveOriginalNames' => true]);
	}


	public function createService04(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService05(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService06(): PHPStan\Parser\ArrayWalkArgVisitor
	{
		return new PHPStan\Parser\ArrayWalkArgVisitor;
	}


	public function createService07(): PHPStan\Parser\ClosureArgVisitor
	{
		return new PHPStan\Parser\ClosureArgVisitor;
	}


	public function createService08(): PHPStan\Parser\CurlSetOptArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArgVisitor;
	}


	public function createService09(): PHPStan\Parser\TypeTraverserInstanceofVisitor
	{
		return new PHPStan\Parser\TypeTraverserInstanceofVisitor;
	}


	public function createService010(): PHPStan\Parser\ArrowFunctionArgVisitor
	{
		return new PHPStan\Parser\ArrowFunctionArgVisitor;
	}


	public function createService011(): PHPStan\Parser\MagicConstantParamDefaultVisitor
	{
		return new PHPStan\Parser\MagicConstantParamDefaultVisitor;
	}


	public function createService012(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService013(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService014(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService015(): PHPStan\Parser\LastConditionVisitor
	{
		return new PHPStan\Parser\LastConditionVisitor;
	}


	public function createService016(): PhpParser\NodeVisitor\NodeConnectingVisitor
	{
		return new PhpParser\NodeVisitor\NodeConnectingVisitor;
	}


	public function createService017(): PHPStan\Node\Printer\ExprPrinter
	{
		return new PHPStan\Node\Printer\ExprPrinter($this->getService('018'));
	}


	public function createService018(): PHPStan\Node\Printer\Printer
	{
		return new PHPStan\Node\Printer\Printer;
	}


	public function createService019(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('069'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService020(): PHPStan\Php\PhpVersion
	{
		return $this->getService('021')->create();
	}


	public function createService021(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('022')->create();
	}


	public function createService022(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(null, ['/var/www/html/vendor/phpstan/phpstan/..', '/var/www/html']);
	}


	public function createService023(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService024(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('025'), false);
	}


	public function createService025(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return $this->getService('027')->create();
	}


	public function createService026(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('024'), $this->getService('025'), false, true);
	}


	public function createService027(): PHPStan\PhpDoc\ConstExprParserFactory
	{
		return new PHPStan\PhpDoc\ConstExprParserFactory(false);
	}


	public function createService028(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0147'), $this->getService('stubPhpDocProvider'));
	}


	public function createService029(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('032'), $this->getService('031'), $this->getService('0139'));
	}


	public function createService030(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('023'), $this->getService('026'));
	}


	public function createService031(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService032(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('033'),
			$this->getService('0100'),
			$this->getService('0149'),
			$this->getService('047'),
			$this->getService('080')
		);
	}


	public function createService033(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('061'));
	}


	public function createService034(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('023'), $this->getService('024'), $this->getService('032'));
	}


	public function createService035(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('063'), false);
	}


	public function createService036(): PHPStan\PhpDoc\CountableStubFilesExtension
	{
		return new PHPStan\PhpDoc\CountableStubFilesExtension(false);
	}


	public function createService037(): PHPStan\PhpDoc\DefaultStubFilesProvider
	{
		return new PHPStan\PhpDoc\DefaultStubFilesProvider(
			$this->getService('061'),
			[
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
			],
			'/var/www/html'
		);
	}


	public function createService038(): PHPStan\PhpDoc\JsonValidateStubFilesExtension
	{
		return new PHPStan\PhpDoc\JsonValidateStubFilesExtension($this->getService('020'));
	}


	public function createService039(): PHPStan\PhpDoc\ReflectionEnumStubFilesExtension
	{
		return new PHPStan\PhpDoc\ReflectionEnumStubFilesExtension($this->getService('020'));
	}


	public function createService040(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('041'),
			$this->getService('registry'),
			$this->getService('052'),
			$this->getService('046'),
			50
		);
	}


	public function createService041(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('045'),
			$this->getService('046'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('057'),
			$this->getService('042'),
			false
		);
	}


	public function createService042(): PHPStan\Analyser\RuleErrorTransformer
	{
		return new PHPStan\Analyser\RuleErrorTransformer;
	}


	public function createService043(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper(
			$this->getService('069'),
			[
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			false
		);
	}


	public function createService044(): PHPStan\Analyser\LazyInternalScopeFactory
	{
		return new PHPStan\Analyser\LazyInternalScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('061'));
	}


	public function createService045(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory($this->getService('044'));
	}


	public function createService046(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('080'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('064'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0147'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('020'),
			$this->getService('0106'),
			$this->getService('028'),
			$this->getService('069'),
			$this->getService('typeSpecifier'),
			$this->getService('068'),
			$this->getService('0142'),
			$this->getService('045'),
			true,
			true,
			[],
			[],
			['stdClass'],
			true,
			true,
			false
		);
	}


	public function createService047(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('048')->create();
	}


	public function createService048(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('0100'), $this->getService('061'));
	}


	public function createService049(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_83c578ab61 $container)
			{
				$this->container = $container;
			}


			public function create(): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('058'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					$this->container->getService('037'),
					'/var/www/html/tmp/upgrade_status/phpstan/resultCache.php',
					$this->container->getParameter('analysedPaths'),
					['/var/www/html/vendor/phpstan/phpstan/..', '/var/www/html'],
					'0',
					null,
					[
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
						'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
						'/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
					],
					['/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub'],
					[],
					false
				);
			}
		};
	}


	public function createService050(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer('/var/www/html/tmp/upgrade_status/phpstan/resultCache.php');
	}


	public function createService051(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService052(): PHPStan\Collectors\Registry
	{
		return $this->getService('053')->create();
	}


	public function createService053(): PHPStan\Collectors\RegistryFactory
	{
		return new PHPStan\Collectors\RegistryFactory($this->getService('061'));
	}


	public function createService054(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('055'),
			$this->getService('035'),
			$this->getService('049'),
			$this->getService('043'),
			50,
			$this->getService('037'),
			$this->getService('registry'),
			$this->getService('045'),
			$this->getService('042')
		);
	}


	public function createService055(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('076'),
			$this->getService('040'),
			$this->getService('075'),
			$this->getService('078')
		);
	}


	public function createService056(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('072'),
			$this->getService('049'),
			$this->getService('043'),
			$this->getParameter('analysedPaths'),
			'/var/www/html',
			($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
			['1.1.1.2']
		);
	}


	public function createService057(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('069'),
			$this->getService('reflectionProvider'),
			$this->getService('059'),
			$this->getService('0147')
		);
	}


	public function createService058(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('060'));
	}


	public function createService059(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('0147'), $this->getService('017'));
	}


	public function createService060(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('059'));
	}


	public function createService061(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('062'));
	}


	public function createService062(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService063(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/var/www/html',
			'/var/www/html/tmp/upgrade_status/phpstan',
			['/var/www/html/tmp/upgrade_status/deprecation_testing.neon'],
			$this->getParameter('analysedPaths'),
			['/var/www/html/vendor/phpstan/phpstan/..', '/var/www/html'],
			$this->getParameter('analysedPathsFromConfig'),
			'0',
			null,
			null
		);
	}


	public function createService064(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('061'));
	}


	public function createService065(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('061'));
	}


	public function createService066(): PHPStan\DependencyInjection\Type\ExpressionTypeResolverExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyExpressionTypeResolverExtensionRegistryProvider($this->getService('061'));
	}


	public function createService067(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('061'));
	}


	public function createService068(): PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('061'));
	}


	public function createService069(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/var/www/html');
	}


	public function createService070(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory(
			$this->getService('071'),
			[],
			[
				'analyseAndScan' => [
					'*.api.php',
					'*/tests/fixtures/*.php',
					'*/tests/Drupal/Tests/Listeners/Legacy/*',
					'*/tests/fixtures/*.php',
					'*/settings*.php',
					'*/bower_components/*',
					'*/node_modules/*',
				],
				'analyse' => [],
			]
		);
	}


	public function createService071(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_83c578ab61 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder($this->container->getService('069'), $analyseExcludes);
			}
		};
	}


	public function createService072(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor($this->getService('fileFinderAnalyse'));
	}


	public function createService073(): PHPStan\NodeVisitor\StatementOrderVisitor
	{
		return new PHPStan\NodeVisitor\StatementOrderVisitor;
	}


	public function createService074(): PHPStan\Parser\DeclarePositionVisitor
	{
		return new PHPStan\Parser\DeclarePositionVisitor;
	}


	public function createService075(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService076(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 0, 2);
	}


	public function createService077(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService078(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService079(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_83c578ab61 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $filename,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?string $phpDocComment,
				array $phpDocParameterOutTypes
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$this->container->getService('080'),
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('077'),
					$this->container->getService('051'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename,
					$isPure,
					$asserts,
					$phpDocComment,
					$phpDocParameterOutTypes
				);
			}
		};
	}


	public function createService080(): PHPStan\Reflection\InitializerExprTypeResolver
	{
		return new PHPStan\Reflection\InitializerExprTypeResolver(
			$this->getService('047'),
			$this->getService('0100'),
			$this->getService('020'),
			$this->getService('067'),
			$this->getService('0297'),
			false
		);
	}


	public function createService081(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService082(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService083(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService084(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('083'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService085(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('087'),
			$this->getService('088'),
			$this->getService('086'),
			$this->getService('020')
		);
	}


	public function createService086(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('084'),
			$this->getService('fileFinderScan'),
			$this->getService('020'),
			$this->getService('051')
		);
	}


	public function createService087(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('086'));
	}


	public function createService088(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_83c578ab61 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('090'));
			}
		};
	}


	public function createService089(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_83c578ab61 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('084'),
					$fileName
				);
			}
		};
	}


	public function createService090(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('089'));
	}


	public function createService091(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService092(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService093(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('045'),
			$this->getService('046'),
			$this->getService('094'),
			$this->getService('028'),
			$this->getService('081'),
			$this->getService('082'),
			$this->getService('0106'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0100'),
			$this->getService('0147'),
			false
		);
	}


	public function createService094(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_83c578ab61 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?PHPStan\Type\Type $selfOutType,
				?string $phpDocComment,
				array $phpDocParameterOutTypes
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$this->container->getService('080'),
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('077'),
					$this->container->getService('051'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure,
					$asserts,
					$selfOutType,
					$phpDocComment,
					$phpDocParameterOutTypes
				);
			}
		};
	}


	public function createService095(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService096(): PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension;
	}


	public function createService097(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			['stdClass'],
			$this->getService('082')
		);
	}


	public function createService098(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('020'),
			'PHPStan\Reflection\ClassReflection',
			'getNativeReflection'
		);
	}


	public function createService099(): PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension
	{
		return new PHPStan\Reflection\PHPStan\NativeReflectionEnumReturnDynamicReturnTypeExtension(
			$this->getService('020'),
			'PHPStan\Reflection\Php\BuiltinMethodReflection',
			'getDeclaringClass'
		);
	}


	public function createService0100(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('061'));
	}


	public function createService0101(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('0106'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0147'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createService0102(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('034'));
	}


	public function createService0103(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider(
			$this->getService('0102'),
			$this->getService('080'),
			$this->getService('020'),
			false
		);
	}


	public function createService0104(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('0103'),
			$this->getService('084'),
			$this->getService('0147'),
			$this->getService('020'),
			$this->getService('080')
		);
	}


	public function createService0105(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('020'),
			$this->getService('0103'),
			$this->getService('0104')
		);
	}


	public function createService0106(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('0105')->create();
	}


	public function createService0107(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService0108(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0121'),
			$this->getService('0110'),
			true
		);
	}


	public function createService0109(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0145'), false, false);
	}


	public function createService0110(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0111(): PHPStan\Rules\Classes\LocalTypeAliasesCheck
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesCheck([], $this->getService('reflectionProvider'), $this->getService('032'));
	}


	public function createService0112(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('0113'), true, false);
	}


	public function createService0113(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true,
			false
		);
	}


	public function createService0114(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver($this->getService('reflectionProvider'), [], [], [], []);
	}


	public function createService0115(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('0117'));
	}


	public function createService0116(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('0117'));
	}


	public function createService0117(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService0118(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('0120'));
	}


	public function createService0119(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0147'), $this->getService('0120'));
	}


	public function createService0120(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck;
	}


	public function createService0121(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0145'),
			$this->getService('0135'),
			$this->getService('020'),
			$this->getService('0139'),
			$this->getService('0144'),
			false,
			false,
			false,
			false,
			false
		);
	}


	public function createService0122(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0110'),
			$this->getService('0139'),
			$this->getService('020'),
			false,
			true
		);
	}


	public function createService0123(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0145'));
	}


	public function createService0124(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0125(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0126'),
			$this->getService('0128'),
			false,
			[
				'DatePeriod',
				'CallbackFilterIterator',
				'FilterIterator',
				'RecursiveCallbackFilterIterator',
				'AppendIterator',
				'NoRewindIterator',
				'LimitIterator',
				'InfiniteIterator',
				'CachingIterator',
				'RegexIterator',
				'ReflectionEnum',
			]
		);
	}


	public function createService0126(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0127(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0110'),
			$this->getService('0126'),
			$this->getService('0148'),
			false
		);
	}


	public function createService0128(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck(false, false);
	}


	public function createService0129(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0143'), $this->getService('0144'), false, true, false);
	}


	public function createService0130(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0145'),
			false,
			false
		);
	}


	public function createService0131(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0145'),
			$this->getService('0110'),
			false,
			false
		);
	}


	public function createService0132(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule($this->getService('093'), false, false, false);
	}


	public function createService0133(): PHPStan\Rules\Methods\MethodParameterComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodParameterComparisonHelper($this->getService('020'), false);
	}


	public function createService0134(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(
			false,
			false,
			false,
			false,
			[
				'DatePeriod',
				'CallbackFilterIterator',
				'FilterIterator',
				'RecursiveCallbackFilterIterator',
				'AppendIterator',
				'NoRewindIterator',
				'LimitIterator',
				'InfiniteIterator',
				'CachingIterator',
				'RegexIterator',
				'ReflectionEnum',
			]
		);
	}


	public function createService0135(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0136(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('061'));
	}


	public function createService0137(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0138(): PHPStan\Rules\PhpDoc\AssertRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\AssertRuleHelper($this->getService('080'));
	}


	public function createService0139(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0140(): PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper(false);
	}


	public function createService0141(): PHPStan\Rules\Playground\NeverRuleHelper
	{
		return new PHPStan\Rules\Playground\NeverRuleHelper;
	}


	public function createService0142(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('061'));
	}


	public function createService0143(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0144(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0145(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper(
			$this->getService('reflectionProvider'),
			false,
			true,
			false,
			false,
			false,
			false,
			false
		);
	}


	public function createService0146(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'));
	}


	public function createService0147(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('0100'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('030'),
			$this->getService('029'),
			$this->getService('019'),
			$this->getService('069')
		);
	}


	public function createService0148(): PHPStan\Type\TypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			[],
			$this->getService('034'),
			$this->getService('032'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0149(): PHPStan\Type\TypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('061'));
	}


	public function createService0150(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService0151(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0152(): PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0153(): PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0154(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0155(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0156(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0157(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0158(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0159(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService0160(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0161(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0162(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0163(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0164(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0165(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension($this->getService('020'));
	}


	public function createService0166(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0167(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0168(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0169(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0170(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0171(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0172(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0173(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension;
	}


	public function createService0174(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0175(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0176(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension;
	}


	public function createService0177(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension($this->getService('020'));
	}


	public function createService0178(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0179(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension($this->getService('020'));
	}


	public function createService0180(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0181(): PHPStan\Type\Php\AssertThrowTypeExtension
	{
		return new PHPStan\Type\Php\AssertThrowTypeExtension;
	}


	public function createService0182(): PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension;
	}


	public function createService0183(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0184(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('020'));
	}


	public function createService0185(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0186(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0187(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0188(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(false);
	}


	public function createService0189(): PHPStan\Type\Php\ConstantFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ConstantFunctionReturnTypeExtension($this->getService('0190'));
	}


	public function createService0190(): PHPStan\Type\Php\ConstantHelper
	{
		return new PHPStan\Type\Php\ConstantHelper;
	}


	public function createService0191(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0192(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0193(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0194(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0195(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension;
	}


	public function createService0196(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension;
	}


	public function createService0197(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension;
	}


	public function createService0198(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension;
	}


	public function createService0199(): PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension;
	}


	public function createService0200(): PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension;
	}


	public function createService0201(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0202(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension('DateTime');
	}


	public function createService0203(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension('DateTimeImmutable');
	}


	public function createService0204(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension;
	}


	public function createService0205(): PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension;
	}


	public function createService0206(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0207(): PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension;
	}


	public function createService0208(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0209(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('020'));
	}


	public function createService0210(): PHPStan\Type\Php\FilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\FilterFunctionReturnTypeHelper($this->getService('reflectionProvider'), $this->getService('020'));
	}


	public function createService0211(): PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension($this->getService('0210'));
	}


	public function createService0212(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('0210'));
	}


	public function createService0213(): PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension(
			$this->getService('0210'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0214(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0215(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0216(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0217(): PHPStan\Type\Php\GettypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettypeFunctionReturnTypeExtension;
	}


	public function createService0218(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0219(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('020'));
	}


	public function createService0220(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0221(): PHPStan\Type\Php\IniGetReturnTypeExtension
	{
		return new PHPStan\Type\Php\IniGetReturnTypeExtension;
	}


	public function createService0222(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('0150'));
	}


	public function createService0223(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension;
	}


	public function createService0224(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0225(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0226(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0227(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService0228(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0229(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0230(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0231(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0232(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0144'));
	}


	public function createService0233(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0234(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0235(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0236(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService0237(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('0150'));
	}


	public function createService0238(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0239(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0240(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0241(): PHPStan\Type\Php\LtrimFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\LtrimFunctionReturnTypeExtension;
	}


	public function createService0242(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('020'));
	}


	public function createService0243(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0244(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('020'));
	}


	public function createService0245(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0246(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0247(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0248(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0249(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0250(): PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension;
	}


	public function createService0251(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0252(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0253(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0254(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension;
	}


	public function createService0255(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0256(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0257(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension($this->getService('020'));
	}


	public function createService0258(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0259(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0260(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0261(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0262(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0263(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0264(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0265(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0266(): PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension;
	}


	public function createService0267(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0268(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension($this->getService('0190'));
	}


	public function createService0269(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0270(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0271(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension(false);
	}


	public function createService0272(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0231'));
	}


	public function createService0273(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0274(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0277'));
	}


	public function createService0275(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0276(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0277'));
	}


	public function createService0277(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0278(): PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension;
	}


	public function createService0279(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0150')
		);
	}


	public function createService0280(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			['stdClass'],
			false
		);
	}


	public function createService0281(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0282(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0283(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('020'));
	}


	public function createService0284(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0285(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0286(): PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension;
	}


	public function createService0287(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0288(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0289(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0290(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0291(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0292(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0293(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0294(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0295(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0296(): PHPStan\Type\ClosureTypeFactory
	{
		return new PHPStan\Type\ClosureTypeFactory(
			$this->getService('080'),
			$this->getService('0302'),
			$this->getService('originalBetterReflectionReflector'),
			$this->getService('currentPhpVersionPhpParser')
		);
	}


	public function createService0297(): PHPStan\Type\Constant\OversizedArrayBuilder
	{
		return new PHPStan\Type\Constant\OversizedArrayBuilder;
	}


	public function createService0298(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0301'),
			$this->getService('0302'),
			$this->getService('090'),
			$this->getService('087'),
			$this->getService('085'),
			$this->getService('088'),
			$this->getService('084'),
			['/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub'],
			[],
			$this->getParameter('analysedPaths'),
			['/var/www/html/vendor/phpstan/phpstan/..', '/var/www/html'],
			$this->getParameter('analysedPathsFromConfig')
		);
	}


	public function createService0299(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_83c578ab61 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\Reflector\Reflector $reflector): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
			{
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('0100'),
					$this->container->getService('080'),
					$this->container->getService('064'),
					$reflector,
					$this->container->getService('0147'),
					$this->container->getService('028'),
					$this->container->getService('020'),
					$this->container->getService('0101'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('079'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('019'),
					$this->container->getService('069'),
					$this->container->getService('0301'),
					$this->container->getService('0106'),
					['stdClass']
				);
			}
		};
	}


	public function createService0300(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('018'),
			$this->getService('020')
		);
	}


	public function createService0301(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('0300')->create();
	}


	public function createService0302(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber($this->getService('018'));
	}


	public function createService0303(): PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter(
			$this->getService('errorFormatter.github'),
			$this->getService('errorFormatter.teamcity')
		);
	}


	public function createService0304(): mglaman\PHPStanDrupal\Drupal\ServiceMap
	{
		return new mglaman\PHPStanDrupal\Drupal\ServiceMap;
	}


	public function createService0305(): mglaman\PHPStanDrupal\Drupal\ExtensionMap
	{
		return new mglaman\PHPStanDrupal\Drupal\ExtensionMap;
	}


	public function createService0306(): mglaman\PHPStanDrupal\Drupal\EntityDataRepository
	{
		return new mglaman\PHPStanDrupal\Drupal\EntityDataRepository([
			'aggregator_feed' => ['class' => 'Drupal\aggregator\Entity\Feed', 'storage' => 'Drupal\aggregator\FeedStorage'],
			'aggregator_item' => ['class' => 'Drupal\aggregator\Entity\Item', 'storage' => 'Drupal\aggregator\ItemStorage'],
			'block' => ['class' => 'Drupal\block\Entity\Block', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'block_content' => [
				'class' => 'Drupal\block_content\Entity\BlockContent',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'block_content_type' => [
				'class' => 'Drupal\block_content\Entity\BlockContentType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'comment_type' => [
				'class' => 'Drupal\comment\Entity\CommentType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'comment' => ['class' => 'Drupal\comment\Entity\Comment', 'storage' => 'Drupal\comment\CommentStorage'],
			'contact_form' => [
				'class' => 'Drupal\contact\Entity\ContactForm',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'contact_message' => [
				'class' => 'Drupal\contact\Entity\Message',
				'storage' => 'Drupal\Core\Entity\ContentEntityNullStorage',
			],
			'content_moderation_state' => [
				'class' => 'Drupal\content_moderation\Entity\ContentModerationState',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'editor' => [
				'class' => 'Drupal\editor\Entity\Editor',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'field_config' => ['class' => 'Drupal\field\Entity\FieldConfig', 'storage' => 'Drupal\field\FieldConfigStorage'],
			'field_storage_config' => [
				'class' => 'Drupal\field\Entity\FieldStorageConfig',
				'storage' => 'Drupal\field\FieldStorageConfigStorage',
			],
			'file' => ['class' => 'Drupal\file\Entity\File', 'storage' => 'Drupal\file\FileStorage'],
			'filter_format' => [
				'class' => 'Drupal\filter\Entity\FilterFormat',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'image_style' => ['class' => 'Drupal\image\Entity\ImageStyle', 'storage' => 'Drupal\image\ImageStyleStorage'],
			'imce_profile' => [
				'class' => 'Drupal\imce\Entity\ImceProfile',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'configurable_language' => [
				'class' => 'Drupal\language\Entity\ConfigurableLanguage',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'language_content_settings' => [
				'class' => 'Drupal\language\Entity\ContentLanguageSettings',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'media_type' => [
				'class' => 'Drupal\media\Entity\MediaType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'media' => ['class' => 'Drupal\media\Entity\Media', 'storage' => 'Drupal\media\MediaStorage'],
			'menu_link_content' => [
				'class' => 'Drupal\menu_link_content\Entity\MenuLinkContent',
				'storage' => '\Drupal\menu_link_content\MenuLinkContentStorage',
			],
			'metatag_defaults' => [
				'class' => 'Drupal\metatag\Entity\MetatagDefaults',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'node_type' => [
				'class' => 'Drupal\node\Entity\NodeType',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'node' => ['class' => 'Drupal\node\Entity\Node', 'storage' => 'Drupal\node\NodeStorage'],
			'path_alias' => [
				'class' => 'Drupal\path_alias\Entity\PathAlias',
				'storage' => 'Drupal\path_alias\PathAliasStorage',
			],
			'rdf_mapping' => [
				'class' => 'Drupal\rdf\Entity\RdfMapping',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'responsive_image_style' => [
				'class' => 'Drupal\responsive_image\Entity\ResponsiveImageStyle',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'search_page' => [
				'class' => 'Drupal\search\Entity\SearchPage',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'search_api_server' => [
				'class' => 'Drupal\search_api\Entity\Server',
				'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
			],
			'search_api_index' => [
				'class' => 'Drupal\search_api\Entity\Index',
				'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
			],
			'search_api_task' => [
				'class' => 'Drupal\search_api\Entity\Task',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'shortcut_set' => [
				'class' => 'Drupal\shortcut\Entity\ShortcutSet',
				'storage' => 'Drupal\shortcut\ShortcutSetStorage',
			],
			'shortcut' => [
				'class' => 'Drupal\shortcut\Entity\Shortcut',
				'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
			],
			'action' => [
				'class' => 'Drupal\system\Entity\Action',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'menu' => ['class' => 'Drupal\system\Entity\Menu', 'storage' => 'Drupal\system\MenuStorage'],
			'taxonomy_term' => ['class' => 'Drupal\taxonomy\Entity\Term', 'storage' => 'Drupal\taxonomy\TermStorage'],
			'taxonomy_vocabulary' => [
				'class' => 'Drupal\taxonomy\Entity\Vocabulary',
				'storage' => 'Drupal\taxonomy\VocabularyStorage',
			],
			'tour' => ['class' => 'Drupal\tour\Entity\Tour', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'user' => ['class' => 'Drupal\user\Entity\User', 'storage' => 'Drupal\user\UserStorage'],
			'user_role' => ['class' => 'Drupal\user\Entity\Role', 'storage' => 'Drupal\user\RoleStorage'],
			'webform' => ['class' => 'Drupal\webform\Entity\Webform', 'storage' => '\Drupal\webform\WebformEntityStorage'],
			'webform_submission' => [
				'class' => 'Drupal\webform\Entity\WebformSubmission',
				'storage' => 'Drupal\webform\WebformSubmissionStorage',
			],
			'webform_options' => [
				'class' => 'Drupal\webform\Entity\WebformOptions',
				'storage' => '\Drupal\webform\WebformOptionsStorage',
			],
			'workflow' => [
				'class' => 'Drupal\workflows\Entity\Workflow',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'pathauto_pattern' => [
				'class' => 'Drupal\pathauto\Entity\PathautoPattern',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'view' => ['class' => 'Drupal\views\Entity\View', 'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage'],
			'date_format' => [
				'class' => 'Drupal\Core\Datetime\Entity\DateFormat',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_form_mode' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityFormMode',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_view_display' => [
				'class' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplay',
				'storage' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplayStorage',
			],
			'entity_form_display' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityFormDisplay',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'entity_view_mode' => [
				'class' => 'Drupal\Core\Entity\Entity\EntityViewMode',
				'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
			],
			'base_field_override' => [
				'class' => 'Drupal\Core\Field\Entity\BaseFieldOverride',
				'storage' => 'Drupal\Core\Field\BaseFieldOverrideStorage',
			],
		]);
	}


	public function createService0307(): mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension($this->getService('0306'));
	}


	public function createService0308(): mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityStorage\EntityStorageDynamicReturnTypeExtension($this->getService('0306'));
	}


	public function createService0309(): mglaman\PHPStanDrupal\Type\EntityStorage\GetQueryReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityStorage\GetQueryReturnTypeExtension;
	}


	public function createService0310(): mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\ContainerDynamicReturnTypeExtension($this->getService('0304'));
	}


	public function createService0311(): mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicReturnTypeExtension($this->getService('0304'));
	}


	public function createService0312(): mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryDynamicReturnTypeExtension;
	}


	public function createService0313(): mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryAccessCheckDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityQuery\EntityQueryAccessCheckDynamicReturnTypeExtension;
	}


	public function createService0314(): mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityAccessControlHandlerReturnTypeExtension;
	}


	public function createService0315(): mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalClassResolverDynamicStaticReturnTypeExtension($this->getService('0304'));
	}


	public function createService0316(): mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalServiceDynamicReturnTypeExtension($this->getService('0304'));
	}


	public function createService0317(): mglaman\PHPStanDrupal\Type\DrupalStaticEntityQueryDynamicReturnTypeExtension
	{
		return new mglaman\PHPStanDrupal\Type\DrupalStaticEntityQueryDynamicReturnTypeExtension($this->getService('0306'));
	}


	public function createService0318(): mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension
	{
		return new mglaman\PHPStanDrupal\Reflection\EntityFieldsViaMagicReflectionExtension;
	}


	public function createService0319(): mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension
	{
		return new mglaman\PHPStanDrupal\Reflection\EntityFieldMethodsViaMagicReflectionExtension;
	}


	public function createService0320(): mglaman\PHPStanDrupal\Drupal\DrupalStubFilesExtension
	{
		return new mglaman\PHPStanDrupal\Drupal\DrupalStubFilesExtension;
	}


	public function createService0321(): mglaman\PHPStanDrupal\Type\EntityQuery\AccessCheckTypeSpecifyingExtension
	{
		return new mglaman\PHPStanDrupal\Type\EntityQuery\AccessCheckTypeSpecifyingExtension;
	}


	public function createService0322(): mglaman\PHPStanDrupal\DeprecatedScope\GroupLegacyScope
	{
		return new mglaman\PHPStanDrupal\DeprecatedScope\GroupLegacyScope;
	}


	public function createService0323(): PHPStan\Rules\Deprecations\DeprecatedClassHelper
	{
		return new PHPStan\Rules\Deprecations\DeprecatedClassHelper($this->getService('reflectionProvider'));
	}


	public function createService0324(): PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider
	{
		return new PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider($this->getService('061'));
	}


	public function createService0325(): PHPStan\Rules\Deprecations\DeprecatedScopeHelper
	{
		return $this->getService('0324')->get();
	}


	public function createService0326(): PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver
	{
		return new PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver;
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\BetterReflection\Reflector\ClassReflector
	{
		return new PHPStan\BetterReflection\Reflector\ClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\BetterReflection\Reflector\ConstantReflector
	{
		return new PHPStan\BetterReflection\Reflector\ConstantReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\BetterReflection\Reflector\FunctionReflector
	{
		return new PHPStan\BetterReflection\Reflector\FunctionReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('0100'),
			$this->getService('080'),
			$this->getService('064'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0147'),
			$this->getService('028'),
			$this->getService('020'),
			$this->getService('0101'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('079'),
			$this->getService('relativePathHelper'),
			$this->getService('019'),
			$this->getService('069'),
			$this->getService('0301'),
			$this->getService('0106'),
			['stdClass']
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0298')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('061'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/var/www/html/tmp/upgrade_status/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_83c578ab61
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('currentPhpVersionLexer'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('currentPhpVersionLexer'),
			$this->getService('03'),
			$this->getService('061')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('currentPhpVersionPhpParser'), $this->getService('03'));
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('020'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter(
			$this->getService('relativePathHelper'),
			$this->getService('simpleRelativePathHelper'),
			$this->getService('0303'),
			true,
			null,
			null
		);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('0114');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('070')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('070')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderAnalyse'),
			$this->getService('069'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder(
			$this->getService('fileExcluderScan'),
			$this->getService('069'),
			['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine']
		);
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/var/www/html');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('069'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return $this->getService('02')->createEmulative();
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('php8PhpParser'), $this->getService('03'));
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory($this->getService('betterReflectionProvider'));
	}


	public function createServiceRegistry(): PHPStan\Rules\LazyRegistry
	{
		return new PHPStan\Rules\LazyRegistry($this->getService('061'));
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/var/www/html',
			$this->getParameter('analysedPaths')
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__11(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__12(): PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0145'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__13(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule(
			$this->getService('0323'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__14(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule(
			$this->getService('0323'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__15(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule(
			$this->getService('0323'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__16(): PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule($this->getService('0325'));
	}


	public function createServiceRules__17(): PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__18(): mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\Coder\DiscouragedFunctionsRule;
	}


	public function createServiceRules__19(): mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\GlobalDrupalDependencyInjectionRule;
	}


	public function createServiceRules__2(): PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule(
			$this->getService('reflectionProvider'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__20(): mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule;
	}


	public function createServiceRules__21(): mglaman\PHPStanDrupal\Rules\Deprecations\AccessDeprecatedConstant
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\AccessDeprecatedConstant($this->getService('reflectionProvider'));
	}


	public function createServiceRules__22(): mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule
	{
		return new mglaman\PHPStanDrupal\Rules\Classes\ClassExtendsInternalClassRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__23(): mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule
	{
		return new mglaman\PHPStanDrupal\Rules\Classes\PluginManagerInspectionRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__24(): mglaman\PHPStanDrupal\Rules\Deprecations\ConditionManagerCreateInstanceContextConfigurationRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\ConditionManagerCreateInstanceContextConfigurationRule;
	}


	public function createServiceRules__25(): mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\RenderCallbackRule(
			$this->getService('reflectionProvider'),
			$this->getService('0304')
		);
	}


	public function createServiceRules__26(): mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\StaticServiceDeprecatedServiceRule($this->getService('0304'));
	}


	public function createServiceRules__27(): mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\GetDeprecatedServiceRule($this->getService('0304'));
	}


	public function createServiceRules__28(): mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\Tests\BrowserTestBaseDefaultThemeRule;
	}


	public function createServiceRules__29(): mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\ConfigEntityConfigExportRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule(
			$this->getService('reflectionProvider'),
			$this->getService('0145'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__30(): mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\PluginAnnotationContextDefinitionsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__31(): mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\ModuleLoadInclude($this->getService('0305'));
	}


	public function createServiceRules__32(): mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\LoadIncludes($this->getService('0305'));
	}


	public function createServiceRules__33(): mglaman\PHPStanDrupal\Rules\Drupal\EntityQuery\EntityQueryHasAccessCheckRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\EntityQuery\EntityQueryHasAccessCheckRule;
	}


	public function createServiceRules__34(): mglaman\PHPStanDrupal\Rules\Deprecations\SymfonyCmfRouteObjectInterfaceConstantsRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\SymfonyCmfRouteObjectInterfaceConstantsRule;
	}


	public function createServiceRules__35(): mglaman\PHPStanDrupal\Rules\Deprecations\SymfonyCmfRoutingInClassMethodSignatureRule
	{
		return new mglaman\PHPStanDrupal\Rules\Deprecations\SymfonyCmfRoutingInClassMethodSignatureRule;
	}


	public function createServiceRules__36(): mglaman\PHPStanDrupal\Rules\Drupal\RequestStackGetMainRequestRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\RequestStackGetMainRequestRule;
	}


	public function createServiceRules__37(): mglaman\PHPStanDrupal\Rules\Drupal\TestClassesProtectedPropertyModulesRule
	{
		return new mglaman\PHPStanDrupal\Rules\Drupal\TestClassesProtectedPropertyModulesRule;
	}


	public function createServiceRules__4(): PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule(
			$this->getService('reflectionProvider'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__5(): PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule(
			$this->getService('reflectionProvider'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__6(): PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule(
			$this->getService('reflectionProvider'),
			$this->getService('0145'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__7(): PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0145'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__8(): PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule
	{
		return new PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule(
			$this->getService('reflectionProvider'),
			$this->getService('0325')
		);
	}


	public function createServiceRules__9(): PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule(
			$this->getService('reflectionProvider'),
			$this->getService('0325')
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/var/www/html');
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('defaultAnalysisParser'),
			$this->getService('0147'),
			$this->getService('037')
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('061'));
	}


	public function initialize(): void
	{
	}


	protected function getStaticParameters(): array
	{
		return [
			'bootstrapFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php',
			],
			'excludes_analyse' => [],
			'excludePaths' => [
				'analyseAndScan' => [
					'*.api.php',
					'*/tests/fixtures/*.php',
					'*/tests/Drupal/Tests/Listeners/Legacy/*',
					'*/tests/fixtures/*.php',
					'*/settings*.php',
					'*/bower_components/*',
					'*/node_modules/*',
				],
				'analyse' => [],
			],
			'level' => null,
			'paths' => [],
			'exceptions' => [
				'implicitThrows' => true,
				'reportUncheckedExceptionDeadCatch' => true,
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => false],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'disableRuntimeReflectionProvider' => true,
				'skipCheckGenericClasses' => [
					'DatePeriod',
					'CallbackFilterIterator',
					'FilterIterator',
					'RecursiveCallbackFilterIterator',
					'AppendIterator',
					'NoRewindIterator',
					'LimitIterator',
					'InfiniteIterator',
					'CachingIterator',
					'RegexIterator',
					'ReflectionEnum',
				],
				'explicitMixedInUnknownGenericNew' => false,
				'explicitMixedForGlobalVariables' => false,
				'explicitMixedViaIsArray' => false,
				'arrayFilter' => false,
				'arrayUnpacking' => false,
				'nodeConnectingVisitorCompatibility' => true,
				'nodeConnectingVisitorRule' => false,
				'illegalConstructorMethodCall' => false,
				'disableCheckMissingIterableValueType' => false,
				'strictUnnecessaryNullsafePropertyFetch' => false,
				'looseComparison' => false,
				'consistentConstructor' => false,
				'checkUnresolvableParameterTypes' => false,
				'readOnlyByPhpDoc' => false,
				'phpDocParserRequireWhitespaceBeforeDescription' => false,
				'runtimeReflectionRules' => false,
				'notAnalysedTrait' => false,
				'curlSetOptTypes' => false,
				'listType' => false,
				'abstractTraitMethod' => false,
				'missingMagicSerializationRule' => false,
				'nullContextForVoidReturningFunctions' => false,
				'unescapeStrings' => false,
				'alwaysCheckTooWideReturnTypeFinalMethods' => false,
				'duplicateStubs' => false,
				'logicalXor' => false,
				'invarianceComposition' => false,
				'alwaysTrueAlwaysReported' => false,
				'disableUnreachableBranchesRules' => false,
				'varTagType' => false,
				'closureDefaultParameterTypeRule' => false,
				'newRuleLevelHelper' => false,
				'instanceofType' => false,
				'paramOutVariance' => false,
				'allInvalidPhpDocs' => false,
				'strictStaticMethodTemplateTypeVariance' => false,
				'propertyVariance' => false,
				'genericPrototypeMessage' => false,
				'stricterFunctionMap' => false,
				'invalidPhpDocTagLine' => false,
				'detectDeadTypeInMultiCatch' => false,
				'zeroFiles' => false,
				'callUserFunc' => false,
				'finalByPhpDoc' => false,
				'magicConstantOutOfContext' => false,
			],
			'fileExtensions' => ['php', 'module', 'theme', 'inc', 'install', 'profile', 'engine'],
			'checkAdvancedIsset' => false,
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkAlwaysTrueLooseComparison' => false,
			'reportAlwaysTrueInLastCondition' => false,
			'checkClassCaseSensitivity' => false,
			'checkExplicitMixed' => false,
			'checkImplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingIterableValueType' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => false,
			'checkNullables' => false,
			'checkThisOnly' => true,
			'checkUnionTypes' => false,
			'checkBenevolentUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'checkPhpDocMethodSignatures' => false,
			'checkExtraArguments' => false,
			'checkMissingTypehints' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'deprecationRulesInstalled' => true,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'reportWrongPhpDocTypeInVarTag' => false,
			'checkMissingOverrideMethodAttribute' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => ['/var/www/html/vendor/mglaman/phpstan-drupal/stubs/Twig/functions.stub'],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 0,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'usePathConstantsAsConstantString' => false,
			'rememberPossiblyImpureFunctionValues' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 1024, 'nodesByStringCountMax' => 256],
			'reportUnmatchedIgnoredErrors' => false,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'stubFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
			],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'memoryLimitFile' => '/var/www/html/tmp/upgrade_status/phpstan/.memory_limit',
			'tempResultCachePath' => '/var/www/html/tmp/upgrade_status/phpstan/resultCaches',
			'resultCachePath' => '/var/www/html/tmp/upgrade_status/phpstan/resultCache.php',
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'staticReflectionClassNamePatterns' => [],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
				'Drupal::VERSION',
			],
			'customRulesetUsed' => true,
			'editorUrl' => null,
			'editorUrlTitle' => null,
			'errorFormat' => null,
			'__validate' => true,
			'drupal' => [
				'drupal_root' => '/var/www/html',
				'bleedingEdge' => ['checkDeprecatedHooksInApiFiles' => false],
				'entityMapping' => [
					'aggregator_feed' => [
						'class' => 'Drupal\aggregator\Entity\Feed',
						'storage' => 'Drupal\aggregator\FeedStorage',
					],
					'aggregator_item' => [
						'class' => 'Drupal\aggregator\Entity\Item',
						'storage' => 'Drupal\aggregator\ItemStorage',
					],
					'block' => [
						'class' => 'Drupal\block\Entity\Block',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'block_content' => [
						'class' => 'Drupal\block_content\Entity\BlockContent',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'block_content_type' => [
						'class' => 'Drupal\block_content\Entity\BlockContentType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'comment_type' => [
						'class' => 'Drupal\comment\Entity\CommentType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'comment' => ['class' => 'Drupal\comment\Entity\Comment', 'storage' => 'Drupal\comment\CommentStorage'],
					'contact_form' => [
						'class' => 'Drupal\contact\Entity\ContactForm',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'contact_message' => [
						'class' => 'Drupal\contact\Entity\Message',
						'storage' => 'Drupal\Core\Entity\ContentEntityNullStorage',
					],
					'content_moderation_state' => [
						'class' => 'Drupal\content_moderation\Entity\ContentModerationState',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'editor' => [
						'class' => 'Drupal\editor\Entity\Editor',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'field_config' => [
						'class' => 'Drupal\field\Entity\FieldConfig',
						'storage' => 'Drupal\field\FieldConfigStorage',
					],
					'field_storage_config' => [
						'class' => 'Drupal\field\Entity\FieldStorageConfig',
						'storage' => 'Drupal\field\FieldStorageConfigStorage',
					],
					'file' => ['class' => 'Drupal\file\Entity\File', 'storage' => 'Drupal\file\FileStorage'],
					'filter_format' => [
						'class' => 'Drupal\filter\Entity\FilterFormat',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'image_style' => [
						'class' => 'Drupal\image\Entity\ImageStyle',
						'storage' => 'Drupal\image\ImageStyleStorage',
					],
					'imce_profile' => [
						'class' => 'Drupal\imce\Entity\ImceProfile',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'configurable_language' => [
						'class' => 'Drupal\language\Entity\ConfigurableLanguage',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'language_content_settings' => [
						'class' => 'Drupal\language\Entity\ContentLanguageSettings',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'media_type' => [
						'class' => 'Drupal\media\Entity\MediaType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'media' => ['class' => 'Drupal\media\Entity\Media', 'storage' => 'Drupal\media\MediaStorage'],
					'menu_link_content' => [
						'class' => 'Drupal\menu_link_content\Entity\MenuLinkContent',
						'storage' => '\Drupal\menu_link_content\MenuLinkContentStorage',
					],
					'metatag_defaults' => [
						'class' => 'Drupal\metatag\Entity\MetatagDefaults',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'node_type' => [
						'class' => 'Drupal\node\Entity\NodeType',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'node' => ['class' => 'Drupal\node\Entity\Node', 'storage' => 'Drupal\node\NodeStorage'],
					'path_alias' => [
						'class' => 'Drupal\path_alias\Entity\PathAlias',
						'storage' => 'Drupal\path_alias\PathAliasStorage',
					],
					'rdf_mapping' => [
						'class' => 'Drupal\rdf\Entity\RdfMapping',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'responsive_image_style' => [
						'class' => 'Drupal\responsive_image\Entity\ResponsiveImageStyle',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'search_page' => [
						'class' => 'Drupal\search\Entity\SearchPage',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'search_api_server' => [
						'class' => 'Drupal\search_api\Entity\Server',
						'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
					],
					'search_api_index' => [
						'class' => 'Drupal\search_api\Entity\Index',
						'storage' => 'Drupal\search_api\Entity\SearchApiConfigEntityStorage',
					],
					'search_api_task' => [
						'class' => 'Drupal\search_api\Entity\Task',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'shortcut_set' => [
						'class' => 'Drupal\shortcut\Entity\ShortcutSet',
						'storage' => 'Drupal\shortcut\ShortcutSetStorage',
					],
					'shortcut' => [
						'class' => 'Drupal\shortcut\Entity\Shortcut',
						'storage' => 'Drupal\Core\Entity\Sql\SqlContentEntityStorage',
					],
					'action' => [
						'class' => 'Drupal\system\Entity\Action',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'menu' => ['class' => 'Drupal\system\Entity\Menu', 'storage' => 'Drupal\system\MenuStorage'],
					'taxonomy_term' => ['class' => 'Drupal\taxonomy\Entity\Term', 'storage' => 'Drupal\taxonomy\TermStorage'],
					'taxonomy_vocabulary' => [
						'class' => 'Drupal\taxonomy\Entity\Vocabulary',
						'storage' => 'Drupal\taxonomy\VocabularyStorage',
					],
					'tour' => [
						'class' => 'Drupal\tour\Entity\Tour',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'user' => ['class' => 'Drupal\user\Entity\User', 'storage' => 'Drupal\user\UserStorage'],
					'user_role' => ['class' => 'Drupal\user\Entity\Role', 'storage' => 'Drupal\user\RoleStorage'],
					'webform' => [
						'class' => 'Drupal\webform\Entity\Webform',
						'storage' => '\Drupal\webform\WebformEntityStorage',
					],
					'webform_submission' => [
						'class' => 'Drupal\webform\Entity\WebformSubmission',
						'storage' => 'Drupal\webform\WebformSubmissionStorage',
					],
					'webform_options' => [
						'class' => 'Drupal\webform\Entity\WebformOptions',
						'storage' => '\Drupal\webform\WebformOptionsStorage',
					],
					'workflow' => [
						'class' => 'Drupal\workflows\Entity\Workflow',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'pathauto_pattern' => [
						'class' => 'Drupal\pathauto\Entity\PathautoPattern',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'view' => [
						'class' => 'Drupal\views\Entity\View',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'date_format' => [
						'class' => 'Drupal\Core\Datetime\Entity\DateFormat',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_form_mode' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityFormMode',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_view_display' => [
						'class' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplay',
						'storage' => 'Drupal\layout_builder\Entity\LayoutBuilderEntityViewDisplayStorage',
					],
					'entity_form_display' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityFormDisplay',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'entity_view_mode' => [
						'class' => 'Drupal\Core\Entity\Entity\EntityViewMode',
						'storage' => 'Drupal\Core\Config\Entity\ConfigEntityStorage',
					],
					'base_field_override' => [
						'class' => 'Drupal\Core\Field\Entity\BaseFieldOverride',
						'storage' => 'Drupal\Core\Field\BaseFieldOverrideStorage',
					],
				],
			],
			'tmpDir' => '/var/www/html/tmp/upgrade_status/phpstan',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/var/www/html/tmp/upgrade_status/phpstan',
			'rootDir' => '/var/www/html/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/var/www/html',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => ['/var/www/html/tmp/upgrade_status/deprecation_testing.neon'],
			'allConfigFiles' => [
				'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'/var/www/html/tmp/upgrade_status/deprecation_testing.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/extension.neon',
				'/var/www/html/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
				'/var/www/html/vendor/mglaman/phpstan-drupal/rules.neon',
			],
			'composerAutoloaderProjectPaths' => ['/var/www/html/vendor/phpstan/phpstan/..', '/var/www/html'],
			'generateBaselineFile' => null,
			'usedLevel' => '0',
			'cliAutoloadFile' => null,
		];
	}


	protected function getDynamicParameter($key)
	{
		switch (true) {
			case $key === 'analysedPaths': return null;
			case $key === 'analysedPathsFromConfig': return null;
			case $key === 'env': return null;
			case $key === 'fixerTmpDir': return ($this->getParameter('sysGetTempDir')) . '/phpstan-fixer';
			case $key === 'sysGetTempDir': return sys_get_temp_dir();
			case $key === 'pro': return [
			'dnsServers' => ['1.1.1.2'],
			'tmpDir' => ($this->getParameter('sysGetTempDir')) . '/phpstan-fixer',
		];
			default: return parent::getDynamicParameter($key);
		};
	}


	public function getParameters(): array
	{
		array_map(function ($key) { $this->getParameter($key); }, [
			'analysedPaths',
			'analysedPathsFromConfig',
			'env',
			'fixerTmpDir',
			'sysGetTempDir',
			'pro',
		]);
		return parent::getParameters();
	}
}
