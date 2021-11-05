<?php
// source: phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_603a05b954 extends _PHPStan_76800bfb5\Nette\DI\Container
{
	protected $tags = [
		'phpstan.broker.methodsClassReflectionExtension' => ['068' => true, '072' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => ['069' => true, '073' => true, '0170' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0116' => true,
			'0117' => true,
			'0118' => true,
			'0119' => true,
			'0120' => true,
			'0121' => true,
			'0122' => true,
			'0123' => true,
			'0125' => true,
			'0126' => true,
			'0127' => true,
			'0128' => true,
			'0129' => true,
			'0130' => true,
			'0131' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0135' => true,
			'0136' => true,
			'0137' => true,
			'0138' => true,
			'0139' => true,
			'0140' => true,
			'0141' => true,
			'0145' => true,
			'0146' => true,
			'0148' => true,
			'0149' => true,
			'0151' => true,
			'0154' => true,
			'0155' => true,
			'0156' => true,
			'0157' => true,
			'0158' => true,
			'0159' => true,
			'0160' => true,
			'0161' => true,
			'0162' => true,
			'0163' => true,
			'0172' => true,
			'0175' => true,
			'0176' => true,
			'0177' => true,
			'0178' => true,
			'0180' => true,
			'0181' => true,
			'0182' => true,
			'0183' => true,
			'0184' => true,
			'0185' => true,
			'0186' => true,
			'0187' => true,
			'0188' => true,
			'0189' => true,
			'0190' => true,
			'0191' => true,
			'0192' => true,
			'0193' => true,
			'0194' => true,
			'0195' => true,
			'0196' => true,
			'0197' => true,
			'0198' => true,
			'0199' => true,
			'0220' => true,
			'0221' => true,
			'0224' => true,
			'0225' => true,
			'0226' => true,
			'0227' => true,
			'0228' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0124' => true,
			'0147' => true,
			'0173' => true,
			'0174' => true,
			'0200' => true,
			'0201' => true,
			'0202' => true,
			'0203' => true,
			'0204' => true,
			'0205' => true,
			'0206' => true,
			'0207' => true,
			'0208' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0214' => true,
			'0215' => true,
			'0216' => true,
			'0217' => true,
			'0218' => true,
			'0219' => true,
		],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => ['0142' => true, '0144' => true, '0229' => true],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0143' => true,
			'0153' => true,
			'0172' => true,
			'0222' => true,
			'0223' => true,
			'0229' => true,
			'0230' => true,
			'0231' => true,
			'0232' => true,
			'0233' => true,
			'0234' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0150' => true,
			'0152' => true,
			'0166' => true,
			'0167' => true,
			'0168' => true,
			'0169' => true,
			'0171' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0164' => true, '0165' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0179' => true],
		'phpstan.rules.rule' => [
			'0247' => true,
			'0248' => true,
			'0249' => true,
			'0250' => true,
			'0252' => true,
			'0253' => true,
			'0255' => true,
			'0257' => true,
			'0258' => true,
			'0259' => true,
			'0260' => true,
			'0261' => true,
			'0262' => true,
			'0263' => true,
			'0266' => true,
			'0267' => true,
			'0268' => true,
			'0269' => true,
			'0270' => true,
			'0272' => true,
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
			'rules.38' => true,
			'rules.39' => true,
			'rules.4' => true,
			'rules.40' => true,
			'rules.41' => true,
			'rules.42' => true,
			'rules.5' => true,
			'rules.6' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => '_PHPStan_76800bfb5\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_76800bfb5\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			0 => [
				'088',
				'089',
				'091',
				'092',
				'0103',
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
				'0255',
				'0256',
				'0257',
				'0258',
				'0259',
				'0260',
				'0261',
				'0262',
				'0263',
				'0264',
				'0265',
				'0266',
				'0267',
				'0268',
				'0269',
				'0270',
				'0271',
				'0272',
			],
			2 => [
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
				'rules.38',
				'rules.39',
				'rules.40',
				'rules.41',
				'rules.42',
			],
		],
		'PHPStan\Rules\Debug\DumpTypeRule' => [2 => ['rules.0']],
		'PHPStan\Rules\Debug\FileAssertRule' => [2 => ['rules.1']],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [2 => ['rules.2']],
		'PHPStan\Rules\Arrays\EmptyArrayItemRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [2 => ['rules.4']],
		'PHPStan\Rules\Cast\UnsetCastRule' => [2 => ['rules.5']],
		'PHPStan\Rules\Classes\ClassAttributesRule' => [2 => ['rules.6']],
		'PHPStan\Rules\Classes\ClassConstantAttributesRule' => [2 => ['rules.7']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [2 => ['rules.8']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [2 => ['rules.9']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [2 => ['rules.10']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [2 => ['rules.11']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [2 => ['rules.12']],
		'PHPStan\Rules\Classes\InstantiationRule' => [2 => ['rules.13']],
		'PHPStan\Rules\Classes\InvalidPromotedPropertiesRule' => [2 => ['rules.14']],
		'PHPStan\Rules\Classes\NewStaticRule' => [2 => ['rules.15']],
		'PHPStan\Rules\Classes\NonClassAttributeClassRule' => [2 => ['rules.16']],
		'PHPStan\Rules\Classes\TraitAttributeClassRule' => [2 => ['rules.17']],
		'PHPStan\Rules\Constants\FinalConstantRule' => [2 => ['rules.18']],
		'PHPStan\Rules\Exceptions\ThrowExpressionRule' => [2 => ['rules.19']],
		'PHPStan\Rules\Functions\ArrowFunctionAttributesRule' => [2 => ['rules.20']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule' => [2 => ['rules.21']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [2 => ['rules.22']],
		'PHPStan\Rules\Functions\ClosureAttributesRule' => [2 => ['rules.23']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [2 => ['rules.24']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [2 => ['rules.25']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [2 => ['rules.26']],
		'PHPStan\Rules\Functions\FunctionAttributesRule' => [2 => ['rules.27']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [2 => ['rules.28']],
		'PHPStan\Rules\Functions\ParamAttributesRule' => [2 => ['rules.29']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [2 => ['rules.30']],
		'PHPStan\Rules\Functions\ReturnNullsafeByRefRule' => [2 => ['rules.31']],
		'PHPStan\Rules\Keywords\ContinueBreakInLoopRule' => [2 => ['rules.32']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [2 => ['rules.33']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [2 => ['rules.34']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [2 => ['rules.35']],
		'PHPStan\Rules\Methods\MethodAttributesRule' => [2 => ['rules.36']],
		'PHPStan\Rules\Operators\InvalidAssignVarRule' => [2 => ['rules.37']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [2 => ['rules.38']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [2 => ['rules.39']],
		'PHPStan\Rules\Properties\PropertyAttributesRule' => [2 => ['rules.40']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyRule' => [2 => ['rules.41']],
		'PHPStan\Rules\Variables\UnsetRule' => [2 => ['rules.42']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeVisitorAbstract' => [['03', '04', '038', '050', '059']],
		'PhpParser\NodeVisitor' => [['03', '04', '038', '050', '059']],
		'PhpParser\NodeVisitor\NameResolver' => [['03']],
		'PhpParser\NodeVisitor\NodeConnectingVisitor' => [['04']],
		'PhpParser\PrettyPrinterAbstract' => [['05']],
		'PhpParser\PrettyPrinter\Standard' => [['05']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['06']],
		'PHPStan\Php\PhpVersion' => [['07']],
		'PHPStan\Php\PhpVersionFactory' => [['08']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['09']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['010']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['011']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['012']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['013']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['014']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['015']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['016']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['017']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['018']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['019']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['020']],
		'PHPStan\PhpDoc\StubValidator' => [['021']],
		'PHPStan\Analyser\Analyser' => [['022']],
		'PHPStan\Analyser\FileAnalyser' => [['023']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['024']],
		'PHPStan\Analyser\ScopeFactory' => [['025']],
		'PHPStan\Analyser\LazyScopeFactory' => [['025']],
		'PHPStan\Analyser\NodeScopeResolver' => [['026']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['027']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['028']],
		'PHPStan\Cache\Cache' => [['029']],
		'PHPStan\Command\AnalyseApplication' => [['030']],
		'PHPStan\Command\AnalyserRunner' => [['031']],
		'PHPStan\Command\FixerApplication' => [['032']],
		'PHPStan\Command\IgnoredRegexValidator' => [['033']],
		'PHPStan\Dependency\DependencyDumper' => [['034']],
		'PHPStan\Dependency\DependencyResolver' => [['035']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['036']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['037']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['038']],
		'PHPStan\DependencyInjection\Container' => [['039'], ['040']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['040']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['041']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['042']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['043']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['044']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['045']],
		'PHPStan\File\FileHelper' => [['046']],
		'PHPStan\File\FileExcluderFactory' => [['047']],
		'PHPStan\File\FileExcluderRawFactory' => [['048']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\File\FileMonitor' => [['049']],
		'PHPStan\NodeVisitor\StatementOrderVisitor' => [['050']],
		'PHPStan\Parallel\ParallelAnalyser' => [['051']],
		'PHPStan\Parallel\Scheduler' => [['052']],
		'PHPStan\Parser\Parser' => [
			0 => ['053'],
			2 => [1 => 'currentPhpVersionRichParser', 'currentPhpVersionSimpleParser', 'php8Parser', 'pathRoutingParser'],
		],
		'PHPStan\Parser\CachedParser' => [['053']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['054']],
		'PHPStan\Process\CpuCoreCounter' => [['055']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['056']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['057', '068', '070', '072']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['057']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['058', '069', '070', '073', '0170']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['058']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['059']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['060']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [
			0 => ['061'],
			2 => [1 => 'betterReflectionSourceLocator'],
		],
		'PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator' => [['061']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['062']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['063']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['064']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['065']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['066']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['067']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['068']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['069']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['070']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['071']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['072']],
		'PHPStan\Reflection\BrokerAwareExtension' => [['073', '0221']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['073']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['074']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['075']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['076']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['080'], ['077', '078']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['077']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['078']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['079']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['081']],
		'PHPStan\Rules\AttributesCheck' => [['082']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['083']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['084']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['085']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['086']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['087'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['087']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['088']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['089']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['090']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['091']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['092']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['093']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['094']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['095']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['096']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['097']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['098']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['099']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0100']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0101']],
		'PHPStan\Rules\IssetCheck' => [['0102']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0103']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0104']],
		'PHPStan\Rules\NullsafeCheck' => [['0105']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0106']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0106']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0107']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0108']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0108']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0109']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0110']],
		'PHPStan\Rules\RegistryFactory' => [['0111']],
		'PHPStan\Rules\RuleLevelHelper' => [['0112']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0113']],
		'PHPStan\Type\FileTypeMapper' => [['0114']],
		'PHPStan\Type\TypeAliasResolver' => [['0115']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0116',
				'0117',
				'0118',
				'0119',
				'0120',
				'0121',
				'0122',
				'0123',
				'0125',
				'0126',
				'0127',
				'0128',
				'0129',
				'0130',
				'0131',
				'0132',
				'0133',
				'0134',
				'0135',
				'0136',
				'0137',
				'0138',
				'0139',
				'0140',
				'0141',
				'0145',
				'0146',
				'0148',
				'0149',
				'0151',
				'0154',
				'0155',
				'0156',
				'0157',
				'0158',
				'0159',
				'0160',
				'0161',
				'0162',
				'0163',
				'0172',
				'0175',
				'0176',
				'0177',
				'0178',
				'0180',
				'0181',
				'0182',
				'0183',
				'0184',
				'0185',
				'0186',
				'0187',
				'0188',
				'0189',
				'0190',
				'0191',
				'0192',
				'0193',
				'0194',
				'0195',
				'0196',
				'0197',
				'0198',
				'0199',
				'0220',
				'0221',
				'0224',
				'0225',
				'0226',
				'0227',
				'0228',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0116']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0117']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0118']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0119']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0120']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['0121']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0122']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0123']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0124',
				'0147',
				'0173',
				'0174',
				'0200',
				'0201',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0214',
				'0215',
				'0216',
				'0217',
				'0218',
				'0219',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0124',
				'0147',
				'0173',
				'0174',
				'0179',
				'0200',
				'0201',
				'0202',
				'0203',
				'0204',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
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
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0124']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0125']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0126']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0127']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0128']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0129']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0130']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0131']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0132']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0134']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0135']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0136']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0137']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0138']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0139']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0140']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0141']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [['0142', '0144', '0229']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0142']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			['0143', '0153', '0172', '0222', '0223', '0229', '0230', '0231', '0232', '0233', '0234'],
		],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0143']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0144']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0145']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0146']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0147']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0148']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0149']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [['0150', '0152', '0166', '0167', '0168', '0169', '0171']],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0150']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0151']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0152']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0153']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0154']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0155']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0156']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0158']],
		'PHPStan\Type\Php\GetoptFunctionDynamicReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0161']],
		'PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension' => [['0162']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0163']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0164', '0165']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0164']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0165']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0166']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0167']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0168']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0169']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0170']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0171']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0172']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0173']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0174']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0175']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0176']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0178']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0179']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0179']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0180']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0181']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['0182']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0183']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0184']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0185']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0186']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0187']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0188']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0189']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0190']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0191']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0192']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0196']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0197']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0198']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0199']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0200']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0201']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0202']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0203']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0204']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['0205']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['0206']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['0207']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0208']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['0209']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0210']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0211']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0212']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0213']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0214']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0215']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0216']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0217']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0218']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0219']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0220']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0221']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0222']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0223']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0224']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0225']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0226']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0227']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0228']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0229']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0230', '0231', '0232', '0233', '0234']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [
			['reflectionProvider'],
			['broker', 'innerRuntimeReflectionProvider'],
			[2 => 'betterReflectionProvider', 'runtimeReflectionProvider'],
		],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\SimpleParser' => [2 => ['currentPhpVersionSimpleParser', 'php8Parser']],
		'PhpParser\Parser' => [0 => ['phpParserDecorator'], 2 => [1 => 'currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserDecorator' => [['phpParserDecorator']],
		'PhpParser\Lexer' => [2 => ['currentPhpVersionLexer', 'php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PhpParser\Parser\Php7' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\BetterReflection\Reflector\ClassReflector' => [
			2 => ['betterReflectionClassReflector', 'nodeScopeResolverClassReflector'],
		],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			2 => [
				'betterReflectionClassReflector',
				'nodeScopeResolverClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
			],
		],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector' => [
			2 => ['betterReflectionClassReflector', 'nodeScopeResolverClassReflector'],
		],
		'PHPStan\BetterReflection\Reflector\FunctionReflector' => [2 => ['betterReflectionFunctionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector' => [
			2 => ['betterReflectionFunctionReflector'],
		],
		'PHPStan\BetterReflection\Reflector\ConstantReflector' => [2 => ['betterReflectionConstantReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector' => [
			2 => ['betterReflectionConstantReflector'],
		],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'Hoa\Compiler\Llk\Parser' => [['regexParser']],
		'Hoa\File\File' => [['regexGrammarStream']],
		'Hoa\File\Generic' => [['regexGrammarStream']],
		'Hoa\Stream\Stream' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Stream' => [['regexGrammarStream']],
		'Hoa\Event\Listenable' => [['regexGrammarStream']],
		'Stringable' => [['regexGrammarStream']],
		'Hoa\Event\Source' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pathable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Statable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Touchable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Bufferable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Lockable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\Pointable' => [['regexGrammarStream']],
		'Hoa\Stream\IStream\In' => [['regexGrammarStream']],
		'Hoa\File\Read' => [['regexGrammarStream']],
		'PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider' => [2 => ['runtimeReflectionProvider']],
		'PHPStan\Reflection\Runtime\RuntimeReflectionProvider' => [['innerRuntimeReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0235']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0236']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0237', '0238']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0237']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0238']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.baselineNeon',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter' => [['errorFormatter.baselineNeon']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Rules\Api\ApiInstantiationRule' => [['0239']],
		'PHPStan\Rules\Api\ApiClassExtendsRule' => [['0240']],
		'PHPStan\Rules\Api\ApiClassImplementsRule' => [['0241']],
		'PHPStan\Rules\Api\ApiInterfaceExtendsRule' => [['0242']],
		'PHPStan\Rules\Api\ApiMethodCallRule' => [['0243']],
		'PHPStan\Rules\Api\ApiStaticCallRule' => [['0244']],
		'PHPStan\Rules\Api\ApiTraitUseRule' => [['0245']],
		'PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule' => [['0246']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [['0247']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0248']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0249']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0250']],
		'PHPStan\Rules\Functions\ClosureUsesThisRule' => [['0251']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['0252']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['0253']],
		'PHPStan\Rules\Constants\OverridingConstantRule' => [['0254']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0255']],
		'PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule' => [['0256']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0257']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0258']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0259']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0260']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0261']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0262']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0263']],
		'PHPStan\Rules\Properties\OverridingPropertyRule' => [['0264']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0265']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0266']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0267']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0268']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0269']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0270']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['0271']],
		'PHPStan\Rules\Classes\LocalTypeAliasesRule' => [['0272']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'stubFiles' => [
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
			],
			'bootstrap' => null,
			'bootstrapFiles' => [
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
			],
			'excludes_analyse' => [],
			'excludePaths' => null,
			'autoload_directories' => [],
			'autoload_files' => [],
			'level' => null,
			'paths' => [],
			'exceptions' => [
				'uncheckedExceptionRegexes' => [],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => false],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'disableRuntimeReflectionProvider' => false,
				'closureUsesThis' => false,
				'randomIntParameters' => false,
				'nullCoalesce' => false,
				'fileWhitespace' => false,
				'unusedClassElements' => false,
				'readComposerPhpVersion' => false,
				'dateTimeInstantiation' => false,
				'detectDuplicateStubFiles' => false,
				'checkLogicalAndConstantCondition' => false,
				'checkLogicalOrConstantCondition' => false,
				'checkMissingTemplateTypeInParameter' => false,
				'wrongVarUsage' => false,
				'arrayDestructuring' => false,
				'objectFromNewClass' => false,
				'skipCheckGenericClasses' => ['RecursiveIterator', 'RecursiveArrayIterator', 'WeakMap'],
				'rememberFunctionValues' => false,
				'preciseExceptionTracking' => false,
				'apiRules' => false,
				'deepInspectTypes' => false,
				'neverInGenericReturnType' => false,
				'validateOverridingMethodsInStubs' => false,
				'crossCheckInterfaces' => false,
				'finalByPhpDocTag' => false,
				'classConstants' => false,
				'privateStaticCall' => false,
				'overridingProperty' => false,
				'throwsVoid' => false,
			],
			'fileExtensions' => ['php'],
			'checkAdvancedIsset' => false,
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => false,
			'checkExplicitMixed' => false,
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
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'checkPhpDocMethodSignatures' => false,
			'checkExtraArguments' => false,
			'checkMissingClosureNativeReturnTypehintRule' => false,
			'checkMissingTypehints' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'implicitThrows' => true,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'mixinExcludeClasses' => [],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteCatchScopeWithTryAssignments' => false,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => [],
			'treatPhpDocTypesAsCertain' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 1024, 'nodesByStringCountMax' => 1024],
			'reportUnmatchedIgnoredErrors' => true,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass'],
			'earlyTerminatingMethodCalls' => [],
			'earlyTerminatingFunctionCalls' => [],
			'memoryLimitFile' => '/tmp/phpstan/.memory_limit',
			'tempResultCachePath' => '/tmp/phpstan/resultCaches',
			'resultCachePath' => '/tmp/phpstan/resultCache.php',
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'staticReflectionClassNamePatterns' => ['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
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
			],
			'editorUrl' => null,
			'customRulesetUsed' => false,
			'missingClosureNativeReturnCheckObjectTypehint' => false,
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/tmp/phpstan',
			'rootDir' => '/tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/project',
			'cliArgumentsVariablesRegistered' => true,
			'tmpDir' => '/tmp/phpstan',
			'additionalConfigFiles' => [
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
			],
			'analysedPaths' => [],
			'composerAutoloaderProjectPaths' => ['/tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/..'],
			'analysedPathsFromConfig' => [],
			'generateBaselineFile' => null,
			'usedLevel' => '0',
			'cliAutoloadFile' => null,
			'fixerTmpDir' => '/tmp/phpstan-fixer',
			'singleReflectionFile' => null,
			'singleReflectionInsteadOfFile' => null,
			'__parametersSchema' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
				"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
					'bootstrap' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'bootstrapFiles' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludes_analyse' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludePaths' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\AnyOf', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyse' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
								],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
							]),
							\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyseAndScan' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
								],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
							]),
							\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'analyse' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
									'analyseAndScan' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
								],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
							]),
							null,
						],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'autoload_directories' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_files' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'level' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\AnyOf', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'paths' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'exceptions' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'uncheckedExceptionRegexes' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'uncheckedExceptionClasses' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkedExceptionRegexes' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkedExceptionClasses' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'check' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
									'missingCheckedExceptionInThrows' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
									'tooWideThrowType' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
										"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
									]),
								],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
							]),
						],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'featureToggles' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'bleedingEdge' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'disableRuntimeReflectionProvider' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'closureUsesThis' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'randomIntParameters' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nullCoalesce' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'fileWhitespace' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'unusedClassElements' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'readComposerPhpVersion' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'dateTimeInstantiation' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'detectDuplicateStubFiles' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkLogicalAndConstantCondition' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkLogicalOrConstantCondition' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'checkMissingTemplateTypeInParameter' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'wrongVarUsage' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'arrayDestructuring' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'objectFromNewClass' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'skipCheckGenericClasses' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'rememberFunctionValues' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'preciseExceptionTracking' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'apiRules' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'deepInspectTypes' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'neverInGenericReturnType' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'validateOverridingMethodsInStubs' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'crossCheckInterfaces' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'finalByPhpDocTag' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'classConstants' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'privateStaticCall' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'overridingProperty' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'throwsVoid' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'fileExtensions' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAdvancedIsset' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueCheckTypeFunctionCall' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueInstanceof' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueStrictComparison' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkClassCaseSensitivity' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixed' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionArgumentTypes' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionNameCase' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkGenericClassInNonGenericObjectType' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkInternalClassCaseSensitivity' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingIterableValueType' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingCallableSignature' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingVarTagTypehint' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkArgumentsPassedByReference' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMaybeUndefinedVariables' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkNullables' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkThisOnly' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUnionTypes' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixedMissingReturn' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMissingReturn' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMethodSignatures' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExtraArguments' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingClosureNativeReturnTypehintRule' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMissingTypehints' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkTooWideReturnTypesInProtectedAndPublicMethods' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUninitializedProperties' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'inferPrivatePropertyTypeFromConstructor' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'implicitThrows' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tipsOfTheDay' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybes' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybesInMethodSignatures' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybesInPropertyPhpDocTypes' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportStaticMethodSignatures' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'parallel' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'jobSize' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'processTimeout' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'float',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'maximumNumberOfProcesses' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'minimumNumberOfJobsPerProcess' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'buffer' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'phpVersion' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\AnyOf', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
							\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [70100.0, 80099.0],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'polluteScopeWithLoopInitialAssignments' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithAlwaysIterableForeach' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteCatchScopeWithTryAssignments' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'propertyAlwaysWrittenTags' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'propertyAlwaysReadTags' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConstructors' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'treatPhpDocTypesAsCertain' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicMethods' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicProperties' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'ignoreErrors' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\AnyOf', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00set" => [
								\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'count' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								\_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'paths' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [
													null,
													null,
												],
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
												"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
											]),
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
							],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'internalErrorsCountLimit' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cache' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Structure', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00items" => [
							'nodesByFileCountMax' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nodesByStringCountMax' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'reportUnmatchedIgnoredErrors' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scopeClass' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'typeAliases' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'universalObjectCratesClasses' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'stubFiles' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingMethodCalls' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingFunctionCalls' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'memoryLimitFile' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempResultCachePath' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'resultCachePath' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'resultCacheChecksProjectExtensionFilesDependencies' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'staticReflectionClassNamePatterns' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'dynamicConstantNames' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'customRulesetUsed' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'rootDir' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tmpDir' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'currentWorkingDirectory' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliArgumentsVariablesRegistered' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'mixinExcludeClasses' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanFiles' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scanDirectories' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'fixerTmpDir' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'editorUrl' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'debugMode' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'productionMode' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempDir' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'additionalConfigFiles' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'generateBaselineFile' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPaths' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'composerAutoloaderProjectPaths' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'analysedPathsFromConfig' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'usedLevel' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliAutoloadFile' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'singleReflectionFile' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'singleReflectionInsteadOfFile' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'missingClosureNativeReturnCheckObjectTypehint' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'__parametersSchema' => \_PHPStan_76800bfb5\Nette\PhpGenerator\Dumper::createObject('_PHPStan_76800bfb5\Nette\Schema\Elements\Type', [
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00type" => '_PHPStan_76800bfb5\Nette\Schema\Schema',
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00pattern" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
				],
				"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
				"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
				"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00required" => true,
				"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00default" => null,
				"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00before" => null,
				"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00asserts" => [],
				"\x00_PHPStan_76800bfb5\\Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
			]),
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('07'));
	}


	public function createService03(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver;
	}


	public function createService04(): PhpParser\NodeVisitor\NodeConnectingVisitor
	{
		return new PhpParser\NodeVisitor\NodeConnectingVisitor;
	}


	public function createService05(): PhpParser\PrettyPrinter\Standard
	{
		return new PhpParser\PrettyPrinter\Standard;
	}


	public function createService06(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('046'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService07(): PHPStan\Php\PhpVersion
	{
		return $this->getService('08')->create();
	}


	public function createService08(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('09')->create();
	}


	public function createService09(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(null, false, ['/tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/..']);
	}


	public function createService010(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService011(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('012'));
	}


	public function createService012(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser;
	}


	public function createService013(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('011'), $this->getService('012'));
	}


	public function createService014(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0114'));
	}


	public function createService015(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('018'), $this->getService('017'), $this->getService('0107'));
	}


	public function createService016(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('010'), $this->getService('013'));
	}


	public function createService017(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService018(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver($this->getService('019'), $this->getService('039'));
	}


	public function createService019(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('039'));
	}


	public function createService020(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('010'), $this->getService('011'), $this->getService('018'));
	}


	public function createService021(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('041'), false, false);
	}


	public function createService022(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser($this->getService('023'), $this->getService('registry'), $this->getService('026'), 50);
	}


	public function createService023(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('025'),
			$this->getService('026'),
			$this->getService('053'),
			$this->getService('035'),
			true
		);
	}


	public function createService024(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper($this->getService('033'), $this->getService('046'), [], true);
	}


	public function createService025(): PHPStan\Analyser\LazyScopeFactory
	{
		return new PHPStan\Analyser\LazyScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('039'));
	}


	public function createService026(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('nodeScopeResolverClassReflector'),
			$this->getService('042'),
			$this->getService('053'),
			$this->getService('0114'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('07'),
			$this->getService('014'),
			$this->getService('046'),
			$this->getService('typeSpecifier'),
			$this->getService('045'),
			true,
			false,
			true,
			[],
			[],
			true,
			false
		);
	}


	public function createService027(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_603a05b954 $container)
			{
				$this->container = $container;
			}


			public function create(array $fileReplacements): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('036'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					'/tmp/phpstan/resultCache.php',
					'/tmp/phpstan/resultCaches',
					[],
					['/tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/..'],
					[
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
					],
					'0',
					null,
					[
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
					],
					[],
					[],
					$fileReplacements,
					false
				);
			}
		};
	}


	public function createService028(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer('/tmp/phpstan/resultCache.php', '/tmp/phpstan/resultCaches');
	}


	public function createService029(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService030(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('031'),
			$this->getService('021'),
			$this->getService('027'),
			$this->getService('024'),
			'/tmp/phpstan/.memory_limit',
			50
		);
	}


	public function createService031(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('052'),
			$this->getService('022'),
			$this->getService('051'),
			$this->getService('055')
		);
	}


	public function createService032(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('049'),
			$this->getService('027'),
			$this->getService('028'),
			$this->getService('024'),
			$this->getService('055'),
			$this->getService('052'),
			[],
			'/project',
			'/tmp/phpstan-fixer',
			32
		);
	}


	public function createService033(): PHPStan\Command\IgnoredRegexValidator
	{
		return new PHPStan\Command\IgnoredRegexValidator($this->getService('regexParser'), $this->getService('020'));
	}


	public function createService034(): PHPStan\Dependency\DependencyDumper
	{
		return new PHPStan\Dependency\DependencyDumper(
			$this->getService('035'),
			$this->getService('026'),
			$this->getService('053'),
			$this->getService('025'),
			$this->getService('fileFinderAnalyse')
		);
	}


	public function createService035(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('046'),
			$this->getService('reflectionProvider'),
			$this->getService('037')
		);
	}


	public function createService036(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('053'), $this->getService('038'));
	}


	public function createService037(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('0114'), $this->getService('05'));
	}


	public function createService038(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('037'));
	}


	public function createService039(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('040'));
	}


	public function createService040(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService041(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/project',
			'/tmp/phpstan',
			['phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon'],
			[],
			['/tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/..'],
			[],
			'0',
			null
		);
	}


	public function createService042(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('039'));
	}


	public function createService043(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('039'));
	}


	public function createService044(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('039'));
	}


	public function createService045(): PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('039'));
	}


	public function createService046(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/project');
	}


	public function createService047(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory($this->getService('048'), [], null);
	}


	public function createService048(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_603a05b954 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder(
					$this->container->getService('046'),
					$analyseExcludes,
					[
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
						'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
					]
				);
			}
		};
	}


	public function createService049(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor($this->getService('fileFinderAnalyse'));
	}


	public function createService050(): PHPStan\NodeVisitor\StatementOrderVisitor
	{
		return new PHPStan\NodeVisitor\StatementOrderVisitor;
	}


	public function createService051(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService052(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService053(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 1024);
	}


	public function createService054(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService055(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService056(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_603a05b954 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				$filename,
				bool $isPure = null
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('053'),
					$this->container->getService('054'),
					$this->container->getService('029'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename,
					$isPure
				);
			}
		};
	}


	public function createService057(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService058(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService059(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService060(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('059'),
			$this->getService('053')
		);
	}


	public function createService061(): PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\AutoloadSourceLocator($this->getService('060'));
	}


	public function createService062(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('064'),
			$this->getService('065'),
			$this->getService('063')
		);
	}


	public function createService063(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('060'),
			$this->getService('fileFinderScan')
		);
	}


	public function createService064(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('063'));
	}


	public function createService065(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_603a05b954 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('067'));
			}
		};
	}


	public function createService066(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_603a05b954 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('060'),
					$fileName
				);
			}
		};
	}


	public function createService067(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('066'));
	}


	public function createService068(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension([]);
	}


	public function createService069(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension([]);
	}


	public function createService070(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('025'),
			$this->getService('026'),
			$this->getService('071'),
			$this->getService('014'),
			$this->getService('057'),
			$this->getService('058'),
			$this->getService('080'),
			$this->getService('053'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('074'),
			$this->getService('0114'),
			false,
			['stdClass']
		);
	}


	public function createService071(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_603a05b954 $container)
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
				?string $stubPhpDocString,
				bool $isPure = null
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('053'),
					$this->container->getService('054'),
					$this->container->getService('029'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$stubPhpDocString,
					$isPure
				);
			}
		};
	}


	public function createService072(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService073(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass']);
	}


	public function createService074(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('039'));
	}


	public function createService075(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('080'),
			$this->getService('betterReflectionFunctionReflector'),
			$this->getService('0114'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createService076(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('020'));
	}


	public function createService077(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider($this->getService('076'), $this->getService('07'));
	}


	public function createService078(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('077'),
			$this->getService('060'),
			$this->getService('0114')
		);
	}


	public function createService079(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('07'),
			$this->getService('077'),
			$this->getService('078')
		);
	}


	public function createService080(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('079')->create();
	}


	public function createService081(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService082(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('094'),
			$this->getService('084')
		);
	}


	public function createService083(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0112'), false);
	}


	public function createService084(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'));
	}


	public function createService085(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('086'), true);
	}


	public function createService086(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass'],
			true
		);
	}


	public function createService087(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver($this->getService('reflectionProvider'), [], [], [], []);
	}


	public function createService088(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('090'));
	}


	public function createService089(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('090'));
	}


	public function createService090(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService091(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('093'));
	}


	public function createService092(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0114'), $this->getService('093'));
	}


	public function createService093(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck;
	}


	public function createService094(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0112'),
			$this->getService('0105'),
			$this->getService('07'),
			$this->getService('0107'),
			false,
			false,
			false,
			false,
			false
		);
	}


	public function createService095(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			$this->getService('07'),
			false,
			true,
			false
		);
	}


	public function createService096(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0112'));
	}


	public function createService097(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService098(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('099'),
			$this->getService('0101'),
			false,
			['RecursiveIterator', 'RecursiveArrayIterator', 'WeakMap']
		);
	}


	public function createService099(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0100(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			$this->getService('099'),
			$this->getService('0115'),
			false
		);
	}


	public function createService0101(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck;
	}


	public function createService0102(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0109'), $this->getService('0110'), false, false);
	}


	public function createService0103(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService0104(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(
			$this->getService('reflectionProvider'),
			false,
			false,
			false,
			['RecursiveIterator', 'RecursiveArrayIterator', 'WeakMap']
		);
	}


	public function createService0105(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0106(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('039'));
	}


	public function createService0107(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper(false);
	}


	public function createService0108(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('039'));
	}


	public function createService0109(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0110(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0111(): PHPStan\Rules\RegistryFactory
	{
		return new PHPStan\Rules\RegistryFactory($this->getService('039'));
	}


	public function createService0112(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('reflectionProvider'), false, true, false);
	}


	public function createService0113(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'));
	}


	public function createService0114(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('074'),
			$this->getService('053'),
			$this->getService('016'),
			$this->getService('015'),
			$this->getService('029'),
			$this->getService('06')
		);
	}


	public function createService0115(): PHPStan\Type\TypeAliasResolver
	{
		return new PHPStan\Type\TypeAliasResolver(
			[],
			$this->getService('020'),
			$this->getService('018'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0116(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0117(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('07'));
	}


	public function createService0118(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0119(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('07'));
	}


	public function createService0120(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
	}


	public function createService0121(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService0122(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension;
	}


	public function createService0123(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0124(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0125(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0126(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0127(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
	}


	public function createService0128(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0129(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0130(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0131(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0132(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0133(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0134(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0136(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0137(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
	}


	public function createService0138(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
	}


	public function createService0139(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0140(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0141(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension;
	}


	public function createService0142(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0143(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0144(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0145(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(false);
	}


	public function createService0146(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0147(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0148(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0149(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension;
	}


	public function createService0150(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension;
	}


	public function createService0151(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0152(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension;
	}


	public function createService0153(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0154(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0155(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('07'));
	}


	public function createService0156(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0157(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0158(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0159(): PHPStan\Type\Php\GetoptFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetoptFunctionDynamicReturnTypeExtension;
	}


	public function createService0160(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0161(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0162(): PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashHmacFunctionsReturnTypeExtension;
	}


	public function createService0163(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension;
	}


	public function createService0164(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0165(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0166(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0167(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0168(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0169(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0170(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0171(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0172(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0173(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0174(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0110'));
	}


	public function createService0175(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService0176(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0177(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService0178(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0179(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0180(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0181(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0182(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
	}


	public function createService0183(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension;
	}


	public function createService0184(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0185(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('07'));
	}


	public function createService0186(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0187(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0188(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0189(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0190(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0191(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0192(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0193(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension;
	}


	public function createService0194(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0195(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0196(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0197(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0198(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0199(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0200(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0201(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0202(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0203(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService0204(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0205(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
	}


	public function createService0206(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
	}


	public function createService0207(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
	}


	public function createService0208(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0209(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
	}


	public function createService0210(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0173'));
	}


	public function createService0211(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
	}


	public function createService0212(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
	}


	public function createService0213(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0214(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
	}


	public function createService0215(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
	}


	public function createService0216(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
	}


	public function createService0217(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
	}


	public function createService0218(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
	}


	public function createService0219(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
	}


	public function createService0220(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0221(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(true);
	}


	public function createService0222(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0223(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0224(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
	}


	public function createService0225(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0226(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0227(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0228(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0229(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0230(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0231(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0232(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0233(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0234(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0235(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0237'),
			$this->getService('0238'),
			$this->getService('067'),
			$this->getService('064'),
			$this->getService('062'),
			$this->getService('061'),
			$this->getService('039'),
			[],
			[],
			[],
			[],
			[],
			['/tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/..'],
			[],
			$this->parameters['singleReflectionFile'],
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#']
		);
	}


	public function createService0236(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_603a05b954 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflector\FunctionReflector $functionReflector,
				PHPStan\BetterReflection\Reflector\ClassReflector $classReflector,
				PHPStan\BetterReflection\Reflector\ConstantReflector $constantReflector
			): PHPStan\Reflection\BetterReflection\BetterReflectionProvider {
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('074'),
					$this->container->getService('042'),
					$classReflector,
					$this->container->getService('0114'),
					$this->container->getService('014'),
					$this->container->getService('07'),
					$this->container->getService('075'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('056'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('06'),
					$this->container->getService('05'),
					$this->container->getService('046'),
					$functionReflector,
					$constantReflector,
					$this->container->getService('0237')
				);
			}
		};
	}


	public function createService0237(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber($this->getService('php8PhpParser'));
	}


	public function createService0238(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0239(): PHPStan\Rules\Api\ApiInstantiationRule
	{
		return new PHPStan\Rules\Api\ApiInstantiationRule($this->getService('081'), $this->getService('reflectionProvider'));
	}


	public function createService0240(): PHPStan\Rules\Api\ApiClassExtendsRule
	{
		return new PHPStan\Rules\Api\ApiClassExtendsRule($this->getService('081'), $this->getService('reflectionProvider'));
	}


	public function createService0241(): PHPStan\Rules\Api\ApiClassImplementsRule
	{
		return new PHPStan\Rules\Api\ApiClassImplementsRule($this->getService('081'), $this->getService('reflectionProvider'));
	}


	public function createService0242(): PHPStan\Rules\Api\ApiInterfaceExtendsRule
	{
		return new PHPStan\Rules\Api\ApiInterfaceExtendsRule($this->getService('081'), $this->getService('reflectionProvider'));
	}


	public function createService0243(): PHPStan\Rules\Api\ApiMethodCallRule
	{
		return new PHPStan\Rules\Api\ApiMethodCallRule($this->getService('081'));
	}


	public function createService0244(): PHPStan\Rules\Api\ApiStaticCallRule
	{
		return new PHPStan\Rules\Api\ApiStaticCallRule($this->getService('081'), $this->getService('reflectionProvider'));
	}


	public function createService0245(): PHPStan\Rules\Api\ApiTraitUseRule
	{
		return new PHPStan\Rules\Api\ApiTraitUseRule($this->getService('081'), $this->getService('reflectionProvider'));
	}


	public function createService0246(): PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule
	{
		return new PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule($this->getService('081'));
	}


	public function createService0247(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('084'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0248(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			false
		);
	}


	public function createService0249(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			false
		);
	}


	public function createService0250(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false);
	}


	public function createService0251(): PHPStan\Rules\Functions\ClosureUsesThisRule
	{
		return new PHPStan\Rules\Functions\ClosureUsesThisRule;
	}


	public function createService0252(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule(
			$this->getService('reflectionProvider'),
			$this->getService('094'),
			$this->getService('0112'),
			false,
			false
		);
	}


	public function createService0253(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule(
			$this->getService('reflectionProvider'),
			$this->getService('094'),
			$this->getService('0112'),
			$this->getService('084'),
			false,
			false
		);
	}


	public function createService0254(): PHPStan\Rules\Constants\OverridingConstantRule
	{
		return new PHPStan\Rules\Constants\OverridingConstantRule(false);
	}


	public function createService0255(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule($this->getService('07'), $this->getService('0103'), false);
	}


	public function createService0256(): PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule
	{
		return new PHPStan\Rules\Missing\MissingClosureNativeReturnTypehintRule(false);
	}


	public function createService0257(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, false);
	}


	public function createService0258(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			false
		);
	}


	public function createService0259(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			false
		);
	}


	public function createService0260(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule(true);
	}


	public function createService0261(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0112'),
			false
		);
	}


	public function createService0262(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0112'),
			$this->getService('084')
		);
	}


	public function createService0263(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('084'),
			false,
			true
		);
	}


	public function createService0264(): PHPStan\Rules\Properties\OverridingPropertyRule
	{
		return new PHPStan\Rules\Properties\OverridingPropertyRule(false, false);
	}


	public function createService0265(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('0108'), []);
	}


	public function createService0266(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('0112'),
			$this->getService('0109'),
			$this->getService('0110'),
			true
		);
	}


	public function createService0267(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('0109'),
			$this->getService('0110'),
			$this->getService('0112'),
			true
		);
	}


	public function createService0268(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(false);
	}


	public function createService0269(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, false);
	}


	public function createService0270(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule;
	}


	public function createService0271(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createService0272(): PHPStan\Rules\Classes\LocalTypeAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesRule([], $this->getService('reflectionProvider'), $this->getService('018'));
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingConstantReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingFunctionReflector(
			$this->getService('betterReflectionSourceLocator'),
			$this->getService('betterReflectionClassReflector')
		);
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('074'),
			$this->getService('042'),
			$this->getService('betterReflectionClassReflector'),
			$this->getService('0114'),
			$this->getService('014'),
			$this->getService('07'),
			$this->getService('075'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('056'),
			$this->getService('relativePathHelper'),
			$this->getService('06'),
			$this->getService('05'),
			$this->getService('046'),
			$this->getService('betterReflectionFunctionReflector'),
			$this->getService('betterReflectionConstantReflector'),
			$this->getService('0237')
		);
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0235')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('039'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/tmp/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_603a05b954
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
			$this->getService('03'),
			$this->getService('04'),
			$this->getService('050')
		);
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('currentPhpVersionPhpParser'), $this->getService('03'));
	}


	public function createServiceErrorFormatter__baselineNeon(): PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\BaselineNeonErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter(
			$this->getService('simpleRelativePathHelper'),
			$this->getService('errorFormatter.table')
		);
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
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'), true);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('087');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('047')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('047')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderAnalyse'), $this->getService('046'), ['php']);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderScan'), $this->getService('046'), ['php']);
	}


	public function createServiceInnerRuntimeReflectionProvider(): PHPStan\Reflection\Runtime\RuntimeReflectionProvider
	{
		return new PHPStan\Reflection\Runtime\RuntimeReflectionProvider(
			$this->getService('074'),
			$this->getService('042'),
			$this->getService('056'),
			$this->getService('0114'),
			$this->getService('014'),
			$this->getService('07'),
			$this->getService('075'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('0237')
		);
	}


	public function createServiceNodeScopeResolverClassReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingClassReflector
	{
		return $this->getService('betterReflectionClassReflector');
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/project');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('046'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return new PhpParser\Lexer\Emulative;
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
		return new PHPStan\Parser\PhpParserDecorator($this->getService('053'));
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory(
			$this->getService('runtimeReflectionProvider'),
			$this->getService('betterReflectionProvider'),
			false
		);
	}


	public function createServiceRegexGrammarStream(): Hoa\File\Read
	{
		return new Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
	}


	public function createServiceRegexParser(): Hoa\Compiler\Llk\Parser
	{
		return Hoa\Compiler\Llk\Llk::load($this->getService('regexGrammarStream'));
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		return $this->getService('0111')->create();
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper($this->getService('parentDirectoryRelativePathHelper'), '/project', []);
	}


	public function createServiceRules__0(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('084'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__11(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('084'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__12(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule($this->getService('084'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__13(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('reflectionProvider'),
			$this->getService('094'),
			$this->getService('084')
		);
	}


	public function createServiceRules__14(): PHPStan\Rules\Classes\InvalidPromotedPropertiesRule
	{
		return new PHPStan\Rules\Classes\InvalidPromotedPropertiesRule($this->getService('07'));
	}


	public function createServiceRules__15(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule;
	}


	public function createServiceRules__16(): PHPStan\Rules\Classes\NonClassAttributeClassRule
	{
		return new PHPStan\Rules\Classes\NonClassAttributeClassRule;
	}


	public function createServiceRules__17(): PHPStan\Rules\Classes\TraitAttributeClassRule
	{
		return new PHPStan\Rules\Classes\TraitAttributeClassRule;
	}


	public function createServiceRules__18(): PHPStan\Rules\Constants\FinalConstantRule
	{
		return new PHPStan\Rules\Constants\FinalConstantRule($this->getService('07'));
	}


	public function createServiceRules__19(): PHPStan\Rules\Exceptions\ThrowExpressionRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExpressionRule($this->getService('07'));
	}


	public function createServiceRules__2(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('05'));
	}


	public function createServiceRules__20(): PHPStan\Rules\Functions\ArrowFunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionAttributesRule($this->getService('082'));
	}


	public function createServiceRules__21(): PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule($this->getService('0105'));
	}


	public function createServiceRules__22(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('094')
		);
	}


	public function createServiceRules__23(): PHPStan\Rules\Functions\ClosureAttributesRule
	{
		return new PHPStan\Rules\Functions\ClosureAttributesRule($this->getService('082'));
	}


	public function createServiceRules__24(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule($this->getService('095'));
	}


	public function createServiceRules__25(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('095'));
	}


	public function createServiceRules__26(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('095'));
	}


	public function createServiceRules__27(): PHPStan\Rules\Functions\FunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\FunctionAttributesRule($this->getService('082'));
	}


	public function createServiceRules__28(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createServiceRules__29(): PHPStan\Rules\Functions\ParamAttributesRule
	{
		return new PHPStan\Rules\Functions\ParamAttributesRule($this->getService('082'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Arrays\EmptyArrayItemRule
	{
		return new PHPStan\Rules\Arrays\EmptyArrayItemRule;
	}


	public function createServiceRules__30(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule($this->getService('07'));
	}


	public function createServiceRules__31(): PHPStan\Rules\Functions\ReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ReturnNullsafeByRefRule($this->getService('0105'));
	}


	public function createServiceRules__32(): PHPStan\Rules\Keywords\ContinueBreakInLoopRule
	{
		return new PHPStan\Rules\Keywords\ContinueBreakInLoopRule;
	}


	public function createServiceRules__33(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createServiceRules__34(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('095'));
	}


	public function createServiceRules__35(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createServiceRules__36(): PHPStan\Rules\Methods\MethodAttributesRule
	{
		return new PHPStan\Rules\Methods\MethodAttributesRule($this->getService('082'));
	}


	public function createServiceRules__37(): PHPStan\Rules\Operators\InvalidAssignVarRule
	{
		return new PHPStan\Rules\Operators\InvalidAssignVarRule($this->getService('0105'));
	}


	public function createServiceRules__38(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0261'));
	}


	public function createServiceRules__39(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0262'));
	}


	public function createServiceRules__4(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createServiceRules__40(): PHPStan\Rules\Properties\PropertyAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyAttributesRule($this->getService('082'));
	}


	public function createServiceRules__41(): PHPStan\Rules\Properties\ReadOnlyPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyRule($this->getService('07'));
	}


	public function createServiceRules__42(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule;
	}


	public function createServiceRules__5(): PHPStan\Rules\Cast\UnsetCastRule
	{
		return new PHPStan\Rules\Cast\UnsetCastRule($this->getService('07'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Classes\ClassAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassAttributesRule($this->getService('082'));
	}


	public function createServiceRules__7(): PHPStan\Rules\Classes\ClassConstantAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassConstantAttributesRule($this->getService('082'));
	}


	public function createServiceRules__8(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('0112'),
			$this->getService('084'),
			$this->getService('07')
		);
	}


	public function createServiceRules__9(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createServiceRuntimeReflectionProvider(): PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\ClassBlacklistReflectionProvider(
			$this->getService('innerRuntimeReflectionProvider'),
			$this->getService('0237'),
			['#^PhpParser\\\#', '#^PHPStan\\\#', '#^Hoa\\\#'],
			$this->parameters['singleReflectionInsteadOfFile']
		);
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/project');
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('053'),
			$this->getService('0114'),
			$this->getService('039'),
			[
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///tools/.composer/vendor-bin/phpstan/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
			]
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('039'));
	}


	public function initialize()
	{
	}
}
