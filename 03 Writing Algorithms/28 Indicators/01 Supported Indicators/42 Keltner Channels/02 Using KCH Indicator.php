<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$helperPrefix = '';
$typeName = 'KeltnerChannels';
$helperName = 'KCH';
$helperArguments = 'symbol, 20, 2, MovingAverageType.Simple';
$properties = array("MiddleBand","UpperBand","LowerBand","AverageTrueRange");
$updateParameterType = 'a <code>TradeBar</code>, or <code>QuoteBar</code>';
$constructorArguments = '20, 2, MovingAverageType.Simple';
$updateParameterValue = 'bar';
$hasMovingAverageTypeParameter = True;
$constructorBox = 'keltner-channels';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>